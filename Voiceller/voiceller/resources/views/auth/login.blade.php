@extends('layouts.auth')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row h-100vh align-items-center background-white">
        <div class="col-md-5 col-sm-12 h-100" id="login-responsive">                
            <div class="card-body pr-10 pl-10 pt-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf                                       

                    <h3 class="text-center font-weight-bold mb-8">{{ __('Welcome Back to') }} <span class="text-info"><a href="{{ url('/') }}">{{ config('app.name') }}</a></span></h3>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-login alert-success"> 
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><i class="fa fa-check-circle"></i> {{ $message }}</strong>
                        </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-login alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong><i class="fa fa-exclamation-triangle"></i> {{ $message }}</strong>
                        </div>
                    @endif
                    
                    @if (config('settings.oauth_login') == 'enabled')
                        <div class="actions-total text-center mb-5">
                            @if(config('services.facebook.enable') == 'on')<a href="{{ url('/auth/redirect/facebook') }}" class="btn mr-2" id="login-facebook" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="fa fa-facebook-f"></i></a>@endif
                            @if(config('services.twitter.enable') == 'on')<a href="{{ url('/auth/redirect/twitter') }}" class="btn mr-2" id="login-twitter" data-toggle="tooltip" data-placement="top" title="Login with Twitter"><i class="fa fa-twitter"></i></a>@endif	
                            @if(config('services.google.enable') == 'on')<a href="{{ url('/auth/redirect/google') }}" class="btn mr-2" id="login-google" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="fa fa-google"></i></a>@endif	
                            @if(config('services.linkedin.enable') == 'on')<a href="{{ url('/auth/redirect/linkedin') }}" class="btn mr-2" id="login-linkedin" data-toggle="tooltip" data-placement="top" title="Login with Linkedin"><i class="fa fa-linkedin"></i></a>@endif	
                        </div>

                        <div class="divider">
                            <div class="divider-text text-muted">
                                <small>or login with email</small>
                            </div>
                        </div>
                    @endif
                    

                    <div class="input-box mb-4">                             
                        <label for="email" class="fs-12 font-weight-bold text-md-right">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Email Address" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                            
                    </div>

                    <div class="input-box">                            
                        <label for="password" class="fs-12 font-weight-bold text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                            
                    </div>

                    <div class="form-group">  
                        <div class="d-flex">                        
                            <label class="custom-switch">
                                <input type="checkbox" class="custom-switch-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">{{ __('Keep me logged in') }}</span>
                            </label>   

                            <div class="ml-auto">
                                @if (Route::has('password.request'))
                                    <a class="text-info fs-12" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="recaptcha" id="recaptcha">

                    <div class="form-group mb-0">                        
                        <button type="submit" class="btn btn-primary mr-2">{{ __('Login') }}</button>       
                        @if (config('settings.registration') == 'enabled')
                            <a href="{{ route('register') }}"  class="btn btn-cancel">{{ __('Sign Up') }}</a> 
                        @endif                         
                                               
                    </div>

                    <p class="fs-10 text-muted pt-3">{{ __('By continuing, you agree to our') }} <a href="{{ route('terms') }}" class="text-info">{{ __('Terms and Conditions') }}</a> {{ __('and') }} <a href="{{ route('privacy') }}" class="text-info">{{ __('Privacy Policy') }}</a></p>

                </form>

            </div>  
            <footer class="footer" id="login-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 fs-10 text-muted text-center">
                            Copyright © {{ date("Y") }} <a href="{{ config('app.url') }}" target="_blank">{{ config('app.name') }}</a>. {{ __('All rights reserved') }}
                        </div>
                    </div>
                </div>
            </footer>       
        </div>
         
        <div class="col-md-7 col-sm-12 text-center background-special h-100 align-middle p-9" id="login-background">
            <img class="img-fluid justify-content-center" src="{{ URL::asset('img/files/login-bg.png') }}" alt="branding logo">
        </div>
    </div>
</div>
@endsection

@section('js')
    @if (config('services.google.recaptcha.enable') == 'on')
        <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.google.recaptcha.site_key') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    @endif
    
@endsection