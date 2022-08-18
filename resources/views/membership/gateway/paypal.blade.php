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
							
						<div class="card card-signin my-5">			
							<div class="card-header text-center">
							{{ _lang('Extend Membership') }}
							</div>

							<div class="card-body" id="extend_membership">
								
								<h5 class="text-center">{{ _lang('Payable Amount') }} : {{ g_decimal_place(convert_currency(get_option('currency','USD'),get_option('paypal_currency','USD'),$amount), currency(get_option('paypal_currency','USD'))) }}</h5>
								<br>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="cmd" value="_xclick">
									<input type="hidden" name="business" value="{{ get_option('paypal_email') }}">
									<input type="hidden" name="item_name" value="{{ $title }}">
									<input type="hidden" name="item_number" value="{{ $payment_id }}">
									<input type="hidden" name="amount" value="{{ convert_currency(get_option('currency','USD'),get_option('paypal_currency','USD'),$amount) }}">
									<input type="hidden" name="no_shipping" value="0">
									<input type="hidden" name="custom" value="{{ $custom }}">
									<input type="hidden" name="no_note" value="1">
									<input type="hidden" name="currency_code" value="{{ get_option('paypal_currency','USD') }}">
									<input type="hidden" name="lc" value="US">
									<input type="hidden" name="bn" value="PP-BuyNowBF">
									
									<input type="hidden" name="return" value="{{ url('membership/paypal/return') }}"/>
									<input type="hidden" name="cancel_return" value="{{ url('membership/paypal/cancel') }}" />
									<input type="hidden" name="notify_url" value="{{ url('membership/paypal_ipn') }}" />
									
									<input type="submit" name="submit" class="btn btn-primary btn-block" value="Pay Now" alt="PayPal - The safer, easier way to pay online.">
								</form>

							</div>
						</div>

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