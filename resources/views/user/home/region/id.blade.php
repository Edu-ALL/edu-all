@extends('layout.user.main')

@section('head')
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
        <div class="relative">
            {{-- <div class="absolute top-10 right-20 z-[999999]">
                <x-form title="Program" program-id="AAUP" lead-id="LS001" />
            </div> --}}

            @if ($banners->video_link)
                <video class="w-full md:h-[100vh] h-[100dvh] object-cover" autoplay loop muted>
                    <source
                        src="{{ asset('uploaded_files/banner-video/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->video_link) }}"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @elseif ($banners->image)
                <img loading="lazy"
                    src="{{ asset('uploaded_files/banner/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->image) }}"
                    alt="{{ $banners->alt }}" class="w-full md:h-[100vh] h-[100dvh] object-cover">
            @endif
            <div class="absolute bottom-72 md:bottom-52 left-0 right-0 w-full main-container">
                <h1
                    class="font-bold text-2xl md:text-[52px] font-newprimary text-white text-center lg:text-left max-w-lg mx-auto lg:mx-0 md:leading-[3.5rem]">
                    Your Gateway to Top Universities & Dream Careers
                </h1>
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
                                <h4 class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->accepatance }}
                                </h4>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    at Best-Fit Universities
                                </span>
                            </div>
                            {{-- Mentees --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->mentees }}
                                </h4>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    mentees
                                </span>
                            </div>
                            {{-- Scholarship --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->scholarship }}
                                </h4>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    in Scholarship Awards
                                </span>
                            </div>
                            {{-- SAT Score --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->sat_score }}
                                </h4>
                                <span class="font-light text-white text-banner-subdescription text-center">
                                    on SAT Score
                                </span>
                            </div>
                            {{-- Statisfaction Rate --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-bold text-white text-banner-description text-center">
                                    {{ $banners->statisfaction_rate }}
                                </h4>
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
            <div class="splide pt-12 max-w-5xl mx-auto" role="group">
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/programs.program_list') as $item)
                            <li class="splide__slide w-full pb-8 px-3">
                                <div class="splide__slide__container py-8 h-full w-full">
                                    <div
                                        class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                                        <h3 class="font-bold uppercase text-xl text-center">
                                            {!! $item['title'] !!}
                                        </h3>
                                        <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                            <img data-original="{{ asset('assets/img/home/our-programs/' . $item['img']) }}"alt=""
                                                class="h-full w-full object-cover">
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
                                        <x-button
                                            href="{{ url(app()->getLocale()) }}/programs/admissions-mentoring/{{ $item['link'] }}"
                                            title="{{ __('pages/programs/admission_mentoring.learn_more') }}"
                                            bg-color="newprimary" padding-y="1.5" />
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
                <div class="col-span-6 md:col-span-4 flex flex-col justify-end">
                    <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll white logo"
                        class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                    <h2 class="mt-4 font-bold text-3xl md:text-5xl text-white">Pathway to Excellence</h2>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Interest & Career Exploration</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Discovering interests and future aspiration through various learning experience and exposure to professional opportunities while fostering curiosity for students’ unique paths.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Profile <br/> Building</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Identify passions, strengths, achievements, and experiences that will set students apart, creating a compelling and authentic students’ profile for university applications.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-8 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">University Application Strategy</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Crafting personalized strategies for university applications, ensuring students effectively showcase their strengths, interests, and potential to stand out in competitive admissions processes.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Writing</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Developing impactful storytelling in personal statements and essays to showcase unique qualities and aspirations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Mentors ========================================== --}}
    <section class="md:py-16 py-10 bg-dark" id="mentors">
        <div class="new-main-container py-8">
            <h1 class="font-bold text-section-title text-white text-center">Let’s meet Our Mentors</h1>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full md:px-10 px-3 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
                    <div class="splide" role="group">
                        <div class="splide__arrows text-white">
                            <button class="splide__arrow splide__arrow--prev"
                                style="background: transparent; left: -24px">
                                <i class="fa-solid fa-chevron-left text-4xl"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next"
                                style="background: transparent; right: -24px">
                                <i class="fa-solid fa-chevron-right text-4xl"></i>
                            </button>
                        </div>
                        <div class="splide__track my-12">
                            <ul class="splide__list">
                                @for ($i = 0; $i < count($all_mentor); $i++)
                                    @php
                                        $mentor = $all_mentor[$i];
                                    @endphp                                 
                                    <li class="splide__slide w-full">
                                        <div class="splide__slide__container relative mx-2 font-secondary h-full">
                                            <div class="mentor-thumbnail w-full overflow-hidden rounded-3xl bg-[#D9D9D9] relative z-10 h-full">
                                                <span class="font-secondary absolute top-10 right-0 left-0 w-full h-full text-center text-2xl text-[#6D6D6D] font-semibold"> 
                                                    {{ explode(' ', trim($mentor->mentor_fullname))[0] }}
                                                </span>
                                                <img loading="lazy"
                                                    src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                    alt="{{ $mentor->thumbnail_alt ?? 'Default Alt Text' }}" class="h-full w-full object-cover">
                                            </div>
                                            <div class="previous-mentor-item w-full absolute inset-0 h-full z-0 rounded-3xl overflow-hidden">
                                                @php
                                                    $previous_mentor_index = $i > 0 ? $i - 1 : count($all_mentor) - 1;
                                                    $previous_mentor = $all_mentor[$previous_mentor_index];
                                                @endphp
                                                <div class="w-full h-full bg-[#1E1E1E] flex flex-col items-center justify-start px-4 py-6">
                                                    <div class="flex flex-col items-center">

                                                        <h2 class="text-center font-semibold font-secondary text-white text-2xl mt-4 leading-7">
                                                            {{ explode(' ', trim($previous_mentor->mentor_fullname))[0] }}
                                                        </h2>
                                                        <span class="text-white text-card-small text-center mt-2">
                                                            {!! $previous_mentor->mentor_graduation !!}
                                                        </span>
                                                    </div>
                                                    <div class="h-full flex flex-col justify-center flex-1">
                                                        <ul class="flex flex-col gap-2">
                                                            {{-- @foreach ($previous_mentor->mentor_value as $item)
                                                                <li class="flex items-start gap-4 mt-8">
                                                                    <div class="w-4 h-4">
                                                                        <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i> 
                                                                    </div>
                                                                    <h4 class="text-card-small font-medium text-white leading-5 mt-1">
                                                                        {{ $item->value }}
                                                                    </h4>
                                                                </li>
                                                            @endforeach --}}
                                                            
                                                            @if ($previous_mentor->value_1)
                                                                <li class="flex items-start gap-4">
                                                                    <div class="w-4 h-4">
                                                                        <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>
                                                                    </div>
                                                                    <h4 class="text-card-small font-medium text-white leading-5">
                                                                        {{ $previous_mentor->value_1 }}
                                                                    </h4>
                                                                </li>
                                                            @endif
                                                            @if ($previous_mentor->value_2)
                                                                <li class="flex items-start gap-4">
                                                                    <div class="w-4 h-4">
                                                                        <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>     
                                                                    </div>
                                                                    <h4 class="text-card-small font-medium text-white leading-5">
                                                                        {{ $previous_mentor->value_2 }}
                                                                    </h4>
                                                                </li>
                                                            @endif
                                                            @if ($previous_mentor->value_3)
                                                                <li class="flex items-start gap-4">
                                                                    <div class="w-4 h-4">
                                                                    <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>    
                                                                    </div>
                                                                    <h4 class="text-card-small font-medium text-white leading-5">
                                                                        {{ $previous_mentor->value_3 }}
                                                                    </h4>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <x-button href="{{ route('mentor', app()->getLocale()) }}"
                        title="Click for more details"
                        bg-color="newprimary"
                        class="mb-8"
                        padding-x="4" 
                        padding-y="2"
                        hover-bg-color="newprimary" 
                        hover-padding-x="20"
                        text-color="white"
                        font="medium"
                        text-size="lg"
                        transition="all duration-150" />
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Success Stories ========================================== --}}
    <section class="md:py-16 py-10 bg-dark">
        <div class="main-container flex flex-col items-center">
            <h1 class="font-bold text-section-title text-white uppercase text-center max-w-4xl mx-auto">
            OUR MENTEES’ STORIES & PROJECTS
            </h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-3xl py-12">
                @foreach ($success_stories as $item)
                    <div class="flex gap-4 justify-start relative rounded-3xl overflow-hidden max-w-[250px]">
                        <img loading="lazy"
                            data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->home_thumbnail) }}"
                            alt="{{ $item->home_thumbnail_alt }}" class="h-full object-contain">
                        <div>
                            <a href="{{ route('success_stories', app()->getLocale()) }}"
                                class="absolute bottom-0 left-1/4 transform -translate-x-1/4 mb-6 text-newyellow bg-black font-medium text-sm py-1 mx-4 rounded-full w-3/4 text-center">
                                Get to Know {{ explode(' ', trim($item->name))[0] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <x-button href="{{ route('success_stories', app()->getLocale()) }}"
                title="Click for more details"
                class="my-8"
                bg-color="newprimary"
                text-color="white"
                font-weight="medium"
                text-size="lg"
                padding-y="2"
                padding-x="4"
                hover-bg-color="newprimary"
                hover-padding-x="20"
                transition="all"
                duration="150" />
        </div>
    </section>


    {{-- ========================================== Upcomming Events ========================================== --}}
    <section class="md:py-16 py-10">
        <div class="new-main-container">
            <h1 class="font-bold text-section-title text-dark uppercase text-center">Upcoming Events</h1>
            <div class="grid grid-cols-1 gap-3 mt-12">
                {{-- Upcomming Event --}}
                <div class="flex flex-col max-w-4xl mx-auto">
                    {{-- Talk Sessions --}}
                    @if (count($regular_talks) > 0 || count($events) > 0)
                        <div class="flex flex-col items-center justify-between">
                            <div class="splide w-full" role="group">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @if (count($events) > 0)
                                            @foreach ($regular_talks as $regular_talk)
                                                <li class="splide__slide">
                                                    <div class="splide__slide__container">
                                                        <a href="{{ $regular_talk->event_rsvp_link }}" target="_blank">
                                                            <img loading="lazy"
                                                                src="{{ asset('uploaded_files/upcoming-event/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $regular_talk->event_thumbnail) }}"
                                                                alt="{{ $regular_talk->event_alt }}"
                                                                class="object-contain w-full">
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif

                                        @if (count($events) > 0)
                                            @foreach ($events as $event)
                                                <li class="splide__slide">
                                                    <div class="splide__slide__container max-h-96">
                                                        <img loading="lazy"
                                                            src="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                                                            alt="{{ $event->event_alt }}"
                                                            class="object-cover w-full h-full">
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="w-full">
                                <a href="{{ route('upcoming_events', app()->getLocale()) }}"
                                    class="w-full block py-3 bg-newprimary text-center text-white text-base">more
                                    events
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start">
                            <h4 class="text-newyellow text-lg">Talk Sessions</h4>
                            <p class="text-white border-b border-b-white">Not Available</p>
                        </div>
                    @endif

                    {{-- More Date --}}
                    @if (count($important_dates) > 0)
                        <div class="flex flex-col items-center justify-between mt-2 font-newprimary">
                            <div class=" h-max-[300px] flex flex-col w-full py-8">
                                <h4 class="text-dark text-lg">Important Dates</h4>
                                <ul class="mt-2 overflow-y-auto overflow-x-hidden">
                                    @foreach ($important_dates as $important_date)
                                        <li>
                                            @if ($important_date->link)
                                                <a href="{{ $important_date->link }}" target="_blank"
                                                    class="flex justify-between items-center border-b border-b-dark py-2 w-ful">
                                                    <h3 class="font-normal hover:text-blue-500 text-dark w-[75%]">
                                                        {{ $important_date->title }} <i class="fas fa-link ml-1"></i>
                                                    </h3>
                                                    <span class="hover:text-blue-500 text-dark w-[25%] text-end">
                                                        {{ date('M, d Y', strtotime($important_date->date)) }}
                                                    </span>
                                                </a>
                                            @else
                                                <div
                                                    class="flex justify-between items-center border-b border-b-dark py-2 w-ful">
                                                    <h3 class="font-normal text-dark w-[75%]">
                                                        {{ $important_date->title }}
                                                    </h3>
                                                    <span class="text-dark w-[25%] text-end">
                                                        {{ date('M, d Y', strtotime($important_date->date)) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="w-full">
                                <a href="{{ url('/assets/files/upcoming-event/2024_merchandise_calendar_pdf.pdf') }}"
                                    target="_blank"
                                    class="inline-block py-3 bg-red text-center text-white text-base px-6">
                                    more important dates
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start mt-10">
                            <h4 class="text-newyellow text-lg">Important Dates</h4>
                            <p class="text-dark border-b border-b-white">Not Available</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-[url('../../../../../public/assets/img/home/cta_image.png')] bg-right bg-contain bg-no-repeat">
        <div class="main-container">
            <div class="flex flex-col items-start w-full">
                <h2 class="mb-6 font-semibold text-newyellow text-start text-lg md:text-2xl md:max-w-xs">
                    {{ __('pages/home.bottom') }}
                </h2>
                <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                    title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="newprimary" padding-x="4" />
            </div>
        </div>
    </section>

    {{-- ========================================== As Seen On ========================================== --}}
    @if (count($as_seen_on) > 0)
        <section class="md:py-10 py-8">
            <div class="new-main-container">
                <div class="flex items-center gap-4">
                    <h1 class="block font-bold text-xl md:text-2xl text-dark uppercase text-center font-newprimary w-[300px] relative">As Seen On</h1>
                    <div class="relative flex overflow-x-hidden">
                        <div
                            class="flex items-center flex-nowrap justify-center gap-12 md:animate-marquee animate-marquee_mobile whitespace-nowrap">
                            @foreach ($as_seen_on as $item)
                                <img loading="lazy"
                                    src="{{ asset('uploaded_files/as-seen/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->alt }}" class="md:w-2/12 w-1/5 h-full object-contain">
                            @endforeach
                            @foreach ($as_seen_on as $item)
                                <img loading="lazy"
                                    src="{{ asset('uploaded_files/as-seen/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->alt }}" class="md:w-2/12 w-1/5 h-full object-contain">
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

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
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
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 3 : isVeryLargeDevice ? 4 : 4,
            perMove: 1,
            arrows: isSmallDevice ? false : true,
            lazyload: false,
            autoplay: true,
            interval: 3000,
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
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            lazyload: true,
            autoplay: false,
            interval: 3000,
            pagination: false,
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

        var mentorThumbnails = Array.from(document.getElementsByClassName('mentor-thumbnail'));
        var previousMentorItems = Array.from(document.getElementsByClassName('previous-mentor-item'));
        $(document).ready(function() {
            $('.mentor-thumbnail').hover(
                function() {
                    var index = mentorThumbnails.indexOf(this);
                    if (index < mentorThumbnails.length - 1) {
                        var nextThumbnail = mentorThumbnails[index + 1];
                        var previousItem = previousMentorItems[index];
                        $(nextThumbnail).css('opacity', 0); // Hide the next thumbnail
                        $(previousItem).clone().css('opacity', 1).insertAfter(this); // Show the previous item with full opacity
                    }
                },
                function() {
                    var index = mentorThumbnails.indexOf(this);
                    if (index < mentorThumbnails.length - 1) {
                        var nextThumbnail = mentorThumbnails[index + 1];
                        var previousItem = previousMentorItems[index];
                        $(nextThumbnail).css('opacity', 1); // Restore the next thumbnail opacity
                        $(previousItem).remove(); // Remove the cloned previous item
                    }
                }
            );
        });

        // new Splide(splides[3], {
        //     type: 'slide',
        //     perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
        //     perMove: 1,
        //     arrows: false,
        //     lazyload: false,
        //     autoplay: true,
        //     interval: 4000,
        //     pagination: false,
        // }).on('pagination:mounted', function(data) {
        //     // You can add your class to the UL element
        //     data.list.classList.add('splide__pagination--custom');
        //     data.list.classList.add('top-[90%]');

        //     // `items` contains all dot items
        //     data.items.forEach(function(item) {
        //         item.button.style.width = '7px';
        //         item.button.style.height = '7px';
        //         item.button.style.margin = '0 6px'
        //         item.button.style.backgroundColor = '#D9D9D9';
        //     });
        // }).mount();
    </script>
@endpush
