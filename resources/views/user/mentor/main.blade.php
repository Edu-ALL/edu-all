@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/mentor.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/mentor.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/mentor.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => __('pages/navbar.about_us.submenu.0.title'), 'url' => '/' . __('pages/navbar.about_us.submenu.0.link')],
        ['title' => __('pages/navbar.about_us.submenu.1.title'), 'url' => '/' . __('pages/navbar.about_us.submenu.1.link')],
        ['title' => __('pages/navbar.about_us.submenu.2.title'), 'url' => '/' . __('pages/navbar.about_us.submenu.2.link')],
    ]" :active="__('pages/navbar.about_us.submenu.0.title')" title="{{ __('pages/about_us/about.about_title') }}" />
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-20 flex items-center justify-center h-screen bg-mentor-header bg-cover bg-center">
        <div class="main-container w-4/6">
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
    </section>

    {{-- Mentor List Section --}}
    <section id="mentor" class="py-20 mt-[0rem] bg-dark">
        <div class="new-main-container lg:max-w-10xl lg:mx-auto">
            {{-- <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 xl:gap-12 h-full">
                @foreach ($allin_mentor as $mentor)
                    <div class="w-full md:-mt-[100px] -mt-[150px] md:mb-[250px] mb-[350px]">
                        <x-mentor-card :mentor=$mentor />
                    </div>
                @endforeach
            </div> --}}

            <div class="splide mentor-1" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-3xl text-white"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-3xl text-white"></i>
                    </button>
                </div>
                <div class="splide__track  py-20">
                    <ul class="splide__list">
                        @foreach ($allin_mentor as $mentor)
                            <li class="splide__slide">
                                <div class="splide__slide__container px-4 w-full h-[80%] mt-32">
                                    <x-mentor-card :mentor=$mentor />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- External Mentor List Section --}}
    <section class="pt-32 pb-10">
        <div class="new-main-container lg:max-w-10xl lg:mx-auto flex flex-col">
            <h2 class="mb-8 font-newprimary font-bold text-4xl text-newprimary text-center">
                {{ __('pages/about_us/mentor.mentor_building_title') }}
            </h2>
            <div class="splide mentor-2" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track  py-20">
                    <ul class="splide__list">
                        @foreach ($building_mentor as $mentor)
                            <li class="splide__slide">
                                <div class="splide__slide__container px-4 w-full h-[80%] mt-32">
                                    <x-mentor-card :mentor=$mentor />
                                </div>
                            </li>
                        @endforeach
                    </ul>
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
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splide = new Splide('.mentor-1', {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            lazyload: true,
            autoplay: false,
            type: 'loop',
            arrows: isSmallDevice ? false : true,
            pagination: isSmallDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
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

        var splide = new Splide('.mentor-2', {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            lazyload: true,
            autoplay: false,
            type: 'loop',
            arrows: isSmallDevice ? false : true,
            pagination: isSmallDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
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
@endpush
