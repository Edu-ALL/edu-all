@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_test_preparation.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_test_preparation.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_test_preparation.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="-mt-16 pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container w-full h-screen lg:bg-primary/50">
                <div class="flex flex-col justify-center items-center h-full lg:max-w-3xl lg:mx-auto">
                    <h1 class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center">
                        {{ __('pages/programs/academic_test_preparation.title') }}
                    </h1>
                    <p class="mt-5 font-primary font-normal text-xl text-white text-center">
                        {{ __('pages/programs/academic_test_preparation.body') }}</p>
                </div>
            </div>

            <img data-original="{{ asset('assets/img/banner/Academic and test prep banner.webp') }}"
                alt="Allineduspace Academic Test Preparation Banner" class="w-full h-screen object-cover object-center">
        </div>
    </section>

    {{-- ================================== Academic Tutoring Section ================================== --}}
    <section class="pb-10">
        <div class="flex flex-col items-center main-container">
            <h2 class="font-primary font-semibold text-4xl text-primary capitalize">
                {{ __('pages/programs/academic_test_preparation.aca_title') }}</h2>
            <p class="my-4 font-primary text-xl text-primary text-center md:w-1/2">
                {!! __('pages/programs/academic_test_preparation.aca_desc') !!}</h2>
            </p>
            <img data-original="{{ asset('assets/img/academic_test_preparation/academic-tutoring-flyer-logo-1024x234.webp') }}"
                alt="Allineduspace Academic Tutoring" class="w-full max-w-2xl my-4">
            <div class="flex flex-col mx-4 mt-8 md:flex-row md:max-w-4xl md:gap-x-8 md:items-center">
                <img data-original="{{ asset('assets/img/academic_test_preparation/ACAD-TUTOR-photo.webp') }}"
                    alt="Allineduspace Academic Tutoring" class="rounded-2xl md:w-1/2  md:mr-4">
                <div class="flex flex-col mt-4 md:w-1/2 md:pl-4">
                    <h4 class="my-6 font-primary font-semibold text-lg text-[#7A7A7A] text-center md:mt-0 md:text-left">
                        {{ __('pages/programs/academic_test_preparation.aca_points_title') }}</h4>
                    <ul class="flex flex-col">
                        @foreach (__('pages/programs/academic_test_preparation.aca_points') as $item)
                            <li class="flex
                        items-start gap-x-2">
                                <i class="fa-solid fa-check mt-1 font-black text-[#1eb5f6]"></i>
                                <h6 class="font-primary font-normal text-lg text-[#7A7A7A]">{{ $item }}</h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="{{ route('academic_tutoring', ['locale' => app()->getLocale()]) }}"
                class="inline-block p-4 mt-10 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.aca_btn') }}
            </a>
        </div>
    </section>

    {{-- ================================== IB Coaching Program Tutoring Section ================================== --}}
    <section class="pb-10">
        <div class="flex flex-col items-center main-container">
            <h2 class="font-primary font-semibold text-4xl text-primary text-center capitalize">
                {{ __('pages/programs/academic_test_preparation.eecoach_title') }}</h2>
            <p class="my-4 font-primary text-xl text-primary text-center md:w-1/2">
                {{ __('pages/programs/academic_test_preparation.eecoach_desc') }}</h2>
            </p>
            <h5 class="font-primary font-bold text-xl text-primary text-center md:max-w-2xl "> |
                @foreach (__('pages/programs/academic_test_preparation.eecoach_benefits') as $item)
                    {{ $item }} |
                @endforeach
            </h5>
            <div class="flex flex-col items-center mt-8 mx-5">
                <h4 class="mb-10 font-primary text-xl text-primary capitalize">
                    {{ __('pages/programs/academic_test_preparation.eecoach_learn_title') }}
                </h4>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 md:max-w-4xl  md:gap-8">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 1.webp') }}"
                        alt="Allineduspace IB EE Topic 1">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 2.webp') }}"
                        alt="Allineduspace IB EE Topic 2">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 3.webp') }}"
                        alt="Allineduspace IB EE Topic 3">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 4.webp') }}"
                        alt="Allineduspace IB EE Topic 4">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 5.webp') }}"
                        alt="Allineduspace IB EE Topic 5">
                    <img data-original="{{ asset('assets/img/academic_test_preparation/Topic 6.webp') }}"
                        alt="Allineduspace IB EE Topic 6">
                </div>
            </div>
            <a href="{{ route('ib_ee_coaching_program', ['locale' => app()->getLocale()]) }}"
                class="inline-block p-4 mt-16 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.eecoach_btn') }}
            </a>
        </div>
    </section>

    {{-- ================================== SAT / ACT Preparation Section ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">
            <img data-original="{{ asset('assets/img/academic_test_preparation/Icon_1.png') }}"
                alt="Allineduspace SAT Preparation Icon">
            <h2 class="mt-4 font-primary font-semibold text-4xl text-primary text-center capitalize">
                {{ __('pages/programs/academic_test_preparation.sat_title') }}</h2>
            <p class="my-4 font-primary text-xl text-primary text-center md:w-1/2">
                {{ __('pages/programs/academic_test_preparation.sat_desc') }}</h2>
            </p>
            <div class="flex flex-col mx-4 mt-8 md:flex-row md:max-w-4xl md:gap-x-8 md:items-center">
                <div class="flex flex-col mt-4 md:w-1/2 md:pl-4">
                    <p class="my-6 font-primary text-lg text-[#7A7A7A] text-center md:mt-0 md:text-left">
                        {{ __('pages/programs/academic_test_preparation.sat_body') }}</p>
                </div>
                <div class=" md:w-1/2  md:mr-4">
                    <div class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" style="background: transparent;">
                                <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next" style="background: transparent;">
                                <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                            </button>
                        </div>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img
                                        src="{{ asset('assets/img/academic_test_preparation/card7.webp') }}"
                                        alt="Allineduspace Academic Tutoring" class="rounded-2xl"></li>
                                <li class="splide__slide"><img
                                        src="{{ asset('assets/img/academic_test_preparation/card8.webp') }}"
                                        alt="Allineduspace Academic Tutoring" class="rounded-2xl"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <a href="{{ route('sat_program', ['locale' => app()->getLocale()]) }}"
                class="inline-block p-4 mt-16 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.sat_btn') }}
            </a>
        </div>
    </section>


    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-28">
        <div class="main-container">
            <h2 class="font-primary font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/academic_test_preparation.testimony_title') }}
            </h2>
            <div class="splide" aria-labelledby="carousel-heading">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                    </button>
                </div>
                <ul class="splide__pagination"></ul>
                <div class="splide__track">

                    <ul class="splide__list">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full">
                                <div class="splide__slide__container h-full">
                                    <div
                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                        <div class="flex flex-col">
                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                class="w-7 mb-3 h-auto">
                                            <div class="font-primary text-sm text-white text-justify">
                                                {!! $testi->testi_desc !!}
                                            </div>
                                        </div>
                                        <div class="mt-4 flex flex-col">
                                            <div class="font-primary font-semibold text-base text-yellow">
                                                {{ $testi->testi_name }}
                                            </div>
                                            <div class="font-primary text-sm text-white">
                                                {!! $testi->testi_subtitle !!}
                                            </div>
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
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'fade',
            rewind: true,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#000';
            });
        }).mount();

        new Splide(splides[1], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
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
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
