@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Registration Settings') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-cogs mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ url('#') }}"> {{ __('General Settings') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('#') }}"> {{ __('Registration') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')					
	<div class="row">
		<div class="col-lg-5 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Setup Registration Settings') }}</h3>
				</div>
				<div class="card-body">
					
					<form action="{{ route('admin.settings.registration.store') }}" method="POST" enctype="multipart/form-data">
						@csrf				

						<div class="row">

							<div class="col-12">							
								<div class="input-box">	
									<h6>{{ __('New User Registration') }}</h6>
			  						<select id="registration" name="registration" data-placeholder="Select Registration Option:">			
										<option value="enabled" @if ( config('settings.registration')  == 'enabled') selected @endif>Enabled</option>
										<option value="disabled" @if ( config('settings.registration')  == 'disabled') selected @endif>Disabled</option>
									</select>
								</div> 						
							</div>

							<div class="col-12">							
								<div class="input-box">	
									<h6>{{ __('New User Email Verification') }}</h6>
			  						<select id="email-verification" name="email-verification" data-placeholder="Select Email Verification Option:">			
										<option value="enabled" @if ( config('settings.email_verification')  == 'enabled') selected @endif>Enabled</option>
										<option value="disabled" @if ( config('settings.email_verification')  == 'disabled') selected @endif>Disabled</option>
									</select>
								</div> 						
							</div>

						</div>

						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<button type="submit" class="btn btn-primary mr-2">{{ __('Save') }}</button>							
						</div>				

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection