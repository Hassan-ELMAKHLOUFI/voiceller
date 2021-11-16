@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
	<!-- Telephone Input CSS -->
	<link href="{{URL::asset('plugins/telephoneinput/telephoneinput.css')}}" rel="stylesheet" >
@endsection

@section('page-header')
	<!-- EDIT PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Update Personal Information') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="mdi mdi-account-settings-variant mr-2 fs-12"></i>{{ __('User') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('My Profile Settings') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Edit Profile') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')
	<!-- EDIT USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="card border-0">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="@if(auth()->user()->profile_photo_path){{ asset(auth()->user()->profile_photo_path) }} @else {{ URL::asset('img/users/avatar.jpg') }} @endif"></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold fs-16">{{ auth()->user()->name }}</h4>
						<h6 class="text-muted fs-12">{{ auth()->user()->job_role }}</h6>
						<a href="{{ route('user.profile') }}" class="btn btn-primary mt-3 mb-2">{{ __('View Profile') }}</a>
					</div>
				</div>
				<div class="card-footer p-0">
					<div class="row">
						<div class="col-sm-6 border-right text-center">
							<div class="p-4">
								<h5 class="mb-1 font-weight-bold text-dark number-font fs-14">${{ number_format(auth()->user()->balance) }}</h5>
								<span class="text-muted fs-14">{{ __('Current Balance') }}</span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="text-center p-4">
								<h5 class="mb-1 font-weight-bold text-dark number-font fs-14">{{ number_format(auth()->user()->available_chars) }}</h5>
								<span class="text-muted fs-14">{{ __('Available Characters') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit Profile') }}</h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="{{ route('user.profile.update', [auth()->user()->id]) }}" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Full Name') }}</label>
										<input type="text" class="form-control @error('name') is-danger @enderror" name="name" value="{{ auth()->user()->name }}">
										@error('name')
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@enderror									
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Job Role') }}</label>
										<input type="text" class="form-control @error('job_role') is-danger @enderror" name="job_role" value="{{ auth()->user()->job_role }}">
										@error('job_role')
											<p class="text-danger">{{ $errors->first('job_role') }}</p>
										@enderror
									</div>
								</div>
							</div>						
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Email Address') }}</label>
										<input type="email" class="form-control @error('email') is-danger @enderror" name="email" value="{{ auth()->user()->email }}">
										@error('email')
											<p class="text-danger">{{ $errors->first('email') }}</p>
										@enderror
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">								
										<label class="form-label fs-12">{{ __('Phone Number') }}</label>
										<input type="tel" class="fs-12 @error('phone_number') is-danger @enderror" id="phone-number" name="phone_number" value="{{ auth()->user()->phone_number }}">
										@error('phone_number')
											<p class="text-danger">{{ $errors->first('phone_number') }}</p>
										@enderror
									</div>
								</div>
							</div>			
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<label class="form-label fs-12">{{ __('Change Avatar') }}</label>
									<div class="input-group file-browser">									
										<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
										<label class="input-group-btn">
											<span class="btn btn-primary special-btn">
												Browse <input type="file" name="profile_photo" style="display: none;">
											</span>
										</label>
									</div>
									@error('profile_photo')
										<p class="text-danger">{{ $errors->first('profile_photo') }}</p>
									@enderror
								</div>
							</div>	
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Company Name') }}</label>
										<input type="text" class="form-control @error('company') is-danger @enderror" name="company" value="{{ auth()->user()->company }}">
										@error('company')
											<p class="text-danger">{{ $errors->first('company') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Company Website') }}</label>
										<input type="text" class="form-control @error('website') is-danger @enderror" name="website" value="{{ auth()->user()->website }}">
										@error('website')
											<p class="text-danger">{{ $errors->first('website') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Address Line') }}</label>
										<input type="text" class="form-control @error('address') is-danger @enderror" name="address" value="{{ auth()->user()->address }}">
										@error('address')
											<p class="text-danger">{{ $errors->first('address') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('City') }}</label>
										<input type="text" class="form-control @error('city') is-danger @enderror" name="city" value="{{ auth()->user()->city }}">
										@error('city')
											<p class="text-danger">{{ $errors->first('city') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Postal Code') }}</label>
										<input type="text" class="form-control @error('postal_code') is-danger @enderror" name="postal_code" value="{{ auth()->user()->postal_code }}">
										@error('postal_code')
											<p class="text-danger">{{ $errors->first('postal_code') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label class="form-label fs-12">{{ __('Country') }}</label>
									<select id="user-country" name="country" data-placeholder="Select Your Country:">	
										<option value="Afganistan" {{ (auth()->user()->country == 'Afganistan') ? 'selected' : '' }}><img src="{{URL::asset('img/csp/aws-lg.png')}}" class="csp-brand-img"> Afghanistan</option>
										<option value="Albania" {{ (auth()->user()->country == 'Albania') ? 'selected' : '' }}>Albania</option>
										<option value="Algeria" {{ (auth()->user()->country == 'Algeria') ? 'selected' : '' }}>Algeria</option>
										<option value="American Samoa" {{ (auth()->user()->country == 'American Samoa') ? 'selected' : '' }}>American Samoa</option>
										<option value="Andorra" {{ (auth()->user()->country == 'Andorra') ? 'selected' : '' }}>Andorra</option>
										<option value="Angola" {{ (auth()->user()->country == 'Angola') ? 'selected' : '' }}>Angola</option>
										<option value="Anguilla" {{ (auth()->user()->country == 'Anguilla') ? 'selected' : '' }}>Anguilla</option>
										<option value="Antigua and Barbuda" {{ (auth()->user()->country == 'Antigua and Barbuda') ? 'selected' : '' }}>Antigua & Barbuda</option>
										<option value="Argentina" {{ (auth()->user()->country == 'Argentina') ? 'selected' : '' }}>Argentina</option>
										<option value="Armenia" {{ (auth()->user()->country == 'Armenia') ? 'selected' : '' }}>Armenia</option>
										<option value="Aruba" {{ (auth()->user()->country == 'Aruba') ? 'selected' : '' }}>Aruba</option>
										<option value="Australia" {{ (auth()->user()->country == 'Australia') ? 'selected' : '' }}>Australia</option>
										<option value="Austria" {{ (auth()->user()->country == 'Austria') ? 'selected' : '' }}>Austria</option>
										<option value="Azerbaijan" {{ (auth()->user()->country == 'Azerbaijan') ? 'selected' : '' }}>Azerbaijan</option>
										<option value="Bahamas" {{ (auth()->user()->country == 'Bahamas') ? 'selected' : '' }}>Bahamas</option>
										<option value="Bahrain" {{ (auth()->user()->country == 'Bahrain') ? 'selected' : '' }}>Bahrain</option>
										<option value="Bangladesh" {{ (auth()->user()->country == 'Bangladesh') ? 'selected' : '' }}>Bangladesh</option>
										<option value="Barbados" {{ (auth()->user()->country == 'Barbados') ? 'selected' : '' }}>Barbados</option>
										<option value="Belarus" {{ (auth()->user()->country == 'Belarus') ? 'selected' : '' }}>Belarus</option>
										<option value="Belgium" {{ (auth()->user()->country == 'Belgium') ? 'selected' : '' }}>Belgium</option>
										<option value="Belize" {{ (auth()->user()->country == 'Belize') ? 'selected' : '' }}>Belize</option>
										<option value="Benin" {{ (auth()->user()->country == 'Benin') ? 'selected' : '' }}>Benin</option>
										<option value="Bermuda" {{ (auth()->user()->country == 'Bermuda') ? 'selected' : '' }}>Bermuda</option>
										<option value="Bhutan" {{ (auth()->user()->country == 'Bhutan') ? 'selected' : '' }}>Bhutan</option>
										<option value="Bolivia" {{ (auth()->user()->country == 'Bolivia') ? 'selected' : '' }}>Bolivia</option>
										<option value="Bonaire" {{ (auth()->user()->country == 'Bonaire') ? 'selected' : '' }}>Bonaire</option>
										<option value="Bosnia and Herzegovina" {{ (auth()->user()->country == 'Bosnia and Herzegovina') ? 'selected' : '' }}>Bosnia & Herzegovina</option>
										<option value="Botswana" {{ (auth()->user()->country == 'Botswana') ? 'selected' : '' }}>Botswana</option>
										<option value="Brazil" {{ (auth()->user()->country == 'Brazil') ? 'selected' : '' }}>Brazil</option>
										<option value="British Indian Ocean Territory" {{ (auth()->user()->country == 'British Indian Ocean Territory') ? 'selected' : '' }}>British Indian Ocean Ter</option>
										<option value="Brunei" {{ (auth()->user()->country == 'Brunei') ? 'selected' : '' }}>Brunei</option>
										<option value="Bulgaria" {{ (auth()->user()->country == 'Bulgaria') ? 'selected' : '' }}>Bulgaria</option>
										<option value="Burkina Faso" {{ (auth()->user()->country == 'Burkina Faso') ? 'selected' : '' }}>Burkina Faso</option>
										<option value="Burundi" {{ (auth()->user()->country == 'Burundi') ? 'selected' : '' }}>Burundi</option>
										<option value="Cambodia" {{ (auth()->user()->country == 'Cambodia') ? 'selected' : '' }}>Cambodia</option>
										<option value="Cameroon" {{ (auth()->user()->country == 'Cameroon') ? 'selected' : '' }}>Cameroon</option>
										<option value="Canada" {{ (auth()->user()->country == 'Canada') ? 'selected' : '' }}>Canada</option>
										<option value="Canary Islands" {{ (auth()->user()->country == 'Canary Islands') ? 'selected' : '' }}>Canary Islands</option>
										<option value="Cape Verde" {{ (auth()->user()->country == 'Cape Verde') ? 'selected' : '' }}>Cape Verde</option>
										<option value="Cayman Islands" {{ (auth()->user()->country == 'Cayman Islands') ? 'selected' : '' }}>Cayman Islands</option>
										<option value="Central African Republic" {{ (auth()->user()->country == 'Central African Republic') ? 'selected' : '' }}>Central African Republic</option>
										<option value="Chad" {{ (auth()->user()->country == 'Chad') ? 'selected' : '' }}>Chad</option>
										<option value="Channel Islands" {{ (auth()->user()->country == 'Channel Islands') ? 'selected' : '' }}>Channel Islands</option>
										<option value="Chile" {{ (auth()->user()->country == 'Chile') ? 'selected' : '' }}>Chile</option>
										<option value="China" {{ (auth()->user()->country == 'China') ? 'selected' : '' }}>China</option>
										<option value="Christmas Island" {{ (auth()->user()->country == 'Christmas Island') ? 'selected' : '' }}>Christmas Island</option>
										<option value="Cocos Island" {{ (auth()->user()->country == 'Cocos Island') ? 'selected' : '' }}>Cocos Island</option>
										<option value="Colombia" {{ (auth()->user()->country == 'Colombia') ? 'selected' : '' }}>Colombia</option>
										<option value="Comoros" {{ (auth()->user()->country == 'Comoros') ? 'selected' : '' }}>Comoros</option>
										<option value="Congo" {{ (auth()->user()->country == 'Congo') ? 'selected' : '' }}>Congo</option>
										<option value="Cook Islands" {{ (auth()->user()->country == 'Cook Islands') ? 'selected' : '' }}>Cook Islands</option>
										<option value="Costa Rica" {{ (auth()->user()->country == 'Costa Rica') ? 'selected' : '' }}>Costa Rica</option>
										<option value="Cote Divoire" {{ (auth()->user()->country == 'Cote Divoire') ? 'selected' : '' }}>Cote DIvoire</option>
										<option value="Croatia" {{ (auth()->user()->country == 'Croatia') ? 'selected' : '' }}>Croatia</option>
										<option value="Cuba" {{ (auth()->user()->country == 'Cuba') ? 'selected' : '' }}>Cuba</option>
										<option value="Curaco" {{ (auth()->user()->country == 'Curaco') ? 'selected' : '' }}>Curacao</option>
										<option value="Cyprus" {{ (auth()->user()->country == 'Cyprus') ? 'selected' : '' }}>Cyprus</option>
										<option value="Czech Republic" {{ (auth()->user()->country == 'Czech Republic') ? 'selected' : '' }}>Czech Republic</option>
										<option value="Denmark" {{ (auth()->user()->country == 'Denmark') ? 'selected' : '' }}>Denmark</option>
										<option value="Djibouti" {{ (auth()->user()->country == 'Djibouti') ? 'selected' : '' }}>Djibouti</option>
										<option value="Dominica" {{ (auth()->user()->country == 'Dominica') ? 'selected' : '' }}>Dominica</option>
										<option value="Dominican Republic" {{ (auth()->user()->country == 'Dominican Republic') ? 'selected' : '' }}>Dominican Republic</option>
										<option value="East Timor" {{ (auth()->user()->country == 'East Timor') ? 'selected' : '' }}>East Timor</option>
										<option value="Ecuador" {{ (auth()->user()->country == 'Ecuador') ? 'selected' : '' }}>Ecuador</option>
										<option value="Egypt" {{ (auth()->user()->country == 'Egypt') ? 'selected' : '' }}>Egypt</option>
										<option value="El Salvador" {{ (auth()->user()->country == 'El Salvador') ? 'selected' : '' }}>El Salvador</option>
										<option value="Equatorial Guinea" {{ (auth()->user()->country == 'Equatorial Guinea') ? 'selected' : '' }}>Equatorial Guinea</option>
										<option value="Eritrea" {{ (auth()->user()->country == 'Eritrea') ? 'selected' : '' }}>Eritrea</option>
										<option value="Estonia" {{ (auth()->user()->country == 'Estonia') ? 'selected' : '' }}>Estonia</option>
										<option value="Ethiopia" {{ (auth()->user()->country == 'Ethiopia') ? 'selected' : '' }}>Ethiopia</option>
										<option value="Falkland Islands" {{ (auth()->user()->country == 'Falkland Islands') ? 'selected' : '' }}>Falkland Islands</option>
										<option value="Faroe Islands" {{ (auth()->user()->country == 'Faroe Islands') ? 'selected' : '' }}>Faroe Islands</option>
										<option value="Fiji" {{ (auth()->user()->country == 'Fiji') ? 'selected' : '' }}>Fiji</option>
										<option value="Finland" {{ (auth()->user()->country == 'Finland') ? 'selected' : '' }}>Finland</option>
										<option value="France" {{ (auth()->user()->country == 'France') ? 'selected' : '' }}>France</option>
										<option value="French Guiana" {{ (auth()->user()->country == 'French Guiana') ? 'selected' : '' }}>French Guiana</option>
										<option value="French Polynesia" {{ (auth()->user()->country == 'French Polynesia') ? 'selected' : '' }}>French Polynesia</option>
										<option value="French Southern Territory" {{ (auth()->user()->country == 'French Southern Territory') ? 'selected' : '' }}>French Southern Ter</option>
										<option value="Gabon" {{ (auth()->user()->country == 'Gabon') ? 'selected' : '' }}>Gabon</option>
										<option value="Gambia" {{ (auth()->user()->country == 'Gambia') ? 'selected' : '' }}>Gambia</option>
										<option value="Georgia" {{ (auth()->user()->country == 'Georgia') ? 'selected' : '' }}>Georgia</option>
										<option value="Germany" {{ (auth()->user()->country == 'Germany') ? 'selected' : '' }}>Germany</option>
										<option value="Ghana" {{ (auth()->user()->country == 'Ghana') ? 'selected' : '' }}>Ghana</option>
										<option value="Gibraltar" {{ (auth()->user()->country == 'Gibraltar') ? 'selected' : '' }}>Gibraltar</option>
										<option value="Great Britain" {{ (auth()->user()->country == 'Great Britain') ? 'selected' : '' }}>Great Britain</option>
										<option value="Greece" {{ (auth()->user()->country == 'Greece') ? 'selected' : '' }}>Greece</option>
										<option value="Greenland" {{ (auth()->user()->country == 'Greenland') ? 'selected' : '' }}>Greenland</option>
										<option value="Grenada" {{ (auth()->user()->country == 'Grenada') ? 'selected' : '' }}>Grenada</option>
										<option value="Guadeloupe" {{ (auth()->user()->country == 'Guadeloupe') ? 'selected' : '' }}>Guadeloupe</option>
										<option value="Guam" {{ (auth()->user()->country == 'Guam') ? 'selected' : '' }}>Guam</option>
										<option value="Guatemala" {{ (auth()->user()->country == 'Guatemala') ? 'selected' : '' }}>Guatemala</option>
										<option value="Guinea" {{ (auth()->user()->country == 'Guinea') ? 'selected' : '' }}>Guinea</option>
										<option value="Guyana" {{ (auth()->user()->country == 'Guyana') ? 'selected' : '' }}>Guyana</option>
										<option value="Haiti" {{ (auth()->user()->country == 'Haiti') ? 'selected' : '' }}>Haiti</option>
										<option value="Hawaii" {{ (auth()->user()->country == 'Hawaii') ? 'selected' : '' }}>Hawaii</option>
										<option value="Honduras" {{ (auth()->user()->country == 'Honduras') ? 'selected' : '' }}>Honduras</option>
										<option value="Hong Kong" {{ (auth()->user()->country == 'Hong Kong') ? 'selected' : '' }}>Hong Kong</option>
										<option value="Hungary" {{ (auth()->user()->country == 'Hungary') ? 'selected' : '' }}>Hungary</option>
										<option value="Iceland" {{ (auth()->user()->country == 'Iceland') ? 'selected' : '' }}>Iceland</option>
										<option value="Indonesia" {{ (auth()->user()->country == 'Indonesia') ? 'selected' : '' }}>Indonesia</option>
										<option value="India" {{ (auth()->user()->country == 'India') ? 'selected' : '' }}>India</option>
										<option value="Iran" {{ (auth()->user()->country == 'Iran') ? 'selected' : '' }}>Iran</option>
										<option value="Iraq" {{ (auth()->user()->country == 'Iraq') ? 'selected' : '' }}>Iraq</option>
										<option value="Ireland" {{ (auth()->user()->country == 'Ireland') ? 'selected' : '' }}>Ireland</option>
										<option value="Isle of Man" {{ (auth()->user()->country == 'Isle of Man') ? 'selected' : '' }}>Isle of Man</option>
										<option value="Israel" {{ (auth()->user()->country == 'Israel') ? 'selected' : '' }}>Israel</option>
										<option value="Italy" {{ (auth()->user()->country == 'Italy') ? 'selected' : '' }}>Italy</option>
										<option value="Jamaica" {{ (auth()->user()->country == 'Jamaica') ? 'selected' : '' }}>Jamaica</option>
										<option value="Japan" {{ (auth()->user()->country == 'Japan') ? 'selected' : '' }}>Japan</option>
										<option value="Jordan" {{ (auth()->user()->country == 'Jordan') ? 'selected' : '' }}>Jordan</option>
										<option value="Kazakhstan" {{ (auth()->user()->country == 'Kazakhstan') ? 'selected' : '' }}>Kazakhstan</option>
										<option value="Kenya" {{ (auth()->user()->country == 'Kenya') ? 'selected' : '' }}>Kenya</option>
										<option value="Kiribati" {{ (auth()->user()->country == 'Kiribati') ? 'selected' : '' }}>Kiribati</option>
										<option value="North Korea" {{ (auth()->user()->country == 'North Korea') ? 'selected' : '' }}>Korea North</option>
										<option value="South Korea" {{ (auth()->user()->country == 'South Korea') ? 'selected' : '' }}>Korea South</option>
										<option value="Kuwait" {{ (auth()->user()->country == 'Kuwait') ? 'selected' : '' }}>Kuwait</option>
										<option value="Kyrgyzstan" {{ (auth()->user()->country == 'Kyrgyzstan') ? 'selected' : '' }}>Kyrgyzstan</option>
										<option value="Laos" {{ (auth()->user()->country == 'Laos') ? 'selected' : '' }}>Laos</option>
										<option value="Latvia" {{ (auth()->user()->country == 'Latvia') ? 'selected' : '' }}>Latvia</option>
										<option value="Lebanon" {{ (auth()->user()->country == 'Lebanon') ? 'selected' : '' }}>Lebanon</option>
										<option value="Lesotho" {{ (auth()->user()->country == 'Lesotho') ? 'selected' : '' }}>Lesotho</option>
										<option value="Liberia" {{ (auth()->user()->country == 'Liberia') ? 'selected' : '' }}>Liberia</option>
										<option value="Libya" {{ (auth()->user()->country == 'Liberia') ? 'selected' : '' }}>Libya</option>
										<option value="Liechtenstein" {{ (auth()->user()->country == 'Liechtenstein') ? 'selected' : '' }}>Liechtenstein</option>
										<option value="Lithuania" {{ (auth()->user()->country == 'Lithuania') ? 'selected' : '' }}>Lithuania</option>
										<option value="Luxembourg" {{ (auth()->user()->country == 'Luxembourg') ? 'selected' : '' }}>Luxembourg</option>
										<option value="Macau" {{ (auth()->user()->country == 'Macau') ? 'selected' : '' }}>Macau</option>
										<option value="Macedonia" {{ (auth()->user()->country == 'Macedonia') ? 'selected' : '' }}>Macedonia</option>
										<option value="Madagascar" {{ (auth()->user()->country == 'Madagascar') ? 'selected' : '' }}>Madagascar</option>
										<option value="Malaysia" {{ (auth()->user()->country == 'Malaysia') ? 'selected' : '' }}>Malaysia</option>
										<option value="Malawi" {{ (auth()->user()->country == 'Malawi') ? 'selected' : '' }}>Malawi</option>
										<option value="Maldives" {{ (auth()->user()->country == 'Maldives') ? 'selected' : '' }}>Maldives</option>
										<option value="Mali" {{ (auth()->user()->country == 'Mali') ? 'selected' : '' }}>Mali</option>
										<option value="Malta" {{ (auth()->user()->country == 'Malta') ? 'selected' : '' }}>Malta</option>
										<option value="Marshall Islands" {{ (auth()->user()->country == 'Marshall Islands') ? 'selected' : '' }}>Marshall Islands</option>
										<option value="Martinique" {{ (auth()->user()->country == 'Martinique') ? 'selected' : '' }}>Martinique</option>
										<option value="Mauritania" {{ (auth()->user()->country == 'Mauritania') ? 'selected' : '' }}>Mauritania</option>
										<option value="Mauritius" {{ (auth()->user()->country == 'Mauritius') ? 'selected' : '' }}>Mauritius</option>
										<option value="Mayotte" {{ (auth()->user()->country == 'Mayotte') ? 'selected' : '' }}>Mayotte</option>
										<option value="Mexico" {{ (auth()->user()->country == 'Mexico') ? 'selected' : '' }}>Mexico</option>
										<option value="Midway Islands" {{ (auth()->user()->country == 'Midway Islands') ? 'selected' : '' }}>Midway Islands</option>
										<option value="Moldova" {{ (auth()->user()->country == 'Moldova') ? 'selected' : '' }}>Moldova</option>
										<option value="Monaco" {{ (auth()->user()->country == 'Monaco') ? 'selected' : '' }}>Monaco</option>
										<option value="Mongolia" {{ (auth()->user()->country == 'Mongolia') ? 'selected' : '' }}>Mongolia</option>
										<option value="Montserrat" {{ (auth()->user()->country == 'Montserrat') ? 'selected' : '' }}>Montserrat</option>
										<option value="Morocco" {{ (auth()->user()->country == '') ? 'selected' : '' }}>Morocco</option>
										<option value="Mozambique" {{ (auth()->user()->country == '') ? 'selected' : '' }}>Mozambique</option>
										<option value="Myanmar" {{ (auth()->user()->country == '') ? 'selected' : '' }}>Myanmar</option>
										<option value="Nambia" {{ (auth()->user()->country == 'Nambia') ? 'selected' : '' }}>Nambia</option>
										<option value="Nauru" {{ (auth()->user()->country == 'Nauru') ? 'selected' : '' }}>Nauru</option>
										<option value="Nepal" {{ (auth()->user()->country == 'Nepal') ? 'selected' : '' }}>Nepal</option>
										<option value="Netherland Antilles" {{ (auth()->user()->country == 'Netherland Antilles') ? 'selected' : '' }}>Netherland Antilles</option>
										<option value="Netherlands" {{ (auth()->user()->country == 'Netherlands') ? 'selected' : '' }}>Netherlands (Holland, Europe)</option>
										<option value="Nevis" {{ (auth()->user()->country == 'Nevis') ? 'selected' : '' }}>Nevis</option>
										<option value="New Caledonia" {{ (auth()->user()->country == 'New Caledonia') ? 'selected' : '' }}>New Caledonia</option>
										<option value="New Zealand" {{ (auth()->user()->country == 'New Zealand') ? 'selected' : '' }}>New Zealand</option>
										<option value="Nicaragua" {{ (auth()->user()->country == 'Nicaragua') ? 'selected' : '' }}>Nicaragua</option>
										<option value="Niger" {{ (auth()->user()->country == 'Niger') ? 'selected' : '' }}>Niger</option>
										<option value="Nigeria" {{ (auth()->user()->country == 'Nigeria') ? 'selected' : '' }}>Nigeria</option>
										<option value="Niue" {{ (auth()->user()->country == 'Niue') ? 'selected' : '' }}>Niue</option>
										<option value="Norfolk Island" {{ (auth()->user()->country == 'Norfolk Island') ? 'selected' : '' }}>Norfolk Island</option>
										<option value="Norway" {{ (auth()->user()->country == 'Norway') ? 'selected' : '' }}>Norway</option>
										<option value="Oman" {{ (auth()->user()->country == 'Oman') ? 'selected' : '' }}>Oman</option>
										<option value="Pakistan" {{ (auth()->user()->country == 'Pakistan') ? 'selected' : '' }}>Pakistan</option>
										<option value="Palau Island" {{ (auth()->user()->country == 'Palau Island') ? 'selected' : '' }}>Palau Island</option>
										<option value="Palestine" {{ (auth()->user()->country == 'Palestine') ? 'selected' : '' }}>Palestine</option>
										<option value="Panama" {{ (auth()->user()->country == 'Panama') ? 'selected' : '' }}>Panama</option>
										<option value="Papua New Guinea" {{ (auth()->user()->country == 'Papua New Guinea') ? 'selected' : '' }}>Papua New Guinea</option>
										<option value="Paraguay" {{ (auth()->user()->country == 'Paraguay') ? 'selected' : '' }}>Paraguay</option>
										<option value="Peru" {{ (auth()->user()->country == 'Peru') ? 'selected' : '' }}>Peru</option>
										<option value="Phillipines" {{ (auth()->user()->country == 'Phillipines') ? 'selected' : '' }}>Philippines</option>
										<option value="Pitcairn Island" {{ (auth()->user()->country == 'Pitcairn Island') ? 'selected' : '' }}>Pitcairn Island</option>
										<option value="Poland" {{ (auth()->user()->country == 'Poland') ? 'selected' : '' }}>Poland</option>
										<option value="Portugal" {{ (auth()->user()->country == 'Portugal') ? 'selected' : '' }}>Portugal</option>
										<option value="Puerto Rico" {{ (auth()->user()->country == 'Puerto Rico') ? 'selected' : '' }}>Puerto Rico</option>
										<option value="Qatar" {{ (auth()->user()->country == 'Qatar') ? 'selected' : '' }}>Qatar</option>
										<option value="Republic of Montenegro" {{ (auth()->user()->country == 'Republic of Montenegro') ? 'selected' : '' }}>Republic of Montenegro</option>
										<option value="Republic of Serbia" {{ (auth()->user()->country == 'Republic of Serbia') ? 'selected' : '' }}>Republic of Serbia</option>
										<option value="Reunion" {{ (auth()->user()->country == 'Reunion') ? 'selected' : '' }}>Reunion</option>
										<option value="Romania" {{ (auth()->user()->country == 'Romania') ? 'selected' : '' }}>Romania</option>
										<option value="Russia" {{ (auth()->user()->country == 'Russia') ? 'selected' : '' }}>Russia</option>
										<option value="Rwanda" {{ (auth()->user()->country == 'Rwanda') ? 'selected' : '' }}>Rwanda</option>
										<option value="St Barthelemy" {{ (auth()->user()->country == 'St Barthelemy') ? 'selected' : '' }}>St Barthelemy</option>
										<option value="St Eustatius" {{ (auth()->user()->country == 'St Eustatius') ? 'selected' : '' }}>St Eustatius</option>
										<option value="St Helena" {{ (auth()->user()->country == 'St Helena') ? 'selected' : '' }}>St Helena</option>
										<option value="St Kitts-Nevis" {{ (auth()->user()->country == 'St Kitts-Nevis') ? 'selected' : '' }}>St Kitts-Nevis</option>
										<option value="St Lucia" {{ (auth()->user()->country == 'St Lucia') ? 'selected' : '' }}>St Lucia</option>
										<option value="St Maarten" {{ (auth()->user()->country == 'St Maarten') ? 'selected' : '' }}>St Maarten</option>
										<option value="St Pierre and Miquelon" {{ (auth()->user()->country == 'St Pierre and Miquelon') ? 'selected' : '' }}>St Pierre & Miquelon</option>
										<option value="St Vincent and Grenadines" {{ (auth()->user()->country == 'St Vincent and Grenadines') ? 'selected' : '' }}>St Vincent & Grenadines</option>
										<option value="Saipan" {{ (auth()->user()->country == 'Saipan') ? 'selected' : '' }}>Saipan</option>
										<option value="Samoa" {{ (auth()->user()->country == 'Samoa') ? 'selected' : '' }}>Samoa</option>
										<option value="American Samoa" {{ (auth()->user()->country == 'American Samoa') ? 'selected' : '' }}>Samoa American</option>
										<option value="San Marino" {{ (auth()->user()->country == 'San Marino') ? 'selected' : '' }}>San Marino</option>
										<option value="Sao Tome and Principe" {{ (auth()->user()->country == 'Sao Tome and Principe') ? 'selected' : '' }}>Sao Tome & Principe</option>
										<option value="Saudi Arabia" {{ (auth()->user()->country == 'Saudi Arabia') ? 'selected' : '' }}>Saudi Arabia</option>
										<option value="Senegal" {{ (auth()->user()->country == 'Senegal') ? 'selected' : '' }}>Senegal</option>
										<option value="Seychelles" {{ (auth()->user()->country == 'Seychelles') ? 'selected' : '' }}>Seychelles</option>
										<option value="Sierra Leone" {{ (auth()->user()->country == 'Sierra Leone') ? 'selected' : '' }}>Sierra Leone</option>
										<option value="Singapore" {{ (auth()->user()->country == 'Singapore') ? 'selected' : '' }}>Singapore</option>
										<option value="Slovakia" {{ (auth()->user()->country == 'Slovakia') ? 'selected' : '' }}>Slovakia</option>
										<option value="Slovenia" {{ (auth()->user()->country == 'Slovenia') ? 'selected' : '' }}>Slovenia</option>
										<option value="Solomon Islands" {{ (auth()->user()->country == 'Solomon Islands') ? 'selected' : '' }}>Solomon Islands</option>
										<option value="Somalia" {{ (auth()->user()->country == 'Somalia') ? 'selected' : '' }}>Somalia</option>
										<option value="South Africa" {{ (auth()->user()->country == 'South Africa') ? 'selected' : '' }}>South Africa</option>
										<option value="Spain" {{ (auth()->user()->country == 'Spain') ? 'selected' : '' }}>Spain</option>
										<option value="Sri Lanka" {{ (auth()->user()->country == 'Sri Lanka') ? 'selected' : '' }}>Sri Lanka</option>
										<option value="Sudan" {{ (auth()->user()->country == 'Sudan') ? 'selected' : '' }}>Sudan</option>
										<option value="Suriname" {{ (auth()->user()->country == 'Suriname') ? 'selected' : '' }}>Suriname</option>
										<option value="Swaziland" {{ (auth()->user()->country == 'Swaziland') ? 'selected' : '' }}>Swaziland</option>
										<option value="Sweden" {{ (auth()->user()->country == 'Sweden') ? 'selected' : '' }}>Sweden</option>
										<option value="Switzerland" {{ (auth()->user()->country == 'Switzerland') ? 'selected' : '' }}>Switzerland</option>
										<option value="Syria" {{ (auth()->user()->country == 'Syria') ? 'selected' : '' }}>Syria</option>
										<option value="Tahiti" {{ (auth()->user()->country == 'Tahiti') ? 'selected' : '' }}>Tahiti</option>
										<option value="Taiwan" {{ (auth()->user()->country == 'Taiwan') ? 'selected' : '' }}>Taiwan</option>
										<option value="Tajikistan" {{ (auth()->user()->country == 'Tajikistan') ? 'selected' : '' }}>Tajikistan</option>
										<option value="Tanzania" {{ (auth()->user()->country == 'Tanzania') ? 'selected' : '' }}>Tanzania</option>
										<option value="Thailand" {{ (auth()->user()->country == 'Thailand') ? 'selected' : '' }}>Thailand</option>
										<option value="Togo" {{ (auth()->user()->country == 'Togo') ? 'selected' : '' }}>Togo</option>
										<option value="Tokelau" {{ (auth()->user()->country == 'Tokelau') ? 'selected' : '' }}>Tokelau</option>
										<option value="Tonga" {{ (auth()->user()->country == 'Tonga') ? 'selected' : '' }}>Tonga</option>
										<option value="Trinidad and Tobago" {{ (auth()->user()->country == 'Trinidad and Tobago') ? 'selected' : '' }}>Trinidad & Tobago</option>
										<option value="Tunisia" {{ (auth()->user()->country == 'Tunisia') ? 'selected' : '' }}>Tunisia</option>
										<option value="Turkey" {{ (auth()->user()->country == 'Turkey') ? 'selected' : '' }}>Turkey</option>
										<option value="Turkmenistan" {{ (auth()->user()->country == 'Turkmenistan') ? 'selected' : '' }}>Turkmenistan</option>
										<option value="Turks and Caicos Islands" {{ (auth()->user()->country == 'Turks and Caicos Islands') ? 'selected' : '' }}>Turks & Caicos Is</option>
										<option value="Tuvalu" {{ (auth()->user()->country == 'Tuvalu') ? 'selected' : '' }}>Tuvalu</option>
										<option value="Uganda" {{ (auth()->user()->country == '') ? 'selected' : '' }}>Uganda</option>
										<option value="United Kingdom" {{ (auth()->user()->country == '') ? 'selected' : '' }}>United Kingdom</option>
										<option value="Ukraine" {{ (auth()->user()->country == '') ? 'selected' : '' }}>Ukraine</option>
										<option value="United Arab Erimates" {{ (auth()->user()->country == 'United Arab Erimates') ? 'selected' : '' }}>United Arab Emirates</option>
										<option value="United States" {{ (auth()->user()->country == 'United States') ? 'selected' : '' }}>United States</option>
										<option value="Uraguay" {{ (auth()->user()->country == 'Uraguay') ? 'selected' : '' }}>Uruguay</option>
										<option value="Uzbekistan" {{ (auth()->user()->country == 'Uzbekistan') ? 'selected' : '' }}>Uzbekistan</option>
										<option value="Vanuatu" {{ (auth()->user()->country == 'Vanuatu') ? 'selected' : '' }}>Vanuatu</option>
										<option value="Vatican City State" {{ (auth()->user()->country == 'Vatican City State') ? 'selected' : '' }}>Vatican City State</option>
										<option value="Venezuela" {{ (auth()->user()->country == 'Venezuela') ? 'selected' : '' }}>Venezuela</option>
										<option value="Vietnam" {{ (auth()->user()->country == 'Vietnam') ? 'selected' : '' }}>Vietnam</option>
										<option value="Virgin Islands (Britain)" {{ (auth()->user()->country == 'Virgin Islands (Britain)') ? 'selected' : '' }}>Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)" {{ (auth()->user()->country == 'Virgin Islands (USA)') ? 'selected' : '' }}>Virgin Islands (USA)</option>
										<option value="Wake Island" {{ (auth()->user()->country == 'Wake Island') ? 'selected' : '' }}>Wake Island</option>
										<option value="Wallis and Futana Islands" {{ (auth()->user()->country == 'Wallis and Futana Islands') ? 'selected' : '' }}>Wallis & Futana Is</option>
										<option value="Yemen" {{ (auth()->user()->country == 'Yemen') ? 'selected' : '' }}>Yemen</option>
										<option value="Zaire" {{ (auth()->user()->country == 'Zaire') ? 'selected' : '' }}>Zaire</option>
										<option value="Zambia" {{ (auth()->user()->country == 'Zambia') ? 'selected' : '' }}>Zambia</option>
										<option value="Zimbabwe" {{ (auth()->user()->country == 'Zimbabwe') ? 'selected' : '' }}>Zimbabwe</option>										
									</select>
									@error('country')
										<p class="text-danger">{{ $errors->first('country') }}</p>
									@enderror
								</div>
							</div>
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">
							<a href="{{ route('user.profile') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- EDIT USER PROFILE PAGE --> 
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
	<!-- File Uploader -->
	<script src="{{URL::asset('js/file-upload.js')}}"></script>
	<!-- Telephone Input JS -->
	<script src="{{URL::asset('plugins/telephoneinput/telephoneinput.js')}}"></script>
	<script>
		$(function() {
			"use strict";
			
			$("#phone-number").intlTelInput();
		});
	</script>
@endsection