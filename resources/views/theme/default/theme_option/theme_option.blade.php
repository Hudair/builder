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
						<a href="#global_settings" data-toggle="tab" class="kt-nav__link active">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Global Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#home_page" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Home Page') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#about_page" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('About Page') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#terms_page" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Terms & Condition') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#seo" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('SEO Settings') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#social_links" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Social Links') }}</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#custom_css" data-toggle="tab" class="kt-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24"></rect>
									<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
								</g>
							</svg>
							<span class="kt-nav__link-text">{{ _lang('Custom CSS') }}</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>


	@php $language_list = get_language_list(); @endphp

	<div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown">
		<div id="global_settings" class="tab-pane active">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Global Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Banner Image') }}</label>						
								<input type="file" class="dropify" name="home_banner_image" data-allowed-file-extensions="jpg jpeg png" data-default-file="{{ get_option('home_banner_image') != '' ? asset('public/uploads/media/'.get_option('home_banner_image')) : theme_asset('assets/img/avatar-large-3.png') }}">
							</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">{{ _lang('Sub Page Banner') }}</label>						
								<input type="file" class="dropify" name="sub_banner_image" data-allowed-file-extensions="jpg jpeg png" data-default-file="{{ get_option('sub_banner_image') != '' ? asset('public/uploads/media/'.get_option('sub_banner_image')) : '' }}">
							</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label">{{ _lang('Contact Email Address') }}</label>				
									<input type="text" class="form-control" name="contact_email" value="{{ get_option('contact_email') }}">
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


			
		<div id="home_page" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Home Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<ul class="nav nav-tabs">
						@foreach($language_list as $language)
							<li class="nav-item">
								<a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#home-language-{{ $loop->index + 1 }}">{{ $language }}</a>
							</li>
						@endforeach
					</ul>
					<br>

					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="tab-content">

							@foreach($language_list as $language)
							<div class="tab-pane container {{ $loop->first ? 'active' : '' }}" id="home-language-{{ $loop->index + 1 }}">
								<div class="row">
									
									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('Hero Title') }}</label>						
										<input type="text" class="form-control" name="hero_title[{{$language}}]" value="{{ get_array_option('hero_title',$language) }}">
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('Hero Sub Title') }}</label>						
										<input type="text" class="form-control" name="hero_sub_title[{{$language}}]" value="{{ get_array_option('hero_sub_title',$language) }}">
										</div>
									</div>


									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('Website Copyright') }}</label>				
										<input type="text" class="form-control" name="website_copyright[{{$language}}]" value="{{ get_array_option('website_copyright',$language) }}">
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save Settings') }}</button>
										</div>
									</div>
								</div> <!--End Row-->
							</div>

							@endforeach
						</div>
					</form>
				</div>
			</div>
		</div> <!--End Tab-->

		<div id="about_page" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('About Page') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<ul class="nav nav-tabs">
						@foreach($language_list as $language)
							<li class="nav-item">
								<a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#about-language-{{ $loop->index + 1 }}">{{ $language }}</a>
							</li>
						@endforeach
					</ul>
					<br>

					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="tab-content">

							@foreach($language_list as $language)
							<div class="tab-pane container {{ $loop->first ? 'active' : '' }}" id="about-language-{{ $loop->index + 1 }}">
								<div class="row">

									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('About Content') }}</label>						
										<textarea class="form-control summernote" rows="10" name="about_content[{{$language}}]">{{ get_array_option('about_content',$language) }}</textarea>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('About Image') }}</label>						
										<input type="file" class="dropify" name="about_image[{{$language}}]" data-allowed-file-extensions="jpg jpeg png" data-default-file="{{ get_array_option('about_image',$language) != '' ? asset('public/uploads/media/'.get_array_option('about_image',$language)) : theme_asset('assets/img/cowork-5.jpg') }}">
										</div>
									</div>
								
									<div class="col-md-12">
										<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save') }}</button>
										</div>
									</div>
								</div>		
							</div>
							@endforeach
						</div>	<!--End Tab Content-->					
					</form>
				</div>
			</div>
		</div><!--End Tab-->

		<div id="terms_page" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('About Page') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<ul class="nav nav-tabs">
						@foreach($language_list as $language)
							<li class="nav-item">
								<a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#terms-language-{{ $loop->index + 1 }}">{{ $language }}</a>
							</li>
						@endforeach
					</ul>
					<br>

					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="tab-content">

							@foreach($language_list as $language)
							<div class="tab-pane container {{ $loop->first ? 'active' : '' }}" id="terms-language-{{ $loop->index + 1 }}">
								<div class="row">
									
									<div class="col-md-12">
										<div class="form-group">
										<label class="control-label">{{ _lang('Terms & Condition Content') }}</label>						
										<textarea class="form-control summernote" rows="10" name="terms_condition_content">{{ get_option('terms_condition_content') }}</textarea>
										</div>
									</div>
								
									<div class="col-md-12">
										<div class="form-group">
										<button type="submit" class="btn btn-primary">{{ _lang('Save') }}</button>
										</div>
									</div>
								</div>	<!--End Row-->	
							</div>
							@endforeach
						</div>				
					</form>
				</div>
			</div>
		</div><!--End Tab-->
			
		

		<div id="seo" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('SEO Settings') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Website Title') }}</label>						
								<input type="text" class="form-control" name="website_title" value="{{ get_option('website_title','LaraBuilder') }}">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Meta Keywords') }}</label>						
								<input type="text" class="form-control" name="meta_keywords" value="{{ get_option('meta_keywords') }}">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Meta Description') }}</label>						
								<textarea class="form-control" name="meta_description">{{ get_option('meta_description') }}</textarea>
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
		</div><!--End Tab-->		

		<div id="social_links" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Social Links') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Facebook') }}</label>						
								<input type="text" class="form-control" name="facebook_link" value="{{ get_option('facebook_link') }}">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Twitter') }}</label>						
								<input type="text" class="form-control" name="twitter_link" value="{{ get_option('twitter_link') }}">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Instagram') }}</label>						
								<input type="text" class="form-control" name="instagram_link" value="{{ get_option('instagram_link') }}">
								</div>
							</div>
						
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('Linkedin') }}</label>						
								<input type="text" class="form-control" name="linkedin_link" value="{{ get_option('linkedin_link') }}">
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
		</div><!--End Tab-->		

		<div id="custom_css" class="tab-pane">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">{{ _lang('Custom CSS') }}</h3>
				</div>
			</div>
			<div class="kt-portlet__body kt-portlet__body--fit-x">
				<div class="col-12">
					<form method="post" class="appsvan-submit params-panel" autocomplete="off" action="{{ url('administration/theme_option/update') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">{{ _lang('CSS Code') }}</label>						
								<textarea class="form-control" rows="10" name="custom_css_code">{{ get_option('custom_css_code') }}</textarea>
								<span>{{ _lang('Write Your CSS Code without style tag') }}</span>
								</div>
							</div>
						
							<div class="col-md-12">
								<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Save CSS') }}</button>
								</div>
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div><!--End Tab-->			

	</div>
</div>
@endsection