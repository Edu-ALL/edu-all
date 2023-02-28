<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title>
    <link href="{{ asset('favicon.png') }}" rel="icon">
    <meta name="title" content="ALL-in Eduspace | Best Jakarta Independent University Consultant">
    <meta name="description" content="{{ __('pages/home.meta_description') }}">
    
    <link rel="alternate" hreflang="id-en" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="id" href="{{ url('/id') }}" />
    <link rel="alternate" hreflang="sg" href="{{ url('/sg') }}" />
    
    
    {{-- Blog SEO --}}
    @yield('head')
    
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
