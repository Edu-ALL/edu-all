@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/sat_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/sat_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/sat_program.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 bg-sat-prep-header bg-cover bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-24 gap-8">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center">
                {{ __('pages/programs/sat_program.title') }}</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                {{ __('pages/programs/sat_program.body') }}
            </p>
            <x-button type='secondary' href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                title="{{ __('pages/programs/sat_program.header_button') }}" />
        </div>
    </section>

    {{-- SECTION 1 --}}
    <section class="py-16">
        <div class="main-container max-w-screen-2xl mx-auto">
            <div class="flex flex-wrap justify-evenly w-full gap-4 uppercase">
                @foreach (__('pages/programs/sat_program.benefit_list') as $item)
                    <div
                        class="group flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                        <div class="overflow-hidden h-3/5">
                            <img src={{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-' . $loop->iteration . '.webp') }}
                                alt="EduALL figure"
                                class="w-full h-full object-bottom object-cover bg-newprimary group-hover:scale-110 transition-all duration-500">
                        </div>
                        <div class="flex bg-newprimary h-2/5 w-full">
                            <h4
                                class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-1.5 pl-4 pr-6 w-36">
                                {{ $item }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 2 --}}
    <section class="py-16">
        <div class="main-container  max-w-screen-2xl mx-auto">
            <div class="flex flex-col items-center md:flex-row gap-x-16 gap-y-10">
                <div class="w-full md:w-2/5">
                    <div class="flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-between items-center h-60">
                        <div class="flex flex-col items-center gap-4 group">
                            <div
                                class="transition-all duration-300 hover:md:h-48 w-32 h-32 md:w-44 md:h-36 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-icons/reading.webp') }}"
                                    alt="EduALL icons"
                                    class="w-12 h-12 md:w-20 md:h-20 object-contain group-hover:scale-125 transition-all duration-700">
                            </div>
                            <span class="font-newprimary text-black text-lg font-semibold">Reading</span>
                        </div>
                        <div class="flex flex-col items-center gap-4 group">
                            <div
                                class="transition-all duration-300 hover:md:h-48 w-32 h-32 md:w-44 md:h-36 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-icons/writing.webp') }}"
                                    alt="EduALL icons"
                                    class="w-12 h-12 md:w-20 md:h-20 object-contain group-hover:scale-125 transition-all duration-700">
                            </div>
                            <span class="font-newprimary text-black text-lg font-semibold">Writing & Language</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-between items-center h-60">
                        <div class="flex flex-col items-center gap-4 group">
                            <div
                                class="transition-all duration-300 hover:md:h-48 w-32 h-32 md:w-44 md:h-36 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-icons/mathematics.webp') }}"
                                    alt="EduALL icons"
                                    class="w-12 h-12 md:w-20 md:h-20 object-contain group-hover:scale-125 transition-all duration-700">
                            </div>
                            <span class="font-newprimary text-black text-lg font-semibold">Mathematics</span>
                        </div>
                        <div class="flex flex-col items-center gap-4 group">
                            <div
                                class="transition-all duration-300 hover:md:h-48 w-32 h-32 md:w-44 md:h-36 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-icons/physics.webp') }}"
                                    alt="EduALL icons"
                                    class="w-12 h-12 md:w-20 md:h-20 object-contain group-hover:scale-125 transition-all duration-700">
                            </div>
                            <div class="flex flex-col items-center">
                                <span class="font-newprimary text-black text-lg font-semibold">Science*</span>
                                <span class="font-newprimary text-black text-xs h-0">*ACT Prep Class</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-full md:w-3/5 relative rounded-md overflow-hidden">
                    <div class="rounded-md bg-newred py-2 px-5 flex items-center absolute top-0 left-0 right-0"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 40%, 96% 100%, 0 100%);">
                        <h4 class="w-1/3 font-newprimary text-white text-xs md:text-base uppercase italic">
                            {{ __('pages/programs/sat_program.benefit_class') }}
                        </h4>
                        <h4 class="font-newprimary text-white text-xs md:text-base uppercase italic">
                            {{ __('pages/programs/sat_program.benefit_class_desc') }}
                        </h4>
                    </div>
                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-figure.webp') }}"
                        alt="EduALL Figure" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.journey_title') }}</h2>
            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-12">
                @foreach (__('pages/programs/sat_program.journey_list') as $item)
                    <div
                        class="sat-program-s3-item @if ($loop->index == 0) sat-program-s3-active @else sat-program-s3-inactive @endif  relative overflow-hidden">
                        <span>{{ $item['title'] }}</span>
                        <div class="desc">
                            <ul class="whitespace-nowrap">
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

    {{-- SECTION 4 --}}
    <div class="py-16 flex flex-col items-center w-full">
        <div
            class="md:h-[70vh] w-full flex items-center justify-center bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s4-figure.webp')] bg-cover md:bg-center bg-bottom">
            <div class="hidden md:flex w-full h-full items-center relative group max-w-screen-xl mx-auto">
                <div class="w-full flex main-container z-20 py-10">
                    <div class="flex flex-col items-start max-w-lg opacity-100 private-class transition-all duration-300">
                        <span
                            class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/sat_program.private_class_recomendation') }}</span>
                        <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">
                            {{ __('pages/programs/sat_program.private_class_title') }}</h3>
                        <p class="mt-2 sfont-newprimary text-white text-base">
                            {{ __('pages/programs/sat_program.private_class_description') }}</p>
                        <ul>
                            @foreach (__('pages/programs/sat_program.private_class_list') as $item)
                                <li class="font-newprimary text-white mt-2">
                                    <div class="flex items-center gap-3">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                                fill="white" />
                                        </svg>
                                        <h6 class="text-lg font-semibold">{{ $item['title'] }}</h6>
                                    </div>
                                    <p class="ml-8 text-sm">{{ $item['description'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                        <button
                            class="slide-button-left mt-8 px-8 py-1 bg-newyellow shadow-xl rounded-lg hover:px-10 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 -960 960 960" width="36"
                                fill="#0000FF">
                                <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="flex w-full flex-col items-start max-w-lg opacity-0 -translate-x-2/3 pl-4 semi-private-class transition-all duration-700">
                        <span
                            class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/sat_program.semi_private_class_recomendation') }}</span>
                        <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">
                            {{ __('pages/programs/sat_program.semi_private_class_title') }}</h3>
                        <p class="mt-2 sfont-newprimary text-white text-base">
                            {{ __('pages/programs/sat_program.semi_private_class_description') }}</p>
                        <ul>
                            @foreach (__('pages/programs/sat_program.semi_private_class_list') as $item)
                                <li class="font-newprimary text-white mt-2">
                                    <div class="flex items-center gap-3">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                                fill="white" />
                                        </svg>
                                        <h6 class="text-lg font-semibold">{{ $item['title'] }}</h6>
                                    </div>
                                    <p class="ml-8 text-sm">{{ $item['description'] }}</p>
                                    @if ($loop->index == 0)
                                        <div class="mt-2 w-full flex items-center justify-center">
                                            <a href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}"
                                                target="_blank"
                                                class="bg-newred font-semibold text-xs py-1 px-2 hover:bg-black hover:px-5 transition-all duration-150">{{ $item['btn'] }}</a>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <button
                            class="slide-button-right rotate-180 mt-8 px-8 py-1 bg-newyellow shadow-xl rounded-lg hover:px-10 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 -960 960 960"
                                width="36" fill="#0000FF">
                                <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="slide-background absolute bg-newprimary w-[200%] h-full -translate-x-[68%] ease-in-out transition-all duration-1000"
                    style="clip-path: polygon(11% 0%, 100% 0%, 89% 100%, 0% 100%);"></div>
            </div>
            {{-- MOBILE --}}
            <div class="flex flex-col md:hidden h-full gap-y-8">
                <div class="flex flex-col items-center max-w-lg bg-newprimary main-container  py-12 ">
                    <span
                        class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                        style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/sat_program.private_class_recomendation') }}</span>
                    <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">
                        {{ __('pages/programs/sat_program.private_class_title') }}</h3>
                    <p class="mt-2 sfont-newprimary text-white text-base text-center md:text-left">
                        {{ __('pages/programs/sat_program.private_class_description') }}</p>
                    <ul>
                        @foreach (__('pages/programs/sat_program.private_class_list') as $item)
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">{{ $item['title'] }}</h6>
                                </div>
                                <p class="ml-8 text-sm">{{ $item['description'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex w-full flex-col items-center max-w-lg mt-12 bg-newprimary main-container  py-12 ">
                    <span
                        class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                        style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/sat_program.private_class_recomendation') }}</span>
                    <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">
                        {{ __('pages/programs/sat_program.semi_private_class_title') }}</h3>
                    <p class="mt-2 sfont-newprimary text-white text-base">
                        {{ __('pages/programs/sat_program.semi_private_class_description') }}</p>
                    <ul>
                        @foreach (__('pages/programs/sat_program.semi_private_class_list') as $item)
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">{{ $item['title'] }}</h6>
                                </div>
                                <p class="ml-8 text-sm">{{ $item['description'] }}</p>
                                @if ($loop->index == 0)
                                    <div class="mt-2 w-full flex items-center justify-center">
                                        <a href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}"
                                            target="_blank"
                                            class="bg-newred font-semibold text-xs py-1 px-2 hover:bg-black hover:px-5 transition-all duration-150">{{ $item['btn'] }}</a>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-container">
            <x-button href="{{ route('sign_me_sat_prep', app()->getLocale()) }}" type='primary'
                title=" {{ __('pages/programs/sat_program.private_semi_private_button') }}" />
        </div>
    </div>

    {{-- SECTION 5 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.why_us_title') }}</h2>
            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s5-table.webp') }}"
                alt="EduALL Table" class="w-full h-full py-8">
        </div>
    </section>

    {{-- SECTION 6 --}}
    <section
        class="py-12 bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s6-background.webp')] bg-newprimary bg-bottom bg-cover  bg-blend-multiply">
        <div class="flex main-container flex-col items-center justify-center gap-y-8 md:flex-row">
            @foreach (__('pages/programs/sat_program.info_list') as $item)
                <div class="w-full md:w-1/4 flex flex-col items-center">
                    <h3 class="text-newyellow font-bold text-[52px] leading-10">{{ $item['quantity'] }}</h3>
                    <h4 class="text-white font-semibold text-xl uppercase mt-2">{{ $item['body'] }}</h4>
                    <span class="text-white text-sm">{{ $item['span'] }}</span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- SECTION 7 --}}
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
                                    <x-testimonial-card :testimonial=$testi/>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 8 --}}
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

    {{-- SECTION 9 --}}
    <section
        class="mt-16 py-12 bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s9-background.webp')] bg-cover bg-center">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-16 gap-8">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-white text-center md:text-left max-w-xl">
                {{ __('pages/programs/sat_program.banner2_title') }}</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                {{ __('pages/programs/sat_program.banner2_body') }}
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="mt-8 bg-black text-white font-newprimary text-lg font-semibold py-2 px-6 shadow-xl hover:scale-110 transition-all duration-150">{{ __('pages/programs/sat_program.banner2_button') }}</a>
        </div>
    </section>

    {{-- SECTION 10 --}}
    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <div class="flex flex-col md:flex-row w-full mt-12 md:gap-12">
                <div class="w-full md:block md:w-1/2 rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s10-figure.webp') }}"
                        alt="EduALL figure" class="h-full object-cover hover:scale-110 transition-all duration-700">
                </div>
                <div class="w-full md:w-1/2">
                    @foreach (__('pages/programs/sat_program.benefit2_list') as $item)
                        <div class="flex flex-col pt-4  items-center md:items-start">
                            <span
                                class="bg-newprimary px-6 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg"
                                style="clip-path: {{ $item['polygon'] }};">{{ $item['title'] }}</span>
                            <p class="md:pl-6 font-newprimary text-black text-center md:text-start text-base mt-1">
                                {{ $item['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 11 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/sat_program.support_title') }}</h2>
            <div class="flex flex-col md:flex-row items-center justify-center mt-12 gap-8">
                @foreach (__('pages/programs/sat_program.support_list') as $item)
                    <div
                        class="flex flex-col polygon-shape w-1/2 md:w-1/4 aspect-square rounded-xl bg-newprimary group overflow-hidden">
                        <div class="overflow-hidden h-3/5">
                            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s11-figure-' . $loop->iteration . '.webp') }}"
                                alt="EduALL figure"
                                class="w-full h-full object-bottom object-cover bg-newprimary group-hover:scale-110 transition-all duration-500">
                        </div>
                        <div class="flex bg-newprimary h-2/5 w-full">
                            <h4
                                class="font-newprimary text-sm md:text-xl uppercase md:leading-6 text-white font-semibold h-full md:pt-2 pl-2 md:pl-4 pr-6 w-52">
                                {!! $item !!}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col items-center text-center mt-20">
                {!! __('pages/programs/sat_program.support_desc') !!}
            </div>
        </div>
    </section>

    {{-- SECTION 12 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
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

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        const s4_item = document.querySelectorAll('.sat-program-s3-item');
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('click', () => {
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
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            autoplay: true,
            lazyload: true,
            interval: 4000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endsection
