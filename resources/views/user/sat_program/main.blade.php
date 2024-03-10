@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/sat_program.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/sat_program.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/sat_program.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 bg-sat-prep-header bg-cover bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-24 gap-8">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center">SAT/ACT PREP</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                Unlock your full potential for the world’s top universities!
                Elevate your test scores with our expert mentors armed with proven strategies.
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="mt-8 bg-newprimary text-white font-newprimary text-lg font-semibold py-2 px-6 shadow-xl">Register
                Here</a>
        </div>
    </section>

    {{-- SECTION 1 --}}
    <section class="py-16">
        <div class="main-container max-w-screen-2xl mx-auto">
            <div class="flex flex-wrap justify-evenly w-full gap-4 uppercase">
                <div
                    class="flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-1.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4 class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-0.5 pl-4 pr-6">Private
                            & <br>
                            Semi-Private <br> Class</h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-2.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4 class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-1.5 pl-4 pr-6">Tailored
                            <br>
                            Learning
                            <br> Materials
                        </h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-3.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4 class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-1.5 pl-4 pr-6">
                            Weakness- <br>
                            Targeting
                            <br> Strategy
                        </h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-4.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4 class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-1.5 pl-4 pr-6">Official
                            <br> Mock
                            Test
                        </h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-36 aspect-square md:w-44 md:h-44 rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-5.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4 class="font-newprimary text-xs md:text-sm text-white font-bold h-full py-1.5 pl-4 pr-6">SAT/ACT
                            <br>
                            Expert-Made <br> Curriculum
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2 --}}
    <section class="py-16">
        <div class="main-container  max-w-screen-2xl mx-auto">
            <div class="flex flex-col items-center md:flex-row gap-x-16 gap-y-10">
                <div class="w-full md:w-2/5 flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-between">
                    <div class="flex flex-col items-center gap-4">
                        <div
                            class="w-32 h-32 md:w-44 md:h-36 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/mathematics.png') }}"
                                alt="EduALL icons" class="w-12 h-12 md:w-20 md:h-20 object-contain">
                        </div>
                        <span class="font-newprimary text-black text-lg">Mathematics</span>
                    </div>
                    <div class="flex flex-col items-center gap-4">
                        <div
                            class="w-32 h-32 md:w-44 md:h-36 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/physics.png') }}"
                                alt="EduALL icons" class="w-12 h-12 md:w-20 md:h-20 object-contain">
                        </div>
                        <span class="font-newprimary text-black text-lg">Physics</span>
                    </div>
                    <div class="flex flex-col items-center gap-4">
                        <div
                            class="w-32 h-32 md:w-44 md:h-36 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/chemistry.png') }}"
                                alt="EduALL icons" class="w-12 h-12 md:w-20 md:h-20 object-contain">
                        </div>
                        <span class="font-newprimary text-black text-lg">Chemistry</span>
                    </div>
                    <div class="flex flex-col items-center gap-4">
                        <div
                            class="w-32 h-32 md:w-44 md:h-36 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/biology.png') }}"
                                alt="EduALL icons" class="w-12 h-12 md:w-20 md:h-20 object-contain">
                        </div>
                        <span class="font-newprimary text-black text-lg">Biology</span>
                    </div>
                </div>
                <div class="w-full md:w-3/5 relative rounded-md overflow-hidden">
                    <div class="rounded-md bg-newred py-2 px-5 flex items-center absolute top-0 left-0 right-0"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 40%, 96% 100%, 0 100%);">
                        <h4 class="w-1/3 font-newprimary text-white text-xs md:text-base uppercase italic">
                            GRADE 10-12
                        </h4>
                        <h4 class="font-newprimary text-white text-xs md:text-base uppercase italic">
                            PRIVATE & SEMI-PRIVATE CLASS
                        </h4>
                    </div>
                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s2-figure.png') }}"
                        alt="EduALL Figure" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-5xl text-black text-center">YOUR JOURNEY TO SUCCESS</h2>
            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-12">
                <div class="sat-program-s3-item sat-program-s3-active relative overflow-hidden">
                    <span>Discover Your Path</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap">
                            <li>
                                Figure out your current level
                            </li>
                            <li>
                                Give you a feel of the actual SAT format
                            </li>
                        </ul>
                    </div>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s3-figure-1.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="sat-program-s3-item sat-program-s3-inactive relative overflow-hidden">
                    <span>In-Depth Analysis</span>
                    <div class="desc">
                        <ul class="xl:whitespace-nowrap">
                            <li>
                                Listing specific details on your SAT strengths and weaknesses
                            </li>
                        </ul>
                    </div>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s3-figure-2.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="sat-program-s3-item sat-program-s3-inactive relative overflow-hidden">
                    <span>Customized
                        Preparation
                        Calendar</span>
                    <div class="desc">
                        <ul class="xl:whitespace-nowrap">
                            <li>
                                Develop a plan to tackle your weaknesses while retaining your strengths
                            </li>
                        </ul>
                    </div>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s3-figure-3.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="sat-program-s3-item sat-program-s3-inactive relative overflow-hidden">
                    <span>Learn From Expert Tutors</span>
                    <div class="desc">
                        <ul class="xl:whitespace-nowrap">
                            <li>
                                Concept lectures on reading, writing and language, and math
                            </li>
                            <li>
                                Numerous weakness-targeting practice problems and personal feedback
                            </li>
                            <li>
                                Regular full SAT Practice test and its analysis to track your progress
                            </li>
                        </ul>
                    </div>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s3-figure-4.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 4 --}}
    <div class="py-16 flex flex-col items-center w-full">
        <div
            class="md:h-[70vh] w-full flex items-center justify-center bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s4-figure.png')] bg-cover md:bg-center bg-bottom">
            <div class="hidden md:flex w-full h-full items-center relative group max-w-screen-xl mx-auto">
                <div class="w-full flex main-container z-20 py-10">
                    <div class="flex flex-col items-start max-w-lg opacity-100 private-class transition-all duration-300">
                        <span
                            class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Ideal For Grade 12</span>
                        <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">PRIVATE CLASS</h3>
                        <p class="mt-2 sfont-newprimary text-white text-base">26 or 36 hours of one-on-one personalized
                            sessions
                            with our expert tutors.</p>
                        <ul>
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">TAILOR-MADE CURRICULUM</h6>
                                </div>
                                <p class="ml-8 text-sm">Individualized learning schedule designed to maximize your
                                    abilities.</p>
                            </li>
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">FLEXIBLE SCHEDULING</h6>
                                </div>
                                <p class="ml-8 text-sm">Start your journey instantly with adaptable class timings.</p>
                            </li>
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">TRACK YOUR PROGRESS</h6>
                                </div>
                                <p class="ml-8 text-sm">Monitor improvements through practice test results and receive
                                    on-demand parent updates.</p>
                            </li>
                        </ul>
                        <button
                            class="slide-button-left mt-8 px-8 py-2 bg-newyellow shadow-xl rounded-lg hover:px-10 transition-all">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 12H22.7222M22.7222 12L12.7222 2M22.7222 12L12.7222 22" stroke="#0000FF"
                                    stroke-width="3" />
                            </svg>
                        </button>
                    </div>
                    <div
                        class="flex w-full flex-col items-start max-w-lg opacity-0 -translate-x-2/3 semi-private-class transition-all duration-700">
                        <span
                            class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Ideal For Grades 10-11</span>
                        <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">SEMI-PRIVATE CLASS</h3>
                        <p class="mt-2 sfont-newprimary text-white text-base">40 or 56-hour sessions in small groups, a
                            maximum of 4 students with our SAT/ACT expert tutors.</p>
                        <ul>
                            <li class="font-newprimary text-white mt-2 w-full">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">CURATED & TESTED CURRICULUM</h6>
                                </div>
                                <p class="ml-8 text-sm">Carefully designed study plan that covers diagnostics, in-depth
                                    subject exploration, and official SAT/ACT practice tests.</p>
                                <div class="mt-2 w-full flex items-center justify-center">
                                    <a href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}" target="_blank"
                                        class="bg-newred font-semibold text-xs py-1 px-2">Discover the Full
                                        Curriculum Here</a>
                                </div>
                            </li>
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">LEARN FROM ANYWHERE</h6>
                                </div>
                                <p class="ml-8 text-sm">We will come to you. Engaging online classes are also available!
                                </p>
                            </li>
                            <li class="font-newprimary text-white mt-2">
                                <div class="flex items-center gap-3">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                            fill="white" />
                                    </svg>
                                    <h6 class="text-lg font-semibold">BONUS LEARNING MATERIAL</h6>
                                </div>
                                <p class="ml-8 text-sm">Access supplementary videos at your convenience for a deeper
                                    understanding. Watch anywhere, anytime.</p>
                            </li>
                        </ul>
                        <button
                            class="slide-button-right rotate-180 mt-8 px-8 py-2 bg-newyellow shadow-xl rounded-lg hover:px-10 transition-all">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 12H22.7222M22.7222 12L12.7222 2M22.7222 12L12.7222 22" stroke="#0000FF"
                                    stroke-width="3" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="slide-background absolute bg-newprimary w-[200%] h-full -translate-x-[68%] ease-in-out transition-all duration-1000"
                    style="clip-path: polygon(11% 0%, 100% 0%, 89% 100%, 0% 100%);"></div>
            </div>
            {{-- MOBILE --}}
            <div class="flex flex-col md:hidden h-full gap-y-8">
                <div class="flex flex-col items-center max-w-lg bg-newprimary main-container  py-12 ">
                    <span
                        class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                        style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Ideal For Grade 12</span>
                    <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl">PRIVATE CLASS</h3>
                    <p class="mt-2 sfont-newprimary text-white text-base text-center md:text-left">26 or 36 hours of
                        one-on-one personalized
                        sessions
                        with our expert tutors.</p>
                    <ul>
                        <li class="font-newprimary text-white mt-2">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">TAILOR-MADE CURRICULUM</h6>
                            </div>
                            <p class="ml-8 text-sm">Individualized learning schedule designed to maximize your
                                abilities.</p>
                        </li>
                        <li class="font-newprimary text-white mt-2">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">FLEXIBLE SCHEDULING</h6>
                            </div>
                            <p class="ml-8 text-sm">Start your journey instantly with adaptable class timings.</p>
                        </li>
                        <li class="font-newprimary text-white mt-2">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">TRACK YOUR PROGRESS</h6>
                            </div>
                            <p class="ml-8 text-sm">Monitor improvements through practice test results and receive
                                on-demand parent updates.</p>
                        </li>
                    </ul>
                </div>
                <div class="flex w-full flex-col items-center max-w-lg mt-12 bg-newprimary main-container  py-12 ">
                    <span
                        class="block font-newprimary text-lg md:text-lg font-bold text-white py-1 px-8 bg-black uppercase"
                        style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">Ideal For Grades 10-11</span>
                    <h3 class="mt-6 font-newprimary font-semibold text-white text-4xl text-center">SEMI-PRIVATE CLASS</h3>
                    <p class="mt-2 sfont-newprimary text-white text-base text-center">40 or 56-hour sessions in small
                        groups, a
                        maximum of 4 students with our SAT/ACT expert tutors.</p>
                    <ul>
                        <li class="font-newprimary text-white mt-2 w-full">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">CURATED & TESTED CURRICULUM</h6>
                            </div>
                            <p class="ml-8 text-sm">Carefully designed study plan that covers diagnostics, in-depth
                                subject exploration, and official SAT/ACT practice tests.</p>
                            <div class="mt-2 w-full flex items-center justify-center">
                                <a href="{{ asset('assets/files/sat-program/SAT CURRICULUM.pdf') }}" target="_blank"
                                    class="bg-newred font-semibold text-xs py-1 px-2">Discover the Full
                                    Curriculum Here</a>
                            </div>
                        </li>
                        <li class="font-newprimary text-white mt-2">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">LEARN FROM ANYWHERE</h6>
                            </div>
                            <p class="ml-8 text-sm">We will come to you. Engaging online classes are also available!
                            </p>
                        </li>
                        <li class="font-newprimary text-white mt-2">
                            <div class="flex items-center gap-3">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5 20C16.023 20 20.5 15.523 20.5 10C20.5 4.477 16.023 0 10.5 0C4.977 0 0.5 4.477 0.5 10C0.5 15.523 4.977 20 10.5 20ZM15.871 6.835C15.9178 6.78681 15.9544 6.72968 15.9786 6.66703C16.0028 6.60439 16.0142 6.5375 16.012 6.47037C16.0098 6.40324 15.9941 6.33725 15.9658 6.27632C15.9375 6.21539 15.8973 6.16078 15.8474 6.11575C15.7976 6.07072 15.7392 6.03619 15.6757 6.01423C15.6123 5.99227 15.545 5.98331 15.478 5.98791C15.411 5.99251 15.3456 6.01056 15.2857 6.04098C15.2259 6.07141 15.1727 6.11359 15.1295 6.165L9.14 12.7835L5.845 9.638C5.74912 9.54637 5.62077 9.49658 5.48819 9.49958C5.3556 9.50258 5.22963 9.55812 5.138 9.654C5.04637 9.74988 4.99658 9.87823 4.99958 10.0108C5.00258 10.1434 5.05812 10.2694 5.154 10.361L8.821 13.861L9.1925 14.216L9.537 13.835L15.871 6.835Z"
                                        fill="white" />
                                </svg>
                                <h6 class="text-lg font-semibold">BONUS LEARNING MATERIAL</h6>
                            </div>
                            <p class="ml-8 text-sm">Access supplementary videos at your convenience for a deeper
                                understanding. Watch anywhere, anytime.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-container">

            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class=" block mt-12 bg-black text-white font-newprimary text-sm md:text-lg font-semibold py-1 md:py-2 px-4 md:px-12">Take Your FREE
                SAT
                Diagnostic Test</a>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-5xl text-black text-center">WHY US?</h2>
            <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s5-table.png') }}"
                alt="EduALL Table" class="w-full h-full py-8">
        </div>
    </section>

    {{-- SECTION 6 --}}
    <section
        class="py-12 bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s6-background.png')] bg-newprimary bg-bottom bg-cover bg-blend-multiply">
        <div class="flex main-container flex-col items-center justify-center gap-y-8 md:flex-row">
            <div class="w-full md:w-1/4 flex flex-col items-center">
                <h3 class="text-newyellow font-bold text-[52px] leading-10">1500+</h3>
                <h4 class="text-white font-semibold text-xl uppercase mt-2">practice questions</h4>
                <span class="text-white text-sm">to take</span>
            </div>
            <div class="w-full md:w-1/4 flex flex-col items-center">
                <h3 class="text-newyellow font-bold text-[52px] leading-10">95%</h3>
                <h4 class="text-white font-semibold text-xl uppercase mt-2">students</h4>
                <span class="text-white text-sm">hit above average score</span>
            </div>
            <div class="w-full md:w-1/4 flex flex-col items-center">
                <h3 class="text-newyellow font-bold text-[52px] leading-10">90%</h3>
                <h4 class="text-white font-semibold text-xl uppercase mt-2">got accepted</h4>
                <span class="text-white text-base">to their dream universities</span>
            </div>
        </div>
    </section>

    {{-- SECTION 7 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-5xl text-black text-center">WHAT OUR STUDENT SAY</h2>
        </div>
        <div class="main-container my-12">
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full">
                                <div class="splide__slide__container h-full">
                                    <div
                                        class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                        <div class="flex flex-col">
                                            <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                alt="EduALL Testimony" class="w-7 mb-3 h-auto">
                                            <div class="font-primary text-sm text-white text-justify">
                                                {!! $testi->testi_desc !!}
                                            </div>
                                        </div>
                                        <div class="mt-4 flex flex-col">
                                            <div class="font-primary font-semibold text-base text-yellow">
                                                {{ $testi->testi_name }}
                                            </div>
                                            <div class="font-primary text-sm text-white">
                                                {!! $testi->testi_subtitle !!}
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

    {{-- SECTION 8 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                175+ students have already navigated to their dream universities with stellar test scores. Now, it's your
                turn!
            </h2>
            <a href="">
                <span class="px-4 md:px-12 py-3 font-bold font-newprimary text-sm md:text-base text-white text-center bg-newprimary">
                    Take my FREE SAT Diagnostic Test
                </span>
            </a>
        </div>
    </section>

    {{-- SECTION 9 --}}
    <section
        class="mt-16 py-12 bg-[url('../../../../../public/assets/img/academic_test_preparation/sat_program/new-asset/s9-background.png')] bg-cover bg-center">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-16 gap-8">
            <h2 class="font-newprimary font-bold text-3xl md:text-5xl text-white text-center md:text-left max-w-xl">ENGLISH PROFICIENCY
                TEST PREP</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                Excel in English, excel in life! Unlock top university doors with our TOEFL/IELTS Prep!
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="mt-8 bg-black text-white font-newprimary text-lg font-semibold py-2 px-6 shadow-xl">Register
                Here</a>
        </div>
    </section>

    {{-- SECTION 10 --}}
    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <div class="flex flex-col md:flex-row w-full mt-12 md:gap-12">
                <div class="w-full md:block md:w-1/2 rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s10-figure.png') }}"
                        alt="EduALL figure" class="h-full object-cover">
                </div>
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col pt-4  items-center md:items-start">
                        <span
                            class="bg-newprimary px-6 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg"
                            style="clip-path: polygon(7% 0%, 100% 0%, 93% 100%, 0% 100%);">Precision Teaching</span>
                        <p class="md:pl-6 font-newprimary text-black text-center md:text-start text-base mt-1">Tailored,
                            1-on-1 tutoring that cuts through the clutter, focusing on what you need to succeed.</p>
                    </div>
                    <div class="flex flex-col pt-4 items-center md:items-start">
                        <span
                            class="bg-newprimary px-6 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg"
                            style="clip-path: polygon(5% 0%, 100% 0%, 95% 100%, 0% 100%);">Mentorship from the Best</span>
                        <p class="md:pl-6 font-newprimary text-black text-center md:text-start text-base mt-1">With more
                            than 7 years, our tutors are more than teachers; they are here to guide you to the best result.
                        </p>
                    </div>
                    <div class="flex flex-col pt-4 items-center md:items-start">
                        <span
                            class="bg-newprimary px-6 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg"
                            style="clip-path: polygon(4% 0%, 100% 0%, 96% 100%, 0% 100%);">Smart Learning, Real
                            Results</span>
                        <p class="md:pl-6 font-newprimary text-black text-center md:text-start text-base mt-1">From
                            concept-based learning to strategic prep, our methods are designed for real understanding, not
                            just memorization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 11 --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-5xl text-black text-center">HOW WE WILL SUPPORT YOU</h2>
            <div class="flex flex-col md:flex-row items-center justify-center mt-12 gap-8">
                <div
                    class="flex flex-col polygon-shape w-1/2 md:w-1/4 aspect-square rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-1.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4
                            class="font-newprimary text-sm md:text-xl uppercase md:leading-6 text-white font-semibold h-full md:pt-2 pl-2 md:pl-4 pr-6">
                            Access to <br>
                            Practice <br> Test</h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-1/2 md:w-1/4 aspect-square rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-1.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4
                            class="font-newprimary text-sm md:text-xl uppercase md:leading-6 text-white font-semibold h-full md:pt-2 pl-2 md:pl-4 pr-6">
                            Parental <br> Progress to <br> Stay On Track</h4>
                    </div>
                </div>
                <div
                    class="flex flex-col polygon-shape w-1/2 md:w-1/4 aspect-square rounded-xl bg-newprimary group overflow-hidden">
                    <div class="overflow-hiden h-2/3">
                        <img src="{{ asset('assets/img/academic_test_preparation/sat_program/new-asset/s1-figure-1.png') }}"
                            alt="EduALL figure" class="w-full h-full object-cover bg-newprimary">
                    </div>
                    <div class="flex bg-newprimary h-full w-full">
                        <h4
                            class="font-newprimary text-sm md:text-xl uppercase md:leading-6 text-white font-semibold h-full md:pt-2 pl-2 md:pl-4 pr-6">
                            Flexible, <br> On-Demand <br> Schedule</h4>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center text-center mt-20">
                <h4 class="text-newred text-xl md:text-2xl font-bold uppercase">Top universities worldwide require high TOEFL/IELTS
                    scores.</h4>
                <h5 class="text-black text-xl md:text-2xl md:leading-[2.5rem]">Did you know the average accepted score at elite
                    institutions <br> is
                    <span class="text-3xl font-bold text-newprimary"> 7.5 </span>
                    for
                    <span class="text-newprimary font-bold uppercase">
                        IELTS
                    </span>
                    and
                    <span class="text-3xl font-bold text-newprimary"> 90 to 100 </span>
                    for
                    <span class="text-newprimary font-bold uppercase">TOEFL?</span>
                </h5>

            </div>
        </div>
    </section>

    {{-- SECTION 12 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                Seize this chance to stand out in university applications!
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                Transform your English skills into an opportunity for global education.
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}">
                <span
                    class="px-8 md:px-12 py-3 font-bold font-newprimary text-xs md:text-base text-white text-center bg-newprimary">
                    Book Your FREE Consultation Now
                </span>
            </a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        const s4_item = document.querySelectorAll('.sat-program-s3-item');
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s4ActiveIndex) {
                    s4_item[s4ActiveIndex].classList.add('sat-program-s3-inactive');
                    s4_item[s4ActiveIndex].classList.remove('sat-program-s3-active');
                    s4_item[it].classList.remove('sat-program-s3-inactive');
                    s4_item[it].classList.add('sat-program-s3-active');
                    s4_item[it].querySelector('span').classList.add('opacity-0');
                    s4_item[it].querySelector('span').classList.remove('opacity-100');
                    setTimeout(() => {
                        s4_item[it].querySelector('span').classList.remove('opacity-0');
                        s4_item[it].querySelector('span').classList.add('opacity-100');
                    }, 300);
                    s4ActiveIndex = it;
                }
            })
        });

        const slide_button_left = document.querySelector('.slide-button-left');
        const slide_button_right = document.querySelector('.slide-button-right');
        const private_class = document.querySelector('.private-class');
        const semi_private_class = document.querySelector('.semi-private-class');
        const slide_background = document.querySelector('.slide-background');

        if (!isMediumDevice) {
            slide_button_left.addEventListener('click', () => {
                private_class.classList.remove('opacity-100');
                private_class.classList.add('opacity-0');
                private_class.classList.add('translate-x-2/3');
                private_class.classList.remove('visible');
                private_class.classList.add('invisible');
                private_class.classList.remove('duration-1000')
                private_class.classList.add('duration-700')
                semi_private_class.classList.add('opacity-100');
                semi_private_class.classList.remove('opacity-0');
                semi_private_class.classList.remove('-translate-x-2/3');
                semi_private_class.classList.add('visible');
                semi_private_class.classList.remove('invisible');
                semi_private_class.classList.add('duration-1000')
                semi_private_class.classList.remove('duration-700')
                slide_background.classList.remove('-translate-x-[68%]');
                slide_background.classList.add('translate-x-[14%]');
            });

            slide_button_right.addEventListener('click', () => {
                private_class.classList.add('opacity-100');
                private_class.classList.remove('opacity-0');
                private_class.classList.add('visible');
                private_class.classList.remove('translate-x-2/3');
                private_class.classList.add('duration-1000')
                private_class.classList.remove('invisible');
                private_class.classList.remove('duration-700')

                semi_private_class.classList.remove('opacity-100');
                semi_private_class.classList.add('opacity-0');
                semi_private_class.classList.add('-translate-x-2/3');
                semi_private_class.classList.remove('visible');
                semi_private_class.classList.add('invisible');
                semi_private_class.classList.remove('duration-1000')
                semi_private_class.classList.add('duration-700')
                slide_background.classList.remove('translate-x-[14%]');
                slide_background.classList.add('-translate-x-[68%]');
            });
        }


        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
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
