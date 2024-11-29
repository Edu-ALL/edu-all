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
    <section class="h-[90%]">
        <div class="relative">
            @if ($banners->video_link)
                <video class="w-full md:h-[92vh] h-[92dvh] object-cover" autoplay loop muted>
                    <source
                        src="{{ asset('uploaded_files/banner-video/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->video_link) }}"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @elseif ($banners->image)
                <img loading="lazy"
                    src="{{ asset('uploaded_files/banner/' . $banners->updated_at->format('Y') . '/' . $banners->updated_at->format('m') . '/' . $banners->image) }}"
                    alt="{{ $banners->alt }}" class="w-full md:h-[92vh] h-[92dvh] object-cover">
            @endif
            <div class="absolute bottom-72 md:bottom-52 left-0 right-0 w-full main-container">
                <h1
                    class="font-bold text-4xl md:text-[52px] font-newprimary text-white text-center lg:text-left max-w-lg mx-auto lg:mx-0 md:leading-[3.5rem]">
                    Your Gateway to Top Universities & Dream Careers
                </h1>
            </div>
            <div class="absolute md:bottom-20 left-0 right-0">
                <div class="relative h-full">
                    <div
                        class="bg-newprimary mix-blend-multiply visible md:h-24 h-[36dvh]  absolute bottom-0 left-0 right-0">
                    </div>
                    <div
                        class="w-full main-container mx-auto absolute md:bottom-0 bottom-20 left-0 right-0 h-24 flex items-center">
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
                                                {{ __('pages/programs/admission_mentoring.book_now') }}
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
    <section class="py-24 bg-pathaway bg-cover bg-center">
        <div class="main-container md:py-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="col-span-6 md:col-span-4 flex flex-col justify-end">
                    <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll white logo"
                        class="max-w-[120px] md:max-w-[160px] w-full md:mx-0 mx-auto">
                    <h2 class="mt-4 font-bold text-3xl md:text-5xl text-white">Pathway to Excellence</h2>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Exploration</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        We guide our mentees in discovering their passions and interests through exposure to diverse
                        learning opportunities, professionals from various fields, and real-world challenges. We aim to
                        ignite curiosity and help students define their unique paths.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-4 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Profile Building</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        This is where we assist mentees in shaping a well-rounded academic and extracurricular persona. We
                        work together to identify strengths, achievements, and experiences that will set them apart,
                        creating a compelling and authentic profile for university applications.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-6 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Academic</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        We strategically prepare students for their chosen major by offering tailored guidance for
                        international curricula and specialized coaching for standardized tests. From course selection to
                        targeted improvement strategies, we empower students for success in university studies and
                        competitive admissions.
                    </p>
                </div>
                <div
                    class="col-span-6 md:col-span-6 backdrop-blur-md border-newyellow border rounded-lg px-5 py-5 flex flex-col items-start gap-3">
                    <h3 class="font-bold text-2xl text-newyellow">Writing</h3>
                    <p class="text-white font-newprimary text-sm text-justify leading-5 font-light">
                        Crafting a compelling narrative is key. We offer guidance on personal statements, essays, and other
                        written components of university applications. Through thoughtful storytelling and impactful
                        writing, we aim to showcase each student's unique qualities, aspirations, and contributions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Mentors ========================================== --}}
    <section class="pt-40 pb-24" id="mentors">
        <div class="new-main-container">
            <h1 class="font-bold text-section-title text-dark text-center">OUR MENTORS</h1>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full md:px-10 px-3 max-w-screen-2xl mx-auto">
                <div class="new-main-container">
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
                <div class="flex justify-center">
                    <a href="{{ route('mentor', app()->getLocale()) }}"
                        class="mb-8 bg-dark text-white font-medium text-lg py-2 px-14 hover:bg-newprimary hover:px-20 transition-all duration-150">
                        {{ __('pages/home.mentor_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Success Stories ========================================== --}}
    <section class="pt-24 pb-24">
        <div class="main-container flex flex-col items-center">
            <h1 class="font-bold text-section-title text-dark uppercase text-center max-w-4xl mx-auto">
                Empowering 700+ Minds for Global
                Success – From Exceptional Personal Projects!
                to Top Universities Worldwide!
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($success_stories as $item)
                    <div class="flex gap-6 justify-start @if ($loop->index > 1) flex-row-reverse @endif">
                        <img loading="lazy"
                            data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                            alt="{{ $item->thumbnail_alt }}" class="h-full w-1/2 object-contain">
                        <div class="bg-newyellow px-4 py-6 flex flex-col items-center justify-center mt-10">
                            {{-- Name --}}
                            <h2 class="font-semibold text-card-subtitle text-center">{{ $item->name }}</h2>
                            {{-- Bedge 1 --}}
                            <div class="text-newprimary text-card-small font-semibold text-center">
                                {!! $item->badge_1 !!}
                            </div>
                            <div class="mt-4 text-dark text-card-description font-semibold text-center leading-4">
                                {!! $item->badge_2 !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('success_stories', app()->getLocale()) }}"
                class="flex justify-center my-8 bg-dark text-white font-medium text-lg py-2 px-14 hover:bg-newprimary hover:px-20 transition-all duration-150">
                Read More
            </a>
        </div>
    </section>


    {{-- ========================================== Upcomming Events ========================================== --}}
    <section class="pt-40 pb-24">
        <div class="new-main-container">
            <h1 class="font-bold text-section-title text-dark uppercase text-center">Upcoming Events</h1>
            <div class="grid grid-cols-1 gap-3 mt-5">
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
                                                    <div class="splide__slide__container">
                                                        <a href="{{ $event->event_rsvp_link }}" target="_blank">
                                                            <img loading="lazy"
                                                                src="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                                                                alt="{{ $event->event_alt }}"
                                                                class="object-contain w-full">
                                                        </a>
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
                                                <div class="flex justify-between items-center border-b border-b-dark py-2 w-ful">
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

    {{-- ========================================== As Seen On ========================================== --}}
    @if (count($as_seen_on) > 0)
        <section class="pt-20 pb-32">
            <div class="main-container">
                <h1 class="font-bold text-section-title text-dark uppercase text-center">As Seen On</h1>
                <div class="relative flex overflow-x-hidden">
                    <div class="flex items-center flex-nowrap justify-between gap-12 mt-12 md:mt-24 animate-marquee whitespace-nowrap">
                        @foreach ($as_seen_on as $item)
                            <img loading="lazy"
                                src="{{ asset('uploaded_files/as-seen/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                alt="{{ $item->alt }}" class="md:w-1/4 w-1/3 h-full object-contain">
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-semibold text-2xl text-white text-center text-section-title">
                {{ __('pages/home.bottom') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="red" />
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-bold text-section-title text-black text-center">WHAT OUR MENTEES & PARENTS
                SAY</h2>
        </div>
        <div class="main-container mb-12 md:my-12">
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
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: isSmallDevice ? false : true,
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

        new Splide(splides[2], {
            type: 'slide',
            perPage: 1,
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

        new Splide(splides[3], {
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
    </script>
@endpush
