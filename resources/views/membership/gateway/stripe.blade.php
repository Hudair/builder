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
					<h5 class="text-center">{{ _lang('Payable Amount') }} : {{ g_decimal_place(convert_currency(get_option('currency','USD'),get_option('stripe_currency','USD'),$amount), currency(get_option('stripe_currency','USD'))) }}</h5>
					<br >
 					<button id="checkout-button" class="btn btn-primary btn-block">{{ _lang('Pay Via Stripe') }}</button>

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

@section('js-script')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
  // Create an instance of the Stripe object with your publishable API key
  var stripe = Stripe('{{ get_option('stripe_publishable_key') }}');
  var checkoutButton = document.getElementById('checkout-button');

  checkoutButton.addEventListener('click', function() {
      stripe.redirectToCheckout({
	     sessionId: '{{ $session_id }}'
	  }).then(function (result) {
	    if(result.error){
			alert(result.error.message);
		}
	  });
  });
</script>

@endsection