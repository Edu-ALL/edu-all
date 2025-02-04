@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/sign_me/sat_prep.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/sign_me/sat_prep.meta_title') }}" />
    <meta name="description" content="{{ __('pages/sign_me/sat_prep.meta_description') }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JXRKLPRKWF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-JXRKLPRKWF');
        // gtag('config', 'AW-329409030')
    </script>

    <!-- Event snippet for Admission-id Leads conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            gtag('event', 'Conversion - SAT', {
                'send_to': 'AW-329409030/llL7CPKF0pgYEIbEiZ0B',
                // 'event_callback': callback
            });

            return false;
        }
    </script>
@endsection

@section('content')
    <section class="py-16">
        <div class="main-container w-full mx-auto md:max-w-[1440px]">

        <div class="md:col-span-3">
            {{-- Emmbed Form --}}
            <div class="w-full">
                <x-form title="Program" program-id="SATPRIV" lead-id="LS001" font-size="15" />
            </div>
        </div>
    </section>
@endsection