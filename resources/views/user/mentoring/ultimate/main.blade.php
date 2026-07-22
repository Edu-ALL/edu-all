@extends('layout.user.main')
@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Admission Mentoring', 'url' => route('admissions_mentoring', [app()->getLocale()])],
            ['name' => 'Graduate', 'url' => url()->current()],
        ];
    @endphp
    <title>University Admissions Consultant | Ultimate Mentoring — EduALL</title>
    <meta name="title" content="University Admissions Consultant | Ultimate Mentoring — EduALL" />
    <meta name="description"
        content="Independent university admissions consultant in Indonesia. Get 1-on-1 mentoring, profile building, essay guidance, and study abroad support for students targeting top universities worldwide." />
    <meta name="keywords"
        content="Essay, personal statement university, konsultan pendidikan, extracurricular activities, motivational letter, uni shortlisting, study abroad, konsultant pendidikan, university application, university admission" />
@endsection

@push('style')
    <style>
        /* ==================== Marquee Animation Styles ==================== */
        .marquee-track {
            display: flex;
            gap: 40px;
            width: max-content;
        }

        /* Top row animation - moves left */
        .marquee-left {
            animation: marquee-left 15s linear infinite;
        }

        /* Bottom row animation - moves right */
        .marquee-right {
            animation: marquee-right 15s linear infinite;
        }

        @keyframes marquee-left {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes marquee-right {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        /* ==================== Mentee Slider Styles ==================== */
        #mentee-slider {
            padding: 40px 0;
        }

        #mentee-slider .splide__slide {
            opacity: .4;
        }

        #mentee-slider .splide__slide img {
            width: 100%;
            display: block;
            transition: transform .35s ease, opacity .35s ease;
            transform: scale(.6);
            transform-origin: center center;
        }

        #mentee-slider .splide__slide.is-active {
            opacity: 1;
        }

        #mentee-slider .splide__slide.is-active img {
            transform: scale(1);
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/home/2026/banner-dark.webp') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full main-container top-[27vh] md:top-[25vh]">
                <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                    itemprop="headline">
                    Ultimate University Admissions Mentoring Program
                </h1>
                <p class="text-white text-xl md:text-2xl mb-4 md:mb-5 md:text-start text-center max-w-3xl"
                    itemprop="description">
                    EduALL's all-inclusive university admissions mentoring program.
                </p>
                <p class="text-gray-400 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                    itemprop="description">
                    This personalized 1-on-1 journey combines passion exploration, profile building, and expert admissions
                    guidance to help students gain admission to their best-fit universities around the world.
                </p>
            </div>
        </div>
    </section>

    <div class="relative overflow-hidden">
        <img src="{{ asset('assets/img/mentoring/ultimate/bg.png') }}" alt="mentoring"
            class="absolute top-0 left-0 w-full h-auto">

        {{-- ==================== Our Score Section ==================== --}}
        <section class="pt-6 md:pt-10 new-main-container md:px-0 pb-[2rem] md:pb-[3rem] relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-newprimary">
                        1200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                        Students Mentored
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-newprimary">
                        100%
                    </p>
                    <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                        Acceptance Rate
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-newprimary">
                        $2.7M+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                        in Merit-Based Scholarships Secured
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-newprimary">
                        3500+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                        Letters of Acceptance from Top Universities
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-newprimary">
                        200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                        Top Global Universities Reached Worldwide
                    </p>
                </div>
            </div>
        </section>

        <section class="new-main-container my-10">
            <div class="bg-gradient-to-br from-newprimary to-dark text-white p-5 rounded-2xl shadow-xl">
                <div class="flex items-center justify-center h-36 gap-5">
                    <div class="flex items-center w-1/4 text-xl h-full px-10  text-center border-r border-white/30">
                        1-on-1 Mentoring
                    </div>
                    <div class="flex items-center w-1/4 text-xl h-full px-10  text-center border-r border-white/30">
                        Personalized Admissions Strategy
                    </div>
                    <div class="flex items-center w-1/4 text-xl h-full px-10  text-center border-r border-white/30">
                        All-Rounded Support
                    </div>
                    <div class="flex items-center w-1/4 text-xl h-full text-center px-10">
                        Mentors from Top Universities &amp; Industries
                    </div>
                </div>
            </div>
        </section>


        <section class="new-main-container my-20">
            <div class="max-w-2xl mx-auto text-center py-20">
                <h2 class="text-2xl font-normal mb-3">
                    About Ultimate University Admission Mentoring
                </h2>
                <h3 class="text-5xl font-semibold text-newprimary">
                    More Than an Admission Program: A Platform to Show Your Potential to the World
                </h3>

                <div class="relative h-[80vh] w-full mx-auto">
                    <img src="{{ asset('assets/img/mentoring/ultimate/1.png') }}" alt="Ultimate Mentoring"
                        class="w-[70%] absolute top-0 -left-20">
                    <img src="{{ asset('assets/img/mentoring/ultimate/2.png') }}" alt="Ultimate Mentoring"
                        class="w-[70%] absolute -top-10 right-0">
                </div>
            </div>
            <div class="max-w-3xl mx-auto -mt-20">
                <p class="text-gray-500 text-xl text-center">
                    As an independent university admissions consultant, EduALL complements a student's school experience
                    through personalized mentorship and strategic guidance.Our Ultimate Mentoring Program helps students
                    discover their strengths, explore future pathways, and build a distinctive profile for top universities
                    worldwide. We believe every student has unique potential that deserves to be developed into meaningful
                    achievements and real-world impact.
                </p>
            </div>
        </section>
    </div>

    <section class="new-main-container my-20">
        <div class="bg-[#E9F0F9] rounded-2xl shadow-xl">
            <div class="flex items-center">
                <div class="w-[30%] p-10">
                    <h2 class="text-[3.5rem] font-semibold text-newprimary uppercase">
                        What Will You Get?
                    </h2>

                    <img src="{{ asset('assets/img/mentoring/ultimate/mentoring.png') }}" alt="Mentoring"
                        class="w-full mt-5">
                </div>
                <div class="w-[70%] p-10 space-y-5">
                    <div class="flex items-start gap-5">
                        <div class="text-6xl font-light text-newprimary">1</div>
                        <div>
                            <h3 class="mb-1 text-2xl font-semibold text-newprimary">
                                Personalized Admission Assessment
                            </h3>
                            <p class="text-lg font-light">
                                A comprehensive assessment of your academic, personal, and extracurricular background to
                                identify your strengths and areas for growth.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="text-6xl font-light text-newprimary">2</div>
                        <div>
                            <h3 class="mb-1 text-2xl font-semibold text-newprimary">
                                Interest Exploration &amp; Profile Building
                            </h3>
                            <p class="text-lg font-light">
                                Strategic planning for school courses, high-impact internships, passion projects, and
                                meaningful experiences to strengthen your university profile.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="text-6xl font-light text-newprimary">3</div>
                        <div>
                            <h3 class="mb-1 text-2xl font-semibold text-newprimary">
                                Academic Advising Support
                            </h3>
                            <p class="text-lg font-light">
                                Expert guidance to align your high school curriculum with the expectations of leading
                                universities worldwide.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="text-6xl font-light text-newprimary">4</div>
                        <div>
                            <h3 class="mb-1 text-2xl font-semibold text-newprimary">
                                University Research &amp; Selection
                            </h3>
                            <p class="text-lg font-light">
                                In-depth research and guidance to identify universities that align with your academic
                                profile, interests, and long-term goals.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="text-6xl font-light text-newprimary">5</div>
                        <div>
                            <h3 class="mb-1 text-2xl font-semibold text-newprimary">
                                All-Round Application Guidance
                            </h3>
                            <p class="text-lg font-light">
                                Comprehensive support for personal statements, application essays, extracurricular profiles,
                                letters of recommendation, mock interviews, and standardized test preparation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20 relative">
        <img src="{{ asset('assets/img/mentoring/ultimate/bg-mentoring.png') }}" alt="mentoring"
            class="absolute top-0 left-0 w-full h-auto">
        <div class="w-full mx-auto">
            <h2 class="text-5xl font-semibold uppercase text-center text-newprimary">
                University Admissions Process
            </h2>

            <div class="max-w-5xl mx-auto">
                <div class="flex items-center h-[80vh]">
                    <div class="flex gap-6">
                        <!-- Card 1 -->
                        <div class="w-1/3 flex items-center">
                            <div
                                class="card group relative w-full rounded-2xl bg-white hover:bg-newprimary shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden">

                                <div class="relative pt-5 px-5">
                                    <h3
                                        class="title text-4xl font-light transition-all duration-300 ease-in-out group-hover:text-3xl group-hover:text-white">
                                        Initial <br> Consultation
                                    </h3>

                                    <div
                                        class="number absolute top-5 right-5 rounded-md bg-newprimary p-2 text-2xl text-white transition-all duration-300 ease-in-out group-hover:bg-white group-hover:text-newprimary group-hover:text-xl">
                                        1
                                    </div>
                                </div>

                                <div
                                    class="content mt-5 max-h-0 overflow-hidden opacity-0 transition-all duration-500 group-hover:max-h-[500px] group-hover:opacity-100 text-white">
                                    <p class="mb-4 px-5 pb-5 font-light text-gray-300">
                                        EduALL conducts an in-depth interview with students and parents to map out
                                        backgrounds, early goals, and aspirations.
                                    </p>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/consult.png') }}"
                                        alt="Initial Consultation"
                                        class="h-[200px] w-full object-cover object-center opacity-60">
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-1/3 flex items-center">
                            <div
                                class="card group relative w-full rounded-2xl bg-white hover:bg-newprimary shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden">

                                <div class="relative pt-5 px-5">
                                    <h3
                                        class="title text-4xl font-light transition-all duration-300 ease-in-out group-hover:text-3xl group-hover:text-white">
                                        Readiness <br> Assessment
                                    </h3>

                                    <div
                                        class="number absolute top-5 right-5 rounded-md bg-newprimary p-2 text-2xl text-white transition-all duration-300 ease-in-out group-hover:bg-white group-hover:text-newprimary group-hover:text-xl">
                                        2
                                    </div>
                                </div>

                                <div
                                    class="content mt-5 max-h-0 overflow-hidden opacity-0 transition-all duration-500 group-hover:max-h-[500px] group-hover:opacity-100 text-white">
                                    <p class="mb-4 px-5 pb-5 font-light text-gray-300">
                                        EduALL comprehensively evaluates the student's current academic standing and
                                        extracurricular profile to identify strengths, opportunities, and areas for growth.
                                    </p>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/assessment.png') }}"
                                        alt="Readiness Assessment"
                                        class="h-[200px] w-full object-cover object-center opacity-60">
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="w-1/3 flex items-center">
                            <div
                                class="card group relative w-full rounded-2xl bg-white hover:bg-newprimary shadow-xl transition-all duration-300 hover:shadow-2xl overflow-hidden">

                                <div class="relative pt-5 px-5">
                                    <h3
                                        class="title text-4xl font-light transition-all duration-300 ease-in-out group-hover:text-3xl group-hover:text-white">
                                        Aptitude <br> Test
                                    </h3>

                                    <div
                                        class="number absolute top-5 right-5 rounded-md bg-newprimary p-2 text-2xl text-white transition-all duration-300 ease-in-out group-hover:bg-white group-hover:text-newprimary group-hover:text-xl">
                                        3
                                    </div>
                                </div>

                                <div
                                    class="content mt-5 max-h-0 overflow-hidden opacity-0 transition-all duration-500 group-hover:max-h-[500px] group-hover:opacity-100 text-white">
                                    <p class="mb-4 px-5 pb-5 font-light text-gray-300">
                                        Students complete an assessment to discover their talents and career inclinations,
                                        providing data-driven insights for a personalized roadmap.
                                    </p>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/aptitude.png') }}"
                                        alt="Aptitude Test"
                                        class="h-[200px] w-full object-cover object-center opacity-60">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20 relative">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-5xl font-semibold uppercase text-center text-newprimary mb-10">
                How the Ultimate Mentoring Program Works
            </h2>
            <p class="text-gray-500 text-xl font-light text-center">
                University admissions are built over time. Here's how we help students discover their strengths, build
                meaningful experiences, and prepare competitive uni applications
            </p>
        </div>
        <div class="max-w-4xl mx-auto mt-10">
            <div class="flex gap-8">
                <!-- Content -->
                <div class="flex-1">
                    <!-- Top Phase List -->
                    <div class="">
                        {{-- Phase 1  --}}
                        <div class="phase-item bg-[#E2E8F2] text-newprimary rounded-t-2xl shadow-sm relative z-10">
                            <div class="phase-btn flex p-5 cursor-pointer relative z-10 pb-10">
                                <div class="w-40 font-bold text-newprimary text-xl">
                                    PHASE 1
                                </div>
                                <div class="text-gray-500 text-xl">
                                    Exploration & Profile Building
                                </div>
                            </div>

                            <div
                                class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary p-5 rounded-t-2xl relative z-0">
                                <div class="flex">
                                    <div class="w-[75%]">
                                        <div class="flex gap-10 mb-5">
                                            <div class="w-40 font-bold text-white text-xl border-r-2 border-gray-300">
                                                PHASE 1
                                            </div>
                                            <div class="text-gray-300 text-xl">
                                                Exploration & Profile Building
                                            </div>
                                        </div>

                                        <p class="text-white mb-5">
                                            Students begin by exploring their interests, strengths, and future aspirations.
                                            With guidance from EduALL mentors, they transform these interests into
                                            meaningful projects, leadership experiences, competitions, and achievements that
                                            strengthen their university profile. Every journey is personalized to reflect
                                            each student's unique goals and potential.
                                        </p>

                                        <p class="text-white mb-10">
                                            Students who wish to focus exclusively on this phase can explore our Exploration
                                            & Profile Building (EPB) program.
                                        </p>

                                        <a href="#" class="bg-white rounded-full py-2 px-5 shadow-md">
                                            Learn More About EPB
                                        </a>

                                        <ul class="space-y-5 mt-10 pb-10">
                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Exclusive Student Clubs
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Join subject-focused communities to explore your interests,
                                                        collaborate with like-minded peers, and develop leadership skills.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Academic Research Project
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Conduct and publish original research under the guidance of
                                                        experienced mentors, demonstrating intellectual curiosity and
                                                        academic excellence.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Personal Passion Project
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Transform your interests into meaningful projects that showcase
                                                        initiative, creativity, and real-world impact.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Project-Based Competitions
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Prepare for prestigious national and international competitions
                                                        through structured coaching and mentorship.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Professional Exposure
                                                        &amp;
                                                        Networking</h4>
                                                    <p class="text-gray-300 font-light">
                                                        Gain insights from industry professionals and explore potential
                                                        career pathways through exclusive networking opportunities.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">Digital Portfolio
                                                        Development</h4>
                                                    <p class="text-gray-300 font-light">
                                                        Build a professional portfolio that showcases your projects,
                                                        achievements, research, and leadership experiences.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 2  --}}
                        <div class="phase-item bg-[#d1def3] text-newprimary rounded-t-2xl shadow-sm -mt-5 relative z-10">
                            <div class="phase-btn flex p-5 cursor-pointer relative z-10 pb-10">
                                <div class="w-40 font-bold text-newprimary text-xl">
                                    PHASE 2
                                </div>
                                <div class="text-gray-500 text-xl">
                                    University Strategy & Planning
                                </div>
                            </div>

                            <div
                                class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary p-5 rounded-t-2xl relative z-0">
                                <div class="flex">
                                    <div class="w-[75%]">
                                        <div class="flex gap-10 mb-5">
                                            <div class="w-40 font-bold text-white text-xl border-r-2 border-gray-300">
                                                PHASE 2
                                            </div>
                                            <div class="text-gray-300 text-xl">
                                                University Strategy & Planning
                                            </div>
                                        </div>

                                        <p class="text-white mb-5">
                                            With a strong foundation of experiences and achievements in place, students
                                            translate their profile into a focused university admissions strategy. We
                                            identify the best academic pathways, target universities, and application plans
                                            aligned with each student's goals and strengths.
                                        </p>

                                        <ul class="space-y-5 mt-10 pb-10">
                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Personalized Roadmap
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Build a clear roadmap that aligns with students' academic goals,
                                                        personal development, and university application timelines.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Major Exploration &amp; Selection
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Helping students discover university majors that suit their
                                                        strengths, interests, and long-term career aspirations.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Activities &amp; Achievement Planning
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Advising students on how to strategically curate relevant
                                                        activities, leadership roles, and global competitions to build a
                                                        standout profile.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        University List Building
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Develop a balanced list of reach, target, and best-fit universities
                                                        based on your goals and profile.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 3  --}}
                        <div class="phase-item bg-[#b6d0f9] text-newprimary rounded-t-2xl shadow-sm -mt-5 relative z-10">
                            <div class="phase-btn flex p-5 cursor-pointer relative z-10 pb-10">
                                <div class="w-40 font-bold text-newprimary text-xl">
                                    PHASE 3
                                </div>
                                <div class="text-gray-500 text-xl">
                                    University Application
                                </div>
                            </div>

                            <div
                                class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary p-5 rounded-t-2xl relative z-0">
                                <div class="flex">
                                    <div class="w-[75%]">
                                        <div class="flex gap-10 mb-5">
                                            <div class="w-40 font-bold text-white text-xl border-r-2 border-gray-300">
                                                PHASE 3
                                            </div>
                                            <div class="text-gray-300 text-xl">
                                                University Application
                                            </div>
                                        </div>

                                        <p class="text-white mb-5">
                                            Navigating the complex application process and executing a targeted strategy to
                                            secure university acceptances and merit-based scholarships.
                                        </p>

                                        <ul class="space-y-5 mt-10 pb-10">
                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        University Application Strategy
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Finalize your university list and application plan, including Early
                                                        Action, Early Decision, Regular Decision, and other admissions
                                                        pathways.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Personal Statement &amp; Essay Guidance
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Excel in authentic and compelling essays and personal statements
                                                        through personalized brainstorming, feedback, and revision sessions.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Scholarship Applications
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Identify scholarship opportunities and receive guidance throughout
                                                        the preparation and application process.
                                                    </p>
                                                </div>
                                            </li>

                                            <li class="flex items-start gap-4">
                                                <div class="mt-1 text-white">
                                                    <i class="fa-regular fa-circle-check text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-lg font-semibold text-white">
                                                        Interview Preparation
                                                    </h4>
                                                    <p class="text-gray-300 font-light">
                                                        Build confidence through mock interviews, personalized feedback, and
                                                        communication coaching for university and scholarship interviews.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 4  --}}
                        <div class="phase-item bg-[#a3c2f4] text-newprimary rounded-2xl shadow-sm -mt-5 relative z-10">
                            <div class="phase-btn flex p-5 cursor-pointer relative z-10">
                                <div class="w-40 font-bold text-newprimary text-xl">
                                    PHASE 4
                                </div>
                                <div class="text-gray-500 text-xl">
                                    University Acceptance & Beyond
                                </div>
                            </div>

                            <div
                                class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary p-5 rounded-2xl relative z-0">
                                <div class="flex">
                                    <div class="w-[75%]">
                                        <div class="flex gap-10 mb-5">
                                            <div class="w-40 font-bold text-white text-xl border-r-2 border-gray-300">
                                                PHASE 4
                                            </div>
                                            <div class="text-gray-300 text-xl">
                                                University Acceptance & Beyond
                                            </div>
                                        </div>

                                        <p class="text-white mb-5">
                                            Celebrate university offers, evaluate your options, and prepare for the next
                                            chapter.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== Call to Action Section ==================== --}}
    <section class="relative z-10 h-auto overflow-hidden mt-12 md:mt-10">
        <img src="{{ asset('assets/img/mentoring/ultimate/bg-cta.png') }}" alt="EduALL"
            class="absolute top-0 left-0 w-full z-0">
        <div class="new-main-container relative z-10 flex justify-center">
            <div class="max-w-4xl p-6 md:p-10 rounded-xl">
                <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 items-center cta-grid">
                    <div class="w-full md:w-1/2 text-dark md:order-1 order-2">
                        <p class="text-xl md:text-3xl mb-3 md:mb-5">
                            Begin Your Path to Top Universities
                        </p>
                        <p class="text-xs md:text-sm text-gray-500">
                            Every great achievement starts with a single step. Reach out to our university admissions
                            consultants for a free initial consultation, and let's map out a personalized strategy to your
                            target universities.
                        </p>

                        <x-new-form title="Program" program-id="AAUP" lead-id="LS045" color="dark"
                            submit-title="Book Your Free Consultation" />
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:order-2 order-1">
                        <img src="{{ asset('assets/img/mentoring/ultimate/img-cta.png') }}" alt="EduALL"
                            class="w-full md:w-[90%] h-[250px] md:h-[80%] object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative bg-dark">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl font-semibold uppercase text-center text-white mb-10">
                The EduALL Framework
            </h2>
            <p class="text-gray-400 text-xl font-light text-center">
                From discovering your interests to securing university offers, our proven mentorship approach helps students
                build the experiences and skills. See how we transform your unique potential into a standout, world-class
                application.
            </p>
        </div>
        <div class="new-main-container mx-auto mt-10">
            <div class="flex pb-10">
                <div class="w-1/2 px-5">
                    <div class="group relative h-[10rem] rounded-xl overflow-hidden">
                        <!-- Front Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#6391CC] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-100 scale-100 translate-y-0
                            group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                            <div class="flex justify-between items-center h-full relative overflow-hidden">
                                <div class="p-5 w-[60%]">
                                    <h3 class="text-white text-4xl font-light">
                                        Interest & Career Exploration
                                    </h3>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-1.png') }}" alt="EduALL"
                                    class="absolute scale-[1.4] right-0 opacity-50">
                            </div>
                        </div>

                        <!-- Back Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#6391CC] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-0 scale-[1.02] translate-y-2
                            group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                            <div class="flex justify-between items-center h-full p-5">
                                <div class="w-[75%]">
                                    <h3 class="text-white text-xl font-semibold mb-2">
                                        Interest & Career Exploration
                                    </h3>

                                    <p class="text-white/70 text-base leading-relaxed">
                                        Discover your true passions through hands-on learning experiences and direct
                                        exposure to diverse professional fields.
                                    </p>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-1.png') }}" alt="EduALL"
                                    class="w-[20%] opacity-75">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-1/2 px-5">
                    <div class="group relative h-[10rem] rounded-xl overflow-hidden">
                        <!-- Front Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#898989] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-100 scale-100 translate-y-0
                            group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                            <div class="flex justify-between items-center h-full relative overflow-hidden">
                                <div class="p-5 w-[60%]">
                                    <h3 class="text-white text-4xl font-light">
                                        Profile Building
                                    </h3>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-2.png') }}" alt="EduALL"
                                    class="absolute scale-[1.4] right-0 opacity-50">
                            </div>
                        </div>

                        <!-- Back Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#898989] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-0 scale-[1.02] translate-y-2
                            group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                            <div class="flex justify-between items-center h-full p-5">
                                <div class="w-[75%]">
                                    <h3 class="text-white text-xl font-semibold mb-2">
                                        Profile Building
                                    </h3>

                                    <p class="text-white/70 text-base leading-relaxed">
                                        Turn your strengths into impactful initiatives and real-world achievements, creating
                                        an authentic profile suitable for top universities admissions.
                                    </p>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-2.png') }}" alt="EduALL"
                                    class="w-[20%] opacity-75">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2 px-5">
                    <div class="group relative h-[10rem] rounded-xl overflow-hidden">
                        <!-- Front Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#898989] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-100 scale-100 translate-y-0
                            group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                            <div class="flex justify-between items-center h-full relative overflow-hidden">
                                <div class="p-5 w-[60%]">
                                    <h3 class="text-white text-4xl font-light">
                                        Personal Statement & Essays
                                    </h3>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-3.png') }}" alt="EduALL"
                                    class="absolute scale-[1.4] right-0 opacity-50">
                            </div>
                        </div>

                        <!-- Back Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#898989] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-0 scale-[1.02] translate-y-2
                            group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                            <div class="flex justify-between items-center h-full p-5">
                                <div class="w-[75%]">
                                    <h3 class="text-white text-xl font-semibold mb-2">
                                        Personal Statement & Essays
                                    </h3>

                                    <p class="text-white/70 text-base leading-relaxed">
                                        Craft compelling personal statements and essays that highlight unique qualities,
                                        authentic voice, and future contributions.
                                    </p>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-3.png') }}" alt="EduALL"
                                    class="w-[20%] opacity-75">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-1/2 px-5">
                    <div class="group relative h-[10rem] rounded-xl overflow-hidden">
                        <!-- Front Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#6391CC] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-100 scale-100 translate-y-0
                            group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                            <div class="flex justify-between items-center h-full relative overflow-hidden">
                                <div class="p-5 w-[60%]">
                                    <h3 class="text-white text-4xl font-light">
                                        University Application Strategy
                                    </h3>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-4.png') }}" alt="EduALL"
                                    class="absolute scale-[1.4] right-0 opacity-50">
                            </div>
                        </div>

                        <!-- Back Card -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#6391CC] to-[#fff]
                            transition-all duration-500 ease-in-out
                            opacity-0 scale-[1.02] translate-y-2
                            group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                            <div class="flex justify-between items-center h-full p-5">
                                <div class="w-[75%]">
                                    <h3 class="text-white text-xl font-semibold mb-2">
                                        University Application Strategy
                                    </h3>

                                    <p class="text-white/70 text-base leading-relaxed">
                                        Execute a personalized admissions strategy that aligns your strengths with the
                                        standards of the world's most competitive universities.
                                    </p>
                                </div>

                                <img src="{{ asset('assets/img/mentoring/ultimate/icon-4.png') }}" alt="EduALL"
                                    class="w-[20%] opacity-75">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ==================== Universities Section ==================== --}}
    <section class="relative z-10 mt-20 pb-10">
        <div class="new-main-container px-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl font-semibold uppercase text-center text-newprimary mb-10">
                    Our Students Got Accepted To
                </h2>
            </div>
            <div class="overflow-hidden py-20 max-w-4xl mx-auto">
                <div class="marquee-track marquee-left">
                    @for ($i = 0; $i < 2; $i++)
                        <img src="{{ asset('assets/img/home/2026/univ/harvard.png') }}"
                            class="md:w-[150px] w-[150px] object-contain">
                        <img src="{{ asset('assets/img/home/2026/univ/stanford.png') }}"
                            class="md:w-[150px] w-[150px] object-contain">
                        <img src="{{ asset('assets/img/home/2026/univ/upenn.png') }}"
                            class="md:w-[150px] w-[150px] object-contain">
                        <img src="{{ asset('assets/img/home/2026/univ/ucl.png') }}"
                            class="md:w-[150px] w-[150px] object-contain">
                        <img src="{{ asset('assets/img/home/2026/univ/cambridge.png') }}"
                            class="md:w-[150px] w-[150px] object-contain">
                    @endfor
                </div>
            </div>

            <div class="max-w-4xl mx-auto text-center">
                <p class="text-base text-gray-500">
                    Join thousands of successful mentees who have secured their spots at top-tier universities worldwide.
                    From the Ivy League and Russell Group to leading institutions across Europe, Asia, and Australia, our
                    proven university admissions mentoring framework turns ambitious goals into acceptance letters.
                </p>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20 relative">
        <div class="w-full mx-auto relative overflow-hidden rounded-2xl shadow-sm">
            <img src="{{ asset('assets/img/mentoring/ultimate/bg-epb.png') }}" alt="EduALL"
                class="absolute w-full left-0 top-0 z-0">
            <div class="relative z-10 max-w-4xl mx-auto px-5 py-20">
                <h3 class="text-3xl font-semibold uppercase text-center text-white mb-5">
                    Not sure if you're ready for the full program?
                </h3>
                <p class="text-white/70 text-xl font-light text-center">
                    Start with EPB, our focused Exploration & Profile Building track for students building their foundation
                    from Grade 9.
                </p>

                <div class="flex justify-center">
                    <a href="#"
                        class="uppercase px-10 py-2 rounded-full bg-white text-newprimary mt-10 hover:bg-newprimary hover:text-white transition-all ease-in-out duration-300">
                        Learn More About Exploration
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Testimonial Section ==================== --}}
    <section class="bg-gradient-to-b from-white to-[#D8E8FF]  py-12 md:py-20">
        <div class="new-main-container relative z-10">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-2xl md:text-5xl font-semibold text-gray-800 uppercase mb-3 md:mb-4" itemprop="headline">
                    {{ __('pages/home.testimoni.title') }}
                </h2>
                <p class="text-gray-500 text-lg md:text-xl" itemprop="description">
                    {{ __('pages/home.testimoni.description') }}
                </p>
            </div>

            <div class="px-0 md:px-10">
                <div id="mentee-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/home/2026/Testimoni/Alumni - Cherish.webp') }}"
                                    class="rounded-lg shadow-sm w-full">
                            </li>

                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/home/2026/Testimoni/Alumni - Rachinta.webp') }}"
                                    class="rounded-lg shadow-sm w-full">
                            </li>

                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/home/2026/Testimoni/Alumni - tobias.webp') }}"
                                    class="rounded-lg shadow-sm w-full">
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="new-main-container py-20">
        <div class="flex items-center gap-10">
            <div class="w-[35%]">
                <div class="w-full h-[500px] overflow-hidden rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/img/mentoring/ultimate/anne.png') }}"
                        alt="h-full rounded-2xl shadow-sm object-cover object-bottom">
                </div>
            </div>
            <div class="w-[65%]">
                <h2 class="text-5xl text-newprimary font-light mb-20">
                    A Word from <br>
                    Our Head of Faculty
                </h2>
                <span>
                    <h3 class="text-3xl text-newprimary font-semibold mb-3">
                        "At EduALL, we believe
                    </h3>
                    <p class="text-xl">
                        the world needs more game changers. Through mentorship, exploration, and meaningful
                        experiences, we help students discover their potential and build a future they are excited to
                        pursue."
                    </p>
                </span>

                <h4 class="text-xl text-newprimary mt-10 font-semibold">
                    Debora Wibianne, M.A.
                </h4>
                <p class="text-lg text-newprimary">
                    University College London (UCL)
                </p>
            </div>
        </div>

    </section>

    {{-- ==================== FAQ Section ==================== --}}
    <section class="relative z-10 my-12 md:my-20">
        <div class="new-main-container px-4 md:px-5 lg:px-20 text-center">
            <h3 class="text-2xl md:text-4xl font-semibold leading-5 mb-3 md:mb-5" itemprop="headline">Frequently Asked
                Questions</h3>

            <div class="flex items-center mt-10 w-full gap-10">
                <div class="w-full md:w-[65%]">
                    <div class="accordion-group">
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5">
                                <span>When is the best time to start the mentoring program?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 pb-5 text-gray-600 md:text-start text-center">
                                    While we recommend starting as early as Grade 9 or 10 for comprehensive profile
                                    building, we tailor our
                                    programs to fit students at any stage, including Grade 11 and 12 intensive preparation.
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5">
                                <span>Is this program only for students applying to the US or UK?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 pb-5 text-gray-600 md:text-start text-center">
                                    Not at all! Our mentors have expertise in guiding applications to top universities
                                    across the globe,
                                    including Europe, Asia, Australia, and Canada.
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5">
                                <span>How often will I meet with my mentor?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 pb-5 text-gray-600 md:text-start text-center">
                                    Meeting frequencies are highly personalized based on your current program phase and
                                    upcoming application
                                    deadlines to ensure you always stay on track.
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5">
                                <span>Do you guarantee university acceptance?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 pb-5 text-gray-600 md:text-start text-center">
                                    While no ethical university admissions consultant can guarantee admission, our rigorous
                                    preparation,
                                    strategic profile building, and personalized personal statement guidance significantly
                                    maximize your
                                    competitive edge at top universities worldwide.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[35%]">
                    <p class="text-xl mb-3 font-semibold">
                        You have different questions? 
                    </p>
                    <p class="mb-5 text-black/60">
                        Our team will answer all your questions. We ensure a quick response.
                    </p>
                    <a href="#" class="bg-black px-10 py-2 text-white rounded-full">
                        Contact Support team
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.card');

            function openCard(card) {
                // Tutup semua card
                cards.forEach(c => {
                    c.style.backgroundColor = "#fff";

                    c.querySelector(".title").style.color = "";
                    c.querySelector(".title").style.fontSize = "";

                    const number = c.querySelector(".number");
                    number.style.backgroundColor = "";
                    number.style.color = "";

                    const content = c.querySelector(".content");
                    content.style.maxHeight = "0";
                    content.style.opacity = "0";
                });

                // Buka card aktif
                card.style.backgroundColor = "#1E3A8A"; // ganti dengan warna newprimary

                const title = card.querySelector(".title");
                title.style.color = "#fff";
                title.style.fontSize = "1.875rem"; // text-3xl

                const number = card.querySelector(".number");
                number.style.backgroundColor = "#fff";
                number.style.color = "#1E3A8A";

                const content = card.querySelector(".content");
                content.style.maxHeight = "500px";
                content.style.opacity = "1";
            }

            // Default buka card pertama
            openCard(cards[0]);

            // Hover membuka card
            cards.forEach(card => {
                card.addEventListener("mouseenter", () => {
                    openCard(card);
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const items = document.querySelectorAll(".phase-item");

            function openItem(item) {

                items.forEach(el => {

                    const content = el.querySelector(".phase-content");

                    content.style.maxHeight = "0px";
                    content.style.opacity = "0";
                    content.style.marginTop = "-2.5rem";

                    el.querySelector(".phase-btn").style.display = "flex";
                });

                const btn = item.querySelector(".phase-btn");
                const content = item.querySelector(".phase-content");

                btn.style.display = "none";

                content.style.maxHeight = content.scrollHeight + "px";
                content.style.opacity = "1";
                content.style.marginTop = "0";
            }

            // default buka phase pertama
            openItem(items[0]);

            items.forEach(item => {

                item.querySelector(".phase-btn").addEventListener("click", () => {
                    openItem(item);
                });

            });

        });
    </script>

    <script>
        // ==================== Mentee Slider (Splide) ====================
        // Initialize testimonial slider with autoplay
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#mentee-slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                interval: 4000,
                speed: 600,
                drag: false,
                arrows: true,
                pagination: true,
                breakpoints: {
                    1024: {
                        perPage: 2,
                    },
                    768: {
                        perPage: 1,
                    },
                },
            }).mount();
        });
    </script>

    <script>
        // ==================== Accordion Functionality ====================
        document.querySelectorAll(".accordion-group").forEach(group => {
            const buttons = group.querySelectorAll(".accordion-btn");

            buttons.forEach(btn => {
                btn.addEventListener("click", () => {
                    const content = btn.nextElementSibling;
                    const icon = btn.querySelector("span:last-child");

                    const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

                    // Close all accordion items in the current group
                    group.querySelectorAll(".accordion-content").forEach(item => {
                        item.style.maxHeight = "0px";
                    });

                    // Reset all icons
                    group.querySelectorAll(".accordion-btn span:last-child").forEach(item => {
                        item.textContent = "+";
                    });

                    // Open the clicked accordion item if it was previously closed
                    if (!isOpen) {
                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.textContent = "−";
                    }
                });
            });

            // Open the first accordion item by default
            if (buttons.length > 0) {
                const firstButton = buttons[0];
                const firstContent = firstButton.nextElementSibling;
                const firstIcon = firstButton.querySelector("span:last-child");

                firstContent.style.maxHeight = "400px";
                firstIcon.textContent = "−";
            }
        });
    </script>
@endpush
