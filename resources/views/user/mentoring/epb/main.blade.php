@extends('layout.user.main')
@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Admission Mentoring', 'url' => route('admissions_mentoring', [app()->getLocale()])],
            ['name' => 'Graduate', 'url' => url()->current()],
        ];
        $currentUrl = url()->current();
        $siteName = 'EduALL';
        $programName = 'Exploration & Profile Building (EPB)';
    @endphp
    <title>{{ $programName }} Program for Grades 7-11 | Build University Profile | EduALL</title>
    
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ $programName }} Program for Grades 7-11 | Build University Profile | {{ $siteName }}" />
    <meta name="description" content="EduALL's Exploration & Profile Building program helps students in grades 7-11 build extracurricular achievements, passion projects, research, and a standout university application portfolio. 1200+ students mentored with 100% acceptance rate." />
    <meta name="keywords" content="exploration profile building, EPB program, extracurricular activities high school, university application portfolio, passion projects students, academic research high school, international competitions, internship high school, digital portfolio, student clubs, konsultan pendidikan Indonesia, university preparation grades 7-11, study abroad preparation, university admission mentoring, konsultant pendidikan, profile building program, leadership development students" />
    <meta name="author" content="{{ $siteName }}" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="language" content="Indonesian" />
    <meta name="revisit-after" content="7 days" />
    <link rel="canonical" href="{{ $currentUrl }}" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $currentUrl }}" />
    <meta property="og:title" content="{{ $programName }} Program for Grades 7-11 | {{ $siteName }}" />
    <meta property="og:description" content="Build extracurricular achievements and a standout university application portfolio. 1200+ students mentored, $2.7M+ in scholarships secured, 3500+ acceptances from top universities." />
    <meta property="og:image" content="{{ asset('assets/img/mentoring/epb/1. EPB Background Hero.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="EduALL Exploration & Profile Building Program" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="{{ $siteName }}" />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ $currentUrl }}" />
    <meta property="twitter:title" content="{{ $programName }} Program | Build Your University Profile | {{ $siteName }}" />
    <meta property="twitter:description" content="Help your child build extracurricular achievements, passion projects, and a standout university application. Grades 7-11. 100% acceptance rate." />
    <meta property="twitter:image" content="{{ asset('assets/img/mentoring/epb/1. EPB Background Hero.png') }}" />
    <meta property="twitter:image:alt" content="EduALL Exploration & Profile Building Program" />
    
    <!-- Geo Tags -->
    <meta name="geo.region" content="ID" />
    <meta name="geo.placename" content="Indonesia" />
    
    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ $siteName }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/img/logo.png') }}",
        "description": "Leading education consultant in Indonesia specializing in university admission mentoring and profile building programs for students.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "ID",
            "addressLocality": "Indonesia"
        },
        "sameAs": [
            "https://www.instagram.com/eduall",
            "https://www.linkedin.com/company/eduall"
        ]
    }
    </script>
    
    <!-- Structured Data - BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/' . app()->getLocale()) }}"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Program",
                "item": "{{ url('/' . app()->getLocale() . '/program') }}"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Admission Mentoring",
                "item": "{{ route('admissions_mentoring', [app()->getLocale()]) }}"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Exploration & Profile Building",
                "item": "{{ $currentUrl }}"
            }
        ]
    }
    </script>
    
    <!-- Structured Data - Course -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "{{ $programName }}",
        "description": "A comprehensive program for students in grades 7-11 to build extracurricular achievements, passion projects, research, and a standout university application portfolio.",
        "provider": {
            "@type": "Organization",
            "name": "{{ $siteName }}",
            "url": "{{ url('/') }}"
        },
        "educationalLevel": "Middle School to High School",
        "targetAudience": [
            {
                "@type": "Audience",
                "audienceType": "Students in Grades 7-11"
            }
        ],
        "offers": {
            "@type": "Offer",
            "description": "Free consultation available",
            "price": "0",
            "priceCurrency": "IDR"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "150",
            "bestRating": "5"
        }
    }
    </script>
    
    <!-- Structured Data - FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What extracurricular activities does the EPB program support?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EPB covers student clubs (Business, Computer Science, Engineering, Life Science), personal passion projects, academic research and publication, international competitions, internship and job shadowing, and digital portfolio development. You select the activities that match your interests and university application goals."
                }
            },
            {
                "@type": "Question",
                "name": "When is the best time to start?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EduALL recommends Grade 7 or 8 for students building a broad university application profile. EPB is equally valuable for Grade 10-11 students who need to strengthen a specific area (a passion project, research paper, or internship) before university admissions season."
                }
            },
            {
                "@type": "Question",
                "name": "Is this only for students targeting the US or UK?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Not at all. We have helped students across Indonesia build profiles for universities in the US, UK, Europe, Australia, Asia, and beyond. The extracurricular achievements we build strengthen any application, regardless of destination."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between EPB and Ultimate Mentoring?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EPB is for students who want to build their extracurricular profile and explore career directions before applications begin. Ultimate Mentoring is EduALL's end-to-end university admissions program—covering strategy, personal statement, essays, and university selection through to acceptance. Many students complete EPB first and transition into Ultimate Mentoring when ready."
                }
            },
            {
                "@type": "Question",
                "name": "How do I know which program is right for me?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Grade 7-10 and focused on building extracurricular achievements? Start with EPB. Grade 11-12 and actively preparing to submit university applications? Ultimate Mentoring is built for you. Our free initial consultation will confirm the right fit."
                }
            }
        ]
    }
    </script>
    
    <!-- Structured Data - WebPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "{{ $programName }} | {{ $siteName }}",
        "description": "Build extracurricular achievements and a standout university application portfolio through personalized mentorship, hands-on experiences, and student clubs.",
        "url": "{{ $currentUrl }}",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ $currentUrl }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "{{ $siteName }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('assets/img/logo.png') }}"
            }
        },
        "inLanguage": "id-ID"
    }
    </script>
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

        /* ==================== Project Slider Styles ==================== */
        #project-showcase {
            padding: 20px 0;
        }

        #project-showcase .splide__slide {
            opacity: .4;
        }

        #project-showcase .splide__slide .card {
            width: auto;
            display: block;
            transition: transform .35s ease, opacity .35s ease;
            transform: scale(.8);
            transform-origin: center center;
        }

        #project-showcase .splide__slide.is-active {
            opacity: 1;
        }

        #project-showcase .splide__slide.is-active .card {
            transform: scale(1);
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

        th,
        td {
            border: 0 !important;
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/mentoring/epb/1. EPB Background Hero.png') }}"
                    alt="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}"
                    title="{{ $banners->alt ?? 'EduALL Study Abroad Banner' }}" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full main-container top-[27vh] md:top-[25vh]">
                <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-20 leading-8"
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

    <section class="new-main-container my-20" aria-label="Program Features">
        <div class=" text-newprimary p-5">
            <div class="flex items-start justify-center gap-5">
                <article class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            1-on-1 <br> Mentoring
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-20">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-1.png') }}" alt="1-on-1 Personalized Mentoring Session at EduALL"
                            class="w-full rounded-2xl shadow-xl" loading="lazy">
                    </div>
                </article>
                <article class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            Strategic <br>
                            Roadmap
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-10">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-2.png') }}" alt="Strategic Roadmap Planning for University Applications"
                            class="w-full rounded-2xl shadow-xl" loading="lazy">
                    </div>
                </article>
                <article class="w-1/4 h-full">
                    <div class="w-full flex items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-3xl font-light">
                            Well-Rounded <br>
                            Support
                        </h3>
                    </div>

                    <div class="px-5 flex justify-center mt-20">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-3.png') }}" alt="Well-Rounded Support for Student Development"
                            class="w-full rounded-2xl shadow-xl" loading="lazy">
                    </div>
                </div>
                <article class="w-1/4 h-full">
                    <div class="w-full flex flex-col items-center justify-center text-center border-r border-dark/30 px-10">
                        <h3 class="text-4xl font-light">
                            100 +
                        </h3>
                        <p class="text-dark/70">
                            Certificates & Awards
                        </p>
                    </div>

                    <div class="px-5 flex justify-center mt-10">
                        <img src="{{ asset('assets/img/mentoring/epb/epb-4.png') }}" alt="100 Plus Certificates and Awards Achieved by EduALL Students"
                            class="w-full rounded-2xl shadow-xl" loading="lazy">
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="new-main-container py-10" aria-label="Program Overview">
        <div class="flex items-center gap-10">
            <div class="w-1/2">
                <h2 class="text-5xl font-normal mb-5 text-newprimary uppercase">
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

                <a href="#" class="bg-dark text-white py-2 px-5 rounded-xl">
                    Get Consultation
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="w-1/2">
                <div class="accordion-group">
                    <div class="border rounded-2xl overflow-hidden mb-3">
                        <button
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5 text-xl">
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
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5 text-xl">
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
                            class="accordion-btn bg-gradient-to-r from-newprimary to-blue-700 text-white w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5 text-xl">
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

    <section class="bg-gradient-to-r from-[#F6F6F6] to-[#f0f0f0] my-20 py-20" aria-label="Program Comparison">
        <div class="new-main-container py-20">
            <h2 class="text-6xl font-light uppercase text-center">
                Impact project mentoring
            </h2>

            <div class="overflow-x-auto rounded-2xl mt-20 bg-white">
                <table class="min-w-full border-collapse">
                    <thead class="bg-white text-dark">
                        <tr>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">Program</th>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">Grades 7–8</th>
                            <th class="px-6 py-4 text-center font-normal rounded-xl shadow-md">Grades 9–11</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700 ">
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>Major
                                Exploration</td>
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
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>Future
                                Skills</td>
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
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>
                                Passion Project</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Design and launch your first guided passion project.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Lead a larger-scale passion project that creates measurable impact.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>
                                Research & Competitions</td>
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
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>
                                Portfolio Development</td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Build your first digital portfolio to document your learning journey.
                            </td>
                            <td class="px-6 py-5 bg-blue-200 rounded-xl shadow-md">
                                Curate a university-ready portfolio showcasing your achievements
                                and growth.
                            </td>
                        </tr>

                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="px-6 py-5 font-normal rounded-xl bg-newprimary text-white shadow-md" nowrap>
                                Showcase</td>
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


    <section class="new-main-container my-10" aria-label="Why Choose Us">
        <div class="bg-[#F6F6F6] rounded-xl shadow-md p-10">
            <p class="text-newprimary">
                Why Choose Us
            </p>
            <h2 class="text-4xl font-normal uppercase mb-4">
                Discover the World Beyond the Classroom
            </h2>
            <p class="text-dark/60">
                Move beyond academics and discover how your interests come to life in the real world. Whether you're
                building a passion project, conducting research, working with industry professionals, or joining global
                competitions, every experience helps you develop the skills, achievements, and direction that strengthen
                both your university applications and your future career.
            </p>

            <div class="border-b border-gray-400 my-10"></div>

            <div class="flex gap-10">

                <!-- Menu -->
                <div class="w-[35%]">
                    <div id="tabMenu" class="space-y-5">

                        <button class="tab-btn w-full border rounded-2xl overflow-hidden" data-tab="1">
                            <div
                                class="tab-header flex items-center px-5 py-4 bg-white text-gray-800 transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <span class="icon text-2xl font-light">+</span>
                                    <span class="font-normal text-xl text-start">High-Impact Passion Projects</span>
                                </div>
                            </div>
                        </button>

                        <button class="tab-btn w-full border rounded-2xl overflow-hidden" data-tab="2">
                            <div
                                class="tab-header flex items-center px-5 py-4 bg-white text-gray-800 transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <span class="icon text-2xl font-light">+</span>
                                    <span class="font-normal text-xl text-start">In-Depth Academic Research</span>
                                </div>
                            </div>
                        </button>

                        <button class="tab-btn w-full border rounded-2xl overflow-hidden" data-tab="3">
                            <div
                                class="tab-header flex items-center px-5 py-4 bg-white text-gray-800 transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <span class="icon text-2xl font-light">+</span>
                                    <span class="font-normal text-xl text-start">Professional Industry Exposure</span>
                                </div>
                            </div>
                        </button>

                        <button class="tab-btn w-full border rounded-2xl overflow-hidden" data-tab="4">
                            <div
                                class="tab-header flex items-center px-5 py-4 bg-white text-gray-800 transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <span class="icon text-2xl font-light">+</span>
                                    <span class="font-normal text-xl text-start">International Project
                                        Competitions</span>
                                </div>
                            </div>
                        </button>

                    </div>
                </div>

                <!-- Content -->
                <div class="w-[65%]">

                    <div class="tab-pane" data-tab="1">
                        <img src="{{ asset('assets/img/mentoring/epb/why-us-1.png') }}" alt="High-Impact Passion Projects - Community Campaigns and Digital Apps"
                            class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy" width="800" height="280">
                        <p class="text-gray-500 pt-4">
                            From community campaigns to digital apps, we guide you from initial concept to public launch,
                            creating a tangible extracurricular achievement for your university application portfolio.
                        </p>
                    </div>

                    <div class="tab-pane hidden" data-tab="2">
                        <img src="{{ asset('assets/img/mentoring/epb/why-us-3.png') }}" alt="In-Depth Academic Research and Publication for University Applications"
                            class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy" width="800" height="280">
                        <p class="text-gray-500 pt-4">
                            Research, write, and publish papers that demonstrate intellectual depth.
                            It is the kind of achievement that stands out to admissions committees at top universities.
                        </p>
                    </div>

                    <div class="tab-pane hidden" data-tab="3">
                        <img src="{{ asset('assets/img/mentoring/epb/why-us-3.png') }}" alt="Professional Industry Exposure and Career Direction for Students"
                            class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy" width="800" height="280">
                        <p class="text-gray-500 pt-4">
                            Connect with industry professionals early and bring authentic career direction
                            to your university application narrative.
                        </p>
                    </div>

                    <div class="tab-pane hidden" data-tab="4">
                        <img src="{{ asset('assets/img/mentoring/epb/why-us-4.png') }}" alt="International Project Competitions and Global Recognition"
                            class="w-full h-[280px] object-cover rounded-3xl shadow-md" loading="lazy" width="800" height="280">
                        <p class="text-gray-500 pt-4">
                            Coaching you through rigorous preparation to confidently present your skills,
                            test your ideas, and win recognition on a highly competitive international stage.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="new-main-container py-20 relative" aria-label="Program Benefits">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl font-normal uppercase text-center text-newprimary mb-10">
                The Missing Piece of Your <br> <strong>University Profile</strong>
            </h2>
            <p class="text-gray-500 text-xl font-light text-center">
                The strongest university profiles aren't built on grades alone. They're built through meaningful experiences
                that demonstrate initiative, curiosity, and impact. You choose where you want to grow. We'll help you
                develop the skills, experiences, and achievements that make your university application stronger and
                unmistakably yours.
            </p>
        </div>
        <div class="w-full mx-auto mt-10">
            <div class="flex gap-8">
                <!-- Content -->
                <div class="flex-1">
                    <!-- Top Phase List -->
                    <div class="">
                        {{-- Phase 1  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 justify-between">
                                        <h3 class="text-dark/50 text-xl">
                                            Exclusive Student Club
                                        </h3>
                                        <i class="fa-solid fa-plus-square-o"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Students Club
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex justify-between gap-10">
                                                <div class="w-[30%]">
                                                    <p class="text-white mb-10 text-2xl">
                                                        Build Extracurricular Leadership in Your Field
                                                    </p>
                                                </div>
                                                <div class="w-[70%]">
                                                    <p class="text-white mb-5">
                                                        Students begin by exploring their interests, strengths, and future
                                                        aspirations.
                                                        With guidance from EduALL mentors, they transform these interests
                                                        into
                                                        meaningful projects, leadership experiences, competitions, and
                                                        achievements
                                                        that
                                                        strengthen their university profile. Every journey is personalized
                                                        to
                                                        reflect
                                                        each student's unique goals and potential.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-xl text-center font-normal text-white my-10">
                                                The 4 specialized club streams available for selection
                                            </div>

                                            <div
                                                class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto p-4 md:p-6 items-center h-auto md:h-[480px] pathway-grid">

                                                <!-- Card 1 -->
                                                <div
                                                    class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                    px-6 py-4 h-[320px]
                                                    hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[400px]
                                                    hover:bg-gradient-to-b hover:from-newprimary hover:to-black active">

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
                                                        Manage mock enterprises, pitch start-up ideas, and solve real case
                                                        studies alongside like-minded peers.
                                                    </p>

                                                </div>

                                                <!-- Card 2 -->
                                                <div
                                                    class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                                                    px-6 py-4 h-[320px]
                                                    hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[400px]
                                                    hover:bg-gradient-to-b hover:from-newprimary hover:to-black">

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

                                                        <div class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
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
                                                    hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[400px]
                                                    hover:bg-gradient-to-b hover:from-newprimary hover:to-black">

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

                                                        <div class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
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
                                                    hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[400px]
                                                    hover:bg-gradient-to-b hover:from-newprimary hover:to-black">

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

                                                        <div class="text-[#0B1B7A] transition mb-2 group-hover:text-white">
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
                                                        Bio-science discussions, simulated lab case studies, and research
                                                        reviews at the cutting edge of medicine and nature.
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 2  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 justify-between">
                                        <h3 class="text-dark/50 text-xl">
                                            Personal Project & Academic Research
                                        </h3>
                                        <i class="fa-solid fa-plus-square-o"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Personal Project & Academic Research
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex justify-between gap-10">
                                                <div class="w-[30%]">
                                                    <p class="text-white mb-10 text-2xl">
                                                        Launch Initiatives That Strengthen Your University Profile
                                                    </p>
                                                </div>
                                                <div class="w-[70%]">
                                                    <p class="text-white mb-5">
                                                        A well-executed personal project shows top universities your
                                                        independent initiative, creativity, and passion. Your dedicated
                                                        mentor guides you from identifying a real-world problem to launching
                                                        a tangible output: a concrete extracurricular achievement on your
                                                        university application.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-xl text-center font-normal text-white my-10">
                                                Real Projects. Real Impact
                                            </div>

                                            <div class="max-w-6xl mx-auto">
                                                <div id="project-showcase" class="splide">
                                                    <div class="splide__track">
                                                        <ul class="splide__list">
                                                            <li class="splide__slide">
                                                                <div class="card bg-white rounded-xl overflow-hidden">
                                                                    <div class="flex">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-1.png') }}"
                                                                                alt="Project 1"
                                                                                class="w-full h-full object-cover">
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
                                                                    <div class="flex">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-2.png') }}"
                                                                                alt="Project 2"
                                                                                class="w-full h-full object-cover">
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
                                                                    <div class="flex">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-3.png') }}"
                                                                                alt="Project 3"
                                                                                class="w-full h-full object-cover">
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
                                                                    <div class="flex">
                                                                        <div class="w-[30%]">
                                                                            <img src="{{ asset('assets/img/mentoring/epb/Personal project & academic research/epb-4.png') }}"
                                                                                alt="Project 4"
                                                                                class="w-full h-full object-cover">
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

                        {{-- Phase 3  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 justify-between">
                                        <h3 class="text-dark/50 text-xl">
                                            International Competitions
                                        </h3>
                                        <i class="fa-solid fa-plus-square-o"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    International Competitions
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex justify-between gap-10">
                                                <div class="w-[30%]">
                                                    <p class="text-white mb-10 text-2xl">
                                                        Win Global Recognition for Your University Application
                                                    </p>
                                                </div>
                                                <div class="w-[70%]">
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
                                            <div class="text-xl text-center font-normal text-white mt-10">
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
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-full mb-3">
                                            Showcase: Turning Ambition into International Recognition
                                        </div>
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-full mb-3">
                                            The Achievement: Global Finalist, Wharton Global High School Investment
                                            Competition
                                        </div>
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-full mb-3">
                                            The Journey: Competing against thousands of students worldwide requires more
                                            than financial knowledge.
                                        </div>
                                        <div class="bg-newprimary text-white px-10 py-2 rounded-full mb-3">
                                            Our Mentorship: We guided the student team through asset allocation strategies,
                                            real-world case studies, and presentation coaching using our five-step
                                            framework, resulting in a portfolio pitched with confidence on a global stage
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 4  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 justify-between">
                                        <h3 class="text-dark/50 text-xl">
                                            Internship & Job Shadowing
                                        </h3>
                                        <i class="fa-solid fa-plus-square-o"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Internship & Job Shadowing
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex justify-between gap-10">
                                                <div class="w-[30%]">
                                                    <p class="text-white mb-10 text-2xl">
                                                        Experience Your Future Career
                                                    </p>
                                                </div>
                                                <div class="w-[70%]">
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

                        {{-- Phase 5  --}}
                        <div class="flex gap-5 items-stretch relative mb-2">
                            <div
                                class="phase-item w-[100%] bg-[#E2E8F2] text-newprimary rounded-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10">
                                    <div class="flex p-5 justify-between">
                                        <h3 class="text-dark/50 text-xl">
                                            Digital Portfolio Enhancement
                                        </h3>
                                        <i class="fa-solid fa-plus-square-o"></i>
                                    </div>
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-gradient-to-br from-newprimary to-blue-600 rounded-2xl relative z-0">
                                    <div class="flex">
                                        <div class="w-full p-5">
                                            <div class="flex gap-10 mb-10 justify-between items-center">
                                                <div class="text-white text-lg font-normal">
                                                    Digital Portfolio Enhancement
                                                </div>
                                                <div class="">
                                                    <i class="fa-solid fa-minus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <div class="flex justify-between gap-10">
                                                <div class="w-[30%]">
                                                    <p class="text-white mb-10 text-2xl">
                                                        Showcase Your Best Self
                                                    </p>
                                                </div>
                                                <div class="w-[70%]">
                                                    <p class="text-white mb-5">
                                                        Building achievements is only half the journey. We help you compile
                                                        your projects, research papers, competition wins, and internship
                                                        experiences into a polished digital portfolio for university
                                                        applications, structured to capture the attention of top university
                                                        admission officers worldwide.
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

    <section class="new-main-container py-20 relative" aria-label="Additional Opportunities">
        <div class="flex gap-10">
            <div class="w-[35%]">
                <h3 class="text-4xl font-normal">
                    The opportunities above are only part of the journey.
                </h3>
            </div>
            <div class="w-[65%]">
                <p class="text-lg text-gray-500 ">
                    As an EduALL mentee, you'll also receive priority access to exclusive opportunities as they become
                    available, from national stage forum, project exhibition, internship, NGO volunteering, and more. We
                    connect students with opportunities that match their needs and interests because the right experience at
                    the right time can make all the difference.
                </p>
            </div>
        </div>
    </section>



    {{-- ==================== Call to Action Section ==================== --}}
    <section class="relative z-10 h-auto overflow-hidden mt-12 md:mt-10" aria-label="Call to Action">
        <img src="{{ asset('assets/img/mentoring/epb/cta.png') }}" alt="EduALL Free Consultation Booking"
            class="absolute top-0 left-0 w-full z-0" loading="lazy">
        <div class="new-main-container relative z-10 flex justify-center">
            <div class="max-w-4xl p-6 md:p-10 rounded-xl">
                <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 items-center cta-grid">
                    <div class="w-full md:w-1/2 text-dark md:order-1 order-2">
                        <p class="text-xl md:text-3xl mb-3 md:mb-5">
                            Ready to take the next step?
                        </p>
                        <p class="text-xs md:text-sm text-gray-500">
                            Our Ultimate Mentoring Program provides personalized guidance through every stage university
                            preparation.
                        </p>

                        <x-new-form title="Program" program-id="AAUP" lead-id="LS045" color="dark"
                            submit-title="Book Your Free Consultation" />
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
    <section class="relative z-10 mt-20 pb-10" aria-label="University Acceptances">
        <div class="new-main-container px-10">
            <div class="max-w-4xl mx-auto">
                <p class="text-4xl font-semibold text-center text-newprimary mb-10">
                    From Meaningful Achievements to Top Universities
                </p>

                <p class="text-lg text-gray-500 text-center">
                    Every project, competition, research, volunteering experience and work internship becomes part of a
                    bigger story and the start of their future.
                </p>
            </div>
            <div class="overflow-hidden py-20 max-w-5xl mx-auto">
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
        </div>
    </section>


    {{-- ==================== Testimonial Section ==================== --}}
    <section class="bg-gradient-to-b from-white to-[#D8E8FF]  py-12 md:py-20" aria-label="Student Testimonials">
        <div class="new-main-container relative z-10">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-2xl md:text-5xl font-normal text-gray-800 uppercase mb-3 md:mb-4" itemprop="headline">
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
                                <img src="{{ asset('assets/img/home/2026/Testimoni/Alumni - Rachinta.webp') }}"
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


    <section class="new-main-container py-20" aria-label="Faculty Message">
        <div class="flex items-center gap-10">
            <div class="w-[35%]">
                <div class="w-full h-[500px] overflow-hidden rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/img/mentoring/ultimate/34. Kak anne.png') }}"
                        alt="Debora Wibianne, Head of Faculty at EduALL"
                        class="w-full h-full object-cover object-bottom" loading="lazy" width="500" height="500">
                </div>
            </div>
            <div class="w-[65%]">
                <h2 class="text-5xl text-newprimary font-light mb-20">
                    A Word from <br>
                    Our Head of Faculty
                </h2>
                <span>
                    <h3 class="text-3xl text-newprimary font-normal mb-3">
                        "At EduALL, we <span>believe</span>
                    </h3>
                    <p class="text-xl">
                        the world needs more game changers. Through mentorship, exploration, and meaningful
                        experiences, we help students discover their potential and build a future they are excited to
                        pursue."
                    </p>
                </span>

                <h4 class="text-xl text-newprimary mt-10 font-normal">
                    Debora Wibianne, M.A.
                </h4>
                <p class="text-lg text-newprimary">
                    University College London (UCL)
                </p>
            </div>
        </div>

    </section>

    {{-- ==================== FAQ Section ==================== --}}
    <section class="relative z-10 my-12 md:my-20" aria-label="Frequently Asked Questions">
        <div class="new-main-container px-4 md:px-5 lg:px-20 text-center">
            <h3 class="text-2xl md:text-4xl font-normal leading-5 mb-3 md:mb-5" itemprop="headline">Frequently Asked
                Questions</h3>

            <div class="flex items-center mt-10 w-full gap-10">
                <div class="w-full md:w-[65%]">
                    <div class="accordion-group">
                        <!-- Q1 -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                <span>What extracurricular activities does the EPB program support?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    EPB covers student clubs (Business, Computer Science, Engineering, Life Science),
                                    personal passion projects, academic research and publication, international
                                    competitions, internship and job shadowing, and digital portfolio development. You
                                    select the activities that match your interests and university application goals.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                <span>When is the best time to start?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    EduALL recommends Grade 7 or 8 for students building a broad university application
                                    profile. EPB is equally valuable for Grade 10–11 students who need to strengthen a
                                    specific area (a passion project, research paper, or internship) before university
                                    admissions season.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                <span>Is this only for students targeting the US or UK?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    Not at all. We have helped students across Indonesia build profiles for universities in
                                    the US, UK, Europe, Australia, Asia, and beyond. The extracurricular achievements we
                                    build strengthen any application, regardless of destination.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                <span>What is the difference between EPB and Ultimate Mentoring?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    EPB is for students who want to build their extracurricular profile and explore career
                                    directions before applications begin. Ultimate Mentoring is EduALL's end-to-end
                                    university admissions program—covering strategy, personal statement, essays, and
                                    university selection through to acceptance. Many students complete EPB first and
                                    transition into Ultimate Mentoring when ready.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="border rounded-lg overflow-hidden">
                            <button
                                class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                <span>How do I know which program is right for me?</span>

                                <span class="text-2xl transition-all duration-200">+</span>
                            </button>

                            <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="px-5 py-5 text-gray-600 md:text-start text-center">
                                    Grade 7–10 and focused on building extracurricular achievements? Start with EPB. Grade
                                    11–12 and actively preparing to submit university applications? Ultimate Mentoring is
                                    built for you. Our free initial consultation will confirm the right fit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[35%]">
                    <p class="text-xl mb-3 font-normal">
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
        // ==================== Project Slider (Splide) ====================
        // Initialize project slider with autoplay
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#project-showcase', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                interval: 4000,
                speed: 600,
                drag: false,
                arrows: true,
                pagination: false,
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
        // ==================== Mentee Slider (Splide) ====================
        // Initialize mentee slider with autoplay
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
                pagination: false,
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
@endpush
