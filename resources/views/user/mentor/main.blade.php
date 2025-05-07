@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/mentor.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/mentor.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/mentor.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        [
            'title' => __('pages/navbar.about_us.submenu.0.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.0.link'),
        ],
        [
            'title' => __('pages/navbar.about_us.submenu.1.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.1.link'),
        ],
        [
            'title' => __('pages/navbar.about_us.submenu.2.title'),
            'url' => '/' . __('pages/navbar.about_us.submenu.2.link'),
        ],
    ]" :active="__('pages/navbar.about_us.submenu.0.title')" title="{{ __('pages/about_us/about.about_title') }}" />
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-16 h-screen bg-mentor-header bg-cover bg-top" id="banner">
        <x-registration-form />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div
                class="flex flex-col h-full items-center md:items-start justify-center md:justify-end main-container py-[20%] md:pt-[15%] gap-2">
                <h1
                    class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/2 xl:w-1/2 md:pb-[2%]">
                    {{ __('pages/about_us/mentor.banner_title') }}
                </h1>
                <x-registration-form :is-button="true" />
            </div>
        </div>
    </section>

    <!-- <section class="py-20 flex items-center justify-center h-screen bg-mentor-header bg-cover bg-center">
                <div class="main-container md:w-4/6 w-full">
                    <div class="flex flex-col items-start">
                        <h1 class="w-full mb-4 font-newprimary font-bold text-4xl text-white md:mb-8 md:text-6xl text-center">
                            {{ __('pages/about_us/mentor.banner_title') }}</h1>
                        <div class="mb-6 w-full font-newprimary font-medium text-white text-center md:mb-12">
                            {!! __('pages/about_us/mentor.benner_body') !!}
                        </div>
                        <div class="w-full flex justify-center">
                            <x-button href="#mentor" title="{{ __('pages/about_us/mentor.banner_btn') }}" type="secondary"
                                bg-color="newprimary" />
                        </div>
                    </div>
                </div>
            </section> -->

    {{-- ========================================== Mentors ========================================== --}}
    <section class="pt-16 pb-4 bg-dark" id="mentors">
        <div class="flex flex-col items-center">
            <div class="w-full md:px-8 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
                    <div class="md:px-8">
                        <div class="splide splides mentor-1" role="group">
                            <div class="splide__arrows text-white">
                                <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -42px">
                                    <i class="fa-solid fa-chevron-left text-4xl"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -42px">
                                    <i class="fa-solid fa-chevron-right text-4xl"></i>
                                </button>
                            </div>
                            <div class="splide__track py-4 md:pb-12">
                                <ul class="splide__list">
                                    @foreach ($allin_mentor as $mentor)
                                        <li class="splide__slide w-full">
                                            <div
                                                class="splide__slide__container relative mx-1.5 md:mx-2 font-secondary program_card hover:rotate-program_card">
                                                <x-mentor-card :mentor=$mentor />
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- External Mentor List Section --}}
    <section class="pt-16 pb-4" id="external-mentors">
        <div class="flex flex-col items-center">

            <h2 class="mb-8 font-newprimary font-bold text-section-title text-newprimary text-center">
                {{ __('pages/about_us/mentor.mentor_building_title') }}
            </h2>

            <div class="w-full md:px-8 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
                    <div class="md:px-8">
                        <div class="splide splides mentor-2" role="group">
                            <div class="splide__arrows text-black">
                                <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -42px">
                                    <i class="fa-solid fa-chevron-left text-4xl"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -42px">
                                    <i class="fa-solid fa-chevron-right text-4xl"></i>
                                </button>
                            </div>
                            <div class="splide__track py-4 md:pb-12">
                                <ul class="splide__list">
                                    @foreach ($building_mentor as $mentor)
                                        <li class="splide__slide w-full">
                                            <div
                                                class="splide__slide__container relative mx-1.5 md:mx-2 font-secondary program_card hover:rotate-program_card">
                                                <x-mentor-card :mentor=$mentor />
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 mt-12 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/about_us/mentor.bottom_title') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                title="{{ __('pages/about_us/mentor.bottom_btn') }}" type="secondary" bg-color="red" />
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splide = new Splide('.mentor-1', {
            type: 'loop',
            perPage: isSmallDevice ? 2 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 4,
            padding: isSmallDevice ? '6%' : '0',
            perMove: 1,
            arrows: isSmallDevice ? false : true,
            lazyload: false,
            autoplay: true,
            interval: 5000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();

        var splide = new Splide('.mentor-2', {
            type: 'loop',
            perPage: isSmallDevice ? 2 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 4,
            padding: isSmallDevice ? '6%' : '0',
            perMove: 1,
            arrows: isSmallDevice ? false : true,
            lazyload: false,
            autoplay: true,
            interval: 5000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endpush
