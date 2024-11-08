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
    @if (app()->getLocale() == 'sg-en')
        @if (!request()->is(app()->getLocale()) && !request()->is(app()->getLocale() . '/about'))
            <link rel="canonical" href="{{ url('/id-en') . substr(Request::path(), 5) }}" />
        @endif
    @endif

    @php
        $parsed_url = parse_url(URL::current());
        // Extract the path from the parsed URL
        $path = $parsed_url['path']; // '/id-en/programs/admissions-mentoring'
        // Split the path into segments
        $segments = explode('/', trim($path, '/')); // Remove leading/trailing slashes

        // Remove 'main', 'public', and 'index.php' segments if they exist
        $path_segments = array_filter($segments, function ($segment) {
            return !in_array($segment, ['main', 'public', 'index.php']);
        });

        // Rebuild the path without 'public'
        $new_path = '/' . implode('/', $path_segments);

        // Rebuild the full URL (if needed)
        $new_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $new_path;

        $canonical = in_array($segments[0], ['main', 'public', 'index.php'])
            ? $new_url
            : url('/public' . request()->getRequestUri());
    @endphp

    <link rel="canonical" href="{{ $canonical }}">

    {{-- Hreflang  --}}
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}" />
    <link rel="alternate" hreflang="en-id" href="{{ url('/id-en') }}" />
    <link rel="alternate" hreflang="id-id" href="{{ url('/id-id') }}" />
    <link rel="alternate" hreflang="en-sg" href="{{ url('/sg-en') }}" />


    {{-- Blog SEO --}}
    @yield('head')

    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.css">
    {{-- Splide JS - CSS --}}
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/newsletter.css">


    {{-- Font Awesome --}}
    <link href="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/css/all.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- Splide JS - JS --}}
    <script src="/js/splide.min.js"></script>
    {{-- JQuery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- Lazy Image Jquery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script> --}}
    {{-- Instafeed  --}}
    <script src="{{ url('js/instafeed.js') }}"></script>
    {{-- Social Share  --}}
    <script src="https://cdn.jsdelivr.net/gh/assisfery/SocialShareJS@1.4/social-share.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HHPRQCSSE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5HHPRQCSSE');
    </script>

    @if (Route::currentRouteName() == 'sign_me_adm_mentoring')
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
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '395995446484778');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=395995446484778&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->
    @else
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
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '928080065534623');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=928080065534623&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->
    @endif
</head>

<body id="body">
    <div class="fixed lg:bottom-5 bottom-[15px] lg:right-5 right-[10px] z-[9999] transition-all duration-1000">
        <div class="relative group">

            {{-- Dont Display the button on this pages: "partnership-careers" --}}
            @if (!str_contains(request()->url(), 'partnership-careers'))
                <div class="absolute right-0 bottom-0 bg-[#008069] hover:bg-white rounded-full md:w-[60px] md:h-[60px] w-[50px] h-[50px] flex justify-center items-center text-white hover:text-[#008069] border-[1px] border-[#008069] cursor-pointer shadow"
                    id='open-nav-child-btn'>
                    <a href="https://api.whatsapp.com/send?phone=62{{ $website_settings->phone_number_wa }}&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*"
                        target="_blank">
                        <i class="fa-brands fa-whatsapp text-[30px]"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>

    <div class="fixed -bottom-[200%] lg:left-5 left-[10px] z-[99999] transition-all duration-1000 bg-white lg:w-[400px] w-[80%] h-auto shadow-md rounded-md border-[1px]"
        id="newsForm">
        <div class="absolute -right-2 -top-2 z-[99999] text-right -mt-[5px] w-[28px] h-[28px] rounded-full bg-red text-white float-right flex justify-center items-center cursor-pointer"
            onclick="popupForm('close')">
            <i class="fa fa-xmark inline-block "></i>
        </div>
        <div class="p-0">
            <div class="rounded-md overflow-hidden">
                @include('layout.user.newsletter')
            </div>
        </div>
    </div>

    <div class="fixed lg:left-5 left-[10px] z-[9999] transition-all duration-1000 -bottom-[100px]" id="newsButton">
        <div class="bg-red hover:bg-white shadow-md px-3 h-[40px] flex justify-center items-center text-white hover:text-newprimary border-[1px] border-[#F78614] cursor-pointer transition-all duration-200"
            onclick="popupForm('open')">
            <i class="fa fa-newspaper mr-2"></i>
            <span>Get Updates</span>
        </div>
    </div>

    @include('layout.user.navbar')

    <div class="mt-20">
        @yield('content')
    </div>

    @include('layout.user.footer')

    @stack('script')
</body>

<script>
    $("img").lazyload({
        effect: "fadeIn",
        placeholder: "{{ asset('assets/img/loader.gif') }}",
    });


    window.addEventListener("scroll", function() {
        var newsButton = document.querySelector("#newsButton");

        if (window.scrollY > 300) {
            newsButton.classList.remove('-bottom-[100px]');
            newsButton.classList.add('lg:bottom-5', 'bottom-[15px]');
        } else {
            newsButton.classList.add('-bottom-[100px]');
            newsButton.classList.remove('lg:bottom-5', 'bottom-[15px]');
        }
    });

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
</script>

</html>
