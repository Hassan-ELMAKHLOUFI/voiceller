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
                            <h6><span>{{ __('About') }}</span> {{ __('Us') }}</h6>
                            <p>{{ __('Who we are?') }}</p>
                        </div>

                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="about-wrapper">
        
        <div class="container-fluid" id="curve-container">
            <div class="curve-box">
                <div class="overflow-hidden curve">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#fff"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="container pt-9">         

                
            <!-- ABOUT US-->
            <div class="row d-flex" id="about-us">
                

                <!-- ABOUT TITLE -->
                <div class="col-md-6" id="about-title">
                    
                    <div class="title">
                        <h6>{{ __('Synthesize Text with') }} <span>{{ config('app.name') }}</span></h6>
                        <p class="p-about">{{ __('We make to text to speech conversion easier and fun') }}</p>
                    </div>

                </div> <!-- END ABOUT TITLE -->


                <!-- ABOUT INFORMATION -->
                <div class="col-md-6" id="about-info">

                    <p>Quando vituperatoribus ut sit, congue scripta delicatissimi an eos. An vel ignota consulatu referrentur. In populo labore usu, per summo aliquando democritum cu, iracundia suscipiantur ex pri. Agital definitiones ea vim, inani graece agimal an eos. Pri nobis placerat in, an tota minimum vulputate duo, eu mel scripserit scriptorem repudiandae. Tale recusabo eam eu, ex sea facer omittantur reformidans.</p>
                    
                    <p>An vel ignota consulatu referrentur. In populo labore usu, per summo aliquando democritum cu, iracundia suscipiantur ex pri. Agital definitiones ea vim, inani graece agimal an eos. Pri nobis placerat in, an tota minimum vulputate duo, eu mel scripserit scriptorem repudiandae. Tale recusabo eam eu, ex sea facer omittantur reformidans.</p>

                    <a href="{{ route('contact.show') }}">{{ __('Contact Us') }}</a>

                </div> <!-- END ABOUT INFORMATION -->


            </div> <!-- END ROW -->
            
            

            <!-- BOX FEATURES LIST -->
            <div class="row d-flex text-center">

                <div class="col-md-12 mb-4">
                    <h6>{{ __('Voiceover production is easires and faster with us') }}</h6>
                    <p class="mb-3 p-about">{{ __('Enjoy full flexibility of text to speech synthesize tasks') }}</p>
                </div>
                
                <div class="card special-shadow border-0">
                    <div class="card-body p-5">                        
                        <div class="col-md-12">
                            <ul class="nav nav-pills w-100 mb-3" id="pills-tab" role="tablist">
                                
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('Standard & Neural Voices') }}</a>
                                </li>                       
                            
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('Multiple Voice Effects') }}</a>
                                </li>                        
                            
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{ __('Various Payment Options') }}</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                            <h4>{{ __('Standard & Neural Voices') }}</h4>
                                            <p>Choose from a set of 630+ voices across 70+ languages and variants, including Mandarin, Hindi, Spanish, Arabic, Russian, and more. Pick the voice that works best for your user and application.</p>
                                            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                            <h4>{{ __('Multiple Voice Effects') }}</h4>
                                            <p>Customize your speech with SSML tags that allow you to add various voice effects such as newscaster and conversational styles, and pauses, numbers, date and time formatting, mute words and phrases, and other pronunciation instructions.</p>
                                            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 text-left pt-9 pr-7">
                                            <h4>{{ __('Various Payment Options') }}</h4>
                                            <p>We support flexible payment options, you can use your favourit Stripe or Paypal payment gateways, and also subscribe for our monthly plans to have available credits all the time, plus you can always top up with addtional credits if needed.</p>
                                            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up Now</a>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img class="w-70" src="{{ URL::asset('img/svgs/banner-1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div> <!-- END BOX FEATURES LIST -->



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
