@extends('layout.user.main')
@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Our Story', 'url' => url()->current()],
        ];
    @endphp
    <title>About EduALL: Shaping the Next Generation of Game Changers</title>
    <meta name="title" content="About EduALL: Shaping the Next Generation of Game Changers" />
    <meta name="description"
        content="Meet EduALL, a Jakarta-based university admissions mentorship helping Indonesian students discover who they are and grow into the next generation of game changers." />
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

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/about/Our Story/1. Background Hero.webp') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full main-container top-[27vh] md:top-[20vh] overflow-hidden">

                <div class="bg-dark/60 rounded-2xl max-w-xl p-5 relative overflow-hidden py-10">
                    <img src="{{ asset('assets/img/about/2026/bg.png') }}" alt=""
                        class="w-full h-full absolute top-0 left-0 z-0">
                    <div class="relative z-10">
                        <p class=" bg-white rounded-full px-5 inline-block text-sm py-1 mb-5">
                            <i class="fa-solid fa-circle text-[10px] mr-2"></i>
                            ABOUT EDUALL
                        </p>
                        <h1 class="font-light text-[2rem] md:text-[3rem] text-white text-center lg:text-left md:leading-[3.5rem] mb-6 md:mb-5 leading-8 uppercase"
                            itemprop="headline">
                            Building the Next Generation of Game Changers
                        </h1>
                        <p class="text-gray-400 text-base md:text-lg mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                            itemprop="description">
                            Based in Jakarta, Indonesia, EduALL is an independent university admissions consultancy with
                            over a
                            decade of experience guiding students toward top universities worldwide. Having supported
                            thousands
                            of students and parents, we believe success is measured not only by university acceptances, but
                            also
                            by the confidence, purpose, and impact students develop along the way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Our Score Section ==================== --}}
    <section class="bg-newprimary">
        <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        1200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Students Mentored
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        3500+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        University Offers Received
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Universities Worldwide
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        10
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Years of Impact
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container my-10">
        <div class="flex gap-10 items-center">
            <div class="w-[30%]">
                <p class="mb-6">
                    Our Story
                </p>
                <p class="text-3xl mb-4">
                    EduALL Started <br>
                    with One Question.
                </p>
                <p class="mb-5 text-2xl border-l-2 pl-3">
                    "Where are all the other
                    Indonesians?"
                </p>
                <img src="{{ asset('assets/img/about/Our Story/3. kak dev.png') }}" alt=""
                    class="w-full rounded-xl shadow-md">
            </div>
            <div class="w-[70%]">
                <p class="text-lg mb-4  text-gray-500">
                    In 2015, our founder, Devi Kasih, was working at Goldman Sachs in Hong Kong after graduating from the
                    University of Pennsylvania. Surrounded by some of the world's brightest young professionals, she kept
                    asking herself one question.
                </p>
                <blockquote id="openModal"
                    class="cursor-pointer text-lg border-l-2 border-newprimary ps-3 mb-4 bg-blue-200 py-3 rounded-2xl px-10">
                    "Where are all the other Indonesians?"
                </blockquote>
                <p class="text-lg text-gray-500 mb-4">
                    It was never a talent problem. Indonesia is home to countless brilliant, capable youth. Yet too many
                    never get the opportunity to compete on the global stage because no one helps them discover what truly
                    sets them apart.
                </p>
                <p class="text-lg text-gray-500 mb-4">
                    Schools provide excellent academic foundations. Parents provide unwavering support. But many students
                    never experience the personalized mentorship that helps connect their strengths, interests, and
                    ambitions into a meaningful direction. EduALL was created to disrupt the conventional approach to
                    education by putting every student's individuality at the center of the journey.
                </p>
                <p class="text-lg text-gray-500">
                    What began as a small mentoring initiative has grown into one of Indonesia's leading university
                    admissions mentorship platforms, helping more than 1,200 students receive 3,500+ offers from 200+
                    universities worldwide.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-white to-blue-300 py-20 my-20">
        <div class="new-main-container">
            <p class="mb-6">
                What We Are Building
            </p>
            <p class="text-3xl mb-4">
                EduALL Vision & Mission
            </p>
            <div class="flex gap-10 items-stretch">
                <div class="w-[50%]">
                    <div class="bg-newprimary rounded-2xl shadow-md p-5 text-white h-full">
                        <p class="mb-3">
                            VISION
                        </p>
                        <p class="mb-5 text-2xl">
                            To be the leading partner for families
                            across Asia in shaping a generation of
                            compassionate game changers.
                        </p>
                        <img src="{{ asset('assets/img/about/Our Story/4. Vission Mission Foto.png') }}" alt=""
                            class="w-full rounded-2xl">
                    </div>
                </div>
                <div class="w-[50%]">
                    <div class="bg-white rounded-2xl shadow-md p-5 text-newprimary h-full">
                        <p class="mb-3">
                            MISSION
                        </p>
                        <p class="mb-5 text-3xl">
                            Three ways we make <br> the vision real
                        </p>
                        <ul>
                            <li class="flex items-center mb-3 text-xl">
                                <i class="fa-solid fa-circle text-[12px] mr-2"></i>
                                Maximize youth potential
                            </li>
                            <li class="flex items-center mb-3 text-xl">
                                <i class="fa-solid fa-circle text-[12px] mr-2"></i>
                                Connect them with real experience
                            </li>
                            <li class="flex items-center mb-3 text-xl">
                                <i class="fa-solid fa-circle text-[12px] mr-2"></i>
                                Empower mentors and educators
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <img src="{{ asset('assets/img/about/Our Story/5. Vission Mission Foto_2.png') }}" alt=""
                class="w-full rounded-2xl shadow-md mt-10">
        </div>
    </section>

    <section class="new-main-container py-20">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <p class="text-xl font-semibold text-newprimary mb-2 uppercase">
                    A Decade of Growth
                </p>
                <h2 class="text-4xl font-semibold text-newprimary uppercase mb-2">
                    The EduALL Journey
                </h2>
                <p class="text-2xl font-semibold text-newprimary">
                    10 Years of Shaping Game Changers
                </p>
            </div>
        </div>

        <div class="py-16 bg-white">
            <div class="max-w-5xl mx-auto px-6">
                <div class="relative">
                    <!-- Left Arrow -->
                    <button id="scrollLeftBtn"
                        class="absolute -left-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">
                        &#10094;
                    </button>

                    <!-- Horizontal Scroll -->
                    <div id="journeyTimeline" class="overflow-x-auto no-scrollbar pb-6 focus:outline-none" tabindex="0">

                        <div class="relative min-w-[3200px]">

                            <!-- Timeline Line -->
                            <div class="absolute top-[6.5rem] left-0 right-0 h-[3px] bg-[#1A2EA6]"></div>

                            <div class="grid grid-cols-9 gap-10 relative">

                                <!-- 2016 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div
                                            class="w-20 h-20 rounded-full overflow-hidden mx-auto border-4 border-[#1A2EA6] bg-white">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/1. 2016.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2016</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex">
                                                <span class="mr-2 text-[#1A2EA6]">•</span>
                                                The First Indonesian University Mentorship Program, ALL-in Eduspace Founded
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2017 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/2. 2017.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2017</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Penetrate
                                                International School Market in Jakarta</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Test Preparation
                                                Programs Launched</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Experiential
                                                Learning
                                                Piloted</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2018-2019 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/3. 2018-2019.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2018 - 2019</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Science
                                                Experiential
                                                Learning Launched</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Learning Platform
                                                Developed</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Business
                                                Expansion
                                                Through Client Referrals</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Business
                                                Experiential
                                                Learning Launched</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Mentor Team
                                                Expanded
                                            </li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>B2B Education
                                                Services Introduced</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2020-2021 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/4. 2020-2021.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2020 - 2021</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Online
                                                Experiential
                                                Learning Launched</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Release the
                                                Standardized Admissions Mentoring Framework</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Writing Courses
                                                Introduced</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Mentor &
                                                Leadership
                                                Team Expanded</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Strengthened
                                                Digital
                                                Learning Experience</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Continued
                                                National
                                                Growth</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2022 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/5. 2022.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2022</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>EduALL Academy
                                                Launched</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2023 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/6. 2023.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2023</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>STEM+ Wonderlab
                                                Launched Indonesia's First Education Makerspace</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>First Offline
                                                Mentees
                                                Showcase</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2024 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/7. 2024.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2024</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Branding &
                                                Business
                                                Transformation from ALL-In Eduspace to EduALL</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2025 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/8. 2025.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2025</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>60%+
                                                Organizational
                                                Growth</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>Released
                                                significantly more student impact projects, expanding the number of programs
                                                and
                                                initiatives that reached students</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- 2026 -->
                                <div class="relative text-center">
                                    <div class="relative z-10 inline-block">
                                        <div class="w-20 h-20 rounded-full overflow-hidden mx-auto">
                                            <img src="{{ asset('assets/img/about/Our Story/6. Journey Asset/9. 2026.png') }}"
                                                class="w-full h-full object-cover">
                                        </div>

                                        <div
                                            class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                        </div>
                                    </div>

                                    <div class="mt-12 text-left">
                                        <h3 class="font-semibold text-xl text-[#1A2EA6] mb-4 text-center">2026</h3>

                                        <ul class="space-y-2 text-sm text-gray-500">
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>The Cornerstone
                                                debuted as EduALL's new flagship student-centered event and forum, creating
                                                a
                                                space for students to share ideas and connect with industry leaders.</li>
                                            <li class="flex"><span class="mr-2 text-[#1A2EA6]">•</span>EduALL Rising
                                                Launched</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- Right Arrow -->
                    <button id="scrollRightBtn"
                        class="absolute -right-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-12 h-12 flex items-center justify-center hover:bg-gray-100">
                        &#10095;
                    </button>

                </div>



            </div>
        </div>
    </section>

    <section class="new-main-container py-20">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <p class="text-xl font-semibold text-newprimary mb-2 uppercase">
                    Community Voices
                </p>
                <h2 class="text-4xl font-semibold text-newprimary uppercase mb-2">
                    Stories from Our Game Changers
                </h2>
                <p class="text-lg font-semibold text-gray-500">
                    At EduALL, growth doesn't stop with our students. We believe building future game changers starts with a
                    team that never stops caring, learning, growing, and challenging themselves
                </p>
            </div>

        </div>
        <div class="py-16 bg-white">
            <div class="w-full mx-auto px-6">
                <div class="flex flex-wrap">
                    <!-- Card 1 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "To be honest, before EduALL, working was just 'work' to me, a repetitive routine
                                    without much
                                    heart in it. Working here changed that completely. My life feels so much richer and more
                                    colorful now, simply because what I do every day has genuinely become my passion. It's
                                    amazing
                                    to wake up and actually feel excited about what you do, and to finally believe that the
                                    small
                                    wins always matter."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/1. Grace.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Gracety Fani Oktaria</p>
                                    <p class="text-gray-500 text-sm">Education Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "Before joining EduALL, I saw work primarily as a place to learn and grow
                                    professionally, and I never expected to form such genuine connections with the people
                                    around me. Over time, the experiences and challenges we've shared changed that. I've
                                    been pushed to my limits more than a few times, and while those moments weren't always
                                    easy, they taught me to manage my emotions, navigate difficult situations, and become
                                    more resilient. Looking back, I've grown not just professionally, but in how I
                                    understand myself and work with others."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/3. Dhea.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Dhea Rahmasari</p>
                                    <p class="text-gray-500 text-sm">EduALL Mentor</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "When I first joined, I thought being a designer meant just working behind the scenes on
                                    visual execution. But at EduALL, I was given full trust to own projects end-to-end and
                                    step into leadership. Spending six years here hasn't just been about leveling up my
                                    design skills, it's been about growing alongside an incredible group of people, from a
                                    small team to where we are today. EduALL showed me how resilient and impactful the
                                    education industry truly is, while giving me a deeply caring space to learn and create."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/4. Maria.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Maria Marcella</p>
                                    <p class="text-gray-500 text-sm">Graphic Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "I used to think being a software engineer was mainly about building technology and
                                    solving technical challenges. But over time, I realized great technology is also about
                                    curiosity, collaboration, and genuinely caring about the people who use it. My journey
                                    at EduALL has helped me grow not only in my technical skills, but in how I communicate,
                                    understand different perspectives, and work with others to find the right solutions."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/2. Hafidz.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Hafidz Annur Fanany</p>
                                    <p class="text-gray-500 text-sm">IT System & Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "Being at EduALL gives me the flexibility to manage my time while continuing to grow,
                                    both professionally and personally. What I appreciate most is the supportive environment
                                    and coworkers who genuinely encourage one another. As a place that nurtures future
                                    changemakers, EduALL empowers its employees to keep learning, growing, and reaching
                                    their full potential too."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/5. Saeka.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Saeka Minami</p>
                                    <p class="text-gray-500 text-sm">C-Office / Strategic Support</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="w-1/3 p-5">
                        <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-10">
                            <div class="h-[360px]">
                                <p class="text-dark/60 text-sm">
                                    "Before I joined EduALL, I didn't really believe in myself. I often questioned whether I
                                    was good enough or capable of taking on bigger responsibilities. But from the moment I
                                    joined, people trusted me, encouraged me, and gave me opportunities to grow. That trust
                                    changed everything. It pushed me outside my comfort zone and helped me discover
                                    potential I never knew I had. Today I'm more confident, not just because of what I've
                                    achieved, but because EduALL believed in me when I was still learning to believe in
                                    myself. I've grown here both professionally and personally, and for that I'll always be
                                    grateful."
                                </p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <img src="{{asset('assets/img/about/Our Story/7. Foto Profile Testi/6. Nizzah.png')}}" alt=""
                                    class="w-[50px] h-[50px] object-cover rounded-full">
                                <div>
                                    <p class="font-bold">Nizzah Amalia Subchan</p>
                                    <p class="text-gray-500 text-sm">Exploration & Mentor Lead</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bpy-20 my-20">
        <div class="new-main-container">
            <div class="flex gap-10 items-center">
                <div class="w-[50%]">
                    <p class="mb-3">
                        The People
                    </p>
                    <p class="text-4xl mb-3 uppercase font-semibold">
                        Behind EduALL
                    </p>
                    <p class="text-gray-500 text-lg mb-5">
                        Behind every mentorship journey is a team of mentors, experts, and
                        professionals committed to helping youth discover their potential and
                        pursue meaningful opportunities.
                    </p>
                    <a href="#" class="bg-newprimary text-white rounded-lg px-5 py-2">
                        Meet Our Team
                    </a>
                </div>
                <div class="w-[50%]">
                    <img src="{{asset('assets/img/about/Our Story/8. Foto Behind EduALL.png')}}" alt="EduALL" class="w-full rounded-2xl shadow-md">
                </div>
            </div>
        </div>
    </section>

    {{-- Modal  --}}
    <div id="modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-[999]">
        <div class="bg-[#EFF0F0] rounded-xl shadow-lg w-11/12 max-w-5xl p-6 h-[90vh] overflow-auto">
            <div class="flex justify-end items-center">
                <button id="closeModal" class="text-gray-500 hover:text-red-500 text-2xl leading-none">
                    &times;
                </button>
            </div>

            <div class="py-4 px-20">
                <p class="text-newprimary text-center mb-2 font-light uppercase">
                    A Letter from Our Founder
                </p>

                <h3 class="text-6xl text-center text-newprimary mb-10 font-normal">
                    A
                    <i class="font-[playfair]">Letter</i> <br>
                    from Our Founder
                </h3>

                <div class="flex gap-10">
                    <div class="w-1/2">
                        <img src="{{asset('assets/img/about/Our Story/9. Foto Letter From our Founder.png')}}" alt="EduALL" class="w-full mb-5">

                        <p class="text-2xl italic text-newprimary mb-5">
                            <strong>
                                "When I was sitting in my office in Hong Kong, I kept
                            </strong>
                            asking
                            <strong>
                                myself the same
                            </strong>
                            question.
                            <strong>
                                Where are all
                            </strong>
                            the Indonesians?"
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            I was working at Goldman Sachs and had studied at the University of Pennsylvania. I was in rooms
                            that the world's most ambitious young people spent years trying to enter. Yet Indonesians,
                            brilliant and capable young people I had grown up around, were almost nowhere to be found.
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            The students who thrived weren't simply the ones with the best grades or strongest resumes. They
                            knew who they were. They understood what they cared about, what they wanted to build,
                            and why. When asked why they chose their university, major, or path, they had a real answer. I
                            was
                            fortunate to have parents who helped me find that passion early. Most young Indonesians
                            never get that chance.
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            In ten years of doing this work, I've learned that students who find their best-fit university
                            are
                            rarely the ones chasing prestige alone. They are the ones who understand three things: who they
                            are, what they're capable of, and the impact they want to make.
                        </p>
                    </div>
                    <div class="w-1/2">
                        <p class="text-2xl italic text-newprimary mb-5">
                            <strong>That's what EduALL is</strong>
                            designed
                            <strong>to do.</strong>
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            We start early, helping students build self-awareness and confidence. Through real projects with
                            real stakes, they develop resilience, purpose, and proof of what they can achieve. By the time
                            university applications begin, they are not trying to make up a story. They are already living
                            one.
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            The result isn't just an acceptance letter. It's a young person, full of dreams and purpose, who
                            chooses the right university for the right reasons and is ready to thrive when they arrive.
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            To the student reading this, you are not here to become what others expect you to be. You are
                            here to discover who you are and build something meaningful with it. That journey is harder than
                            achieving a high test score and longer than writing a strong personal statement. But it is the
                            work that will matter most in a world that is constantly changing.
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            To the parent reading this, I understand the uncertainty you carry. The pressure your child
                            faces. The fear that one wrong decision could shape their future. Here's what I can promise you:
                            a child
                            who knows who they are will always find their way. They choose the right university because they
                            know what they're looking for. They choose the right major because they understand what matters
                            to them. And they thrive not because someone told them what to do, but because they learned how
                            to make decisions with confidence and purpose.
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            That is the certainty we offer. Not a specific name on an acceptance letter, but the person who
                            earns it. We cannot design your child's future for them. But we can help them design it
                            themselves.
                        </p>
                        <p class="text-2xl italic text-newprimary">
                            <strong>
                                That's what EduALL has always been for:
                            </strong>
                            hand in hand, building generations of Game Changers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const timeline = document.getElementById("journeyTimeline");

            document.getElementById("scrollLeftBtn").addEventListener("click", () => {
                timeline.scrollBy({
                    left: -500,
                    behavior: "smooth"
                });
            });

            document.getElementById("scrollRightBtn").addEventListener("click", () => {
                timeline.scrollBy({
                    left: 500,
                    behavior: "smooth"
                });
            });
        });
    </script>



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

    <script>
        const modal = document.getElementById("modal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");
        const cancelBtn = document.getElementById("cancelBtn");

        openModal.addEventListener("click", () => {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        });

        function hideModal() {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }

        closeModal.addEventListener("click", hideModal);
        cancelBtn.addEventListener("click", hideModal);

        // Tutup modal ketika klik area luar
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                hideModal();
            }
        });
    </script>
@endpush
