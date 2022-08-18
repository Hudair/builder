@extends('theme.default.layouts.website')

@section('header')
<section class="text-center imagebg space--lg" data-overlay="3">
    @if (get_array_option('sub_banner_image'))
    <div class="background-image-holder">
        <img alt="background" src="{{ asset('public/uploads/media/'.get_array_option('sub_banner_image')) }}" />
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <h1 class="header-title">{{ _lang('About Us') }}</h1>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
@section('content')
    @if(get_array_option('about_content'))
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <p class="lead">
                            {!! xss_clean(get_array_option('about_content')) !!}
                        </p>
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
                            {{_lang('No content!')}}
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
    @endif
<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="slider border--round" data-arrows="true" data-paging="true">
                    <ul class="slides">
                        <li>
                            <img alt="Image" src="{{ get_array_option('about_image') != '' ? asset('public/uploads/media/'.get_array_option('about_image')) : theme_asset('assets/img/cowork-5.jpg') }}" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@endsection