<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css">
    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">


    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/c278872066.js" crossorigin="anonymous"></script>
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
    <script>
        fbq('init', '7966128296793473', {}, {
            "agent": "wordpress-5.3-3.0.8"
        });
    </script>
    <script>
        fbq('track', 'PageView', []);
    </script>
    <!-- Meta Pixel Code -->


</head>

<body id="body">
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

    // IG TOKEN
    sessionStorage.setItem('ig_token', '{{ env('IG_TOKEN') }}')
</script>

</html>
