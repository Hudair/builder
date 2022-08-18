<html lang="{{ app()->getLocale() }}" @if(_lang('SYS_DIRECTION_DIR') == 'rtl')direction="rtl" dir="rtl"@endif >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href="{{ asset('public/backend/assets/admin')}}"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <link rel="shortcut icon" href="{{ get_favicon() }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ get_option('site_title', 'Spotlayer Framework') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito|Roboto" rel="stylesheet">

        
        <!--begin::Page Custom Styles(used by this page) -->
            <link href="./admin/css/demo1/pages/login/login-1.css" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles -->
    
        @if (_lang('SYS_DIRECTION_DIR') == 'rtl')
            <link href="./admin/css/demo1/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
            <link href="{{ asset('public/backend/admin/vendors/custom/notifications/css/ns-default.rtl.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('public/backend/admin/vendors/custom/notifications/css/ns-style-other.rtl.css') }}" rel="stylesheet" type="text/css" />
            <link href="//fonts.googleapis.com/css?family=Cairo:300,400,600,700" rel="stylesheet">


            <!--begin::Layout Skins(used by all pages) -->
            <link href="./admin/css/demo1/skins/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/brand/light.rtl.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/aside/light.rtl.css" rel="stylesheet" type="text/css" />
            <!--end::Layout Skins -->
        @else
            <link href="./admin/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
            <link href="./admin/vendors/custom/notifications/css/ns-default.css" rel="stylesheet" type="text/css" />
            <link href="./admin/vendors/custom/notifications/css/ns-style-other.css" rel="stylesheet" type="text/css" />

            <!--begin::Layout Skins(used by all pages) -->
            <link href="./admin/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/brand/light.css" rel="stylesheet" type="text/css" />
            <link href="./admin/css/demo1/skins/aside/light.css" rel="stylesheet" type="text/css" />
            <!--end::Layout Skins -->
        @endif
    </head>
    <!-- end::Head -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        @yield('content')

        @if(env('DEMO_MODE') == true)
		    <script src="{{ asset('public/backend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
        @endif
        @yield('js-script')
    </body>
</html>