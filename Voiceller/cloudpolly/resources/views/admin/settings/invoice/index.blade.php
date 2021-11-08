@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Invoice Settings') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-cogs mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ url('#') }}"> {{ __('General Settings') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ url('#') }}"> {{ __('Invoice Settings') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')					
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Setup Invoice Settings') }}</h3>
				</div>
				<div class="card-body">
									
					<form action="{{ route('admin.settings.invoice.store') }}" method="POST" enctype="multipart/form-data">
						@csrf				

						<div class="row">		
							<div class="col-md-6 col-sm-12">							
								<div class="input-box">	
									<h6>{{ __('Invoice Currency') }}</h6>
									<select id="invoice-currency" name="invoice_currency" data-placeholder="Select Currency:">			
										<option value="AFA" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Afghan Afghani</option>
										<option value="ALL" @if ($invoice['invoice_currency'] == 'ALL') selected @endif>Albanian Lek</option>
										<option value="DZD" @if ($invoice['invoice_currency'] == 'DZD') selected @endif>Algerian Dinar</option>
										<option value="AOA" @if ($invoice['invoice_currency'] == 'AOA') selected @endif>Angolan Kwanza</option>
										<option value="ARS" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Argentine Peso</option>
										<option value="AMD" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Armenian Dram</option>
										<option value="AWG" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Aruban Florin</option>
										<option value="AUD" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Australian Dollar</option>
										<option value="AZN" @if ($invoice['invoice_currency'] == 'AFA') selected @endif>Azerbaijani Manat</option>
										<option value="BSD" @if ($invoice['invoice_currency'] == 'BSD') selected @endif>Bahamian Dollar</option>
										<option value="BHD" @if ($invoice['invoice_currency'] == 'BHD') selected @endif>Bahraini Dinar</option>
										<option value="BDT" @if ($invoice['invoice_currency'] == 'BDT') selected @endif>Bangladeshi Taka</option>
										<option value="BBD" @if ($invoice['invoice_currency'] == 'BBD') selected @endif>Barbadian Dollar</option>
										<option value="BYR" @if ($invoice['invoice_currency'] == 'BYR') selected @endif>Belarusian Ruble</option>
										<option value="BEF" @if ($invoice['invoice_currency'] == 'BEF') selected @endif>Belgian Franc</option>
										<option value="BZD" @if ($invoice['invoice_currency'] == 'BZD') selected @endif>Belize Dollar</option>
										<option value="BMD" @if ($invoice['invoice_currency'] == 'BMD') selected @endif>Bermudan Dollar</option>
										<option value="BTN" @if ($invoice['invoice_currency'] == 'BTN') selected @endif>Bhutanese Ngultrum</option>
										<option value="BOB" @if ($invoice['invoice_currency'] == 'BOB') selected @endif>Bolivian Boliviano</option>
										<option value="BAM" @if ($invoice['invoice_currency'] == 'BAM') selected @endif>Bosnia-Herzegovina Convertible Mark</option>
										<option value="BWP" @if ($invoice['invoice_currency'] == 'BWP') selected @endif>Botswanan Pula</option>
										<option value="BRL" @if ($invoice['invoice_currency'] == 'BRL') selected @endif>Brazilian Real</option>
										<option value="GBP" @if ($invoice['invoice_currency'] == 'GBP') selected @endif>British Pound Sterling</option>
										<option value="BND" @if ($invoice['invoice_currency'] == 'BND') selected @endif>Brunei Dollar</option>
										<option value="BGN" @if ($invoice['invoice_currency'] == 'BGN') selected @endif>Bulgarian Lev</option>
										<option value="BIF" @if ($invoice['invoice_currency'] == 'BIF') selected @endif>Burundian Franc</option>
										<option value="KHR" @if ($invoice['invoice_currency'] == 'KHR') selected @endif>Cambodian Riel</option>
										<option value="CAD" @if ($invoice['invoice_currency'] == 'CAD') selected @endif>Canadian Dollar</option>
										<option value="CVE" @if ($invoice['invoice_currency'] == 'CVE') selected @endif>Cape Verdean Escudo</option>
										<option value="KYD" @if ($invoice['invoice_currency'] == 'KYD') selected @endif>Cayman Islands Dollar</option>
										<option value="XOF" @if ($invoice['invoice_currency'] == 'XOF') selected @endif>CFA Franc BCEAO</option>
										<option value="XAF" @if ($invoice['invoice_currency'] == 'XAF') selected @endif>CFA Franc BEAC</option>
										<option value="XPF" @if ($invoice['invoice_currency'] == 'XPF') selected @endif>CFP Franc</option>
										<option value="CLP" @if ($invoice['invoice_currency'] == 'CLP') selected @endif>Chilean Peso</option>
										<option value="CNY" @if ($invoice['invoice_currency'] == 'CNY') selected @endif>Chinese Yuan</option>
										<option value="COP" @if ($invoice['invoice_currency'] == 'COP') selected @endif>Colombian Peso</option>
										<option value="KMF" @if ($invoice['invoice_currency'] == 'KMF') selected @endif>Comorian Franc</option>
										<option value="CDF" @if ($invoice['invoice_currency'] == 'CDF') selected @endif>Congolese Franc</option>
										<option value="CRC" @if ($invoice['invoice_currency'] == 'CRC') selected @endif>Costa Rican ColÃ³n</option>
										<option value="HRK" @if ($invoice['invoice_currency'] == 'HRK') selected @endif>Croatian Kuna</option>
										<option value="CUC" @if ($invoice['invoice_currency'] == 'CUC') selected @endif>Cuban Convertible Peso</option>
										<option value="CZK" @if ($invoice['invoice_currency'] == 'CZK') selected @endif>Czech Republic Koruna</option>
										<option value="DKK" @if ($invoice['invoice_currency'] == 'DKK') selected @endif>Danish Krone</option>
										<option value="DJF" @if ($invoice['invoice_currency'] == 'DJF') selected @endif>Djiboutian Franc</option>
										<option value="DOP" @if ($invoice['invoice_currency'] == 'DOP') selected @endif>Dominican Peso</option>
										<option value="XCD" @if ($invoice['invoice_currency'] == 'XCD') selected @endif>East Caribbean Dollar</option>
										<option value="EGP" @if ($invoice['invoice_currency'] == 'EGP') selected @endif>Egyptian Pound</option>
										<option value="ERN" @if ($invoice['invoice_currency'] == 'ERN') selected @endif>Eritrean Nakfa</option>
										<option value="EEK" @if ($invoice['invoice_currency'] == 'EEK') selected @endif>Estonian Kroon</option>
										<option value="ETB" @if ($invoice['invoice_currency'] == 'ETB') selected @endif>Ethiopian Birr</option>
										<option value="EUR" @if ($invoice['invoice_currency'] == 'EUR') selected @endif>Euro</option>
										<option value="FKP" @if ($invoice['invoice_currency'] == 'FKP') selected @endif>Falkland Islands Pound</option>
										<option value="FJD" @if ($invoice['invoice_currency'] == 'FJD') selected @endif>Fijian Dollar</option>
										<option value="GMD" @if ($invoice['invoice_currency'] == 'GMD') selected @endif>Gambian Dalasi</option>
										<option value="GEL" @if ($invoice['invoice_currency'] == 'GEL') selected @endif>Georgian Lari</option>
										<option value="DEM" @if ($invoice['invoice_currency'] == 'DEM') selected @endif>German Mark</option>
										<option value="GHS" @if ($invoice['invoice_currency'] == 'GHS') selected @endif>Ghanaian Cedi</option>
										<option value="GIP" @if ($invoice['invoice_currency'] == 'GIP') selected @endif>Gibraltar Pound</option>
										<option value="GRD" @if ($invoice['invoice_currency'] == 'GRD') selected @endif>Greek Drachma</option>
										<option value="GTQ" @if ($invoice['invoice_currency'] == 'GTQ') selected @endif>Guatemalan Quetzal</option>
										<option value="GNF" @if ($invoice['invoice_currency'] == 'GNF') selected @endif>Guinean Franc</option>
										<option value="GYD" @if ($invoice['invoice_currency'] == 'GYD') selected @endif>Guyanaese Dollar</option>
										<option value="HTG" @if ($invoice['invoice_currency'] == 'HTG') selected @endif>Haitian Gourde</option>
										<option value="HNL" @if ($invoice['invoice_currency'] == 'HNL') selected @endif>Honduran Lempira</option>
										<option value="HKD" @if ($invoice['invoice_currency'] == 'HKD') selected @endif>Hong Kong Dollar</option>
										<option value="HUF" @if ($invoice['invoice_currency'] == 'HUF') selected @endif>Hungarian Forint</option>
										<option value="ISK" @if ($invoice['invoice_currency'] == 'ISK') selected @endif>Icelandic KrÃ³na</option>
										<option value="INR" @if ($invoice['invoice_currency'] == 'INR') selected @endif>Indian Rupee</option>
										<option value="IDR" @if ($invoice['invoice_currency'] == 'IDR') selected @endif>Indonesian Rupiah</option>
										<option value="IRR" @if ($invoice['invoice_currency'] == 'IRR') selected @endif>Iranian Rial</option>
										<option value="IQD" @if ($invoice['invoice_currency'] == 'IQD') selected @endif>Iraqi Dinar</option>
										<option value="ILS" @if ($invoice['invoice_currency'] == 'ILS') selected @endif>Israeli New Sheqel</option>
										<option value="ITL" @if ($invoice['invoice_currency'] == 'ITL') selected @endif>Italian Lira</option>
										<option value="JMD" @if ($invoice['invoice_currency'] == 'JMD') selected @endif>Jamaican Dollar</option>
										<option value="JPY" @if ($invoice['invoice_currency'] == 'JPY') selected @endif>Japanese Yen</option>
										<option value="JOD" @if ($invoice['invoice_currency'] == 'JOD') selected @endif>Jordanian Dinar</option>
										<option value="KZT" @if ($invoice['invoice_currency'] == 'KZT') selected @endif>Kazakhstani Tenge</option>
										<option value="KES" @if ($invoice['invoice_currency'] == 'KES') selected @endif>Kenyan Shilling</option>
										<option value="KWD" @if ($invoice['invoice_currency'] == 'KWD') selected @endif>Kuwaiti Dinar</option>
										<option value="KGS" @if ($invoice['invoice_currency'] == 'KGS') selected @endif>Kyrgystani Som</option>
										<option value="LAK" @if ($invoice['invoice_currency'] == 'LAK') selected @endif>Laotian Kip</option>
										<option value="LVL" @if ($invoice['invoice_currency'] == 'LVL') selected @endif>Latvian Lats</option>
										<option value="LBP" @if ($invoice['invoice_currency'] == 'LBP') selected @endif>Lebanese Pound</option>
										<option value="LSL" @if ($invoice['invoice_currency'] == 'LSL') selected @endif>Lesotho Loti</option>
										<option value="LRD" @if ($invoice['invoice_currency'] == 'LRD') selected @endif>Liberian Dollar</option>
										<option value="LYD" @if ($invoice['invoice_currency'] == 'LYD') selected @endif>Libyan Dinar</option>
										<option value="LTL" @if ($invoice['invoice_currency'] == 'LTL') selected @endif>Lithuanian Litas</option>
										<option value="MOP" @if ($invoice['invoice_currency'] == 'MOP') selected @endif>Macanese Pataca</option>
										<option value="MKD" @if ($invoice['invoice_currency'] == 'MKD') selected @endif>Macedonian Denar</option>
										<option value="MGA" @if ($invoice['invoice_currency'] == 'MGA') selected @endif>Malagasy Ariary</option>
										<option value="MWK" @if ($invoice['invoice_currency'] == 'MWK') selected @endif>Malawian Kwacha</option>
										<option value="MYR" @if ($invoice['invoice_currency'] == 'MYR') selected @endif>Malaysian Ringgit</option>
										<option value="MVR" @if ($invoice['invoice_currency'] == 'MVR') selected @endif>Maldivian Rufiyaa</option>
										<option value="MRO" @if ($invoice['invoice_currency'] == 'MRO') selected @endif>Mauritanian Ouguiya</option>
										<option value="MUR" @if ($invoice['invoice_currency'] == 'MUR') selected @endif>Mauritian Rupee</option>
										<option value="MXN" @if ($invoice['invoice_currency'] == 'MXN') selected @endif>Mexican Peso</option>
										<option value="MDL" @if ($invoice['invoice_currency'] == 'MDL') selected @endif>Moldovan Leu</option>
										<option value="MNT" @if ($invoice['invoice_currency'] == 'MNT') selected @endif>Mongolian Tugrik</option>
										<option value="MAD" @if ($invoice['invoice_currency'] == 'MAD') selected @endif>Moroccan Dirham</option>
										<option value="MZM" @if ($invoice['invoice_currency'] == 'MZM') selected @endif>Mozambican Metical</option>
										<option value="MMK" @if ($invoice['invoice_currency'] == 'MMK') selected @endif>Myanmar Kyat</option>
										<option value="NAD" @if ($invoice['invoice_currency'] == 'NAD') selected @endif>Namibian Dollar</option>
										<option value="NPR" @if ($invoice['invoice_currency'] == 'NPR') selected @endif>Nepalese Rupee</option>
										<option value="ANG" @if ($invoice['invoice_currency'] == 'ANG') selected @endif>Netherlands Antillean Guilder</option>
										<option value="TWD" @if ($invoice['invoice_currency'] == 'TWD') selected @endif>New Taiwan Dollar</option>
										<option value="NZD" @if ($invoice['invoice_currency'] == 'NZD') selected @endif>New Zealand Dollar</option>
										<option value="NIO" @if ($invoice['invoice_currency'] == 'NIO') selected @endif>Nicaraguan CÃ³rdoba</option>
										<option value="NGN" @if ($invoice['invoice_currency'] == 'NGN') selected @endif>Nigerian Naira</option>
										<option value="KPW" @if ($invoice['invoice_currency'] == 'KPW') selected @endif>North Korean Won</option>
										<option value="NOK" @if ($invoice['invoice_currency'] == 'NOK') selected @endif>Norwegian Krone</option>
										<option value="OMR" @if ($invoice['invoice_currency'] == 'OMR') selected @endif>Omani Rial</option>
										<option value="PKR" @if ($invoice['invoice_currency'] == 'PKR') selected @endif>Pakistani Rupee</option>
										<option value="PAB" @if ($invoice['invoice_currency'] == 'PAB') selected @endif>Panamanian Balboa</option>
										<option value="PGK" @if ($invoice['invoice_currency'] == 'PGK') selected @endif>Papua New Guinean Kina</option>
										<option value="PYG" @if ($invoice['invoice_currency'] == 'PYG') selected @endif>Paraguayan Guarani</option>
										<option value="PEN" @if ($invoice['invoice_currency'] == 'PEN') selected @endif>Peruvian Nuevo Sol</option>
										<option value="PHP" @if ($invoice['invoice_currency'] == 'PHP') selected @endif>Philippine Peso</option>
										<option value="PLN" @if ($invoice['invoice_currency'] == 'PLN') selected @endif>Polish Zloty</option>
										<option value="QAR" @if ($invoice['invoice_currency'] == 'QAR') selected @endif>Qatari Rial</option>
										<option value="RON" @if ($invoice['invoice_currency'] == 'RON') selected @endif>Romanian Leu</option>
										<option value="RUB" @if ($invoice['invoice_currency'] == 'RUB') selected @endif>Russian Ruble</option>
										<option value="RWF" @if ($invoice['invoice_currency'] == 'RWF') selected @endif>Rwandan Franc</option>
										<option value="SVC" @if ($invoice['invoice_currency'] == 'SVC') selected @endif>Salvadoran ColÃ³n</option>
										<option value="WST" @if ($invoice['invoice_currency'] == 'WST') selected @endif>Samoan Tala</option>
										<option value="SAR" @if ($invoice['invoice_currency'] == 'SAR') selected @endif>Saudi Riyal</option>
										<option value="RSD" @if ($invoice['invoice_currency'] == 'RSD') selected @endif>Serbian Dinar</option>
										<option value="SCR" @if ($invoice['invoice_currency'] == 'SCR') selected @endif>Seychellois Rupee</option>
										<option value="SLL" @if ($invoice['invoice_currency'] == 'SLL') selected @endif>Sierra Leonean Leone</option>
										<option value="SGD" @if ($invoice['invoice_currency'] == 'SGD') selected @endif>Singapore Dollar</option>
										<option value="SKK" @if ($invoice['invoice_currency'] == 'SKK') selected @endif>Slovak Koruna</option>
										<option value="SBD" @if ($invoice['invoice_currency'] == 'SBD') selected @endif>Solomon Islands Dollar</option>
										<option value="SOS" @if ($invoice['invoice_currency'] == 'SOS') selected @endif>Somali Shilling</option>
										<option value="ZAR" @if ($invoice['invoice_currency'] == 'ZAR') selected @endif>South African Rand</option>
										<option value="KRW" @if ($invoice['invoice_currency'] == 'KRW') selected @endif>South Korean Won</option>
										<option value="XDR" @if ($invoice['invoice_currency'] == 'XDR') selected @endif>Special Drawing Rights</option>
										<option value="LKR" @if ($invoice['invoice_currency'] == 'LKR') selected @endif>Sri Lankan Rupee</option>
										<option value="SHP" @if ($invoice['invoice_currency'] == 'SHP') selected @endif>St. Helena Pound</option>
										<option value="SDG" @if ($invoice['invoice_currency'] == 'SDG') selected @endif>Sudanese Pound</option>
										<option value="SRD" @if ($invoice['invoice_currency'] == 'SRD') selected @endif>Surinamese Dollar</option>
										<option value="SZL" @if ($invoice['invoice_currency'] == 'SZL') selected @endif>Swazi Lilangeni</option>
										<option value="SEK" @if ($invoice['invoice_currency'] == 'SEK') selected @endif>Swedish Krona</option>
										<option value="CHF" @if ($invoice['invoice_currency'] == 'CHF') selected @endif>Swiss Franc</option>
										<option value="SYP" @if ($invoice['invoice_currency'] == 'SYP') selected @endif>Syrian Pound</option>
										<option value="STD" @if ($invoice['invoice_currency'] == 'STD') selected @endif>São Tomé and Príncipe Dobra</option>
										<option value="TJS" @if ($invoice['invoice_currency'] == 'TJS') selected @endif>Tajikistani Somoni</option>
										<option value="TZS" @if ($invoice['invoice_currency'] == 'TZS') selected @endif>Tanzanian Shilling</option>
										<option value="THB" @if ($invoice['invoice_currency'] == 'THB') selected @endif>Thai Baht</option>
										<option value="TOP" @if ($invoice['invoice_currency'] == 'TOP') selected @endif>Tongan pa'anga</option>
										<option value="TTD" @if ($invoice['invoice_currency'] == 'TTD') selected @endif>Trinidad & Tobago Dollar</option>
										<option value="TND" @if ($invoice['invoice_currency'] == 'TND') selected @endif>Tunisian Dinar</option>
										<option value="TRY" @if ($invoice['invoice_currency'] == 'TRY') selected @endif>Turkish Lira</option>
										<option value="TMT" @if ($invoice['invoice_currency'] == 'TMT') selected @endif>Turkmenistani Manat</option>
										<option value="UGX" @if ($invoice['invoice_currency'] == 'UGZ') selected @endif>Ugandan Shilling</option>
										<option value="UAH" @if ($invoice['invoice_currency'] == 'UAH') selected @endif>Ukrainian Hryvnia</option>
										<option value="AED" @if ($invoice['invoice_currency'] == 'AED') selected @endif>United Arab Emirates Dirham</option>
										<option value="UYU" @if ($invoice['invoice_currency'] == 'UYU') selected @endif>Uruguayan Peso</option>
										<option value="USD" @if ($invoice['invoice_currency'] == 'USD') selected @endif>US Dollar</option>
										<option value="UZS" @if ($invoice['invoice_currency'] == 'UZS') selected @endif>Uzbekistan Som</option>
										<option value="VUV" @if ($invoice['invoice_currency'] == 'VUV') selected @endif>Vanuatu Vatu</option>
										<option value="VEF" @if ($invoice['invoice_currency'] == 'VEF') selected @endif>Venezuelan BolÃ­var</option>
										<option value="VND" @if ($invoice['invoice_currency'] == 'VND') selected @endif>Vietnamese Dong</option>
										<option value="YER" @if ($invoice['invoice_currency'] == 'YER') selected @endif>Yemeni Rial</option>
										<option value="ZMK" @if ($invoice['invoice_currency'] == 'ZMK') selected @endif>Zambian Kwacha</option>
									</select>
								</div> 							
							</div>

							<div class="col-md-6 col-sm-12">							
								<div class="input-box">	
									<h6>{{ __('Invoice Language') }}</h6>
			  						<select id="invoice-language" name="invoice_language" data-placeholder="Select Language:">			
										<option value="br" @if ($invoice['invoice_language'] == 'br') selected @endif>BR</option>
										<option value="de" @if ($invoice['invoice_language'] == 'de') selected @endif>DE</option>
										<option value="en" @if ($invoice['invoice_language'] == 'en') selected @endif>EN</option>
										<option value="es" @if ($invoice['invoice_language'] == 'es') selected @endif>ES</option>
										<option value="et" @if ($invoice['invoice_language'] == 'et') selected @endif>ET</option>
										<option value="fr" @if ($invoice['invoice_language'] == 'fr') selected @endif>FR</option>
										<option value="it" @if ($invoice['invoice_language'] == 'it') selected @endif>IT</option>
										<option value="lt" @if ($invoice['invoice_language'] == 'lt') selected @endif>LT</option>
										<option value="nl" @if ($invoice['invoice_language'] == 'nl') selected @endif>NL</option>
										<option value="pl" @if ($invoice['invoice_language'] == 'pl') selected @endif>PL</option>
										<option value="ro" @if ($invoice['invoice_language'] == 'ro') selected @endif>RO</option>
										<option value="sv" @if ($invoice['invoice_language'] == 'sv') selected @endif>SV</option>
										<option value="tr" @if ($invoice['invoice_language'] == 'tr') selected @endif>TR</option>
									</select>
								</div> 							
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('Company Name') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_vendor') is-danger @enderror" id="invoice_vendor" name="invoice_vendor" value="{{ $invoice['invoice_vendor'] }}" required>
										@error('invoice_vendor')
											<p class="text-danger">{{ $errors->first('invoice_vendor') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('Company Website') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_vendor_website') is-danger @enderror" id="invoice_vendor_website" name="invoice_vendor_website" value="{{ $invoice['invoice_vendor_website'] }}">
										@error('invoice_vendor_website')
											<p class="text-danger">{{ $errors->first('invoice_vendor_website') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-12">
								<div class="input-box">								
									<h6>{{ __('Business Address') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_address') is-danger @enderror" id="invoice_address" name="invoice_address" value="{{ $invoice['invoice_address'] }}">
										@error('invoice_address')
											<p class="text-danger">{{ $errors->first('invoice_address') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-4 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('City') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_city') is-danger @enderror" id="invoice_city" name="invoice_city" value="{{ $invoice['invoice_city'] }}">
										@error('invoice_city')
											<p class="text-danger">{{ $errors->first('invoice_city') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-2 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('State') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_state') is-danger @enderror" id="invoice_state" name="invoice_state" value="{{ $invoice['invoice_state'] }}">
										@error('invoice_state')
											<p class="text-danger">{{ $errors->first('invoice_state') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-2 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('Postal Code') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_postal_code') is-danger @enderror" id="invoice_postal_code" name="invoice_postal_code" value="{{ $invoice['invoice_postal_code'] }}">
										@error('invoice_postal_code')
											<p class="text-danger">{{ $errors->first('invoice_postal_code') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-4 col-sm-12">							
								<div class="input-box">	
									<h6>{{ __('Country') }}</h6>
									<select id="invoice-country" name="invoice_country" data-placeholder="Select Your Country:">	
										<option value="Afganistan" {{ ($invoice['invoice_country'] == 'Afganistan') ? 'selected' : '' }}><img src="{{URL::asset('img/csp/aws-lg.png')}}" class="csp-brand-img"> Afghanistan</option>
										<option value="Albania" {{ ($invoice['invoice_country'] == 'Albania') ? 'selected' : '' }}>Albania</option>
										<option value="Algeria" {{ ($invoice['invoice_country'] == 'Algeria') ? 'selected' : '' }}>Algeria</option>
										<option value="American Samoa" {{ ($invoice['invoice_country'] == 'American Samoa') ? 'selected' : '' }}>American Samoa</option>
										<option value="Andorra" {{ ($invoice['invoice_country'] == 'Andorra') ? 'selected' : '' }}>Andorra</option>
										<option value="Angola" {{ ($invoice['invoice_country'] == 'Angola') ? 'selected' : '' }}>Angola</option>
										<option value="Anguilla" {{ ($invoice['invoice_country'] == 'Anguilla') ? 'selected' : '' }}>Anguilla</option>
										<option value="Antigua and Barbuda" {{ ($invoice['invoice_country'] == 'Antigua and Barbuda') ? 'selected' : '' }}>Antigua & Barbuda</option>
										<option value="Argentina" {{ ($invoice['invoice_country'] == 'Argentina') ? 'selected' : '' }}>Argentina</option>
										<option value="Armenia" {{ ($invoice['invoice_country'] == 'Armenia') ? 'selected' : '' }}>Armenia</option>
										<option value="Aruba" {{ ($invoice['invoice_country'] == 'Aruba') ? 'selected' : '' }}>Aruba</option>
										<option value="Australia" {{ ($invoice['invoice_country'] == 'Australia') ? 'selected' : '' }}>Australia</option>
										<option value="Austria" {{ ($invoice['invoice_country'] == 'Austria') ? 'selected' : '' }}>Austria</option>
										<option value="Azerbaijan" {{ ($invoice['invoice_country'] == 'Azerbaijan') ? 'selected' : '' }}>Azerbaijan</option>
										<option value="Bahamas" {{ ($invoice['invoice_country'] == 'Bahamas') ? 'selected' : '' }}>Bahamas</option>
										<option value="Bahrain" {{ ($invoice['invoice_country'] == 'Bahrain') ? 'selected' : '' }}>Bahrain</option>
										<option value="Bangladesh" {{ ($invoice['invoice_country'] == 'Bangladesh') ? 'selected' : '' }}>Bangladesh</option>
										<option value="Barbados" {{ ($invoice['invoice_country'] == 'Barbados') ? 'selected' : '' }}>Barbados</option>
										<option value="Belarus" {{ ($invoice['invoice_country'] == 'Belarus') ? 'selected' : '' }}>Belarus</option>
										<option value="Belgium" {{ ($invoice['invoice_country'] == 'Belgium') ? 'selected' : '' }}>Belgium</option>
										<option value="Belize" {{ ($invoice['invoice_country'] == 'Belize') ? 'selected' : '' }}>Belize</option>
										<option value="Benin" {{ ($invoice['invoice_country'] == 'Benin') ? 'selected' : '' }}>Benin</option>
										<option value="Bermuda" {{ ($invoice['invoice_country'] == 'Bermuda') ? 'selected' : '' }}>Bermuda</option>
										<option value="Bhutan" {{ ($invoice['invoice_country'] == 'Bhutan') ? 'selected' : '' }}>Bhutan</option>
										<option value="Bolivia" {{ ($invoice['invoice_country'] == 'Bolivia') ? 'selected' : '' }}>Bolivia</option>
										<option value="Bonaire" {{ ($invoice['invoice_country'] == 'Bonaire') ? 'selected' : '' }}>Bonaire</option>
										<option value="Bosnia and Herzegovina" {{ ($invoice['invoice_country'] == 'Bosnia and Herzegovina') ? 'selected' : '' }}>Bosnia & Herzegovina</option>
										<option value="Botswana" {{ ($invoice['invoice_country'] == 'Botswana') ? 'selected' : '' }}>Botswana</option>
										<option value="Brazil" {{ ($invoice['invoice_country'] == 'Brazil') ? 'selected' : '' }}>Brazil</option>
										<option value="British Indian Ocean Territory" {{ ($invoice['invoice_country'] == 'British Indian Ocean Territory') ? 'selected' : '' }}>British Indian Ocean Ter</option>
										<option value="Brunei" {{ ($invoice['invoice_country'] == 'Brunei') ? 'selected' : '' }}>Brunei</option>
										<option value="Bulgaria" {{ ($invoice['invoice_country'] == 'Bulgaria') ? 'selected' : '' }}>Bulgaria</option>
										<option value="Burkina Faso" {{ ($invoice['invoice_country'] == 'Burkina Faso') ? 'selected' : '' }}>Burkina Faso</option>
										<option value="Burundi" {{ ($invoice['invoice_country'] == 'Burundi') ? 'selected' : '' }}>Burundi</option>
										<option value="Cambodia" {{ ($invoice['invoice_country'] == 'Cambodia') ? 'selected' : '' }}>Cambodia</option>
										<option value="Cameroon" {{ ($invoice['invoice_country'] == 'Cameroon') ? 'selected' : '' }}>Cameroon</option>
										<option value="Canada" {{ ($invoice['invoice_country'] == 'Canada') ? 'selected' : '' }}>Canada</option>
										<option value="Canary Islands" {{ ($invoice['invoice_country'] == 'Canary Islands') ? 'selected' : '' }}>Canary Islands</option>
										<option value="Cape Verde" {{ ($invoice['invoice_country'] == 'Cape Verde') ? 'selected' : '' }}>Cape Verde</option>
										<option value="Cayman Islands" {{ ($invoice['invoice_country'] == 'Cayman Islands') ? 'selected' : '' }}>Cayman Islands</option>
										<option value="Central African Republic" {{ ($invoice['invoice_country'] == 'Central African Republic') ? 'selected' : '' }}>Central African Republic</option>
										<option value="Chad" {{ ($invoice['invoice_country'] == 'Chad') ? 'selected' : '' }}>Chad</option>
										<option value="Channel Islands" {{ ($invoice['invoice_country'] == 'Channel Islands') ? 'selected' : '' }}>Channel Islands</option>
										<option value="Chile" {{ ($invoice['invoice_country'] == 'Chile') ? 'selected' : '' }}>Chile</option>
										<option value="China" {{ ($invoice['invoice_country'] == 'China') ? 'selected' : '' }}>China</option>
										<option value="Christmas Island" {{ ($invoice['invoice_country'] == 'Christmas Island') ? 'selected' : '' }}>Christmas Island</option>
										<option value="Cocos Island" {{ ($invoice['invoice_country'] == 'Cocos Island') ? 'selected' : '' }}>Cocos Island</option>
										<option value="Colombia" {{ ($invoice['invoice_country'] == 'Colombia') ? 'selected' : '' }}>Colombia</option>
										<option value="Comoros" {{ ($invoice['invoice_country'] == 'Comoros') ? 'selected' : '' }}>Comoros</option>
										<option value="Congo" {{ ($invoice['invoice_country'] == 'Congo') ? 'selected' : '' }}>Congo</option>
										<option value="Cook Islands" {{ ($invoice['invoice_country'] == 'Cook Islands') ? 'selected' : '' }}>Cook Islands</option>
										<option value="Costa Rica" {{ ($invoice['invoice_country'] == 'Costa Rica') ? 'selected' : '' }}>Costa Rica</option>
										<option value="Cote Divoire" {{ ($invoice['invoice_country'] == 'Cote Divoire') ? 'selected' : '' }}>Cote DIvoire</option>
										<option value="Croatia" {{ ($invoice['invoice_country'] == 'Croatia') ? 'selected' : '' }}>Croatia</option>
										<option value="Cuba" {{ ($invoice['invoice_country'] == 'Cuba') ? 'selected' : '' }}>Cuba</option>
										<option value="Curaco" {{ ($invoice['invoice_country'] == 'Curaco') ? 'selected' : '' }}>Curacao</option>
										<option value="Cyprus" {{ ($invoice['invoice_country'] == 'Cyprus') ? 'selected' : '' }}>Cyprus</option>
										<option value="Czech Republic" {{ ($invoice['invoice_country'] == 'Czech Republic') ? 'selected' : '' }}>Czech Republic</option>
										<option value="Denmark" {{ ($invoice['invoice_country'] == 'Denmark') ? 'selected' : '' }}>Denmark</option>
										<option value="Djibouti" {{ ($invoice['invoice_country'] == 'Djibouti') ? 'selected' : '' }}>Djibouti</option>
										<option value="Dominica" {{ ($invoice['invoice_country'] == 'Dominica') ? 'selected' : '' }}>Dominica</option>
										<option value="Dominican Republic" {{ ($invoice['invoice_country'] == 'Dominican Republic') ? 'selected' : '' }}>Dominican Republic</option>
										<option value="East Timor" {{ ($invoice['invoice_country'] == 'East Timor') ? 'selected' : '' }}>East Timor</option>
										<option value="Ecuador" {{ ($invoice['invoice_country'] == 'Ecuador') ? 'selected' : '' }}>Ecuador</option>
										<option value="Egypt" {{ ($invoice['invoice_country'] == 'Egypt') ? 'selected' : '' }}>Egypt</option>
										<option value="El Salvador" {{ ($invoice['invoice_country'] == 'El Salvador') ? 'selected' : '' }}>El Salvador</option>
										<option value="Equatorial Guinea" {{ ($invoice['invoice_country'] == 'Equatorial Guinea') ? 'selected' : '' }}>Equatorial Guinea</option>
										<option value="Eritrea" {{ ($invoice['invoice_country'] == 'Eritrea') ? 'selected' : '' }}>Eritrea</option>
										<option value="Estonia" {{ ($invoice['invoice_country'] == 'Estonia') ? 'selected' : '' }}>Estonia</option>
										<option value="Ethiopia" {{ ($invoice['invoice_country'] == 'Ethiopia') ? 'selected' : '' }}>Ethiopia</option>
										<option value="Falkland Islands" {{ ($invoice['invoice_country'] == 'Falkland Islands') ? 'selected' : '' }}>Falkland Islands</option>
										<option value="Faroe Islands" {{ ($invoice['invoice_country'] == 'Faroe Islands') ? 'selected' : '' }}>Faroe Islands</option>
										<option value="Fiji" {{ ($invoice['invoice_country'] == 'Fiji') ? 'selected' : '' }}>Fiji</option>
										<option value="Finland" {{ ($invoice['invoice_country'] == 'Finland') ? 'selected' : '' }}>Finland</option>
										<option value="France" {{ ($invoice['invoice_country'] == 'France') ? 'selected' : '' }}>France</option>
										<option value="French Guiana" {{ ($invoice['invoice_country'] == 'French Guiana') ? 'selected' : '' }}>French Guiana</option>
										<option value="French Polynesia" {{ ($invoice['invoice_country'] == 'French Polynesia') ? 'selected' : '' }}>French Polynesia</option>
										<option value="French Southern Territory" {{ ($invoice['invoice_country'] == 'French Southern Territory') ? 'selected' : '' }}>French Southern Ter</option>
										<option value="Gabon" {{ ($invoice['invoice_country'] == 'Gabon') ? 'selected' : '' }}>Gabon</option>
										<option value="Gambia" {{ ($invoice['invoice_country'] == 'Gambia') ? 'selected' : '' }}>Gambia</option>
										<option value="Georgia" {{ ($invoice['invoice_country'] == 'Georgia') ? 'selected' : '' }}>Georgia</option>
										<option value="Germany" {{ ($invoice['invoice_country'] == 'Germany') ? 'selected' : '' }}>Germany</option>
										<option value="Ghana" {{ ($invoice['invoice_country'] == 'Ghana') ? 'selected' : '' }}>Ghana</option>
										<option value="Gibraltar" {{ ($invoice['invoice_country'] == 'Gibraltar') ? 'selected' : '' }}>Gibraltar</option>
										<option value="Great Britain" {{ ($invoice['invoice_country'] == 'Great Britain') ? 'selected' : '' }}>Great Britain</option>
										<option value="Greece" {{ ($invoice['invoice_country'] == 'Greece') ? 'selected' : '' }}>Greece</option>
										<option value="Greenland" {{ ($invoice['invoice_country'] == 'Greenland') ? 'selected' : '' }}>Greenland</option>
										<option value="Grenada" {{ ($invoice['invoice_country'] == 'Grenada') ? 'selected' : '' }}>Grenada</option>
										<option value="Guadeloupe" {{ ($invoice['invoice_country'] == 'Guadeloupe') ? 'selected' : '' }}>Guadeloupe</option>
										<option value="Guam" {{ ($invoice['invoice_country'] == 'Guam') ? 'selected' : '' }}>Guam</option>
										<option value="Guatemala" {{ ($invoice['invoice_country'] == 'Guatemala') ? 'selected' : '' }}>Guatemala</option>
										<option value="Guinea" {{ ($invoice['invoice_country'] == 'Guinea') ? 'selected' : '' }}>Guinea</option>
										<option value="Guyana" {{ ($invoice['invoice_country'] == 'Guyana') ? 'selected' : '' }}>Guyana</option>
										<option value="Haiti" {{ ($invoice['invoice_country'] == 'Haiti') ? 'selected' : '' }}>Haiti</option>
										<option value="Hawaii" {{ ($invoice['invoice_country'] == 'Hawaii') ? 'selected' : '' }}>Hawaii</option>
										<option value="Honduras" {{ ($invoice['invoice_country'] == 'Honduras') ? 'selected' : '' }}>Honduras</option>
										<option value="Hong Kong" {{ ($invoice['invoice_country'] == 'Hong Kong') ? 'selected' : '' }}>Hong Kong</option>
										<option value="Hungary" {{ ($invoice['invoice_country'] == 'Hungary') ? 'selected' : '' }}>Hungary</option>
										<option value="Iceland" {{ ($invoice['invoice_country'] == 'Iceland') ? 'selected' : '' }}>Iceland</option>
										<option value="Indonesia" {{ ($invoice['invoice_country'] == 'Indonesia') ? 'selected' : '' }}>Indonesia</option>
										<option value="India" {{ ($invoice['invoice_country'] == 'India') ? 'selected' : '' }}>India</option>
										<option value="Iran" {{ ($invoice['invoice_country'] == 'Iran') ? 'selected' : '' }}>Iran</option>
										<option value="Iraq" {{ ($invoice['invoice_country'] == 'Iraq') ? 'selected' : '' }}>Iraq</option>
										<option value="Ireland" {{ ($invoice['invoice_country'] == 'Ireland') ? 'selected' : '' }}>Ireland</option>
										<option value="Isle of Man" {{ ($invoice['invoice_country'] == 'Isle of Man') ? 'selected' : '' }}>Isle of Man</option>
										<option value="Israel" {{ ($invoice['invoice_country'] == 'Israel') ? 'selected' : '' }}>Israel</option>
										<option value="Italy" {{ ($invoice['invoice_country'] == 'Italy') ? 'selected' : '' }}>Italy</option>
										<option value="Jamaica" {{ ($invoice['invoice_country'] == 'Jamaica') ? 'selected' : '' }}>Jamaica</option>
										<option value="Japan" {{ ($invoice['invoice_country'] == 'Japan') ? 'selected' : '' }}>Japan</option>
										<option value="Jordan" {{ ($invoice['invoice_country'] == 'Jordan') ? 'selected' : '' }}>Jordan</option>
										<option value="Kazakhstan" {{ ($invoice['invoice_country'] == 'Kazakhstan') ? 'selected' : '' }}>Kazakhstan</option>
										<option value="Kenya" {{ ($invoice['invoice_country'] == 'Kenya') ? 'selected' : '' }}>Kenya</option>
										<option value="Kiribati" {{ ($invoice['invoice_country'] == 'Kiribati') ? 'selected' : '' }}>Kiribati</option>
										<option value="North Korea" {{ ($invoice['invoice_country'] == 'North Korea') ? 'selected' : '' }}>Korea North</option>
										<option value="South Korea" {{ ($invoice['invoice_country'] == 'South Korea') ? 'selected' : '' }}>Korea South</option>
										<option value="Kuwait" {{ ($invoice['invoice_country'] == 'Kuwait') ? 'selected' : '' }}>Kuwait</option>
										<option value="Kyrgyzstan" {{ ($invoice['invoice_country'] == 'Kyrgyzstan') ? 'selected' : '' }}>Kyrgyzstan</option>
										<option value="Laos" {{ ($invoice['invoice_country'] == 'Laos') ? 'selected' : '' }}>Laos</option>
										<option value="Latvia" {{ ($invoice['invoice_country'] == 'Latvia') ? 'selected' : '' }}>Latvia</option>
										<option value="Lebanon" {{ ($invoice['invoice_country'] == 'Lebanon') ? 'selected' : '' }}>Lebanon</option>
										<option value="Lesotho" {{ ($invoice['invoice_country'] == 'Lesotho') ? 'selected' : '' }}>Lesotho</option>
										<option value="Liberia" {{ ($invoice['invoice_country'] == 'Liberia') ? 'selected' : '' }}>Liberia</option>
										<option value="Libya" {{ ($invoice['invoice_country'] == 'Liberia') ? 'selected' : '' }}>Libya</option>
										<option value="Liechtenstein" {{ ($invoice['invoice_country'] == 'Liechtenstein') ? 'selected' : '' }}>Liechtenstein</option>
										<option value="Lithuania" {{ ($invoice['invoice_country'] == 'Lithuania') ? 'selected' : '' }}>Lithuania</option>
										<option value="Luxembourg" {{ ($invoice['invoice_country'] == 'Luxembourg') ? 'selected' : '' }}>Luxembourg</option>
										<option value="Macau" {{ ($invoice['invoice_country'] == 'Macau') ? 'selected' : '' }}>Macau</option>
										<option value="Macedonia" {{ ($invoice['invoice_country'] == 'Macedonia') ? 'selected' : '' }}>Macedonia</option>
										<option value="Madagascar" {{ ($invoice['invoice_country'] == 'Madagascar') ? 'selected' : '' }}>Madagascar</option>
										<option value="Malaysia" {{ ($invoice['invoice_country'] == 'Malaysia') ? 'selected' : '' }}>Malaysia</option>
										<option value="Malawi" {{ ($invoice['invoice_country'] == 'Malawi') ? 'selected' : '' }}>Malawi</option>
										<option value="Maldives" {{ ($invoice['invoice_country'] == 'Maldives') ? 'selected' : '' }}>Maldives</option>
										<option value="Mali" {{ ($invoice['invoice_country'] == 'Mali') ? 'selected' : '' }}>Mali</option>
										<option value="Malta" {{ ($invoice['invoice_country'] == 'Malta') ? 'selected' : '' }}>Malta</option>
										<option value="Marshall Islands" {{ ($invoice['invoice_country'] == 'Marshall Islands') ? 'selected' : '' }}>Marshall Islands</option>
										<option value="Martinique" {{ ($invoice['invoice_country'] == 'Martinique') ? 'selected' : '' }}>Martinique</option>
										<option value="Mauritania" {{ ($invoice['invoice_country'] == 'Mauritania') ? 'selected' : '' }}>Mauritania</option>
										<option value="Mauritius" {{ ($invoice['invoice_country'] == 'Mauritius') ? 'selected' : '' }}>Mauritius</option>
										<option value="Mayotte" {{ ($invoice['invoice_country'] == 'Mayotte') ? 'selected' : '' }}>Mayotte</option>
										<option value="Mexico" {{ ($invoice['invoice_country'] == 'Mexico') ? 'selected' : '' }}>Mexico</option>
										<option value="Midway Islands" {{ ($invoice['invoice_country'] == 'Midway Islands') ? 'selected' : '' }}>Midway Islands</option>
										<option value="Moldova" {{ ($invoice['invoice_country'] == 'Moldova') ? 'selected' : '' }}>Moldova</option>
										<option value="Monaco" {{ ($invoice['invoice_country'] == 'Monaco') ? 'selected' : '' }}>Monaco</option>
										<option value="Mongolia" {{ ($invoice['invoice_country'] == 'Mongolia') ? 'selected' : '' }}>Mongolia</option>
										<option value="Montserrat" {{ ($invoice['invoice_country'] == 'Montserrat') ? 'selected' : '' }}>Montserrat</option>
										<option value="Morocco" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>Morocco</option>
										<option value="Mozambique" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>Mozambique</option>
										<option value="Myanmar" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>Myanmar</option>
										<option value="Nambia" {{ ($invoice['invoice_country'] == 'Nambia') ? 'selected' : '' }}>Nambia</option>
										<option value="Nauru" {{ ($invoice['invoice_country'] == 'Nauru') ? 'selected' : '' }}>Nauru</option>
										<option value="Nepal" {{ ($invoice['invoice_country'] == 'Nepal') ? 'selected' : '' }}>Nepal</option>
										<option value="Netherland Antilles" {{ ($invoice['invoice_country'] == 'Netherland Antilles') ? 'selected' : '' }}>Netherland Antilles</option>
										<option value="Netherlands" {{ ($invoice['invoice_country'] == 'Netherlands') ? 'selected' : '' }}>Netherlands (Holland, Europe)</option>
										<option value="Nevis" {{ ($invoice['invoice_country'] == 'Nevis') ? 'selected' : '' }}>Nevis</option>
										<option value="New Caledonia" {{ ($invoice['invoice_country'] == 'New Caledonia') ? 'selected' : '' }}>New Caledonia</option>
										<option value="New Zealand" {{ ($invoice['invoice_country'] == 'New Zealand') ? 'selected' : '' }}>New Zealand</option>
										<option value="Nicaragua" {{ ($invoice['invoice_country'] == 'Nicaragua') ? 'selected' : '' }}>Nicaragua</option>
										<option value="Niger" {{ ($invoice['invoice_country'] == 'Niger') ? 'selected' : '' }}>Niger</option>
										<option value="Nigeria" {{ ($invoice['invoice_country'] == 'Nigeria') ? 'selected' : '' }}>Nigeria</option>
										<option value="Niue" {{ ($invoice['invoice_country'] == 'Niue') ? 'selected' : '' }}>Niue</option>
										<option value="Norfolk Island" {{ ($invoice['invoice_country'] == 'Norfolk Island') ? 'selected' : '' }}>Norfolk Island</option>
										<option value="Norway" {{ ($invoice['invoice_country'] == 'Norway') ? 'selected' : '' }}>Norway</option>
										<option value="Oman" {{ ($invoice['invoice_country'] == 'Oman') ? 'selected' : '' }}>Oman</option>
										<option value="Pakistan" {{ ($invoice['invoice_country'] == 'Pakistan') ? 'selected' : '' }}>Pakistan</option>
										<option value="Palau Island" {{ ($invoice['invoice_country'] == 'Palau Island') ? 'selected' : '' }}>Palau Island</option>
										<option value="Palestine" {{ ($invoice['invoice_country'] == 'Palestine') ? 'selected' : '' }}>Palestine</option>
										<option value="Panama" {{ ($invoice['invoice_country'] == 'Panama') ? 'selected' : '' }}>Panama</option>
										<option value="Papua New Guinea" {{ ($invoice['invoice_country'] == 'Papua New Guinea') ? 'selected' : '' }}>Papua New Guinea</option>
										<option value="Paraguay" {{ ($invoice['invoice_country'] == 'Paraguay') ? 'selected' : '' }}>Paraguay</option>
										<option value="Peru" {{ ($invoice['invoice_country'] == 'Peru') ? 'selected' : '' }}>Peru</option>
										<option value="Phillipines" {{ ($invoice['invoice_country'] == 'Phillipines') ? 'selected' : '' }}>Philippines</option>
										<option value="Pitcairn Island" {{ ($invoice['invoice_country'] == 'Pitcairn Island') ? 'selected' : '' }}>Pitcairn Island</option>
										<option value="Poland" {{ ($invoice['invoice_country'] == 'Poland') ? 'selected' : '' }}>Poland</option>
										<option value="Portugal" {{ ($invoice['invoice_country'] == 'Portugal') ? 'selected' : '' }}>Portugal</option>
										<option value="Puerto Rico" {{ ($invoice['invoice_country'] == 'Puerto Rico') ? 'selected' : '' }}>Puerto Rico</option>
										<option value="Qatar" {{ ($invoice['invoice_country'] == 'Qatar') ? 'selected' : '' }}>Qatar</option>
										<option value="Republic of Montenegro" {{ ($invoice['invoice_country'] == 'Republic of Montenegro') ? 'selected' : '' }}>Republic of Montenegro</option>
										<option value="Republic of Serbia" {{ ($invoice['invoice_country'] == 'Republic of Serbia') ? 'selected' : '' }}>Republic of Serbia</option>
										<option value="Reunion" {{ ($invoice['invoice_country'] == 'Reunion') ? 'selected' : '' }}>Reunion</option>
										<option value="Romania" {{ ($invoice['invoice_country'] == 'Romania') ? 'selected' : '' }}>Romania</option>
										<option value="Russia" {{ ($invoice['invoice_country'] == 'Russia') ? 'selected' : '' }}>Russia</option>
										<option value="Rwanda" {{ ($invoice['invoice_country'] == 'Rwanda') ? 'selected' : '' }}>Rwanda</option>
										<option value="St Barthelemy" {{ ($invoice['invoice_country'] == 'St Barthelemy') ? 'selected' : '' }}>St Barthelemy</option>
										<option value="St Eustatius" {{ ($invoice['invoice_country'] == 'St Eustatius') ? 'selected' : '' }}>St Eustatius</option>
										<option value="St Helena" {{ ($invoice['invoice_country'] == 'St Helena') ? 'selected' : '' }}>St Helena</option>
										<option value="St Kitts-Nevis" {{ ($invoice['invoice_country'] == 'St Kitts-Nevis') ? 'selected' : '' }}>St Kitts-Nevis</option>
										<option value="St Lucia" {{ ($invoice['invoice_country'] == 'St Lucia') ? 'selected' : '' }}>St Lucia</option>
										<option value="St Maarten" {{ ($invoice['invoice_country'] == 'St Maarten') ? 'selected' : '' }}>St Maarten</option>
										<option value="St Pierre and Miquelon" {{ ($invoice['invoice_country'] == 'St Pierre and Miquelon') ? 'selected' : '' }}>St Pierre & Miquelon</option>
										<option value="St Vincent and Grenadines" {{ ($invoice['invoice_country'] == 'St Vincent and Grenadines') ? 'selected' : '' }}>St Vincent & Grenadines</option>
										<option value="Saipan" {{ ($invoice['invoice_country'] == 'Saipan') ? 'selected' : '' }}>Saipan</option>
										<option value="Samoa" {{ ($invoice['invoice_country'] == 'Samoa') ? 'selected' : '' }}>Samoa</option>
										<option value="American Samoa" {{ ($invoice['invoice_country'] == 'American Samoa') ? 'selected' : '' }}>Samoa American</option>
										<option value="San Marino" {{ ($invoice['invoice_country'] == 'San Marino') ? 'selected' : '' }}>San Marino</option>
										<option value="Sao Tome and Principe" {{ ($invoice['invoice_country'] == 'Sao Tome and Principe') ? 'selected' : '' }}>Sao Tome & Principe</option>
										<option value="Saudi Arabia" {{ ($invoice['invoice_country'] == 'Saudi Arabia') ? 'selected' : '' }}>Saudi Arabia</option>
										<option value="Senegal" {{ ($invoice['invoice_country'] == 'Senegal') ? 'selected' : '' }}>Senegal</option>
										<option value="Seychelles" {{ ($invoice['invoice_country'] == 'Seychelles') ? 'selected' : '' }}>Seychelles</option>
										<option value="Sierra Leone" {{ ($invoice['invoice_country'] == 'Sierra Leone') ? 'selected' : '' }}>Sierra Leone</option>
										<option value="Singapore" {{ ($invoice['invoice_country'] == 'Singapore') ? 'selected' : '' }}>Singapore</option>
										<option value="Slovakia" {{ ($invoice['invoice_country'] == 'Slovakia') ? 'selected' : '' }}>Slovakia</option>
										<option value="Slovenia" {{ ($invoice['invoice_country'] == 'Slovenia') ? 'selected' : '' }}>Slovenia</option>
										<option value="Solomon Islands" {{ ($invoice['invoice_country'] == 'Solomon Islands') ? 'selected' : '' }}>Solomon Islands</option>
										<option value="Somalia" {{ ($invoice['invoice_country'] == 'Somalia') ? 'selected' : '' }}>Somalia</option>
										<option value="South Africa" {{ ($invoice['invoice_country'] == 'South Africa') ? 'selected' : '' }}>South Africa</option>
										<option value="Spain" {{ ($invoice['invoice_country'] == 'Spain') ? 'selected' : '' }}>Spain</option>
										<option value="Sri Lanka" {{ ($invoice['invoice_country'] == 'Sri Lanka') ? 'selected' : '' }}>Sri Lanka</option>
										<option value="Sudan" {{ ($invoice['invoice_country'] == 'Sudan') ? 'selected' : '' }}>Sudan</option>
										<option value="Suriname" {{ ($invoice['invoice_country'] == 'Suriname') ? 'selected' : '' }}>Suriname</option>
										<option value="Swaziland" {{ ($invoice['invoice_country'] == 'Swaziland') ? 'selected' : '' }}>Swaziland</option>
										<option value="Sweden" {{ ($invoice['invoice_country'] == 'Sweden') ? 'selected' : '' }}>Sweden</option>
										<option value="Switzerland" {{ ($invoice['invoice_country'] == 'Switzerland') ? 'selected' : '' }}>Switzerland</option>
										<option value="Syria" {{ ($invoice['invoice_country'] == 'Syria') ? 'selected' : '' }}>Syria</option>
										<option value="Tahiti" {{ ($invoice['invoice_country'] == 'Tahiti') ? 'selected' : '' }}>Tahiti</option>
										<option value="Taiwan" {{ ($invoice['invoice_country'] == 'Taiwan') ? 'selected' : '' }}>Taiwan</option>
										<option value="Tajikistan" {{ ($invoice['invoice_country'] == 'Tajikistan') ? 'selected' : '' }}>Tajikistan</option>
										<option value="Tanzania" {{ ($invoice['invoice_country'] == 'Tanzania') ? 'selected' : '' }}>Tanzania</option>
										<option value="Thailand" {{ ($invoice['invoice_country'] == 'Thailand') ? 'selected' : '' }}>Thailand</option>
										<option value="Togo" {{ ($invoice['invoice_country'] == 'Togo') ? 'selected' : '' }}>Togo</option>
										<option value="Tokelau" {{ ($invoice['invoice_country'] == 'Tokelau') ? 'selected' : '' }}>Tokelau</option>
										<option value="Tonga" {{ ($invoice['invoice_country'] == 'Tonga') ? 'selected' : '' }}>Tonga</option>
										<option value="Trinidad and Tobago" {{ ($invoice['invoice_country'] == 'Trinidad and Tobago') ? 'selected' : '' }}>Trinidad & Tobago</option>
										<option value="Tunisia" {{ ($invoice['invoice_country'] == 'Tunisia') ? 'selected' : '' }}>Tunisia</option>
										<option value="Turkey" {{ ($invoice['invoice_country'] == 'Turkey') ? 'selected' : '' }}>Turkey</option>
										<option value="Turkmenistan" {{ ($invoice['invoice_country'] == 'Turkmenistan') ? 'selected' : '' }}>Turkmenistan</option>
										<option value="Turks and Caicos Islands" {{ ($invoice['invoice_country'] == 'Turks and Caicos Islands') ? 'selected' : '' }}>Turks & Caicos Is</option>
										<option value="Tuvalu" {{ ($invoice['invoice_country'] == 'Tuvalu') ? 'selected' : '' }}>Tuvalu</option>
										<option value="Uganda" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>Uganda</option>
										<option value="United Kingdom" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>United Kingdom</option>
										<option value="Ukraine" {{ ($invoice['invoice_country'] == '') ? 'selected' : '' }}>Ukraine</option>
										<option value="United Arab Erimates" {{ ($invoice['invoice_country'] == 'United Arab Erimates') ? 'selected' : '' }}>United Arab Emirates</option>
										<option value="United States" {{ ($invoice['invoice_country'] == 'United States') ? 'selected' : '' }}>United States</option>
										<option value="Uraguay" {{ ($invoice['invoice_country'] == 'Uraguay') ? 'selected' : '' }}>Uruguay</option>
										<option value="Uzbekistan" {{ ($invoice['invoice_country'] == 'Uzbekistan') ? 'selected' : '' }}>Uzbekistan</option>
										<option value="Vanuatu" {{ ($invoice['invoice_country'] == 'Vanuatu') ? 'selected' : '' }}>Vanuatu</option>
										<option value="Vatican City State" {{ ($invoice['invoice_country'] == 'Vatican City State') ? 'selected' : '' }}>Vatican City State</option>
										<option value="Venezuela" {{ ($invoice['invoice_country'] == 'Venezuela') ? 'selected' : '' }}>Venezuela</option>
										<option value="Vietnam" {{ ($invoice['invoice_country'] == 'Vietnam') ? 'selected' : '' }}>Vietnam</option>
										<option value="Virgin Islands (Britain)" {{ ($invoice['invoice_country'] == 'Virgin Islands (Britain)') ? 'selected' : '' }}>Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)" {{ ($invoice['invoice_country'] == 'Virgin Islands (USA)') ? 'selected' : '' }}>Virgin Islands (USA)</option>
										<option value="Wake Island" {{ ($invoice['invoice_country'] == 'Wake Island') ? 'selected' : '' }}>Wake Island</option>
										<option value="Wallis and Futana Islands" {{ ($invoice['invoice_country'] == 'Wallis and Futana Islands') ? 'selected' : '' }}>Wallis & Futana Is</option>
										<option value="Yemen" {{ ($invoice['invoice_country'] == 'Yemen') ? 'selected' : '' }}>Yemen</option>
										<option value="Zaire" {{ ($invoice['invoice_country'] == 'Zaire') ? 'selected' : '' }}>Zaire</option>
										<option value="Zambia" {{ ($invoice['invoice_country'] == 'Zambia') ? 'selected' : '' }}>Zambia</option>
										<option value="Zimbabwe" {{ ($invoice['invoice_country'] == 'Zimbabwe') ? 'selected' : '' }}>Zimbabwe</option>										
									</select>
								</div> 							
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('Phone Number') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_phone') is-danger @enderror" id="invoice_phone" name="invoice_phone" value="{{ $invoice['invoice_phone'] }}">
										@error('invoice_phone')
											<p class="text-danger">{{ $errors->first('invoice_phone') }}</p>
										@enderror
									</div> 
								</div> 						
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">								
									<h6>{{ __('VAT Number') }}</h6>
									<div class="form-group">							    
										<input type="text" class="form-control @error('invoice_vat_number') is-danger @enderror" id="invoice_vat_number" name="invoice_vat_number" value="{{ $invoice['invoice_vat_number'] }}">
										@error('invoice_vat_number')
											<p class="text-danger">{{ $errors->first('invoice_vat_number') }}</p>
										@enderror
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