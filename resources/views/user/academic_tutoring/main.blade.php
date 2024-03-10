@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_tutoring.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 bg-academic-tutoring-header bg-cover bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-20 gap-8">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center">ACADEMIC TUTORING</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-lg">
                Elevate your IBDP & Cambridge IGCSE scores and unlock doors to prestigious universities with our academic
                tutoring, covering a variety of subjects.
            </p>
            <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                class="mt-8 bg-newprimary text-white font-newprimary text-lg font-semibold py-2 px-6 shadow-xl hover:bg-black hover:px-8 transition-all duration-150">Register
                Here</a>
        </div>
    </section>

    {{-- SECTION 1 --}}
    <div class="py-16" id="benefit">
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
    </div>

    {{-- SECTION 2 --}}
    <div class="pb-16" id="acad-tutoring-section-2">
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
    </div>

    {{-- SECTION 3 --}}
    <div class="py-16">
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
    </div>

    {{-- SECTION 4 --}}
    <div class="py-16">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">MORE THAN JUST TUTORING</h2>

            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-12">
                <div class="acad-tutor-s4-item acad-tutor-s4-active relative overflow-hidden">
                    <span>Discover Your Path</span>
                    <p class="desc">Find your unique learning style and best-suited mentors</p>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s4-figure-1.webp') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-tutor-s4-item acad-tutor-s4-inactive relative overflow-hidden">
                    <span>Insightful</span>
                    <p class="desc">Get details of your academic  strengths and weaknesses</p>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black -z-10">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s4-figure-2.webp') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-tutor-s4-item acad-tutor-s4-inactive relative overflow-hidden">
                    <span>Customized</span>
                    <p class="desc">Choose a tutoring style that suits your learning needs; Concept-focused,
                        Question-drilling, or Balanced.</p>
                    <div class="polygon bg-newprimary"></div>
                    <div class="w-full h-full bg-black -z-10">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s4-figure-3.webp') }}"
                            alt="EduALL figure">
                    </div>
                </div>
                <div class="acad-tutor-s4-item acad-tutor-s4-inactive relative overflow-hidden">
                    <span>Dynamic</span>
                    <p class="desc">Enjoy a mix of intensive and fun learning sessions, with regular feedback and
                        progress reports to parents</p>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black -z-10">
                        <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s4-figure-4.webp') }}"
                            alt="EduALL figure">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <div class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">PRIVATE CLASS</h2>
            <span class="font-newprimary mt-2 text-lg md:text-2xl text-black text-center">Private class with 3 different
                packages that
                you can choose</span>
            <div class="flex flex-col w-full md:flex-row gap-8 mt-6">
                <div class="rounded-md bg-black flex flex-col w-full">
                    <div class="rounded-md bg-newprimary py-2 px-5"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 50%, 95% 100%, 0 100%);">
                        <h4 class="font-newprimary font-semibold text-white text-2xl uppercase">
                            Basic
                        </h4>
                    </div>
                    <div class="flex justify-between py-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                2 Months
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Intensive Tutoring
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="40" height="30" viewBox="0 0 45 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.9545 3.18182H35V0.397727C35 0.178977 34.821 0 34.6023 0H31.8182C31.5994 0 31.4205 0.178977 31.4205 0.397727V3.18182H24.0625V0.397727C24.0625 0.178977 23.8835 0 23.6648 0H20.8807C20.6619 0 20.483 0.178977 20.483 0.397727V3.18182H13.125V0.397727C13.125 0.178977 12.946 0 12.7273 0H9.94318C9.72443 0 9.54545 0.178977 9.54545 0.397727V3.18182H1.59091C0.710938 3.18182 0 3.89276 0 4.77273V33.4091C0 34.2891 0.710938 35 1.59091 35H42.9545C43.8345 35 44.5455 34.2891 44.5455 33.4091V4.77273C44.5455 3.89276 43.8345 3.18182 42.9545 3.18182ZM17.8977 26.25C17.8977 26.4688 17.7188 26.6477 17.5 26.6477H8.35227C8.13352 26.6477 7.95455 26.4688 7.95455 26.25V23.8636C7.95455 23.6449 8.13352 23.4659 8.35227 23.4659H17.5C17.7188 23.4659 17.8977 23.6449 17.8977 23.8636V26.25ZM17.8977 19.4886C17.8977 19.7074 17.7188 19.8864 17.5 19.8864H8.35227C8.13352 19.8864 7.95455 19.7074 7.95455 19.4886V17.1023C7.95455 16.8835 8.13352 16.7045 8.35227 16.7045H17.5C17.7188 16.7045 17.8977 16.8835 17.8977 17.1023V19.4886ZM36.5163 14.9496L28.3132 26.3196C28.24 26.4212 28.1436 26.504 28.0321 26.5611C27.9206 26.6182 27.7971 26.648 27.6719 26.648C27.5466 26.648 27.4231 26.6182 27.3116 26.5611C27.2001 26.504 27.1038 26.4212 27.0305 26.3196L21.353 18.4545C21.1641 18.1911 21.353 17.8232 21.6761 17.8232H24.4055C24.6591 17.8232 24.8977 17.9474 25.0469 18.1513L27.6719 21.7855L32.8274 14.6413C32.9766 14.4325 33.2152 14.3132 33.4688 14.3132H36.1932C36.5163 14.3182 36.7053 14.6861 36.5163 14.9496Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pb-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                5 Sessions
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Up to 90 Minutes
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8712 1.23C14.5975 1.27826 14.3251 1.33391 14.0537 1.39474L14.3473 2.71422C14.5967 2.65804 14.8471 2.60704 15.1059 2.56139C23.8931 1.01197 32.2633 6.87286 33.8128 15.6601C35.3622 24.4472 29.5013 32.8175 20.7141 34.3669C14.0867 35.5355 7.6964 32.4905 4.2913 27.1498L6.22674 26.1755L2.19721 24.2701L1.49895 28.5497L3.07951 27.7601C6.75216 33.6103 13.7298 36.9712 20.9489 35.6983C30.4609 34.021 36.8214 24.9374 35.1442 15.4253C33.4669 5.91323 24.3832 -0.447232 14.8712 1.23ZM12.6196 1.78259C11.6587 2.0855 10.7491 2.46324 9.87512 2.91326L10.5122 4.1043C11.3093 3.69378 12.1554 3.34553 13.0296 3.06937L12.6196 1.78259ZM8.60074 3.64437C7.74943 4.17962 6.95579 4.7825 6.21866 5.44633L7.11972 6.44746C7.79758 5.83678 8.5309 5.28115 9.3136 4.78927L8.60074 3.64437ZM5.15195 6.49013C4.47809 7.20908 3.86586 7.98341 3.32171 8.80492L4.44712 9.54302C4.94666 8.78609 5.5149 8.07271 6.13042 7.41125L5.68969 6.9879L5.15195 6.49013ZM10.4045 6.21832L10.3065 7.56568L27.0808 8.83916L27.1793 7.49476L10.4045 6.21832ZM2.55569 10.0748C2.08294 10.9361 1.68275 11.8456 1.35935 12.7797L2.6317 13.2265C2.92929 12.3579 3.29905 11.5225 3.73507 10.721L2.55569 10.0748ZM12.1108 9.06114C12.1614 11.0351 13.0378 13.1076 14.194 14.7341C14.8422 15.6417 15.573 16.4128 16.2547 16.9485C16.6267 17.2414 16.9843 17.4529 17.2993 17.5956L17.1764 19.2341C16.8413 19.3237 16.4576 19.4829 16.0412 19.7165C15.2845 20.1397 14.446 20.7909 13.6719 21.5909C12.2776 23.0265 11.104 24.9342 10.7604 26.8786L23.7093 27.8671C23.6586 25.8931 22.7822 23.8207 21.626 22.1942C20.9778 21.2865 20.247 20.5155 19.5653 19.9798C19.1934 19.6869 18.8357 19.4754 18.5208 19.3327L18.6437 17.6941C18.97 17.5985 19.3625 17.4454 19.7789 17.2118C20.5356 16.7886 21.3741 16.1374 22.1482 15.3373C23.5424 13.9018 24.7161 11.9941 25.0596 10.0497L12.1108 9.06114ZM0.932642 14.2048C0.694909 15.1619 0.5334 16.1361 0.457556 17.1333L1.80526 17.216C1.87548 16.3037 2.02341 15.4082 2.24312 14.5305L0.932642 14.2048ZM0.410448 18.6135C0.418886 19.5654 0.505029 20.534 0.675882 21.503L0.68762 21.5695L2.0164 21.32L2.00727 21.2682C1.84946 20.3732 1.76971 19.4797 1.76117 18.5965L0.410448 18.6135ZM8.73926 28.0891L8.64075 29.4335L25.4153 30.7085L25.5138 29.3641L8.73926 28.0891Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-black flex flex-col w-full">
                    <div class="rounded-md bg-newprimary py-2 px-5"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 50%, 95% 100%, 0 100%);">
                        <h4 class="font-newprimary font-semibold text-white text-2xl uppercase">
                            PRO
                        </h4>
                    </div>
                    <div class="flex justify-between py-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                5 Months
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Intensive Tutoring
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="40" height="30" viewBox="0 0 45 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.9545 3.18182H35V0.397727C35 0.178977 34.821 0 34.6023 0H31.8182C31.5994 0 31.4205 0.178977 31.4205 0.397727V3.18182H24.0625V0.397727C24.0625 0.178977 23.8835 0 23.6648 0H20.8807C20.6619 0 20.483 0.178977 20.483 0.397727V3.18182H13.125V0.397727C13.125 0.178977 12.946 0 12.7273 0H9.94318C9.72443 0 9.54545 0.178977 9.54545 0.397727V3.18182H1.59091C0.710938 3.18182 0 3.89276 0 4.77273V33.4091C0 34.2891 0.710938 35 1.59091 35H42.9545C43.8345 35 44.5455 34.2891 44.5455 33.4091V4.77273C44.5455 3.89276 43.8345 3.18182 42.9545 3.18182ZM17.8977 26.25C17.8977 26.4688 17.7188 26.6477 17.5 26.6477H8.35227C8.13352 26.6477 7.95455 26.4688 7.95455 26.25V23.8636C7.95455 23.6449 8.13352 23.4659 8.35227 23.4659H17.5C17.7188 23.4659 17.8977 23.6449 17.8977 23.8636V26.25ZM17.8977 19.4886C17.8977 19.7074 17.7188 19.8864 17.5 19.8864H8.35227C8.13352 19.8864 7.95455 19.7074 7.95455 19.4886V17.1023C7.95455 16.8835 8.13352 16.7045 8.35227 16.7045H17.5C17.7188 16.7045 17.8977 16.8835 17.8977 17.1023V19.4886ZM36.5163 14.9496L28.3132 26.3196C28.24 26.4212 28.1436 26.504 28.0321 26.5611C27.9206 26.6182 27.7971 26.648 27.6719 26.648C27.5466 26.648 27.4231 26.6182 27.3116 26.5611C27.2001 26.504 27.1038 26.4212 27.0305 26.3196L21.353 18.4545C21.1641 18.1911 21.353 17.8232 21.6761 17.8232H24.4055C24.6591 17.8232 24.8977 17.9474 25.0469 18.1513L27.6719 21.7855L32.8274 14.6413C32.9766 14.4325 33.2152 14.3132 33.4688 14.3132H36.1932C36.5163 14.3182 36.7053 14.6861 36.5163 14.9496Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pb-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                12 Sessions
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Up to 90 Minutes
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8712 1.23C14.5975 1.27826 14.3251 1.33391 14.0537 1.39474L14.3473 2.71422C14.5967 2.65804 14.8471 2.60704 15.1059 2.56139C23.8931 1.01197 32.2633 6.87286 33.8128 15.6601C35.3622 24.4472 29.5013 32.8175 20.7141 34.3669C14.0867 35.5355 7.6964 32.4905 4.2913 27.1498L6.22674 26.1755L2.19721 24.2701L1.49895 28.5497L3.07951 27.7601C6.75216 33.6103 13.7298 36.9712 20.9489 35.6983C30.4609 34.021 36.8214 24.9374 35.1442 15.4253C33.4669 5.91323 24.3832 -0.447232 14.8712 1.23ZM12.6196 1.78259C11.6587 2.0855 10.7491 2.46324 9.87512 2.91326L10.5122 4.1043C11.3093 3.69378 12.1554 3.34553 13.0296 3.06937L12.6196 1.78259ZM8.60074 3.64437C7.74943 4.17962 6.95579 4.7825 6.21866 5.44633L7.11972 6.44746C7.79758 5.83678 8.5309 5.28115 9.3136 4.78927L8.60074 3.64437ZM5.15195 6.49013C4.47809 7.20908 3.86586 7.98341 3.32171 8.80492L4.44712 9.54302C4.94666 8.78609 5.5149 8.07271 6.13042 7.41125L5.68969 6.9879L5.15195 6.49013ZM10.4045 6.21832L10.3065 7.56568L27.0808 8.83916L27.1793 7.49476L10.4045 6.21832ZM2.55569 10.0748C2.08294 10.9361 1.68275 11.8456 1.35935 12.7797L2.6317 13.2265C2.92929 12.3579 3.29905 11.5225 3.73507 10.721L2.55569 10.0748ZM12.1108 9.06114C12.1614 11.0351 13.0378 13.1076 14.194 14.7341C14.8422 15.6417 15.573 16.4128 16.2547 16.9485C16.6267 17.2414 16.9843 17.4529 17.2993 17.5956L17.1764 19.2341C16.8413 19.3237 16.4576 19.4829 16.0412 19.7165C15.2845 20.1397 14.446 20.7909 13.6719 21.5909C12.2776 23.0265 11.104 24.9342 10.7604 26.8786L23.7093 27.8671C23.6586 25.8931 22.7822 23.8207 21.626 22.1942C20.9778 21.2865 20.247 20.5155 19.5653 19.9798C19.1934 19.6869 18.8357 19.4754 18.5208 19.3327L18.6437 17.6941C18.97 17.5985 19.3625 17.4454 19.7789 17.2118C20.5356 16.7886 21.3741 16.1374 22.1482 15.3373C23.5424 13.9018 24.7161 11.9941 25.0596 10.0497L12.1108 9.06114ZM0.932642 14.2048C0.694909 15.1619 0.5334 16.1361 0.457556 17.1333L1.80526 17.216C1.87548 16.3037 2.02341 15.4082 2.24312 14.5305L0.932642 14.2048ZM0.410448 18.6135C0.418886 19.5654 0.505029 20.534 0.675882 21.503L0.68762 21.5695L2.0164 21.32L2.00727 21.2682C1.84946 20.3732 1.76971 19.4797 1.76117 18.5965L0.410448 18.6135ZM8.73926 28.0891L8.64075 29.4335L25.4153 30.7085L25.5138 29.3641L8.73926 28.0891Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="rounded-md bg-black flex flex-col w-full">
                    <div class="rounded-md bg-newprimary py-2 px-5"
                        style="clip-path: polygon(0 0, 100% 0%, 100% 50%, 95% 100%, 0 100%);">
                        <h4 class="font-newprimary font-semibold text-white text-2xl uppercase">
                            ELITE
                        </h4>
                    </div>
                    <div class="flex justify-between py-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                9 Months
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Intensive Tutoring
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="40" height="30" viewBox="0 0 45 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.9545 3.18182H35V0.397727C35 0.178977 34.821 0 34.6023 0H31.8182C31.5994 0 31.4205 0.178977 31.4205 0.397727V3.18182H24.0625V0.397727C24.0625 0.178977 23.8835 0 23.6648 0H20.8807C20.6619 0 20.483 0.178977 20.483 0.397727V3.18182H13.125V0.397727C13.125 0.178977 12.946 0 12.7273 0H9.94318C9.72443 0 9.54545 0.178977 9.54545 0.397727V3.18182H1.59091C0.710938 3.18182 0 3.89276 0 4.77273V33.4091C0 34.2891 0.710938 35 1.59091 35H42.9545C43.8345 35 44.5455 34.2891 44.5455 33.4091V4.77273C44.5455 3.89276 43.8345 3.18182 42.9545 3.18182ZM17.8977 26.25C17.8977 26.4688 17.7188 26.6477 17.5 26.6477H8.35227C8.13352 26.6477 7.95455 26.4688 7.95455 26.25V23.8636C7.95455 23.6449 8.13352 23.4659 8.35227 23.4659H17.5C17.7188 23.4659 17.8977 23.6449 17.8977 23.8636V26.25ZM17.8977 19.4886C17.8977 19.7074 17.7188 19.8864 17.5 19.8864H8.35227C8.13352 19.8864 7.95455 19.7074 7.95455 19.4886V17.1023C7.95455 16.8835 8.13352 16.7045 8.35227 16.7045H17.5C17.7188 16.7045 17.8977 16.8835 17.8977 17.1023V19.4886ZM36.5163 14.9496L28.3132 26.3196C28.24 26.4212 28.1436 26.504 28.0321 26.5611C27.9206 26.6182 27.7971 26.648 27.6719 26.648C27.5466 26.648 27.4231 26.6182 27.3116 26.5611C27.2001 26.504 27.1038 26.4212 27.0305 26.3196L21.353 18.4545C21.1641 18.1911 21.353 17.8232 21.6761 17.8232H24.4055C24.6591 17.8232 24.8977 17.9474 25.0469 18.1513L27.6719 21.7855L32.8274 14.6413C32.9766 14.4325 33.2152 14.3132 33.4688 14.3132H36.1932C36.5163 14.3182 36.7053 14.6861 36.5163 14.9496Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between pb-4 px-5">
                        <div class="flex flex-col">
                            <h4 class="font-newprimary font-semibold text-newyellow text-xl">
                                22 Sessions
                            </h4>
                            <h4 class="ml-8 font-newprimary text-white text-base">
                                Up to 90 Minutes
                            </h4>
                        </div>
                        <div class="mt-2">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.8712 1.23C14.5975 1.27826 14.3251 1.33391 14.0537 1.39474L14.3473 2.71422C14.5967 2.65804 14.8471 2.60704 15.1059 2.56139C23.8931 1.01197 32.2633 6.87286 33.8128 15.6601C35.3622 24.4472 29.5013 32.8175 20.7141 34.3669C14.0867 35.5355 7.6964 32.4905 4.2913 27.1498L6.22674 26.1755L2.19721 24.2701L1.49895 28.5497L3.07951 27.7601C6.75216 33.6103 13.7298 36.9712 20.9489 35.6983C30.4609 34.021 36.8214 24.9374 35.1442 15.4253C33.4669 5.91323 24.3832 -0.447232 14.8712 1.23ZM12.6196 1.78259C11.6587 2.0855 10.7491 2.46324 9.87512 2.91326L10.5122 4.1043C11.3093 3.69378 12.1554 3.34553 13.0296 3.06937L12.6196 1.78259ZM8.60074 3.64437C7.74943 4.17962 6.95579 4.7825 6.21866 5.44633L7.11972 6.44746C7.79758 5.83678 8.5309 5.28115 9.3136 4.78927L8.60074 3.64437ZM5.15195 6.49013C4.47809 7.20908 3.86586 7.98341 3.32171 8.80492L4.44712 9.54302C4.94666 8.78609 5.5149 8.07271 6.13042 7.41125L5.68969 6.9879L5.15195 6.49013ZM10.4045 6.21832L10.3065 7.56568L27.0808 8.83916L27.1793 7.49476L10.4045 6.21832ZM2.55569 10.0748C2.08294 10.9361 1.68275 11.8456 1.35935 12.7797L2.6317 13.2265C2.92929 12.3579 3.29905 11.5225 3.73507 10.721L2.55569 10.0748ZM12.1108 9.06114C12.1614 11.0351 13.0378 13.1076 14.194 14.7341C14.8422 15.6417 15.573 16.4128 16.2547 16.9485C16.6267 17.2414 16.9843 17.4529 17.2993 17.5956L17.1764 19.2341C16.8413 19.3237 16.4576 19.4829 16.0412 19.7165C15.2845 20.1397 14.446 20.7909 13.6719 21.5909C12.2776 23.0265 11.104 24.9342 10.7604 26.8786L23.7093 27.8671C23.6586 25.8931 22.7822 23.8207 21.626 22.1942C20.9778 21.2865 20.247 20.5155 19.5653 19.9798C19.1934 19.6869 18.8357 19.4754 18.5208 19.3327L18.6437 17.6941C18.97 17.5985 19.3625 17.4454 19.7789 17.2118C20.5356 16.7886 21.3741 16.1374 22.1482 15.3373C23.5424 13.9018 24.7161 11.9941 25.0596 10.0497L12.1108 9.06114ZM0.932642 14.2048C0.694909 15.1619 0.5334 16.1361 0.457556 17.1333L1.80526 17.216C1.87548 16.3037 2.02341 15.4082 2.24312 14.5305L0.932642 14.2048ZM0.410448 18.6135C0.418886 19.5654 0.505029 20.534 0.675882 21.503L0.68762 21.5695L2.0164 21.32L2.00727 21.2682C1.84946 20.3732 1.76971 19.4797 1.76117 18.5965L0.410448 18.6135ZM8.73926 28.0891L8.64075 29.4335L25.4153 30.7085L25.5138 29.3641L8.73926 28.0891Z"
                                    fill="#FFD101" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                class="block mt-12 bg-black text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">Learn
                More</a>
        </div>
    </div>

    {{-- SECTION 6 --}}
    <div class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">WHY US?</h2>
            <div class="flex w-full mt-12 gap-4">
                <div class="w-full md:w-8/12 bg-[#D9D9D9] rounded-lg"
                    style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 90% 100%, 0 100%);">
                    <div class="flex flex-col px-6 pt-4  items-center md:items-start">
                        <span
                            class="bg-newprimary px-3 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg">Flexibility
                            Learning</span>
                        <p class="font-newprimary text-black text-center md:text-start text-base mt-1">Individualized
                            learning schedule designed to
                            maximize your abilities.</p>
                    </div>
                    <div class="flex flex-col px-6 pt-4 items-center md:items-start">
                        <span
                            class="bg-newprimary px-3 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg">On-Demand
                            Schedule</span>
                        <p class="font-newprimary text-black text-center md:text-start text-base mt-1">Flexible time, low
                            waiting period needed.
                            Start your class based on your schedule.</p>
                    </div>
                    <div class="flex flex-col px-6 pt-4 items-center md:items-start">
                        <span
                            class="bg-newprimary px-3 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg">Progress
                            Tracking</span>
                        <p class="font-newprimary text-black text-center md:text-start text-base mt-1">Track the progress
                            through practice test
                            results and receive on-demand parent updates.</p>
                    </div>
                    <div class="flex flex-col px-6 pt py-4 items-center md:items-start">
                        <span
                            class="bg-newprimary px-3 py-0.5 italic text-center md:text-start font-semibold font-newprimary text-white text-lg">Access
                            Anywhere</span>
                        <p class="font-newprimary text-black text-center md:text-start text-base mt-1">We bring the class
                            to you! Learn with our
                            expert tutors online, live.</p>
                    </div>
                </div>
                <div class="hidden md:block md:w-4/12 rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s6-figure.webp') }}"
                        alt="EduALL figure" class="h-full object-cover hover:scale-110 transition-all duration-700">
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 7 --}}
    <div class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-3xl md:text-4xl text-black text-center">WHAT OUR STUDENT SAY</h2>
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
                                            <div class="px-4 mb-4 text-xs font-semibold leading-3">
                                                {!! $testi->testi_subtitle !!}
                                            </div>
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
    </div>

    {{-- SECTION 8 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                Ready to transform your academic journey?
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                Discover the path to achieving your educational aspirations!
            </p>
            <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-bold font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-105 transition-all duration-150">
                Claim your FREE Academic Tutoring Trial

            </a>
        </div>
    </section>

    {{-- SECTION 9 --}}
    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-[40px] text-black text-center">IB EXTENDED ESSAY COACHING
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
        <div class="mt-8 main-container">
            <div class="mt-8 flex flex-col md:flex-row main-container w-full items-center justify-center gap-2">
                <span class="font-newprimary text-lg md:text-2xl font-semibold text-newyellow py-1 px-12 bg-black"
                    style="clip-path: polygon(8% 0%, 100% 0%, 92% 100%, 0% 100%);">FOR IB DIPLOMA STUDENTS</span>
                <span class="font-newprimary text-lg md:text-2xl font-bold text-black py-1 px-8 bg-newyellow uppercase"
                    style="clip-path: polygon(18% 0%, 100% 0%, 82% 100%, 0% 100%);">Grade 12</span>
            </div>
            <div class="mt-8 flex flex-col">
                <h2 class="font-newprimary font-bold text-3xl text-black text-center">TOPICS COVERED</h2>
                <div class="mt-8 md:mt-0 flex flex-wrap items-center md:gap-8">
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-end gap-2 md:order-1 order-1">
                        <span
                            class="w-48 md:w-40 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-6 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to start and find the
                            right EE topic</span>
                        <span
                            class="w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Construct a bulletproof
                            research questionc</span>
                    </div>
                    <div class="w-3/4 md:w-1/4 md:order-2 order-3 mx-auto"><img
                            src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s9-figure.webp') }}"
                            alt="EduALL figure"></div>
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-start gap-2 md:order-3 order-2">
                        <span
                            class="w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">Navigate the citation
                            style jungle</span>
                        <span
                            class="w-48 md:w-44 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Conquer proscrastination
                            by agile project management</span>
                        <span
                            class="w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to write your first
                            draft</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
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
        const s4_item_text_active = [
            "Discover Your Path",
            "Insightful Academic Analysis",
            "Customized Learning Approach",
            "Dynamic Goal Achievement",
        ];
        const s4_item_text_inactive = [
            "Discover",
            "Insightful",
            "Customized",
            "Dynamic",
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
@endsection
