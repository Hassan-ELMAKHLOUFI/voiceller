@extends('layouts.app')

@section('css')
	<!-- Awselect CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('New Mass Notification') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('#')}}"><i class="mdi mdi-upload-network mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.notifications') }}"> {{ __('Mass Notifications') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('New Mass Notifications') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')						
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Create New Notification') }}</h3>
				</div>
				<div class="card-body pt-5">									
					<form action="{{ route('admin.notifications.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">				
								<div class="input-box">	
									<h6>{{ __('Notification Type') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="notification-type" name="notification-type" data-placeholder="Select Notification Type:">			
										<option value="Info" selected>Info</option>
										<option value="Announcement">Announcement</option>
										<option value="Marketing">Marketing</option>
										<option value="Warning">Warning</option>
									</select>
									@error('notification-type')
										<p class="text-danger">{{ $errors->first('notification-type') }}</p>
									@enderror
								</div> 							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6>{{ __('Notification Action') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<select id="notification-action" name="notification-action" data-placeholder="Select User Action Type:">			
										<option value="No Action Needed" selected>No Action Needed</option>
										<option value="Action Required">Action Required</option>
									</select>
									@error('notification-action')
										<p class="text-danger">{{ $errors->first('notification-action') }}</p>
									@enderror	
								</div>						
							</div>
						
						</div>

						<div class="row mt-2">							
							<div class="col-lg-12 col-md-12 col-sm-12">							
								<div class="input-box">								
									<h6>{{ __('Subject') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="notification-subject" name="notification-subject" required>
									</div> 
									@error('notification-subject')
										<p class="text-danger">{{ $errors->first('notification-subject') }}</p>
									@enderror
								</div> 						
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6>{{ __('Notification Message') }} <span class="text-muted">({{ __('Required') }})</span></h6>							
									<textarea class="form-control" name="notification-message" rows="10"></textarea>
									@error('notification-message')
										<p class="text-danger">{{ $errors->first('notification-message') }}</p>
									@enderror	
								</div>											
							</div>
						</div>

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.notifications') }}" class="btn btn-cancel mr-2">{{ __('Return') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Send') }}</button>							
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
