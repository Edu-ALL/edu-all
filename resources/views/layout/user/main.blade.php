<!DOCTYPE html>
<html lang="{{ app()->getLocale() == 'id-id' ? 'id' : 'en' }}" class="scroll-smooth">

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

    {{-- Canonical  --}}
    @if (app()->getLocale() == 'sg-en')
        @if (!request()->is(app()->getLocale()) && !request()->is(app()->getLocale() . '/about'))
            <link rel="canonical" href="{{ url('/id-en') . substr(Request::path(), 5) }}" />
        @endif
    @endif

    {{-- Hreflang  --}}
    <link rel="alternate" hreflang="x-default" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="en-id" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="id-id" href="{{ url('/id-id') }}" />
    <link rel="alternate" hreflang="en-sg" href="{{ url('/sg-en') }}" />


    {{-- Blog SEO --}}
    @yield('head')

    <link href="/css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css">
    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/newsletter.css">


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
    <div class="fixed -bottom-[100px] lg:left-5 left-[10px] z-[9999] transition-all duration-1000" id="topButton">
        <div class="bg-primary rounded-full w-[40px] h-[40px] flex justify-center items-center text-white border border-[1px] border-[#F78614] cursor-pointer shadow "
            onclick="topFunction()">
            <i class="fa fa-arrow-up"></i>
        </div>
    </div>

    <div class="fixed -bottom-[100%] lg:right-5 right-[10px] z-[99999] transition-all duration-1000 bg-white lg:w-[400px] w-[80%] h-auto shadow-md rounded-md border-[1px]"
        id="newsForm">
        <div class="absolute -right-2 -top-2 z-[99999] text-right -mt-[5px] w-[28px] h-[28px] rounded-full bg-yellow text-white inline-block float-right flex justify-center items-center cursor-pointer"
            onclick="popupForm('close')">
            <i class="fa fa-xmark"></i>
        </div>
        <div class="p-0">
            <div class="rounded-md overflow-hidden">
                @include('layout.user.newsletter')
            </div>
        </div>
    </div>

    <div class="fixed lg:bottom-5 bottom-[15px] lg:right-5 right-[10px] z-[9999] transition-all duration-1000" id="newsButton">
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
            topButton.classList.add('lg:bottom-5', 'bottom-[15px]');
        } else {
            topButton.classList.add('-bottom-[100px]');
            topButton.classList.remove('lg:bottom-5', 'bottom-[15px]');
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
            newsButton.classList.remove('lg:bottom-5', 'bottom-[15px]');
            newsForm.classList.remove('-bottom-[100%]');
            newsButton.classList.add('-bottom-[100%]');
            newsForm.classList.add('lg:bottom-5', 'bottom-[15px]');
            newsButton.classList.add('hidden');
        } else {
            newsForm.classList.remove('lg:bottom-5', 'bottom-[15px]');
            newsButton.classList.remove('-bottom-[100%]');
            newsForm.classList.add('-bottom-[100%]');
            newsButton.classList.add('lg:bottom-5', 'bottom-[15px]');
            newsButton.classList.remove('hidden');
        }
    }

    // IG TOKEN
    sessionStorage.setItem('ig_token', '{{ app()->getLocale() == 'sg' ? env('IG_TOKEN_GLOBAL') : env('IG_TOKEN') }}')
</script>

</html>
