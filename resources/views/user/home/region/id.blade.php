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
            <div class="absolute md:bottom-0 left-0 right-0">
                <div class="relative h-full">
                    <div
                        class="bg-newprimary mix-blend-multiply visible md:h-24 h-[36dvh]  absolute bottom-0 left-0 right-0">
                    </div>
                    <div
                        class="w-full main-container mx-auto absolute md:bottom-0 bottom-20 left-0 right-0 h-24 flex items-center">
                        <div class="flex md:flex-row flex-wrap gap-6 md:justify-between justify-center items-center w-full">
                            {{-- Acceptance --}}
                            <div class="flex flex-col md:w-auto w-[50%] justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white md:text-xl text-md text-center">
                                    {{ $banners->accepatance }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    at Best-Fit Universities
                                </span>
                            </div>
                            {{-- Mentees --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white md:text-xl text-md text-center">
                                    {{ $banners->mentees }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    mentees
                                </span>
                            </div>
                            {{-- Scholarship --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white md:text-xl text-md text-center">
                                    {{ $banners->scholarship }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    in Scholarship Awards
                                </span>
                            </div>
                            {{-- SAT Score --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white md:text-xl text-md text-center">
                                    {{ $banners->sat_score }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    on SAT Score
                                </span>
                            </div>
                            {{-- Statisfaction Rate --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white md:text-xl text-md text-center">
                                    {{ $banners->statisfaction_rate }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    Student Projects Launched
                                </span>
                                {{-- <span class="font-newprimary font-light text-white text-sm text-center">
                                    by Parents, Mentees, Partners, and Teachers
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Benefits Section ======================================= --}}
    <section class="py-12">
        <div class="main-container">
            <div class="flex flex-col gap-y-8 md:flex-row justify-center md:justify-between items-center">
                <div class="flex flex-col md:w-4/12">
                    <h2 class="font-newprimary text-center md:text-left text-newprimary font-bold text-xl md:text-3xl mb-2">
                        EduALL
                    </h2>
                    <h4 class="font-newprimary text-center md:text-left italic text-xl md:text-2xl">
                        Your Gateway to Top Universities <br> and Dream Careers
                    </h4>
                </div>
                <div class="flex flex-col md:w-8/12">
                    <p class="font-newprimary text-sm md:text-base md:text-left text-center">
                        More than just a university consultant, EduALL empowers students through personalized guidance in
                        academics, university and major selection, personal brand, and extracurriculars.
                        <br><br>
                        We go beyond by fostering a growth mindset, providing access to professionals, project-making, and
                        real-world problem-solving.
                        <br><br>
                        Join EduALL for a transformative journey toward success and societal impact, <b>shaping future
                            changemakers.</b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Our Program Section ======================================= --}}
    <section class="py-12">
        <div class="main-container">
            <h2 class="font-bold text-xl md:text-3xl uppercase">Our Programs</h2>
            <div class="grid md:grid-cols-3 gap-6 mt-6">
                <div class="flex flex-col relative">
                    <img loading="lazy" src="{{ asset('assets/img/home/benefits/Admission mentoring.webp') }}"
                        alt="Admission Mentoring image" class="w-full">
                    <div class="ourprogram_card">
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">Undergraduate</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">Graduate</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">University Transfer</span>
                            </li>
                        </ul>
                        <a href="{{ route('admissions_mentoring', app()->getLocale()) }}"
                            class="mt-4 bg-dark py-2 px-8 inline-block text-white font-newprimary font-medium text-lg hover:bg-newprimary transition-all duration-150">more
                            details</a>
                    </div>
                    <div class="ourprogram_side"></div>
                    <div class="ourprogram_side2"></div>
                </div>
                <div class="flex flex-col relative">
                    <img loading="lazy" src="{{ asset('assets/img/home/benefits/Academic tutoring.webp') }}"
                        alt="Academic Tutoring image" class="w-full">
                    <div class="ourprogram_card">
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">Academic Tutoring
                                </span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">SAT/ACT Prep Class
                                </span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">TOEFL/IELTS Prep Class</span>
                            </li>
                        </ul>
                        <a href="{{ route('academic_test_preparation', app()->getLocale()) }}"
                            class="mt-4 bg-dark py-2 px-8 inline-block text-white font-newprimary font-medium text-lg hover:bg-newprimary transition-all duration-150">more
                            details</a>
                    </div>
                    <div class="ourprogram_side"></div>
                    <div class="ourprogram_side2"></div>
                </div>
                <div class="flex flex-col relative">
                    <img loading="lazy" src="{{ asset('assets/img/home/benefits/Exploration program.webp') }}"
                        alt="Exploration Program Image" class="w-full">
                    <div class="ourprogram_card">
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-center gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">Global Immersion Program
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span>
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z"
                                                fill="#120FFD"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-semibold text-base">Community Empowerment Program
                                </span>
                            </li>

                        </ul>
                        <a href="{{ route('passion_project_mentoring', app()->getLocale()) }}"
                            class="mt-6 bg-dark py-2 px-8 inline-block text-white font-newprimary font-medium text-lg hover:bg-newprimary transition-all duration-150">more
                            details</a>
                    </div>
                    <div class="ourprogram_side"></div>
                    <div class="ourprogram_side2"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Pathaway Excellence ========================================== --}}
    <section class="pathaway_excellence relative h-full w-screen bg-contain bg-newprimary bg-blend-multiply">
        <div class="absolute bottom-0 w-screen flex z-20">
            <progress max="100" value="0" class="w-1/4 exploration_pathaway_progress"></progress>
            <progress max="100" value="0" class="w-1/4 profile_building_pathaway_progress"></progress>
            <progress max="100" value="0" class="w-1/4 academic_pathaway_progress"></progress>
            <progress max="50" value="0" class="w-1/4 writing_pathaway_progress"></progress>
        </div>

        <div class="absolute inset-0 w-screen h-full mix-blend-multiply">
            <img loading="lazy" src="{{ asset('assets/img/home/pathaway.webp') }}" alt="exploration"
                class="object-cover w-full h-full opacity-100">
        </div>
        <img loading="lazy" src="{{ asset('assets/img/home/pathaway_exploration.webp') }}" alt="exploration"
            class="hidden md:block absolute inset-0 object-cover h-full w-screen exploration_pathaway_img opacity-0">
        <img loading="lazy" src="{{ asset('assets/img/home/pathaway_profile_building.webp') }}" alt="profile building"
            class="hidden md:block absolute inset-0 object-cover h-full w-screen profile_building_pathaway_img opacity-0">
        <img loading="lazy" src="{{ asset('assets/img/home/pathaway_academic.webp') }}" alt="academic"
            class="hidden md:block absolute inset-0 object-cover h-full w-screen academic_pathaway_img opacity-0">
        <img loading="lazy" src="{{ asset('assets/img/home/pathaway_writing.webp') }}" alt="writing"
            class="hidden md:block absolute inset-0 object-cover h-full w-screen writing_pathaway_img opacity-0">

        <div class="h-full w-full relative">
            <div
                class="flex flex-col absolute translate-y-[120px] lg:top-[30%] lg:left-[30%] exploration_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold md:text-6xl text-3xl uppercase text-white text-center lg:text-left">
                    Exploration
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    We guide our mentees in discovering their passions and interests through exposure to diverse learning
                    opportunities, professionals from various fields, and real-world challenges. We aim to ignite curiosity
                    and help students define their unique paths.
                </h4>
            </div>
            <div
                class="flex flex-col absolute translate-y-[120px] lg:bottom-[17%] lg:right-[10%]  profile_building_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold md:text-6xl text-3xl uppercase text-white text-center lg:text-left">
                    Profile <br> Building
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    This is where we assist mentees in shaping a well-rounded academic and extracurricular persona. We work
                    together to identify strengths, achievements, and experiences that will set them apart, creating a
                    compelling and authentic profile for university applications.
                </h4>
            </div>
            <div
                class="flex flex-col absolute translate-y-[120px] lg:top-[25%] lg:left-[10%] academic_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold md:text-6xl text-3xl uppercase text-white text-center lg:text-left">
                    Academic
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    We strategically prepare students for their chosen major by offering tailored guidance for international
                    curricula and specialized coaching for standardized tests. From course selection to targeted improvement
                    strategies, we empower students for success in university studies and competitive admissions.
                </h4>
            </div>
            <div
                class="flex flex-col absolute translate-y-[120px] lg:bottom-[18%] lg:right-[30%] writing_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold md:text-6xl text-3xl uppercase text-white text-center lg:text-left">
                    Writing
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    Crafting a compelling narrative is key. We offer guidance on personal statements, essays, and other
                    written components of university applications. Through thoughtful storytelling and impactful writing, we
                    aim to showcase each student's unique qualities, aspirations, and contributions.
                </h4>
            </div>
            <div class="panel panel-1 relative overflow-hidden w-full h-full">
                <div class="flex flex-col items-center z-50">
                    <img loading="lazy" src="{{ asset('assets/img/home/EduALL-white-logo.png') }}"
                        alt="EduAll white logo" class="max-w-xs w-full">

                    <h4 class="mt-12 font-newprimary font-bold text-2xl text-center lg:text-4xl text-white">PATHWAY TO
                        EXCELLENCE</h4>
                </div>
            </div>
        </div>


        <div class="panel exploration_pathaway relative">
        </div>

        <div class="panel profile_building_pathaway">
        </div>

        <div class="panel academic_pathaway">
        </div>

        <div class="panel writing_pathaway">

        </div>
    </section>


    {{-- ========================================== Mentors ========================================== --}}
    <section class="pt-40 pb-24" id="mentors">
        <div class="main-container">
            <h1 class="font-newprimary font-bold md:text-4xl text-2xl text-dark text-center">OUR MENTORS</h1>
        </div>
        <div class="flex flex-col items-center mt-56 lg:px-[150px] bg-[#F3F3F3] shadow-2xl">
            <div class="new-main-container w-full px-10 -mt-52 max-w-screen-2xl mx-auto">
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
                {{ __('pages/home.mentor_btn') }}
            </a>
        </div>
    </section>


    {{-- ========================================== Upcomming Events ========================================== --}}
    <section class="pt-40 pb-24 bg-dark">
        <div class="lg:px-[250px] px-[20px]">
            <h1 class="font-newprimary font-bold md:text-4xl text-2xl text-white uppercase text-center">Upcoming Events
            </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 mt-12">
                {{-- Event --}}
                <div class="flex flex-col items-center justify-between relative">
                    <div class="splide" role="group">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($events as $event)
                                    <li class="splide__slide">
                                        <div class="splide__slide__container">
                                            <h4 class="absolute top-8 left-8 font-newprimary text-newyellow text-lg">Event
                                            </h4>
                                            <img loading="lazy"
                                                src="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                                                alt="{{ $event->event_alt }}" class="object-cover w-full h-full">

                                            <a href="{{ route('upcoming_events', app()->getLocale()) }}"
                                                class="absolute bottom-0 w-full py-3 bg-newprimary font-newprimary text-center text-white text-base">more
                                                detail</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Upcomming Event --}}
                <div class="flex flex-col">
                    {{-- Talk Sessions --}}
                    @if (count($regular_talks) > 0)
                        <div class="flex flex-col items-center justify-between relative">
                            <div class="splide" role="group">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($regular_talks as $regular_talk)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container">
                                                    <div
                                                        class="flex flex-col absolute top-8 left-8 pr-8 justify-between h-60">
                                                        <h4 class="font-newprimary text-newyellow text-lg">Talk Sessions
                                                        </h4>
                                                        <div class="flex flex-col">
                                                            <h4 class="font-newprimary text-newyellow text-lg">
                                                                {{ $regular_talk->event_date }}</h4>
                                                            <h4 class="font-newprimary text-white text-2xl font-bold">
                                                                {{ html_entity_decode(substr(strip_tags($regular_talk->event_title), 0, 80)) }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <img loading="lazy"
                                                        src="{{ asset('uploaded_files/upcoming-event/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $regular_talk->event_thumbnail) }}"
                                                        alt="{{ $regular_talk->event_alt }}"
                                                        class="w-full object-cover object-center h-72">
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="px-6 w-full">
                                <a href="{{ route('upcoming_events', app()->getLocale()) }}"
                                    class="w-full block py-3 bg-newprimary font-newprimary text-center text-white text-base">more
                                    events
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start px-6">
                            <h4 class="font-newprimary text-newyellow text-lg">Talk Sessions</h4>
                            <p class="text-white border-b border-b-white">Not Available</p>
                        </div>
                    @endif

                    {{-- More Date --}}
                    @if (count($important_dates) > 0)
                        <div class="flex flex-col items-center justify-between mt-2">
                            <div class=" h-max-[300px] flex flex-col w-full py-8 px-6">
                                <h4 class="font-newprimary text-newyellow text-lg">Important Dates</h4>
                                <ul class="mt-2 overflow-y-auto overflow-x-hidden">
                                    @foreach ($important_dates as $important_date)
                                        <li>
                                            @if ($important_date->link)
                                                <a href="{{ $important_date->link }}" target="_blank"
                                                    class="flex justify-between border-b border-b-white py-2 px-2 w-ful">
                                                    <h3
                                                        class="font-newprimary font-normal hover:text-blue-500 text-white w-[75%]">
                                                        {{ $important_date->title }} <i class="fas fa-link ml-1"></i>
                                                    </h3>
                                                    <span
                                                        class="font-newprimary hover:text-blue-500 text-newyellow w-[25%] text-end">
                                                        {{ date('M, d Y', strtotime($important_date->date)) }}
                                                    </span>
                                                </a>
                                            @else
                                                <div class="flex justify-between border-b border-b-white py-2 px-2 w-ful">
                                                    <h3 class="font-newprimary font-normal text-white w-[75%]">
                                                        {{ $important_date->title }}
                                                    </h3>
                                                    <span class="font-newprimary text-newyellow w-[25%] text-end">
                                                        {{ date('M, d Y', strtotime($important_date->date)) }}
                                                    </span>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="px-6 w-full">
                                <a href="{{ url('/assets/files/upcoming-event/2024_merchandise_calendar_pdf.pdf') }}"
                                    target="_blank"
                                    class="w-full block py-3 bg-red font-newprimary text-center text-white text-base">
                                    more important dates
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start px-6 mt-10">
                            <h4 class="font-newprimary text-newyellow text-lg">Important Dates</h4>
                            <p class="text-white border-b border-b-white">Not Available</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================== As Seen On ========================================== --}}
    @if (count($as_seen_on) > 0)
        <section class="pt-40 pb-24">
            <div class="new-main-container">
                <h1 class="font-newprimary font-bold md:text-4xl text-2xl text-dark uppercase text-center">As Seen On</h1>
                <div class="grid md:grid-cols-3 grid-cols-2 items-center md:justify-between justify-center md:gap-12 gap-5 mt-12 md:mt-24">
                    @foreach ($as_seen_on as $item)
                        <div class="h-16 flex justify-center">
                            <img loading="lazy"
                                src="{{ asset('uploaded_files/as-seen/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                alt="{{ $item->alt }}" class="h-full object-contain">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    {{-- ========================================== Success Stories ========================================== --}}
    <section class="pt-40 pb-24">
        <div class="main-container flex flex-col items-center">
            <h1 class="font-newprimary font-bold md:text-4xl text-2xl text-dark uppercase text-center max-w-4xl mx-auto">
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
                            <h2 class="font-semibold text-xl font-newprimary text-center">{{ $item->name }}</h2>
                            {{-- Bedge 1 --}}
                            <div class="font-newprimary text-newprimary text-xs font-semibold text-center">
                                {!! $item->badge_1 !!}
                            </div>
                            <div class="mt-4 font-newprimary text-dark text-base font-semibold text-center leading-4">
                                {!! $item->badge_2 !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('success_stories', app()->getLocale()) }}"
                class="flex justify-center my-8 bg-dark font-newprimary text-white font-medium text-lg py-2 px-14 hover:bg-newprimary hover:px-20 transition-all duration-150">
                Read More
            </a>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">WHAT OUR MENTEES & PARENTS
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

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/home.bottom') }}
            </h2>
            {{-- <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-newprimary text-base text-white text-center bg-red hover:scale-110 transition-all">
                {{ __('pages/home.bottom_btn') }}

            </a> --}}
            <x-button href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                title="{{ __('pages/home.bottom_btn') }}" type='secondary' bg-color="red" />
        </div>
    </section>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script> --}}

    <script type="module" src="{{ asset('js/user/main.js') }}"></script>
    <script>
        // slider
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

        new Splide(splides[2], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            lazyload: true,
            autoplay: true,
            interval: 3000,
            pagination: false,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endpush
