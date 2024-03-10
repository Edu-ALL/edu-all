@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/home.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/home.meta_title') }}" />
    <meta name="description" content="{{ __('pages/home.meta_description') }}" />
@endsection

@section('content')
    {{-- ========================================== Banner Section ========================================== --}}
    <section class="h-[90%]">
        <div class="relative">
            <img src="{{ asset('assets/img/home/banner.png') }}" alt="banner"
                class="w-full md:h-[92vh] h-screen object-cover">
            <div class="absolute bottom-40 md:bottom-0 left-0 right-0">
                <div class="relative">
                    <div
                        class="bg-newprimary mix-blend-multiply invisible md:visible h-24 absolute bottom-0 left-0 right-0">
                    </div>
                    <div class="w-full main-container mx-auto absolute bottom-0 left-0 right-0 h-24 flex items-center">
                        <div class="flex gap-8 justify-between items-center w-full flex-col md:flex-row">
                            {{-- Acceptance --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white text-xl text-center">
                                    {{ $banners->accepatance }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    at Best-Fit Universities
                                </span>
                            </div>
                            {{-- Mentees --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white text-xl text-center">
                                    {{ $banners->mentees }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    mentees
                                </span>
                            </div>
                            {{-- Scholarship --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white text-xl text-center">
                                    {{ $banners->scholarship }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    in Scholarship Awards
                                </span>
                            </div>
                            {{-- SAT Score --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white text-xl text-center">
                                    {{ $banners->sat_score }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    on SAT Score
                                </span>
                            </div>
                            {{-- Statisfaction Rate --}}
                            <div class="flex flex-col justify-center items-center">
                                <h4 class="font-newprimary font-bold text-white text-xl text-center">
                                    {{ $banners->statisfaction_rate }}
                                </h4>
                                <span class="font-newprimary font-light text-white text-sm text-center">
                                    by Parents, Mentees, Partners, and Teachers
                                </span>
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
                        Integrative Mentoring and <br>
                        Uni Prep Consultant
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
                    <img src="{{ asset('assets/img/home/benefits/Admission mentoring.png') }}"
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
                    <img src="{{ asset('assets/img/home/benefits/Academic tutoring.png') }}"
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
                    <img src="{{ asset('assets/img/home/benefits/Exploration program.png') }}"
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
    <section class="pathaway_excellence relative h-full w-full bg-pathaway bg-contain bg-newprimary bg-blend-multiply">
        <div class="absolute bottom-0 w-screen flex z-20">
            <progress max="100" value="0" class="w-1/4 exploration_pathaway_progress"></progress>
            <progress max="100" value="0" class="w-1/4 profile_building_pathaway_progress"></progress>
            <progress max="100" value="0" class="w-1/4 academic_pathaway_progress"></progress>
            <progress max="50" value="0" class="w-1/4 writing_pathaway_progress"></progress>
        </div>

        <img src="{{ asset('assets/img/home/pathaway_exploration.png') }}" alt="exploration"
            class="absolute inset-0 h-full exploration_pathaway_img opacity-0">
        <img src="{{ asset('assets/img/home/pathaway_profile_building.png') }}" alt="profile building"
            class="absolute inset-0 h-full profile_building_pathaway_img opacity-0">
        <img src="{{ asset('assets/img/home/pathaway_academic.png') }}" alt="academic"
            class="absolute inset-0 h-full academic_pathaway_img opacity-0">
        <img src="{{ asset('assets/img/home/pathaway_writing.png') }}" alt="writing"
            class="absolute inset-0 h-full writing_pathaway_img opacity-0">

        <div class="h-full w-full relative">
            <div
                class="flex flex-col absolute translate-y-[120px] lg:top-60 lg:left-[420px] exploration_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold text-6xl text-white text-center lg:text-left">
                    Exploration
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    We guide our mentees in discovering their passions and interests through exposure to diverse learning
                    opportunities, professionals from various fields, and real-world challenges. We aim to ignite curiosity
                    and help students define their unique paths.
                </h4>
            </div>
            <div
                class="flex flex-col absolute translate-y-[120px] lg:bottom-36 lg:right-28  profile_building_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold text-6xl text-white text-center lg:text-left">
                    Profile <br> Building
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    This is where we assist mentees in shaping a well-rounded academic and extracurricular persona. We work
                    together to identify strengths, achievements, and experiences that will set them apart, creating a
                    compelling and authentic profile for university applications.
                </h4>
            </div>
            <div class="flex flex-col absolute translate-y-[120px] lg:top-60 lg:left-28 academic_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold text-6xl text-white text-center lg:text-left">
                    Academic
                </h1>
                <h4 class="px-6 lg:px-0 mt-4 font-newprimary max-w-md text-justify text-base text-white leading-8">
                    We strategically prepare students for their chosen major by offering tailored guidance for international
                    curricula and specialized coaching for standardized tests. From course selection to targeted improvement
                    strategies, we empower students for success in university studies and competitive admissions.
                </h4>
            </div>
            <div
                class="flex flex-col absolute translate-y-[120px] lg:bottom-36 lg:right-96 writing_pathaway_text opacity-0">
                <h1 class="font-newprimary font-bold text-6xl text-white text-center lg:text-left">
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
                    <img src="{{ asset('assets/img/home/EduALL-white-logo.png') }}" alt="EduAll white logo"
                        class="max-w-xs w-full">

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
            <h1 class="font-newprimary font-bold text-4xl text-dark text-center">OUR MENTORS</h1>
        </div>
        <div class="flex flex-col items-center mt-56 lg:px-12 bg-[#F3F3F3] shadow-2xl">
            <div class="w-full px-10 -mt-52 max-w-screen-2xl mx-auto">
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
                                    <div class="splide__slide__container px-5 w-full h-full mt-32">
                                        <div class="flex flex-col justify-between rounded-3xl shadow-md relative h-[80%]">
                                            {{-- Mentor Image --}}
                                            <div class="-mt-44 relative">
                                                <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                    alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center">
                                                <img src="{{ asset('assets/logo/eduall.png') }}" alt="EduALL Logo"
                                                    class="w-12 h-12 object-contain absolute -bottom-2 right-2">
                                            </div>

                                            <div class="flex flex-col">
                                                <div class="flex flex-col px-4 overflow-visible">
                                                    {{-- Mentor Name --}}
                                                    <h2
                                                        class="font-newprimary text-center font-semibold text-3xl text-dark mt-4 leading-7">
                                                        {{ $mentor->mentor_fullname }}
                                                    </h2>
                                                    <span class="font-newprimary text-newprimary text-xs text-center mt-2">
                                                        {!! $mentor->mentor_graduation !!}
                                                    </span>

                                                    <ul class="flex flex-col gap-2 mt-8">
                                                        @if ($mentor->value_1)
                                                            <li class="flex items-start gap-4">
                                                                <div class="w-4 h-4">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                                fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <h4
                                                                    class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                    {{ $mentor->value_1 }}
                                                                </h4>
                                                            </li>
                                                        @endif
                                                        @if ($mentor->value_2)
                                                            <li class="flex items-start gap-4">
                                                                <div class="w-4 h-4">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                                fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <h4
                                                                    class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                    {{ $mentor->value_2 }}
                                                                </h4>
                                                            </li>
                                                        @endif
                                                        @if ($mentor->value_3)
                                                            <li class="flex items-start gap-4">
                                                                <div class="w-4 h-4">
                                                                    <svg width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                        <g id="SVGRepo_tracerCarrier"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></g>
                                                                        <g id="SVGRepo_iconCarrier">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                                                fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <h4
                                                                    class="font-newprimary text-base font-semibold text-dark leading-5">
                                                                    {{ $mentor->value_3 }}
                                                                </h4>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                                                    class="mt-5 mb-4 flex flex-col justify-center group items-center gap-1 hover:bg-[#EBEBEB] transition-all group py-3">
                                                    <span
                                                        class="font-newprimary font-semibold text-xs text-newprimary leading-none">Get
                                                        to
                                                        know {{ $mentor->mentor_fullname }}</span>
                                                    <div class="w-24 h-[1px] bg-newprimary group-hover:w-0 transition-all">
                                                    </div>
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
            <a href="{{ route('mentor', app()->getLocale()) }}"
                class="flex justify-center mb-8 bg-dark font-newprimary text-white font-medium text-lg py-2 px-14 hover:bg-newprimary hover:px-20 transition-all duration-150">
                {{ __('pages/home.mentor_btn') }}
            </a>
        </div>
    </section>


    {{-- ========================================== Upcomming Events ========================================== --}}
    <section class="pt-40 pb-24 bg-dark">
        <div class="main-container">
            <h1 class="font-newprimary font-bold text-4xl text-white uppercase text-center">Upcoming Events</h1>
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
                                            <img src="{{ asset('uploaded_files/upcoming-event/' . $event->created_at->format('Y') . '/' . $event->created_at->format('m') . '/' . $event->event_thumbnail) }}"
                                                alt="{{ $event->event_alt }}" class="object-cover w-full h-full">

                                            <a href="#"
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
                    {{-- Regular Talk --}}
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
                                                        <h4 class="font-newprimary text-newyellow text-lg">Regular Talk
                                                        </h4>
                                                        <div class="flex flex-col">
                                                            <h4 class="font-newprimary text-newyellow text-lg">
                                                                {{ $regular_talk->event_date }}</h4>
                                                            <h4 class="font-newprimary text-white text-2xl font-bold">
                                                                {{ html_entity_decode(substr(strip_tags($regular_talk->event_title), 0, 80)) }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <img src="{{ asset('uploaded_files/upcoming-event/' . $regular_talk->created_at->format('Y') . '/' . $regular_talk->created_at->format('m') . '/' . $regular_talk->event_thumbnail) }}"
                                                        alt="{{ $regular_talk->event_alt }}"
                                                        class="w-full object-cover object-center h-72">
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="px-6 w-full">
                                <a href="#"
                                    class="w-full block py-3 bg-newprimary font-newprimary text-center text-white text-base">more
                                    events
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start px-6 mb-10">
                            <h4 class="font-newprimary text-newyellow text-lg">Regular Talks</h4>
                            <p class="text-white border-b border-b-white">Not Available</p>
                        </div>
                    @endif

                    {{-- More Date --}}
                    @if (count($important_dates) > 0)
                        <div class="flex flex-col items-center justify-between">
                            <div class="h-max-60 flex flex-col w-full py-8 px-6">
                                <h4 class="font-newprimary text-newyellow text-lg">Important Dates</h4>
                                <ul class="mt-2 overflow-y-auto overflow-x-hidden">
                                    @foreach ($important_dates as $important_date)
                                        <li class="flex justify-between border-b border-b-white py-2 px-2">
                                            <h3 class="font-newprimary font-normal text-white">
                                                {{ $important_date->title }}</h3>
                                            <span class="font-newprimary text-newyellow">
                                                {{ date('M, d Y', strtotime($important_date->date)) }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="px-6 w-full">
                                <a href="#"
                                    class="w-full block py-3 bg-red font-newprimary text-center text-white text-base">
                                    more important dates
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col w-full relative text-start px-6">
                            <h4 class="font-newprimary text-newyellow text-lg">Important Dates</h4>
                            <p class="text-white border-b border-b-white">Not Available</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================== As Seen On ========================================== --}}
    <section class="pt-40 pb-24">
        <div class="main-container">
            <h1 class="font-newprimary font-bold text-4xl text-dark uppercase text-center">As Seen On</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center justify-between gap-12 mt-12 md:mt-24">
                <img src="{{ asset('assets/img/home/aso_media_indonesia.png') }}" alt="Media Indonesia"
                    class="w-full h-16 object-contain">
                <img src="{{ asset('assets/img/home/aso_kompas.png') }}" alt="Kompas"
                    class="w-full h-12 object-contain">
                <img src="{{ asset('assets/img/home/aso_times_indonesia.png') }}" alt="Times Indonesia"
                    class="w-full h-12 object-contain">
            </div>
        </div>
    </section>


    {{-- ========================================== Success Stories ========================================== --}}
    <section class="pt-40 pb-24">
        <div class="main-container flex flex-col items-center">
            <h1 class="font-newprimary font-bold text-4xl text-dark uppercase text-center max-w-4xl mx-auto">
                Empowering 700+ Minds for Global
                Success – From Exceptional Personal Projects!
                to Top Universities Worldwide!
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($success_stories as $item)
                    <div class="flex gap-6 justify-start @if ($loop->index > 1) flex-row-reverse @endif">
                        <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
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
            <a href="{{ route('mentor', app()->getLocale()) }}"
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
                                            <a href="#"
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

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/home.bottom') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-newprimary text-base text-white text-center bg-red hover:scale-110 transition-all">
                {{ __('pages/home.bottom_btn') }}

            </a>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

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
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 4,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            lazyload: true,
            autoplay: true,
            interval: 4000,
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
            perPage: 1,
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

        new Splide(splides[3], {
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
            data.list.classList.add('top-[100%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#D9D9D9';
            });
        }).mount();
    </script>
@endsection
