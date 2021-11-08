@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('TTS Configuration') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.tts.dashboard') }}"> {{ __('TTS Management') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('#') }}"> {{ __('TTS Configuration') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')	
	<!-- ALL CSP CONFIGURATIONS -->					
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Setup TTS Configuration') }}</h3>
				</div>
				<div class="card-body">

					<!-- TTS SETTINGS FORM -->					
					<form action="{{ route('admin.tts.configs.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- VOICE TYPES -->
								<div class="input-box">	
									<h6>{{ __('Set Voice Types') }}</h6>
			  						<select id="set-voice-types" name="set-voice-types" data-placeholder="Select Available Voice Types:">			
										<option value="standard" @if ( config('tts.voice_type')  == 'standard') selected @endif>Only Standard Voices</option>
										<option value="neural" @if ( config('tts.voice_type')  == 'neural') selected @endif>Only Neural Voices</option>
										<option value="both" @if ( config('tts.voice_type')  == 'both') selected @endif>Both (Standard and Neural)</option>
									</select>
								</div> <!-- END VOICE TYPES -->							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- EFFECTS -->
								<div class="input-box">	
									<h6>{{ __('Set SSML Effects') }}</h6>
			  						<select id="set-ssml-effects" name="set-ssml-effects" data-placeholder="Configure SSML Effects:">			
										<option value="enable" @if ( config('tts.ssml_effect')  == 'enable') selected @endif>Enable All</option>
										<option value="disable" @if ( config('tts.ssml_effect')  == 'disable') selected @endif>Disable All</option>
									</select>
								</div> <!-- END EFFECTS -->							
							</div>
						
						</div>

						<div class="row">							
							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- MAX CHARACTERS -->
								<div class="input-box">								
									<h6>{{ __('Set Maximum Character Limit') }}: <span class="text-muted">({{ __('For Admin & Subscriber Groups') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('set-max-chars') is-danger @enderror" id="set-max-chars" name="set-max-chars" placeholder="Ex: 3000" value="{{ config('tts.max_chars_limit') }}" required>
										@error('set-max-chars')
											<p class="text-danger">{{ $errors->first('set-max-chars') }}</p>
										@enderror
									</div> 
								</div> <!-- END MAX CHARACTERS -->							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">	
								<!-- FREE TIER DEMO LIMIT -->
								<div class="input-box">								
									<h6>{{ __('Set Free Tier Character Limit') }} <span class="text-muted">({{ __('Per New User') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('set-free-chars') is-danger @enderror" id="set-free-chars" name="set-free-chars" placeholder="Ex: 2000" value="{{ config('tts.free_chars') }}" required>
										@error('set-free-chars')
											<p class="text-danger">{{ $errors->first('set-free-chars') }}</p>
										@enderror
									</div> 
								</div> <!-- END FREE TIER DEMO LIMIT -->							
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- STORAGE OPTION -->
								<div class="input-box">	
									<h6>{{ __('Set Default Storage Option') }}</h6>
			  						<select id="set-storage-option" name="set-storage-option" data-placeholder="Select Default Main Storage:">			
										<option value="local" @if ( config('tts.default_storage')  == 'local') selected @endif>Local Server Storage</option>
										<option value="s3" @if ( config('tts.default_storage')  == 's3') selected @endif>Amazon S3 Bucket</option>
										<option value="wasabi" @if ( config('tts.default_storage')  == 'wasabi') selected @endif>Wasabi Bucket</option>
									</select>
								</div> <!-- END STORAGE OPTION -->							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- STORAGE OPTION -->
								<div class="input-box">	
									<h6>{{ __('Auto Clean Local Stored Files') }}</h6>
			  						<select id="set-storage-clean" name="set-storage-clean" data-placeholder="Set Default Local Storage Clean Up Duration:">	
										<option value="never" @if ( config('tts.clean_storage')  == 'never') selected @endif>Never Delete</option>		
										<option value="1" @if ( config('tts.clean_storage')  == '1') selected @endif>Delete Files 1 Day Old</option>
										<option value="7" @if ( config('tts.clean_storage')  == '7') selected @endif>Delete Files 1 Week Old</option>
										<option value="14" @if ( config('tts.clean_storage')  == '14') selected @endif>Delete Files 2 Weeks Old</option>
										<option value="21" @if ( config('tts.clean_storage')  == '21') selected @endif>Delete Files 3 Weeks Old</option>
										<option value="30" @if ( config('tts.clean_storage')  == '30') selected @endif>Delete Files 1 Month Old</option>
										<option value="180" @if ( config('tts.clean_storage')  == '180') selected @endif>Delete Files 6 Months Old</option>
										<option value="365" @if ( config('tts.clean_storage')  == '365') selected @endif>Delete Files 1 Year Old</option>										
									</select>
								</div> <!-- END STORAGE OPTION -->							
							</div>
						</div>

						<div class="row">							
							<div class="col-lg-6 col-md-6 col-sm-12">
								<!-- FREE TIER USER NEURAL VOICE -->
								<div class="input-box">								
									<h6>{{ __('Neural Voices for Free Tier Users') }}</h6>
									<div class="form-group">							    
										<select id="free-tier-neural" name="free-tier-neural" data-placeholder="Allow Neural Voices for Free Tier Users">			
											<option value="enable" @if ( config('tts.user_neural')  == 'enable') selected @endif>Enable</option>
											<option value="disable" @if ( config('tts.user_neural')  == 'disable') selected @endif>Disable</option>
										</select>
									</div> 
								</div> <!-- END FREE TIER USER NEURAL VOICE -->							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">	
									<h6>{{ __('Cloud Vendor Logos') }} <span class="text-muted">({{ __('Only for User Panel and Voice Samples') }})</span></h6>
			  						<select id="vendor-logo" name="vendor-logo" data-placeholder="Show or Hide Vendor Logos on User side:">			
										<option value="show" @if ( config('tts.vendor_logos')  == 'show') selected @endif>Show</option>
										<option value="hide" @if ( config('tts.vendor_logos')  == 'hide') selected @endif>Hide</option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">	
								<!-- FREE TIER CHAR LIMIT -->
								<div class="input-box">								
									<h6>{{ __('Set Maximum Character Limit') }} <span class="text-muted">({{ __('For User Group - Free Tier') }})</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('free-tier-limit') is-danger @enderror" id="free-tier-limit" name="free-tier-limit" placeholder="Ex: 2000" value="{{ config('tts.free_chars_limit') }}" required>
										@error('free-tier-limit')
											<p class="text-danger">{{ $errors->first('free-tier-limit') }}</p>
										@enderror
									</div> 
								</div> <!-- END FREE TIER CHAR LIMIT -->							
							</div>
						</div>


						<div class="card border-0 special-shadow">							
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-4"><img src="{{URL::asset('img/csp/wasabi-sm.png')}}" class="fw-2 mr-2" alt="">Wasabi Storage Settings</h6>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>Wasabi Access Key</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-wasabi-access-key') is-danger @enderror" id="wasabi-access-key" name="set-wasabi-access-key" value="{{ config('services.wasabi.key') }}" autocomplete="off">
												@error('set-wasabi-access-key')
													<p class="text-danger">{{ $errors->first('set-wasabi-access-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6>Wasabi Secret Access Key</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-wasabi-secret-access-key') is-danger @enderror" id="wasabi-secret-access-key" name="set-wasabi-secret-access-key" value="{{ config('services.wasabi.secret') }}" autocomplete="off">
												@error('set-wasabi-secret-access-key')
													<p class="text-danger">{{ $errors->first('set-wasabi-secret-access-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END SECRET ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>Wasabi Bucket Name</small></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-wasabi-bucket') is-danger @enderror" id="wasabi-bucket" name="set-wasabi-bucket" value="{{ config('services.wasabi.bucket') }}" autocomplete="off">
												@error('set-wasabi-bucket')
													<p class="text-danger">{{ $errors->first('set-wasabi-bucket') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- WASABI REGION -->
										<div class="input-box">	
											<h6>Set Wasabi Region</h6>
											  <select id="set-wasabi-region" name="set-wasabi-region" data-placeholder="Select Default Wasabi Region:">			
												<option value="us-east-1" @if (config('services.wasabi.region') == 'us-east-1') selected @endif>Wasabi US East 1 (N. Virginia) us-east-1</option>
												<option value="us-east-2" @if (config('services.wasabi.region') == 'us-east-2') selected @endif>Wasabi US East 2 (N. Virginia) us-east-2</option>
												<option value="us-central-1" @if (config('services.wasabi.region') == 'us-central-1') selected @endif>Wasabi Central 1 (Texas) us-central-1</option>
												<option value="us-west-1" @if (config('services.wasabi.region') == 'us-west-1') selected @endif>Wasabi US West 1 (Oregon) us-west-1</option>
												<option value="eu-central-1" @if (config('services.wasabi.region') == 'eu-central-1') selected @endif>Wasabi EU Central 1 (Amsterdam) eu-central-1</option>
												<option value="ap-northeast-1" @if (config('services.wasabi.region') == 'ap-northeast-1') selected @endif>Wasabi AP Northeast 1 (Tokyo) ap-northeast-1 (Only for Japan)</option>
											</select>
										</div> <!-- END WASABI REGION -->									
									</div>									
		
								</div>
	
							</div>
						</div>	
						

						<div class="card border-0 special-shadow">							
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-4"><img src="{{URL::asset('img/csp/aws-sm.png')}}" class="fw-2 mr-2" alt="">Amazon Web Services</h6>
								
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="enable-aws" class="custom-switch-input" @if ( config('tts.enable.aws')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Use AWS</span>
									</label>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>AWS Access Key</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-aws-access-key') is-danger @enderror" id="aws-access-key" name="set-aws-access-key" value="{{ config('services.aws.key') }}" autocomplete="off">
												@error('set-aws-access-key')
													<p class="text-danger">{{ $errors->first('set-aws-access-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6>AWS Secret Access Key</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-aws-secret-access-key') is-danger @enderror" id="aws-secret-access-key" name="set-aws-secret-access-key" value="{{ config('services.aws.secret') }}" autocomplete="off">
												@error('set-aws-secret-access-key')
													<p class="text-danger">{{ $errors->first('set-aws-secret-access-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END SECRET ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>Amazon S3 Bucket Name</small></h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-aws-bucket') is-danger @enderror" id="aws-bucket" name="set-aws-bucket" value="{{ config('services.aws.bucket') }}" autocomplete="off">
												@error('set-aws-bucket')
													<p class="text-danger">{{ $errors->first('set-aws-bucket') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- AWS REGION -->
										<div class="input-box">	
											<h6>Set AWS Region</h6>
											  <select id="set-aws-region" name="set-aws-region" data-placeholder="Select Default AWS Region:">			
												<option value="us-east-1" @if ( config('services.aws.region')  == 'us-east-1') selected @endif>US East (N. Virginia) us-east-1</option>
												<option value="us-east-2" @if ( config('services.aws.region')  == 'us-east-2') selected @endif>US East (Ohio) us-east-2</option>
												<option value="us-west-1" @if ( config('services.aws.region')  == 'us-west-1') selected @endif>US West (N. California) us-west-1</option>
												<option value="us-west-2" @if ( config('services.aws.region')  == 'us-west-2') selected @endif>US West (Oregon) us-west-2</option>
												<option value="ap-east-1" @if ( config('services.aws.region')  == 'ap-east-1') selected @endif>Asia Pacific (Hong Kong) ap-east-1</option>
												<option value="ap-south-1" @if ( config('services.aws.region')  == 'ap-south-1') selected @endif>Asia Pacific (Mumbai) ap-south-1</option>
												<option value="ap-northeast-3" @if ( config('services.aws.region')  == 'ap-northeast-3') selected @endif>Asia Pacific (Osaka-Local) ap-northeast-3</option>
												<option value="ap-northeast-2" @if ( config('services.aws.region')  == 'ap-northeast-2') selected @endif>Asia Pacific (Seoul) ap-northeast-2</option>
												<option value="ap-southeast-1" @if ( config('services.aws.region')  == 'ap-southeast-1') selected @endif>Asia Pacific (Singapore) ap-southeast-1</option>
												<option value="ap-southeast-2" @if ( config('services.aws.region')  == 'ap-southeast-2') selected @endif>Asia Pacific (Sydney) ap-southeast-2</option>
												<option value="ap-northeast-1" @if ( config('services.aws.region')  == 'ap-northeast-1') selected @endif>Asia Pacific (Tokyo) ap-northeast-1</option>
												<option value="eu-central-1" @if ( config('services.aws.region')  == 'eu-central-1') selected @endif>Europe (Frankfurt) eu-central-1</option>
												<option value="eu-west-1" @if ( config('services.aws.region')  == 'eu-west-1') selected @endif>Europe (Ireland) eu-west-1</option>
												<option value="eu-west-2" @if ( config('services.aws.region')  == 'eu-west-2') selected @endif>Europe (London) eu-west-2</option>
												<option value="eu-south-1" @if ( config('services.aws.region')  == 'eu-south-1') selected @endif>Europe (Milan) eu-south-1</option>
												<option value="eu-west-3" @if ( config('services.aws.region')  == 'eu-west-3') selected @endif>Europe (Paris) eu-west-3</option>
												<option value="eu-north-1" @if ( config('services.aws.region')  == 'eu-north-1') selected @endif>Europe (Stockholm) eu-north-1</option>
												<option value="me-south-1" @if ( config('services.aws.region')  == 'me-south-1') selected @endif>Middle East (Bahrain) me-south-1</option>
												<option value="sa-east-1" @if ( config('services.aws.region')  == 'sa-east-1') selected @endif>South America (São Paulo) sa-east-1</option>
												<option value="ca-central-1" @if ( config('services.aws.region')  == 'ca-central-1') selected @endif>Canada (Central) ca-central-1</option>
												<option value="af-south-1" @if ( config('services.aws.region')  == 'af-south-1') selected @endif>Africa (Cape Town) af-south-1</option>
											</select>
										</div> <!-- END AWS REGION -->									
									</div>									
		
								</div>
	
							</div>
						</div>	


						<div class="card border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><img src="{{URL::asset('img/csp/azure-sm.png')}}" class="fw-2 mr-2" alt="">Azure Settings</h6>

								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="enable-azure" class="custom-switch-input" @if ( config('tts.enable.azure')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Use Azure</span>
									</label>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>Azure Key</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('set-azure-key') is-danger @enderror" id="set-azure-key" name="set-azure-key" value="{{ config('services.azure.key') }}" autocomplete="off">
												@error('set-azure-key')
													<p class="text-danger">{{ $errors->first('set-azure-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- AZURE REGION -->
										<div class="input-box">	
											<h6>Azure Region</h6>
											  <select id="set-azure-region" name="set-azure-region" data-placeholder="Select Azure Region:">			
												<option value="australiaeast" @if ( config('services.azure.region')  == 'australiaeast') selected @endif>Australia East (australiaeast)</option>
												<option value="brazilsouth" @if ( config('services.azure.region')  == 'brazilsouth') selected @endif>Brazil South (brazilsouth)</option>
												<option value="canadacentral" @if ( config('services.azure.region')  == 'canadacentral') selected @endif>Canada Central (canadacentral)</option>
												<option value="centralus" @if ( config('services.azure.region')  == 'centralus') selected @endif>Central US (centralus)</option>
												<option value="eastasia" @if ( config('services.azure.region')  == 'eastasia') selected @endif>East Asia (eastasia)</option>
												<option value="eastus" @if ( config('services.azure.region')  == 'eastus') selected @endif>East US (eastus)</option>
												<option value="eastus2" @if ( config('services.azure.region')  == 'eastus2') selected @endif>East US 2 (eastus2)</option>
												<option value="francecentral" @if ( config('services.azure.region')  == 'francecentral') selected @endif>France Central (francecentral)</option>
												<option value="centralindia" @if ( config('services.azure.region')  == 'centralindia') selected @endif>India Central (centralindia)</option>
												<option value="japaneast" @if ( config('services.azure.region')  == 'japaneast') selected @endif>Japan East (japaneast)</option>
												<option value="japanwest" @if ( config('services.azure.region')  == 'japanwest') selected @endif>Japan West (japanwest)</option>
												<option value="koreacentral" @if ( config('services.azure.region')  == 'koreacentral') selected @endif>Korea Central (koreacentral)</option>
												<option value="northcentralus" @if ( config('services.azure.region')  == 'northcentralus') selected @endif>North Central US (northcentralus)</option>
												<option value="northeurope" @if ( config('services.azure.region')  == 'northeurope') selected @endif>North Europe (northeurope)</option>
												<option value="southcentralus" @if ( config('services.azure.region')  == 'southcentralus') selected @endif>South Central US (southcentralus)</option>
												<option value="southeastasia" @if ( config('services.azure.region')  == 'southeastasia') selected @endif>Southeast Asia (southeastasia)</option>
												<option value="uksouth" @if ( config('services.azure.region')  == 'uksouth') selected @endif>UK South (uksouth)</option>
												<option value="westcentralus" @if ( config('services.azure.region')  == 'westcentralus') selected @endif>West Central US (westcentralus)</option>
												<option value="westeurope" @if ( config('services.azure.region')  == 'westeurope') selected @endif>West Europe (westeurope)</option>
												<option value="westus" @if ( config('services.azure.region')  == 'westus') selected @endif>West US (westus)</option>
												<option value="westus2" @if ( config('services.azure.region')  == 'westus2') selected @endif>West US 2 (westus2)</option>
											</select>
										</div> <!-- END AZURE REGION -->									
									</div>

								</div>
	
							</div>
						</div>


						<div class="card overflow-hidden border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><img src="{{URL::asset('img/csp/gcp-sm.png')}}" class="fw-2 mr-2" alt="">GCP Settings</h6>

								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="enable-gcp" class="custom-switch-input" @if ( config('tts.enable.gcp')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Use GCP</span>
									</label>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>GCP Configuration File Path</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('gcp-configuration-path') is-danger @enderror" id="gcp-configuration-path" name="gcp-configuration-path" value="{{ config('services.gcp.key_path') }}" autocomplete="off">
												@error('gcp-configuration-path')
													<p class="text-danger">{{ $errors->first('gcp-configuration-path') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>								
								</div>
	
							</div>
						</div>						


						<div class="card overflow-hidden border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><img src="{{URL::asset('img/csp/ibm-sm.png')}}" class="fw-2 mr-2" alt="">IBM Settings</h6>

								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="enable-ibm" class="custom-switch-input" @if ( config('tts.enable.ibm')  == 'on') checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">Use IBM</span>
									</label>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>IBM API Key</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('ibm-api-key') is-danger @enderror" id="ibm-api-key" name="ibm-api-key" value="{{ config('services.ibm.api_key') }}" autocomplete="off">
												@error('ibm-api-key')
													<p class="text-danger">{{ $errors->first('ibm-api-key') }}</p>
												@enderror
											</div> 
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6>IBM Endpoint URL</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('ibm-endpoint-url') is-danger @enderror" id="ibm-endpoint-url" name="ibm-endpoint-url" value="{{ config('services.ibm.endpoint_url') }}" autocomplete="off">
												@error('ibm-endpoint-url')
													<p class="text-danger">{{ $errors->first('ibm-endpoint-url') }}</p>
												@enderror
											</div> 
										</div> <!-- END SECRET ACCESS KEY -->
									</div>								
								</div>
	
							</div>
						</div>

						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.tts.dashboard') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>							
						</div>				

					</form>
					<!-- END TTS SETTINGS FORM -->
				</div>
			</div>
		</div>
	</div>
	<!-- END ALL CSP CONFIGURATIONS -->	
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection