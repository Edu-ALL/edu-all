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
    <title>Exploration & Profile Building | EduALL</title>
    <meta name="title" content="Exploration & Profile Building | EduALL" />
    <meta name="description"
        content="EduALL's profile building program for high school students in Indonesia. Build extracurricular achievements and a standout university application portfolio." />
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

        th, td {
            border: 0 !important;
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
                <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-20 leading-8"
                    itemprop="headline">
                    Exploration & <br> Profile Building Program
                </h1>

                <p class="text-gray-400 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                    itemprop="description">
                    Designed specifically for students in grades 7 to 11, this program helps them build a strong foundation
                    before university applications. Through personalized mentorship, hands-on experiences, and
                    extracurricular achievements through student clubs, research, competitions, internships, and passion
                    projects, EduALL helps students discover their passions and strengths.
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== Our Score Section ==================== --}}
    <section class="relative z-10 bg-[#00003F]">
        <div class="pt-6 md:pt-10 new-main-container md:px-0">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[25px] font-bold text-white">
                        1200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Students Mentored
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[25px] font-bold text-white">
                        100%
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Acceptance Rate
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[25px] font-bold text-white">
                        $2.7 Million+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        in Merit Based Scholarships Secured
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[25px] font-bold text-white">
                        3500+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Letter of Acceptances from Top Universities
                    </p>
                </div>

                <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[25px] font-bold text-white">
                        200+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Top Global Universities Reached Worldwide
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container my-20">
        <div class=" text-newprimary p-5">
            <div class="flex items-start justify-center gap-5">
                <div class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            1-on-1 <br> Mentoring
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-20">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-1.png') }}" alt="EduALL"
                            class="w-full rounded-2xl shadow-xl">
                    </div>
                </div>
                <div class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            Strategic <br>
                            Roadmap
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-10">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-2.png') }}" alt="EduALL"
                            class="w-full rounded-2xl shadow-xl">
                    </div>
                </div>
                <div class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            Well-Rounded <br>
                            Support
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-20">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-3.png') }}" alt="EduALL"
                            class="w-full rounded-2xl shadow-xl">
                    </div>
                </div>
                <div class="w-1/4 h-full">
                    <div class="w-full flex flex-col items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-4xl font-light">
                            100 +
                        </h3>
                        <p class="text-dark/70">
                            Certificates & Awards
                        </p>
                    </div>

                    <div class="px-5 flex justify-center mt-10">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-4.png') }}" alt="EduALL"
                            class="w-full rounded-2xl shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-10">
        <div class="flex items-center gap-10">
            <div class="w-1/2">
                <h2 class="text-5xl font-semibold mb-5 text-newprimary">
                    <span class="text-xl">
                        Designed for Grades 7–11 <br>
                    </span>
                    Your Pathway, <br> Your Pace
                </h2>
                <p class="text-dark/50 text-lg mb-5">
                    Every student starts from a different place. Whether you're exploring future majors, building
                    extracurricular achievements, or launching a passion project, Exploration & Profile Building gives you
                    the
                    structure and guidance to make every step count. As an independent education consultant, we build your
                    path
                    around your goals. When you are ready for end-to-end support, our Ultimate Mentoring program takes you
                    through to acceptance.
                </p>

                <a href="#" class="bg-newprimary text-white py-2 px-5 rounded-full">
                    Get Consultation
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="w-1/2">
                <div class="accordion-group">
                    <div class="border rounded-2xl overflow-hidden mb-3">
                        <button
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5 text-xl">
                            <span>Flexible Exploration</span>
                            <span class="text-2xl transition-all duration-200">+</span>
                        </button>

                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                Choose the extracurricular activities that fit your interests (student clubs,
                                research, competitions, or professional exposure), all customized to your goals
                                and university application targets.
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-2xl overflow-hidden mb-3">
                        <button
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5 text-xl">
                            <span>Student-Driven Development</span>
                            <span class="text-2xl transition-all duration-200">+</span>
                        </button>

                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                You take the steering wheel, and we provide the expert structure. Define the
                                specific project, research topic, or global competition you want to tackle, and
                                your dedicated mentor will co-create the roadmap with you.
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-2xl overflow-hidden mb-3">
                        <button
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-semibold gap-5 text-xl">
                            <span>Focused Profile Building</span>
                            <span class="text-2xl transition-all duration-200">+</span>
                        </button>

                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                Focus purely on tangible results. We design, launch, and polish portfolios,
                                research papers, and passion projects that go directly onto your university
                                application as documented extracurricular achievements.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-[#D7D7D7] to-[#f0f0f0] my-20 py-20">
        <div class="new-main-container py-20">
            <h2 class="text-6xl font-light uppercase text-center">
                Impact project mentoring
            </h2>

            <div class="overflow-x-auto rounded-2xl mt-20 bg-white">
                <table class="min-w-full border-collapse">
                    <thead class="bg-white text-dark">
                        <tr>
                            <th class="px-6 py-4 text-center font-semibold rounded-xl shadow-md">Program</th>
                            <th class="px-6 py-4 text-center font-semibold rounded-xl shadow-md">Grades 7–8</th>
                            <th class="px-6 py-4 text-center font-semibold rounded-xl shadow-md">Grades 9–11</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700 ">
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Major Exploration</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Explore different majors and career pathways through guided exposure
                                and hands-on activities.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Refine your academic interests and identify majors that align with
                                your strengths and long-term goals.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Future Skills</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Learn practical skills such as public speaking, content creation,
                                AI, and presentation.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Apply these skills through research, leadership, competitions,
                                and real-world projects.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Passion Project</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Design and launch your first guided passion project.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Lead a larger-scale passion project that creates measurable impact.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Research & Competitions</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Participate in introductory research and selected competitions
                                based on your interests.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Pursue advanced research, publish papers, and compete in national
                                or international competitions.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Portfolio Development</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Build your first digital portfolio to document your learning journey.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Curate a university-ready portfolio showcasing your achievements
                                and growth.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-semibold rounded-xl bg-newprimary text-white shadow-md" nowrap>Showcase</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Present your work to parents and the EduALL community event.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Present impactful projects and accomplishments through showcases
                                and university applications.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section class="new-main-container my-10">
        <div class="bg-[#D7D7D7] rounded-xl shadow-md p-10">
            <p>
                Why Choose Us
            </p>
            <h2 class="text-4xl font-light uppercase">
                Discover the World Beyond the Classroom
            </h2>
            <p>
                Move beyond academics and discover how your interests come to life in the real world. Whether you're building a passion project, conducting research, working with industry professionals, or joining global competitions, every experience helps you develop the skills, achievements, and direction that strengthen both your university applications and your future career.
            </p>
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
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
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
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
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
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
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
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
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
