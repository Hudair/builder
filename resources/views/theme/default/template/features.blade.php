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
                <h1 class="header-title">{{ _lang('Features') }}</h1>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection

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

@endsection
