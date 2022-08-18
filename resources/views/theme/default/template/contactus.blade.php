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
                <h1 class="header-title">{{ _lang('Contact Us') }}</h1>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection

@section('content')
<section class="text-center height-50">
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <h1>{{ _lang('Get In touch') }}</h1>
                            <p class="lead">
                                {{ _lang('Stop wasting time and money designing and managing a website that does not get results. Happiness guaranteed!') }}
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class=" bg--secondary">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="row">
                                <div class="boxed boxed--border">

                                    <div class="alert alert-success d-none" id="contact-message"></div>
                                    <form action="{{ url('contact/send_message') }}" method="post" autocomplete="off" class="text-left form-email row" id="contact-form-2-form" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="col-md-12">
                                            <input type="text" class="spr-text-field form-control" name="name" value="{{ old('name') }}" placeholder="{{ _lang('Your Name') }}" required="required">
                                            @if ($errors->has('name'))
                                                <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="spr-text-field form-control" name="email" value="{{ old('email') }}" placeholder="{{ _lang('Your Email') }}" required="required">
                                            @if ($errors->has('email'))
                                                <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="spr-text-field form-control" name="subject" value="{{ old('subject') }}" placeholder="{{ _lang('Your Subject') }}" required="required">
                                            @if ($errors->has('subject'))
                                                <div class="help-block with-errors">{{ $errors->first('subject') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <textarea type="text" class="spr-text-field form-control" name="message" placeholder="{{ _lang('Your Mesaage') }}" required="required">{{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                                <div class="help-block with-errors">{{ $errors->first('message') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-12 boxed">
                                            <button type="submit" class="btn btn--primary type--uppercase" id="create_account" data-loading-text="•••" data-complete-text="{{_lang('send message!')}}" data-reset-text="{{_lang('Try again later...')}}" >{{ _lang('send message') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>


@endsection