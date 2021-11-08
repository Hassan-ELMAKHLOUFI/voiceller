<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Services\Statistics\UserService;
use App\Models\Voice;

class IBMTTSService 
{
    private $apiKey;
    private $watsonUrl;
    private $api;
    

    public function __construct()
    {
        $this->api = new UserService();

        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            return false;
        }

        $this->apiKey = config('services.ibm.api_key');         
        $this->watsonUrl = config('services.ibm.endpoint_url');        
    }


    /**
     * Synthesize text via IBM text to speech feature
     *
     * 
     */
    public function synthesizeSpeech(Voice $voice, $text, $format, $file_name)
    {  
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        $languageAndVoice = $voice->voice_id;
        $ssml_text = '<speak version="1.0">' . $text . '</speak>';
        $textJson = json_encode(['text' => $ssml_text]);
        
        $watsonEndpoint = $this->watsonUrl . '/v1/synthesize?voice=' . $languageAndVoice;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $watsonEndpoint);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERPWD, 'apikey:' . $this->apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: audio/' . $format,
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $textJson);

        $audio_stream = curl_exec($ch);      
        
        if (curl_errno($ch)) {
            return response()->json(["error" => "IBM Synthesize Error. Please notify support team."], 422);
            Log::error(curl_error($ch) . ' ' . $audio_stream);
        }

        curl_close($ch);

        if (config('tts.default_storage') === 's3') {
            Storage::disk('s3')->put('ibm/' . $file_name, $audio_stream);
            $result = Storage::disk('s3')->url('ibm/' . $file_name);    
        } elseif (config('tts.default_storage') == 'wasabi') {
            Storage::disk('wasabi')->put('ibm/' . $file_name, $audio_stream);
            $result = Storage::disk('wasabi')->url('ibm/' . $file_name);                
        } else {                
            Storage::disk('audio')->put($file_name, $audio_stream); 
            $result = Storage::url($file_name);                
        }

        return $result;
    }
}