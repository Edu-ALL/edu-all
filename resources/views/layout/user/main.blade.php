<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'id' ? 'id' : 'en' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title>
    <link href="{{ asset('favicon.png') }}" rel="icon">

    @if (!request()->is(app()->getLocale() . '/blog/*'))
        <meta property=og:url content="{{ url('/') }}">
        <meta property=og:image content="{{ asset('uploaded_files/blogs/2021/03/Header_Image_3-min.png') }}">
        <meta property=og:title content="ALL-in Eduspace | Best Jakarta Independent University Consultant">
        <meta property=og:description content="{{ __('pages/home.meta_description') }}">
    @endif

    <link rel="alternate" hreflang="id-en" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="id" href="{{ url('/id') }}" />
    <link rel="alternate" hreflang="sg" href="{{ url('/sg') }}" />


    {{-- Blog SEO --}}
    @yield('head')

    <link href="/css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css">
    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">


    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/d11faf3e43.js" crossorigin="anonymous"></script>
    {{-- Splide JS - JS --}}
    <script src="/js/splide.min.js"></script>
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- Lazy Image Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    {{-- Instafeed  --}}
    <script src="{{ url('js/instafeed.js') }}"></script>
    {{-- Social Share  --}}
    <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script>


    <!-- Google Analytics snippet added by Site Kit -->
    <script src='https://www.googletagmanager.com/gtag/js?id=UA-133747692-1'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('set', 'linker', {
            "domains": ["all-inedu.com"]
        });
        gtag("js", new Date());
        gtag("set", "developer_id.dZTNiMT", true);
        gtag("config", "UA-133747692-1", {
            "anonymize_ip": true
        });
        gtag("config", "G-RN9CC3WCZ3");
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    </script>
    <!-- End Meta Pixel Code -->


</head>

