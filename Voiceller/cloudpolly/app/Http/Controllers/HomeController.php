<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\AWSTTSService;
use App\Services\AzureTTSService;
use App\Services\GCPTTSService;
use App\Services\IBMTTSService;
use App\Models\Result;
use App\Models\User;
use App\Models\Language;
use App\Models\Voice;
use App\Models\PrepaidPlan;
use App\Models\Setting;
use App\Models\Plan;
use App\Models\Blog;
use DB;

class HomeController extends Controller
{
    /**
     * Show home page
     */
    public function index()
    {
        # Set Voice Types as Listed in TTS Config
        if (config('tts.voice_type') == 'standard') {
            $languages = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->join('languages', 'voices.language_code', '=', 'languages.language_code')
                ->where('vendors.enabled', '1')
                ->where('voices.voice_type', 'standard')
                ->select('languages.id', 'languages.language', 'voices.language_code', 'languages.language_flag')                
                ->distinct()
                ->orderBy('languages.id', 'asc')
                ->get();

            $voices = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->where('vendors.enabled', '1')
                ->where('voices.voice_type', 'standard')
                ->get();

        } elseif (config('tts.voice_type') == 'neural') {
            $languages = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->join('languages', 'voices.language_code', '=', 'languages.language_code')
                ->where('vendors.enabled', '1')
                ->where('voices.voice_type', 'neural')
                ->select('languages.id', 'languages.language', 'voices.language_code', 'languages.language_flag')                
                ->distinct()
                ->orderBy('languages.id', 'asc')
                ->get();

            $voices = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->where('vendors.enabled', '1')
                ->where('voices.voice_type', 'neural')
                ->get();

        } else {
            $languages = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->join('languages', 'voices.language_code', '=', 'languages.language_code')
                ->where('vendors.enabled', '1')
                ->select('languages.id', 'languages.language', 'voices.language_code', 'languages.language_flag')                
                ->distinct()
                ->orderBy('languages.id', 'asc')
                ->get();

            $voices = DB::table('voices')
                ->join('vendors', 'voices.vendor_id', '=', 'vendors.vendor_id')
                ->where('vendors.enabled', '1')
                ->get();
        }
        
        # Max Chars for Textarea and Textarea Counter
        $max_chars = config('frontend.synthesize.max_chars');
        $config = config('settings.vendor_logos');        

        $information = $this->metadataInformation();

        return view('home', compact('information', 'languages', 'voices', 'max_chars', 'config'));
    }


    /**
     * Display terms & conditions page
     * 
     */
    public function termsAndConditions() 
    {
        $information = $this->metadataInformation();

        return view('auth.service-terms', compact('information'));
    }


    /**
     * Display privacy policy page
     * 
     */
    public function privacyPolicy() 
    {
        $information = $this->metadataInformation();

        return view('auth.privacy-policy', compact('information'));
    }


    /**
     * Frontend about us
     * 
     */
    public function about()
    {
        $information = $this->metadataInformation();

        return view('about', compact('information'));
    }


    /**
     * Frontend all voices
     * 
     */
    public function voices()
    {
        $information = $this->metadataInformation();

        return view('voices', compact('information'));
    }


    /**
     * Frontend plan prices
     * 
     */
    public function pricing()
    {
        $information = $this->metadataInformation();

        $plan = Plan::count();

        $prepaid_exists = PrepaidPlan::count();

        $subscriptions = Plan::where('plan_type', 'subscription')
                             ->where('status', 'active')->get();
        $prepaids = PrepaidPlan::where('plan_type', 'prepaid')
                        ->where('status', 'active')->get();

        return view('pricing', compact('information', 'plan', 'prepaid_exists', 'subscriptions', 'prepaids'));
    }


    /**
     * Frontend blogs
     * 
     */
    public function blogs()
    {
        $blog_exists = Blog::count();

        $blogs = Blog::where('status', 'published')->get();

        $information = $this->metadataInformation();

        return view('blogs', compact('information', 'blog_exists', 'blogs'));
    }


    /**
     * Frontend show blog
     * 
     */
    public function blogShow($slug)
    {
        $blog = Blog::where('url', $slug)->firstOrFail();

        $information = $this->metadataInformation();

        return view('blog-show', compact('information', 'blog'));
    }


    /**
     * Frontend contact us form show
     * 
     */
    public function contactForm()
    {
        $information = $this->metadataInformation();

        return view('contact', compact('information'));
    }


