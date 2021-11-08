<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Events\RegistrationReferrerBonus;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Exception;

class SocialAuthController extends Controller
{   
    /**
     * Login with social OAuth feature
     * 
     */
    public function redirectToProvider($driver)
    {      
        return Socialite::driver($driver)->redirect();
    }


    public function handleProviderCallback($driver)
    {
        try {
     
            $user = Socialite::driver($driver)->user();

            $existing_user = User::where('oauth_id', $user->getId())->first();
      
            if ($existing_user) {
      
                Auth::login($existing_user);
     
                return redirect()->route('user.tts');
      
            } else {

                $new_user = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'oauth_id'=> $user->getId(),
                    'oauth_type'=> $driver,                    
                    'password' => Hash::make($user->getEmail()),
                ]);

                event(new Registered($new_user));

                $referral_code = (Request::hasCookie('referral')) ? Request::cookie('referral') : ''; 
                $referrer = ($referral_code != '') ? User::where('referral_id', $referral_code)->firstOrFail() : '';
                $referrer_id = ($referrer != '') ? $referrer->id : '';
        
                $new_user->assignRole(config('settings.default_user'));
                $new_user->status = 'active';
                $new_user->group = config('settings.default_user');
                $new_user->email_verified_at = now();
                $new_user->available_chars = config('tts.free_chars');
                $new_user->job_role = 'Happy Person';
                $user->referral_id = strtoupper(Str::random(15));
                $user->referred_by = $referrer_id;
                $new_user->save();        

                if (config('payment.referral.registration.enabled') == 'on') {
                    event(new RegistrationReferrerBonus($new_user));
                }                  

                Auth::login($new_user);
      
                return redirect()->route('user.tts')->with('success', 'Congratulations! Account is activated. Your password is your email.');
            }
     
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Login with your '. $driver . ' account has failed, try again or register');
        }
    }

}
