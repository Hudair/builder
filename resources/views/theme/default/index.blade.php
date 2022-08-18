@extends('theme.default.layouts.website')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                @foreach(\App\Feature::all() as $feature)
                    <div class="col-md-6">
                        <div class="feature feature-5 boxed boxed--lg boxed--border">
                            <i class="{{ get_array_data($feature->icon) }} icon--lg"></i>
                            <div class="feature__body">
                                <h5>{{ get_array_data($feature->title) }}</h5>
                                <p>
                                    {{ get_array_data($feature->content) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    

    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="cta">
                        <h2>{{ _lang('Our Pricing') }}</h2>
                        <p class="lead">
                            {{ _lang('Stop wasting time and money designing and managing a website that does not get results. Happiness guaranteed!') }}
                        </p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">

            <div class="row pricing-headline">
                <div class="col-md-12 text-center"> 
                    <button class="btn btn--primary type--uppercase btn-hop" id="btn-monthly">
                        {{ _lang('Monthly Plan') }}
                    </button>
                    <button class="btn btn--primary type--uppercase btn-not-hop"  id="btn-yearly">
                        {{ _lang('Yearly Plan') }}
                    </button>
                </div>
            </div>


            <div class="row pricing-content">
                @php $currency = currency(get_option('currency','USD')); @endphp
                
                @foreach(\App\Package::all() as $package)
                    <div class="col-md-4 monthly-package">
                        <div class="pricing pricing-1 boxed boxed--lg boxed--border boxed--emphasis">
                            <h3> {{ $package->package_name }}</h3>
                            <span class="h2">
                                <strong>{{ g_decimal_place($package->cost_per_month, $currency) }}</strong>
                            </span>
                            <span class="type--fine-print">{{ _lang('Per Month') }}.</span>
                            @if ($package->is_featured == 1)
                                <span class="label">{{ _lang('Value') }}</span>
                            @endif
                            <hr>
                            <ul>
                                <li>
                                    <span class="checkmark bg--primary-1"></span>
                                    <span>{{ _dlang(unserialize($package->websites_limit)['monthly']).' '._lang('Websites') }}</span>
                                </li>
                            </ul>
                            <a class="btn btn--{{ $package->is_featured == 1 ? 'primary-1' : 'primary' }}" href="{{ url('register/client_signup?package_type=monthly&package='.$package->id) }}">
                                <span class="btn__text">
                                    {{ _lang('Get Started') }}
                                </span>
                            </a>
                        </div>
                        <!--end of pricing-->
                    </div>
                    <div class="col-md-4 yearly-package" style="display:none">
                        <div class="pricing pricing-1 boxed boxed--lg boxed--border boxed--emphasis">
                            <h3> {{ $package->package_name }}</h3>
                            <span class="h2">
                                <strong>{{ g_decimal_place($package->cost_per_year, $currency) }}</strong>
                            </span>
                            <span class="type--fine-print">{{ _lang('Per Year') }}.</span>
                            @if ($package->is_featured == 1)
                                <span class="label">{{ _lang('Value') }}</span>
                            @endif
                            <hr>
                            <ul>
                                <li>
                                    <span class="checkmark bg--primary-1"></span>
                                    <span>{{ _dlang(unserialize($package->websites_limit)['yearly']).' '._lang('Websites') }}</span>
                                </li>
                            </ul>
                            <a class="btn btn--{{ $package->is_featured == 1 ? 'primary-1' : 'primary' }}" href="{{ url('register/client_signup?package_type=yearly&package='.$package->id) }}">
                                <span class="btn__text">
                                    {{ _lang('Get Started') }}
                                </span>
                            </a>
                        </div>
                        <!--end of pricing-->
                    </div>
                @endforeach
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    
    @if(\App\Faq::count() > 0)
        <section class="bg--secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-block">
                            <h4>{{ _lang('Frequently Asked Questions') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        @foreach(\App\Faq::all() as $faq)
                            <div class="text-block">
                                <h5>{{ get_array_data($faq->question) }}</h5>
                                <p>{!! clean(get_array_data($faq->answer)) !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
    @endif
    

@endsection
@section('js-script')

    <script type="text/javascript">     
        (function($){		
			"use strict";
            $('body').on( 'click', '#btn-monthly', function(){
                $(this).addClass('btn-hop');
                $(this).removeClass('btn-not-hop');
                $('#btn-yearly').removeClass('btn-hop');
                $('#btn-yearly').addClass('btn-not-hop');
                $('.yearly-package').css('display', 'none');
                $('.monthly-package').css('display', 'block');
                $('#btn-yearly').removeClass('btn-primary').addClass('btn-outline-info');
                $('#btn-monthly').removeClass('btn-outline-info').addClass('btn-primary');
            });
            $('body').on( 'click', '#btn-yearly', function(){
                $(this).addClass('btn-hop');
                $(this).removeClass('btn-not-hop');
                $('#btn-monthly').removeClass('btn-hop');
                $('#btn-monthly').addClass('btn-not-hop');
                $('.monthly-package').css('display', 'none');
                $('.yearly-package').css('display', 'block');
                $('#btn-monthly').removeClass('btn-primary').addClass('btn-outline-info');
                $('#btn-yearly').removeClass('btn-outline-info').addClass('btn-primary');
            });

        })(jQuery); <!-- End jQuery -->
    </script>
@endsection