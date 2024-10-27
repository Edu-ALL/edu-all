@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/sat_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/sat_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/sat_program.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/academic-test-preparation'],
        ['title' => __('pages/programs/academic_tutoring.title'), 'url' => '/programs/academic-test-preparation/academic-tutoring'],
        ['title' => __('pages/programs/sat_program.navbar_title'), 'url' => '/programs/academic-test-preparation/sat-program'],
        ['title' => __('pages/programs/skillset_tutoring.title'), 'url' => '/programs/academic-test-preparation/skillset-tutoring-program'],
    ]" :active="__('pages/programs/sat_program.navbar_title')" title="{!!  __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-sat-prep-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full items-center new-main-container py-[50%] md:py-[12%] gap-2">
            <h2 class="font-newprimary font-bold text-4xl md:text-7xl text-white text-center uppercase">
                {{ __('pages/programs/sat_program.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/sat_program.body') }}
            </p>
        </div>
    </section>

    <section class="pt-16">
        <div class="new-main-container">
            <div class="flex flex-col justify-between gap-8 md:flex-row">
                @foreach (__('pages/programs/sat_program.summary') as $item)
                    <div class="flex flex-col items-center max-w-xs mx-auto">
                        <h3 class="font-bold text-5xl text-newprimary">{{ $item['title'] }}</h3>
                        <span class="text-sm uppercase text-center mt-2">{!! $item['sub_title'] !!}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-wrap items-center justify-center gap-8">
                @foreach (__('pages/programs/sat_program.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center relative">
                        <div class="h-full w-48 bg-white flex flex-col items-center justify-start py-8 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-12 mb-2">
                                <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                            </div>
                            <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">{{ $item['title'] }}
                            </h4>
                            @if (isset($item['tag']))
                                <span class="font-newprimary text-base font-normal text-center">{{ $item['tag'] }}</span>
                            @else
                                <span class="h-6"></span>
                            @endif
                        </div>
                        <div class="absolute -top-2 -right-2">
                            <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-check fa-sm text-white"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <h2 class="font-bold text-4xl uppercase text-center">
                    {{ __('pages/programs/sat_program.subjects_title') }}
                </h2>
                <div class="flex flex-wrap gap-4 mt-4 justify-center">
                    @foreach (__('pages/programs/sat_program.subjects_tag') as $item)
                        <div class="pl-2 pr-3 py-1 rounded-md border-black border flex items-center justify-center gap-2">
                            <div class="w-6 h-5">
                                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/icons/' . $item['image']) }}"
                                    alt="icons" class="w-full h-full object-contain">
                            </div>
                            <span class="text-semibold flex-1">{{ $item['title'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @for ($index = 1; $index <= 4; $index++)
                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/subjects/subject-' . $index . '.png') }}"
                        class="w-full" alt="asset">
                @endfor
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.journey_title') }}</h2>
            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-12">
                @foreach (__('pages/programs/sat_program.journey_list') as $item)
                    <div
                        class="sat-program-s3-item @if ($loop->index == 0) sat-program-s3-active @else sat-program-s3-inactive @endif  relative overflow-hidden">
                        <span>{{ $item['title'] }}</span>
                        <div class="desc mt-2 overflow-auto">
                            <ul class="">
                                @foreach ($item['description'] as $description)
                                    <li> {{ $description }} </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="polygon @if ($loop->index % 2 == 0) bg-newprimary @else bg-black @endif">
                        </div>
                        <div class="w-full h-full bg-black">
                            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s3-figure-' . $loop->iteration . '.webp') }}"
                                alt="EduALL figure">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="py-16">
        <div class="new-main-container">
            <div class="flex max-w-4xl mx-auto w-full flex-col items-center relative">
                <div
                    class="absolute top-0 left-0 right-0 px-8 py-8 h-[105%] md:h-2/3 max-w-2xl mx-auto w-full bg-newprimary rounded-2xl -z-10">
                    <div class="flex items-center justify-center gap-4 md:gap-8">
                        <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                        <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                            {{ __('pages/programs/academic_tutoring.private_class_title') }}
                        </h3>
                        <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    </div>
                </div>
                <div class="flex flex-col w-full md:flex-row gap-8 mt-32 md:mt-24 px-4 md:px-0">
                    @foreach (__('pages/programs/sat_program.class_list') as $item)
                        <div class="rounded-md bg-white flex flex-col w-full shadow-xl py-4 px-8">
                            <h4 class="font-newprimary font-bold text-black text-center text-4xl uppercase py-2">
                                {{ $item['title'] }}
                            </h4>
                            <span class="text-red font-bold text-xl text-center my-1"> {{ $item['recomendation'] }}</span>
                            <span class="mt-2 text-sm text-center">{{ $item['description'] }}</span>
                            <div class="flex-1">
                                @foreach ($item['list'] as $list_item)
                                    <div class="flex justify-between w-full mt-2">
                                        <div class="flex flex-col items-center">
                                            <div class="flex items-center gap-4 w-full">
                                                <div
                                                    class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                                    <i class="fa-solid fa-check fa-base text-white"></i>
                                                </div>
                                                <h4 class="font-newprimary font-semibold text-black text-base">
                                                    {{ $list_item['title'] }}
                                                </h4>
                                            </div>
                                            <h4 class="ml-9 font-newprimary text-black text-sm font-light italic">
                                                {{ $list_item['description'] }}
                                            </h4>
                                            @if (isset($list_item['btn']))
                                                <x-button href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}"
                                                    title="{{ $list_item['btn'] }}" bg-color="newprimary" padding-x="2"
                                                    padding-y="1" margin-top="2" font-size="sm" color="black"
                                                    bg-color="newyellow" target="_blank" />
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex-1 text-center flex flex-col justify-end">
                                <x-button href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                    title="{{ __('pages/programs/academic_test_preparation.lets_start') }}"
                                    bg-color="newprimary" padding-x="8" padding-y="1.5" />
                                <span class="mt-1 text-sm text-[#9C9C9C] text-center">
                                    {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                                    <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                        class="underline text-newprimary hover:text-black">
                                        {{ __('pages/programs/admission_mentoring.book_now') }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    {{-- SECTION 5 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.why_us_title') }}</h2>
            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/why us.webp') }}"
                alt="EduALL Table" class="w-full h-full py-8">
        </div>
    </section>

    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/programs/sat_program.free_trial_title') }}
            </h2>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="px-4 md:px-12 py-3 font-bold font-newprimary text-sm md:text-base text-white text-center bg-newprimary hover:scale-110 transition-all duration-150">
                {{ __('pages/programs/sat_program.free_trial_button') }}
            </a>
        </div>
    </section>

    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.testimoni_title') }}</h2>
        </div>
        <div class="main-container my-12">
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
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

    <section
        class="mt-12 py-12 bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/revamp/banner-bottom.webp')] bg-cover bg-center">
        <div class="flex flex-col justify-center items-center new-main-container py-16 gap-2">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-white text-center md:text-left">
                {{ __('pages/programs/sat_program.banner2_title') }}</h2>
            <p class="font-newprimary text-white text-center md:text-justify">
                {{ __('pages/programs/sat_program.banner2_body') }}
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="mt-8 bg-white text-red font-newprimary text-lg font-semibold py-2 px-6 shadow-xl hover:scale-110 transition-all duration-150">{{ __('pages/programs/sat_program.banner2_button') }}</a>
        </div>
    </section>

    <section class="pt-24 pb-12">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row gap-12 max-w-4xl mx-auto items-center">
                <div class="w-full md:w-1/3 flex flex-col gap-0.5">
                    @foreach (__('pages/programs/sat_program.support_list') as $item)
                        <div class="rounded-sm bg-[#393636] w-full px-2 py-1 text-white uppercase font-semibold">
                            {{ $item }}
                        </div>
                    @endforeach
                </div>
                <div class="w-full md:w-2/3">
                    <div class="flex flex-col items-center text-center shadow-md py-4 rounded-sm bg-[#D9D9D9] relative">
                        <span>
                            {!! __('pages/programs/sat_program.support_desc') !!}
                        </span>
                        <div class="w-7 h-7 absolute -top-4 -left-4">
                            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/warning.webp') }}"
                                alt="asset">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.support_title') }}</h2>
            <div class="flex flex-wrap gap-4 mt-4 justify-center">
                @foreach (__('pages/programs/sat_program.supports_tag') as $item)
                    <div class="pl-2 pr-3 py-1 rounded-md border-black border flex items-center justify-center gap-2">
                        <div class="w-6 h-5">
                            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/icons/' . $item['image']) }}"
                                alt="icons" class="w-full h-full object-contain">
                        </div>
                        <span class="text-semibold flex-1">{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                @foreach (__('pages/programs/sat_program.benefit2_list') as $item)
                    <div class="p-2 w-full h-full">
                        <div class="flex flex-col items-start border border-black p-4 rounded-xl h-full">
                            <div class="flex items-center justify-start gap-2 flex-1">
                                <div class="w-10 h-10">
                                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/revamp/supports/support-' . $loop->iteration . '.png') }}"
                                        alt="" class="w-full h-full object-contain">
                                </div>
                                <h4 class="font-semibold text-lg leading-6 flex-1">{!! $item['title'] !!}</h4>
                            </div>
                            <div class="flex-1 mt-2">
                                <p class="text-justify mt-2 text-sm">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 12 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="new-main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/programs/sat_program.free_trial2_title') }}
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                {{ __('pages/programs/sat_program.free_trial2_description') }}
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-bold
                font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-110 transition-all
                duration-150">
                {{ __('pages/programs/sat_program.free_trial2_button') }}
            </a>
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        const s4_item = document.querySelectorAll('.sat-program-s3-item');
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('mouseover', () => {
                if (it != s4ActiveIndex) {
                    s4_item[s4ActiveIndex].classList.add('sat-program-s3-inactive');
                    s4_item[s4ActiveIndex].classList.remove('sat-program-s3-active');
                    s4_item[it].classList.remove('sat-program-s3-inactive');
                    s4_item[it].classList.add('sat-program-s3-active');
                    s4_item[it].querySelector('span').classList.add('opacity-0');
                    s4_item[it].querySelector('span').classList.remove('opacity-100');
                    setTimeout(() => {
                        s4_item[it].querySelector('span').classList.remove('opacity-0');
                        s4_item[it].querySelector('span').classList.add('opacity-100');
                    }, 300);
                    s4ActiveIndex = it;
                }
            })
        });

        const slide_button_left = document.querySelector('.slide-button-left');
        const slide_button_right = document.querySelector('.slide-button-right');
        const private_class = document.querySelector('.private-class');
        const semi_private_class = document.querySelector('.semi-private-class');
        const slide_background = document.querySelector('.slide-background');

        if (!isMediumDevice) {
            slide_button_left.addEventListener('click', () => {
                private_class.classList.remove('opacity-100');
                private_class.classList.add('opacity-0');
                private_class.classList.add('translate-x-2/3');
                private_class.classList.remove('visible');
                private_class.classList.add('invisible');
                private_class.classList.remove('duration-1000')
                private_class.classList.add('duration-700')
                semi_private_class.classList.add('opacity-100');
                semi_private_class.classList.remove('opacity-0');
                semi_private_class.classList.remove('-translate-x-2/3');
                semi_private_class.classList.add('visible');
                semi_private_class.classList.remove('invisible');
                semi_private_class.classList.add('duration-1000')
                semi_private_class.classList.remove('duration-700')
                slide_background.classList.remove('-translate-x-[68%]');
                slide_background.classList.add('translate-x-[14%]');
            });

            slide_button_right.addEventListener('click', () => {
                private_class.classList.add('opacity-100');
                private_class.classList.remove('opacity-0');
                private_class.classList.add('visible');
                private_class.classList.remove('translate-x-2/3');
                private_class.classList.add('duration-1000')
                private_class.classList.remove('invisible');
                private_class.classList.remove('duration-700')

                semi_private_class.classList.remove('opacity-100');
                semi_private_class.classList.add('opacity-0');
                semi_private_class.classList.add('-translate-x-2/3');
                semi_private_class.classList.remove('visible');
                semi_private_class.classList.add('invisible');
                semi_private_class.classList.remove('duration-1000')
                semi_private_class.classList.add('duration-700')
                slide_background.classList.remove('translate-x-[14%]');
                slide_background.classList.add('-translate-x-[68%]');
            });
        }


        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
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
