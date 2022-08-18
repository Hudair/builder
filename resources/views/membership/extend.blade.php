@extends('layouts.login')

@section('content')
	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
				<!--begin::Aside-->
				<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside">
					<div class="kt-grid__item">
						<a href="#" class="kt-login__logo">
           				<img alt="Logo" src="{{ Auth::user()->company_id != '' ? get_company_logo() : get_logo() }}"/>
						</a>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
						<div class="kt-grid__item kt-grid__item--middle">
							<h3 class="kt-login__title">{{ _lang('Membership Payment') }}!</h3>
							<h4 class="kt-login__subtitle">{{ _lang('Upgrade your membership to use more features') }}.</h4>
						</div>
					</div>
					<div class="kt-grid__item">
						<div class="kt-login__info">
							<div class="kt-login__copyright">
								&copy; {{ date('Y').' '.get_option('company_name') }}
							</div>
						</div>
					</div>
				</div>
				<!--begin::Aside-->

				<!--begin::Content-->
				<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

					<!--begin::Body-->
					<div class="kt-login__body">

						<!--begin::Signin-->
						<div class="kt-login__form">
							@if (\Session::has('message'))
							<div class="alert alert-danger text-center">
								<b>{{ \Session::get('message') }}</b>
							</div>
							@endif		

							<!--begin::Form-->
							<form method="POST" class="kt-form" action="{{ url('membership/pay') }}">
								@csrf

								<div class="form-group">
									<label class="control-label">{{ _lang('Package') }}</label>	
									<select id="package" class="form-control" name="package" required>
										<option value="">{{ _lang('Select Package') }}</option>
										{{ create_option('packages', 'id', 'package_name', $user->company->package_id) }}
									</select>  
								</div>		
								<br>		
							
								<div class="form-group">
									<label class="control-label">{{ _lang('Package Type') }}</label>	
									<select class="form-control" name="package_type" required>
										<option value="">{{ _lang('Select Package Type') }}</option>
										<option value="monthly" {{ $user->company->package_type == 'monthly' ? 'selected' : '' }}>{{ _lang('Monthly Pack') }}</option>
										<option value="yearly" {{ $user->company->package_type == 'yearly' ? 'selected' : '' }}>{{ _lang('Yearly Pack') }}</option> 
									</select>  
								</div>	
								<br>		

								<div class="form-group">
									<label class="control-label">{{ _lang('Payment Gateway') }}</label>						
									<select class="form-control" name="gateway" id="gateway" required>
										@if (get_option('paypal_active') == 'Yes')
											<option value="PayPal">{{ _lang('PayPal') }}</option>
										@endif
										@if (get_option('stripe_active') == 'Yes')
											<option value="Stripe">{{ _lang('Stripe') }}</option>
										@endif
										@if (get_option('razorpay_active') == 'Yes')
											<option value="Razorpay">{{ _lang('Razorpay') }}</option>
										@endif
										@if (get_option('paystack_active') == 'Yes')
											<option value="Paystack">{{ _lang('Paystack') }}</option>
										@endif
									</select>
								</div>
						
								<div class="kt-login__actions">
									<button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">{{ _lang('Process') }}</button>
								</div>
							</form>
							<!--end::Form-->

						</div>
						<!--end::Signin-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Content-->
			</div>
		</div>
	</div>
@endsection