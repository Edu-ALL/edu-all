@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/skillset_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/skillset_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/skillset_tutoring.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/academic-test-preparation'],
        [
            'title' => __('pages/programs/academic_tutoring.title'),
            'url' => '/programs/academic-test-preparation/academic-tutoring',
        ],
        [
            'title' => __('pages/programs/sat_program.navbar_title'),
            'url' => '/programs/academic-test-preparation/sat-program',
        ],
        [
            'title' => __('pages/programs/skillset_tutoring.title'),
            'url' => '/programs/academic-test-preparation/skillset-tutoring-program',
        ],
    ]" :active="__('pages/programs/skillset_tutoring.title')" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-skillset-tutoring-header bg-cover bg-top" id="banner">
        <x-registration-form program-id="SATPRIV" />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center justify-center gap-2 new-main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h1
                        class="font-bold text-banner-title md:text-7xl text-white md:text-left text-center md:w-1/2 xl:w-1/3 md:ml-12">
                        {{ __('pages/programs/skillset_tutoring.title') }}
                    </h1>
                    <x-registration-form :is-button="true" program-id="SATPRIV" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 scroll-mt-10" id="start-your-journey">
        <div class="new-main-container">
            <h3 class="text-2xl md:text-4xl font-bold text-center mb-12">
                {{ __('pages/programs/skillset_tutoring.program_title') }}
            </h3>
        </div>
        <div class="lg:px-10 xl:px-20 max-w-5xl mx-auto relative">
            <div class="absolute top-0 left-0 right-0 px-8 py-8 h-1/2 max-w-lg mx-auto w-full bg-newprimary rounded-2xl">
                <div class="flex items-center justify-center gap-4 md:gap-8">
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                        {{ __('pages/programs/academic_test_preparation.program_title') }}
                    </h3>
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                </div>
            </div>
            <div class="splide pt-24 w-full" role="group">
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
                        @foreach (__('pages/programs/skillset_tutoring.program_list') as $item)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4 px-1.5">
                                        <div
                                            class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-2xl py-8 px-5 bg-white">
                                            <h3 class="font-bold uppercase text-lg text-center">
                                                {!! $item['title'] !!}
                                            </h3>
                                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                <img  data-src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/revamp/' . $item['image']) }}"alt="EduALL"
                                                    class="h-full w-full object-cover lazyload">
                                            </div>
                                            <div class="w-full h-28 flex flex-col justify-between">
                                                <p class="text-xs text-justify leading-4">
                                                    {{ $item['desc'] }}
                                                </p>

                                                <x-button
                                                    href="{{ route('sign_me_skillset_tutoring', app()->getLocale()) }}"
                                                    title="I Want to Register Now" bg-color="newprimary" padding-x="8"
                                                    padding-y="1.5" margin-top="0" :is-rounded="true" fontSize="base" is-rounded />
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

    {{-- ========================================== Success Stories ========================================== --}}
    @if (count($success_stories) > 0)
        <section class="pt-4 pb-16 bg-dark">
            <div class="new-main-container flex flex-col items-center">
                <div class=" w-full">
                    <div class="pt-8 pb-2 flex justify-start items-center gap-4 w-full md:px-16">
                        <h1 class="font-bold text-section-title text-white text-left w-full">Our Mentees’ Success stories
                        </h1>
                        <div class="border border-newyellow rounded-md py-1 px-6"><a
                                href="{{ route('success_stories', app()->getLocale()) . '?category=skillset-tutoring' }}"
                                class="text-newyellow text-sm md:text-md whitespace-nowrap">See All</a></div>
                    </div>
                </div>

                <div class="splide splides pt-4 max-w-screen-2xl mx-auto md:px-16" role="group">
                    <div class="splide__track">
                        <ul class="splide__list font-newprimary text-black px-8">
                            @foreach ($success_stories as $item)
                                <li class="splide__slide w-full pb-8 px-1.5 md:px-2">
                                    <div class="splide__slide__container pb-8 h-full w-full">
                                        <div
                                            class="flex gap-4 justify-start relative rounded-3xl overflow-hidden max-w-[250px]">
                                            <img loading="lazy"
                                                 data-src="{{ Storage::url('success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->home_thumbnail) }}"
                                                alt="{{ $item->home_thumbnail_alt }}" class="h-full object-contain lazyload">
                                            <div class="absolute bottom-0 left-0 right-0 flex items-center justify-center">
                                                <a href="{{ route('success_stories', app()->getLocale()) . '?category=' . strtolower(str_replace(' ', '-', $item->category)) . '#' . strtolower(explode(' ', trim($item->name))[0]) }}"
                                                    class="mb-3 md:mb-6 text-newyellow bg-black font-medium text-[10px] md:text-sm py-1 mx-4 rounded-full text-center px-1">
                                                    Get to Know {{ explode(' ', trim($item->name))[0] }}
                                                </a>
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
    @endif



    {{-- SECTION 1 --}}
    {{-- <section class="md:bg-newprimary">
        <div class="w-full flex justify-center">
            <div class="flex flex-col w-[1024px] bg-white py-12 px-12 group-hover:w-[1280px] transition-all duration-500"
                style="clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%);">
                <div class="flex flex-col gap-4  group-hover:scale-105 transition-all duration-700">
                    <h2 class="font-newprimary font-semibold text-2xl text-dark text-center md:text-4xl">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion') }}
                    </h2>
                    <p class="mb-8 font-newprimary text-sm md:text-base text-dark text-center max-w-2xl mx-auto">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion_desc') }}
                    </p>

                </div>
            </div>
        </div>
    </section> --}}


    {{-- WHY US 5 --}}
    {{-- <section class="py-12 md:py-24">
        <div class="flex new-main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.program_title') }}</h2>
            <div class="flex flex-col gap-8 py-12">
                @foreach (__('pages/programs/skillset_tutoring.program_list') as $item)
                    <div class="relative" style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 92% 100%, 0 100%)">
                        <div class="absolute inset-0">
                            <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/program/program-' . $loop->iteration . '.webp') }}"
                                alt="EduALL Skillset Tutoring Program"
                                class="object-center h-full w-full object-cover rounded-md group-hover:scale-105 transition-all duration-700">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center gap-4 p-4 py-12 group-hover:scale-95 transition-all duration-700 relative">
                            <h4 class="font-newprimary font-bold text-white text-3xl uppercase text-center">
                                {{ $item['title'] }}
                            </h4>
                            <p class="font-newprimary text-base text-white max-w-2xl mx-auto leading-6 text-center">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- <section class="py-12">
        <div class="flex w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.why_us_title') }}</h2>
            <div class="flex flex-col gap-6 py-12">
                @foreach (__('pages/programs/skillset_tutoring.why_us_list') as $item)
                    @if ($loop->iteration % 2 == 1)
                        <div class="flex h-80 md:h-48">
                            <div class="bg-dark h-full w-full -mr-[3%]"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 md:px-20 justify-center h-full w-full">
                                    <h4
                                        class="font-newprimary font-bold text-white text-start text-xl md:text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p
                                        class="font-newprimary text-xs md:text-sm text-white text-start max-w-md leading-4 pr-6 md:pr-4 2xl-max-w-xl">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="bg-newprimary h-full w-full md:w-full -ml-[3%]"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                        </div>
                    @else
                        <div class="flex relative h-80 md:h-48">
                            <div class="bg-dark h-full w-full -mr-[3%]"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                            <div class="bg-newprimary h-full w-full -ml-[3%]"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 md:pl-20 max-w-lg mr-auto justify-center h-full ml-[15%]">
                                    <h4
                                        class="font-newprimary font-bold text-white text-start text-xl md:text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p
                                        class="font-newprimary text-xs md:text-sm text-white text-start max-w-md leading-4 pr-4">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- SECTION 12 --}}
    {{-- <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/programs/skillset_tutoring.free_trial2_title') }}
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                {{ __('pages/programs/skillset_tutoring.free_trial2_description') }}
            </p>
            <a href="{{ route('sign_me_skillset_tutoring', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-bold
                font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-110 transition-all
                duration-150">
                {{ __('pages/programs/skillset_tutoring.free_trial2_button') }}
            </a>
        </div>
    </section> --}}
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            arrows: false,
            focus: 'center',
            gap: 10,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: 36,
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
            perPage: isSmallDevice ? 2 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 4,
            padding: isSmallDevice ? '6%' : '0',
            perMove: 1,
            arrows: false,
            lazyload: false,
            autoplay: true,
            interval: 4000,
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
