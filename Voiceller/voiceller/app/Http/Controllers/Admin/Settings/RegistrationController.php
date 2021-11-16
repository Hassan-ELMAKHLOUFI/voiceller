<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;


class RegistrationController extends Controller
{
    /**
     * Display registration settings
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.registration.index');
    }


    /**
     * Store registration settings in env file
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'registration' => 'required',
            'email-verification' => 'required',
        ]);

        $this->storeSettings('GENERAL_SETTINGS_REGISTRATION', request('registration'));
        $this->storeSettings('GENERAL_SETTINGS_EMAIL_VERIFICATION', request('email-verification'));
  

        return redirect()->back()->with('success', 'Registration settings successfully updated');
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


}
