@extends('theme.default.layouts.website')

@section('header')
<header id="header-text-6" class="pt-75 pb-75 pt-md-150 pb-md-150 dark spr-edit-el spr-oc-show spr-wout">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md">
                <h3><strong class="header-title">{{ _lang('Sign Up') }}</strong></h3>
            </div>
            <div class="col-md-auto">
                <a href="{{url('/')}}" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-default icon-pos-left" src="./images/gallery/icons/arrow-left.svg" alt=""><path d="m3.82528129 7h11.17471871v2h-11.16842704l3.23949485 3.2394949-1.41421356 1.4142135-4.24264069-4.24264067-1.41421356-1.41421357 5.65685425-5.65685425 1.41421356 1.41421357z" fill-rule="evenodd"></path></svg> {{_lang('Back to home')}}</a>
            </div>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"  style="background-image: url({{ get_option('sub_banner_image') != '' ? asset('public/uploads/media/'.get_option('sub_banner_image')) : theme_asset('assets/images/header-bg.jpg') }}); background-repeat:no-repeat; background-size:cover""></div>
    </div>
</header>
@endsection

@section('content')

<section id="contact-form" class="pt-50 pb-50 pt-lg-150 pb-lg-150 light spr-edit-el spr-oc-show spr-wout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="content-box padding-x3 bg-default shadow">
                    <h3 class=""><strong>{{ _lang('Create Your Account') }}</strong></h3>
                    <p class="mb-30">{{ _lang('Stop wasting time and money designing and managing a website that does not get results. Happiness guaranteed!') }}</p>
					<form action="{{ url('register/client_signup') }}" method="post" autocomplete="off" class="contact_form mb-30 form-vertical" novalidate="novalidate">
						@csrf


						<div class="form-group text-field-group">
							<div >
								<input id="name" type="text" placeholder="{{ _lang('Business Name') }}" class="spr-text-field form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" name="business_name" value="{{ old('business_name') }}" required autofocus>

								@if ($errors->has('business_name'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('business_name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">
							<div >
								<input id="name" type="text" placeholder="{{ _lang('Name') }}" class="spr-text-field form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">

							<div >
								<input id="email" type="email" placeholder="{{ _lang('E-Mail Address') }}" class="spr-text-field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">
							<div >
								<select id="package" class="spr-text-field form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="package" required>
									<option value="">{{ _lang('Select Package') }}</option>
									{{ create_option('packages','id','package_name') }}
								</select>    

								@if ($errors->has('package'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('package') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">
							<div >
								<select id="package_type" class="spr-text-field form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="package_type" required>
									<option value="">{{ _lang('Select Package Type') }}</option>
									<option value="monthly">{{ _lang('Monthly Pack') }}</option>
									<option value="yearly">{{ _lang('Yearly Pack') }}</option> 
								</select>    

								@if ($errors->has('package_type'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('package_type') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">

							<div >
								<input id="password" type="password" placeholder="{{ _lang('Password') }}" class="spr-text-field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
									<span class="help-block with-errors">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group text-field-group">
						<div >
								<input id="password-confirm" type="password" class="spr-text-field form-control" placeholder="{{ _lang('Confirm Password') }}" name="password_confirmation" required>
							</div>
						</div>


                        <button type="submit" id="create_account" data-loading-text="•••" data-complete-text="{{_lang('Completed!')}}" data-reset-text="{{_lang('Try again later...')}}" class="btn btn-lg btn-dark mt-30">{{ _lang('Create Account') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>
@endsection

@section('js-script')
<script>

var package_type = "{{ isset($_GET['package_type']) ? $_GET['package_type'] : '' }}";
$("#package_type").val(package_type);

</script>
@endsection