@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_test_preparation.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_test_preparation.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_test_preparation.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/academic-test-preparation'],
        ['title' => __('pages/programs/academic_tutoring.title'), 'url' => '/programs/academic-test-preparation/academic-tutoring'],
        ['title' => __('pages/programs/sat_program.navbar_title'), 'url' => '/programs/academic-test-preparation/sat-program'],
        ['title' => __('pages/programs/skillset_tutoring.title'), 'url' => '/programs/academic-test-preparation/skillset-tutoring-program'],
    ]" :active="'general'" title="{!!  __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-general-acad-header bg-cover bg-top" id="banner">
        <x-registration-form />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center md:items-start new-main-container py-[50%] md:pt-[20%] gap-2">
                <h2 class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/2">
                    {{ __('pages/programs/academic_test_preparation.title') }}
                </h2>
                <x-registration-form :is-button="true" />
            </div>
        </div>
    </section>


    <section class="acad-program-our-programs relative">
        <div class="flex main-container w-full flex-col h-[70vh] pt-24" id="our-programs-wrapper">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center mb-20 uppercase">
                {{ __('pages/programs/academic_test_preparation.our_program_title') }}</h2>
            <div class="relative h-full group">
                <div
                    class="button-left md:w-40 w-24 aspect-video absolute left-[25%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div
                    class="button-right md:w-40 w-24 aspect-video absolute left-[75%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div class="item item-back">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-3.png') }}"
                        alt="EduALL figure" class="md:w-full h-full">
                </div>
                <div class="item item-left">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-4.png') }}"
                        alt="EduALL figure" class="md:w-full h-full">
                </div>
                <div class="item item-right">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-2.png') }}"
                        alt="EduALL figure" class="md:w-full h-full">
                </div>
                <div class="item item-front">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-1.png') }}"
                        alt="EduALL figure" class="md:w-full h-full">
                </div>
            </div>
        </div>
        <div class="main-container w-full min-h-[55vh] z-50 md:mt-[2rem] -mt-[2rem]">
            <div class="relative h-full w-full">
                <div class="item-text opacity-0 invisible">
                    <h2 class="font-bold md:text-4xl text-2xl text-center text-newprimary uppercase mb-4">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.1.title') }}</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.1.description') }}</p>
                    <x-button href="{{ route('sat_program', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.1.button') }}" />
                </div>
                <div class="item-text opacity-0 invisible">
                    <div class="md:flex items-start justify-evenly gap-4">
                        @foreach (__('pages/programs/academic_test_preparation.our_program_data.2.description') as $program_item)
                            <div class="md:w-1/4 w-full md:mb-0 mb-4">
                                <div class="font-bold text-xl text-newprimary uppercase text-center">
                                    {!! $program_item['title'] !!} </div>
                                <div class="text-center text-sm text-black">{!! $program_item['description'] !!}</div>
                            </div>
                        @endforeach
                    </div>
                    <x-button href="{{ route('skillset_tutoring_program', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.2.button') }}" />
                </div>

                <div class="item-text opacity-0 invisible">
                    <div class="font-bold md:text-6xl text-2xl text-center text-newprimary uppercase mb-4 max-w-4xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.3.title') }}!</div>
                    <x-button href="#start-your-journey"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.3.button') }}" />
                </div>
                <div class="item-text opacity-100 visible">
                    <h2 class="font-bold md:text-4xl text-2xl text-center text-newprimary uppercase mb-4">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.0.title') }}</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.0.description') }}</p>
                    <x-button href="{{ route('academic_tutoring', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.0.button') }}" />
                </div>
            </div>
        </div>
        <div class="absolute w-full max-w-5xl left-1/2 top-1/2 -translate-x-1/2">
            <div class="flex items-center justify-between new-main-container">
                <button id="left-journey-btn" class="w-7 h-7 rounded-full bg-newprimary p-2 shadow-md flex items-center justify-center"
                    style="background: #120FFD;">
                    <i class="fa-solid fa-arrow-left text-base text-white"></i>
                </button>
                <button id="right-journey-btn" class="w-7 h-7 rounded-full bg-newprimary p-2 shadow-md flex items-center justify-center"
                    style="background: #120FFD;">
                    <i class="fa-solid fa-arrow-right text-base  text-white"></i>
                </button>
            </div>
        </div>
    </section>


    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-12">
        <div class="new-main-container">
            <div class="flex flex-wrap max-w-4xl mx-auto">
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-1.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-2.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-3.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-4.webp') }}"
                        alt="benefit image">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 scroll-mt-10" id="start-your-journey">
        <div class="new-main-container relative">
            <div class="absolute top-0 left-0 right-0 px-8 py-8 h-1/2 max-w-4xl mx-auto w-full bg-newprimary rounded-2xl">
                <div class="flex items-center justify-center gap-4 md:gap-8">
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                        {{ __('pages/programs/academic_test_preparation.program_title') }}
                    </h3>
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                </div>
            </div>
            <div class="splide pt-24 max-w-5xl mx-auto" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; left: -48px;">
                        <i class="fa-solid fa-arrow-left text-xl text-white"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; right: -48px;">
                        <i class="fa-solid fa-arrow-right text-xl text-white"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/academic_test_preparation.program_list') as $item)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4">
                                        <div
                                            class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                                            <h3 class="font-bold uppercase text-2xl text-center">
                                                {!! $item['title'] !!}
                                            </h3>
                                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                <img data-original="{{ asset('assets/img/academic_test_preparation/revamp/' . $item['image']) }}"alt=""
                                                    class="h-full w-full object-cover">
                                            </div>
                                            <div class="w-full md:h-28 border-b border-b-[#DEDEDE]">
                                                <p class="text-base text-justify leading-5">
                                                    {{ $item['desc'] }}
                                                </p>
                                            </div>
                                            @if (array_key_exists('points', $item) && $item['points'])
                                                <div class="w-full lg:h-32 py-4">
                                                    <ul class="list-outside list-disc pl-4 flex flex-col gap-1">
                                                        @foreach ($item['points'] as $point)
                                                            <li
                                                                class="text-sm font-newprimary font-semibold text-newprimary">
                                                                {{ $point }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="h-32"></div>
                                            @endif
                                            <x-button
                                                href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation/{{ $item['link'] }}"
                                                title="{{ __('pages/programs/academic_test_preparation.learn_more') }}"
                                                bg-color="newprimary" padding-x="8" padding-y="2" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-14">
        <div class="flex new-main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.testimony_title') }}</h2>
        </div>
        <div class="new-main-container mb-12 md:my-12">
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                    <x-testimonial-card :testimonial=$testi />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        // OUR PROGRAMS
        // const item_back = document.querySelector('.acad-program-our-programs .item-back');
        // var item_left = document.querySelector('.acad-program-our-programs .item-left');
        // const item_right = document.querySelector('.acad-program-our-programs .item-right');
        // const item_front = document.querySelector('.acad-program-our-programs .item-front');
        const image_items = document.querySelectorAll('.acad-program-our-programs .item');
        const our_programs_button_left = document.querySelector('.acad-program-our-programs .button-left');
        const our_programs_button_right = document.querySelector('.acad-program-our-programs .button-right');
        const our_programs_wrapper = document.getElementById('our-programs-wrapper');
        const image_items_text = document.querySelectorAll('.acad-program-our-programs .item-text');

        const items_position = [
            ['item-back', 'item-left', 'item-right', 'item-front'],
            ['item-right', 'item-back', 'item-front', 'item-left'],
            ['item-front', 'item-right', 'item-left', 'item-back'],
            ['item-left', 'item-front', 'item-back', 'item-right'],
        ];

        var track_item = 0;
        var track_item_text = 3;

        function moveRight() {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[(track_item + 1) % 4][it]);
            })

            track_item = (track_item + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item_text + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        }

        function moveLeft() {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[Math.abs((track_item - 1 + 4) % 4)][it]);
            })
            track_item = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        }

        our_programs_button_right.addEventListener("click", () => {
            moveRight();
        });

        our_programs_button_left.addEventListener("click", () => {
            moveLeft();
        });

        const left_journey_btn = document.getElementById('left-journey-btn');
        const right_journey_btn = document.getElementById('right-journey-btn');

        left_journey_btn.addEventListener("click", () => {
            moveLeft();
        })
        right_journey_btn.addEventListener("click", () => {
            moveRight();
        })

        const acad_tutor_items = document.querySelectorAll('.acad-program-acad-tutor-item');
        let s4ActiveIndex = 0;

        acad_tutor_items.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s4ActiveIndex) {
                    acad_tutor_items[s4ActiveIndex].classList.add('acad-program-acad-tutor-inactive');
                    acad_tutor_items[s4ActiveIndex].classList.remove('acad-program-acad-tutor-active');
                    acad_tutor_items[it].classList.remove('acad-program-acad-tutor-inactive');
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    s4ActiveIndex = it;
                }
            })
        });


        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isMediumDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            focus: 'center',
            gap:10,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: 0,
        }).on('pagination:mounted', function(data) {
            if (isSmallDevice || isMediumDevice) {
                // You can add your class to the UL element
                data.list.classList.add('splide__pagination--custom');
                data.list.classList.add('top-[105%]');

                // `items` contains all dot items
                data.items.forEach(function(item) {
                    item.button.style.margin = '0 6px'
                    item.button.style.backgroundColor = '#0367BF';
                });
            }
        }).mount();

        new Splide(splides[1], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            focus: 0,
            width: "100%",
            arrows: isSmallDevice ? false : true,
            pagination: isSmallDevice ? true : false,
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
    </script>
@endpush
