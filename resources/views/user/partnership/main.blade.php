@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Partnership', 'url' => route('partnership', [app()->getLocale()])],
        ];
    @endphp
    <title>Partner with EduALL: Schools, Companies & Communities</title>
    <meta name="title" content="Partner with EduALL: Schools, Companies & Communities" />
    <meta name="description"
        content="Partner with EduALL to create educational impact. We work with schools, companies, and communities to open more opportunities for students across Indonesia." />
@endsection

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
                <p class="uppercase text-orange-400 mb-5">
                    Partnership
                </p>

                <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                    itemprop="headline">
                    Partner with Us to Make a Greater Impact
                </h1>

                <p class="text-gray-400 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                    itemprop="description">
                    For over a decade, EduALL has believed that building game changers takes more than one organization. It
                    takes parents, schools, universities, companies, communities, and partners working toward the same goal.
                    Join us in building game changers by giving meaningful opportunities that help students grow, lead, and
                    make a real impact.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-newprimary">
        <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        45+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Organizations Partnered
                    </p>
                </div>

                <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        40+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        School Clients
                    </p>
                </div>

                <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        50+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Corporate Partners
                    </p>
                </div>

                <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                    <p class="text-lg md:text-[30px] font-bold text-white">
                        1,500+
                    </p>
                    <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                        Event Participants
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20 mt-20">
        <div class="max-w-5xl mx-auto text-center mb-5">
            <h2 class="uppercase text-5xl mb-5 font-semibold">
                Find the Right Way to Partner with Us
            </h2>
            <p class="text-xl text-dark/50">
                Whether you're a school, a company, or a community organization, there's a meaningful way to work together.
                Choose the partnership that best fits your goals
            </p>

            <div class="flex flex-col md:flex-row gap-5 mt-10">
                <!-- Card 1 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="https://picsum.photos/300/300?random=1" alt="School Partnership" class="w-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-2xl font-semibold text-newprimary my-5">
                                School Partnership
                            </h3>

                            <p class="text-dark/50 leading-relaxed">
                                Bring university readiness, career exploration, and real-world learning directly to your
                                students. Give them access to mentors from top universities and curate programs tailored to
                                their needs.
                            </p>
                        </div>

                        <div class="mt-8 text-center">
                            <a href="#"
                                class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                                Explore Programs
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="https://picsum.photos/300/300?random=2" alt="Company Partnership" class="w-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-2xl font-semibold text-newprimary my-5">
                                Company Partnership
                            </h3>

                            <p class="text-dark/50 leading-relaxed">
                                Create meaningful impact through mentorship, sponsorship, internships, and employee
                                engagement. Connect your brand with the next generation of future leaders.
                            </p>
                        </div>

                        <div class="mt-8 text-center">
                            <a href="#"
                                class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                                Let's Collaborate
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="https://picsum.photos/300/300?random=3" alt="Community Partnership" class="w-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-2xl font-semibold text-newprimary my-5">
                                Community Partnership
                            </h3>

                            <p class="text-dark/50 leading-relaxed">
                                Partner with EduALL to design and deliver education programs, outreach initiatives, and
                                mentoring experiences that create lasting impact for the communities you serve.
                            </p>
                        </div>

                        <div class="mt-8 text-center">
                            <a href="#"
                                class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                                Join Our Mission
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <section class="bg-[#EDEDED] py-20" id="#school-partnership">
        <div class="new-main-container mx-auto pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold">
                School Partnership
            </p>

            <img src="https://picsum.photos/500/200" alt="EduALL" class="w-[100%] rounded-2xl">


            <div class="flex justify-between mt-10">
                <div class="w-[37%]">
                    <h3 class="text-4xl font-bold text-newprimary uppercase mb-5">
                        Bring Exclusive EduALL Programs To Your School
                    </h3>
                </div>
                <div class="w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-lg">
                        Schools partner with EduALL to complement what great schools already do. Through university
                        readiness programs, career exploration, student leadership initiatives, and volunteering activities,
                        we help schools prepare students for success beyond the classroom. Every program is tailored to your
                        students' needs and your academic calendar.
                    </p>
                </div>
            </div>
        </div>

        <div class="new-main-container">
            <div class="mt-10">
                <h3 class="uppercase text-blue-500 mb-5">
                    Why Schools Choose EduALL
                </h3>

                <div class="flex flex-wrap gap-5">
                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Tailored to Your School
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Every program is designed around your students, learning objectives, and academic calendar,
                                ensuring a natural fit with your school's priorities.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Mentors with Real Experience
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Students learn from mentors who have studied at the world's leading universities and built
                                professional careers, bringing firsthand insights that go beyond the classroom.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Flexible Program Delivery
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Whether on campus, online, or in a hybrid format, our programs are designed to fit your
                                schedule without disrupting the school experience.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                A Long-Term Partner
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Our partnerships don't end after a single workshop. We provide ongoing support, resources,
                                and collaboration throughout the academic year to help schools create lasting impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-main-container mt-20 py-10">
            <div class="text-center mb-10">
                <h3 class="text-5xl font-bold mb-4">
                    Types of Collaboration
                </h3>
            </div>

            <div class="flex items-stretch gap-5 mb-20">
                <div class="w-1/3">
                    <div class="bg-gray-100/70 rounded-2xl border-l-2 border-r-2 border-gray-300 pt-5 pb-10 px-5">
                        <p class="text-xl text-dark mb-3 font-semibold text-center">
                            Admission Accelerator Programs
                        </p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl shadow-md -mt-7 h-full">
                        <p>
                            Give students a competitive edge in university applications.
                        </p>
                        <hr class="my-3" />
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-application"
                                data-modal-toggle="modal-application">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>University Application Workshops (US, UK, & Asia)</span>
                            </li>

                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-essay"
                                data-modal-toggle="modal-essay">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>Essay Writing Bootcamp</span>
                            </li>

                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-sat"
                                data-modal-toggle="modal-sat">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>SAT Prep Class as an Extracurricular</span>
                            </li>
                        </ul>

                        {{-- Modal 1  --}}
                        <div id="modal-application" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">
                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            University Application Workshops (US, UK, & Asia)
                                        </h3>

                                        <button type="button" data-modal-hide="modal-application">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            Prepares students for the university application process across the US, UK, and
                                            Asia.
                                        </p>
                                        <ul class="list-disc pl-5 space-y-2 text-dark/60">
                                            <li>
                                                A hands-on bootcamp covering university admissions, scholarship
                                                applications, essay and personal statement writing, and academic CV
                                                preparation.
                                            </li>
                                            <li>
                                                Direct feedback and personalized guidance to strengthen every application
                                                and help students stand out.
                                            </li>
                                            <li>
                                                Best-fit major exploration, university research, and strategic shortlisting
                                                based on each student's goals and profile.
                                            </li>
                                            <li>
                                                Support in securing strong recommendation letters for applications to top
                                                universities worldwide.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Modal 2  --}}
                        <div id="modal-essay" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">
                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            Essay Writing Bootcamp
                                        </h3>

                                        <button type="button" data-modal-hide="modal-essay">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            An intensive bootcamp focused on university application essays for US, UK, and
                                            Asian institutions.
                                        </p>
                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Repeated essay-writing drills combined with continuous feedback and expert
                                                guidance.
                                            </li>
                                            <li>
                                                Support to craft compelling personal statements that highlight each
                                                student's unique story and strengths.
                                            </li>
                                            <li>
                                                Covers US, UK, and Asian essay formats, drafting techniques, expert reviews,
                                                and practical tools to create standout applications.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Modal 3  --}}
                        <div id="modal-sat" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">
                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            SAT Prep Class as an Extracurricular
                                        </h3>

                                        <button type="button" data-modal-hide="modal-sat">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            An SAT preparation program designed to fit seamlessly into your school's
                                            extracurricular schedule.
                                        </p>
                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Expert-led instruction covering key concepts in SAT Math, Reading, and
                                                Writing.
                                            </li>
                                            <li>
                                                Structured lessons, practice tests, and targeted exercises to build
                                                confidence and improve performance.
                                            </li>
                                            <li>
                                                Proven test-taking strategies that help students maximize their SAT scores
                                                without disrupting the school day.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-1/3">
                    <div
                        class="bg-gradient-to-br from-newprimary to-black rounded-2xl border-l-2 border-r-2 border-gray-300 pt-5 pb-10 px-5">
                        <p class="text-xl text-white mb-3 font-semibold text-center">
                            Experiential Learning Programs
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-2xl shadow-md -mt-7 h-full">
                        <p>
                            Help students explore who they are through practice, not theory.
                        </p>

                        <hr class="my-3" />

                        <ul class="space-y-2">
                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-uniconnect"
                                data-modal-toggle="modal-uniconnect">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>Uni Connect & Interest Exploration</span>
                            </li>

                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-community"
                                data-modal-toggle="modal-community">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>Community Service & Immersion</span>
                            </li>
                        </ul>

                        {{-- Modal 1 --}}
                        <div id="modal-uniconnect" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">

                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            Uni Connect & Interest Exploration
                                        </h3>

                                        <button type="button" data-modal-hide="modal-uniconnect">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            Gives students a broad view of academic and career paths through firsthand
                                            exposure.
                                        </p>

                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Explore a range of universities and connect with professors, industry
                                                experts,
                                                and current students across different majors.
                                            </li>
                                            <li>
                                                Visits and tours to Singapore's top universities.
                                            </li>
                                            <li>
                                                Experience world-class education and research environments.
                                            </li>
                                            <li>
                                                Make informed decisions about future academic and career pathways.
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Modal 2 --}}
                        <div id="modal-community" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">

                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            Community Service & Immersion
                                        </h3>

                                        <button type="button" data-modal-hide="modal-community">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            Students immerse themselves in communities in Salatiga, Bali, or other rural
                                            areas of Indonesia,
                                            working alongside local residents on real community issues through projects
                                            rooted in sustainability
                                            and empathy.
                                        </p>

                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Design and implement meaningful community projects.
                                            </li>
                                            <li>
                                                Build personal development skills through real-world challenges.
                                            </li>
                                            <li>
                                                Develop a global-minded leadership perspective.
                                            </li>
                                            <li>
                                                Grow a network of peers, mentors, and professionals.
                                            </li>
                                            <li>
                                                Gain valuable experience suitable for CAS, community service hours,
                                                and university applications.
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-1/3">
                    <div class="bg-gray-100/70 rounded-2xl border-l-2 border-r-2 border-gray-300 pt-5 pb-10 px-5">
                        <p class="text-xl text-dark mb-3 font-semibold text-center">
                            Teacher-Focused Programs
                        </p>
                    </div>

                    <div class="bg-white p-5 rounded-2xl shadow-md -mt-7 h-full">
                        <p>
                            Support the educators who guide students every day through professional development,
                            admissions training, and internationally recognized certifications.
                        </p>

                        <hr class="my-3" />

                        <ul class="space-y-2">
                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-empowered"
                                data-modal-toggle="modal-empowered">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>ALL EmpowerED</span>
                            </li>

                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-crest"
                                data-modal-toggle="modal-crest">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>CREST Awards Teacher Training</span>
                            </li>

                            <li class="flex items-start gap-3 cursor-pointer" data-modal-target="modal-recommendation"
                                data-modal-toggle="modal-recommendation">
                                <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                <span>Recommendation Letter Workshops</span>
                            </li>
                        </ul>

                        {{-- Modal 1 --}}
                        <div id="modal-empowered" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">

                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            ALL EmpowerED
                                        </h3>

                                        <button type="button" data-modal-hide="modal-empowered">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            A platform where principals, counselors, and teachers come together to
                                            collaborate and share insights.
                                        </p>

                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Connect educators across schools through meaningful networking
                                                opportunities.
                                            </li>
                                            <li>
                                                Navigate the rapidly changing education landscape with shared knowledge and
                                                best practices.
                                            </li>
                                            <li>
                                                Foster professional growth through collaboration and peer learning.
                                            </li>
                                            <li>
                                                Exchange strategies that empower educators to lead their schools and
                                                students into the future.
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Modal 2 --}}
                        <div id="modal-crest" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">

                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            CREST Awards Teacher Training
                                        </h3>

                                        <button type="button" data-modal-hide="modal-crest">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            Equips educators to deliver internationally recognized STEAM certifications.
                                        </p>

                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Aligned with the UK's CREST standards and designed for Indonesian educators.
                                            </li>
                                            <li>
                                                Hands-on training that equips teachers to deliver high-quality STEAM
                                                education.
                                            </li>
                                            <li>
                                                Prepare students for global academic opportunities and challenges through
                                                internationally recognized certification.
                                            </li>
                                            <li>
                                                CREST Awards, pioneered by the British Science Association, is the UK's
                                                principal STEM initiative.
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Modal 3 --}}
                        <div id="modal-recommendation" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                            <div class="relative p-4 w-full max-w-2xl">
                                <div class="bg-newprimary rounded-xl shadow">

                                    <div class="flex justify-between items-center p-5 border-b">
                                        <h3 class="text-lg text-white font-semibold">
                                            Recommendation Letter Workshops
                                        </h3>

                                        <button type="button" data-modal-hide="modal-recommendation">
                                            <i class="fa-solid fa-xmark text-xl text-white"></i>
                                        </button>
                                    </div>

                                    <div class="bg-white p-5">
                                        <p class="text-dark/60 mb-3">
                                            Equips teachers to write personalized, persuasive recommendation letters that
                                            strengthen students'
                                            university and scholarship applications.
                                        </p>

                                        <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                            <li>
                                                Learn practical strategies for writing impactful recommendation letters.
                                            </li>
                                            <li>
                                                Highlight each student's unique strengths, achievements, and potential.
                                            </li>
                                            <li>
                                                Craft compelling recommendations that help students stand out in competitive
                                                admissions and scholarship applications.
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

        <div class="new-main-container mb-10">
            <section class="bg-newprimary rounded-2xl">
                <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
                    <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                        <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-[#C7A322]">
                                1,000+
                            </p>
                            <p class="text-[12px] md:text-base text-[#C7A322] mt-2 md:leading-5 leading-4">
                                Students Reached
                            </p>
                        </div>

                        <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-[#C7A322]">
                                100+
                            </p>
                            <p class="text-[12px] md:text-base text-[#C7A322] mt-2 md:leading-5 leading-4">
                                Teachers Trained
                            </p>
                        </div>

                        <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-[#C7A322]">
                                200+
                            </p>
                            <p class="text-[12px] md:text-base text-[#C7A322] mt-2 md:leading-5 leading-4">
                                Workshops Conducted
                            </p>
                        </div>

                        <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-[#C7A322]">
                                40+
                            </p>
                            <p class="text-[12px] md:text-base text-[#C7A322] mt-2 md:leading-5 leading-4">
                                School Clients
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="text-center mt-10">
            <a href="#"
                class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                Bring These Programs to Your School
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>


    <section class="bg-white py-20" id="#school-partnership">
        <div class="new-main-container mx-auto pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold">
                Company Partnership
            </p>

            <img src="https://picsum.photos/500/200" alt="EduALL" class="w-[100%] rounded-2xl">


            <div class="flex justify-between mt-10">
                <div class="w-[37%]">
                    <h3 class="text-4xl font-bold text-newprimary uppercase mb-5">
                        Why Companies Partner with EduALL
                    </h3>
                </div>
                <div class="w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-lg">
                        Companies partner with EduALL to invest in the next generation while creating real, visible impact.
                        More than 50 corporate partners have worked with us to shape programs, events, and experiences that
                        connect their people and their brand to driven, future-ready students. Partnering is not a
                        transaction. It is a way to contribute expertise and resources where they matter most, and to be
                        recognized for it.
                    </p>
                </div>
            </div>
        </div>

        <div class="new-main-container">
            <div class="mt-10">
                <h3 class="uppercase text-blue-500 mb-5">
                    Ways to Get Involved
                </h3>

                <div class="flex flex-wrap gap-5">
                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Expertise and Mentorship
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Share your team's knowledge through talks, mentoring, and workshops that expose students to
                                real
                                professional fields and industry insights.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Sponsorship
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Support impactful programs and events that reach hundreds of students while positioning your
                                brand as
                                part of meaningful educational initiatives.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Career Exposure and Internships
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Open doors for students through internships, site visits, and industry exposure that help
                                shape their
                                aspirations and future careers.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-[48%]">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Collaborative Programs
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Co-create workshops and initiatives that bring your industry expertise directly into
                                students'
                                learning experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-main-container mx-auto py-20">
            <div class="flex justify-between mt-10">
                <div class="w-[40%]">
                    <h3 class="text-4xl font-bold text-newprimary uppercase mb-5">
                        Why It Is Worth It
                    </h3>

                    <p class="text-dark/50 leading-relaxed mb-5 text-lg">
                        A partnership with EduALL creates value beyond CSR. It delivers measurable social impact, meaningful
                        employee engagement, early connections with future talent, and brand visibility through trusted
                        education programs and events.
                    </p>
                </div>
            </div>
        </div>

        <div class="new-main-container mb-10">
            <section class="bg-newprimary rounded-2xl px-5 py-10">
                <p class="text-white text-lg">
                    Our partners have collaborated with EduALL through flagship initiatives such as The Cornerstone, our
                    national conversation on the future of Indonesian youth, and STEM+ Wonderlab, where students showcase
                    real-world innovation. Explore our Events page to see these partnerships in action.
                </p>
            </section>
        </div>

        <div class="text-center mt-10">
            <a href="#"
                class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                Partner with Us
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <section class="bg-[#EDEDED] py-20" id="#school-partnership">
        <div class="new-main-container mx-auto pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold">
               Community Partnership
            </p>

            <img src="https://picsum.photos/500/200" alt="EduALL" class="w-[100%] rounded-2xl">


            <div class="flex justify-between mt-10">
                <div class="w-[37%]">
                    <h3 class="text-4xl font-bold text-newprimary uppercase mb-5">
                        Partnering for Broader Educational Impact
                    </h3>
                </div>
                <div class="w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-lg">
                        Some of the most meaningful work happens beyond the classroom. EduALL regularly collaborates with
                        mission-driven organizations to expand access to quality education and create impact in the
                        communities that need it most. When we partner, students do not just learn, they contribute to
                        something larger than themselves.
                    </p>
                </div>
            </div>
        </div>

        <div class="new-main-container">
            <div class="mt-10">
                <h3 class="uppercase text-blue-500 mb-5">
                    Ways We Create Impact
                </h3>

                <div class="flex gap-5">
                    <div class="w-full md:w-1/3">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Joint Programs and Events
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                We create collaborative programs and events that raise awareness, inspire engagement, and
                                generate resources to support educational initiatives.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Student-Led Community Projects
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                Our students design and lead meaningful projects that create real impact for communities,
                                fostering leadership, innovation, and social responsibility.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3">
                        <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-10 h-full">
                            <p class="text-xl text-white font-semibold mb-3">
                                Fundraising and Donations
                            </p>
                            <p class="text-white/70 leading-relaxed">
                                We organize fundraising initiatives and welcome donations that directly support students,
                                educational programs, and communities in need.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-main-container mx-auto py-20">
            <div class="flex justify-between mt-10">
                <div class="w-[40%]">
                    <h3 class="text-4xl font-bold text-newprimary uppercase mb-5">
                        Impact in Action
                    </h3>

                    <p class="text-dark/50 leading-relaxed mb-5 text-lg">
                        Our longest-running collaboration is with Indonesia Mengajar, supporting education in underserved
                        regions across Indonesia. At STEM+ Wonderlab, our students' innovations were donated to aid learning
                        in these communities, and event proceeds were given in full to Indonesia Mengajar. At The
                        Cornerstone, we brought students, educators, and policymakers together to shape the future of
                        Indonesian education. Explore these collaborations on our Events page.
                    </p>

                    <a href="#"
                        class="inline-flex items-center bg-dark text-white px-8 py-3 rounded-2xl hover:bg-newprimary transition">
                        Partner for Impact
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="w-[40%]">
                    <img src="https://picsum.photos/400/150" alt="EduALL" class="w-full rounded-2xl shadow-sm mb-5">
                    <div class="flex gap-5">
                        <div class="w-1/2">
                            <img src="https://picsum.photos/200/150" alt="EduALL" class="w-full rounded-2xl shadow-sm">
                        </div>
                        <div class="w-1/2">
                            <img src="https://picsum.photos/200/150" alt="EduALL" class="w-full rounded-2xl shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($testimonies)
        <section class="pt-16 pb-20">
            <div class="main-container">
                <div class="max-w-5xl mx-auto mb-5">
                    <h2 class="text-5xl font-semibold uppercase mb-5 text-center">
                        Heard from Our Partners
                    </h2>
                    <p class="text-xl font-light text-dark/60 text-center">
                        Hear from the schools and organizations that have partnered with EduALL.
                    </p>
                </div>
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
    @endif

    <section class="py-20">
        <div class="new-main-container">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-5xl font-semibold uppercase mb-5">
                    Highlights from Our Partnerships
                </h2>
                <p class="text-xl text-dark/60">
                    Explore the programs, events, and community initiatives we've brought to life with our partners.
                </p>
            </div>
        </div>
    </section>


    <section class="py-20">
        <div class="new-main-container pt-20">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-5xl font-semibold uppercase mb-5">
                    Organizations We Have Worked With
                </h2>
                <p class="text-xl text-dark/60 font-light">
                    From schools and universities to companies and community organizations, here are some of the partners we
                    have collaborated with.
                </p>
            </div>
        </div>
        <div class="new-main-container overflow-hidden relative mt-10 pb-20">
            <div class="relative max-w-5xl mx-auto">
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-r from-white to-transparent z-10 -left-4"></div>
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-l from-white to-transparent z-10 -right-4"></div>

                <div class="h-full overflow-hidden">
                    <div class="flex endless-scroll">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex-none md:mx-8">
                                <img src="{{ asset('assets/img/about/partnership/logo-partners-new.webp') }}"
                                    alt="Partnership Image" class="md:h-[450px] h-80 w-auto object-contain">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-newprimary py-20">
        <div class="new-main-container flex gap-10 py-20 items-center">
            <div class="w-1/2">
                <h2 class="text-white text-5xl font-semibold mb-5 uppercase">
                    Let's Create Impact Together
                </h2>
                <p class="text-xl text-white/60 font-light">
                    Tell us about your organization and how you'd like to collaborate. Whatever your goals, we'll be in
                    touch to explore how we can create more opportunities for students together.
                </p>
            </div>

            <div class="w-1/2">
                <div class="bg-[#EAEAEA] py-8 px-10 rounded-xl shadow-2xl w-full">
                    <form action="{{ route('submit_partnership', ['locale' => 'id-en']) }}"
                        method="POST" id="myForm">
                        @csrf
                        <div>
                            <h3 class="mb-2">
                                Start the Conversation
                            </h3>

                            <p class="text-sm italic text-gray-500 mb-5">
                                Partnership Type pre-fills from the card you selected. You can change it below.
                            </p>

                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="md:mb-3 w-full md:w-1/2">
                                    <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                                    <input type="text" name="fullname"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="Your full name" id="primary_name" required
                                        oninput="checkValidation('primary_name')">
                                    <div id="primary_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('fullname')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:mb-3 w-full md:w-1/2">
                                    <label for="company_name" class="text-dark text-sm py-2">
                                        Organization Name
                                    </label>
                                    <input type="text" name="company_name"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="School, company or org Name *" id="company_name" required
                                        oninput="checkValidation('company_name')">
                                    <div id="company_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('company_name')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="mb-3 w-full md:w-1/2">
                                    <label for="position" class="text-dark text-sm py-2">Role</label>
                                    <input type="text" name="position"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="Your role or position" id="position" required
                                        oninput="checkValidation('position')">
                                    <div id="position_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('position')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:mb-3 md:w-1/2">
                                    <label for="email" class="text-dark text-sm py-2">Email</label>
                                    <input type="email" name="email"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="you@gmail.com" id="email" required oninput="checkValidation('email')">
                                    <div id="email_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('email')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="mb-3 md:w-1/2">
                                    <label for="phone_number" class="text-dark text-sm py-2">Phone
                                        Number</label>
                                    <input type="text" name="phone_number"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        placeholder="+62 ..." id="phone_number" required
                                        oninput="checkValidation('phone_number')">
                                    <div id="phone_number_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('phone_number')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 md:w-1/2">
                                    <label for="partnership_type" class="text-dark text-sm py-2">Partnership
                                        Type</label>
                                    <select name="partnership_type"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full"
                                        id="partnership_type" required oninput="checkValidation('partnership_type')">
                                        <option value="">Select Partnership Type</option>
                                        <option value="School">School</option>
                                        <option value="Company">Company</option>
                                        <option value="Community">Community</option>
                                    </select>
                                    <div id="partnership_type_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('partnership_type')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inquiry" class="text-dark text-sm py-2">Inquiry</label>
                                <textarea class="md:py-2 text-dark rounded-lg border-none shadow-sm py-4 my-1 w-full" placeholder="Inquiry *"
                                    id="inquiry" name="inquiry" rows="4" required oninput="checkValidation('inquiry')"></textarea>
                                <div id="inquiry_error" class="text-red text-[10px] mt-1 hidden"></div>
                                @error('inquiry')
                                    <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex justify-center mb-3">
                                <div class="text-center">
                                    <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                                    <span id="captcha" class="text-red" />
                                </div>
                            </div>
                            <div class="mb-3 flex items-center justify-center">
                                <button type="button" class="w-full bg-black rounded-xl text-white text-center py-2 px-20"
                                    onclick="submitData()">
                                    <span id="loading" class="hidden">
                                        <i class="fas fa-spinner fa-spin mr-4"></i>
                                    </span>
                                    Start the Conversation
                                </button>
                            </div>
                        </div>
                </div>
                </form>

                <div id="thanksForm" class="hidden">
                    <div class="flex flex-col justify-center">
                        <h4 class="mb-4 mt-4 text-newprimary font-bold text-center text-lg leading-6">
                            Thank you for letting us know a little bit about you! Our partnership team will contact
                            you in 24 hours for further collaboration
                        </h4>
                        <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-4">
                            <span
                                class="block px-4 py-2 rounded-lg bg-red font-newprimary font-semibold text-base text-white text-center">
                                Back to Home
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

@push('script')
    <script>
        document.querySelectorAll('[data-modal-target]').forEach(item => {
            item.addEventListener('click', () => {
                document.getElementById(item.dataset.modalTarget).classList.remove('hidden');
                document.getElementById(item.dataset.modalTarget).classList.add('flex');
            });
        });

        document.querySelectorAll('[data-modal-hide]').forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = document.getElementById(btn.dataset.modalHide);
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });
        });
    </script>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ? 3 : 3,
            perMove: 1,
            arrows: false,
            lazyload: false,
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
    </script>
@endpush

@push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }

        let validation = []

        const checkValidation = (id) => {
            const element = document.getElementById(id);
            const errorMsg = document.getElementById(id + '_error');
            const forbiddenSymbols = /[<>'"();{}$%&#!?+=\/\\|\[\]*^`~]/;
            let msg = ''

            if (forbiddenSymbols.test(element.value)) msg = 'This field must not contain symbols.';

            errorMsg.textContent = msg;
            errorMsg.classList.toggle('hidden', !msg);
            element.classList.toggle('border-none', !msg);
            element.classList.toggle('border-red', !!msg);

            validation[id] = msg ? false : true
        }

        const submitData = () => {
            const checkValidation = Object.values(validation).includes(false)
            const inputs = document.querySelectorAll('#myForm input, #myForm textarea');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {

                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-none'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-none');
                }
            });

            if (isValid && !checkValidation) {
                const captcha = checkCaptcha();
                if (captcha) {
                    document.getElementById('myForm').submit();
                }
            }
        }
    </script>
@endpush
