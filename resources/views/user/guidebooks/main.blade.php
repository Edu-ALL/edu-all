@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full">
                <div class="flex flex-col items-center pt-10 md:items-start md:pl-28 lg:pt-16">
                    <h1
                        class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center md:text-left md:w-1/2">
                        COMPLETE GUIDES FOR EVERY STEP OF YOUR UNIVERSITY APPLICATION PROCESS
                    </h1>
                </div>
            </div>

            <img src="{{ asset('assets/img/guidebooks/GUIDEBOOK-HEADER.webp') }}" alt="Guidebooks header"
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">
        </div>
    </section>

    {{-- ================================== GETTING STARTED Section  ================================== --}}
    <section class="py-10">
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
                <div class="flex flex-col items-center gap-x-6 gap-y-4 mt-8 md:flex-row">
                    @foreach ($getting_started as $guidebook)
                        <a href="{{ $guidebook->guidebook_link }}">
                            <img src="{{ asset('uploaded_files/guidebook/' . $guidebook->guidebook_image) }}"
                                alt="{{ $guidebook->guidebook_alt }}" class="w-full max-w-[18rem] min-w-0">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== BUILD YOUR PROFILE  Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <h2 class="mt-10 font-body font-bold text-3xl text-primary text-center md:text-left">BUILD YOUR PROFILE</h2>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">What makes each student unique is the profile
                    they present in front of the University admission committee. Come build your strong profile!
                </p>
                <div class="flex flex-col gap-x-6 gap-y-4 mt-8 md:flex-row">
                    @foreach ($build_your_profile as $guidebook)
                        <a href="{{ $guidebook->guidebook_link }}">
                            <img src="{{ asset('uploaded_files/guidebook/' . $guidebook->guidebook_image) }}"
                                alt="{{ $guidebook->guidebook_alt }}" class="w-full max-w-[18rem] min-w-0">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== APPLY TO YOUR DREAM UNIVERSITY Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <h2 class="mt-10 font-body font-bold text-3xl text-primary text-center md:text-left">APPLY TO YOUR DREAM
                    UNIVERSITY</h2>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">Essays, Letters, and Interviews.. We got you
                    covered.
                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($apply_to_your_dream_university as $guidebook)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $guidebook->guidebook_link }}">
                                            <img src="{{ asset('uploaded_files/guidebook/' . $guidebook->guidebook_image) }}"
                                                alt="{{ $guidebook->guidebook_alt }}" class="w-full max-w-[18rem] min-w-0">
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
                <h2 class="mt-10 font-body font-bold text-3xl text-primary text-center md:text-left">GRAB THE SCHOLARSHIP
                </h2>
                <p class="mt-4 font-body text-lg text-[#6F6C90] text-justify">Essays, Letters, and Interviews.. We got you
                    covered.
                </p>
                <div class="flex flex-col items-center gap-x-6 gap-y-4 mt-8 md:flex-row">
                    @foreach ($grab_the_scholarship as $guidebook)
                        <a href="{{ $guidebook->guidebook_link }}">
                            <img src="{{ asset('uploaded_files/guidebook/' . $guidebook->guidebook_image) }}"
                                alt="{{ $guidebook->guidebook_alt }}" class="w-full max-w-[18rem] min-w-0">
                        </a>
                    @endforeach
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
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isVeryLargeDevice = window.matchMedia("(min-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isVeryLargeDevice ? 4 : isSmallDevice ? 1 : isMediumDevice ? 2 : 3,
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
