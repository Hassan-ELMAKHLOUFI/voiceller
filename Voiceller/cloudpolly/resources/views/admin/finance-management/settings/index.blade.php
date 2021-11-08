@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Payment Settings') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('#')}}"><i class="fa fa-google-wallet mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.dashboard') }}"> {{ __('Finance Management') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Payment Settings') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')	
	<!-- ALL PAYMENT CONFIGURATIONS -->					
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Setup Payment Settings') }}</h3>
				</div>
				<div class="card-body">
					
					<form action="{{ route('admin.finance.settings.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">			
								<div class="input-box">	
									<h6>{{ __('Payment Options') }}</h6>
			  						<select id="payment-option" name="payment-option" data-placeholder="Choose Payment Option:">			
										<option value="prepaid" @if (config('payment.payment_option')  == 'prepaid') selected @endif>Pre-Paid Payment Option</option>
										<option value="subscription" @if (config('payment.payment_option')  == 'subscription') selected @endif>Subscription Plan Payment Option</option>
										<option value="both" @if (config('payment.payment_option')  == 'both') selected @endif>Both (Pre-Paid and Subscription Options)</option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('Tax Rate') }} (%)</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('tax') is-danger @enderror" id="tax" name="tax" placeholder="Enter Tax Rate" value="{{ config('payment.payment_tax')}}">
									</div>
									@error('tax')
										<p class="text-danger">{{ $errors->first('tax') }}</p>
									@enderror 
								</div>							
							</div>		
							
							<div class="col-lg-6 col-md-6 col-sm-12">			
								<div class="input-box">	
									<h6>{{ __('Default Currency') }} <span class="text-muted">({{ __('Payments/Plans/System/Payouts') }})</span> <span class="text-danger">({{ __('Except Estimated Spendings') }})</span></h6>
			  						<select id="currency" name="currency" data-placeholder="Choose Default Currency:">			
										@foreach(config('currencies.all') as $key => $value)
											<option value="{{ $key }}" @if(config('payment.default_system_currency') == $key) selected @endif>{{ $value['name'] }} - {{ $key }} ({{ $value['symbol'] }})</option>
										@endforeach
									</select>									
									@error('currency')
										<p class="text-danger">{{ $errors->first('currency') }}</p>
									@enderror
								</div> 						
							</div>
						</div>
					

						<div class="card overflow-hidden border-0 special-shadow">							
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-cc-paypal fs-16 mr-2"></i>PayPal Payment</h6>
								
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-paypal" class="custom-switch-input" @if (config('services.paypal.enable')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Use PayPal</span>
											</label>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-paypal-subscription" class="custom-switch-input" @if (config('services.paypal.subscription_enable')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Use PayPal Subscription</span>
											</label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<div class="input-box">								
											<h6>PayPal Client ID</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('paypal_client_id') is-danger @enderror" id="paypal_client_id" name="paypal_client_id" value="{{ config('services.paypal.client_id') }}" autocomplete="off">
											</div> 
											@error('paypal_client_id')
												<p class="text-danger">{{ $errors->first('paypal_client_id') }}</p>
											@enderror
										</div> 
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>PayPal Client Secret</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('paypal_client_secret') is-danger @enderror" id="paypal_client_secret" name="paypal_client_secret" value="{{ config('services.paypal.client_secret') }}" autocomplete="off">
											</div> 
											@error('paypal_client_secret')
												<p class="text-danger">{{ $errors->first('paypal_client_secret') }}</p>
											@enderror
										</div> 
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Paypal Webhook URI</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('paypal_webhook_uri') is-danger @enderror" id="paypal_webhook_uri" name="paypal_webhook_uri" value="{{ config('services.paypal.webhook_uri') }}" autocomplete="off">
											</div> 
											@error('paypal_webhook_uri')
												<p class="text-danger">{{ $errors->first('paypal_webhook_uri') }}</p>
											@enderror
										</div> 
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Paypal Webhook ID</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('paypal_webhook_id') is-danger @enderror" id="paypal_webhook_id" name="paypal_webhook_id" value="{{ config('services.paypal.webhook_id') }}" autocomplete="off">
											</div> 
											@error('paypal_webhook_id')
												<p class="text-danger">{{ $errors->first('paypal_webhook_id') }}</p>
											@enderror
										</div> 
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>PayPal Base URI</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('paypal_base_uri') is-danger @enderror" id="paypal_base_uri" name="paypal_base_uri" value="{{ config('services.paypal.base_uri') }}" autocomplete="off">
											</div> 
											@error('paypal_base_uri')
												<p class="text-danger">{{ $errors->first('paypal_base_uri') }}</p>
											@enderror
										</div> 
									</div>
								
								</div>
	
							</div>
						</div>	


						<div class="card overflow-hidden border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-cc-stripe fs-16 mr-2"></i>Stripe Payment</h6>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-stripe" class="custom-switch-input" @if (config('services.stripe.enable')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Use Stripe</span>
											</label>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-stripe-subscription" class="custom-switch-input" @if (config('services.stripe.subscription_enable')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Use Stripe Subscription</span>
											</label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<!-- ACCESS KEY -->
										<div class="input-box">								
											<h6>Stripe Key</h6>
											<div class="form-group">							    
												<input type="text" class="form-control @error('stripe_key') is-danger @enderror" id="stripe_key" name="stripe_key" value="{{ config('services.stripe.api_key') }}" autocomplete="off">
											</div> 
											@error('stripe_key')
												<p class="text-danger">{{ $errors->first('stripe_key') }}</p>
											@enderror
										</div> <!-- END ACCESS KEY -->
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<!-- SECRET ACCESS KEY -->
										<div class="input-box">								
											<h6>Stripe Secret Key</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('stripe_secret_key') is-danger @enderror" id="stripe_secret_key" name="stripe_secret_key" value="{{ config('services.stripe.api_secret') }}" autocomplete="off">
											</div> 
											@error('stripe_secret_key')
												<p class="text-danger">{{ $errors->first('stripe_secret_key') }}</p>
											@enderror
										</div> <!-- END SECRET ACCESS KEY -->
									</div>	
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Stripe Webhook URI</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('stripe_webhook_uri') is-danger @enderror" id="stripe_webhook_uri" name="stripe_webhook_uri" value="{{ config('services.stripe.webhook_uri') }}" autocomplete="off">
											</div> 
											@error('stripe_webhook_uri')
												<p class="text-danger">{{ $errors->first('stripe_webhook_uri') }}</p>
											@enderror
										</div> 
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Stripe Webhook SECRET</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('stripe_webhook_secret') is-danger @enderror" id="stripe_webhook_secret" name="stripe_webhook_secret" value="{{ config('services.stripe.webhook_secret') }}" autocomplete="off">
											</div> 
											@error('stripe_webhook_secret')
												<p class="text-danger">{{ $errors->first('stripe_webhook_secret') }}</p>
											@enderror
										</div> 
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Stripe Base URI</h6> 
											<div class="form-group">							    
												<input type="text" class="form-control @error('stripe_base_uri') is-danger @enderror" id="stripe_base_uri" name="stripe_base_uri" value="{{ config('services.stripe.base_uri') }}" autocomplete="off">
											</div> 
											@error('stripe_base_uri')
												<p class="text-danger">{{ $errors->first('stripe_base_uri') }}</p>
											@enderror
										</div> 
									</div>
									
								</div>
	
							</div>
						</div>


						<div class="card overflow-hidden border-0 special-shadow">							
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><i class="fa fa-university fs-16 mr-2"></i>{{ __('Bank Transfer Payment') }} <span class="text-muted">({{ __('Offline Payment') }})</span></h6>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-bank-prepaid" class="custom-switch-input" @if (config('services.banktransfer.prepaid')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Enable for Prepaid Plans</span>
											</label>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label class="custom-switch">
												<input type="checkbox" name="enable-bank-subscription" class="custom-switch-input" @if (config('services.banktransfer.subscription')  == 'on') checked @endif>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Enable for Subscription Plans</span>
											</label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">								
										<div class="input-box">								
											<h6>Customer Payment Intructions</h6>
											<textarea class="form-control" name="bank_instructions" id="bank_instructions" rows="7">{{ $bank['bank_instructions'] }}</textarea> 
											@error('bank_instructions')
												<p class="text-danger">{{ $errors->first('bank_instructions') }}</p>
											@enderror
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">								
											<h6>Bank Account Requisites</h6> 
											<textarea class="form-control" name="bank_requisites" id="bank_requisites" rows="7">{{ $bank['bank_requisites'] }}</textarea>
											@error('bank_requisites')
												<p class="text-danger">{{ $errors->first('bank_requisites') }}</p>
											@enderror
										</div> 
									</div>										
									
								</div>
	
							</div>
						</div>


						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.finance.dashboard') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>							
						</div>				

					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- END ALL PAYMENT CONFIGURATIONS -->	

@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection