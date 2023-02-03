<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title>

    {{-- Blog SEO --}}
    @if (isset($is_blog_page))
        @foreach ($blogs as $blog)
            <meta name="title" content="{{ $blog->seo_title }}">
            <meta name="description" content="{{ $blog->seo_desc }}">
            <meta name="keyword" content="{{ $blog->seo_keyword }}">
        @endforeach
    @elseif (isset($is_detail_blog_page))
        <meta name="title" content="{{ $blog->seo_title }}">
        <meta name="description" content="{{ $blog->seo_desc }}">
        <meta name="keyword" content="{{ $blog->seo_keyword }}">
    @endif

    <link href="{{ asset('favicon.png') }}" rel="icon">

    @vite('resources/css/app.css')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/c278872066.js" crossorigin="anonymous"></script>

    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">

    {{-- Splide JS - JS --}}
    <script src="/js/splide.min.js"></script>

    {{-- Lazy Image Jquery --}}
    {{-- <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js">
    </script> --}}


</head>

<body id="body">
    @include('layout.user.navbar')

    <div class="mt-16">
        @yield('content')
    </div>

    @include('layout.user.footer')
</body>

<script>
    // $(function() {
    //     $('img').lazy();
    // });
</script>

</html>
