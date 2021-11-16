@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"> {{ __('Frontend Settings') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-cogs mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('#')}}"> {{ __('General Settings') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Frontend Settings') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')					
	<div class="row">
		<div class="col-lg-6 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Setup Frontend Settings') }}</h3>
				</div>
				<div class="card-body">
				
					<form action="{{ route('admin.settings.frontend.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Maintenance Mode</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="maintenance" class="custom-switch-input" @if ( config('frontend.maintenance')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Enable</span>
									</label>
								</div> 
							</div>
						</div>
						
						<div class="row">

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Frontend Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="frontend" class="custom-switch-input" @if ( config('frontend.frontend_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">About Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="about" class="custom-switch-input" @if ( config('frontend.about_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Voices Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="voices" class="custom-switch-input" @if ( config('frontend.voices_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Blog Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="blog" class="custom-switch-input" @if ( config('frontend.blog_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Pricing Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="pricing" class="custom-switch-input" @if ( config('frontend.pricing_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>

							<div class="col-md-4 col-sm-12">									
								<h6 class="fs-12 font-weight-bold mb-4">Contact Us Page</h6>								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="contact" class="custom-switch-input" @if ( config('frontend.contact_page')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Show</span>
									</label>
								</div> 
							</div>
						</div>

						<div class="card border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-music mr-2"></i>Frontend Live Synthesize Feature</h6>

								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="enable-listen" class="custom-switch-input" @if ( config('frontend.synthesize.status')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Enable</span>
									</label>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">													
										<div class="input-box">								
											<h6>Maximum Character Limit <span class="text-muted">(Admin characters used)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control @error('limit') is-danger @enderror" id="limit" name="limit" value="{{ config('frontend.synthesize.max_chars') }}" autocomplete="off">
												@error('limit')
													<p class="text-danger">{{ $errors->first('limit') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">	
											<h6>{{ __('Allow Neural Voices') }}</h6>
											  <select id="set-ssml-effects" name="neural" data-placeholder="Allow Neural Voices:">			
												<option value="enable" @if ( config('frontend.synthesize.neural')  == 'enable') selected @endif>Enable</option>
												<option value="disable" @if ( config('frontend.synthesize.neural')  == 'disable') selected @endif>Disable</option>
											</select>
										</div> 						
									</div>								
								</div>
	
							</div>
						</div>
						
						<div class="card border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-user-secret mr-2"></i>Footer Social Media Information</h6>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-twitter mr-2"></i>Twitter <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('twitter') is-danger @enderror" id="twitter" name="twitter" value="{{ config('frontend.social_twitter') }}" autocomplete="off">
												@error('twitter')
													<p class="text-danger">{{ $errors->first('twitter') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-facebook-official mr-2"></i>Facebook <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('facebook') is-danger @enderror" id="facebook" name="facebook" value="{{ config('frontend.social_facebook') }}" autocomplete="off">
												@error('facebook')
													<p class="text-danger">{{ $errors->first('facebook') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-linkedin mr-2"></i>LinkedIn <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('linkedin') is-danger @enderror" id="linkedin" name="linkedin" value="{{ config('frontend.social_linkedin') }}" autocomplete="off">
												@error('linkedin')
													<p class="text-danger">{{ $errors->first('linkedin') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-instagram mr-2"></i>Instagram <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('instagram') is-danger @enderror" id="instagram" name="instagram" value="{{ config('frontend.social_instagram') }}" autocomplete="off">
												@error('instagram')
													<p class="text-danger">{{ $errors->first('instagram') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-google mr-2"></i>Google <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('google') is-danger @enderror" id="google" name="google" value="{{ config('frontend.social_google') }}" autocomplete="off">
												@error('google')
													<p class="text-danger">{{ $errors->first('google') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-youtube mr-2"></i>Youtube <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('youtube') is-danger @enderror" id="youtube" name="youtube" value="{{ config('frontend.social_youtube') }}" autocomplete="off">
												@error('youtube')
													<p class="text-danger">{{ $errors->first('youtube') }}</p>
												@enderror
											</div> 
										</div> 
									</div>	
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-vimeo mr-2"></i>Vimeo <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('vimeo') is-danger @enderror" id="vimeo" name="vimeo" value="{{ config('frontend.social_vimeo') }}" autocomplete="off">
												@error('vimeo')
													<p class="text-danger">{{ $errors->first('vimeo') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">					
										<div class="input-box">								
											<h6><i class="fa fa-flickr mr-2"></i>Flickr <span class="text-muted"></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('flickr') is-danger @enderror" id="flickr" name="flickr" value="{{ config('frontend.social_flickr') }}" autocomplete="off">
												@error('flickr')
													<p class="text-danger">{{ $errors->first('flickr') }}</p>
												@enderror
											</div> 
										</div> 
									</div>
								</div>
	
							</div>
						</div>
						
						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.dashboard') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>							
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
	<!-- File Uploader -->
	<script src="{{URL::asset('js/file-upload.js')}}"></script>
@endsection