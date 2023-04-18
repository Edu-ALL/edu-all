@extends('layout.user.main')

@section('head')
    @if (app()->getLocale() == 'id-en')
        <title>The ALL-in Eduspace Guidebook: Insights and Tips for Education and Career Success</title>
        <meta name="title" content="The ALL-in Eduspace Guidebook: Insights and Tips for Education and Career Success" />
    @elseif (app()->getLocale() == 'id-id')
        <title>The ALL-in Eduspace Guidebook:Wawasan dan Tips untuk Kesuksesan Pendidikan dan Karir</title>
        <meta name="title" content="The ALL-in Eduspace Guidebook:Wawasan dan Tips untuk Kesuksesan Pendidikan dan Karir" />
    @else
        <title>The ALL-in Eduspace Guidebook: Insights and Tips for Education and Career Success</title>
        <meta name="title" content="The ALL-in Eduspace Guidebook: Insights and Tips for Education and Career Success" />
    @endif
    <meta name="description" content="Learn how you can ace your university application by improving your academic performance, writing skills, personal brand, and career exploration in every action!" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-primary/50">
                <div class="flex flex-col justify-center items-center h-full lg:max-w-2xl lg:mx-auto">
                    <h1 class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center">
                        {{ __('pages/resources/guidebook.title') }}
                    </h1>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/Guidebook Banner.webp') }}" alt="Allineduspace Guidebooks Banner"
                class="w-full h-[400px] object-cover object-center">
        </div>
    </section>

    {{-- ================================== GETTING STARTED Section  ================================== --}}
    <section id="guidebook" class="py-4 lg:py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <p class="font-primary text-xl text-[#6F6C90] text-justify">
                    {{ __('pages/resources/guidebook.body') }}

                </p>
                <h2 class="mt-10 font-primary font-bold text-3xl text-primary text-center md:text-left">
                    {{ __('pages/resources/guidebook.getting_started') }}

                </h2>
                <p class="mt-2 font-primary text-lg text-[#6F6C90] text-justify">
                    {{ __('pages/resources/guidebook.getting_started_body') }}

                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($getting_started as $guidebook)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $guidebook->guidebook_link }}">
                                            <img data-original="{{ asset('uploaded_files/guidebook/' . $guidebook->created_at->format('Y') . '/' . $guidebook->created_at->format('m') . '/' . $guidebook->guidebook_image) }}"
                                                alt="Allineduspace {{ $guidebook->guidebook_alt }}"
                                                class="w-full max-w-[18rem] min-w-0 mx-auto">
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

    {{-- ================================== BUILD YOUR PROFILE  Section  ================================== --}}
    <section id="guidebook" class="py-4 lg:py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <h2 class="mt-10 font-primary font-bold text-3xl text-primary text-center md:text-left">
                    {{ __('pages/resources/guidebook.build_your_profile') }}

                </h2>
                <p class="mt-4 font-primary text-lg text-[#6F6C90] text-justify">
                    {{ __('pages/resources/guidebook.build_your_profile_body') }}
                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($build_your_profile as $guidebook)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $guidebook->guidebook_link }}">
                                            <img data-original="{{ asset('uploaded_files/guidebook/' . $guidebook->created_at->format('Y') . '/' . $guidebook->created_at->format('m') . '/' . $guidebook->guidebook_image) }}"
                                                alt="Allineduspace {{ $guidebook->guidebook_alt }}"
                                                class="w-full max-w-[18rem] min-w-0 mx-auto">
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

    {{-- ================================== APPLY TO YOUR DREAM UNIVERSITY Section  ================================== --}}
    <section id="guidebook" class="py-4 lg:py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <h2 class="mt-10 font-primary font-bold text-3xl text-primary text-center md:text-left">
                    {{ __('pages/resources/guidebook.apply_to_your_dream_univ') }}
                </h2>
                <p class="mt-4 font-primary text-lg text-[#6F6C90] text-justify">
                    {{ __('pages/resources/guidebook.apply_to_your_dream_univ_body') }}
                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($apply_to_your_dream_university as $guidebook)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $guidebook->guidebook_link }}">
                                            <img data-original="{{ asset('uploaded_files/guidebook/' . $guidebook->created_at->format('Y') . '/' . $guidebook->created_at->format('m') . '/' . $guidebook->guidebook_image) }}"
                                                alt="Allineduspace {{ $guidebook->guidebook_alt }}"
                                                class="w-full max-w-[18rem] min-w-0 mx-auto">
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
    <section id="guidebook" class="py-4 lg:py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <h2 class="mt-10 font-primary font-bold text-3xl text-primary text-center md:text-left">
                    {{ __('pages/resources/guidebook.grap_scholarship') }}
                </h2>
                <p class="mt-4 font-primary text-lg text-[#6F6C90] text-justify">
                    {{ __('pages/resources/guidebook.grap_scholarship_body') }}
                </p>
                <div class="splide my-8" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($grab_the_scholarship as $guidebook)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a href="{{ $guidebook->guidebook_link }}">
                                            <img data-original="{{ asset('uploaded_files/guidebook/' . $guidebook->created_at->format('Y') . '/' . $guidebook->created_at->format('m') . '/' . $guidebook->guidebook_image) }}"
                                                alt="Allineduspace {{ $guidebook->guidebook_alt }}"
                                                class="w-full max-w-[18rem] min-w-0 mx-auto">
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

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-4">
        <div class="flex flex-col">
            <div class="py-3 main-container bg-primary">
                <ul class="grid grid-cols-1 gap-4 md:grid-cols-3">
                    <li class="flex items-center gap-3"> <span
                            class="w-1/5 font-primary font-black text-3xl text-yellow text-right">100%</span>
                        <span class=" w-4/5 font-primary font-semibold text-base text-white leading-4">Mentee Acceptance
                            Rate
                            to Top
                            Universities in
                            US, UK, Europe, and Asia</span>
                    </li>
                    <li class="flex justify-center items-center gap-3"> <span
                            class="w-1/5 font-primary font-black text-3xl text-yellow text-right">50+</span>
                        <span class="w-4/5 font-primary font-semibold text-base text-white leading-4">Top Universities
                            Around
                            the
                            World</span>
                    </li>
                    <li class="flex items-center gap-3"> <span
                            class=" w-1/5 font-primary font-black text-3xl text-yellow text-right">114</span>
                        <span class=" w-4/5 font-primary font-semibold text-base text-white leading-4">Mentee Acceptance
                            Rate
                            to Top
                            Career Exploration Programs Company Partners</span>
                    </li>
                </ul>
            </div>
            <div class="mt-4 main-container">
                <span class="font-primary font-semibold text-xl text-primary text-center md:text-left">
                    {{ __('pages/resources/guidebook.bottom_title') }}
                </span>
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
                                        <img data-original="{{ asset('assets/img/guidebooks/univ-list/' . $univ_logo) }}"
                                            alt="Allineduspace University Logo" class="w-full">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <span class="mt-6 font-primary font-semibold text-xl text-yellow text-center">
                {{ __('pages/resources/guidebook.bottom_bottom') }}
            </span>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isVeryLargeDevice = window.matchMedia("(min-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        for (var i = 0; i < splides.length - 1; i++) {
            new Splide(splides[i], {
                type: 'slide',
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
                    item.button.style.width = '7px';
                    item.button.style.height = '7px';
                    item.button.style.margin = '0 6px'
                    item.button.style.backgroundColor = '#0367BF';
                });
            }).mount();
        }


        new Splide(splides[4], {
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
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
