<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'id-id' ? 'id' : 'en' }}" class="scroll-smooth">
{{-- ALL-in Eduspace  --}}

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('favicon.webp') }}" rel="icon">
    <meta property=og:type content="website">
    <meta name="robots" content="index,follow" />
    <meta name="google-site-verification" content="CG6UZM2bl9cgm8N-Q5eeH8Toy84tmDg8t_tKYEMDOpc" />

    @if (empty($is404))
        @php
            $canonicalUrl = url()->current();
            $canonicalUrl = preg_replace('/^https?:\/\/www\./i', 'https://', $canonicalUrl);
            $canonicalUrl = rtrim($canonicalUrl, '/');
        @endphp
        <link rel="canonical" href="{{ $canonicalUrl }}" />
    @endif

    {{-- Hreflang Tags --}}
    @php
        $locales = [
            'id-en' => 'en',
            'id-id' => 'id',
            'sg-en' => 'en',
        ];

        $currentLocale = app()->getLocale(); // e.g., 'id-en'
        $path = request()->path(); // e.g., 'id-en', 'id-en/about', 'id-en/blog/post'

        // Strip locale prefix dari path
        $cleanPath = preg_replace('/^(id-en|id-id|sg-en)(\/|$)/', '', $path);

        // Jika cleanPath kosong atau sama dengan locale lain, berarti ini homepage
        if (empty($cleanPath) || array_key_exists($cleanPath, $locales)) {
            $cleanPath = '';
        }
    @endphp

    @foreach ($locales as $code => $lang)
        @if ($cleanPath)
            <link rel="alternate" hreflang="{{ $lang }}" href="{{ url($code . '/' . $cleanPath) }}" />
        @else
            <link rel="alternate" hreflang="{{ $lang }}" href="{{ url($code) }}" />
        @endif
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ url('id-en' . ($cleanPath ? '/' . $cleanPath : '')) }}" />


    @stack('style')

    {{-- Blog SEO --}}
    @yield('head')
    <x-breadcrumb-schema :breadcrumbs="$breadcrumbs ?? []" />
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"EducationalOrganization",
            "name":"EduALL","url":"https://edu-all.com",
            "ContactPoint":{
                "@type":"ContactPoint",
                "contactType":"Meet Our Mentors",
                "telephone":"+62 819-9888-8138",
                "email":"info@edu-all.com",
                "url":"https://edu-all.com/id-en/sign-me/admission-mentoring"
            },
            "sameAs":["https://www.instagram.com/eduall.official","https://www.youtube.com/@eduall.official"]
        }
    </script>

    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

    {{-- <link rel="preload" as="font" type="Ambit" href="{{ url('/font/ambit/Ambit-Regular.woff') }}"
        crossorigin /> --}}

    <link rel="stylesheet" href="/css/socialshare.css" media="print" onload="this.media='all'">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css"> --}}

    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.3.2/css/flag-icons.min.css" />

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" /> --}}
    {{-- <link rel="stylesheet" href="/css/newsletter.css"> --}}

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="/css/fontawesome/css/all.min.css" media="print" onload="this.media='all'">
    {{-- <link href="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/css/all.min.css" rel="stylesheet"> --}}

    {{-- JQuery --}}
    <script src="{{ url('/js/jquery.js') }}"></script>

    {{-- Splide JS - JS --}}
    <script src="{{ url('/js/splide.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> --}}
    {{-- Lazy Image Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script src="{{ url('/js/lazyload.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script> --}}
    {{-- Instafeed  --}}
    <script src="{{ url('/js/instafeed.js') }}" defer></script>
    {{-- Social Share  --}}
    <script src="{{ url('/js/socialshare.js') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script> --}}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17251111065"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17251111065');
    </script>
</head>

<body id="body">

    {{-- @include('layout.user.navbar') --}}
    @yield('sub-navbar')

    @include('layout.user.navbar')

    <div class="mt-0">
        @yield('content')
    </div>

    @include('layout.user.footer')

    @stack('script')
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $("img").lazyload({
            effect: "fadeIn",
            placeholder: "{{ asset('assets/img/loader.gif') }}",
        });
    });
</script>

</html>
