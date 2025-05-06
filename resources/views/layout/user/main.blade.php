<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'id-id' ? 'id' : 'en' }}" class="scroll-smooth">
{{-- ALL-in Eduspace  --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('favicon.png') }}" rel="icon">
    <meta name="robots" content="index,follow" />
    <meta name="google-site-verification" content="CG6UZM2bl9cgm8N-Q5eeH8Toy84tmDg8t_tKYEMDOpc" />

    @if (request()->is('/') || request()->is(app()->getLocale()))
        <meta name="keywords"
            content="education consultant, university prep programs, essay writing, study abroad, admission mentoring, SAT test" />

        <meta property=og:url content="{{ url('/') }}">
        <meta property=og:image content="{{ asset('uploaded_files/banner/2023/02/Banner-20230216143208.webp') }}">
        <meta property=og:title content="{{ __('pages/home.meta_title') }}">
        <meta property=og:description content="{{ __('pages/home.meta_description') }}">
    @endif


    <script type="application/ld+json">
        {
          "@context": "http://schema.org/",
          "@type": "Product",
          "name": "Best Jakarta Independent University Consultant",
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue" : "5.0",
            "ratingCount": "65",
            "reviewCount": "65"
          }
        }
    </script>
    <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"EducationalOrganization","name":"EduALL","url":"https://edu-all.com","ContactPoint":{"@type":"ContactPoint","contactType":"Meet Our Mentors","telephone":"+62 878-8882-7686","email":"info@edu-all.com","url":"https://edu-all.com/id-en/sign-me/admission-mentoring"},"sameAs":["https://www.instagram.com/allineduspace/","https://www.youtube.com/@allineduspace"]}
    </script>


    <script type="application/ld+json">
        {"@context":"https://schema.org","@graph":[
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"About Us","description":"Personalized Independent University Consultant","url":"https://edu-all.com/id-en/about"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Our Programs","description":"Tailored Programs for Top Uni Application Success","url":"https://edu-all.com/id-en/programs"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Success Stories","description":"Discover Our Mentee's Inspiring Success Stories","url":"https://edu-all.com/id-en/resources/success-stories"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Upcoming Events","description":"Exciting Events Crafted for Your Needs","url":"https://edu-all.com/id-en/resources/upcoming-events"}]
        }
    </script>

    {{-- Canonical  --}}
    @if (app()->getLocale() == 'sg-en' && !request()->is(app()->getLocale() . '/about'))
        <link rel="canonical" href="{{ url('/id-en') . substr(Request::path(), 5) }}" />
    @endif

    <link rel="canonical" href="{{ rtrim(url()->current(), '/') }}" />

    {{-- Hreflang  --}}
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}" />
    <link rel="alternate" hreflang="en-id" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="id-id" href="{{ url('/id-id') }}" />
    <link rel="alternate" hreflang="en-sg" href="{{ url('/sg-en') }}" />

    @stack('style')

    {{-- Blog SEO --}}
    @yield('head')

    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

    {{-- <link rel="preload" as="font" type="Ambit" href="{{ url('/font/ambit/Ambit-Regular.woff') }}"
        crossorigin /> --}}

    <link rel="stylesheet" href="/css/socialshare.css" media="print" onload="this.media='all'">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css"> --}}

    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css" media="print" onload="this.media='all'">

    {{-- <link rel="stylesheet" href="/css/newsletter.css"> --}}

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="/css/fontawesome/css/all.min.css" media="print" onload="this.media='all'">
    {{-- <link href="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/css/all.min.css" rel="stylesheet"> --}}

    {{-- JQuery --}}
    <script src="{{ url('/js/jquery.js') }}"></script>
    {{-- Splide JS - JS --}}
    <script src="{{ url('/js/splide.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> --}}
    {{-- Lazy Image Jquery --}}
    <script src="{{ url('/js/lazyload.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script> --}}
    {{-- Instafeed  --}}
    <script src="{{ url('/js/instafeed.js') }}" defer></script>
    {{-- Social Share  --}}
    <script src="{{ url('/js/socialshare.js') }}" defer></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script> --}}

    <!-- Google tag (gtag.js) -->
    {{-- <script src="{{ url('/js/gtag.js') }}"></script> --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HHPRQCSSE" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5HHPRQCSSE');
    </script>
</head>

<body id="body">

    {{-- @include('layout.user.navbar') --}}
    @yield('sub-navbar')

    @include('layout.user.new-navbar')

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
