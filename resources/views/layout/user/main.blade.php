<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title>
    <link href="{{ asset('favicon.png') }}" rel="icon">

    @vite('resources/css/app.css')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/c278872066.js" crossorigin="anonymous"></script>

    {{-- Splide JS - JS --}}
    <script src="/js/splide.min.js"></script>

    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">

</head>

<body id="body">
    @include('layout.user.navbar')

    <div class="mt-16">
        @yield('content')
    </div>

    @include('layout.user.footer')
</body>

</html>
