@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute-center main-container w-full h-full md:flex md:flex-col md:justify-between">
                <div class="flex flex-col items-start pt-10 mb-14 md:pl-28 lg:pt-24">
                    <h1 class="font-title font-black text-4xl text-white uppercase md:text-[42px] md:text-left">
                        {{ __('pages/programs/academic_tutoring.title') }}
                    </h1>
                    <p class="mt-6 font-body font-normal text-xl text-white md:text-left md:w-1/2">
                        {{ __('pages/programs/academic_tutoring.desc') }}</p>
                    <a href="https://landing.mailerlite.com/webforms/landing/g0f0w8"
                        class="inline-block px-5 py-2 mt-10 font-primary font-bold text-lg text-white bg-yellow rounded-lg">
                        {{ __('pages/programs/academic_tutoring.top_btn') }}
                    </a>
                </div>

                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-tutor-points.webp') }}"
                    alt="academic tutoring points" class="w-full md:max-w-2xl mx-auto text-center md:mb-10">
            </div>

            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/header-acad-tutor-page.webp') }}"
                class="w-full h-[90vh] object-cover object-center">
        </div>
    </section>

    {{-- ================================== Bennefit Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col gap-y-6 main-container">
            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-on-demand.webp') }}"
                alt="acad on demand">
            <div class="grid grid-cols-1 gap-8 md:items-start md:justify-center md:grid-cols-3 ">
                <div class="flex flex-col items-center">
                    <div class="relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class="h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #eab91f; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566; stroke-dashoffset: calc(566 - (566 * 97)/100);"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2 class="absolute font-body font-black text-4xl text-primary text-center -rotate-[270deg]">97%
                        </h2>
                    </div>
                    <p class="font-body font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_1') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class="h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #efaa52; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566; stroke-dashoffset: calc(566 - (566 * 98)/100);"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2 class="absolute font-body font-black text-4xl text-primary text-center -rotate-[270deg]">98%
                        </h2>
                    </div>
                    <p class="font-body font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_2') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class="h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f6921e; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566; stroke-dashoffset: calc(566 - (566 * 100)/100);"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2 class="absolute font-body font-black text-4xl text-primary text-center -rotate-[270deg]">100%
                        </h2>
                    </div>
                    <p class="font-body font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_3') }}</p>
                </div>
            </div>
            <div class="flex flex-col items-center mt-12">
                <h2 class="mb-6 font-body font-black text-5xl text-black text-center">
                    {{ __('pages/programs/academic_tutoring.ibdiploma') }}</h2>
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/IB-DIPLOMA-ASSET.webp') }}"
                    alt="IB Diploma asset" class="w-full max-w-3xl max-h-48 object-contain">
            </div>
            <div class="flex flex-col items-center mt-12">
                <h2 class="mb-6 font-body font-black text-5xl text-black text-center">
                    {{ __('pages/programs/academic_tutoring.cambridge') }}</h2>
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/CAMBRIDGE-A-LVLASSET.webp') }}"
                    alt="Cambridge a lvl asset" class="w-full max-w-3xl max-h-48 object-contain">
            </div>
        </div>
    </section>

    {{-- ================================== What Will You Do Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 mb-12 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-title font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.do_title') }}</h2>
            </div>
            <div class="flex items-center main-container gap-x-8">
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-tutor-what-you-will-do-asset.webp') }}"
                    alt="acad tutor what you will do asset" class="hidden w-2/6 object-cover md:block">
                <div class="flex flex-col gap-y-6">
                    <div
                        class="flex flex-col items-center w-full gap-x-4 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] md:flex-row md:rounded-full">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/what-will-you-do-1.webp') }}"
                            alt="what will you do 1" class="w-full pt-4 px-4 md:px-0 md:pt-0 md:w-1/3">
                        <div class="flex flex-col w-2/3">
                            <h4 class="font-body font-bold text-2xl text-yellow">
                                {{ __('pages/programs/academic_tutoring.do_list.0.title') }}</h4>
                            <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                {{ __('pages/programs/academic_tutoring.do_list.0.desc') }}</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center w-full gap-x-4 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] md:flex-row md:rounded-full">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/what-will-you-do-2.webp') }}"
                            alt="what will you do 2" class="w-full pt-4 px-4 md:px-0 md:pt-0 md:w-1/3">
                        <div class="flex flex-col w-2/3 py-1.5">
                            <h4 class="font-body font-bold text-2xl text-yellow">
                                {{ __('pages/programs/academic_tutoring.do_list.1.title') }}</h4>
                            <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                {{ __('pages/programs/academic_tutoring.do_list.1.desc') }}</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center w-full gap-x-4 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] md:flex-row md:pr-6 md:rounded-full">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/what-will-you-do-3.webp') }}"
                            alt="what will you do 3" class="w-full pt-4 px-4 md:px-0 md:pt-0 md:w-1/3">
                        <div class="flex flex-col w-2/3 py-1.5">
                            <h4 class="font-body font-bold text-2xl text-yellow">
                                {{ __('pages/programs/academic_tutoring.do_list.2.title') }}</h4>
                            <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                {{ __('pages/programs/academic_tutoring.do_list.2.desc') }}</p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-center w-full gap-x-4 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] md:flex-row md:rounded-full">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/what-will-you-do-4.webp') }}"
                            alt="what will you do 4" class="w-full pt-4 px-4 md:px-0 md:pt-0 md:w-1/3">
                        <div class="flex flex-col w-2/3 py-1.5">
                            <h4 class="font-body font-bold text-2xl text-yellow pr-6">
                                {{ __('pages/programs/academic_tutoring.do_list.3.title') }}</h4>
                            <ul class="list-outside pr-6">
                                <li class="inline-flex text-white">
                                    <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                    <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                        {{ __('pages/programs/academic_tutoring.do_list.3.desc.0') }}</p>
                                </li>
                                <li class="inline-flex text-white">
                                    <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                    <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                        {{ __('pages/programs/academic_tutoring.do_list.3.desc.1') }}</p>
                                </li>
                                <li class="inline-flex text-white">
                                    <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                    <p class="font-body font-normal text-[17px] text-white leading-5 md:pr-4">
                                        {{ __('pages/programs/academic_tutoring.do_list.3.desc.2') }}</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== PRIVATE CLASS Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-title font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.private_title') }}</h2>
            </div>
            <div class="main-container mb-12 text-center md:text-left">
                <p class="font-body font-semibold text-2xl text-primary">
                    {{ __('pages/programs/academic_tutoring.private_desc') }}</p>
            </div>
            <div class="grid grid-cols-1 main-container gap-8 md:grid-cols-3">
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#ecf1ff]">
                    <h4 class="font-body font-extrabold text-2xl text-primary text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_basic_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_basic_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-yellow "></i>
                                <p class="font-body font-medium text-xl text-yellow">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#efaa52]">
                    <h4 class="font-body font-extrabold text-2xl text-white text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_pro_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_pro_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-black "></i>
                                <p class="font-body font-medium text-xl text-black">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#233469]">
                    <h4 class="font-body font-extrabold text-2xl text-white text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_elite_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_elite_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-yellow "></i>
                                <p class="font-body font-medium text-xl text-yellow">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="main-container mt-8 text-center">
                <a href="https://landing.mailerlite.com/webforms/landing/g0f0w8"
                    class="inline-block px-5 py-2 mt-10 font-primary font-bold text-xl text-white text-center bg-yellow rounded-lg">
                    {{ __('pages/programs/academic_tutoring.private_btn') }}
                </a>
            </div>
        </div>
    </section>

    {{-- ================================== WHY US? Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-title font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.why_us_title') }}</h2>
            </div>
            <div class="main-container mt-12">
                <ul class="grid grid-cols-1 gap-8 md:grid-cols-4">
                    @foreach (__('pages/programs/academic_tutoring.why_us_list') as $item)
                        <li class="flex flex-col mb-4 rounded-[2.75rem] bg-[#f6d7af] overflow-hidden">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/' . $item['image']) }}"
                                alt="flexcibility learning" class="p-4 md:p-0">
                            <div class="flex flex-col p-6">
                                <h5 class="mb-4 font-body font-bold text-2xl text-primary">{{ $item['title'] }}</h5>
                                <p class="font-body font-lg text-black">{{ $item['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ================================== Tutors Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-title font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.tutors_title') }}</h2>
            </div>

            <div class="main-container my-12">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach (__('pages/programs/academic_tutoring.tutors_list') as $item)
                                <li class="splide__slide">
                                    <div class="splide__container">
                                        <div class="flex flex-col mx-4 mb-4 rounded-[3rem] bg-primary overflow-hidden">
                                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/tutor/' . $item['image']) }}"
                                                alt="flexcibility learning" class="p-4 md:p-0">
                                            <div class="flex flex-col p-6">
                                                <h5 class="mb-4 font-body font-bold text-2xl text-[#e3b422]">
                                                    {{ $item['name'] }}</h5>
                                                <p class="mt-2 font-body font-semibold text-lg text-white">
                                                    {{ $item['experience'] }}</p>
                                                <ul
                                                    class="@if (count($item['role']) > 1) list-disc @endif list-inside mt-4">
                                                    @foreach ($item['role'] as $role)
                                                        <li class="font-body font-semibold text-lg text-[#e3b422]">
                                                            {{ $role }}
                                                        </li>
                                                    @endforeach
                                                </ul>
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

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-title font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.testi_title') }}</h2>
            </div>

            <div class="main-container my-12">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($testimonies as $item)
                                <li class="splide__slide">
                                    <div class="splide__container">
                                        <div class="flex flex-col mx-4 mb-4 rounded-3xl bg-primary overflow-hidden">
                                            <div class="flex flex-col p-6">
                                                <img src="{{ asset('assets/logo/quote.png') }}" class="w-6 mb-2">
                                                <p class="mt-1 font-body font-semibold text-lg text-white">
                                                    "{{ $item->testi_desc }}"</p>
                                                <h5 class="mt-6 font-body font-bold text-2xl text-yellow">
                                                    {{ $item->testi_name }}</h5>
                                                <span
                                                    class="font-body font-normal text-xl text-white">{{ $item->testi_subtitle }}</span>
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
            <h2 class=" font-title font-black text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/academic_tutoring.bottom_title') }}
                <span class="block text-yellow">
                    {{ __('pages/programs/academic_tutoring.bottom_subtitle') }}</span>
            </h2>
            <a href="https://landing.mailerlite.com/webforms/landing/g0f0w8"
                class="px-5 py-2 mt-4 font-primary font-bold text-xl text-white text-center bg-yellow rounded-2xl">{{ __('pages/programs/academic_tutoring.bottom_btn') }}</a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 3000,
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

        new Splide(splides[1], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 2,
            perMove: 1,
            arrows: false,
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
