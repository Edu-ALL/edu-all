@extends('layout.user.main')
@section('head')
    <title>{{ __('pages/programs/graduate_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/graduate_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/graduate_program.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/admissions-mentoring'],
        [
            'title' => __('pages/programs/undergraduate_program.navbar_title'),
            'url' => '/programs/admissions-mentoring/undergraduate-program',
        ],
        [
            'title' => __('pages/programs/graduate_program.navbar_title'),
            'url' => '/programs/admissions-mentoring/graduate-program',
        ],
        [
            'title' => __('pages/programs/univ_transfer_program.navbar_title'),
            'url' => '/programs/admissions-mentoring/university-transfer-program',
        ],
    ]" :active="__('pages/programs/graduate_program.navbar_title')" title="{{ __('pages/programs/admission_mentoring.title') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-graduate-header bg-cover bg-top" id="banner">
        <x-registration-form />
        <div class="bg-gradient-to-r from-black/50 via-transparent to-transparent h-screen -mt-16">
            <div
                class="flex flex-col h-full items-center md:items-start justify-center md:justify-end main-container py-[20%] md:pt-[15%] gap-2">
                <h2
                    class="font-bold text-banner-title text-white md:text-left text-center uppercase md:w-1/3 xl:w-1/3 md:pb-[2%]">
                    {{ __('pages/programs/graduate_program.title') }}
                </h2>
                <x-registration-form :is-button="true" />
            </div>

            <div class="absolute md:bottom-0 left-0 right-0">
                <div class="relative h-full">
                    <div
                        class="bg-newprimary mix-blend-multiply visible md:h-24 h-[34vh] absolute md:bottom-0 bottom-0 left-0 right-0">
                    </div>
                    <div
                        class="w-full main-container mx-auto absolute md:bottom-0 bottom-24 left-0 right-0 h-24 flex items-center">
                        <div class="flex md:flex-row flex-wrap gap-6 justify-evenly items-center w-full">
                            @foreach (__('pages/programs/admission_mentoring.stats') as $item)
                                <div class="flex flex-col md:w-auto justify-center items-center">
                                    <p class="font-bold text-white text-xl md:text-2xl text-center">
                                        {{ $item['title'] }}
                                    </p>
                                    <p class="font-bold text-white text-banner-subdescription text-center">
                                        {{ $item['sub_title'] }}
                                    </p>
                                    <p class="font-light text-white text-banner-subdescription text-center">
                                        {{ $item['comment'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-wrap items-center justify-between gap-8 max-w-4xl mx-auto">
                @foreach (__('pages/programs/admission_mentoring.benefits') as $item)
                    <div class="shadow-clip flex flex-col items-center">
                        <div class="h-36 w-40 bg-white flex flex-col items-center justify-center py-4 mb-4"
                            style="clip-path: polygon(50% 0%, 100% 0, 100% 85%, 50% 100%, 0 85%, 0 0);">
                            <div class="h-16 relative">
                                <img  data-src="{{ asset('assets/img/admission mentoring/revamp/' . $item['image']) }}"
                                    alt="EduALL - ilustration" class="w-full h-full object-center object-cover lazyload">
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

            <div class="w-full border-t border-[#DADADA] pt-12 mt-12 max-w-4xl mx-auto">
                <p class="font-newprimary text-center max-w-3xl mx-auto leading-6 text-base">
                    Our Graduate Admission Mentoring Program focuses on students’ educational & professional profile enhancement while also helping develop the gameplan for their top graduate schools strategies.                
                </p>
            </div>
        </div>
    </section>
    
    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col items-center justify-center">
                <h2 class="font-newprimary font-bold text-black text-center text-4xl mb-12 uppercase">
                    {{ __('pages/programs/admission_mentoring.what_you_will_get_title') }}
                </h2>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <div class="w-full md:w-1/2 overflow-hidden rounded-t-lg">
                    @foreach (__('pages/programs/graduate_program.learning_scope_points') as $item)
                        <img  data-src="{{ asset('assets/img/admission mentoring/Graduate/revamp/' . $item['image']) }}"
                            alt="EduALL - ilustration"
                            class="w-full h-full object-center object-cover scale-105 aspect-[7/6] z-10 lazyload">
                        <div class="w-full -mt-4 z-20 relative">
                            <a href="{{ asset('assets/files/programs/graduate/' . $item['link']) }}"
                                target="_blank" class="w-full block bg-red  py-2 px-4 text-center text-white font-semibold">
                                {{ $item['button'] }}
                            </a>
                        </div>
                    @endforeach
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
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section
        class="pt-16 pb-20">
        <div class="new-main-container">
            <div class="flex md:flex-row flex-col items-center bg-[#F5F5F5] rounded-2xl overflow-hidden">
                <div class="flex flex-col items-center md:items-start justify-center w-full md:w-1/2 md:mx-16 md:order-1 order-2 py-6 px-6 mt-2 md:mt-0 rounded-t-3xl md:rounded-none">
                    <h2 class="mb-6 font-bold text-dark text-center text-lg md:text-2xl md:max-w-xs md:text-start">
                        {{ __('pages/home.bottom') }}
                    </h2>
                    <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                        title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="newprimary" padding-x="4" is-rounded />
                </div>
                <div class="w-full md:w-1/2 md:order-2 order-1 mt-4">
                    <img loading="lazy" src="{{ asset('assets/img/home/cta_image.webp') }}" alt="bottom banner"
                        class="w-full h-full object-cover rounded-b-lg">
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Mentors ========================================== --}}
    <section class="pt-16 pb-4 bg-dark" id="mentors">
        <!-- <div class="new-main-container py-8 hidden md:block">
            <h1 class="font-bold text-section-title text-white text-center">Let’s meet Our Mentors</h1>
        </div> -->

        <div class="new-main-container">
            <div class="pt-8 pb-2 flex justify-start items-center gap-4 w-full md:px-16">
                <h1 class="font-bold text-section-title text-white text-left w-full">Let’s meet Our Mentors</h1>
                <div class="border border-newyellow rounded-md py-1 px-6"><a href="{{ route('mentor', app()->getLocale()) }}" class="text-newyellow text-sm md:text-md whitespace-nowrap">See All</a></div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full md:px-8 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
                    <div class="md:px-8">
                        <div class="splide splides undergraduate-splide" role="group">
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
                                    @foreach ($all_mentor as $mentor)
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
                <!-- <div class="hidden md:flex justify-center">
                    <x-button href="{{ route('mentor', app()->getLocale()) }}" title="Click for more details"
                        bg-color="newprimary" class="mb-8" padding-x="4" padding-y="2" hover-bg-color="newprimary"
                        hover-padding-x="20" text-color="white" font="medium" text-size="lg"
                        transition="all duration-150" />
                </div> -->
            </div>
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
