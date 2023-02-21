@extends('layout.user.main')

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
                    <a href="https://landing.mailerlite.com/webforms/landing/o4s6n0"
                        class="inline-block px-5 py-2 mt-10 font-primary font-bold text-lg text-white bg-yellow rounded-lg">
                        {{ __('pages/programs/sat_program.top_btn') }}
                    </a>
                </div>

                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/SAT-points.webp') }}"
                    alt="academic tutoring points"
                    class="hidden w-full md:max-w-5xl mx-auto text-center  md:block md:mb-10 ">
            </div>

            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/header-SAT-page.webp') }}" alt=""
                class=" w-full h-[60vh] md:h-[90vh] object-cover object-center">
        </div>
    </section>

    {{-- ================================== Subject Covered Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container md:flex-row lg:gap-x-20">
            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/SAT-girl-asset.webp') }}"
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
                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/what-will-you-do-asset.webp') }}"
                    alt="acad tutor what you will do asset" class="hidden w-2/6 object-cover md:block">
                <div class="flex flex-col gap-y-6">
                    @foreach (__('pages/programs/sat_program.do_list') as $item)
                        <div
                            class="flex flex-col items-center w-full gap-x-4 py-3 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] md:flex-row md:py-0 md:rounded-full">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/what-will-you-do-' . $loop->iteration . '.webp') }}"
                                alt="what will you do 4" class="w-full pt-4 px-4 md:px-0 md:pt-0 md:w-1/3">
                            <div class="flex flex-col w-full px-6 py-1.5 md:w-2/3 md:px-0">
                                <h4 class="font-primary font-bold text-2xl text-yellow md:pr-6">
                                    {{ $item['title'] }}</h4>
                                <ul class="list-outside md:pr-6">
                                    @foreach ($item['body'] as $body)
                                        <li class="inline-flex text-white">
                                            <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                            <p class="font-primary font-normal text-[17px] text-white leading-5 md:pr-4">
                                                {{ $body }}</p>
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
                                <a href="#"
                                    class="inline-block mt-3 px-3 py-1.5 font-primary font-medium text-base text-white rounded-2xl bg-yellow md:rounded-xl">{{ $item['btn'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="text-center px-6 md:col-span-2">
                <a href="https://landing.mailerlite.com/webforms/landing/o4s6n0"
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
                <img src="{{ asset('assets/img/academic_test_preparation/sat_program/Frame-7.webp') }}" alt="frame 7"
                    class="w-full max-w-4xl">
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
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($testimonies as $item)
                                <li class="splide__slide">
                                    <div class="splide__container">
                                        <div class="flex flex-col mx-2 mb-4 rounded-3xl bg-primary overflow-hidden md:mx-4">
                                            <div class="flex flex-col p-6">
                                                <h5 class="font-primary font-bold text-2xl text-yellow">
                                                    {{ $item->testi_name }}</h5>
                                                <div class="mt-3 font-primary font-black text-lg text-white">
                                                    {!! $item->testi_subtitle !!}
                                                </div>
                                                <img src="{{ asset('assets/logo/quote.png') }}" class="w-6 my-4">
                                                <div class="font-primary font-semibold text-base text-white">
                                                    {!! $item->testi_desc !!}
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
            <a href="https://landing.mailerlite.com/webforms/landing/o4s6n0"
                class="px-5 py-2 mt-4 font-primary font-bold text-xl text-white text-center bg-yellow rounded-2xl">{{ __('pages/programs/sat_program.bottom_btn') }}</a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
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
