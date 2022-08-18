@extends('layouts.app')

@section('content')
<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
	<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
	</button>
	

	<div class="kt-grid__item kt-app__toggle kt-app__aside kt-padding-r-20">
		<div class="kt-portlet kt-portlet--height-fluid-">
			<div class="kt-inbox__nav">
				<ul class="kt-nav kt-nav--active-bg nav" id="kt_nav" role="tablist">
					<li class="kt-nav__item">
						<a href="#general" data-toggle="tab" class="kt-nav__link active">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('General Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#system" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('System Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a  href="#email" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Email Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#membership_settings" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Membership Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#payment_gateway" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Payment Gateway') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#social_login" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Google Login') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#cron_jobs" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Cron Jobs') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#logo" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Logo and Favicon') }}</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown">
		<div id="general" class="tab-pane active">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('General Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Company Name') }}</label>						
								<input type="text" class="form-control" name="company_name" value="{{ get_option('company_name') }}" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Site Title') }}</label>						
								<input type="text" class="form-control" name="site_title" value="{{ get_option('site_title') }}" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Phone') }}</label>						
								<input type="text" class="form-control" name="phone" value="{{ get_option('phone') }}" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>						
								<input type="email" class="form-control" name="email" value="{{ get_option('email') }}" required>
								</div>
							</div>

							
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Timezone') }}</label>						
								<select class="form-control select2" name="timezone" required>
								<option value="">{{ _lang('-- Select One --') }}</option>
								{{ create_timezone_option(get_option('timezone')) }}
								</select>
								</div>
							</div>
							
											
							<div class="col-md-6">
								<div class="form-group">
								<label class="control-label">{{ _lang('Language') }}</label>						
								<select class="form-control select2" name="language" required>
									<option value="">{{ _lang('-- Select One --') }}</option>
									{{ load_language( get_option('language') ) }}
								</select>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Address') }}</label>						
								<textarea class="form-control" name="address" >{{ get_option('address') }}</textarea>
								</div>
							</div>

								
							<div class="col-md-12">
								<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
				
		<div id="system" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('System Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Landing Page') }}</label>						
								<select class="form-control" name="website_enable" required>
									<option value="yes" {{ get_option('website_enable') == 'yes' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
									<option value="no" {{ get_option('website_enable') == 'no' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">{{ _lang('Builder') }}</label>		
									<select class="form-control auto-select" data-selected="{{ get_option('default_builder','both') }}" name="default_builder" required>
										<option value="lara" {{ get_option('builder') == 'lara' ? 'selected' : '' }}>{{ _lang('Lara') }}</option>
										<option value="novi" {{ get_option('builder') == 'novi' ? 'selected' : '' }}>{{ _lang('Novi') }}</option>
										<option value="both" {{ get_option('builder') == 'both' ? 'selected' : '' }}>{{ _lang('Both') }}</option>
									</select>
								</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Website Language Dropdown') }}</label>						
								<select class="form-control" name="website_language_dropdown" required>
									<option value="yes" {{ get_option('website_language_dropdown') == 'yes' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
									<option value="no" {{ get_option('website_language_dropdown') == 'no' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
								</select>
							</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Backend Direction') }}</label>						
								<select class="form-control auto-select" data-selected="{{ get_option('backend_direction','ltr') }}" name="backend_direction" required>
									<option value="ltr">{{ _lang('LTR') }}</option>
									<option value="rtl">{{ _lang('RTL') }}</option>
								</select>
							</div>
							</div>								
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Currency Converter') }}</label>						
								<select class="form-control" name="currency_converter" required>
									<option value="manual" {{ get_option('currency_converter') == 'manual' ? 'selected' : '' }}>{{ _lang('Manual') }}</option>
									<option value="fixer" {{ get_option('currency_converter') == 'fixer' ? 'selected' : '' }}>{{ _lang('Fixer API') }}</option>
								</select>
							</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Fixer API Key').' ('._lang('Currency Converter').')' }}</label>	
								<a href="https://fixer.io/" target="_blank" class="btn-link pull-right">{{ _lang('GET API KEY') }}</a>				
								<input type="text" class="form-control" name="fixer_api_key" value="{{ get_option('fixer_api_key') }}">
							</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Google MAP Key') }}</label>	
								<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank" class="btn-link pull-right">{{ _lang('GET API KEY') }}</a>				
								<input type="text" class="form-control" name="google_map_key" value="{{ get_option('google_map_key') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Date Format') }}</label>						
								<select class="form-control auto-select" name="date_format" data-selected="{{ get_option('date_format','Y-m-d') }}" required>
									<option value="Y-m-d">{{ date('Y-m-d') }}</option>
									<option value="d-m-Y">{{ date('d-m-Y') }}</option>
									<option value="d/m/Y">{{ date('d/m/Y') }}</option>
									<option value="m-d-Y">{{ date('m-d-Y') }}</option>
									<option value="m.d.Y">{{ date('m.d.Y') }}</option>
									<option value="m/d/Y">{{ date('m/d/Y') }}</option>
									<option value="d.m.Y">{{ date('d.m.Y') }}</option>
									<option value="d/M/Y">{{ date('d/M/Y') }}</option>
									<option value="d/M/Y">{{ date('M/d/Y') }}</option>
									<option value="d M, Y">{{ date('d M, Y') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Time Format') }}</label>						
								<select class="form-control auto-select" name="time_format" data-selected="{{ get_option('time_format') }}" required>
									<option value="24">{{ _lang('24 Hours') }}</option>
									<option value="12">{{ _lang('12 Hours') }}</option>
								</select>
							</div>
							</div>
	
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('File Manager File Type Supported') }}</label>						
								<input type="text" class="form-control" name="file_manager_file_type_supported" value="{{ get_option('file_manager_file_type_supported','png,jpg,jpeg') }}" required>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('File Manager Max Upload Size in MB') }}</label>						
								<input type="text" class="form-control" name="file_manager_max_upload_size" value="{{ get_option('file_manager_max_upload_size',2) }}" required>
							</div>
							</div>							
								
							<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
			
		<div id="email" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Email Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Mail Type') }}</label>						
								<select class="form-control niceselect wide" name="mail_type" id="mail_type" required>
								<option value="mail" {{ get_option('mail_type')=="mail" ? "selected" : "" }}>{{ _lang('PHP Mail') }}</option>
								<option value="smtp" {{ get_option('mail_type')=="smtp" ? "selected" : "" }}>{{ _lang('SMTP') }}</option>
								<option value="sendmail" {{ get_option('mail_type')=="sendmail" ? "selected" : "" }}>{{ _lang('Sendmail') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('From Email') }}</label>						
								<input type="text" class="form-control" name="from_email" value="{{ get_option('from_email') }}" required>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('From Name') }}</label>						
								<input type="text" class="form-control" name="from_name" value="{{ get_option('from_name') }}" required>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('SMTP Host') }}</label>						
								<input type="text" class="form-control smtp" name="smtp_host" value="{{ get_option('smtp_host') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('SMTP Port') }}</label>						
								<input type="text" class="form-control smtp" name="smtp_port" value="{{ get_option('smtp_port') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('SMTP Username') }}</label>						
								<input type="text" class="form-control smtp" autocomplete="off" name="smtp_username" value="{{ get_option('smtp_username') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('SMTP Password') }}</label>						
								<input type="password" class="form-control smtp" autocomplete="off" name="smtp_password" value="{{ get_option('smtp_password') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('SMTP Encryption') }}</label>						
								<select class="form-control smtp" name="smtp_encryption">
								<option value="">{{ _lang('None') }}</option>
								<option value="ssl" {{ get_option('smtp_encryption')=="ssl" ? "selected" : "" }}>{{ _lang('SSL') }}</option>
								<option value="tls" {{ get_option('smtp_encryption')=="tls" ? "selected" : "" }}>{{ _lang('TLS') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
							</div>
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>
			
		<div id="membership_settings" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Membership Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Membership System') }}</label>						
								<select class="form-control" name="membership_system" required>
									<option value="enabled" {{ get_option('membership_system') == 'enabled' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
									<option value="disabled" {{ get_option('membership_system') == 'disabled' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Allow Sign Up') }}</label>						
								<select class="form-control" name="allow_singup" required>
									<option value="yes" {{ get_option('allow_singup') == 'yes' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
									<option value="no" {{ get_option('allow_singup') == 'no' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Email Verification') }}</label>						
								<select class="form-control" name="email_verification" required>
									<option value="enabled" {{ get_option('email_verification') == 'enabled' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
									<option value="disabled" {{ get_option('email_verification') == 'disabled' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
								</select>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Trial Period') }}</label>						
								<select class="form-control" name="trial_period" required>
									@for($i=0; $i<31; $i ++)
										<option value="{{ $i }}" {{ get_option('trial_period') == $i ? 'selected' : '' }}>{{ $i.' '._lang('days') }}</option>
									@endfor
								</select>
							</div>
							</div>
							
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Currency') }}</label>						
								<select class="form-control select2 auto-select" data-selected="{{ get_option('currency','USD') }}" name="currency" id="currency" required>
									<option value="">{{ _lang('Select One') }}</option>
									{{ get_currency_list() }}
								</select>
							</div>
							</div>
							
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Currency Position') }}</label>						
								<select class="form-control" name="currency_position" required>
									<option value="left" {{ get_option('currency_position') == 'left' ? 'selected' : '' }}>{{ _lang('Left') }}</option>
									<option value="right" {{ get_option('currency_position') == 'right' ? 'selected' : '' }}>{{ _lang('Right') }}</option>
								</select>
							</div>
							</div>
							

							<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
				
		<div id="payment_gateway" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Payment Gateway') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						
						<h5 class="header-title">{{ _lang('PayPal') }}</h5>
						<div class="params-panel border border-dark p-3">
							<div class="row">
								<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">{{ _lang('PayPal Active') }}</label>						
									<select class="form-control" name="paypal_active" required>
									<option value="Yes" {{ get_option('paypal_active') == 'Yes' ? 'selected' : '' }}>{{ _lang('Yes') }}</option>
									<option value="No" {{ get_option('paypal_active') == 'No' ? 'selected' : '' }}>{{ _lang('No') }}</option>
									</select>
								</div>
								</div>
								
								<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">{{ _lang('PayPal Email') }}</label>						
									<input type="text" class="form-control" name="paypal_email" value="{{ get_option('paypal_email') }}">
								</div>
								</div>

								<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">{{ _lang('PayPal Currency') }}</label>						
									<select class="form-control select2 auto-select" data-selected="{{ get_option('paypal_currency','USD') }}" name="paypal_currency" id="paypal_currency" required>
										<option value="USD">{{ _lang('U.S. Dollar') }}</option>
										<option value="AUD">{{ _lang('Australian Dollar') }}</option>
										<option value="BRL">{{ _lang('Brazilian Real') }}</option>
										<option value="CAD">{{ _lang('Canadian Dollar') }}</option>
										<option value="CZK">{{ _lang('Czech Koruna') }}</option>
										<option value="DKK">{{ _lang('Danish Krone') }}</option>
										<option value="EUR">{{ _lang('Euro') }}</option>
										<option value="HKD">{{ _lang('Hong Kong Dollar') }}</option>
										<option value="HUF">{{ _lang('Hungarian Forint') }}</option>
										<option value="INR">{{ _lang('Indian Rupee') }}</option>
										<option value="ILS">{{ _lang('Israeli New Sheqel') }}</option>
										<option value="JPY">{{ _lang('Japanese Yen') }}</option>
										<option value="MYR">{{ _lang('Malaysian Ringgit') }}</option>
										<option value="MXN">{{ _lang('Mexican Peso') }}</option>
										<option value="NOK">{{ _lang('Norwegian Krone') }}</option>
										<option value="NZD">{{ _lang('New Zealand Dollar') }}</option>
										<option value="PHP">{{ _lang('Philippine Peso') }}</option>
										<option value="PLN">{{ _lang('Polish Zloty') }}</option>
										<option value="GBP">{{ _lang('Pound Sterling') }}</option>
										<option value="SGD">{{ _lang('Singapore Dollar') }}</option>
										<option value="SEK">{{ _lang('Swedish Krona') }}</option>
										<option value="CHF">{{ _lang('Swiss Franc') }}</option>
										<option value="TWD">{{ _lang('Taiwan New Dollar') }}</option>
										<option value="THB">{{ _lang('Thai Baht') }}</option>
										<option value="TRY">{{ _lang('Turkish Lira') }}</option>
									</select>
								</div>
								</div>
							</div>
						</div>
						
						<br>
						<h5 class="header-title">{{ _lang('Stripe') }}</h5>
						<div class="params-panel border border-dark p-3">
							<div class="row">
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Stripe Active') }}</label>						
									<select class="form-control" name="stripe_active" required>
									<option value="Yes" {{ get_option('stripe_active') == 'Yes' ? 'selected' : '' }}>{{ _lang('Yes') }}</option>
									<option value="No" {{ get_option('stripe_active') == 'No' ? 'selected' : '' }}>{{ _lang('No') }}</option>
									</select>
								</div>
								</div>
								
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Secret Key') }}</label>						
									<input type="text" class="form-control" name="stripe_secret_key" value="{{ get_option('stripe_secret_key') }}">
								</div>
								</div>
								
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Publishable Key') }}</label>						
									<input type="text" class="form-control" name="stripe_publishable_key" value="{{ get_option('stripe_publishable_key') }}">
								</div>
								</div>


								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Stripe Currency') }}</label>						
									<select class="form-control select2 auto-select" data-selected="{{ get_option('stripe_currency','USD') }}" name="stripe_currency" id="stripe_currency" required>
										<option value="USD">{{ _lang('U.S. Dollar') }}</option>
										<option value="AUD">{{ _lang('Australian Dollar') }}</option>
										<option value="BRL">{{ _lang('Brazilian Real') }}</option>
										<option value="CAD">{{ _lang('Canadian Dollar') }}</option>
										<option value="CZK">{{ _lang('Czech Koruna') }}</option>
										<option value="DKK">{{ _lang('Danish Krone') }}</option>
										<option value="EUR">{{ _lang('Euro') }}</option>
										<option value="HKD">{{ _lang('Hong Kong Dollar') }}</option>
										<option value="HUF">{{ _lang('Hungarian Forint') }}</option>
										<option value="INR">{{ _lang('Indian Rupee') }}</option>
										<option value="ILS">{{ _lang('Israeli New Sheqel') }}</option>
										<option value="JPY">{{ _lang('Japanese Yen') }}</option>
										<option value="MYR">{{ _lang('Malaysian Ringgit') }}</option>
										<option value="MXN">{{ _lang('Mexican Peso') }}</option>
										<option value="NOK">{{ _lang('Norwegian Krone') }}</option>
										<option value="NZD">{{ _lang('New Zealand Dollar') }}</option>
										<option value="PHP">{{ _lang('Philippine Peso') }}</option>
										<option value="PLN">{{ _lang('Polish Zloty') }}</option>
										<option value="GBP">{{ _lang('Pound Sterling') }}</option>
										<option value="SGD">{{ _lang('Singapore Dollar') }}</option>
										<option value="SEK">{{ _lang('Swedish Krona') }}</option>
										<option value="CHF">{{ _lang('Swiss Franc') }}</option>
										<option value="TWD">{{ _lang('Taiwan New Dollar') }}</option>
										<option value="THB">{{ _lang('Thai Baht') }}</option>
										<option value="TRY">{{ _lang('Turkish Lira') }}</option>
									</select>
								</div>
								</div>

							</div>
						</div>

						<br>
						<h5 class="header-title">{{ _lang('Razorpay') }}</h5>
						<div class="params-panel border border-dark p-3">
							<div class="row">
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Razorpay Active') }}</label>						
									<select class="form-control" name="razorpay_active" required>
									<option value="No" {{ get_option('razorpay_active') == 'No' ? 'selected' : '' }}>{{ _lang('No') }}</option>
									<option value="Yes" {{ get_option('razorpay_active') == 'Yes' ? 'selected' : '' }}>{{ _lang('Yes') }}</option>
									</select>
								</div>
								</div>

								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Key ID') }}</label>						
									<input type="text" class="form-control" name="razorpay_key_id" value="{{ get_option('razorpay_key_id') }}">
								</div>
								</div>
								
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Secret Key') }}</label>						
									<input type="text" class="form-control" name="razorpay_secret_key" value="{{ get_option('razorpay_secret_key') }}">
								</div>
								</div>


								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Razorpay Currency') }}</label>						
									<select class="form-control select2 auto-select" data-selected="{{ get_option('razorpay_currency','INR') }}" name="razorpay_currency" id="razorpay_currency" required>
										<option value="INR">{{ _lang('Indian Rupee') }}</option>
									</select>
								</div>
								</div>

							</div>
						</div>


						<br>
						<h5 class="header-title">{{ _lang('Paystack') }}</h5>
						<div class="params-panel border border-dark p-3">
							<div class="row">
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Paystack Active') }}</label>						
									<select class="form-control" name="paystack_active" required>
									<option value="No" {{ get_option('paystack_active') == 'No' ? 'selected' : '' }}>{{ _lang('No') }}</option>
									<option value="Yes" {{ get_option('paystack_active') == 'Yes' ? 'selected' : '' }}>{{ _lang('Yes') }}</option>
									</select>
								</div>
								</div>

								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Paystack Public Key') }}</label>						
									<input type="text" class="form-control" name="paystack_public_key" value="{{ get_option('paystack_public_key') }}">
								</div>
								</div>
								
								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Paystack Secret Key') }}</label>						
									<input type="text" class="form-control" name="paystack_secret_key" value="{{ get_option('paystack_secret_key') }}">
								</div>
								</div>


								<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">{{ _lang('Paystack Currency') }}</label>						
									<select class="form-control select2 auto-select" data-selected="{{ get_option('paystack_currency','GHS') }}" name="paystack_currency" id="paystack_currency" required>
										<option value="GHS">{{ _lang('Ghana') }}</option>
										<option value="NGN">{{ _lang('Nigeria') }}</option>
										<option value="ZAR">{{ _lang('South Africa') }}</option>
									</select>
								</div>
								</div>

							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
							</div>
							</div>							
						</div>							
					</form>
				</div>
			</div>
		</div>
				
		<div id="social_login" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Google Login') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">		
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('Google Login') }}</label>
								<select class="form-control select2" name="google_login" required>
									<option value="disabled" {{ get_option('google_login') == 'disabled' ? 'selected' : '' }}>{{ _lang('Disable') }}</option>
									<option value="enabled" {{ get_option('google_login') == 'enabled' ? 'selected' : '' }}>{{ _lang('Enable') }}</option>
								</select>
							</div>
							</div>
							
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('GOOGLE CLIENT ID') }}</label>					<a href="https://console.developers.google.com/apis/credentials" target="_blank" class="btn-link pull-right">{{ _lang('GET API KEY') }}</a>	
								<input type="text" class="form-control" name="GOOGLE_CLIENT_ID" value="{{ get_option('GOOGLE_CLIENT_ID') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('GOOGLE CLIENT SECRET') }}</label>						
								<input type="text" class="form-control" name="GOOGLE_CLIENT_SECRET" value="{{ get_option('GOOGLE_CLIENT_SECRET') }}">
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ _lang('GOOGLE REDIRECT URL') }}</label>						
								<input type="text" class="form-control" value="{{ url('google/callback') }}" readOnly="true">
							</div>
							</div>
							

							<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
							</div>
							</div>	
						</div>							
					</form>
				</div>
			</div>
		</div>
		
		<div id="cron_jobs" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Cron Jobs') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}">				         
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Cron Jobs URL') }} (<b>{{ _lang('Run every 12 hours') }}</b>)</label>						
								<input type="text" class="form-control" value="wget -O- {{ url('console/run') }} >> /dev/null" readOnly>
							</div>
							</div>
					
						</div>
					</form>	
				</div>
			</div>
		</div>
			
		<div id="logo" class="tab-pane fade">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Logo and Favicon') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<div class="row">
						<div class="col-md-6">
							<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/upload_logo') }}" enctype="multipart/form-data">				         	
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('Upload Logo') }}</label>						
										<input type="file" class="form-control dropify" name="logo" data-max-file-size="8M" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" data-default-file="{{ get_logo() }}" required>
									</div>
									</div>
									
									<br>
									<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">{{ _lang('Upload') }}</button>
									</div>
									</div>	
								</div>	
							</form>
						</div>

						<div class="col-md-6">
							<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/general_settings/update') }}" enctype="multipart/form-data">	
								{{ csrf_field() }}
								<div class="row">	
									<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">{{ _lang('Upload Favicon') }} (PNG)</label>						
										<input type="file" class="form-control dropify" name="favicon" data-max-file-size="2M" data-allowed-file-extensions="png" data-default-file="{{ get_favicon() }}" required>
									</div>
									</div>
									
									<br>
									<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">{{ _lang('Upload') }}</button>
									</div>
									</div>	
								</div>
							</form>										
						</div>									
					<div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection


