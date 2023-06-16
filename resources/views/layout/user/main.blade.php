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
    {{-- <title>ALL-in Eduspace | Best Jakarta Independent University Consultant</title> --}}
    @if (request()->is('/') || request()->is(app()->getLocale()))
        <meta name="keywords"
            content="education consultant, university prep programs, essay writing, study abroad, admission mentoring, SAT test" />
        {{-- <meta name="title" content="ALL-in Eduspace | Best Jakarta Independent University Consultant">
        <meta name="description" content="{{ __('pages/home.meta_description') }}"> --}}

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
            "ratingCount": "35",
            "reviewCount": "35"
          }
        }
    </script>
    <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"EducationalOrganization","name":"ALL-in Eduspace","url":"https://all-inedu.com","ContactPoint":{"@type":"ContactPoint","contactType":"Meet Our Mentors","telephone":"+62 878-8882-7686","email":"info@all-inedu.com","url":"https://all-inedu.com/id-en/sign-me/admission-mentoring"},"sameAs":["https://www.instagram.com/allineduspace/","https://www.youtube.com/@allineduspace"]}
    </script>


    <script type="application/ld+json">
        {"@context":"https://schema.org","@graph":[
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"About Us","description":"Personalized Independent University Consultant","url":"https://all-inedu.com/id-en/about"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Our Programs","description":"Tailored Programs for Top Uni Application Success","url":"https://all-inedu.com/id-en/programs"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Success Stories","description":"Discover Our Mentee's Inspiring Success Stories","url":"https://all-inedu.com/id-en/resources/success-stories"},
            {"@context":"https://schema.org","@type":"SiteNavigationElement","id":"site-navigation","name":"Upcoming Events","description":"Exciting Events Crafted for Your Needs","url":"https://all-inedu.com/id-en/resources/upcoming-events"}]
        }
    </script>

    {{-- Canonical  --}}
    @if (app()->getLocale() == 'sg-en')
        @if (!request()->is(app()->getLocale()) && !request()->is(app()->getLocale() . '/about'))
            <link rel="canonical" href="{{ url('/id-en') . substr(Request::path(), 5) }}" />
        @endif
    @endif

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
    {{-- <div class="fixed -bottom-[100px] lg:left-[170px] left-[160px] z-[9999] transition-all duration-1000" id="topButton">
        <div class="bg-white hover:bg-primary rounded-full w-[40px] h-[40px] flex justify-center items-center text-primary hover:text-white border-[1px] border-primary cursor-pointer shadow "
            onclick="topFunction()">
            <i class="fa fa-arrow-up"></i>
        </div>
    </div> --}}

    <div class="fixed lg:bottom-5 bottom-[15px] lg:right-5 right-[10px] z-[9999] transition-all duration-1000">
        <div class="relative group">
            {{-- <div class="absolute bottom-[65px] right-0 invisible translate-x-[1px] translate-y-8 transition-all duration-500 opacity-0 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                <ul class="shadow-lg rounded bg-gray-100">
                    <li class="p-2 border-b border-gray-500 hover:bg-primary hover:text-white">
                        <a href="https://api.whatsapp.com/send?phone=6281808081363&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*"
                            target="_blank" class="">
                            <span class="whitespace-nowrap">
                                <i class="fa fa-arrow-right mr-1"></i>
                                +62 818-0808-1363</span>
                        </a>
                    </li>
                    <li class="p-2 hover:bg-primary hover:text-white">
                        <a href="https://api.whatsapp.com/send?phone=6287860811413&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*"
                            target="_blank" class="">
                            <span class="whitespace-nowrap">
                                <i class="fa fa-arrow-right mr-1"></i>
                                +62 878-6081-1413</span>
                        </a>
                    </li>
                </ul>
            </div> --}}
    
            <div
                class="absolute right-0 bottom-0 bg-[#008069] hover:bg-white rounded-full md:w-[60px] md:h-[60px] w-[50px] h-[50px] flex justify-center items-center text-white hover:text-[#008069] border-[1px] border-[#008069] cursor-pointer shadow" id='open-nav-child-btn'>
                <a href="https://api.whatsapp.com/send?phone=6287888827686&text=Hello%20ALL-in,%20I%20am%0AName%20:%0AGrade%20:%0ASchool%20:%0ADestination%20Country%20:%0AMajor%20:%0A%0A*I*%20*want*%20*to*%20*ask*%20*about...*" target="_blank">
                    <i class="fa fa-whatsapp text-[30px]"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="fixed -bottom-[200%] lg:left-5 left-[10px] z-[99999] transition-all duration-1000 bg-white lg:w-[400px] w-[80%] h-auto shadow-md rounded-md border-[1px]"
        id="newsForm">
        <div class="absolute -right-2 -top-2 z-[99999] text-right -mt-[5px] w-[28px] h-[28px] rounded-full bg-yellow text-white float-right flex justify-center items-center cursor-pointer"
            onclick="popupForm('close')">
            <i class="fa fa-xmark inline-block "></i>
        </div>
        <div class="p-0">
            <div class="rounded-md overflow-hidden">
                @include('layout.user.newsletter')
            </div>
        </div>
    </div>

    <div class="fixed lg:bottom-5 bottom-[15px] lg:left-5 left-[10px] z-[9999] transition-all duration-1000"
        id="newsButton">
        <div class="bg-yellow hover:bg-white rounded-md px-3 h-[40px] flex justify-center items-center text-white hover:text-yellow border-[1px] border-[#F78614] cursor-pointer shadow transition-all duration-200"
            onclick="popupForm('open')">
            <i class="fa fa-newspaper mr-2"></i>
            <span>Get Updates</span>
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
        effect: "fadeIn",
        placeholder: "{{ asset('assets/img/loader.gif') }}",
    });

    // window.addEventListener("scroll", function() {
    //     var topButton = document.querySelector("#topButton");
    //     var newsButton = document.querySelector("#newsButton");

    //     if (window.scrollY > 300) {
    //         topButton.classList.remove('-bottom-[100px]');
    //         topButton.classList.add('lg:bottom-5', 'bottom-[15px]');
    //     } else {
    //         topButton.classList.add('-bottom-[100px]');
    //         topButton.classList.remove('lg:bottom-5', 'bottom-[15px]');
    //     }
    // });

    // function topFunction() {
    //     document.body.scrollTop = 0;
    //     document.documentElement.scrollTop = 0;
    // }

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
