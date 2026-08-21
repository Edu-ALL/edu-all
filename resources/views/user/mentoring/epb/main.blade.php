{{-- ============================================================= --}}
{{-- EPB (Exploration & Profile Building) Mentoring Page --}}
{{-- ============================================================= --}}
@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => __('pages/mentoring/epb.breadcrumbs.home'), 'url' => url('/' . app()->getLocale())],
            ['name' => __('pages/mentoring/epb.breadcrumbs.program'), 'url' => '#'],
            ['name' => __('pages/mentoring/epb.breadcrumbs.mentoring'), 'url' => url()->current()],
        ];
    @endphp

    {{-- Page Title and Meta Tags --}}
    <title>{{ __('pages/mentoring/epb.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/mentoring/epb.meta_title') }}" />
    <meta name="description" content="{{ __('pages/mentoring/epb.meta_description') }}" />
    <meta name="keywords" content="{{ __('pages/mentoring/epb.meta_keywords') }}" />
@endsection

@push('style')
    <style>
        /* ==================== Project Slider Styles ==================== */
        #project-showcase .splide__slide {
            opacity: .4;
        }

        #project-showcase .splide__slide .card {
            transform: scale(.6);
            transform-origin: center center;
            will-change: transform, opacity;
        }

        #project-showcase {
            padding: 20px 0;
        }

        th,
        td {
            border: 0 !important;
        }

        /* ==================== Student Club Cards Active State ==================== */
        .pathway-card.active {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: translateY(-4px);
            padding: 1rem;
            height: 380px;
            background: linear-gradient(to bottom, #1E3A8A, #000000);
        }

        .pathway-card.active .text-5xl {
            display: none;
        }

        .pathway-card.active .bg_image {
            display: none;
        }

        .pathway-card.active .group-hover\:block {
            display: block;
        }

        .pathway-card.active .absolute.bottom-10 {
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .pathway-card.active .text-\[\#0B1B7A\] {
            color: white;
        }

        .pathway-card.active .text-gray-800 {
            color: white;
        }

        .pathway-card.active .opacity-0 {
            opacity: 100;
            transform: translateY(0);
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Full-screen hero banner with title and description --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/mentoring/epb/1. EPB Background Hero.png') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh]">
                <div class="new-main-container">
                    <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                        itemprop="headline">
                        {!! __('pages/mentoring/epb.banner.title') !!}
                    </h1>

                    <p class="text-gray-300 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-2xl"
                        itemprop="description">
                        {{ __('pages/mentoring/epb.banner.description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Our Score Section ==================== --}}
    {{-- Statistics and achievements counter --}}
    <section class="relative z-10 bg-[#00003F]">
        <div class="pt-3 md:pt-5 new-main-container md:px-0">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                @foreach (__('pages/mentoring/epb.scores') as $score)
                    <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                        <p class="text-lg md:text-[25px] font-bold text-white">
                            {{ $score['value'] }}
                        </p>
                        <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                            {{ $score['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Program Features Section ==================== --}}
    {{-- Four key features: 1-on-1 Mentoring, Strategic Roadmap, Well-Rounded Support, 100+ Certificates --}}
    <section class="new-main-container my-10" aria-label="Program Features">
        <div class=" text-newprimary p-5">
            <div class="flex flex-col md:flex-row items-start justify-center gap-5">
                <div class="px-5 flex justify-center">
                    <img src="{{ asset('assets/img/mentoring/epb/epb-1.png') }}"
                        alt="{{ __('pages/mentoring/epb.features.0') }} at EduALL" class="w-full rounded-2xl shadow-xl"
                        loading="lazy">
                </div>

                <div class="px-5 flex justify-center">
                    <img src="{{ asset('assets/img/mentoring/epb/epb-2.png') }}"
                        alt="{{ __('pages/mentoring/epb.features.1') }} for University Applications"
                        class="w-full rounded-2xl shadow-xl" loading="lazy">
                </div>

                <div class="px-5 flex justify-center">
                    <img src="{{ asset('assets/img/mentoring/epb/epb-3.png') }}"
                        alt="{{ __('pages/mentoring/epb.features.2') }} for Student Development"
                        class="w-full rounded-2xl shadow-xl" loading="lazy">
                </div>

                <div class="px-5 flex justify-center">
                    <img src="{{ asset('assets/img/mentoring/epb/epb-4.png') }}"
                        alt="{{ __('pages/mentoring/epb.features.3') }} Achieved by EduALL Students"
                        class="w-full rounded-2xl shadow-xl" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Program Overview Section ==================== --}}
    {{-- Program description with accordion for key features --}}
    <section class="new-main-container py-10" aria-label="Program Overview">
        <div class="flex flex-col md:flex-row items-start gap-10">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl md:text-5xl font-normal mb-5 uppercase">
                    {!! __('pages/mentoring/epb.overview.title') !!}
                </h2>
                <p class="text-dark/50 text-lg mb-10">
                    {{ __('pages/mentoring/epb.overview.description') }}
                </p>

                <a href="https://bit.ly/eduall-contactus" class="bg-dark text-white py-2 px-5 rounded-xl">
                    {{ __('pages/mentoring/epb.overview.cta') }}
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="w-full md:w-1/2">
                <div class="accordion-group">
                    @foreach (__('pages/mentoring/epb.accordion') as $index => $item)
                        <div class="border rounded-2xl overflow-hidden mb-3">
                            <button
                                class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5 text-xl">
                                <span>{{ $item['title'] }}</span>
                                <span class="text-xl md:text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    {{ $item['content'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <a href="#impact-project"
                        class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5 text-xl rounded-2xl">
                        <span>Impact Project</span>
                        <span class="text-xl md:text-2xl transition-all duration-200">+</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Program Comparison Section ==================== --}}
    {{-- Comparison table showing program differences between Grades 7-8 and Grades 9-11 --}}
    <section class="bg-gradient-to-r from-[#F6F6F6] to-[#f0f0f0] my-5 md:my-10 py-5 md:py-10"
        aria-label="Program Comparison" id="impact-project">
        <div class="new-main-container py-5 md:py-5">
            <h2 class="text-3xl md:text-5xl font-light uppercase text-center">
                {{ __('pages/mentoring/epb.comparison.title') }}
            </h2>

            <div class="overflow-x-auto rounded-2xl mt-5 md:mt-10 bg-white">
                <table class="min-w-full border-collapse">
                    <thead class="bg-white text-dark">
                        <tr>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">
                                {{ __('pages/mentoring/epb.comparison.table.program') }}</th>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">
                                {{ __('pages/mentoring/epb.comparison.table.grades_7_8') }}</th>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">
                                {{ __('pages/mentoring/epb.comparison.table.grades_9_11') }}</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700 ">
                        @foreach (__('pages/mentoring/epb.comparison.rows') as $row)
                            <tr class="odd:bg-white even:bg-gray-50">
                                <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>
                                    {{ $row['program'] }}</td>
                                <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                    {{ $row['grades_7_8'] }}
                                </td>
                                <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                    {{ $row['grades_9_11'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    {{-- ==================== Why Choose Us Section ==================== --}}
    {{-- Tabbed section showing different program benefits --}}
    <section class="new-main-container my-10" aria-label="Why Choose Us">
        <div class="bg-[#F6F6F6] rounded-xl shadow-md p-5 md:p-10">
            <p class="text-newprimary">
                {{ __('pages/mentoring/epb.why_choose_us.label') }}
            </p>
            <h2 class="text-2xl md:text-4xl font-normal uppercase mb-4">
                {{ __('pages/mentoring/epb.why_choose_us.title') }}
            </h2>
            <p class="text-dark/60">
                {{ __('pages/mentoring/epb.why_choose_us.description') }}
            </p>

            <div class="border-b border-gray-400 my-10"></div>

            <div class="flex flex-col md:flex-row gap-10">

                <!-- Menu -->
                <div class="w-full md:w-[35%]">
                    <div id="tabMenu" class="space-y-5">
                        @foreach (__('pages/mentoring/epb.why_choose_us.tabs') as $index => $tab)
                            <button class="tab-btn w-full border rounded-2xl overflow-hidden"
                                data-tab="{{ $index + 1 }}">
                                <div
                                    class="tab-header flex items-center px-5 py-4 bg-white text-gray-800 transition-all duration-300">
                                    <div class="flex items-center gap-4">
                                        <span class="icon text-2xl font-light">+</span>
                                        <span class="font-normal text-xl text-start">{{ $tab['title'] }}</span>
                                    </div>
                                </div>
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Content -->
                <div class="w-full md:w-[65%]">
                    @foreach (__('pages/mentoring/epb.why_choose_us.tabs') as $index => $tab)
                        <div class="tab-pane {{ $index === 0 ? '' : 'hidden' }}" data-tab="{{ $index + 1 }}">
                            @if ($index === 0)
                                <img src="{{ asset('assets/img/mentoring/epb/why-us-1.png') }}"
                                    alt="{{ $tab['title'] }} - Community Campaigns and Digital Apps"
                                    class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy"
                                    width="800" height="280">
                            @elseif($index === 1)
                                <img src="{{ asset('assets/img/mentoring/epb/why-us-2.png') }}"
                                    alt="{{ $tab['title'] }} for University Applications"
                                    class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy"
                                    width="800" height="280">
                            @elseif($index === 2)
                                <img src="{{ asset('assets/img/mentoring/epb/why-us-3.png') }}"
                                    alt="{{ $tab['title'] }} for Students"
                                    class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy"
                                    width="800" height="280">
                            @elseif($index === 3)
                                <img src="{{ asset('assets/img/mentoring/epb/why-us-4.png') }}"
                                    alt="{{ $tab['title'] }}" class="w-full h-[280px] object-cover rounded-3xl shadow-md"
                                    loading="lazy" width="800" height="280">
                            @endif
                            <p class="text-gray-500 pt-4">
                                {{ $tab['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== Program Benefits Section ==================== --}}
    {{-- Five phases: Student Clubs, Personal Projects, Competitions, Internships, Portfolio --}}
    <section class="new-main-container py-10 md:py-10 relative" aria-label="Program Benefits">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-5xl font-normal uppercase text-center text-newprimary mb-10">
                {!! __('pages/mentoring/epb.benefits_section.title') !!}
            </h2>
            <p class="text-gray-500 text-lg md:text-xl font-light text-center">
                {{ __('pages/mentoring/epb.benefits_section.description') }}
            </p>
        </div>
        <div class="w-full mx-auto mt-5 md:mt-10">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Content -->
                <div class="flex-1">
                    <!-- Top Phase List -->
                    <div class="">
                        {{-- Phase 1  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 px-10 justify-between w-full items-center">
                                        <h3 class="text-dark/50 text-xl font-normal">
                                            Exclusive Student Club
                                        </h3>
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5 px-10">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Exclusive Student Club
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row justify-between gap-5 md:gap-10">
                                                <div class="w-full md:w-[30%]">
                                                    <p class="text-white mb-5 md:mb-10 text-xl md:text-2xl">
                                                        Build Extracurricular Leadership in Your Field
                                                    </p>
                                                </div>
                                                <div class="w-full md:w-[70%]">
                                                    <p class="text-white mb-5">
                                                        A subject-focused student club is one of the most effective
                                                        extracurricular activities for developing leadership, collaboration
                                                        experience, and academic identity, all of which strengthen your
                                                        university application profile. We facilitate access to specialized
                                                        peer networks where you collaborate on real projects, take on
                                                        leadership roles, and gain industry exposure. Your mentor ensures
                                                        every club involvement meaningfully strengthens your overall
                                                        profile.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-xl md:text-3xl text-center font-normal text-white mt-5">
                                                The 4 specialized club streams available for selection
                                            </div>
                                            <div class="max-w-5xl mx-auto">
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto p-4 md:p-6 items-center h-auto md:h-[450px] pathway-grid">

                                                    <!-- Card 1 -->
                                                    <div
                                                        class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                        px-6 py-4 h-[320px]
                                                        hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[380px]
                                                        hover:bg-gradient-to-b hover:from-newprimary hover:to-black active">

                                                        <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB Business club cover.png') }}"
                                                            class="bg_image absolute left-0 top-0 scale-[1.2] object-cover object-center group-hover:hidden active:hidden">

                                                        <!-- Number -->
                                                        <div
                                                            class="text-5xl text-gray-300 transition group-hover:hidden active:hidden">
                                                            01
                                                        </div>

                                                        <!-- Image -->
                                                        <div
                                                            class="relative h-36 rounded-xl overflow-hidden mb-4 hidden transition group-hover:block active:block">
                                                            <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB Business club.png') }}"
                                                                class="w-full h-full object-cover object-center"
                                                                alt="EduALL Business Club - Student Leadership and Entrepreneurship"
                                                                loading="lazy" width="300" height="200">
                                                        </div>

                                                        <!-- Content -->
                                                        <div
                                                            class="absolute bottom-10 left-5 w-[85%] transition-all duration-300
                                                            group-hover:relative group-hover:bottom-0 group-hover:left-0 group-hover:w-full
                                                            active:relative active:bottom-0 active:left-0 active:w-full">

                                                            <div
                                                                class="text-[#0B1B7A] transition mb-2 group-hover:text-white active:text-white">
                                                                <i class="fa-solid fa-briefcase"></i>
                                                            </div>

                                                            <h3
                                                                class="font-semibold text-gray-800 text-lg leading-5 mb-5 transition
                                                                group-hover:text-white active:text-white">
                                                                Business Club
                                                            </h3>

                                                        </div>

                                                        <!-- Description -->
                                                        <p
                                                            class="text-sm text-gray-500 opacity-0 translate-y-4 transition-all duration-300
                                                            group-hover:opacity-100 group-hover:translate-y-0 group-hover:text-gray-300
                                                            active:opacity-100 active:translate-y-0 active:text-gray-300">
                                                            Manage mock enterprises, pitch start-up ideas, and solve real
                                                            case
                                                            studies alongside like-minded peers.
                                                        </p>

                                                    </div>

                                                    <!-- Card 2 -->
                                                    <div
                                                        class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                        px-6 py-4 h-[320px]
                                                        hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[380px]
                                                        hover:bg-gradient-to-b hover:from-newprimary hover:to-black">
                                                        <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB computer science club cover.png') }}"
                                                            class="bg_image absolute left-0 top-0 scale-[1.2] object-cover object-center group-hover:hidden active:hidden">

                                                        <div class="text-5xl text-gray-300 transition group-hover:hidden">
                                                            02
                                                        </div>

                                                        <div
                                                            class="relative h-36 rounded-xl overflow-hidden mb-4 hidden transition group-hover:block">
                                                            <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB computer science club.png') }}"
                                                                class="w-full h-full object-cover object-center"
                                                                alt="EduALL Computer Science Club - Coding and Software Development"
                                                                loading="lazy" width="300" height="200">
                                                        </div>

                                                        <div
                                                            class="absolute bottom-10 left-5 w-[85%] transition-all duration-300
                                                            group-hover:relative group-hover:bottom-0 group-hover:left-0 group-hover:w-full">

                                                            <div
                                                                class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
                                                                <i class="fa-solid fa-laptop-code"></i>
                                                            </div>

                                                            <h3
                                                                class="font-semibold text-gray-800 text-lg leading-5 mb-5 transition group-hover:text-white">
                                                                Computer Science Club
                                                            </h3>

                                                        </div>

                                                        <p
                                                            class="text-sm text-gray-500 opacity-0 translate-y-4 transition-all duration-300
                                                            group-hover:opacity-100 group-hover:translate-y-0 group-hover:text-gray-300">
                                                            Hands-on coding sessions, collaborative hackathons, and software
                                                            development projects that solve real-world problems.
                                                        </p>

                                                    </div>

                                                    <!-- Card 3 -->
                                                    <div
                                                        class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                        px-6 py-4 h-[320px]
                                                        hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[380px]
                                                        hover:bg-gradient-to-b hover:from-newprimary hover:to-black">
                                                        <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB Engineering club cover.png') }}"
                                                            class="bg_image absolute left-0 top-0 scale-[1.2] object-cover object-center group-hover:hidden active:hidden">

                                                        <div class="text-5xl text-gray-300 transition group-hover:hidden">
                                                            03
                                                        </div>

                                                        <div
                                                            class="relative h-36 rounded-xl overflow-hidden mb-4 hidden transition group-hover:block">
                                                            <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB Engineering club.png') }}"
                                                                class="w-full h-full object-cover object-center"
                                                                alt="EduALL Engineering Club - Robotics and Structural Design"
                                                                loading="lazy" width="300" height="200">
                                                        </div>

                                                        <div
                                                            class="absolute bottom-10 left-5 w-[85%] transition-all duration-300
                                                            group-hover:relative group-hover:bottom-0 group-hover:left-0 group-hover:w-full">

                                                            <div
                                                                class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
                                                                <i class="fa-solid fa-gears"></i>
                                                            </div>

                                                            <h3
                                                                class="font-semibold text-gray-800 text-lg leading-5 mb-5 transition group-hover:text-white">
                                                                Engineering Club
                                                            </h3>

                                                        </div>

                                                        <p
                                                            class="text-sm text-gray-500 opacity-0 translate-y-4 transition-all duration-300
                                                            group-hover:opacity-100 group-hover:translate-y-0 group-hover:text-gray-300">
                                                            Structural design challenges, robotics building, and prototyping
                                                            that turn theory into physical solutions.
                                                        </p>

                                                    </div>

                                                    <!-- Card 4 -->
                                                    <div
                                                        class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                        px-6 py-4 h-[320px]
                                                        hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[380px]
                                                        hover:bg-gradient-to-b hover:from-newprimary hover:to-black">

                                                        <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB life science club cover.png') }}"
                                                            class="bg_image absolute left-0 top-0 scale-[1.2] object-cover object-center group-hover:hidden active:hidden">

                                                        <div class="text-5xl text-gray-300 transition group-hover:hidden">
                                                            04
                                                        </div>

                                                        <div
                                                            class="relative h-36 rounded-xl overflow-hidden mb-4 hidden transition group-hover:block">
                                                            <img src="{{ asset('assets/img/mentoring/epb/Student club/EPB life science club.png') }}"
                                                                class="w-full h-full object-cover object-center"
                                                                alt="EduALL Life Science Club - Biology and Medical Research"
                                                                loading="lazy" width="300" height="200">
                                                        </div>

                                                        <div
                                                            class="absolute bottom-10 left-5 w-[85%] transition-all duration-300
                                                            group-hover:relative group-hover:bottom-0 group-hover:left-0 group-hover:w-full">

                                                            <div
                                                                class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
                                                                <i class="fa-solid fa-dna"></i>
                                                            </div>

                                                            <h3
                                                                class="font-semibold text-gray-800 text-lg leading-5 mb-5 transition group-hover:text-white">
                                                                Life Science Club
                                                            </h3>

                                                        </div>

                                                        <p
                                                            class="text-sm text-gray-500 opacity-0 translate-y-4 transition-all duration-300
                                                            group-hover:opacity-100 group-hover:translate-y-0 group-hover:text-gray-300">
                                                            Bio-science discussions, simulated lab case studies, and
                                                            research
                                                            reviews at the cutting edge of medicine and nature.
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== Phase 2: Personal Project & Academic Research ==================== --}}
                        {{-- Phase 2  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 px-10 justify-between w-full items-center">
                                        <h3 class="text-dark/50 text-xl font-normal">
                                            Personal Project & Academic Research
                                        </h3>
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5 px-10">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Personal Project & Academic Research
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row justify-between gap-5 md:gap-10">
                                                <div class="w-full md:w-[30%]">
                                                    <p class="text-white mb-5 md:mb-10 text-xl md:text-2xl">
                                                        Launch Initiatives That Strengthen Your University Profile
                                                    </p>
                                                </div>
                                                <div class="w-full md:w-[70%]">
                                                    <p class="text-white mb-5">
                                                        A well-executed personal project shows top universities your
                                                        independent initiative, creativity, and passion. Your dedicated
                                                        mentor guides you from identifying a real-world problem to launching
                                                        a tangible output: a concrete extracurricular achievement on your
                                                        university application.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-xl md:text-3xl text-center font-normal text-white mt-5">
                                                Real Projects. Real Impact
                                            </div>

                                            <div class="max-w-6xl mx-auto">
                                                <div id="project-showcase" class="splide">
                                                    <div class="splide__track">
                                                        <ul class="splide__list">
                                                            <li class="splide__slide">
                                                                <div class="card bg-white rounded-xl overflow-hidden">
                                                                    <div class="flex gap-5">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-1.png') }}"
                                                                                alt="Project 1"
                                                                                class="w-full h-full object-cover scale-[1.2]">
                                                                        </div>
                                                                        <div class="w-[70%] p-5">
                                                                            <p class="text-[12px] font-bold mb-3">Project 1
                                                                            </p>
                                                                            <p class="text-[13px] font-normal mb-3">
                                                                                Public Health Advocacy (Stunting Awareness)
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Output:</p>
                                                                            <p class="text-[12px] text-gray-500 mb-2">
                                                                                A community campaign and public presentation
                                                                                tackling youth
                                                                                stunting in local areas.
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Mentorship:</p>
                                                                            <p class="text-[12px] text-gray-500">
                                                                                Coaching you to research complex health
                                                                                data, structure a
                                                                                compelling narrative, and pitch solutions to
                                                                                a live audience.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="splide__slide">
                                                                <div class="card bg-white rounded-xl overflow-hidden">
                                                                    <div class="flex gap-5">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-2.png') }}"
                                                                                alt="Project 2"
                                                                                class="w-full h-full object-cover scale-[1.2]">
                                                                        </div>
                                                                        <div class="w-[70%] p-5">
                                                                            <p class="text-[12px] font-bold mb-3">Project 2
                                                                            </p>
                                                                            <p class="text-[13px] font-normal mb-3">
                                                                                RASA Mindfulness Toolkit
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Output:</p>
                                                                            <p class="text-[12px] text-gray-500 mb-2">
                                                                                A physical book and interactive card set
                                                                                promoting mental
                                                                                well-being and personal reflection.
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Mentorship:</p>
                                                                            <p class="text-[12px] text-gray-500">
                                                                                Guiding your creative journey from
                                                                                conceptual brainstorming
                                                                                and visual design through to production.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="splide__slide">
                                                                <div class="card bg-white rounded-xl overflow-hidden">
                                                                    <div class="flex gap-5">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-3.png') }}"
                                                                                alt="Project 3"
                                                                                class="w-full h-full object-cover scale-[1.2]">
                                                                        </div>
                                                                        <div class="w-[70%] p-5">
                                                                            <p class="text-[12px] font-bold mb-3">Project 3
                                                                            </p>
                                                                            <p class="text-[13px] font-normal mb-3">
                                                                                Binar Educational Platform
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Output:</p>
                                                                            <p class="text-[12px] text-gray-500 mb-2">
                                                                                An illustrated educational platform designed
                                                                                to inspire
                                                                                young audiences through visual storytelling.
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Mentorship:</p>
                                                                            <p class="text-[12px] text-gray-500">
                                                                                Developing the core narrative, overseeing
                                                                                illustration,
                                                                                and executing a professional launch.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="splide__slide">
                                                                <div class="card bg-white rounded-xl overflow-hidden">
                                                                    <div class="flex gap-5">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-4.png') }}"
                                                                                alt="Project 4"
                                                                                class="w-full h-full object-cover scale-[1.2]">
                                                                        </div>
                                                                        <div class="w-[70%] p-5">
                                                                            <p class="text-[12px] font-bold mb-3">Project 4
                                                                            </p>
                                                                            <p class="text-[13px] font-normal mb-3">
                                                                                Halu Digital Application
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Output:</p>
                                                                            <p class="text-[12px] text-gray-500 mb-2">
                                                                                A prototyped mobile application interface
                                                                                designed to solve
                                                                                community needs through digital innovation.
                                                                            </p>

                                                                            <p class="text-[12px] mb-1">The Mentorship:</p>
                                                                            <p class="text-[12px] text-gray-500">
                                                                                Co-creating the roadmap from wireframing and
                                                                                UX mapping
                                                                                to a polished tech prototype.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== Phase 3: International Competitions ==================== --}}
                        {{-- Phase 3  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 px-10 justify-between w-full items-center">
                                        <h3 class="text-dark/50 text-xl font-normal">
                                            International Competitions
                                        </h3>
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5 px-10">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    International Competitions
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row justify-between gap-5 md:gap-10">
                                                <div class="w-full md:w-[30%]">
                                                    <p class="text-white mb-5 md:mb-10 text-xl md:text-2xl">
                                                        Win Global Recognition for Your University Application
                                                    </p>
                                                </div>
                                                <div class="w-full md:w-[70%]">
                                                    <p class="text-white mb-5">
                                                        Prestigious competitions are among the most impactful
                                                        extracurricular achievements on a university application,
                                                        demonstrating initiative, resilience, and performance under
                                                        pressure. We do not just hand you a list of contests. Your mentor
                                                        co-creates a strategic competition roadmap, selects the right global
                                                        platforms for your strengths, and coaches you through the entire
                                                        preparation process.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-xl md:text-3xl text-center font-normal text-white mt-10">
                                                Our 5-Step Competition Mentoring Framework
                                            </div>

                                            <div
                                                class="grid grid-cols-1 md:grid-cols-5 gap-4 max-w-6xl mx-auto p-4 items-center h-auto md:h-[400px]">

                                                <!-- Card 1 -->
                                                <div
                                                    class="relative bg-white rounded-2xl shadow-md overflow-hidden px-6 py-4 h-[320px]">

                                                    <!-- Number -->
                                                    <div class="text-5xl text-gray-300 mb-5">
                                                        01
                                                    </div>

                                                    <!-- Content -->
                                                    <h3 class="font-normal text-gray-800 text-xl leading-7 mb-5">
                                                        Team & Competition Matching
                                                    </h3>

                                                    <div class="absolute w-[80%] left-5 top-[60%]">
                                                        <p class="text-sm text-gray-500 leading-6">
                                                            Selecting the right global competition platform and connecting
                                                            you
                                                            with peers to form a competitive team.
                                                        </p>
                                                    </div>

                                                </div>

                                                <!-- Card 2 -->
                                                <div
                                                    class="relative bg-white rounded-2xl shadow-md overflow-hidden px-6 py-4 h-[320px]">

                                                    <!-- Number -->
                                                    <div class="text-5xl text-gray-300 mb-5">
                                                        02
                                                    </div>

                                                    <!-- Content -->
                                                    <h3 class="font-normal text-gray-800 text-xl leading-7 mb-5">
                                                        Idea Generation
                                                    </h3>

                                                    <div class="absolute w-[80%] left-5 top-[60%]">
                                                        <p class="text-sm text-gray-500 leading-6">
                                                            Brainstorming unique concepts and identifying the most
                                                            compelling
                                                            angle for your competition entry.
                                                        </p>
                                                    </div>

                                                </div>

                                                <!-- Card 3 -->
                                                <div
                                                    class="relative bg-white rounded-2xl shadow-md overflow-hidden px-6 py-4 h-[320px]">

                                                    <!-- Number -->
                                                    <div class="text-5xl text-gray-300 mb-5">
                                                        03
                                                    </div>

                                                    <!-- Content -->
                                                    <h3 class="font-normal text-gray-800 text-xl leading-7 mb-5">
                                                        Preparation & Strategy
                                                    </h3>

                                                    <div class="absolute w-[80%] left-5 top-[60%]">
                                                        <p class="text-sm text-gray-500 leading-6">
                                                            Co-creating a detailed action plan and refining initial concepts
                                                            before execution begins.
                                                        </p>
                                                    </div>

                                                </div>

                                                <!-- Card 4 -->
                                                <div
                                                    class="relative bg-white rounded-2xl shadow-md overflow-hidden px-6 py-4 h-[320px]">

                                                    <!-- Number -->
                                                    <div class="text-5xl text-gray-300 mb-5">
                                                        04
                                                    </div>

                                                    <!-- Content -->
                                                    <h3 class="font-normal text-gray-800 text-xl leading-7 mb-5">
                                                        Guided Execution
                                                    </h3>

                                                    <div class="absolute w-[80%] left-5 top-[60%]">
                                                        <p class="text-sm text-gray-500 leading-6">
                                                            Coaching you as you build your project, conduct research, and
                                                            develop competition materials.
                                                        </p>
                                                    </div>

                                                </div>

                                                <!-- Card 5 -->
                                                <div
                                                    class="relative bg-white rounded-2xl shadow-md overflow-hidden px-6 py-4 h-[320px]">

                                                    <!-- Number -->
                                                    <div class="text-5xl text-gray-300 mb-5">
                                                        05
                                                    </div>

                                                    <!-- Content -->
                                                    <h3 class="font-normal text-gray-800 text-xl leading-7 mb-5">
                                                        Finalization & Submission
                                                    </h3>

                                                    <div class="absolute w-[80%] left-5 top-[60%]">
                                                        <p class="text-sm text-gray-500 leading-6">
                                                            Polishing your final output, refining your presentation, and
                                                            prepping every detail for the judges.
                                                        </p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                    <div class="px-10 pb-10">
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-lg md:rounded-full mb-3">
                                            Showcase: Turning Ambition into International Recognition
                                        </div>
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-lg md:rounded-full mb-3">
                                            The Achievement: Global Finalist, Wharton Global High School Investment
                                            Competition
                                        </div>
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-lg md:rounded-full mb-3">
                                            The Journey: Competing against thousands of students worldwide requires more
                                            than financial knowledge.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== Phase 4: Internship & Job Shadowing ==================== --}}
                        {{-- Phase 4  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 px-10 justify-between w-full items-center">
                                        <h3 class="text-dark/50 text-xl font-normal">
                                            Internship & Job Shadowing
                                        </h3>
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5 px-10">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Internship & Job Shadowing
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row justify-between gap-5 md:gap-10">
                                                <div class="w-full md:w-[30%]">
                                                    <p class="text-white mb-5 md:mb-10 text-xl md:text-2xl">
                                                        Experience Your Future Career
                                                    </p>
                                                </div>
                                                <div class="w-full md:w-[70%]">
                                                    <p class="text-white mb-5">
                                                        Early professional exposure gives high school students across
                                                        Indonesia a genuine advantage in university applications. We
                                                        facilitate direct internship and job shadowing placements. Each one
                                                        becomes a documented extracurricular achievement that adds
                                                        specificity to your university application profile. Your mentor
                                                        ensures these experiences bridge classroom theory and real career
                                                        readiness.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== Phase 5: Digital Portfolio Enhancement ==================== --}}
                        {{-- Phase 5  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 px-10 justify-between w-full items-center">
                                        <h3 class="text-dark/50 text-xl font-normal">
                                            Digital Portfolio Enhancement
                                        </h3>
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5 px-10">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Digital Portfolio Enhancement
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row justify-between gap-5 md:gap-10">
                                                <div class="w-full md:w-[30%]">
                                                    <p class="text-white mb-5 md:mb-10 text-xl md:text-2xl">
                                                        Showcase Your Best Self
                                                    </p>
                                                </div>
                                                <div class="w-full md:w-[70%]">
                                                    <p class="text-white mb-5">
                                                        Building achievements is only half the journey. EduALL helps you
                                                        curate your projects, research, competition achievements, and
                                                        internship experiences into a polished digital portfolio that tells
                                                        your story and strengthens your application to top universities
                                                        worldwide.
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== Additional Opportunities Section ==================== --}}
    {{-- Extra opportunities: forums, exhibitions, internships, volunteering --}}
    <section class="new-main-container py-5 md:py-10 relative" aria-label="Additional Opportunities">
        <div class="flex flex-col md:flex-row gap-10">
            <div class="w-full md:w-[35%]">
                <h3 class="text-4xl font-normal">
                    {{ __('pages/mentoring/epb.additional_opportunities.title') }}
                </h3>
            </div>
            <div class="w-full md:w-[65%]">
                <p class="text-lg text-gray-500 ">
                    {{ __('pages/mentoring/epb.additional_opportunities.description') }}
                </p>
            </div>
        </div>
    </section>



    {{-- ==================== Call to Action Section ==================== --}}
    {{-- Consultation booking form with CTA image --}}
    <section class="relative z-10 h-auto overflow-hidden mt-5 md:mt-10" aria-label="Call to Action">
        <img src="{{ asset('assets/img/mentoring/epb/cta.png') }}" alt="EduALL Free Consultation Booking"
            class="absolute top-0 left-0 w-full z-0" loading="lazy">
        <div class="new-main-container relative z-10 flex justify-center">
            <div class="max-w-6xl p-6 md:p-10 rounded-xl">
                <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 items-center cta-grid">
                    <div class="w-full md:w-1/2 text-dark md:order-1 order-2">
                        <p class="text-xl md:text-3xl mb-3 md:mb-5">
                            {{ __('pages/mentoring/epb.cta.title') }}
                        </p>
                        <p class="text-xs md:text-[1rem] text-gray-500">
                            {{ __('pages/mentoring/epb.cta.description') }}
                        </p>

                        <x-new-form title="{{ __('pages/mentoring/epb.cta.title') }}" program-id="MODEXPPB"
                            lead-id="LS045" color="dark"
                            submit-title="{{ __('pages/mentoring/epb.cta.submit_title') }}" />
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:order-2 order-1">
                        <img src="{{ asset('assets/img/mentoring/epb/EPB CTA.png') }}" alt="EduALL"
                            class="w-full md:w-[90%] h-[250px] md:h-[90%] object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ==================== Universities Section ==================== --}}
    {{-- University acceptances showcase component --}}
    <section class="relative z-10 mt-20" aria-label="University Acceptances">
        <div class="new-main-container px-10">
            <div class="max-w-4xl mx-auto">
                <p class="text-2xl md:text-4xl font-semibold text-center text-newprimary mb-10">
                    {{ __('pages/mentoring/epb.universities.title') }}
                </p>

                <p class="text-lg text-gray-500 text-center">
                    {{ __('pages/mentoring/epb.universities.description') }}
                </p>
            </div>
            <div class="overflow-hidden pt-10 max-w-6xl mx-auto">
                <div class="pt-20">
                    <x-universities moreText="{{ __('pages/mentoring/epb.universities.more_text') }}" />
                </div>
            </div>
        </div>
    </section>


    {{-- ==================== Testimonial Section ==================== --}}
    {{-- Student testimonials slider --}}
    <section class="bg-gradient-to-b from-white to-[#D8E8FF]  py-5 md:py-10" aria-label="Student Testimonials">
        <div class="new-main-container relative z-10">
            <div class="text-center mb-3 md:mb-5">
                <h2 class="text-2xl md:text-5xl font-normal text-gray-800 uppercase mb-3 md:mb-4" itemprop="headline">
                    {{ __('pages/home.testimoni.title') }}
                </h2>
                <p class="text-gray-500 text-lg md:text-xl" itemprop="description">
                    {{ __('pages/home.testimoni.description') }}
                </p>
            </div>

            <x-eduall-alumni />
        </div>
    </section>


    {{-- ==================== Faculty Message Section ==================== --}}
    {{-- Message from Head of Faculty --}}
    <section class="new-main-container py-10 md:py-10">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
            <div class="w-full md:w-[35%]">
                <div class="w-full h-[300px] md:h-[400px] overflow-hidden rounded-2xl md:rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/img/mentoring/ultimate/34. Kak anne.png') }}"
                        alt="{{ __('pages/mentoring/ultimate.head_of_faculty.name') }}"
                        title="{{ __('pages/mentoring/ultimate.head_of_faculty.name') }}" loading="lazy"
                        decoding="async" width="400" height="500"
                        class="w-full h-full rounded-2xl shadow-sm object-cover md:object-center object-center">
                </div>
            </div>
            <div class="w-full md:w-[65%] text-center md:text-left">
                <h2 class="text-2xl md:text-5xl text-newprimary font-light mb-4 md:mb-10">
                    {!! __('pages/mentoring/ultimate.head_of_faculty.title') !!}
                </h2>
                <span>
                    <h3 class="text-xl md:text-3xl text-newprimary font-normal mb-2 md:mb-3">
                        {!! __('pages/mentoring/ultimate.head_of_faculty.quote_start') !!}
                    </h3>
                    <p class="text-sm md:text-xl">
                        {{ __('pages/mentoring/ultimate.head_of_faculty.quote_body') }}
                    </p>
                </span>

                <h4 class="text-base md:text-xl text-newprimary mt-4 md:mt-10 font-normal">
                    {{ __('pages/mentoring/ultimate.head_of_faculty.name') }}
                </h4>
                <p class="text-sm md:text-lg text-newprimary">
                    {{ __('pages/mentoring/ultimate.head_of_faculty.university') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== FAQ Section ==================== --}}
    {{-- Frequently asked questions with accordion --}}
    <section class="relative z-10 my-12 md:my-10" aria-label="Frequently Asked Questions">
        <div class="new-main-container px-4 md:px-5 lg:px-20 text-center">
            <h3 class="text-2xl md:text-4xl font-normal leading-5 mb-3 md:mb-5" itemprop="headline">
                {{ __('pages/mentoring/epb.faq.title') }}
            </h3>

            <div class="flex md:flex-nowrap flex-wrap items-center mt-10 w-full gap-5 md:gap-10">
                <div class="w-full md:w-[65%]">
                    <div class="accordion-group">
                        @foreach (__('pages/mentoring/epb.faq.items') as $index => $faq)
                            <div class="border-b rounded-lg overflow-hidden">
                                <button
                                    class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                    <span>{{ $faq['question'] }}</span>

                                    <span class="text-2xl transition-all duration-200">+</span>
                                </button>

                                <div
                                    class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full md:w-[35%]">
                    <p class="text-xl mb-3 font-normal">
                        {{ __('pages/mentoring/epb.faq.contact_title') }}
                    </p>
                    <p class="mb-5 text-black/60">
                        {{ __('pages/mentoring/epb.faq.contact_description') }}
                    </p>
                    <a href="https://bit.ly/eduall-contactus" class="bg-black px-10 py-2 text-white rounded-full">
                        {{ __('pages/mentoring/epb.faq.contact_cta') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
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
        document.addEventListener('DOMContentLoaded', function() {

            const slider = new Splide('#project-showcase', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                interval: 4000,
                speed: 600,
                drag: false,
                arrows: true,
                pagination: false,
                fixedWidth: '450px',
                fixedHeight: 'auto',
                gap: '-3rem',
                padding: '5%',

                breakpoints: {
                    1024: {
                        perPage: 2,
                        fixedWidth: '300px',
                        gap: '1rem',
                        padding: '3%',
                    },

                    768: {
                        perPage: 1,
                        fixedWidth: '280px',
                        gap: '1rem',
                        padding: '2%',
                    },
                },
            });

            slider.mount();


            /*
             * Scale mengikuti posisi card secara realtime.
             */
            function updateScale() {

                const root = document.querySelector('#project-showcase');
                const slides = root.querySelectorAll('.splide__slide');

                const rootRect = root.getBoundingClientRect();
                const centerX = rootRect.left + rootRect.width / 2;

                slides.forEach(slide => {

                    const card = slide.querySelector('.card');

                    if (!card) return;

                    const rect = slide.getBoundingClientRect();

                    const slideCenter = rect.left + rect.width / 2;

                    const distance = Math.abs(centerX - slideCenter);

                    const maxDistance = rect.width;

                    const progress = Math.min(
                        distance / maxDistance,
                        1
                    );

                    /*
                     * =========================
                     * SCALE
                     * =========================
                     *
                     * Center  = 1
                     * Samping = 0.6
                     */
                    const scale = 1 - (progress * 0.4);


                    /*
                     * =========================
                     * OPACITY
                     * =========================
                     *
                     * Center  = 1
                     * Samping = 0.4
                     */
                    const opacity = 1 - (progress * 0.6);


                    card.style.transform = `scale(${scale})`;
                    slide.style.opacity = opacity;

                });

                requestAnimationFrame(updateScale);
            }

            requestAnimationFrame(updateScale);

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
        document.addEventListener("DOMContentLoaded", function() {

            const buttons = document.querySelectorAll(".tab-btn");
            const panes = document.querySelectorAll(".tab-pane");

            function activateTab(tabId) {

                // Reset semua button
                buttons.forEach((btn) => {

                    const header = btn.querySelector(".tab-header");
                    const icon = btn.querySelector(".icon");

                    header.classList.remove(
                        "bg-gradient-to-r",
                        "from-newprimary",
                        "to-blue-700",
                        "text-white"
                    );

                    header.classList.add(
                        "bg-white",
                        "text-gray-800"
                    );

                    icon.textContent = "+";
                });

                // Hide semua content
                panes.forEach((pane) => {
                    pane.classList.add("hidden");
                });

                // Active button
                const activeButton = document.querySelector(`.tab-btn[data-tab="${tabId}"]`);
                const activeHeader = activeButton.querySelector(".tab-header");
                const activeIcon = activeButton.querySelector(".icon");

                activeHeader.classList.remove(
                    "bg-white",
                    "text-gray-800"
                );

                activeHeader.classList.add(
                    "bg-gradient-to-r",
                    "from-newprimary",
                    "to-blue-700",
                    "text-white"
                );

                activeIcon.textContent = "−";

                // Show content
                document
                    .querySelector(`.tab-pane[data-tab="${tabId}"]`)
                    .classList.remove("hidden");
            }

            // Event click
            buttons.forEach((btn) => {
                btn.addEventListener("click", function() {
                    activateTab(this.dataset.tab);
                });
            });

            // Default tab pertama aktif
            activateTab(1);

        });
    </script>

    <script>
        // Student Club Cards Hover Behavior
        document.addEventListener("DOMContentLoaded", function() {
            const pathwayCards = document.querySelectorAll(".pathway-card");
            let lastActiveCard = pathwayCards[0]; // Track the last active card, default to card 1

            // Add hover behavior to all cards
            pathwayCards.forEach(card => {
                card.addEventListener("mouseenter", function() {
                    // Remove active class from ALL cards
                    pathwayCards.forEach(c => c.classList.remove("active"));

                    // Add active class to hovered card only
                    this.classList.add("active");

                    // Update last active card
                    lastActiveCard = this;
                });
            });

            // When mouse leaves the entire grid, keep the last hovered card active
            // No need to revert to card 1 - the last hovered card stays active
        });
    </script>
@endpush