<body id="body">
    <div class="fixed -bottom-[100px] lg:left-10 left-[10px] z-[9999] transition-all duration-1000" id="topButton">
        <div class="bg-primary rounded-full w-[40px] h-[40px] flex justify-center items-center text-white border border-[1px] border-[#F78614] cursor-pointer shadow "
            onclick="topFunction()">
            <i class="fa fa-arrow-up"></i>
        </div>
    </div>

    <div class="fixed -bottom-[100%] lg:right-10 right-[10px] z-[99999] transition-all duration-1000 bg-white lg:w-[400px] w-[80%] h-auto shadow-md rounded-md border-[1px]"
        id="newsForm">
        <div class="absolute right-2 top-3.5 z-[99999] text-right -mt-[5px] w-[28px] h-[28px] rounded-full bg-yellow text-white inline-block float-right flex justify-center items-center cursor-pointer"
            onclick="popupForm('close')">
            <i class="fa fa-xmark"></i>
        </div>
        <div class="p-0">
            <div class="rounded-md overflow-hidden">
                <style type="text/css">
                    @import url("https://assets.mlcdn.com/fonts.css?version=1678351");
                </style>
                <style type="text/css">
                    /* LOADER */
                    .ml-form-embedSubmitLoad {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                    }

                    .g-recaptcha {
                        transform: scale(1);
                        -webkit-transform: scale(1);
                        transform-origin: 0 0;
                        -webkit-transform-origin: 0 0;
                        height: ;
                    }

                    .sr-only {
                        position: absolute;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        border: 0;
                    }

                    .ml-form-embedSubmitLoad:after {
                        content: " ";
                        display: block;
                        width: 11px;
                        height: 11px;
                        margin: 1px;
                        border-radius: 50%;
                        border: 4px solid #fff;
                        border-color: #ffffff #ffffff #ffffff transparent;
                        animation: ml-form-embedSubmitLoad 1.2s linear infinite;
                    }

                    @keyframes ml-form-embedSubmitLoad {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    #mlb2-4031658.ml-form-embedContainer {
                        box-sizing: border-box;
                        display: table;
                        margin: 0 auto;
                        position: static;
                        width: 100% !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer h4,
                    #mlb2-4031658.ml-form-embedContainer p,
                    #mlb2-4031658.ml-form-embedContainer span,
                    #mlb2-4031658.ml-form-embedContainer button {
                        text-transform: none !important;
                        letter-spacing: normal !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper {
                        background-color: #1d274b;

                        border-width: 0px;
                        border-color: transparent;
                        border-radius: 0px;
                        border-style: solid;
                        box-sizing: border-box;
                        display: inline-block !important;
                        margin: 0;
                        padding: 0;
                        position: relative;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper.embedPopup,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper.embedDefault {
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper.embedForm {
                        max-width: 100%;
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-align-left {
                        text-align: left;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-align-center {
                        text-align: center;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-align-default {
                        display: table-cell !important;
                        vertical-align: middle !important;
                        text-align: center !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-align-right {
                        text-align: right;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img {
                        border-top-left-radius: 0px;
                        border-top-right-radius: 0px;
                        height: auto;
                        margin: 0 auto !important;
                        max-width: 100%;
                        width: undefinedpx;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {
                        padding: 20px 20px 0 20px;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal {
                        padding-bottom: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent {
                        text-align: left;
                        margin: 0 0 20px 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {
                        color: #ffffff;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 22px;
                        font-weight: 400;
                        margin: 0 0 10px 0;
                        text-align: center;
                        word-break: break-word;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {
                        color: #fbfafa;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        line-height: 22px;
                        margin: 0 0 10px 0;
                        text-align: center;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol {
                        color: #fbfafa;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 16px;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol {
                        list-style-type: lower-alpha;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol {
                        list-style-type: lower-roman;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a {
                        color: #000000;
                        text-decoration: underline;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group {
                        text-align: left !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label {
                        margin-bottom: 5px;
                        color: #ffffff;
                        font-size: 18px;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-weight: bold;
                        font-style: normal;
                        text-decoration: none;
                        ;
                        display: inline-block;
                        line-height: 24px;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child {
                        margin: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form {
                        margin: 0;
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                        margin: 0 0 20px 0;
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                        float: left;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {
                        margin: 0;
                        padding: 0 0 20px 0;
                        width: 100%;
                        height: auto;
                        float: left;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow {
                        margin: 0 0 10px 0;
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item {
                        margin: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal {
                        margin: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        height: auto;
                        line-height: 21px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        margin-left: 0;
                        margin-right: 0;
                        padding: 10px 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder {
                        color: #736767;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder {
                        color: #736767;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder {
                        color: #736767;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder {
                        color: #736767;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        height: auto;
                        line-height: 21px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        border-color: #736767 !important;
                        background-color: #ffffff !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type="checkbox"] {
                        box-sizing: border-box;
                        padding: 0;
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        margin-top: 5px;
                        margin-left: -1.5rem;
                        overflow: visible;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        border-radius: 4px !important;
                    }


                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::after {
                        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after {
                        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::before {
                        border-color: #BE1E2D !important;
                        background-color: #BE1E2D !important;
                        color: #ffffff !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after {
                        top: 5px;
                        box-sizing: border-box;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        top: 3px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        top: 0px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {
                        top: 0px !important;
                        box-sizing: border-box !important;
                        position: absolute;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                        top: 0px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before {
                        position: absolute;
                        top: 4px;
                        left: -1.5rem;
                        display: block;
                        width: 16px;
                        height: 16px;
                        pointer-events: none;
                        content: "";
                        background-color: #ffffff;
                        border: #adb5bd solid 1px;
                        border-radius: 50%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after {
                        position: absolute;
                        top: 5px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        position: absolute;
                        top: 4px;
                        left: -1.5rem;
                        display: block;
                        width: 16px;
                        height: 16px;
                        pointer-events: none;
                        content: "";
                        background-color: #ffffff;
                        border: #adb5bd solid 1px;
                        border-radius: 50%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after {
                        position: absolute;
                        top: 3px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        position: absolute;
                        top: 0px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after {
                        background: no-repeat 50%/50% 50%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        background: no-repeat 50%/50% 50%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control {
                        position: relative;
                        display: block;
                        min-height: 1.5rem;
                        padding-left: 1.5rem;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input {
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        box-sizing: border-box;
                        padding: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label {
                        color: #fbfafa;
                        font-size: 15px !important;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        line-height: 25px;
                        margin-bottom: 0;
                        position: relative;
                        vertical-align: top;
                        font-style: normal;
                        font-weight: 400;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        line-height: 20px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 28px 10px 12px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                        height: auto;
                        display: inline-block;
                        vertical-align: middle;
                        background: url('https://assets.mlcdn.com/ml/images/default/dropdown.svg') no-repeat right .75rem center/8px 10px;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                    }


                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow {
                        height: auto;
                        width: 100%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                        width: 70%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal {
                        width: 30%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn {
                        padding-top: 29px;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                        box-sizing: border-box;
                        float: left;
                        padding-right: 10px;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input {
                        background-color: #ffffff;
                        color: #736767;
                        border-color: #736767;
                        border-radius: 14px;
                        border-style: solid;
                        border-width: 1px;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px;
                        line-height: 20px;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 10px;
                        width: 100%;
                        box-sizing: border-box;
                        overflow-y: initial;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button {
                        background-color: #BE1E2D !important;
                        border-color: #BE1E2D;
                        border-style: solid;
                        border-width: 1px;
                        border-radius: 4px;
                        box-shadow: none;
                        color: #ffffff !important;
                        cursor: pointer;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 19px !important;
                        font-weight: 700;
                        line-height: 20px;
                        margin: 0 !important;
                        padding: 10px !important;
                        width: 100%;
                        height: auto;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover {
                        background-color: #333333 !important;
                        border-color: #333333 !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type="checkbox"] {
                        box-sizing: border-box;
                        padding: 0;
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        margin-top: 5px;
                        margin-left: -1.5rem;
                        overflow: visible;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description {
                        color: #000000;
                        display: block;
                        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                        font-size: 12px;
                        text-align: left;
                        margin-bottom: 0;
                        position: relative;
                        vertical-align: top;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label {
                        font-weight: normal;
                        margin: 0;
                        padding: 0;
                        position: relative;
                        display: block;
                        min-height: 24px;
                        padding-left: 24px;

                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a {
                        color: #000000;
                        text-decoration: underline;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p {
                        color: #000000 !important;
                        font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
                        font-size: 12px !important;
                        font-weight: normal !important;
                        line-height: 18px !important;
                        padding: 0 !important;
                        margin: 0 5px 0 0 !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child {
                        margin: 0;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit {
                        margin: 0 0 20px 0;
                        float: left;
                        width: 100%;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {
                        background-color: #BE1E2D !important;
                        border: none !important;
                        border-radius: 4px !important;
                        box-shadow: none !important;
                        color: #ffffff !important;
                        cursor: pointer;
                        font-family: Verdana, Geneva, sans-serif !important;
                        font-size: 19px !important;
                        font-weight: 700 !important;
                        line-height: 21px !important;
                        height: auto;
                        padding: 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading {
                        display: none;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover {
                        background-color: #333333 !important;
                    }

                    .ml-subscribe-close {
                        width: 30px;
                        height: 30px;
                        background: url('https://assets.mlcdn.com/ml/images/default/modal_close.png') no-repeat;
                        background-size: 30px;
                        cursor: pointer;
                        margin-top: -10px;
                        margin-right: -10px;
                        position: absolute;
                        top: 0;
                        right: 0;
                    }

                    .ml-error input,
                    .ml-error textarea,
                    .ml-error select {
                        border-color: red !important;
                    }

                    .ml-error .custom-checkbox-radio-list {
                        border: 1px solid red !important;
                        border-radius: 0px;
                        padding: 10px;
                    }

                    .ml-error .label-description,
                    .ml-error .label-description p,
                    .ml-error .label-description p a,
                    .ml-error label:first-child {
                        color: #ff0000 !important;
                    }

                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p,
                    #mlb2-4031658.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter {
                        color: #ff0000 !important;
                    }

                    @media only screen and (max-width: 460px) {

                        .ml-form-embedWrapper.embedDefault,
                        .ml-form-embedWrapper.embedPopup {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm {
                            float: left !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow {
                            height: auto !important;
                            width: 100% !important;
                            float: left !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal>div {
                            padding-right: 0px !important;
                            padding-bottom: 10px;
                        }

                        .ml-form-formContent.horozintalForm .ml-button-horizontal {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn {
                            padding-top: 0px !important;
                        }

                    }
                </style>


                <style type="text/css">
                    @media only screen and (max-width: 460px) {
                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                            margin-bottom: 10px !important;
                            width: 100% !important;
                        }
                    }
                </style>






























































































































































                <div id="mlb2-4031658" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-4031658">
                    <div class="ml-form-align-center ">
                        <div class="ml-form-embedWrapper embedForm">




                            <div class="ml-form-embedBody ml-form-embedBodyHorizontal row-form">

                                <div class="ml-form-embedContent" style=" ">

                                    <h4></h4>
                                    <p><span style="font-size: 24px;">ALL-in Eduspace Newsletter</span><span
                                            style="font-size: 24px;"><br></span></p>
                                    <p><span style="font-size: 18px;">Signup for news and special offers!<br></span></p>
                                    <p><span style="font-size: 18px;"><strong></strong></span><span
                                            style="font-size: 18px;"><br></span></p>

                                </div>

                                <form class="ml-block-form"
                                    action="https://assets.mailerlite.com/jsonp/253019/forms/82679999451105091/subscribe"
                                    data-code="" method="post" target="_blank">
                                    <div class="ml-form-formContent">



                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-name ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="name" aria-required="true" type="text"
                                                    class="form-control" data-inputmask="" name="fields[name]"
                                                    placeholder="Name" autocomplete="name">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div
                                                class="ml-field-group ml-field-email ml-validate-email ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="email" aria-required="true" type="email"
                                                    class="form-control" data-inputmask="" name="fields[email]"
                                                    placeholder="Email" autocomplete="email">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-audience ml-validate-required">

                                                <label>You are...</label>


                                                <!-- input -->

                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->
                                                <div class="custom-checkbox-radio-list">
                                                    <!-- Visible if current or any next has value -->
                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="audience" aria-required="true"
                                                            name="fields[audience]" class="custom-control-input"
                                                            type="radio" value="Parents" id="radio-4031658-23}-0">
                                                        <label class="custom-control-label" for="radio-4031658-23}-0">
                                                            Parents
                                                        </label>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="audience" aria-required="true"
                                                            name="fields[audience]" class="custom-control-input"
                                                            type="radio" value="Student" id="radio-4031658-23}-1">
                                                        <label class="custom-control-label" for="radio-4031658-23}-1">
                                                            Student
                                                        </label>
                                                    </div>
















                                                </div>
                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ml-last-item">
                                            <div
                                                class="ml-field-group ml-field-grade_waktu_ikut_program ml-validate-required">

                                                <label>Your goals..</label>


                                                <!-- input -->

                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->
                                                <div class="custom-checkbox-radio-list">
                                                    <!-- Visible if current or any next has value -->
                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="grade_waktu_ikut_program"
                                                            aria-required="true"
                                                            name="fields[grade_waktu_ikut_program]"
                                                            class="custom-control-input" type="radio"
                                                            value="Undergraduate Degree" id="radio-4031658-33}-0">
                                                        <label class="custom-control-label" for="radio-4031658-33}-0">
                                                            Undergraduate Degree
                                                        </label>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="grade_waktu_ikut_program"
                                                            aria-required="true"
                                                            name="fields[grade_waktu_ikut_program]"
                                                            class="custom-control-input" type="radio"
                                                            value="Master Degree" id="radio-4031658-33}-1">
                                                        <label class="custom-control-label" for="radio-4031658-33}-1">
                                                            Master Degree
                                                        </label>
                                                    </div>
















                                                </div>
                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>

                                    </div>



                                    <!-- Privacy policy -->

                                    <!-- /Privacy policy -->













                                    <input type="hidden" name="ml-submit" value="1">

                                    <div class="ml-form-embedSubmit">

                                        <button type="submit" class="primary">Submit</button>

                                        <button disabled="disabled" style="display: none;" type="button"
                                            class="loading">
                                            <div class="ml-form-embedSubmitLoad"></div>
                                            <span class="sr-only">Loading...</span>
                                        </button>
                                    </div>


                                    <input type="hidden" name="anticsrf" value="true">
                                </form>
                            </div>

                            <div class="ml-form-successBody row-success" style="display: none">

                                <div class="ml-form-successContent">

                                    <h4>Thanks!</h4>

                                    <p style="text-align: center;">Our team will contact you very soon</p>
                                    <p><br></p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <script>
                    function ml_webform_success_4031658() {
                        var $ = ml_jQuery || jQuery;
                        $('.ml-subscribe-form-4031658 .row-success').show();
                        $('.ml-subscribe-form-4031658 .row-form').hide();
                    }
                </script>


                <script src="https://groot.mailerlite.com/js/w/webforms.min.js?v300817f630ad0e957914d0b28a2b6d78"
                    type="text/javascript"></script>
            </div>
        </div>
    </div>

    <div class="fixed -bottom-[100px] lg:right-10 right-[10px] z-[9999] transition-all duration-1000" id="newsButton">
        <div class="bg-primary rounded-md px-3 h-[40px] flex justify-center items-center text-white border border-[1px] border-[#F78614] cursor-pointer shadow "
            onclick="popupForm('open')">
            <i class="fa fa-newspaper mr-2"></i>
            <span>Get Update!</span>
        </div>
    </div>
    @include('layout.user.navbar')
    <div class="mt-16">
        @yield('content')
    </div>

    @include('layout.user.footer')
</body>

@yield('script')

<script>
    $("img").lazyload({
        effect: "fadeIn"
    });

    window.addEventListener("scroll", function() {
        var topButton = document.querySelector("#topButton");
        var newsButton = document.querySelector("#newsButton");

        if (window.scrollY > 300) {
            topButton.classList.remove('-bottom-[100px]');
            topButton.classList.add('lg:bottom-10', 'bottom-[15px]');
            newsButton.classList.remove('-bottom-[100px]');
            newsButton.classList.add('lg:bottom-10', 'bottom-[15px]');
        } else {
            topButton.classList.add('-bottom-[100px]');
            topButton.classList.remove('lg:bottom-10', 'bottom-[15px]');
            newsButton.classList.add('-bottom-[100px]');
            newsButton.classList.remove('lg:bottom-10', 'bottom-[15px]');
        }
    });

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    function popupForm(params) {
        var newsForm = document.querySelector("#newsForm");
        var newsButton = document.querySelector("#newsButton");

        if (params == "open") {
            newsButton.classList.remove('lg:bottom-10', 'bottom-[15px]');
            newsForm.classList.remove('-bottom-[100%]');
            newsButton.classList.add('-bottom-[100%]');
            newsForm.classList.add('lg:bottom-10', 'bottom-[15px]');
            // newsButton.classList.add('hidden');
        } else {
            newsForm.classList.remove('lg:bottom-10', 'bottom-[15px]');
            newsButton.classList.remove('-bottom-[100%]');
            newsForm.classList.add('-bottom-[100%]');
            newsButton.classList.add('lg:bottom-10', 'bottom-[15px]');
            // newsButton.classList.remove('hidden');
        }
    }

    // IG TOKEN
    sessionStorage.setItem('ig_token', '{{ app()->getLocale() == 'sg' ? env('IG_TOKEN_GLOBAL') : env('IG_TOKEN') }}')
</script>

</html>
