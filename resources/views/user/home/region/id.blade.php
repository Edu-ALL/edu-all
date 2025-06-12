@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [['name' => 'Home', 'url' => url('/' . app()->getLocale())]];
    @endphp

    <title>{{ __('pages/home.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/home.meta_title') }}" />
    <meta name="description" content="{{ __('pages/home.meta_description') }}" />
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
@endsection

@section('content')
    {{-- ========================================== Banner Section ========================================== --}}
    <section class="h-[100%]">
        <x-registration-form is-home />

        <div class="relative">
            @if ($banners->video_link)
                <video class="w-full md:h-[100vh] h-[100dvh] object-cover" autoplay loop muted>
                    <source
                        src="{{ Storage::url('banner-video/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->video_link) }}"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @elseif ($banners->image)
                <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                    <img data-src="{{ Storage::url('banner/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->image) }}"
                        alt="{{ $banners->alt }}"
                        class="w-full md:h-[100vh] h-[100dvh] object-cover absolute top-0 left-0 lazyload">
                </div>
            @endif
            <div class="absolute bottom-72 md:bottom-52 left-0 right-0 w-full main-container">
                <h1
                    class="font-bold text-[16h1x] md:text-[52px] text-white text-center lg:text-left max-w-lg mx-auto lg:mx-0 md:leading-[3.5rem]">
                    Your Gateway to Top Universities & Dream Careers
                </h1>
                <x-registration-form :is-button="true" />
            </div>
            <div class="absolute md:bottom-10 left-0 right-0">
                <div class="relative h-full">
                    <div
                        class="bg-newprimary mix-blend-multiply visible md:h-24 h-[36dvh] absolute md:bottom-[8vh] bottom-0 left-0 right-0">
                    </div>
                    <div
                        class="w-full main-container mx-auto absolute md:bottom-[8vh] bottom-20 left-0 right-0 h-24 flex items-center">
                        <div class="flex md:flex-row flex-wrap gap-6 md:justify-between justify-center items-center w-full">
                            {{-- Acceptance --}}
                            <div class="flex flex-col md:w-auto w-[50%] justify-center items-center">
                                <p class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->accepatance }}
                                </p>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    at Best-Fit Universities
                                </span>
                            </div>
                            {{-- Mentees --}}
                            <div class="flex flex-col justify-center items-center">
                                <p class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->mentees }}
                                </p>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    mentees
                                </span>
                            </div>
                            {{-- Scholarship --}}
                            <div class="flex flex-col justify-center items-center">
                                <p class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->scholarship }}
                                </p>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    in Scholarship Awards
                                </span>
                            </div>
                            {{-- SAT Score --}}
                            <div class="flex flex-col justify-center items-center">
                                <p class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->sat_score }}
                                </p>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    on SAT Score
                                </span>
                            </div>
                            {{-- Statisfaction Rate --}}
                            <div class="flex flex-col justify-center items-center">
                                <p class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->statisfaction_rate }}
                                </p>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    Student Projects Launched
                                </span>
                                {{-- <span class="font-light text-white text-banner-subdescription text-center">
                                    by Parents, Mentees, Partners, and Teachers
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Our Program Section ======================================= --}}
    <section class="pt-16">
        <div class="new-main-container">
            <h2 class="font-bold text-section-title uppercase text-center">Our Programs</h2>
            <div class="splide splides pt-12 max-w-5xl mx-auto" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/programs.program_list') as $item)
                            <li class="splide__slide w-full pb-8 px-3">
                                <div class="splide__slide__container py-8 h-full w-full">
                                    <div
                                        class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                                        <h3 class="font-bold uppercase text-card-subtitle text-center">
                                            {!! $item['title'] !!}
                                        </h3>
                                        <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                            <img data-src="{{ asset('assets/img/home/our-programs/' . $item['img']) }}"alt="EduALL"
                                                class="h-full w-full object-cover lazyload">
                                        </div>
                                        <div class="w-full lg:h-20 border-t border-t-[#DEDEDE]">
                                            <ul class="mt-4 w-full flex flex-col gap-2">
                                                @foreach ($item['points'] as $point)
                                                    <li class="flex justify-center items-start gap-2">
                                                        <div
                                                            class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                                            <i class="fa-solid fa-check fa-xs text-white"></i>
                                                        </div>
                                                        <p class="flex-1 text-sm font-newprimary">
                                                            {{ $point }}
                                                        </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <x-button href="{{ url(app()->getLocale()) }}/{{ $item['link'] }}"
                                            title="{{ __('pages/programs/admission_mentoring.learn_more') }}"
                                            bg-color="newprimary" padding-y="1.5" is-rounded />
                                        <span class="mt-1 text-sm text-[#9C9C9C]">
                                            {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                                            <a href="{{ route($item['sign_me'], ['locale' => app()->getLocale()]) }}"
                                                class="underline text-newprimary hover:text-black">
                                                {{ $item['sign_me_text'] }}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== New Pathaway Excellence ========================================== --}}
    <section class="py-16 bg-pathaway bg-cover bg-center">
        <div class="new-main-container md:py-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="col-span-6 md:col-span-4 flex flex-col justify-end order-1">
                    <img data-src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll logo"
                        class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto lazyload">
                    <h2 class="mt-4 font-bold text-3xl md:text-5xl text-white">Pathway to Excellence</h2>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 order-2">
                    <h3 class="font-bold text-2xl text-newyellow">Interest & Career Exploration</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Discovering interests and future aspiration through various learning experience and exposure to
                        professional opportunities while fostering curiosity for students’ unique paths.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 order-3">
                    <h3 class="font-bold text-2xl text-newyellow">Profile <br /> Building</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Identify passions, strengths, achievements, and experiences that will set students apart, creating a
                        compelling and authentic students’ profile for university applications.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-8 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 order-5 md:order-4">
                    <h3 class="font-bold text-2xl text-newyellow">University Application Strategy</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Crafting personalized strategies for university applications, ensuring students effectively showcase
                        their strengths, interests, and potential to stand out in competitive admissions processes.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3 order-4 md:order-5">
                    <h3 class="font-bold text-2xl text-newyellow">Writing</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Developing impactful storytelling in personal statements and essays to showcase unique qualities and
                        aspirations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Mentors ========================================== --}}
    <section class="pt-16 pb-4 bg-dark" id="mentors">
        <div class="new-main-container">
            <div class="pt-8 pb-2 flex justify-start items-center gap-4 w-full md:px-16">
                <h2 class="font-bold text-section-title text-white text-left w-full">Let’s meet Our Mentors</h2>
                <div class="border border-newyellow rounded-md py-1 px-6"><a
                        href="{{ route('mentor', app()->getLocale()) }}"
                        class="text-newyellow text-sm md:text-md whitespace-nowrap">See All</a></div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full md:px-8 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
                    <div class="md:px-8">
                        <div class="splide splides" role="group">
                            <div class="splide__arrows text-white">
                                <button class="splide__arrow splide__arrow--prev"
                                    style="background: transparent; left: -42px">
                                    <i class="fa-solid fa-chevron-left text-4xl"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next"
                                    style="background: transparent; right: -42px">
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

    {{-- ========================================== Success Stories ========================================== --}}
    <section class="pt-4 pb-16 bg-dark">
        <div class="new-main-container flex flex-col items-center">
            <div class=" w-full">
                <div class="pt-8 pb-2 flex justify-start items-center gap-4 w-full md:px-16">
                    <h2 class="font-bold text-section-title text-white text-left w-full">OUR MENTEES’ STORIES</h2>
                    <div class="border border-newyellow rounded-md py-1 px-6"><a
                            href="{{ route('success_stories', app()->getLocale()) }}"
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
                                        <img data-src="{{ Storage::url('success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->home_thumbnail) }}"
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

    {{-- ========================================== Upcomming Events ========================================== --}}
    @if (count($regular_talks) > 0 || count($events) > 0 || count($important_dates) > 0)
        <section class="md:py-16 py-10 bg-dark">
            <div class="new-main-container">
                <h2 class="font-bold text-section-title text-white uppercase text-center">Upcoming Events & Important Dates
                </h2>
                <div class="grid grid-cols-1 gap-3 mt-12">
                    {{-- Upcomming Event --}}
                    <div class="flex flex-col max-w-4xl mx-auto w-full">
                        {{-- Talk Sessions --}}
                        @if (count($regular_talks) > 0 || count($events) > 0)
                            <div class="flex flex-col items-center justify-between">
                                <div class="splide splides w-full" role="group">
                                    @if (count($regular_talks) + count($events) > 2)
                                        <div class="splide__arrows text-white">
                                            <button class="splide__arrow splide__arrow--prev"
                                                style="background: transparent; left: -42px">
                                                <i class="fa-solid fa-chevron-left text-4xl"></i>
                                            </button>
                                            <button class="splide__arrow splide__arrow--next"
                                                style="background: transparent; right: -42px">
                                                <i class="fa-solid fa-chevron-right text-4xl"></i>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @if (count($regular_talks) > 0)
                                                @foreach ($regular_talks as $regular_talk)
                                                    <li class="splide__slide px-1.5 md:px-4">
                                                        <div class="splide__slide__container">
                                                            <a href="{{ $regular_talk->event_rsvp_link }}"
                                                                target="_blank">
                                                                <img data-src="{{ Storage::url('upcoming-event/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $regular_talk->event_thumbnail) }}"
                                                                    alt="{{ $regular_talk->event_alt }}"
                                                                    class="object-contain w-full lazyload">
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif

                                            @if (count($events) > 0)
                                                @foreach ($events as $event)
                                                    <li class="splide__slide px-1.5 md:px-4">
                                                        <div class="splide__slide__container">
                                                            <img data-src="{{ Storage::url('upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                                                                alt="{{ $event->event_alt }}"
                                                                class="object-cover w-full h-full lazyload">
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ((count($regular_talks) > 0 || count($events) > 0) && count($important_dates) > 0)
                            <hr class="mt-8 bg-white w-full h-[0.0625rem]">
                        @endif

                        {{-- More Date --}}
                        @if (count($important_dates) > 0)
                            <div class="flex flex-col items-center justify-between font-newprimary">
                                <div class="flex flex-col w-full py-6">
                                    <div class="splide splide-important-dates w-full" role="group">
                                        @if (count($important_dates) > 2)
                                            <div class="splide__arrows text-white">
                                                <button class="splide__arrow splide__arrow--prev"
                                                    style="background: transparent; left: -42px">
                                                    <i class="fa-solid fa-chevron-left text-4xl"></i>
                                                </button>
                                                <button class="splide__arrow splide__arrow--next"
                                                    style="background: transparent; right: -42px">
                                                    <i class="fa-solid fa-chevron-right text-4xl"></i>
                                                </button>
                                            </div>
                                        @endif
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                @foreach ($important_dates as $important_date)
                                                    <li class="splide__slide px-1.5 md:px-4 py-4">
                                                        <div class="splide__slide__container">
                                                            @if ($important_date->link)
                                                                <a href="{{ $important_date->link }}" target="_blank">
                                                                @else
                                                                    <div>
                                                            @endif
                                                            <div
                                                                class="relative py-2 md:py-3 {{ $important_date->link ? 'hover:scale-105 transform duration-300' : '' }}">
                                                                <div
                                                                    class="absolute left-0 bottom-0 top-0 flex flex-col px-2 w-20 md:w-24 gap-1">
                                                                    <div
                                                                        class="bg-newprimary w-full rounded-t-lg rounded-b-sm text-center text-white md:text-xs text-xs font-semibold py-1">
                                                                        {{ date('F', strtotime($important_date->date)) }}
                                                                    </div>
                                                                    <div
                                                                        class="bg-newprimary h-full w-full rounded-b-lg rounded-t-sm text-center text-white font-bold text-3xl md:text-4xl py-1 flex items-center justify-center">
                                                                        {{ date('d', strtotime($important_date->date)) }}
                                                                    </div>
                                                                </div>
                                                                <div class="flex">
                                                                    <div class="w-16"></div>
                                                                    <div
                                                                        class="rounded-xl bg-white py-4 pl-14 pr-8 w-full">
                                                                        <h3
                                                                            class="{{ strlen($important_date->title) > 20 ? 'md:text-base' : 'md:text-lg' }} text-sm font-bold text-dark text-ellipsis whitespace-nowrap h-4 md:h-6">
                                                                            {{ $important_date->title }}
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if ($important_date->link)
                                                                </a>
                                                            @else
                                                        </div>
                                                @endif
                                        </div>
                                        </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <x-button href="{{ url('/assets/files/upcoming-event/2024_merchandise_calendar_pdf.pdf') }}"
                title="Download For More Important Dates" type='secondary' bg-color="newyellow" color="dark"
                padding-x="4" is-rounded />
            <!-- <div class="w-full">
                                                <a href="{{ url('/assets/files/upcoming-event/2024_merchandise_calendar_pdf.pdf') }}"
                                                    target="_blank"
                                                    class="inline-block py-3 bg-red text-center text-white text-base px-6">
                                                    more important dates
                                                </a>
                                            </div> -->
            </div>
    @endif
    </div>
    </div>
    </div>
    </section>
    @endif

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="md:pt-8 md:pb-20 md:bg-dark">
        <div class="lg:px-10 xl:px-20 max-w-screen-xl mx-auto">
            <div
                class="flex md:flex-row flex-col items-center bg-dark md:bg-white md:rounded-3xl overflow-hidden md:mx-14">
                <div
                    class="flex flex-col items-center md:items-start justify-center w-full md:w-1/2 md:mx-16 md:order-1 order-2 bg-white py-6 px-6 -mt-6 md:mt-0 rounded-t-3xl md:rounded-none">
                    <p class="mb-6 font-bold text-dark text-center text-lg md:text-2xl md:max-w-xs md:text-start">
                        {{ __('pages/home.bottom') }}
                    </p>
                    <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                        title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="newprimary" padding-x="4"
                        is-rounded />
                </div>
                <div class="w-full md:w-1/2 md:order-2 order-1">
                    <img data-src="{{ asset('assets/img/home/cta_image.webp') }}" alt="bottom banner"
                        class="w-full h-full object-cover lazyload">
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== As Seen On ========================================== --}}
    @if (count($as_seen_on) > 0)
        <section class="md:py-10 py-8">
            <div class="new-main-container">
                <div class="flex items-center gap-4">
                    <h3
                        class="block font-bold text-sm md:text-2xl text-dark uppercase text-start font-newprimary md:w-[550px] w-[550px] relative">
                        As Seen On</h3>
                    <div class="relative flex overflow-x-hidden">
                        <div
                            class="flex items-center flex-nowrap justify-center gap-12 md:animate-marquee animate-marquee_mobile whitespace-nowrap">
                            @foreach ($as_seen_on as $item)
                                <img data-src="{{ Storage::url('as-seen/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->alt }}" class="md:w-2/12 w-1/3 h-full object-contain lazyload">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="md:pt-16 pt-10">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-bold text-section-title text-black text-center">WHAT OUR MENTEES & PARENTS
                SAY</h2>
        </div>
        <div class="new-main-container mb-12 md:my-12">
            <div class="splide splides" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list text-black px-8">
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
        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splides');

        const regular_talk = "{{ count($regular_talks) }}"
        const event = "{{ count($events) }}"
        const important_date = "{{ count($important_dates) }}"


        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 3,
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

        new Splide(splides[1], {
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


        new Splide(splides[2], {
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

        if (event > 0 || regular_talk > 0) {
            new Splide(splides[3], {
                type: 'slide',
                perPage: isSmallDevice || (parseInt(event) + parseInt(regular_talk) == 1) ? 1 : 2,
                padding: ((parseInt(event) + parseInt(regular_talk) == 1) && !isSmallDevice) ? '15%' : '0',
                perMove: 1,
                arrows: (!isSmallDevice && (parseInt(event) + parseInt(regular_talk) > 2)) ? true : false,
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
        }


        new Splide(splides[event > 0 || regular_talk > 0 ? 4 : 3], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 3,
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

        new Splide(document.querySelector('.splide-important-dates'), {
            type: 'slide',
            perPage: isSmallDevice ? 1 : 2,
            perMove: 1,
            arrows: (!isSmallDevice && important_date > 2) ? true : false,
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
