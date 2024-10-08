@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_tutoring.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-[90vh] bg-academic-tutoring-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full items-center new-main-container py-24 gap-2">
            <h2 class="font-newprimary font-bold text-4xl md:text-7xl text-white text-center uppercase">
                {{ __('pages/programs/academic_tutoring.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/academic_tutoring.description') }}
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col justify-between gap-8 md:flex-row">
                @foreach (__('pages/programs/academic_tutoring.summary') as $item)
                    <div class="flex flex-col items-center max-w-xs mx-auto">
                        <h3 class="font-bold text-5xl text-newprimary">{{ $item['title'] }}</h3>
                        <span class="text-sm uppercase text-center mt-2">{!! $item['sub_title'] !!}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col">
                <h2 class="font-bold text-4xl uppercase text-center">
                    {{ __('pages/programs/academic_tutoring.benefit_title') }}</h2>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                    @foreach (__('pages/programs/academic_tutoring.benefit_section') as $item)
                        <div class="p-2 w-full h-full">
                            <div class="flex flex-col items-start bg-[#F2F1F1] p-4 rounded-xl shadow-lg h-full">
                                <div class="flex items-center justify-start gap-2">
                                    <div class="w-10 h-10">
                                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/benefits/benefit-0' . $loop->iteration . '.png') }}"
                                            alt="" class="w-full h-full object-contain">
                                    </div>
                                    <h4 class="font-semibold text-lg leading-6 flex-1">{{ $item['title'] }}</h4>
                                </div>
                                <div class="flex-1">
                                    <p class="text-justify mt-2 text-sm">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="new-main-container">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-4xl uppercase text-center">
                    {{ __('pages/programs/academic_tutoring.subjects_title') }}
                </h2>
                <p class="mt-4 leading-5 text-base text-center max-w-2xl mx-auto">
                    {{ __('pages/programs/academic_tutoring.subjects_desc') }}</p>
                <div class="flex flex-wrap gap-4 mt-4 justify-center">
                    @foreach (__('pages/programs/academic_tutoring.subjects_tag') as $item)
                        <div class="pl-2 pr-3 py-1 rounded-md border-black border flex items-center justify-center gap-2">
                            <div class="w-6 h-5">
                                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/icons/' . $item['image']) }}"
                                    alt="icons" class="w-full h-full object-contain">
                            </div>
                            <span class="text-semibold flex-1">{{ $item['title'] }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="mt-8 flex flex-wrap justify-center items-center">
                    <div class="flex flex-col md:flex-row w-full h-[180vh] md:h-[60vh]">
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-active relative overflow-hidden">
                            <span>IBDP</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li class="leading-6">Physics</li>
                                    <li class="leading-6">Chemistry</li>
                                    <li class="leading-6">Biology</li>
                                    <li class="leading-6">English</li>
                                    <li class="leading-6">Mathematics</li>
                                    <li class="leading-6">Economics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/2">
                                    <li>Environmental System & Societies</li>
                                    <li>Business Management</li>
                                    <li>Economics</li>
                                    <li>Extended Essay (EE) / <br /> Internal Assessment (IA) Guidance</li>
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
                                    <li>Physics</li>
                                    <li>Chemistry</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Mathematics</li>
                                    <li>Economics</li>
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
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Computer <br /> Science</li>
                                </ul>
                            </div>
                            <div class="polygon bg-black"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-4.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                        <div class="acad-program-acad-tutor-item acad-program-acad-tutor-inactive relative overflow-hidden">
                            <span>Advanced
                                Placement</span>
                            <div class="desc">
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Pre-Calculus</li>
                                    <li>Calculus AB</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Calculus BC</li>
                                    <li>Physics</li>
                                </ul>
                                <ul class="whitespace-nowrap w-1/3">
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                </ul>
                            </div>
                            <div class="polygon bg-newprimary"></div>
                            <div class="w-full h-full bg-black">
                                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-5.png') }}"
                                    alt="EduALL figure">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- <div class="py-16" id="benefit">
        <div class="flex flex-wrap justify-center items-center main-container gap-8 md:gap-16">
            <div class="polygon-shape h-40 w-40 md:h-60 md:w-60 rounded-xl bg-newprimary relative group overflow-hidden">
                <div class="absolute-center flex flex-col items-center justify-center z-10 w-full px-2 md:px-7">
                    <h4 class="animation_circle_persentage font-newprimary text-white text-3xl md:text-4xl font-bold">0%
                    </h4>
                    <span class="font-newprimary text-white text-[10px] text-center">of our A-Level Students earned A and
                        A+</span>
                </div>
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/benefit-figure-1.webp') }}"
                    alt="EduALL figure 1"
                    class="w-full h-full object-contain opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="polygon-shape h-40 w-40 md:h-60 md:w-60 rounded-xl bg-newprimary relative group overflow-hidden">
                <div class="absolute-center flex flex-col items-center justify-center z-10 w-full px-2 md:px-7">
                    <h4 class="animation_circle_persentage font-newprimary text-white text-3xl md:text-4xl font-bold">0%
                    </h4>
                    <span class="font-newprimary text-white text-[10px] text-center">of our IB Students boosted their scores
                        by
                        2 - 3 points and greater </span>
                </div>
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/benefit-figure-2.webp') }}"
                    alt="EduALL figure 1"
                    class="w-full h-full object-contain opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
            </div>
            <div class="polygon-shape h-40 w-40 md:h-60 md:w-60 rounded-xl bg-newprimary relative group overflow-hidden">
                <div class="absolute-center flex flex-col items-center justify-center z-10 w-full px-2 md:px-7">
                    <h4 class="animation_circle_persentage font-newprimary text-white text-3xl md:text-4xl font-bold">0%
                    </h4>
                    <span class="font-newprimary text-white text-[10px] text-center">Exam Success Rate</span>
                </div>
                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/benefit-figure-3.webp') }}"
                    alt="EduALL figure 1"
                    class="w-full h-full object-contain opacity-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
            </div>
        </div>
    </div> --}}

    {{-- <div class="pb-16" id="acad-tutoring-section-2">
        <div class="flex flex-col md:flex-row main-container w-full h-[100vh] md:h-[60vh]">
            <div class="acad-tutor-s2-item acad-tutor-s2-active relative overflow-hidden group">
                <span>Personalized Learning Paths</span>
                <div class="polygon"></div>
                <div class="w-full h-full bg-black">
                    <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s2-figure-1.webp') }}"
                        alt="EduALL figure">
                </div>
            </div>
            <div class="acad-tutor-s2-item acad-tutor-s2-inactive relative overflow-hidden group">
                <span>2</span>
                <div class="polygon"></div>
                <div class="w-full h-full bg-black">
                    <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s2-figure-2.webp') }}"
                        alt="EduALL figure">
                </div>
            </div>
            <div class="acad-tutor-s2-item acad-tutor-s2-inactive relative overflow-hidden group">
                <span>3</span>
                <div class="polygon"></div>
                <div class="w-full h-full bg-black">
                    <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s2-figure-3.webp') }}"
                        alt="EduALL figure">
                </div>
            </div>
            <div class="acad-tutor-s2-item acad-tutor-s2-inactive relative overflow-hidden group">
                <span>4</span>
                <div class="polygon"></div>
                <div class="w-full h-full bg-black">
                    <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s2-figure-4.webp') }}"
                        alt="EduALL figure">
                </div>
            </div>
        </div>

        <div class="mt-12 overflow-hidden">
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
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-16">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">IB DIPLOMA</h2>
            <div class="mt-12 flex flex-col gap-8">
                <div class="flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-center items-center md:h-80">
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/mathematics.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Mathematics</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/physics.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Physics</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/chemistry.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Chemistry</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/biology.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Biology</span>
                    </div>
                </div>
                <div class="flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-center items-center md:h-80">
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/environmental.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center h-7">Environmental
                            <span class="block md:inline"></span>
                            System <br>
                            and

                            Societies</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/economics.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Economics</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group mt-8 md:mt-0">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/english.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">English</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 group mt-16 md:mt-0">
                        <div
                            class="transition-all duration-300 group-hover:h-64 w-32 h-32 md:w-60 md:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/Business.webp') }}"
                                alt="EduALL icons"
                                class="w-12 h-12 md:w-28 md:h-28 group-hover:scale-125 transition-all duration-700 object-contain">
                        </div>
                        <span
                            class="group-hover:font-bold transition-all duration-300 font-newprimary text-black text-lg text-center">Businessl
                            <span class="block md:inline"></span>
                            Management</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex main-container w-full flex-col mt-16 ">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center uppercase">Cambridge A-Level
            </h2>
            <div class="mt-12 flex flex-wrap gap-x-2 gap-y-8 justify-evenly md:justify-center items-center md:h-72">
                <div class="flex flex-col items-center gap-4 group">
                    <div
                        class="transition-all duration-300 w-32 h-32 md:w-48 md:h-40 group-hover:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/mathematics.webp') }}"
                            alt="EduALL icons"
                            class="w-12 h-12 md:w-20 md:h-20 group-hover:scale-125 transition-all duration-700 object-contain">
                    </div>
                    <span
                        class="font-newprimary text-black text-lg text-center group-hover:font-bold transition-all duration-300">Mathematics</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div
                        class="transition-all duration-300 w-32 h-32 md:w-48 md:h-40 group-hover:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/physics.webp') }}"
                            alt="EduALL icons"
                            class="w-12 h-12 md:w-20 md:h-20 group-hover:scale-125 transition-all duration-700 object-contain">
                    </div>
                    <span
                        class="font-newprimary text-black text-lg text-center group-hover:font-bold transition-all duration-300">Physics</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div
                        class="transition-all duration-300 w-32 h-32 md:w-48 md:h-40 group-hover:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/chemistry.webp') }}"
                            alt="EduALL icons"
                            class="w-12 h-12 md:w-20 md:h-20 group-hover:scale-125 transition-all duration-700 object-contain">
                    </div>
                    <span
                        class="font-newprimary text-black text-lg text-center group-hover:font-bold transition-all duration-300">Chemistry</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div
                        class="transition-all duration-300 w-32 h-32 md:w-48 md:h-40 group-hover:h-52 bg-newprimary acad-tutor-s3-polygon flex items-center justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/biology.webp') }}"
                            alt="EduALL icons"
                            class="w-12 h-12 md:w-20 md:h-20 group-hover:scale-125 transition-all duration-700 object-contain">
                    </div>
                    <span
                        class="font-newprimary text-black text-lg text-center group-hover:font-bold transition-all duration-300">Biology</span>
                </div>
                <div class="flex flex-col items-center gap-4 group">
                    <div
                        class="transition-all duration-300 w-32 h-32 md:w-48 md:h-40 group-hover:h-52 bg-black acad-tutor-s3-polygon flex items-center justify-center">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s3-icons/economics.webp') }}"
                            alt="EduALL icons"
                            class="w-12 h-12 md:w-20 md:h-20 group-hover:scale-125 transition-all duration-700 object-contain">
                    </div>
                    <span
                        class="font-newprimary text-black text-lg text-center group-hover:font-bold transition-all duration-300">Economics</span>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-16">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">MORE THAN JUST TUTORING</h2>

            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-12">

                @foreach (__('pages/programs/academic_tutoring.benefit_section') as $item)
                    <div
                        class="acad-tutor-s4-item @if ($loop->index == 0) acad-tutor-s4-active @else acad-tutor-s4-inactive @endif relative overflow-hidden">
                        <span>{{ $item['s4_item_text_inactive'] }}</span>
                        <p class="desc">{{ $item['description'] }}</p>
                        <div class="polygon @if ($loop->index % 2 == 0) bg-newprimary @else bg-black @endif"></div>
                        <div class="w-full h-full bg-black">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s4-figure-' . ($loop->index + 1) . '.webp') }}"
                                alt="EduALL figure">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="py-16">
        <div class="flex new-main-container w-full flex-col items-center relative">
            <div
                class="absolute top-0 left-0 right-0 px-8 py-8 h-[105%] md:h-2/3 max-w-4xl mx-auto w-full bg-newprimary rounded-2xl -z-10">
                <div class="flex items-center justify-center gap-4 md:gap-8">
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                        {{ __('pages/programs/academic_tutoring.private_class_title') }}
                    </h3>
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                </div>
            </div>
            <div class="flex flex-col w-full md:flex-row gap-8 mt-32 md:mt-24">
                @foreach (__('pages/programs/academic_tutoring.private_class_list') as $item)
                    <div class="rounded-md bg-white flex flex-col w-full shadow-xl py-4 px-4">
                        <h4 class="font-newprimary font-bold text-black text-center text-4xl uppercase py-2">
                            {{ $item['title'] }}
                        </h4>
                        <div class="flex justify-between py-4 w-full">
                            <div class="flex flex-col">
                                <div class="flex items-center gap-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-base text-white"></i>
                                    </div>
                                    <h4 class="font-newprimary font-semibold text-newprimary text-xl">
                                        {{ $item['duration'] }}
                                    </h4>
                                </div>
                                <h4 class="ml-10 font-newprimary text-black text-base">
                                    {{ $item['duration_text'] }}
                                </h4>
                            </div>
                        </div>
                        <div class="flex justify-between w-full">
                            <div class="flex flex-col">
                                <div class="flex items-center gap-4">
                                    <div class="h-6 w-6 bg-newprimary flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check fa-base text-white"></i>
                                    </div>
                                    <h4 class="font-newprimary font-semibold text-newprimary text-xl">
                                        {{ $item['sessions'] }}
                                    </h4>
                                </div>
                                <h4 class="ml-10 font-newprimary text-black text-base">
                                    {{ $item['sessions_text'] }}
                                </h4>
                            </div>
                        </div>
                        <x-button href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                            title="{{ __('pages/programs/admission_mentoring.learn_more') }}" bg-color="newprimary"
                            padding-x="8" padding-y="1.5" />
                        <span class="mt-1 text-sm text-[#9C9C9C] text-center">
                            {{ __('pages/programs/admission_mentoring.or_book_free_consultation') }}
                            <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                                class="underline text-newprimary hover:text-black">
                                {{ __('pages/programs/admission_mentoring.book_now') }}
                            </a>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="flex new-main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_tutoring.why_us_title') }}</h2>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                @foreach (__('pages/programs/academic_tutoring.why_us_list') as $item)
                    <div class="p-2 w-full h-full">
                        <div
                            class="flex flex-col items-center justify-start bg-[#F2F1F1] p-4 rounded-xl shadow-lg h-full relative">
                            <div class="w-10 h-10 absolute top-0 -translate-y-1/2">
                                <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/why-us/why-us-0' . $loop->iteration . '.png') }}"
                                    alt="" class="w-full h-full object-contain">
                            </div>
                            <h4 class="mt-4 font-semibold text-lg leading-6">{{ $item['title'] }}</h4>
                            <p class="text-center mt-2 text-sm">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <section class="py-16">
        <div class="flex new-main-container w-full flex-col items-center">
            <h2 class="font-bold text-4xl uppercase text-center">
                {{ __('pages/programs/academic_tutoring.ib_extended_title') }}
            </h2>
            <p class="mt-4 leading-5 text-base text-center max-w-2xl mx-auto">
                {{ __('pages/programs/academic_tutoring.ib_extended_description') }}</p>
            <div class="flex flex-wrap gap-4 mt-4 justify-center">
                @foreach (__('pages/programs/academic_tutoring.ib_extended_tag') as $item)
                    <div class="pl-2 pr-3 py-1 rounded-md border-black border flex items-center justify-center gap-2">
                        <div class="w-6 h-5">
                            <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/icons/' . $item['image']) }}"
                                alt="icons" class="w-full h-full object-contain">
                        </div>
                        <span class="text-semibold flex-1">{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 w-full max-w-4xl">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="w-full md:w-1/2">
                        <h4 class="font-semibold text-4xl text-center md:text-left">
                            {{ __('pages/programs/academic_tutoring.ib_extended_topic_title') }}</h4>
                        <div class="flex flex-col gap-2 mt-4 w-full">
                            @foreach (__('pages/programs/academic_tutoring.ib_extended_topic') as $item)
                                <div class="flex gap-2 items-center bg-[#393636] py-2 px-2 rounded-md w-full">
                                    <div class="h-4 w-4 bg-white flex items-center justify-center rounded-full">
                                        <i class="fa-solid fa-check text-sm font-bold text-newprimary"></i>
                                    </div>
                                    <span class="font-semibold text-sm text-white">
                                        {{ $item }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/revamp/IB_essay_illustration.webp') }}"
                            alt="illustration">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="new-main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl uppercase">
                {{ __('pages/programs/academic_tutoring.free_trial_title') }}
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                {{ __('pages/programs/academic_tutoring.free_trial_desc') }}
            </p>
            <x-button type="secondary" href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                title="{{ __('pages/programs/academic_tutoring.free_trial_button') }}"/>
        </div>
    </section>

    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center uppercase">
                {{ __('pages/programs/academic_tutoring.tetimony_title') }}</h2>
        </div>
        <div class="main-container mt-12">
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
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
        const acad_tutor_items = document.querySelectorAll('.acad-program-acad-tutor-item');
        let s1ActiveIndex = 0;

        acad_tutor_items.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s1ActiveIndex) {
                    acad_tutor_items[s1ActiveIndex].classList.add('acad-program-acad-tutor-inactive');
                    acad_tutor_items[s1ActiveIndex].classList.remove('acad-program-acad-tutor-active');
                    acad_tutor_items[it].classList.remove('acad-program-acad-tutor-inactive');
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    s1ActiveIndex = it;
                }
            })
        });

        // animation
        const benefit_element = document.getElementById("banner");
        const animation_circle_persentage = document.querySelectorAll(".animation_circle_persentage");
        const persentages = [97, 98, 100];
        const animation_times = [1970, 1980, 2000];
        const position = benefit_element.offsetTop;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset >= position) {
                animation_circle_persentage.forEach((element, it) => {
                    persentage = animation_circle_persentage[it].textContent.trim();
                    if (persentage == '0%') {
                        persentage_animation(animation_circle_persentage[it], persentages[it],
                            animation_times[it]);
                    }
                })
            }
        });

        function persentage_animation(persentage_element, persentage, animation_time) {
            let percent = 0;
            let intervalID = setInterval(() => {
                percent++;
                persentage_element.textContent = `${percent}%`;
                if (percent >= persentage) {
                    clearInterval(intervalID);
                }
            }, animation_time / persentage);
        }

        const s2_item = document.querySelectorAll('.acad-tutor-s2-item');
        const s2_item_text = [
            "Personalized Learning Paths",
            "Diverse Subject Expertise",
            "Expert Tutor Qualifications",
            "On-Demand Schedule",
        ];
        let s2ActiveIndex = 0;

        s2_item.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s2ActiveIndex) {
                    s2_item[s2ActiveIndex].classList.add('acad-tutor-s2-inactive');
                    s2_item[s2ActiveIndex].classList.remove('acad-tutor-s2-active');
                    s2_item[s2ActiveIndex].querySelector('span').textContent = s2ActiveIndex + 1;
                    s2_item[it].classList.remove('acad-tutor-s2-inactive');
                    s2_item[it].classList.add('acad-tutor-s2-active');
                    s2_item[it].querySelector('span').classList.remove('opacity-100');
                    s2_item[it].querySelector('span').classList.add('opacity-0');
                    setTimeout(() => {
                        s2_item[it].querySelector('span').textContent = s2_item_text[it];
                        s2_item[it].querySelector('span').classList.add('opacity-100');
                        s2_item[it].querySelector('span').classList.remove('opacity-0');
                    }, 300);
                    s2ActiveIndex = it;
                }
            })
        });

        const s4_item = document.querySelectorAll('.acad-tutor-s4-item');
        // const s4_item_text_active = [
        //     "Discover Your Path",
        //     "Insightful Academic Analysis",
        //     "Customized Learning Approach",
        //     "Dynamic Goal Achievement",
        // ];
        const s4_item_text_active = [
            '{{ __('pages/programs/academic_tutoring.s4_item_text_active.0') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_active.1') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_active.2') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_active.3') }}',
        ];
        const s4_item_text_inactive = [
            '{{ __('pages/programs/academic_tutoring.s4_item_text_inactive.0') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_inactive.1') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_inactive.2') }}',
            '{{ __('pages/programs/academic_tutoring.s4_item_text_inactive.3') }}',
        ];
        let s4ActiveIndex = 0;

        s4_item.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s4ActiveIndex) {
                    s4_item[s4ActiveIndex].classList.add('acad-tutor-s4-inactive');
                    s4_item[s4ActiveIndex].classList.remove('acad-tutor-s4-active');
                    s4_item[s4ActiveIndex].querySelector('span').textContent = s4_item_text_inactive[
                        s4ActiveIndex];
                    s4_item[it].classList.remove('acad-tutor-s4-inactive');
                    s4_item[it].classList.add('acad-tutor-s4-active');
                    s4_item[it].querySelector('span').classList.remove('opacity-100');
                    s4_item[it].querySelector('span').classList.add('opacity-0');
                    setTimeout(() => {
                        s4_item[it].querySelector('span').textContent = s4_item_text_active[it];
                        s4_item[it].querySelector('span').classList.add('opacity-100');
                        s4_item[it].querySelector('span').classList.remove('opacity-0');
                    }, 300);
                    s4ActiveIndex = it;
                }
            })
        });


        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 3000,
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

        new Splide(splides[1], {
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
@endpush
