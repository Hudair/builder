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
								
                <style>
                .stripe-button-el{width: 100% !important;}
                </style>
					<h5 class="text-center">{{ _lang('Payable Amount') }} : {{ g_decimal_place($amount/100, currency('INR')) }}</h5>
					<br >
					<form action="{{ url('membership/razorpay_payment/'.$payment_id) }}" method="POST">
						{{ csrf_field() }}
						<script
							src="https://checkout.razorpay.com/v1/checkout.js"
							data-key="{{ get_option('razorpay_key_id') }}"
							data-amount="{{ $amount }}"
							data-currency="INR"
							data-name="{{ _lang('Extend Membership') }}"
							data-image="{{ get_logo() }}"
							data-description="{{ $title }}"
							data-prefill.name="{{ Auth::user()->name }}"
							data-prefill.email="{{ Auth::user()->email }}"
							data-prefill.contact=""
							data-notes.shopping_order_id="{{ $payment_id }}"
							data-order_id="{{ $order_id }}">
						</script>
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