<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Result;
use DataTables;

class TTSResultController extends Controller
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

        if ($request->ajax()) {
            $data = Result::where('user_id', Auth::user()->id)->where('mode', 'file')->latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $url = ($row['storage'] == 'local') ? URL::asset($row['result_url']) : $row['result_url'];
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("user.tts.results.show", $row["id"] ). '"><i class="mdi mdi-audiobook"></i> View</a>
                                                <a class="dropdown-item" href="'. $url . '" download><i class="fa fa-cloud-download"></i> Download</a>
                                                <a class="dropdown-item" data-toggle="modal" id="deleteResultButton" data-target="#deleteModal" href="'. route("user.tts.result.delete", $row["id"] ). '"><i class="fa fa-trash"></i> Delete</a>
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
                    ->addColumn('result', function($row){
                        $result = ($row['storage'] == 'local') ? URL::asset($row['result_url']) : $row['result_url'];
                        return $result;
                    })
                    ->addColumn('vendor', function($row){
                        $path = URL::asset($row['vendor_img']);
                        $vendor = '<div class="vendor-image-sm overflow-hidden"><img alt="vendor" class="rounded-circle" src="' . $path . '"></div>';
                        return $vendor;
                    })
                    ->rawColumns(['actions', 'created-on', 'custom-voice-type', 'result', 'vendor'])
                    ->make(true);
                    
        }

        $config = config('tts.vendor_logos');

        return view('user.tts-results.index', compact('config'));
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

            return view('user.tts-results.show', compact('id'));     

        } else{
            return redirect()->route('user.tts.results');
        }
      
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::where('id', $id)->firstOrFail();  

        if ($result->user_id == Auth::user()->id){

            $result->delete();

            return redirect()->route('user.tts.results')->with('success', 'Synthesize result was deleted successfully');
        
        } else{
            return redirect()->route('user.tts.results');
        }               
    }

    public function delete($id)
    {   
        $result = Result::where('id', $id)->firstOrFail();

        if ($result->user_id == Auth::user()->id){

            return view('user.tts-results.delete', compact('result'));     

        } else{
            return redirect()->route('user.tts.results');
        }    
    }
}
