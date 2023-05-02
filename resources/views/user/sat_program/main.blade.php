@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/sat_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/sat_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/sat_program.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute-center main-container w-full h-full md:flex md:flex-col md:justify-between">
                <div class="flex flex-col items-start pt-10 mb-14 md:pl-28 lg:pt-24">
                    <h1 class="font-primary font-black text-4xl text-white uppercase md:text-[42px] md:text-left">
                        {{ __('pages/programs/sat_program.title') }}
                    </h1>
                    <p class="mt-6 font-primary font-normal text-xl text-white md:text-left md:w-1/2">
                        {{ __('pages/programs/sat_program.desc') }}</p>
                    <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                        class="inline-block px-5 py-2 mt-10 font-primary font-bold text-lg text-white bg-yellow rounded-lg">
                        {{ __('pages/programs/sat_program.top_btn') }}
                    </a>
                </div>

                <img loading="lazy" src="{{ asset('assets/img/academic_test_preparation/sat_program/SAT-points.webp') }}"
                    alt="Allineduspace academic tutoring points"
                    class="hidden w-full md:max-w-5xl mx-auto text-center  md:block md:mb-10 ">
            </div>

            <img data-original="{{ asset('assets/img/banner/SAT banner.webp') }}" alt="Allineduspace SAT Program Banner"
                class=" w-full h-[60vh] md:h-[90vh] object-cover object-center">
        </div>
    </section>

    {{-- ================================== Subject Covered Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container md:flex-row lg:gap-x-20">
            <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/SAT-girl-asset.webp') }}"
                alt="SAT girl assets" class="w-full px-6 md:w-1/2">
            <div class="mt-6 flex flex-col w-full md:w-1/2">
                <h2 class="mb-8 font-primary font-black text-[26px] text-primary tracking-tighter uppercase md:text-6xl">
                    {{ __('pages/programs/sat_program.subjects_title') }}</h2>
                <ul class="flex flex-col gap-y-2">
                    @foreach (__('pages/programs/sat_program.subjects_list') as $item)
                        <li class="px-4 py-3 rounded-2xl bg-yellow">
                            <h5 class="font-primary font-bold text-xl text-white md:px-3 md:text-2xl">{{ $item }}
                            </h5>
                        </li>
                    @endforeach
                </ul>
                <span class="mt-1 font-primary text-base text-black text-right">*ACT Prep Class</span>
            </div>
        </div>
    </section>


    {{-- ================================== What Will You Do Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 mb-12 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/sat_program.do_title') }}</h2>
            </div>
            <div class="flex items-center main-container gap-x-8">
                <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/what-will-you-do-asset.webp') }}"
                    alt="acad tutor what you will do asset" class="hidden w-2/6 object-cover md:block">
                <div class="flex flex-col gap-y-6">
                    @foreach (__('pages/programs/sat_program.do_list') as $item)
                        <div
                            class="flex justify-between items-stretch gap-4 w-full min-h-full rounded-lg bg-gradient-to-r from-[#040F37] via-primary to-[#040F37] overflow-hidden lg:rounded-full lg:min-h-max">

                            <div
                                class="relative flex items-center w-1/5 min-h-full px-2 overflow-hidden lg:w-1/3 lg:px-6 lg:rounded-full">
                                <span
                                    class="font-primary font-extrabold text-8xl md:text-9xl text-primary leading-none opacity-80 z-10">
                                    {{ $loop->iteration }}
                                </span>
                                <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/sat (' . $loop->iteration . ').webp') }}"
                                    alt="what will you do {{ $loop->iteration }}"
                                    class="absolute w-full h-full -m-2 sm:-m-6 object-cover object-center">
                            </div>
                            <div class="flex flex-col justify-center w-4/5 mt-2 pr-4 pb-4 py-3 sm:mt-0">
                                <h4 class="font-primary font-bold text-2xl text-yellow">
                                    {{ $item['title'] }}</h4>
                                <ul class="list-outside pr-6">
                                    @foreach ($item['body'] as $desc)
                                        <li class="inline-flex text-white">
                                            <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                            <p class="font-primary font-normal text-[17px] text-white leading-5 md:pr-4">
                                                {{ $desc }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Class Section  ================================== --}}
    <section class="py-10">
        <div class="grid grid-cols-1 gap-x-20 main-container md:grid-cols-2">
            <div class="flex flex-col md:gap-y-2">
                <h2 class="font-primary font-black text-3xl text-primary tracking-tighter uppercase md:text-5xl">
                    {{ __('pages/programs/sat_program.private_title') }}</h2>
                <span
                    class="font-primary font-semibold text-lg text-yellow md:text-2xl">{{ __('pages/programs/sat_program.private_sub') }}</span>
                <p class="font-primary font-semibold text-lg text-primary leading-5 md:text-2xl">
                    {{ __('pages/programs/sat_program.private_desc') }}</p>
                <ul class="flex flex-col gap-y-3 my-4">
                    @foreach (__('pages/programs/sat_program.private_list') as $item)
                        <li class="px-5 py-4 rounded-2xl bg-primary">
                            <h4 class="font-primary font-bold text-lg text-yellow uppercase">{{ $item['title'] }}</h4>
                            <p class="font-primary text-base text-white leading-5">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col md:gap-y-2">
                <h2 class="font-primary font-black text-3xl text-primary tracking-tighter uppercase md:text-5xl">
                    {{ __('pages/programs/sat_program.semi_title') }}</h2>
                <span
                    class="font-primary font-semibold text-lg text-yellow md:text-2xl">{{ __('pages/programs/sat_program.semi_sub') }}</span>
                <p class="font-primary font-semibold text-lg text-primary leading-5 md:text-2xl">
                    {{ __('pages/programs/sat_program.semi_desc') }}</p>
                <ul class="flex flex-col gap-y-3 my-4">
                    @foreach (__('pages/programs/sat_program.semi_list') as $item)
                        <li class="px-5 py-4 rounded-2xl bg-primary">
                            <h4 class="font-primary font-bold text-lg text-yellow uppercase">{{ $item['title'] }}</h4>
                            <p class="font-primary text-base text-white leading-5">{{ $item['body'] }}</p>
                            @if ($item['btn'] != null)
                                <a href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}" target="_blank"
                                    class="inline-block mt-3 px-3 py-1.5 font-primary font-medium text-base text-white rounded-2xl bg-yellow md:rounded-xl">{{ $item['btn'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="text-center px-6 md:col-span-2">
                <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                    class="inline-flex px-5 py-2 mt-4 font-primary font-bold text-base text-white text-center bg-yellow rounded-2xl  md:text-xl">{{ __('pages/programs/sat_program.class_btn') }}</a>
            </div>
        </div>
    </section>

    {{-- ================================== Why Us Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col w-full">
            <div
                class="mx-6 mb-12 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.why_us_title') }}</h2>
            </div>
            <div class="flex justify-center items-center w-full main-container gap-x-8">
                @if ($locale == 'id')
                    <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/Frame-7.webp') }}"
                        alt="Allineduspace Why Us" class="w-full max-w-2xl">
                @else
                    <img data-original="{{ asset('assets/img/academic_test_preparation/sat_program/Frame-8.webp') }}"
                        alt="Allineduspace Why Us" class="w-full max-w-2xl">
                @endif
            </div>
        </div>
    </section>


    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.testi_title') }}</h2>
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
                                <li class="splide__slide w-full">
                                    <div class="splide__slide__container h-full">
                                        <div
                                            class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                            <div class="flex flex-col">
                                                <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                    alt="Allineduspace Testimony" class="w-7 mb-3 h-auto">
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
        </div>
    </section>



    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-10">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-primary font-black text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/sat_program.bottom_title') }}
                <span class="block text-yellow">
                    {{ __('pages/programs/sat_program.bottom_subtitle') }}</span>
            </h2>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="px-5 py-2 mt-4 font-primary font-bold text-xl text-white text-center bg-yellow rounded-2xl">{{ __('pages/programs/sat_program.bottom_btn') }}</a>
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
