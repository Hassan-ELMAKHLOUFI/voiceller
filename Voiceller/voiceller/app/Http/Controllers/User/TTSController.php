<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
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
use Carbon\Carbon;
use DataTables;
use DB;


class TTSController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        # Today's TTS Results for Datatable
        if ($request->ajax()) {
            $data = Result::where('user_id', Auth::user()->id)->where('mode', 'file')->whereDate('created_at', Carbon::today())->latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $url = ($row['storage'] == 'local') ? URL::asset($row['result_url']) : $row['result_url'];
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("user.tts.show", $row["id"] ). '"><i class="mdi mdi-audiobook"></i> View</a>
                                                <a class="dropdown-item" href="'. $url. '" download><i class="fa fa-cloud-download"></i> Download</a>
                                                <a class="dropdown-item" data-toggle="modal" id="deleteResultButton" data-target="#deleteModal" href="'. route("user.tts.delete", $row["id"] ). '"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('custom-voice-type', function($row){
                        $custom_voice = '<span class="cell-box voice-'.strtolower($row["voice_type"]).'">'.ucfirst($row["voice_type"]).'</span>';
                        return $custom_voice;
                    })
                    ->addColumn('vendor', function($row){
                        $path = URL::asset($row['vendor_img']);
                        $vendor = '<div class="vendor-image-sm overflow-hidden"><img alt="vendor" src="' . $path . '"></div>';
                        return $vendor;
                    })
                    ->addColumn('result', function($row){
                        $result = ($row['storage'] == 'local') ? URL::asset($row['result_url']) : $row['result_url'];
                        return $result;
                    })
                    ->rawColumns(['actions', 'created-on', 'custom-voice-type', 'result', 'vendor'])
                    ->make(true);

        }

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
        $max_chars = config('tts.max_chars_limit');
        $config = config('settings.vendor_logos');

        return view('user.tts.index', compact('languages', 'voices', 'max_chars', 'config'));
    }


    /**
     * Process text synthesize request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function synthesize(Request $request)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        if ($request->ajax()) {

            request()->validate([
                'voice' => 'required',
                'format' => 'required',
                'title' => 'nullable|string|max:255',
                'textarea' => 'required',
                'language' => 'required',
            ]);

            $voice = Voice::where('voice_id', request('voice'))->first();
            $language = Language::where('language_code', request('language'))->first();
            $plan_type = (Auth::user()->group == 'subscriber') ? 'paid' : 'free';
            $text_orginal = preg_replace('/<[\s\S]+?>/', '', request('textarea'));


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
            if (Auth::user()->available_chars < $total_characters) {
                return response()->json(["error" => "Not enough available characters to process. Subscribe or Top up to get more!"], 422);
            } else {
                $this->updateAvailableCharacters($total_characters);
            }


            # Name and extention of the result audio file
            if (request('format') === 'mp3') {
                $file_name = Str::random(20) . '.mp3';
            } elseif (request('format') === 'ogg_vorbis' || request('format') === 'ogg')  {
                $file_name = Str::random(20) .'.ogg';
            } elseif (request('format') === 'webm') {
                $file_name = Str::random(20) .'.webm';
            } elseif (request('format') === 'wav') {
                $file_name = Str::random(20) .'.wav';
            } else {
                return response()->json(["error" => "Unsupported audio file extension was selected. Please try again."], 422);
            }


            $result_url = $this->processText($voice, request('textarea'), request('format'), $total_characters, $file_name);


            # Audio Format
            if (request('format') == 'mp3') {
                $audio_type = 'audio/mpeg';
            } elseif (request('format') == 'ogg_vorbis' || request('format') == 'ogg') {
                $audio_type = 'audio/ogg';
            } elseif(request('format') == 'wav') {
                $audio_type = 'audio/wav';
            } elseif(request('format') == 'webm') {
                $audio_type = 'audio/webm';
            }


            $result = new Result([
                'user_id' => Auth::user()->id,
                'language' => $language->language,
                'voice' => $voice->voice,
                'voice_id' => request('voice'),
                'gender' => $voice->gender,
                'text' => $text_orginal,
                'text_raw' => request('textarea'),
                'characters' => $total_characters,
                'file_name' => $file_name,
                'result_url' => $result_url,
                'result_ext' => request('format'),
                'title' => request('title'),
                'vendor_img' => $voice->vendor_img,
                'voice_type' => $voice->voice_type,
                'vendor' => $voice->vendor,
                'vendor_id' => $voice->vendor_id,
                'storage' => config('tts.default_storage'),
                'plan_type' => $plan_type,
                'audio_type' => $audio_type,
                'mode' => 'file',
            ]);

            $result->save();

            return response()->json(["success" => "Success! Text was synthesized successfully"], 200);

        }
    }


    /**
     * Process listen synthesize request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listen(Request $request)
    {
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        if ($request->ajax()) {

            request()->validate([
                'voice' => 'required',
                'format' => 'required',
                'textarea' => 'required',
                'language' => 'required',
            ]);

            $text_orginal = preg_replace('/<[\s\S]+?>/', '', request('textarea'));
            $plan_type = (Auth::user()->group == 'subscriber') ? 'paid' : 'free';
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
            if (Auth::user()->available_chars < $total_characters) {
                return response()->json(["error" => "Not enough available characters to process. Subscribe or Top up to get more!"], 422);
            } else {
                $this->updateAvailableCharacters($total_characters);
            }


            # Name and extention of the audio file
            if (request('format') == 'mp3') {
                $file_name = 'LISTEN--' . Str::random(20) . '.mp3';
            } elseif (request('format') === 'ogg_vorbis' || request('format') === 'ogg')  {
                $file_name = Str::random(20) .'.ogg';
            } elseif (request('format') === 'webm') {
                $file_name = Str::random(20) .'.webm';
            } elseif (request('format') === 'wav') {
                    $file_name = Str::random(20) .'.wav';
            } else {
                return response()->json(["error" => "Unsupported audio file extension was selected. Please try again."], 422);
            }


            $result_url = $this->processText($voice, request('textarea'), request('format'), $total_characters, $file_name);


            $result = new Result([
                'user_id' => Auth::user()->id,
                'language' => $language->language,
                'voice' => $voice->voice,
                'characters' => $total_characters,
                'voice_type' => $voice->voice_type,
                'vendor' => $voice->vendor,
                'vendor_id' => $voice->vendor_id,
                'plan_type' => $plan_type,
                'mode' => 'live',
            ]);

            $result->save();


            $data = [];

            if (request('format') == 'mp3') {
                $data['audio_type'] = 'audio/mpeg';
            } elseif (request('format') == 'ogg_vorbis' || request('format') == 'ogg') {
                $data['audio_type'] = 'audio/ogg';
            } elseif(request('format') == 'wav') {
                $data['audio_type'] = 'audio/wav';
            } elseif(request('format') == 'webm') {
                $data['audio_type'] = 'audio/webm';
            }


            if (config('tts.default_storage') == 'local')
                $data['url'] = URL::asset($result_url);
            else
                $data['url'] = $result_url;

            return $data;
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Result $id)
    {
        if ($id->user_id == Auth::user()->id){

            return view('user.tts.show', compact('id'));

        } else{
            return redirect()->route('user.tts');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::where('id', $id)->firstOrFail();

        if ($result->user_id == Auth::user()->id){

            if ($result->storage == 'local') {
                Storage::delete('user/synthesize/' . $result->file_name);
            } elseif ($result->storage == 's3') {
                Storage::disk('s3')->delete($result->result_url);
            }

            $result->delete();

            return redirect()->route('user.tts')->with('success', 'Synthesize result was deleted successfully');

        } else{
            return redirect()->route('user.tts');
        }
    }


    public function delete($id)
    {
        $result = Result::where('id', $id)->firstOrFail();

        if ($result->user_id == Auth::user()->id){

            return view('user.tts.delete', compact('result'));

        } else{
            return redirect()->route('user.tts');
        }
    }


    /**
     * Update user characters number
     */
    private function updateAvailableCharacters($characters)
    {
        $total_chars = Auth::user()->available_chars - $characters;

        $user = User::find(Auth::user()->id);
        $user->available_chars = $total_chars;
        $user->update();
    }


    /**
     * Count Azure charcters which, some are countes as 2
     */
    private function countAzureCharacters(Voice $voice, $text)
    {
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
