@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_test_preparation.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_test_preparation.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_test_preparation.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 bg-general-acad-header bg-cover bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-24 gap-6">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center md:text-left max-w-xl">ACADEMIC & TEST
                PREPARATION</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-sm">
                Discover our proven approach to enhance your academic transcript and maximize test scores for elite
                university admissions.
            </p>
        </div>
    </section>

    <section class="acad-program-our-programs">
        <div class="flex main-container w-full flex-col h-[70vh] pt-24" id="our-programs-wrapper">
            <h2 class="font-newprimary font-bold text-2xl md:text-6xl text-black text-center mb-20">OUR PROGRAMS</h2>
            <div class="relative h-full group">
                <div
                    class="button-left h-24 aspect-video absolute left-[25%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div
                    class="button-right h-24 aspect-video absolute left-[75%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div class="item item-back">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-3.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-left">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-4.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-right">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-2.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-front">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-1.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="main-container w-full h-[50vh] z-50 -mt-[5.5rem]">
            <div class="relative h-full w-full">
                <div class="item-text opacity-0 invisible">
                    <h2 class="font-bold text-4xl text-newprimary uppercase mb-4">Achieve Top Standardized Test Scores</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">Master common standardized tests such
                        as SAT/ACT and English Proficiency Tests such as TOEFL/IELTS with our proven tutoring class.</p>
                    <a href="{{ route('sat_program', app()->getLocale()) }}"
                        class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Start
                        Preparing Now</a>
                </div>
                <div class="item-text opacity-0 invisible">
                    <div class="flex items-start justify-evenly gap-4">
                        <div class="flex flex-col w-1/4">
                            <h2 class="font-bold text-xl text-newprimary uppercase text-center">Algorithm
                                & Programming
                            </h2>
                            <p class="text-center text-sm text-black">Make a mark on your university
                                applications with specialized tutoring
                                in algorithms and programming.</p>
                        </div>
                        <div class="flex flex-col w-1/4">
                            <h2 class="font-bold text-xl text-newprimary uppercase text-center">Subject Olympiad Preparation
                            </h2>
                            <p class="text-center text-sm text-black">Impress the world’s top universities by excelling in
                                STEM-focused subjects such as Math and Biology Olympiads with our special olympiad prep.</p>
                        </div>
                        <div class="flex flex-col w-1/4">
                            <h2 class="font-bold text-xl text-newprimary uppercase text-center">Algorithm
                                & Programming
                            </h2>
                            <p class="text-center text-sm text-black">Make a mark on your university
                                applications with specialized tutoring
                                in algorithms and programming.</p>
                        </div>
                    </div>
                    <a href="#academic-tutoring"
                        class="block mt-8 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Discover More Tutoring Programsw</a>
                </div>

                <div class="item-text opacity-0 invisible">
                    <div class="font-bold text-6xl text-center text-newprimary uppercase mb-4 max-w-4xl">Finally, Secure
                        Your Spot at a Top University!</div>
                    <a href="#academic-tutoring"
                        class="block mt-8 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Start
                        Your Journey Here</a>
                </div>
                <div class="item-text opacity-100 visible">
                    <h2 class="font-bold text-4xl text-newprimary uppercase mb-4">Maximize Your Academic Scores</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">Elevate your IBDP & Cambridge IGCSE
                        scores and unlock doors to prestigious universities with our academic tutoring, covering a variety
                        of subjects.</p>
                    <a href="{{ route('academic_tutoring', app()->getLocale()) }}"
                        class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Improve
                        Your Scores Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" id="academic-tutoring">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center">ACADEMIC TUTORING</h2>

            <p class="font-newprimary text-black text-base font-semibold text-center max-w-3xl mx-auto mt-2">
                With <span class="text-newprimary">core concept mastery</span> and <span
                    class="text-newprimary">internationally qualified tutors,</span> we prepare students with robust
                academic knowledge, enhanced problem-solving skills, and sharpened critical thinking abilities.
            </p>
            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-8">
                <div class="acad-program-acad-tutor-item acad-program-acad-tutor-active relative overflow-hidden">
                    <span>IBDP</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap w-1/2">
                            <li>Mathematics AA</li>
                            <li>Mathematics AI</li>
                            <li>Chemistry</li>
                            <li> Physics</li>
                            <li> Biology</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/2">
                            <li>ESS</li>
                            <li>Economics</li>
                            <li>English A: Lang & Lit</li>
                            <li> Business Management</li>
                            <li> EE/IA Guidance</li>
                        </ul>
                    </div>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-1.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                    <span>IB MYP</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Mathematics</li>
                            <li>Chemistry</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li> Physics</li>
                            <li> Biology</li>

                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li>English</li>
                        </ul>
                    </div>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-2.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                    <span>Cambridge
                        A-Levels</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Mathematics</li>
                            <li>Chemistry</li>
                            <li>Physics</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li> Biology</li>
                            <li> Computer Science</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Economics</li>
                            <li>English</li>
                        </ul>
                    </div>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-3.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                    <span>Cambridge
                        IGCSE</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Mathematics</li>
                            <li>Physics</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li> Biology</li>
                            <li>Chemistry</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Economics</li>
                            <li>English</li>
                        </ul>
                    </div>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-4.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-full mt-10">
                <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center mb-8">Our Special Formula
                </h2>
                <div class="flex flex-col md:flex-row w-full items-center justify-center gap-8">
                    <div class="w-full md:w-1/3 flex flex-col gap-4 justify-between">
                        <span class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-4 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Personalized tutoring, based on
                            the
                            student’s ability
                        </span>
                        <span class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-6 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">2-way student-tutor interaction
                            with fun and relaxing vibes
                        </span>
                        <span class="hover:scale-110 transition-all duration-500 bg-newprimary py-4 px-4 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Kickstarting major exploration
                        </span>
                    </div>
                    <div class="w-full md:w-1/4 hover:scale-95 transition-all duration-500 hover:rotate-2">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/special-formula.png') }}"
                            alt="EduALL Special Formula">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col gap-4 justify-between">
                        <span class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-4 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Entrance exam preparation with
                            a wide variety of textbooks, question banks, and complete past papers</span>
                        <span class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-6 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Student-tutor and parent report
                            to monitor and develop the student's progress</span>
                    </div>
                </div>
                <a href="{{ route('academic_tutoring', app()->getLocale()) }}"
                    class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Learn
                    More</a>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center max-w-2xl">IB EXTENDED ESSAY
                COACHING
                PROGRAM
            </h2>
            <p class="font-newprimary font-medium text-center text-lg md:text-2xl mt-1">Drill your Extended Essay writing
                process in 3 months
                with our holistic approach!</p>
        </div>
        <div class="mt-4 main-container">
            <div class="overflow-hidden bg-[#DEDEDE] p-1 md:p-2">
                <div
                    class="endless-scroll flex-inline gap-4 font-newprimary text-black text-lg md:text-3xl font-bold uppercase whitespace-nowrap">
                    <span class="inline">ONLINE</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Flexible Starting Time FOR IBDP, Cambridge A-Level & IGCSE Students</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Grade 9 - 12</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">ONLINE</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Flexible Starting Time FOR IBDP, Cambridge A-Level & IGCSE Students</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Grade 9 - 12</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">ONLINE</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Flexible Starting Time FOR IBDP, Cambridge A-Level & IGCSE Students</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Grade 9 - 12</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">ONLINE</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Flexible Starting Time FOR IBDP, Cambridge A-Level & IGCSE Students</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Grade 9 - 12</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">ONLINE</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Flexible Starting Time FOR IBDP, Cambridge A-Level & IGCSE Students</span>
                    <span class="text-newprimary mx-4">/</span>
                    <span class="inline">Grade 9 - 12</span>
                    <span class="text-newprimary mx-4">/</span>
                </div>
            </div>
        </div>
        <div class="mt-8 main-container flex flex-col items-center w-full">
            <div class="mt-8 flex flex-col w-full">
                <h2 class="font-newprimary font-bold text-3xl text-black text-center">TOPICS COVERED</h2>
                <div class="mt-8 md:mt-0 flex flex-wrap items-center">
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-end gap-2 md:order-1 order-1">
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-6 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to start and find the
                            right EE topic</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Construct a bulletproof
                            research questionc</span>
                    </div>
                    <div class="w-3/4 md:w-2/4 md:order-2 order-3 mx-auto hover:scale-95 transition-all duration-500"><img
                            src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s9-figure.webp') }}"
                            alt="EduALL figure" class="w-full h-full object-contain px-8"></div>
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-start gap-2 md:order-3 order-2">
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">Navigate the citation
                            style jungle</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-44 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Conquer proscrastination
                            by agile project management</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to write your first
                            draft</span>
                    </div>
                </div>
            </div>

            <a href="{{ route('sat_program', app()->getLocale()) }}"
                class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Learn
                More</a>
        </div>
    </section>

    <div class="py-24">
        <div class="main-container flex flex-col items-center">
            <div class="flex items-center justify-between gap-8">
            <div class="w-full md:w-1/2 flex flex-col">
                <h2 class="font-bold text-[40px] text-black uppercase leading-[2.75rem]">Standardized Test Preparation
                </h2>
                <p class="text-base text-justify text-black mt-4 md:mt-8">
                    Excel in SAT, ACT, IELTS, and TOEFL with our expert personalized tutoring, unlocking global academic
                    opportunities through comprehensive preparation strategies.
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-end">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/standart-test.png') }}"
                    alt="EduALL assets" class="w-full h-full max-w-sm object-contain">
            </div>
        </div>
        <a href=""
            class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Learn
            More</a>
        </div>
    </div>

    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-[40px] text-black text-center leading-[2.75rem] uppercase">Skillset Tutoring</h2>
            <div class="flex flex-col md:flex-row justify-evenly w-full gap-6 mt-8">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-1.png') }}"alt="EduALL Asset" class="w-full md:w-1/3 object-contain">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-2.png') }}"alt="EduALL Asset" class="w-full md:w-1/3 object-contain">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-3.png') }}"alt="EduALL Asset" class="w-full md:w-1/3 object-contain">
            </div>
            <p class="text-lg text-center text-black mt-4 md:mt-8 max-w-5xl">
                Elevate your unique passions through personalized skillset tutoring that focuses on the needs of every student. This is designed to elevate students’ academic profile, making their university application stand out.
            </p>
            <a href=""
            class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Learn
            More</a>
        </div>
    </section>


    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-16">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">WHAT OUR STUDENT SAY</h2>
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
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                    <div
                                        class="bg-[#F3F3F3] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500">
                                        <span class="absolute top-2 left-2 text-6xl font-normal">“</span>
                                        <div class="px-4 mt-4 text-sm text-justify font-semibold italic">
                                            {!! $testi->testi_desc !!}
                                        </div>
                                        <div class="mt-4 flex flex-col w-full">
                                            <div class="px-4 font-bold text-lg leading-5">
                                                {{ $testi->testi_name }}
                                            </div>
                                            <div class="px-4 text-xs font-semibold leading-3">
                                                {!! $testi->testi_subtitle !!}
                                            </div>
                                            <span class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
                                                {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
                                            </span>
                                            <a href="{{ route('testimonial', app()->getLocale()) }}"
                                                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all">Read
                                                more <i
                                                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a>
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
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        // OUR PROGRAMS
        // const item_back = document.querySelector('.acad-program-our-programs .item-back');
        // var item_left = document.querySelector('.acad-program-our-programs .item-left');
        // const item_right = document.querySelector('.acad-program-our-programs .item-right');
        // const item_front = document.querySelector('.acad-program-our-programs .item-front');
        const image_items = document.querySelectorAll('.acad-program-our-programs .item');
        const our_programs_button_left = document.querySelector('.acad-program-our-programs .button-left');
        const our_programs_button_right = document.querySelector('.acad-program-our-programs .button-right');
        const our_programs_wrapper = document.getElementById('our-programs-wrapper');
        const image_items_text = document.querySelectorAll('.acad-program-our-programs .item-text');

        const items_position = [
            ['item-back', 'item-left', 'item-right', 'item-front'],
            ['item-right', 'item-back', 'item-front', 'item-left'],
            ['item-front', 'item-right', 'item-left', 'item-back'],
            ['item-left', 'item-front', 'item-back', 'item-right'],
        ];

        var track_item = 0;
        var track_item_text = 3;
        our_programs_button_right.addEventListener("click", () => {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[(track_item + 1) % 4][it]);
            })

            track_item = (track_item + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item_text + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        });
        our_programs_button_left.addEventListener("click", () => {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[Math.abs((track_item - 1 + 4) % 4)][it]);
            })
            track_item = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        });

        const acad_tutor_items = document.querySelectorAll('.acad-program-acad-tutor-item');
        let s4ActiveIndex = 0;

        acad_tutor_items.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s4ActiveIndex) {
                    acad_tutor_items[s4ActiveIndex].classList.add('acad-program-acad-tutor-inactive');
                    acad_tutor_items[s4ActiveIndex].classList.remove('acad-program-acad-tutor-active');
                    acad_tutor_items[it].classList.remove('acad-program-acad-tutor-inactive');
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    s4ActiveIndex = it;
                }
            })
        });


        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
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
