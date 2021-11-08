@extends('layouts.guest')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('content')

    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-title">
                    <!-- SECTION TITLE -->
                    <div class="text-center mb-9 mt-9" id="contact-row">

                        <div class="title">
                            <h6>{{ __('Choose') }} <span>{{ __('Your Plan') }}</span></h6>
                            <p>{{ __('Flexible monthly subsciptions with optional top up features') }}</p>
                        </div>

                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="prices-wrapper">
        
        <div class="container-fluid" id="curve-container">
            <div class="curve-box">
                <div class="overflow-hidden curve">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#fff"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="container pt-8">          
            
            <div class="card-body">			
					
                <div class="tab-menu-heading text-center">
                    <div class="tabs-menu ">								
                        <ul class="nav text-center">
                            @if (config('payment.payment_option') == 'subscription' || config('payment.payment_option') == 'both')
                                <li><a href="#plans" class="active" data-toggle="tab"> Monthly Plans</a></li>
                            @endif
                            @if (config('payment.payment_option') == 'prepaid' || config('payment.payment_option') == 'both')
                                <li><a href="#prepaid" data-toggle="tab"> Prepaid Plans</a></li>
                            @endif					
                        </ul>
                    </div>
                </div>
    
                @if ($plan || $prepaid_exists)
    
                    <div class="tabs-menu-body">
                        <div class="tab-content">
    
                            @if (config('payment.payment_option') == 'subscription' || config('payment.payment_option') == 'both')
                                <div class="tab-pane active" id="plans">
    
                                    @if ($subscriptions->count())
                                    
                                        <h6 class="font-weight-normal fs-12 text-center mb-6">{{ __('Subscribe to our Monthly Subscription Plans and enjoy ton of benefits') }}</h6>
                                        
                                        <div class="row justify-content-md-center">
    
                                            @foreach ( $subscriptions as $subscription )																			
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <div class="price-card pt-2 mb-7">
                                                        <div class="card border-0 p-4 pl-6">
                                                            <div class="plan">																										
                                                                <span class="plan-currency-sign">{!! config('payment.default_system_currency_symbol') !!}</span><span class="plan-cost">{{ $subscription->cost }}</span><span class="plan-currency-sign">{{ $subscription->currency }}</span>
                                                                <p class="fs-12">{{ $subscription->primary_heading }}</p>
                                                                <div class="divider"></div>
                                                                <div class="plan-title">{{ $subscription->plan_name }}</div>
                                                                <p class="fs-12 mb-2">{{ $subscription->secondary_heading }}</p>
                                                                <ul class="fs-12">														
                                                                    @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                        @if ($feature)
                                                                            <li><i class="fa fa-check"></i> {{ $feature }}</li>
                                                                        @endif																
                                                                    @endforeach															
                                                                </ul>
    
                                                                <div class="text-center action-button">
                                                                    <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Subscribe Now') }}</a>
                                                                </div>
                                                            </div>							
                                                        </div>	
                                                    </div>							
                                                </div>										
                                            @endforeach
    
                                        </div>	
                                    
                                    @else
                                        <div class="row text-center">
                                            <div class="col-sm-12 mt-6 mb-6">
                                                <h6 class="fs-12 font-weight-bold text-center">No Subscriptions plans were set yet</h6>
                                            </div>
                                        </div>
                                    @endif					
                                </div>
                            @endif	
    
                            @if (config('payment.payment_option') == 'prepaid' || config('payment.payment_option') == 'both')
                                <div class="tab-pane" id="prepaid">
    
                                    @if ($prepaids->count())
    
                                        <h6 class="font-weight-normal fs-12 text-center mb-6">{{ __('Top up your subscription with more credits or start with Prepaid Plan credits only') }}</h6>
                                        
                                        <div class="row justify-content-md-center">
                                        
                                            @foreach ( $prepaids as $prepaid )																			
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <div class="price-card pt-2 mb-7">
                                                        <div class="card border-0 p-4">
                                                            <div class="plan prepaid-plan">
                                                                <div class="plan-title">{{ $prepaid->plan_name }} <span class="prepaid-currency-sign">{{ $prepaid->currency }}</span><span class="plan-cost">{{ $prepaid->cost }}</span><span class="prepaid-currency-sign">{!! config('payment.default_system_currency_symbol') !!}</span></div>
                                                                <p class="fs-12 text-muted">{{ __('Total Characters') }} @if ($prepaid->bonus > 0)<span class="ml-2 gift text-success">+{{ number_format($prepaid->bonus) }} {{ __('bonus') }}!</span> @endif</p>									
                                                                <div class="text-center action-button mt-2 mb-2">
                                                                    <a href="{{ route('register') }}" class="btn btn-cancel">{{ __('Purchase Now') }}</a> 
                                                                </div>
                                                            </div>							
                                                        </div>	
                                                    </div>							
                                                </div>										
                                            @endforeach						
    
                                        </div>
    
                                    @else
                                        <div class="row text-center">
                                            <div class="col-sm-12 mt-6 mb-6">
                                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No Prepaid plans were set yet') }}</h6>
                                            </div>
                                        </div>
                                    @endif
    
                                </div>	
                            @endif								
                        </div>
                    </div>
                
                @else
                    <div class="row text-center">
                        <div class="col-sm-12 mt-6 mb-6">
                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions or Prepaid plans were set yet') }}</h6>
                        </div>
                    </div>
                @endif
    
            </div>
        
        </div>

    </section>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>

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
