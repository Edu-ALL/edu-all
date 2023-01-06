@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full">
                <div class="flex flex-col items-center pt-10 md:items-start md:pl-28 lg:pt-16 ">
                    <h1 class="heading-2 text-center md:text-left md:w-1/2">
                        COMPLETE GUIDES FOR EVERY STEP OF YOUR UNIVERSITY APPLICATION PROCESS
                    </h1>
                </div>
            </div>

            <img src="{{ asset('assets/img/guidebooks/GUIDEBOOK-HEADER.webp') }}" alt="Guidebooks header"
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">
        </div>
    </section>

    {{-- ================================== GETTING STARTED Section  ================================== --}}
    <section class="py-10 shadow-[inset_-4px_-142px_42px_-124px_rgba(0,0,0,0.5)]">
        <div class="main-container">
            <div class="flex flex-col">
                <p class="font-primary text-xl text-[#6F6C90] text-justify">Learn how you can ace your university
                    application
                    by improving your academic performance, writing skills, personal brand, and career exploration in every
                    action!
                </p>
                <h2 class="mt-10 font-body font-bold text-3xl text-primary text-center md:text-left">GETTING STARTED</h2>
                <p class="mt-2 font-body text-lg text-[#6F6C90] text-justify">
                    Before starting your university application journey, let’s start by selecting the right subjects at
                    school!
                </p>
                <div class="flex gap-x-6 gap-y-4 mt-8">
                    <a
                        href="https://alevel-guide.all-inedu.com/?_gl=1*1m5schz*_ga*MTgwMDI4MjA2OC4xNjY5NjM4NDI0*_ga_RN9CC3WCZ3*MTY3Mjg4NzIxMi41Ny4xLjE2NzI4ODc0MTMuMC4wLjA.&_ga=2.256408776.2134416254.1672559417-1800282068.1669638424"><img
                            src="{{ asset('assets/img/guidebooks/BOOK-MOCKUP-8.webp') }}" alt="guidebooks a level subjects"
                            class="w-full max-w-[18rem] min-w-0"></a>
                    <a
                        href="https://ib-guide.all-inedu.com/?_gl=1*1m5schz*_ga*MTgwMDI4MjA2OC4xNjY5NjM4NDI0*_ga_RN9CC3WCZ3*MTY3Mjg4NzIxMi41Ny4xLjE2NzI4ODc0MTMuMC4wLjA.&_ga=2.256408776.2134416254.1672559417-1800282068.1669638424"><img
                            src="{{ asset('assets/img/guidebooks/BOOK-MOCKUP-9.webp') }}" alt="guidebooks a level subjects"
                            class="w-full max-w-[18rem] min-w-0"></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== BUILD YOUR PROFILE  Section  ================================== --}}
    <section class="py-4">
        <div class="main-container">
            <div class="flex flex-col">
                <h4 class="font-body font-semibold text-xl text-primary text-center md:text-left">BUILD YOUR PROFILE</h4>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">What makes each student unique is the profile
                    they present in front of the University admission committee. Come build your strong profile!
                </p>
                <div class="flex gap-x-6 gap-y-4 mt-8">
                    <a
                        href="https://personalbrand-guide.all-inedu.com/?_gl=1*gt8za5*_ga*MTgwMDI4MjA2OC4xNjY5NjM4NDI0*_ga_RN9CC3WCZ3*MTY3Mjg4NzIxMi41Ny4xLjE2NzI4ODg3MDkuMC4wLjA.&_ga=2.55015912.2134416254.1672559417-1800282068.1669638424"><img
                            src="{{ asset('assets/img/guidebooks/A-Guide-To-Polish-Your-Personak-Brand-Cover-Book.webp') }}"
                            alt="guidebooks a guide to polish your personal brand cover"
                            class="w-full max-w-[18rem] min-w-0"></a>
                    <a
                        href="https://resume-guide.all-inedu.com/?_gl=1*gt8za5*_ga*MTgwMDI4MjA2OC4xNjY5NjM4NDI0*_ga_RN9CC3WCZ3*MTY3Mjg4NzIxMi41Ny4xLjE2NzI4ODg3MDkuMC4wLjA.&_ga=2.55015912.2134416254.1672559417-1800282068.1669638424"><img
                            src="{{ asset('assets/img/guidebooks/WRITING-TOP.webp') }}" alt="guidebooks writing top cover"
                            class="w-full max-w-[18rem] min-w-0"></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== APPLY TO YOUR DREAM UNIVERSITY Section  ================================== --}}
    <section class="py-4">
        <div class="main-container">
            <div class="flex flex-col">
                <h4 class="font-body font-semibold text-xl text-primary text-center md:text-left">APPLY TO YOUR DREAM
                    UNIVERSITY</h4>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">Essays, Letters, and Interviews.. We got you
                    covered.
                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @php
                                $card_list = [['Guidebook-master-eng-cover.webp', 'https://master-guide.all-inedu.com'], ['Essentials-In-Writing-Cover-Book.webp', 'https://personalstatement-guide.all-inedu.com'], ['The-Ultimate-Guide-Cover-Book.webp', 'https://essay-guide.all-inedu.com'], ['The-Comprehensive-Guide-To-Ace-Cover-Book.webp', 'https://interview-guide.all-inedu.com'], ['BOOK-MOCKUP-7.webp', 'https://recommendation-guide.all-inedu.com/']];
                            @endphp
                            @foreach ($card_list as $card)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $card[1] }}">
                                            <img src="{{ asset('assets/img/guidebooks/' . $card[0]) }}"
                                                alt="guidebooks cover" class="w-full">
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== GRAB THE SCHOLARSHIP  Section  ================================== --}}
    <section class="py-4">
        <div class="main-container">
            <div class="flex flex-col">
                <h4 class="font-body font-semibold text-xl text-primary text-center md:text-left">GRAB THE SCHOLARSHIP</h4>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">Essays, Letters, and Interviews.. We got you
                    covered.
                </p>
                <div class="flex gap-x-6 gap-y-4 mt-8">
                    <a
                        href="https://scholarship-guide.all-inedu.com/?_gl=1*1gh9lkm*_ga*MTgwMDI4MjA2OC4xNjY5NjM4NDI0*_ga_RN9CC3WCZ3*MTY3Mjg4NzIxMi41Ny4xLjE2NzI4ODg3MDkuMC4wLjA.&_ga=2.88085080.2134416254.1672559417-1800282068.1669638424"><img
                            src="{{ asset('assets/img/guidebooks/University-Preparation-Cover-Book.webp') }}"
                            alt="guidebooks cover" class="w-full max-w-[18rem] min-w-0"></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-4">
        <div class="flex flex-col">
            <div class="py-3 main-container bg-primary">
                <ul class="grid grid-cols-1 gap-4 md:grid-cols-3">
                    <li class="flex items-center gap-3"> <span
                            class="w-1/5 font-body font-black text-3xl text-yellow text-right">100%</span>
                        <span class=" w-4/5 font-body font-semibold text-base text-white leading-4">Mentee Acceptance Rate
                            to Top
                            Universities in
                            US, UK, Europe, and Asia</span>
                    </li>
                    <li class="flex justify-center items-center gap-3"> <span
                            class="w-1/5 font-body font-black text-3xl text-yellow text-right">50+</span>
                        <span class="w-4/5 font-body font-semibold text-base text-white leading-4">Top Universities Around
                            the
                            World</span>
                    </li>
                    <li class="flex items-center gap-3"> <span
                            class=" w-1/5 font-body font-black text-3xl text-yellow text-right">114</span>
                        <span class=" w-4/5 font-body font-semibold text-base text-white leading-4">Mentee Acceptance Rate
                            to Top
                            Career Exploration Programs Company Partners</span>
                    </li>
                </ul>
            </div>
            <div class="mt-4 main-container">
                <span class="font-body font-semibold text-xl text-primary text-center md:text-left">Our mentees are
                    currently at</span>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @php
                                $univ_list = ['HKUST-1.webp', 'IMPERIAL-COLLEGE-1.webp', 'NANYANG-1.webp', 'NUS-1.webp', 'UCLA-1.webp', 'UPENN-1.webp'];
                            @endphp
                            @foreach ($univ_list as $univ_logo)
                                <li class="splide__slide">
                                    <div class="splide__slide__container mx-3">
                                        <img src="{{ asset('assets/img/guidebooks/univ-list/' . $univ_logo) }}"
                                            alt="univ logo" class="w-full">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <span class="mt-6 font-body font-semibold text-xl text-yellow text-center">and many more...</span>
        </div>
    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 2 : 3,
            focus: 0,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[100%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();

        new Splide(splides[1], {
            type: 'loop',
            perPage: isSmallDevice ? 3 : 5,
            focus: 0,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
