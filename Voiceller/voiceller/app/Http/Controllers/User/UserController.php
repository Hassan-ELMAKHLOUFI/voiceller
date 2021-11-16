<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Services\Statistics\UserUsageYearlyService;
use App\Services\Statistics\UserUsageMonthlyService;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use App\Models\Plan;
use App\Models\User;


class UserController extends Controller
{
    use Notifiable;

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
                
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));

        $usage_yearly = new UserUsageYearlyService($year);
        $usage_monthly = new UserUsageMonthlyService($month);

        $user_data_year = [
            'total_standard_chars' => $usage_yearly->getTotalStandardCharsUsage(),
            'total_neural_chars' => $usage_yearly->getTotalNeuralCharsUsage(),
            'total_audio_files' => $usage_yearly->getTotalAudioFiles(),
            'total_listen_mode' => $usage_yearly->getTotalListenModes(),
        ];

        $user_data_month = [
            'total_standard_chars' => $usage_monthly->getTotalStandardCharsUsage(),
            'total_neural_chars' => $usage_monthly->getTotalNeuralCharsUsage(),
            'total_audio_files' => $usage_monthly->getTotalAudioFiles()
        ];
        
        $chart_data['standard_chars'] = json_encode($usage_yearly->getStandardCharsUsage());
        $chart_data['neural_chars'] = json_encode($usage_yearly->getNeuralCharsUsage());

        $user_subscription = (auth()->user()->hasActiveSubscription()) ? Plan::where('id', auth()->user()->plan_id)->firstOrFail() : '';        

        return view('user.profile.index', compact('chart_data', 'user_data_year', 'user_data_month', 'user_subscription'));           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        User::create(request()->validate([
            'name' => request('name'),
            'email' => request('email'),
        ]));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {   
        return view('user.profile.edit');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {   
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        $user->update(request()->validate([
            'name' => 'required|string|max:255',
            'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($user)],
            'job_role' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'phone_number' => 'nullable|max:20',
            'address' => 'nullable|string|max:255',            
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country' => 'string|max:255',
        ]));
        
        if (request()->has('profile_photo')) {

            request()->validate([
                'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048'
            ]);
            
            $image = request()->file('profile_photo');

            $name = Str::random(20);
         
            $folder = '/uploads/img/users/';
          
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            
            $this->uploadImage($image, $folder, 'public', $name);

            $user->profile_photo_path = $filePath;

            $user->save();
        }

        return redirect()->route('user.profile.edit', compact('user'))->with('success','Profile Successfully Updated');

    }


    /**
     * Upload user profile image
     */
    public function uploadImage(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $image = $file->storeAs($folder, $name .'.'. $file->getClientOriginalExtension(), $disk);

        return $image;
    }


}
