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
			<h4 class="page-title mb-0">{{ __('Edit User Information') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="mdi mdi-account-convert mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.user.dashboard') }}"> {{ __('User Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.user.list') }}">{{ __('User List') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('Edit User') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')
	<!-- EDIT USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit User Information') }}</h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="{{ route('admin.user.update', [$user->id]) }}" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Full Name') }}</label>
										<input type="text" class="form-control @error('name') is-danger @enderror" name="name" value="{{ $user->name }}">
										@error('name')
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@enderror									
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Email Address') }}</label>
										<input type="email" class="form-control @error('email') is-danger @enderror" name="email" value="{{ $user->email }}">
										@error('email')
											<p class="text-danger">{{ $errors->first('email') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Job Role') }}</label>
										<input type="text" class="form-control @error('job_role') is-danger @enderror" name="job_role" value="{{ $user->job_role }}">
										@error('job_role')
											<p class="text-danger">{{ $errors->first('job_role') }}</p>
										@enderror
									</div>
								</div>
							</div>						
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">								
										<label class="form-label fs-12">{{ __('Phone Number') }}</label>
										<input type="tel" class="fs-12 @error('phone_number') is-danger @enderror" id="phone-number" name="phone_number" value="{{ $user->phone_number }}">
										@error('phone_number')
											<p class="text-danger">{{ $errors->first('phone_number') }}</p>
										@enderror
									</div>
								</div>
							</div>			
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Company Name') }}</label>
										<input type="text" class="form-control @error('company') is-danger @enderror" name="company" value="{{ $user->company }}">
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
										<input type="text" class="form-control @error('website') is-danger @enderror" name="website" value="{{ $user->website }}">
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
										<input type="text" class="form-control @error('address') is-danger @enderror" name="address" value="{{ $user->address }}">
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
										<input type="text" class="form-control @error('city') is-danger @enderror" name="city" value="{{ $user->city }}">
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
										<input type="text" class="form-control @error('postal_code') is-danger @enderror" name="postal_code" value="{{ $user->postal_code }}">
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
										<option value="Afganistan" {{ ($user->country == 'Afganistan') ? 'selected' : '' }}>Afghanistan</option>
										<option value="Albania" {{ ($user->country == 'Albania') ? 'selected' : '' }}>Albania</option>
										<option value="Algeria" {{ ($user->country == 'Algeria') ? 'selected' : '' }}>Algeria</option>
										<option value="American Samoa" {{ ($user->country == 'American Samoa') ? 'selected' : '' }}>American Samoa</option>
										<option value="Andorra" {{ ($user->country == 'Andorra') ? 'selected' : '' }}>Andorra</option>
										<option value="Angola" {{ ($user->country == 'Angola') ? 'selected' : '' }}>Angola</option>
										<option value="Anguilla" {{ ($user->country == 'Anguilla') ? 'selected' : '' }}>Anguilla</option>
										<option value="Antigua and Barbuda" {{ ($user->country == 'Antigua and Barbuda') ? 'selected' : '' }}>Antigua & Barbuda</option>
										<option value="Argentina" {{ ($user->country == 'Argentina') ? 'selected' : '' }}>Argentina</option>
										<option value="Armenia" {{ ($user->country == 'Armenia') ? 'selected' : '' }}>Armenia</option>
										<option value="Aruba" {{ ($user->country == 'Aruba') ? 'selected' : '' }}>Aruba</option>
										<option value="Australia" {{ ($user->country == 'Australia') ? 'selected' : '' }}>Australia</option>
										<option value="Austria" {{ ($user->country == 'Austria') ? 'selected' : '' }}>Austria</option>
										<option value="Azerbaijan" {{ ($user->country == 'Azerbaijan') ? 'selected' : '' }}>Azerbaijan</option>
										<option value="Bahamas" {{ ($user->country == 'Bahamas') ? 'selected' : '' }}>Bahamas</option>
										<option value="Bahrain" {{ ($user->country == 'Bahrain') ? 'selected' : '' }}>Bahrain</option>
										<option value="Bangladesh" {{ ($user->country == 'Bangladesh') ? 'selected' : '' }}>Bangladesh</option>
										<option value="Barbados" {{ ($user->country == 'Barbados') ? 'selected' : '' }}>Barbados</option>
										<option value="Belarus" {{ ($user->country == 'Belarus') ? 'selected' : '' }}>Belarus</option>
										<option value="Belgium" {{ ($user->country == 'Belgium') ? 'selected' : '' }}>Belgium</option>
										<option value="Belize" {{ ($user->country == 'Belize') ? 'selected' : '' }}>Belize</option>
										<option value="Benin" {{ ($user->country == 'Benin') ? 'selected' : '' }}>Benin</option>
										<option value="Bermuda" {{ ($user->country == 'Bermuda') ? 'selected' : '' }}>Bermuda</option>
										<option value="Bhutan" {{ ($user->country == 'Bhutan') ? 'selected' : '' }}>Bhutan</option>
										<option value="Bolivia" {{ ($user->country == 'Bolivia') ? 'selected' : '' }}>Bolivia</option>
										<option value="Bonaire" {{ ($user->country == 'Bonaire') ? 'selected' : '' }}>Bonaire</option>
										<option value="Bosnia and Herzegovina" {{ ($user->country == 'Bosnia and Herzegovina') ? 'selected' : '' }}>Bosnia & Herzegovina</option>
										<option value="Botswana" {{ ($user->country == 'Botswana') ? 'selected' : '' }}>Botswana</option>
										<option value="Brazil" {{ ($user->country == 'Brazil') ? 'selected' : '' }}>Brazil</option>
										<option value="British Indian Ocean Territory" {{ ($user->country == 'British Indian Ocean Territory') ? 'selected' : '' }}>British Indian Ocean Ter</option>
										<option value="Brunei" {{ ($user->country == 'Brunei') ? 'selected' : '' }}>Brunei</option>
										<option value="Bulgaria" {{ ($user->country == 'Bulgaria') ? 'selected' : '' }}>Bulgaria</option>
										<option value="Burkina Faso" {{ ($user->country == 'Burkina Faso') ? 'selected' : '' }}>Burkina Faso</option>
										<option value="Burundi" {{ ($user->country == 'Burundi') ? 'selected' : '' }}>Burundi</option>
										<option value="Cambodia" {{ ($user->country == 'Cambodia') ? 'selected' : '' }}>Cambodia</option>
										<option value="Cameroon" {{ ($user->country == 'Cameroon') ? 'selected' : '' }}>Cameroon</option>
										<option value="Canada" {{ ($user->country == 'Canada') ? 'selected' : '' }}>Canada</option>
										<option value="Canary Islands" {{ ($user->country == 'Canary Islands') ? 'selected' : '' }}>Canary Islands</option>
										<option value="Cape Verde" {{ ($user->country == 'Cape Verde') ? 'selected' : '' }}>Cape Verde</option>
										<option value="Cayman Islands" {{ ($user->country == 'Cayman Islands') ? 'selected' : '' }}>Cayman Islands</option>
										<option value="Central African Republic" {{ ($user->country == 'Central African Republic') ? 'selected' : '' }}>Central African Republic</option>
										<option value="Chad" {{ ($user->country == 'Chad') ? 'selected' : '' }}>Chad</option>
										<option value="Channel Islands" {{ ($user->country == 'Channel Islands') ? 'selected' : '' }}>Channel Islands</option>
										<option value="Chile" {{ ($user->country == 'Chile') ? 'selected' : '' }}>Chile</option>
										<option value="China" {{ ($user->country == 'China') ? 'selected' : '' }}>China</option>
										<option value="Christmas Island" {{ ($user->country == 'Christmas Island') ? 'selected' : '' }}>Christmas Island</option>
										<option value="Cocos Island" {{ ($user->country == 'Cocos Island') ? 'selected' : '' }}>Cocos Island</option>
										<option value="Colombia" {{ ($user->country == 'Colombia') ? 'selected' : '' }}>Colombia</option>
										<option value="Comoros" {{ ($user->country == 'Comoros') ? 'selected' : '' }}>Comoros</option>
										<option value="Congo" {{ ($user->country == 'Congo') ? 'selected' : '' }}>Congo</option>
										<option value="Cook Islands" {{ ($user->country == 'Cook Islands') ? 'selected' : '' }}>Cook Islands</option>
										<option value="Costa Rica" {{ ($user->country == 'Costa Rica') ? 'selected' : '' }}>Costa Rica</option>
										<option value="Cote Divoire" {{ ($user->country == 'Cote Divoire') ? 'selected' : '' }}>Cote DIvoire</option>
										<option value="Croatia" {{ ($user->country == 'Croatia') ? 'selected' : '' }}>Croatia</option>
										<option value="Cuba" {{ ($user->country == 'Cuba') ? 'selected' : '' }}>Cuba</option>
										<option value="Curaco" {{ ($user->country == 'Curaco') ? 'selected' : '' }}>Curacao</option>
										<option value="Cyprus" {{ ($user->country == 'Cyprus') ? 'selected' : '' }}>Cyprus</option>
										<option value="Czech Republic" {{ ($user->country == 'Czech Republic') ? 'selected' : '' }}>Czech Republic</option>
										<option value="Denmark" {{ ($user->country == 'Denmark') ? 'selected' : '' }}>Denmark</option>
										<option value="Djibouti" {{ ($user->country == 'Djibouti') ? 'selected' : '' }}>Djibouti</option>
										<option value="Dominica" {{ ($user->country == 'Dominica') ? 'selected' : '' }}>Dominica</option>
										<option value="Dominican Republic" {{ ($user->country == 'Dominican Republic') ? 'selected' : '' }}>Dominican Republic</option>
										<option value="East Timor" {{ ($user->country == 'East Timor') ? 'selected' : '' }}>East Timor</option>
										<option value="Ecuador" {{ ($user->country == 'Ecuador') ? 'selected' : '' }}>Ecuador</option>
										<option value="Egypt" {{ ($user->country == 'Egypt') ? 'selected' : '' }}>Egypt</option>
										<option value="El Salvador" {{ ($user->country == 'El Salvador') ? 'selected' : '' }}>El Salvador</option>
										<option value="Equatorial Guinea" {{ ($user->country == 'Equatorial Guinea') ? 'selected' : '' }}>Equatorial Guinea</option>
										<option value="Eritrea" {{ ($user->country == 'Eritrea') ? 'selected' : '' }}>Eritrea</option>
										<option value="Estonia" {{ ($user->country == 'Estonia') ? 'selected' : '' }}>Estonia</option>
										<option value="Ethiopia" {{ ($user->country == 'Ethiopia') ? 'selected' : '' }}>Ethiopia</option>
										<option value="Falkland Islands" {{ ($user->country == 'Falkland Islands') ? 'selected' : '' }}>Falkland Islands</option>
										<option value="Faroe Islands" {{ ($user->country == 'Faroe Islands') ? 'selected' : '' }}>Faroe Islands</option>
										<option value="Fiji" {{ ($user->country == 'Fiji') ? 'selected' : '' }}>Fiji</option>
										<option value="Finland" {{ ($user->country == 'Finland') ? 'selected' : '' }}>Finland</option>
										<option value="France" {{ ($user->country == 'France') ? 'selected' : '' }}>France</option>
										<option value="French Guiana" {{ ($user->country == 'French Guiana') ? 'selected' : '' }}>French Guiana</option>
										<option value="French Polynesia" {{ ($user->country == 'French Polynesia') ? 'selected' : '' }}>French Polynesia</option>
										<option value="French Southern Territory" {{ ($user->country == 'French Southern Territory') ? 'selected' : '' }}>French Southern Ter</option>
										<option value="Gabon" {{ ($user->country == 'Gabon') ? 'selected' : '' }}>Gabon</option>
										<option value="Gambia" {{ ($user->country == 'Gambia') ? 'selected' : '' }}>Gambia</option>
										<option value="Georgia" {{ ($user->country == 'Georgia') ? 'selected' : '' }}>Georgia</option>
										<option value="Germany" {{ ($user->country == 'Germany') ? 'selected' : '' }}>Germany</option>
										<option value="Ghana" {{ ($user->country == 'Ghana') ? 'selected' : '' }}>Ghana</option>
										<option value="Gibraltar" {{ ($user->country == 'Gibraltar') ? 'selected' : '' }}>Gibraltar</option>
										<option value="Great Britain" {{ ($user->country == 'Great Britain') ? 'selected' : '' }}>Great Britain</option>
										<option value="Greece" {{ ($user->country == 'Greece') ? 'selected' : '' }}>Greece</option>
										<option value="Greenland" {{ ($user->country == 'Greenland') ? 'selected' : '' }}>Greenland</option>
										<option value="Grenada" {{ ($user->country == 'Grenada') ? 'selected' : '' }}>Grenada</option>
										<option value="Guadeloupe" {{ ($user->country == 'Guadeloupe') ? 'selected' : '' }}>Guadeloupe</option>
										<option value="Guam" {{ ($user->country == 'Guam') ? 'selected' : '' }}>Guam</option>
										<option value="Guatemala" {{ ($user->country == 'Guatemala') ? 'selected' : '' }}>Guatemala</option>
										<option value="Guinea" {{ ($user->country == 'Guinea') ? 'selected' : '' }}>Guinea</option>
										<option value="Guyana" {{ ($user->country == 'Guyana') ? 'selected' : '' }}>Guyana</option>
										<option value="Haiti" {{ ($user->country == 'Haiti') ? 'selected' : '' }}>Haiti</option>
										<option value="Hawaii" {{ ($user->country == 'Hawaii') ? 'selected' : '' }}>Hawaii</option>
										<option value="Honduras" {{ ($user->country == 'Honduras') ? 'selected' : '' }}>Honduras</option>
										<option value="Hong Kong" {{ ($user->country == 'Hong Kong') ? 'selected' : '' }}>Hong Kong</option>
										<option value="Hungary" {{ ($user->country == 'Hungary') ? 'selected' : '' }}>Hungary</option>
										<option value="Iceland" {{ ($user->country == 'Iceland') ? 'selected' : '' }}>Iceland</option>
										<option value="Indonesia" {{ ($user->country == 'Indonesia') ? 'selected' : '' }}>Indonesia</option>
										<option value="India" {{ ($user->country == 'India') ? 'selected' : '' }}>India</option>
										<option value="Iran" {{ ($user->country == 'Iran') ? 'selected' : '' }}>Iran</option>
										<option value="Iraq" {{ ($user->country == 'Iraq') ? 'selected' : '' }}>Iraq</option>
										<option value="Ireland" {{ ($user->country == 'Ireland') ? 'selected' : '' }}>Ireland</option>
										<option value="Isle of Man" {{ ($user->country == 'Isle of Man') ? 'selected' : '' }}>Isle of Man</option>
										<option value="Israel" {{ ($user->country == 'Israel') ? 'selected' : '' }}>Israel</option>
										<option value="Italy" {{ ($user->country == 'Italy') ? 'selected' : '' }}>Italy</option>
										<option value="Jamaica" {{ ($user->country == 'Jamaica') ? 'selected' : '' }}>Jamaica</option>
										<option value="Japan" {{ ($user->country == 'Japan') ? 'selected' : '' }}>Japan</option>
										<option value="Jordan" {{ ($user->country == 'Jordan') ? 'selected' : '' }}>Jordan</option>
										<option value="Kazakhstan" {{ ($user->country == 'Kazakhstan') ? 'selected' : '' }}>Kazakhstan</option>
										<option value="Kenya" {{ ($user->country == 'Kenya') ? 'selected' : '' }}>Kenya</option>
										<option value="Kiribati" {{ ($user->country == 'Kiribati') ? 'selected' : '' }}>Kiribati</option>
										<option value="North Korea" {{ ($user->country == 'North Korea') ? 'selected' : '' }}>Korea North</option>
										<option value="South Korea" {{ ($user->country == 'South Korea') ? 'selected' : '' }}>Korea South</option>
										<option value="Kuwait" {{ ($user->country == 'Kuwait') ? 'selected' : '' }}>Kuwait</option>
										<option value="Kyrgyzstan" {{ ($user->country == 'Kyrgyzstan') ? 'selected' : '' }}>Kyrgyzstan</option>
										<option value="Laos" {{ ($user->country == 'Laos') ? 'selected' : '' }}>Laos</option>
										<option value="Latvia" {{ ($user->country == 'Latvia') ? 'selected' : '' }}>Latvia</option>
										<option value="Lebanon" {{ ($user->country == 'Lebanon') ? 'selected' : '' }}>Lebanon</option>
										<option value="Lesotho" {{ ($user->country == 'Lesotho') ? 'selected' : '' }}>Lesotho</option>
										<option value="Liberia" {{ ($user->country == 'Liberia') ? 'selected' : '' }}>Liberia</option>
										<option value="Libya" {{ ($user->country == 'Liberia') ? 'selected' : '' }}>Libya</option>
										<option value="Liechtenstein" {{ ($user->country == 'Liechtenstein') ? 'selected' : '' }}>Liechtenstein</option>
										<option value="Lithuania" {{ ($user->country == 'Lithuania') ? 'selected' : '' }}>Lithuania</option>
										<option value="Luxembourg" {{ ($user->country == 'Luxembourg') ? 'selected' : '' }}>Luxembourg</option>
										<option value="Macau" {{ ($user->country == 'Macau') ? 'selected' : '' }}>Macau</option>
										<option value="Macedonia" {{ ($user->country == 'Macedonia') ? 'selected' : '' }}>Macedonia</option>
										<option value="Madagascar" {{ ($user->country == 'Madagascar') ? 'selected' : '' }}>Madagascar</option>
										<option value="Malaysia" {{ ($user->country == 'Malaysia') ? 'selected' : '' }}>Malaysia</option>
										<option value="Malawi" {{ ($user->country == 'Malawi') ? 'selected' : '' }}>Malawi</option>
										<option value="Maldives" {{ ($user->country == 'Maldives') ? 'selected' : '' }}>Maldives</option>
										<option value="Mali" {{ ($user->country == 'Mali') ? 'selected' : '' }}>Mali</option>
										<option value="Malta" {{ ($user->country == 'Malta') ? 'selected' : '' }}>Malta</option>
										<option value="Marshall Islands" {{ ($user->country == 'Marshall Islands') ? 'selected' : '' }}>Marshall Islands</option>
										<option value="Martinique" {{ ($user->country == 'Martinique') ? 'selected' : '' }}>Martinique</option>
										<option value="Mauritania" {{ ($user->country == 'Mauritania') ? 'selected' : '' }}>Mauritania</option>
										<option value="Mauritius" {{ ($user->country == 'Mauritius') ? 'selected' : '' }}>Mauritius</option>
										<option value="Mayotte" {{ ($user->country == 'Mayotte') ? 'selected' : '' }}>Mayotte</option>
										<option value="Mexico" {{ ($user->country == 'Mexico') ? 'selected' : '' }}>Mexico</option>
										<option value="Midway Islands" {{ ($user->country == 'Midway Islands') ? 'selected' : '' }}>Midway Islands</option>
										<option value="Moldova" {{ ($user->country == 'Moldova') ? 'selected' : '' }}>Moldova</option>
										<option value="Monaco" {{ ($user->country == 'Monaco') ? 'selected' : '' }}>Monaco</option>
										<option value="Mongolia" {{ ($user->country == 'Mongolia') ? 'selected' : '' }}>Mongolia</option>
										<option value="Montserrat" {{ ($user->country == 'Montserrat') ? 'selected' : '' }}>Montserrat</option>
										<option value="Morocco" {{ ($user->country == '') ? 'selected' : '' }}>Morocco</option>
										<option value="Mozambique" {{ ($user->country == '') ? 'selected' : '' }}>Mozambique</option>
										<option value="Myanmar" {{ ($user->country == '') ? 'selected' : '' }}>Myanmar</option>
										<option value="Nambia" {{ ($user->country == 'Nambia') ? 'selected' : '' }}>Nambia</option>
										<option value="Nauru" {{ ($user->country == 'Nauru') ? 'selected' : '' }}>Nauru</option>
										<option value="Nepal" {{ ($user->country == 'Nepal') ? 'selected' : '' }}>Nepal</option>
										<option value="Netherland Antilles" {{ ($user->country == 'Netherland Antilles') ? 'selected' : '' }}>Netherland Antilles</option>
										<option value="Netherlands" {{ ($user->country == 'Netherlands') ? 'selected' : '' }}>Netherlands (Holland, Europe)</option>
										<option value="Nevis" {{ ($user->country == 'Nevis') ? 'selected' : '' }}>Nevis</option>
										<option value="New Caledonia" {{ ($user->country == 'New Caledonia') ? 'selected' : '' }}>New Caledonia</option>
										<option value="New Zealand" {{ ($user->country == 'New Zealand') ? 'selected' : '' }}>New Zealand</option>
										<option value="Nicaragua" {{ ($user->country == 'Nicaragua') ? 'selected' : '' }}>Nicaragua</option>
										<option value="Niger" {{ ($user->country == 'Niger') ? 'selected' : '' }}>Niger</option>
										<option value="Nigeria" {{ ($user->country == 'Nigeria') ? 'selected' : '' }}>Nigeria</option>
										<option value="Niue" {{ ($user->country == 'Niue') ? 'selected' : '' }}>Niue</option>
										<option value="Norfolk Island" {{ ($user->country == 'Norfolk Island') ? 'selected' : '' }}>Norfolk Island</option>
										<option value="Norway" {{ ($user->country == 'Norway') ? 'selected' : '' }}>Norway</option>
										<option value="Oman" {{ ($user->country == 'Oman') ? 'selected' : '' }}>Oman</option>
										<option value="Pakistan" {{ ($user->country == 'Pakistan') ? 'selected' : '' }}>Pakistan</option>
										<option value="Palau Island" {{ ($user->country == 'Palau Island') ? 'selected' : '' }}>Palau Island</option>
										<option value="Palestine" {{ ($user->country == 'Palestine') ? 'selected' : '' }}>Palestine</option>
										<option value="Panama" {{ ($user->country == 'Panama') ? 'selected' : '' }}>Panama</option>
										<option value="Papua New Guinea" {{ ($user->country == 'Papua New Guinea') ? 'selected' : '' }}>Papua New Guinea</option>
										<option value="Paraguay" {{ ($user->country == 'Paraguay') ? 'selected' : '' }}>Paraguay</option>
										<option value="Peru" {{ ($user->country == 'Peru') ? 'selected' : '' }}>Peru</option>
										<option value="Phillipines" {{ ($user->country == 'Phillipines') ? 'selected' : '' }}>Philippines</option>
										<option value="Pitcairn Island" {{ ($user->country == 'Pitcairn Island') ? 'selected' : '' }}>Pitcairn Island</option>
										<option value="Poland" {{ ($user->country == 'Poland') ? 'selected' : '' }}>Poland</option>
										<option value="Portugal" {{ ($user->country == 'Portugal') ? 'selected' : '' }}>Portugal</option>
										<option value="Puerto Rico" {{ ($user->country == 'Puerto Rico') ? 'selected' : '' }}>Puerto Rico</option>
										<option value="Qatar" {{ ($user->country == 'Qatar') ? 'selected' : '' }}>Qatar</option>
										<option value="Republic of Montenegro" {{ ($user->country == 'Republic of Montenegro') ? 'selected' : '' }}>Republic of Montenegro</option>
										<option value="Republic of Serbia" {{ ($user->country == 'Republic of Serbia') ? 'selected' : '' }}>Republic of Serbia</option>
										<option value="Reunion" {{ ($user->country == 'Reunion') ? 'selected' : '' }}>Reunion</option>
										<option value="Romania" {{ ($user->country == 'Romania') ? 'selected' : '' }}>Romania</option>
										<option value="Russia" {{ ($user->country == 'Russia') ? 'selected' : '' }}>Russia</option>
										<option value="Rwanda" {{ ($user->country == 'Rwanda') ? 'selected' : '' }}>Rwanda</option>
										<option value="St Barthelemy" {{ ($user->country == 'St Barthelemy') ? 'selected' : '' }}>St Barthelemy</option>
										<option value="St Eustatius" {{ ($user->country == 'St Eustatius') ? 'selected' : '' }}>St Eustatius</option>
										<option value="St Helena" {{ ($user->country == 'St Helena') ? 'selected' : '' }}>St Helena</option>
										<option value="St Kitts-Nevis" {{ ($user->country == 'St Kitts-Nevis') ? 'selected' : '' }}>St Kitts-Nevis</option>
										<option value="St Lucia" {{ ($user->country == 'St Lucia') ? 'selected' : '' }}>St Lucia</option>
										<option value="St Maarten" {{ ($user->country == 'St Maarten') ? 'selected' : '' }}>St Maarten</option>
										<option value="St Pierre and Miquelon" {{ ($user->country == 'St Pierre and Miquelon') ? 'selected' : '' }}>St Pierre & Miquelon</option>
										<option value="St Vincent and Grenadines" {{ ($user->country == 'St Vincent and Grenadines') ? 'selected' : '' }}>St Vincent & Grenadines</option>
										<option value="Saipan" {{ ($user->country == 'Saipan') ? 'selected' : '' }}>Saipan</option>
										<option value="Samoa" {{ ($user->country == 'Samoa') ? 'selected' : '' }}>Samoa</option>
										<option value="American Samoa" {{ ($user->country == 'American Samoa') ? 'selected' : '' }}>Samoa American</option>
										<option value="San Marino" {{ ($user->country == 'San Marino') ? 'selected' : '' }}>San Marino</option>
										<option value="Sao Tome and Principe" {{ ($user->country == 'Sao Tome and Principe') ? 'selected' : '' }}>Sao Tome & Principe</option>
										<option value="Saudi Arabia" {{ ($user->country == 'Saudi Arabia') ? 'selected' : '' }}>Saudi Arabia</option>
										<option value="Senegal" {{ ($user->country == 'Senegal') ? 'selected' : '' }}>Senegal</option>
										<option value="Seychelles" {{ ($user->country == 'Seychelles') ? 'selected' : '' }}>Seychelles</option>
										<option value="Sierra Leone" {{ ($user->country == 'Sierra Leone') ? 'selected' : '' }}>Sierra Leone</option>
										<option value="Singapore" {{ ($user->country == 'Singapore') ? 'selected' : '' }}>Singapore</option>
										<option value="Slovakia" {{ ($user->country == 'Slovakia') ? 'selected' : '' }}>Slovakia</option>
										<option value="Slovenia" {{ ($user->country == 'Slovenia') ? 'selected' : '' }}>Slovenia</option>
										<option value="Solomon Islands" {{ ($user->country == 'Solomon Islands') ? 'selected' : '' }}>Solomon Islands</option>
										<option value="Somalia" {{ ($user->country == 'Somalia') ? 'selected' : '' }}>Somalia</option>
										<option value="South Africa" {{ ($user->country == 'South Africa') ? 'selected' : '' }}>South Africa</option>
										<option value="Spain" {{ ($user->country == 'Spain') ? 'selected' : '' }}>Spain</option>
										<option value="Sri Lanka" {{ ($user->country == 'Sri Lanka') ? 'selected' : '' }}>Sri Lanka</option>
										<option value="Sudan" {{ ($user->country == 'Sudan') ? 'selected' : '' }}>Sudan</option>
										<option value="Suriname" {{ ($user->country == 'Suriname') ? 'selected' : '' }}>Suriname</option>
										<option value="Swaziland" {{ ($user->country == 'Swaziland') ? 'selected' : '' }}>Swaziland</option>
										<option value="Sweden" {{ ($user->country == 'Sweden') ? 'selected' : '' }}>Sweden</option>
										<option value="Switzerland" {{ ($user->country == 'Switzerland') ? 'selected' : '' }}>Switzerland</option>
										<option value="Syria" {{ ($user->country == 'Syria') ? 'selected' : '' }}>Syria</option>
										<option value="Tahiti" {{ ($user->country == 'Tahiti') ? 'selected' : '' }}>Tahiti</option>
										<option value="Taiwan" {{ ($user->country == 'Taiwan') ? 'selected' : '' }}>Taiwan</option>
										<option value="Tajikistan" {{ ($user->country == 'Tajikistan') ? 'selected' : '' }}>Tajikistan</option>
										<option value="Tanzania" {{ ($user->country == 'Tanzania') ? 'selected' : '' }}>Tanzania</option>
										<option value="Thailand" {{ ($user->country == 'Thailand') ? 'selected' : '' }}>Thailand</option>
										<option value="Togo" {{ ($user->country == 'Togo') ? 'selected' : '' }}>Togo</option>
										<option value="Tokelau" {{ ($user->country == 'Tokelau') ? 'selected' : '' }}>Tokelau</option>
										<option value="Tonga" {{ ($user->country == 'Tonga') ? 'selected' : '' }}>Tonga</option>
										<option value="Trinidad and Tobago" {{ ($user->country == 'Trinidad and Tobago') ? 'selected' : '' }}>Trinidad & Tobago</option>
										<option value="Tunisia" {{ ($user->country == 'Tunisia') ? 'selected' : '' }}>Tunisia</option>
										<option value="Turkey" {{ ($user->country == 'Turkey') ? 'selected' : '' }}>Turkey</option>
										<option value="Turkmenistan" {{ ($user->country == 'Turkmenistan') ? 'selected' : '' }}>Turkmenistan</option>
										<option value="Turks and Caicos Islands" {{ ($user->country == 'Turks and Caicos Islands') ? 'selected' : '' }}>Turks & Caicos Is</option>
										<option value="Tuvalu" {{ ($user->country == 'Tuvalu') ? 'selected' : '' }}>Tuvalu</option>
										<option value="Uganda" {{ ($user->country == '') ? 'selected' : '' }}>Uganda</option>
										<option value="United Kingdom" {{ ($user->country == '') ? 'selected' : '' }}>United Kingdom</option>
										<option value="Ukraine" {{ ($user->country == '') ? 'selected' : '' }}>Ukraine</option>
										<option value="United Arab Erimates" {{ ($user->country == 'United Arab Erimates') ? 'selected' : '' }}>United Arab Emirates</option>
										<option value="United States of America" {{ ($user->country == 'United States of America') ? 'selected' : '' }}>United States of America</option>
										<option value="Uraguay" {{ ($user->country == 'Uraguay') ? 'selected' : '' }}>Uruguay</option>
										<option value="Uzbekistan" {{ ($user->country == 'Uzbekistan') ? 'selected' : '' }}>Uzbekistan</option>
										<option value="Vanuatu" {{ ($user->country == 'Vanuatu') ? 'selected' : '' }}>Vanuatu</option>
										<option value="Vatican City State" {{ ($user->country == 'Vatican City State') ? 'selected' : '' }}>Vatican City State</option>
										<option value="Venezuela" {{ ($user->country == 'Venezuela') ? 'selected' : '' }}>Venezuela</option>
										<option value="Vietnam" {{ ($user->country == 'Vietnam') ? 'selected' : '' }}>Vietnam</option>
										<option value="Virgin Islands (Britain)" {{ ($user->country == 'Virgin Islands (Britain)') ? 'selected' : '' }}>Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)" {{ ($user->country == 'Virgin Islands (USA)') ? 'selected' : '' }}>Virgin Islands (USA)</option>
										<option value="Wake Island" {{ ($user->country == 'Wake Island') ? 'selected' : '' }}>Wake Island</option>
										<option value="Wallis and Futana Islands" {{ ($user->country == 'Wallis and Futana Islands') ? 'selected' : '' }}>Wallis & Futana Is</option>
										<option value="Yemen" {{ ($user->country == 'Yemen') ? 'selected' : '' }}>Yemen</option>
										<option value="Zaire" {{ ($user->country == 'Zaire') ? 'selected' : '' }}>Zaire</option>
										<option value="Zambia" {{ ($user->country == 'Zambia') ? 'selected' : '' }}>Zambia</option>
										<option value="Zimbabwe" {{ ($user->country == 'Zimbabwe') ? 'selected' : '' }}>Zimbabwe</option>										
									</select>
									@error('country')
										<p class="text-danger">{{ $errors->first('country') }}</p>
									@enderror
								</div>
							</div>
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">							
							<a href="{{ route('admin.user.list') }}" class="btn btn-cancel mr-2">{{ __('Return') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
						</div>
					</form>
				</div>				
			</div>
		</div>
		<div class="col-xl-3 col-lg-4 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit User Settings') }}</h3>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('admin.user.change', [$user->id]) }}" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label class="form-label fs-12">{{ __('User Status') }}</label>
									<select id="user-status" name="status" data-placeholder="Select User Status">	
										<option value="pending" {{ ($user->status == 'pending') ? 'selected' : '' }}>Pending</option>
										<option value="active" {{ ($user->status == 'active') ? 'selected' : '' }}>Active</option>
										<option value="suspended" {{ ($user->status == 'suspended') ? 'selected' : '' }}>Suspended</option>
										<option value="deactivated" {{ ($user->status == 'deactivated') ? 'selected' : '' }}>Deactivated</option>																		
									</select>
									@error('status')
										<p class="text-danger">{{ $errors->first('status') }}</p>
									@enderror
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label class="form-label fs-12">{{ __('User Group') }}</label>
									<select id="user-group" name="group" data-placeholder="Select User Group">	
										<option value="user" {{ ($user->group == 'user') ? 'selected' : '' }}>User</option>
										<option value="subscriber" {{ ($user->group == 'subscriber') ? 'selected' : '' }}>Subscriber</option>
										<option value="admin" {{ ($user->group == 'admin') ? 'selected' : '' }}>Administrator</option>																		
									</select>
									@error('group')
										<p class="text-danger">{{ $errors->first('group') }}</p>
									@enderror
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('New Password') }}</label>
										<input type="password" class="form-control @error('new-password') is-danger @enderror" name="password">
										@error('password')
											<p class="text-danger">{{ $errors->first('password') }}</p>
										@enderror									
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Confirm New Password') }}</label>
										<input type="password" class="form-control @error('password_confirmation') is-danger @enderror" name="password_confirmation">
										@error('password_confirmation')
											<p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
										@enderror									
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer border-0 text-right pb-0 pr-0">							
							<a href="{{ route('admin.user.list') }}" class="btn btn-cancel mr-2">{{ __('Return') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Change') }}</button>
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

	<!-- Telephone Input JS -->
	<script src="{{URL::asset('plugins/telephoneinput/telephoneinput.js')}}"></script>
	<script>
		$(function() {
			"use strict";
			
			$("#phone-number").intlTelInput();
		});
	</script>
@endsection