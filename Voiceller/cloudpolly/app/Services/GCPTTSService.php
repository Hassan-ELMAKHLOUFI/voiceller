<?php

namespace App\Services;

use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SsmlVoiceGender;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use App\Services\Statistics\UserService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Voice;
use Exception;

class GCPTTSService 
{
    private $client;
    private $api;

    /**
     * Initialize GCP client
     *
     * 
     */
    public function __construct()
    {
        $this->api = new UserService();

        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            return false;
        }

        try {

            $credentials = config('services.gcp.key_path');

            $this->client = new TextToSpeechClient([
                'credentials' => json_decode(file_get_contents($credentials), true),
            ]);           

        } catch (Exception $e) {
            return response()->json(["exception" => "Credentials are incorrect. Please notify support team."], 422);
            Log::error($e->getMessage());
        }
    }


    /**
     * Synthesize text less than 5000 characters
     *
     * @return result link (local or S3)
     */
    public function synthesizeSpeech(Voice $voice, $text, $format, $file_name)
    {   
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        $text = preg_replace("/\&/", "&amp;", $text);
        $text = preg_replace("/(^|(?<=\s))<((?=\s)|$)/i", "&lt;", $text);
        $text = preg_replace("/(^|(?<=\s))>((?=\s)|$)/i", "&gt;", $text);

        $ssml_text = '<speak>' . $text . '</speak>'; 
        $audio_encoding = ($format == 'mp3') ? AudioEncoding::MP3 : AudioEncoding::LINEAR16;  
        
        $input_text = (new SynthesisInput())
                    ->setSsml($ssml_text);

        $input_voice = (new VoiceSelectionParams())
                    ->setLanguageCode($voice->language_code)
                    ->setName($voice->voice_id);
        
        $audio_config = (new AudioConfig())
                    ->setAudioEncoding($audio_encoding);
        
        $response = $this->client->synthesizeSpeech($input_text, $input_voice, $audio_config);
        $audio_stream = $response->getAudioContent();        

        if (config('tts.default_storage') === 's3') {
            Storage::disk('s3')->put('gcp/' . $file_name, $audio_stream);
            $result = Storage::disk('s3')->url('gcp/' . $file_name);    
        } elseif (config('tts.default_storage') == 'wasabi') {
            Storage::disk('wasabi')->put('gcp/' . $file_name, $audio_stream);
            $result = Storage::disk('wasabi')->url('gcp/' . $file_name);                
        } else {                
            Storage::disk('audio')->put($file_name, $audio_stream); 
            $result = Storage::url($file_name);                
        }

        return $result;
    }
    
    


}