    /**
     * Frontend contact us form record
     * 
     */
    public function contact()
    {
        request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'category' => 'required',
            'message' => 'required|string',
        ]);

        if (config('services.google.recaptcha.enable') == 'on') {

            $recaptchaResult = $this->reCaptchaCheck(request('recaptcha'));

            if ($recaptchaResult->success != true) {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }

            if ($recaptchaResult->score >= 0.5) {

                Mail::send(array(), array(), function ($message) {
                    $message->from(request('email'), request('name'));
                    $message->cc(request('email'));
                    $message->to(config('mail.from.address'));
                    $message->subject(request('category'));
                    $message->setBody(request('message'));
                });

                if (Mail::failures()) {
                    return redirect()->back()->with('error', 'Sending email failed, please try again.');
                }

                return redirect()->back()->with('success', 'Email was successfully sent');

            } else {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }
        
        } else {

            Mail::send(array(), array(), function ($message) {
                $message->from(request('email'), request('name'));
                $message->cc(request('email'));
                $message->to(config('mail.from.address'));
                $message->subject(request('category'));
                $message->setBody(request('message'));
            });

            if (Mail::failures()) {
                return redirect()->back()->with('error', 'Sending email failed, please try again.');
            }

            return redirect()->back()->with('success', 'Email was successfully sent');
        }  
    }


    /**
     * Verify reCaptch for frontend contact us page (if enabled)
     * 
     */
    private function reCaptchaCheck($recaptcha)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $data = [
                'secret' => config('services.google.recaptcha.secret_key'),
                'response' => $recaptcha,
                'remoteip' => $remoteip
        ];

        $options = [
                'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
                ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        return $resultJson;
    }


    public function metadataInformation()
    {
        $information_rows = ['title', 'author', 'keywords', 'description'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        return $information;
    }


    /**
     * Process listen synthesize request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listen(Request $request)
    {   
        if ($request->ajax()) {
        
            request()->validate([                
                'voice' => 'required',
                'textarea' => 'required',
                'language' => 'required',
            ]);
            
            $text_orginal = preg_replace('/<[\s\S]+?>/', '', request('textarea')); 
            $voice = Voice::where('voice_id', request('voice'))->first();
            $language = Language::where('language_code', request('language'))->first();


            # Count characters based on vendor requirements
            switch ($voice->vendor) {
                case 'aws':                        
                        $total_characters = mb_strlen($text_orginal, 'UTF-8');
                    break;
                case 'gcp':
                case 'ibm':
                        $total_characters = mb_strlen(request('textarea'), 'UTF-8');
                    break;
                case 'azure':
                        $total_characters = $this->countAzureCharacters($voice, request('textarea'));
                    break;
            }
            
            
            # Check if user has characters available to proceed
            $user = User::where('id', 1)->firstOrFail();
            if ($user->available_chars < $total_characters) {
                return response()->json(["error" => "Not enough available characters to process. Subscribe or Top up to get more!"], 422);
            } else {
                $this->updateAvailableCharacters($total_characters, $user);
            } 
            

            # Name and extention of the audio file
            $file_name = 'LISTEN--' . Str::random(20) . '.mp3'; 


            $result_url = $this->processText($voice, request('textarea'), 'mp3', $total_characters, $file_name);


            $result = new Result([
                'user_id' => 1,
                'language' => $language->language,
                'voice' => $voice->voice,
                'characters' => $total_characters,
                'voice_type' => $voice->voice_type,
                'vendor' => $voice->vendor,
                'vendor_id' => $voice->vendor_id,
                'plan_type' => 'free',
                'mode' => 'live',
            ]); 
                   
            $result->save();


            $data = [];

            $data['audio_type'] = 'audio/mpeg';

            
            if (config('tts.default_storage') == 'local') 
                $data['url'] = URL::asset($result_url);  
            else            
                $data['url'] = $result_url; 
            
            return $data;
        }
    }


    /**
     * Update user characters number
     */
    private function updateAvailableCharacters($characters, User $user)
    {
        $total_chars = $user->available_chars - $characters;

        $user = User::find($user->id);
        $user->available_chars = $total_chars;
        $user->update();
    }

    
    /**
     * Count Azure charcters which, some are countes as 2
     */
    private function countAzureCharacters(Voice $voice, $text) {

        switch ($voice->language_code) {
            case 'zh-HK':
            case 'zh-CN':
            case 'zh-TW':
            case 'ja-JP':
            case 'ko-KR':
                    $total_characters = mb_strlen($text, 'UTF-8') * 2;
                break;            
            default:
                    $total_characters = mb_strlen($text, 'UTF-8');
                break;
        }

        return $total_characters;
    }


    /**
     * Process text synthesizes based on the vendor/voice selected
     */
    private function processText(Voice $voice, $text, $format, $text_length, $file_name)
    {   
        $aws = new AWSTTSService();
        $gcp = new GCPTTSService();
        $ibm = new IBMTTSService();
        $azure = new AzureTTSService();
        
        switch($voice->vendor) {
            case 'aws':
                return $aws->startTask($voice, $text, $format, $text_length, $file_name);
                break;
            case 'azure':
                return $azure->synthesizeSpeech($voice, $text, $format, $file_name);
                break;
            case 'gcp':
                return $gcp->synthesizeSpeech($voice, $text, $format, $file_name);
                break;
            case 'ibm':
                return $ibm->synthesizeSpeech($voice, $text, $format, $file_name);
                break;
        }
    }
}
