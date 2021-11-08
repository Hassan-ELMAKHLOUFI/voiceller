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
                            <h6><span>{{ __('Blog') }}</span></h6>
                            <p>{{ $blog->title }}</p>
                            <a href="{{ route('blogs') }}" class="btn btn-primary">{{ __('All Blogs') }}</a>
                        </div>

                    </div> <!-- END SECTION TITLE -->
                </div>
            </div>
        </div>
    </div>

    <section id="blog-wrapper">
        
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

            <div class="row justify-content-md-center">

                <div class="col-md-12 col-sm-12">
                    <div class="blog">
                        <img src="{{ URL::asset($blog->image) }}" alt="Blog Image">
                    </div>
                    <h6 class="fs-16 font-weight-bold text-center">{{ $blog->title }}</h6>
                    <p class="fs-12 text-center text-muted mb-5"><span><i class="mdi mdi-account-edit mr-1"></i>{{ $blog->created_by }}</span> / <span><i class="mdi mdi-alarm mr-1"></i>{{ date('F j, Y', strtotime($blog->created_at)) }}</span></p>

                    <div class="fs-14">{!! $blog->body !!}</div>
                </div>
     
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
