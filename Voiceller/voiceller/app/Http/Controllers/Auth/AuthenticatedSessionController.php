<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $information_rows = ['title', 'author', 'keywords', 'description'];
        $information = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $information_rows)) {
                $information[$row['name']] = $row['value'];
            }
        }

        return view('auth.login', compact('information'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {   
        if (config('services.google.recaptcha.enable') == 'on') {

            $recaptchaResult = $this->reCaptchaCheck(request('recaptcha'));

            if ($recaptchaResult->success != true) {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }

            if ($recaptchaResult->score >= 0.5) {

                $request->authenticate();

                $request->session()->regenerate();
	
				if (auth()->user()->hasRole('admin')) {
					return redirect()->route('admin.dashboard');            
				}
			
                return redirect()->intended(RouteServiceProvider::HOME);  

            } else {
                return redirect()->back()->with('error', 'Google reCaptcha Validation has Failed');
            }

        } else {
            
            $request->authenticate();

            $request->session()->regenerate();
			
			if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.dashboard');            
            }
			
            return redirect()->intended(RouteServiceProvider::HOME);  
        }
              
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


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

}
