@extends('layouts.auth')

@section('content')
    <div class="container-fluid justify-content-center">
        <div class="row h-100vh align-items-center background-white">
            <div class="col-md-5 col-sm-12 h-100">                
                <div class="card-body pr-10 pl-10 pt-10">            
                        
                    <h3 class="text-center font-weight-bold mb-8">Terms and Conditions</h3>

                    <div class="mb-4">
                        <p class="fs-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="fs-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="fs-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque dolores facilis libero quas voluptatem, 
                            fuga deserunt autem atque aliquam voluptate placeat est, ipsa debitis accusamus accusantium fugit, cum officia nam.
                        </p>
                    </div>

                    <div class="form-group mt-6 text-center">                        
                        <a href="{{ route('register') }}" class="btn btn-primary mr-2">{{ __('I Agree, Let\'s Sign Up') }}</a> 
                        <a href="{{ route('login') }}" class="btn btn-primary mr-2">{{ __('I Agree, Let\'s Login') }}</a>                               
                    </div>
                    
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
            
            <div class="col-md-7 col-sm-12 text-center background-special h-100 align-middle p-9" id="login-background">
                <img class="img-fluid justify-content-center" src="{{ URL::asset('img/files/login-bg.png') }}" alt="branding logo">
            </div>
        </div>
    </div>
@endsection

