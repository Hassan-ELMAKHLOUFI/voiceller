@extends('layouts.app')

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Subscription Plan Checkout') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('user.tts') }}"><i class="fa fa-google-wallet mr-2 fs-12"></i>{{ __('User') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('user.subscriptions') }}"> {{ __('Subscriptions') }} </a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Subscribe Now / Checkout') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')	
	<div class="row">
		<div class="col-md-8">
			<div class="card border-0 pt-2">
				<div class="card-body">	
					
					<form id="payment-form" action="{{ route('user.payments.pay', $id) }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-md-6 col-sm-12 pr-4">
								<div class="checkout-wrapper-box pb-0">							

									<p class="checkout-title mt-2"><i class="fa fa-lock mr-2"></i>{{ __('Secure Checkout') }}</p>

									<div class="divider mb-5">
										<div class="divider-text text-muted">
											<small>{{ __('Select Payment Option') }}</small>
										</div>
									</div>

									<div class="form-group" id="toggler">
										<div class="text-center">
											<div class="btn-group btn-group-toggle w-100" data-toggle='buttons'>
												<div class="row w-100">
													@foreach ($payment_platforms as $payment_platform)
														<div class="col-md-4">
															<label class="gateway btn rounded p-0" href="#{{ $payment_platform->name }}Collapse" data-toggle="collapse">
																<input type="radio" class="gateway-radio" name="payment_platform" value="{{ $payment_platform->id }}" required>
																<img src="{{ URL::asset($payment_platform->image) }}" alt="{{ $payment_platform->name }}">
															</label>	
														</div>									
													@endforeach		
												</div>							
											</div>
										</div>

										@foreach ($payment_platforms as $payment_platform)
											@if ($payment_platform->name !== 'BankTransfer')
												<div id="{{ $payment_platform->name }}Collapse" class="collapse" data-parent="#toggler">
													@includeIf('components.'.strtolower($payment_platform->name).'-collapse')
												</div>
											@else
												<div id="{{ $payment_platform->name }}Collapse" class="collapse" data-parent="#toggler">
													<div class="text-center pb-2">
														<p class="text-muted fs-12 mb-4">{{ $bank['bank_instructions'] }}</p>
														<p class="text-muted fs-12 mb-4">Order ID: <span class="font-weight-bold text-primary">{{ $bank_order_id }}</span></p>
														<pre class="text-muted fs-12 mb-4">{{ $bank['bank_requisites'] }}</pre>															
													</div>
												</div>																										
											@endif
										@endforeach
									</div>

									<input type="hidden" name="value" value="{{ $total_value }}">
									<input type="hidden" name="currency" value="{{ $currency }}">																															
									
								</div>
							</div>

							<div class="col-md-6 col-sm-12 pl-4">
								<div class="checkout-wrapper-box">

									<p class="checkout-title mt-2"><i class="fa fa-archive mr-2"></i>{{ __('Plan Name') }}: <span class="text-info">{{ $id->plan_name }} {{ __('Plan Subscription') }}</span></p>

									<div class="divider mb-4">
										<div class="divider-text text-muted">
											<small>{{ __('Purchase Summary') }}</small>
										</div>
									</div>

									<div>
										<p class="fs-12 p-family">{{ __('Subtotal') }} <span class="checkout-cost">${{ number_format((float)$id->cost, 2, '.', '') }}</span></p>
										<p class="fs-12 p-family">{{ __('Taxes') }} <span class="text-muted">({{ config('payment.payment_tax') }}%)</span><span class="checkout-cost">${{ number_format((float)$tax_value, 2, '.', '') }}</span></p>
									</div>

									<div class="divider mb-5">
										<div class="divider-text text-muted">
											<small>{{ __('Total') }}</small>
										</div>
									</div>

									<div>
										<p class="fs-12 p-family">{{ __('Total Payment') }} </span><span class="checkout-cost text-info">$<span id="total_payment">{{ number_format((float)$total_value, 2, '.', '') }}</span> {{ $currency }}</span></p>
									</div>

									<div class="text-center pt-4 pb-1">
										<button type="submit" id="payment-button" class="btn btn-primary pl-6 pr-6 mb-1">{{ __('Checkout Now') }}</button>
									</div>

								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection



