@extends('layout.user.main')
@section('head')
    <title>{{ __('pages/programs/graduate_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/graduate_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/graduate_program.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/admissions-mentoring'],
        ['title' => __('pages/programs/undergraduate_program.navbar_title'), 'url' => '/programs/admissions-mentoring/undergraduate-program'],
        ['title' => __('pages/programs/graduate_program.navbar_title'), 'url' => '/programs/admissions-mentoring/graduate-program'],
        ['title' => __('pages/programs/univ_transfer_program.navbar_title'), 'url' => '/programs/admissions-mentoring/university-transfer-program'],
    ]" :active="__('pages/programs/graduate_program.navbar_title')" title="{{  __('pages/programs/admission_mentoring.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-graduate-header bg-cover bg-top" id="banner">
        <x-registration-form />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div class="flex flex-col h-full items-center md:items-start new-main-container py-[50%] md:pt-[15%] gap-2">
                <h2 class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/3 xl:w-1/3 md:pb-[2%]">
                    {{ __('pages/programs/graduate_program.title') }}
                </h2>
                <p class="ml-0.5 text-white text-center md:text-left max-w-2xl leading-6 text-banner-description font-light md:w-1/2 xl:w-2/3">
                    {{ __('pages/programs/graduate_program.body') }}
                </p>
                <x-registration-form :is-button="true" />
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row items-center justify-evenly pt-4 pb-10 border-b border-b-[#DADADA] gap-8">
                @foreach (__('pages/programs/admission_mentoring.stats') as $item)
                    <div class="flex flex-1 flex-col items-center">
                        <h2 class="text-newprimary font-bold text-banner-title leading-10">{{ $item['title'] }}</h2>
                        <h4 class="text-newprimary font-semibold text-lg leading-6">{{ $item['sub_title'] }}</h4>
                        <span class="text-xs font-semibold uppercase leading-3">{{ $item['comment'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="text-center text-lg max-w-4xl mx-auto font-semibold py-8">
                {{ __('pages/programs/admission_mentoring.body') }}
            </div>
            <div class="flex flex-wrap items-center justify-evenly gap-8 pt-4">
                @foreach (__('pages/programs/admission_mentoring.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center">
                        <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-16 relative">
                                <img data-original="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover">
                                <div class="absolute top-0 -right-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-sm text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-newprimary text-base font-bold text-center mt-2 leading-4">{{ $item['title'] }}
                        </h4>
                        <span class="font-newprimary text-base font-normal text-center">{{ $item['tag'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="new-main-container">
            <div class="new-main-container">
                <div class="flex flex-col items-center justify-center">
                    <h2 class="font-newprimary font-bold text-black text-center text-4xl mb-12 uppercase">
                        {{ __('pages/programs/admission_mentoring.what_you_will_get_title') }}
                    </h2>
                </div>
                <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                    <div class="w-full md:w-1/2 overflow-hidden rounded-lg">
                        <img data-original="{{ asset('assets/img/admission mentoring/Graduate/revamp/graduate.webp') }}"
                            alt="EduALL - ilustration"
                            class="w-full h-full object-center object-cover scale-105 aspect-[7/6]">
                    </div>
                    <div class="w-full md:w-1/2">
                        <ul class="flex flex-col items-start justify-center gap-3">
                            @foreach (__('pages/programs/graduate_program.what_you_will_get_points') as $item)
                                <li class="w-full">
                                    <div
                                        class="w-full flex items-center gap-2 rounded-xl px-4 py-2 shadow-lg what-will-you-get-item cursor-pointer {{ $loop->first ? 'bg-newprimary text-white' : '' }}">
                                        <div class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                            <i class="fa-solid fa-check fa-sm text-white"></i>
                                            <p></p>
                                        </div>
                                        <h4 class="w-full text-lg font-semibold">
                                            {{ $item['title'] }}
                                        </h4>
                                    </div>
                                    <p class="text-base ml-10 mt-2 what-will-you-get-content"
                                        style="display: {{ $loop->first ? 'block' : 'none' }};">
                                        {{ $item['body'] }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================== 4 ASPECTS ============================== --}}
    <section class="py-32 md:py-12 diagonal-shape">
        <div class="new-main-container z-50">
            <div class="flex flex-col items-center justify-center">
                <h2 class="font-newprimary font-bold text-white text-center text-2xl mb-4 uppercase md:leading-4">
                    {{ __('pages/programs/admission_mentoring.four_aspect_title') }}
                </h2>
                <span
                    class="font-newprimary font-bold text-newyellow text-center text-3xl md:text-4xl mb-4 uppercase md:leading-6">
                    {{ __('pages/programs/admission_mentoring.four_aspect_subtitle') }}
                </span>

                <div class="mt-8 grid md:grid-cols-2 gap-6 max-w-4xl mx-auto relative">
                    @foreach (__('pages/programs/admission_mentoring.four_aspect_points') as $item)
                        <div
                            class="bg-[#F8F5F5] py-4 rounded-lg flex flex-col gap-2 px-6 md:px-0 @if ($loop->index % 2 == 0) md:pl-6 md:pr-20 @else md:pr-6 md:pl-20 @endif">
                            <h3 class="text-newprimary text-2xl font-bold">{{ $item['title'] }}</h3>
                            <p class="text-base text-justify leading-5">{{ $item['body'] }}</p>
                        </div>
                    @endforeach

                    <img data-original="{{ asset('assets/img/admission mentoring/Undergraduate/revamp/four-aspect-logo.webp') }}"
                        alt="EduALL - ilustration"
                        class="hidden md:block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-full object-center object-contain aspect-square">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <div class="flex flex-col items-center justify-center max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row gap-8 mt-6">
                    @foreach (__('pages/programs/graduate_program.learning_scope_points') as $item)
                        <div class="w-full flex flex-col items-center justify-center">
                            <img data-original="{{ asset('assets/img/admission mentoring/Graduate/revamp/' . $item['image']) }}"
                                alt="" class="w-full max-w-3xl object-contain">
                            <p class="px-2 mt-6 leading-5 text-center max-w-3xl mx-auto">{{ $item['body'] }}</p>
                            <x-button href="{{ asset('assets/files/programs/graduate/' . $item['link']) }}" target="_blank"
                                title="{{ $item['button'] }}" margin-top="8" />
                            <span class="mt-1 text-sm text-[#9C9C9C]">
                                {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                                <a href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                                    class="underline text-newprimary hover:text-black">
                                    {{ __('pages/programs/admission_mentoring.book_now') }}
                                </a>
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= OUR MENTOR SECTION ========================================== -->
    <section class="pt-24 pb-24" id="mentors">
        <div class="new-main-container mt-4 mb-10">
            <h1 class="font-newprimary font-bold text-4xl text-dark text-center">
                {{ __('pages/programs/admission_mentoring.mentor_title') }}</h1>
            <p class="font-newprimary text-base text-dark text-center max-w-xl mx-auto">
                {{ __('pages/programs/admission_mentoring.mentor_desc') }}
            </p>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full px-10 new-main-container">
                <div class="splide" role="group">
                    <div class="splide__arrows text-dark">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -24px">
                            <i class="fa-solid fa-chevron-left text-4xl"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -24px">
                            <i class="fa-solid fa-chevron-right text-4xl"></i>
                        </button>
                    </div>
                    <div class="splide__track py-10">
                        <ul class="splide__list">
                            @foreach ($all_mentor as $mentor)
                                <li class="splide__slide">
                                    <div class="splide__slide__container px-4 pt-[2rem] w-full h-[80%] mt-32">
                                        <x-mentor-card :mentor=$mentor />
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <a href="{{ route('mentor', app()->getLocale()) }}"
                class="flex justify-center mb-8 bg-dark font-newprimary text-white font-medium text-lg py-2 px-14 hover:bg-newprimary hover:px-20 transition-all duration-150">
                {{ __('pages/programs/admission_mentoring.mentor_button') }}
            </a>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <h2 class="font-newprimary font-bold text-black text-center text-4xl mb-4 uppercase">
                {{ __('pages/programs/admission_mentoring.what_our_mentees_say') }}
            </h2>

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

    <!-- Bottom Section -->
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="new-main-container flex flex-col items-center">
            <h2 class="w-full mb-6 font-newprimary font-semibold text-white text-center lg:text-3xl text-2xl">
                {{ __('pages/programs/admission_mentoring.bottom_section_title') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                title="{{ __('pages/programs/admission_mentoring.schedule_free_consultation') }}" type='secondary'
                bg-color="red" />
        </div>
    </section>
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            lazyload: true,
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

    <script>
        $(document).ready(function() {
            // Handle click on the what-will-you-get-item div
            $('.what-will-you-get-item').on('click', function() {
                // Find the currently active content and close it
                $('.what-will-you-get-content').slideUp();
                $('.what-will-you-get-item').removeClass('bg-newprimary text-white');

                // Open the clicked content
                $(this).next('.what-will-you-get-content').slideDown();
                $(this).addClass('bg-newprimary text-white');
            });
        });
    </script>
@endpush
