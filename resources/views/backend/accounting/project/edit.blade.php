<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(_lang('SYSDIRECTIONDIR') == 'rtl')direction="rtl" dir="rtl" style="direction: rtl"@endif>
<head>
    <base href="{{ asset('public/backend/assets/novi/novi')}}"><!--end::Base Path -->
    <title>{{ get_option('site_title', 'Spotlayer Framework') }}</title>

    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="icon" href="./../novi/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets-->
    <link rel="stylesheet" id="styles" href="css/style.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,900%7CRoboto:500,400,100,300,600' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Novi Builder -->
<div id="builder"></div>

<!-- Emmet -->
<script src="./../novi/js/code-editor/emmet.js"></script>
<script src="./../novi/js/code-editor/ace/ace.js"></script>
<script src="./../novi/js/code-editor/ace/ext-emmet.js"></script>

<script type="application/javascript">
    var isCookieEnabled, scriptTag, styleTag, id;
    isCookieEnabled = navigator.cookieEnabled;
    id = "";
    scriptTag = document.createElement("script");
    styleTag = document.getElementById("styles");

    if (isCookieEnabled){
        if (getCookie("justupdated")){
            id = "?" + new Date().getTime();
        }
    }

    function getcsrfToken() {
        return "{{ csrf_token() }}";
    }
    function getSaveURL() {
        return "{{url('updateProject')}}/{{$id}}";
    }
    function getAppConfig() {
        var array = [];
        array['project'] = "{{Auth::user()->id}}/{{$id}}";
        array['lang'] = "en";
        array['showIntroduction'] = false;
        array['mode'] = 1;
        array['demoMode'] = @if(isset($demo) && $demo == true) true @else 'no' @endif;
        array['jets'] = true;
        array['enableAuthorization'] = false;
        array['checkForUpdates'] = false;
        return array;
    }
    function getAppPath() {
        return /.html$/.test(location.pathname) ? "{{base_path('public/backend/assets/novi')}}/" : '{{ asset('public/backend/assets/novi')}}/';
    }

    scriptTag.setAttribute("src", "./../novi/js/builder.min.js" + id);
    styleTag.setAttribute("href", "./../novi/css/style.css" + id);
    document.body.appendChild(scriptTag);

    function getCookie(name){
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
</script>
</body>
</html>