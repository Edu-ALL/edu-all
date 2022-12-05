<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title>
    @vite('resources/css/app.css')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/c278872066.js" crossorigin="anonymous"></script>

    {{-- Splide JS - JS --}}
    <script src="/js/splide.min.js"></script>

    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">

</head>

<body>
    {{-- Include Navbar from layout.user.navber --}}
    @include('layout.user.navbar')

    <div class="mt-28 lg:mt-36 xl:mt-36 2xl:mt-24">
        @yield('content')
        {{-- <h1>
            <a href="{{ url(app()->getLocale(), 'sample') }}" class="text-blue-500 text-5xl"> Link</a>
        </h1> --}}
    </div>

    {{-- Include Footer from layout.user.footer --}}
    @include('layout.user.footer')
</body>

</html>
