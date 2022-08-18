@extends('theme.default.layouts.website')

@section('header')
<section class="text-center imagebg space--lg" data-overlay="3">
    @if (get_option('sub_banner_image'))
    <div class="background-image-holder">
        <img alt="background" src="{{ asset('public/uploads/media/'.get_array_option('sub_banner_image')) }}" />
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <h1 class="header-title">{{ _lang('FAQ') }}</h1>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection

@section('content')

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
    @else
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <p class="lead">
                            {{_lang('No questions added yet!')}}
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
    @endif
    

@endsection