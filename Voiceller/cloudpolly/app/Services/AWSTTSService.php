<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\Statistics\UserService;
use App\Models\Voice;
use Aws\Polly\PollyClient;  
use Aws\Exception\AwsException;
use Aws\Credentials\Credentials;

class AWSTTSService 
{
    private $client;
    private $api;

    /**
     * Create Amazon Polly Client
     *
     * 
     */
    public function __construct()
    {   
        $this->api = new UserService();

        try {

            $credentials = new Credentials(config('services.aws.key'), config('services.aws.secret'));

            $this->client = new PollyClient([
                'region'      => config('services.aws.region'),
                'version'     => 'latest',
                'credentials' => $credentials
            ]);

        } catch (AwsException $e) {
            return response()->json(["exception" => "Credentials are incorrect. Please notify support team."], 422);
            Log::error($e->getMessage());
        }

    }
    
    
    /**
     * Depending on the text size, call proper sythesize function
     *
     * 
     */
    public function startTask(Voice $voice, $text, $format, $text_length, $file_name)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            return false;
        }

        if ($text_length < 3000) {
            return $this->synthesizeSpeech($voice, $text, $format, $file_name);            
        } else {
            return $this->startSpeechSynthesisTask($voice, $text, $format);
        }

    }


    /**
     * Synthesize text less than 3000 billable characters
     *
     * @return result link (local or S3)
     */
    private function synthesizeSpeech(Voice $voice, $text, $format, $file_name)
    {
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        try {           

            $language = ($voice->voice_id == 'ar-aws-std-zeina') ? 'arb' : $voice->language_code;

            $text = preg_replace("/\&/", "&amp;", $text);
            $text = preg_replace("/(^|(?<=\s))<((?=\s)|$)/i", "&lt;", $text);
            $text = preg_replace("/(^|(?<=\s))>((?=\s)|$)/i", "&gt;", $text);  
            
            $ssml_text = "<speak>" . $text . "</speak>";

            # Create synthesize job
            $polly_result = $this->client->synthesizeSpeech([
                'Engine' => $voice->voice_type,
                'LanguageCode' => $language,
                'Text' => $ssml_text,
                'TextType' => 'ssml',
                'OutputFormat' => $format,		
                'VoiceId' => $voice->voice,					
            ]);


            $audio_stream = $polly_result->get('AudioStream')->getContents();


            if (config('tts.default_storage') == 's3') {
                Storage::disk('s3')->put('aws/' . $file_name, $audio_stream);
                $result = Storage::disk('s3')->url('aws/' . $file_name);    
            } elseif (config('tts.default_storage') == 'wasabi') {
                Storage::disk('wasabi')->put('aws/' . $file_name, $audio_stream);
                $result = Storage::disk('wasabi')->url('aws/' . $file_name);                
            } else {                
                Storage::disk('audio')->put($file_name, $audio_stream); 
                $result = Storage::url($file_name);                
            }


        } catch (AwsException $e) {            
            return response()->json(["error" => "AWS Start Synthesize Speech Task Error. Please try again or send a support request."], 422);
            Log::error($e->getMessage());
        } 

        return  $result;        
    }


    /**
     * Synthesize text between 3000 < text > 100000 billable characters
     *
     * @return S3 result url link
     */
    private function startSpeechSynthesisTask(Voice $voice, $text, $format)
    {
        $language = ($voice->voice_id == 'ar-aws-std-zeina') ? 'arb' : $voice->language_code;

        $text = preg_replace("/\&/", "&amp;", $text);
        $text = preg_replace("/(^|(?<=\s))<((?=\s)|$)/i", "&lt;", $text);
        $text = preg_replace("/(^|(?<=\s))>((?=\s)|$)/i", "&gt;", $text);  

        $ssml_text = "<speak>" . $text . "</speak>";

        try {

            $polly_result = $this->client->startSpeechSynthesisTask([
                'Engine' => $voice->voice_type,
                'LanguageCode' => $language,
                'OutputFormat' => $format, 
                'OutputS3BucketName' => config('services.aws.bucket'),
                'OutputS3KeyPrefix' => 'aws/',
                'Text' => $ssml_text,
                'TextType' => 'ssml',
                'VoiceId' => $voice->voice
            ]);


            if ($polly_result['@metadata']['statusCode'] == '200') {
                return $polly_result['SynthesisTask']['OutputUri'];
            }
        
        } catch (AwsException $e) { 
            return response()->json(["error" => "AWS Start Synthesize Speech Task Error. Please try again or send a support request."], 422);
            Log::error($e->getMessage());
        }
    }

}