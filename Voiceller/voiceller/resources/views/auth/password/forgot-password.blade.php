@extends('layouts.auth')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row h-100vh align-items-center background-white">
        <div class="col-md-5 col-sm-12 h-100">                
            <div class="card-body pr-10 pl-10 pt-10">

                <h3 class="text-center font-weight-bold mb-8">Welcome to <span class="text-info">{{ config('app.name') }}</span></h3>

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

                <div class="mb-6 fs-14">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf       
                    
                    <div class="input-box mb-6">                             
                        <label for="email" class="fs-12 font-weight-bold text-md-right">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off"  placeholder="Email Address" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                            
                    </div>
                    
                    <div class="form-group mb-0 text-center">                        
                        <button type="submit" class="btn btn-primary mr-2">{{ __('Email Password Reset Link') }}</button>  
                        <p class="fs-10 text-muted mt-2">or <a class="text-info" href="{{ route('login') }}">{{ __('Login') }}</a></p>                                                    
                    </div>

                </form>
            </div>  
            <footer class="footer" id="login-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 fs-10 text-muted text-center">
                            Copyright © {{ date("Y") }} <a href="{{ config('app.url') }}" target="_blank">{{ config('app.name') }}</a>. All rights reserved
                        </div>
                    </div>
                </div>
            </footer>       
        </div>
         
        <div class="col-md-7 col-sm-12 text-center background-special h-100 align-middle">
            <img class="img-fluid" src="https://www.pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo-1/images/pages/login.png" alt="branding logo">
        </div>
    </div>
</div>
@endsection
