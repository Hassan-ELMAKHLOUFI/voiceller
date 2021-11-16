<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;

class GlobalController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display global settings
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.global.index');
    }


    /**
     * Store global settings 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        request()->validate([
            'enable-recaptcha' => 'sometimes|required',
            'recaptcha-site-key' => 'required_if:enable-recaptcha,on',
            'recaptcha-secret-key' => 'required_if:enable-recaptcha,on',

            'enable-maps' => 'sometimes|required',
            'google-key' => 'required_if:enable-maps,on',

            'enable-analytics' => 'sometimes|required',
            'google-analytics' => 'required_if:enable-analytics,on',

            'site-name' => 'required|string',
            'site-website' => 'required',
        ]);  

        $this->storeSettings('GOOGLE_RECAPTCHA_ENABLE', request('enable-recaptcha'));
        $this->storeSettings('GOOGLE_RECAPTCHA_SITE_KEY', request('recaptcha-site-key'));
        $this->storeSettings('GOOGLE_RECAPTCHA_SECRET_KEY', request('recaptcha-secret-key'));

        $this->storeSettings('GOOGLE_MAPS_ENABLE', request('enable-maps'));
        $this->storeSettings('GOOGLE_MAPS_KEY', request('google-key'));

        $this->storeSettings('GOOGLE_ANALYTICS_ENABLE', request('enable-analytics'));
        $this->storeSettings('GOOGLE_ANALYTICS_ID', request('google-analytics'));

        if (config('app.name') == 'CloudPolly') {
            $newName = "'". request('site-name') . "'";
            $this->storeSettings('APP_NAME', $newName);
        } else {
            $newName = "'". request('site-name') . "'";
            $this->storeWithQuotes('APP_NAME', $newName);
        }
        
        $this->storeSettings('APP_URL', request('site-website'));
        $this->storeSettings('APP_EMAIL', request('site-email'));

        $this->storeSettings('APP_TIMEZONE', request('time-zone'));

        $this->storeSettings('GENERAL_SETTINGS_DEFAULT_USER_GROUP', request('user-group'));

       
        # Enable/Disable GDRP Cookie
        if (request('enable-gdpr') == 'on') {
            $this->storeSettings('COOKIE_CONSENT_ENABLED', true);
        } else {
            $this->storeSettings('COOKIE_CONSENT_ENABLED', false);
        }

        return redirect()->back()->with('success', 'Global settings were successfully updated');
    }
    

    /**
     * Record in .env file
     */
    private function storeSettings($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
            ));

        }
    }

    private function storeWithQuotes($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . '\'' . env($key) . '\'', $key . '=' . $value, file_get_contents($path)
            ));

        }
    }
}
