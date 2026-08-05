@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Our Team', 'url' => route('partnership', [app()->getLocale()])],
        ];
    @endphp
    <title>Our Team: Mentors, Faculty & Leadership | EduALL</title>
    <meta name="title" content="Our Team: Mentors, Faculty & Leadership | EduALL" />
    <meta name="description"
        content="Meet the people behind EduALL: University admissions mentors from top universities, our academic faculty, and the leaders guiding every student." />
@endsection

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/about/Our Team/1. Background Hero.png') }}" alt="EduALL" title="EduALL"
                    loading="lazy" decoding="async" width="100%" height="auto"
                    class="md:h-[100vh] h-[100dvh] w-full object-cover object-center">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh]">
                <div class="new-main-container">
                    <p class="uppercase text-white mb-5 max-w-xl">
                        OUR TEAM
                    </p>

                    <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                        itemprop="headline">
                        Meet Our Team
                    </h1>

                    <p class="text-gray-400 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-xl"
                        itemprop="description">
                        Behind every university acceptance and every improved grade is a person who guided it. EduALL brings
                        together accomplished mentors, experienced academic faculty, and a leadership team that holds the
                        whole organization to one standard of excellence.
                    </p>

                    <hr class="max-w-xl border-white my-10">

                    <div class="flex justify-start gap-0 md:gap-5 max-w-xl">
                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                14+
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                Mentors from top universities
                            </p>
                        </div>

                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                200+
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                Top Global Universities Reached
                            </p>
                        </div>

                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                1200+
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                Students Guided
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20 mt-20">
        <div class="max-w-5xl mx-auto text-center mb-5">
            <h2 class="uppercase text-5xl mb-5 font-normal text-newprimary">
                The Leadership <br>
                <span class="text-3xl font-normal">Behind EduALL</span>
            </h2>
            <p class="text-xl text-dark/50">
                EduALL is led by educators, builders, and leaders who share one belief: every student deserves the
                opportunity to discover who they are and what they're capable of.
            </p>

            <div class="flex flex-col md:flex-row gap-5 mt-10">
                <!-- Card 1 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/1. Kak Dev-1.png') }}"
                                alt="School Partnership" class="w-full rounded-t-2xl">
                        </div>

                        <div class="p-6 text-start">
                            <p class="uppercase font-semibold text-[11px]">
                                Founder & CEO
                            </p>
                            <h3 class="text-xl text-newprimary font-normal">
                                Devi Kasih
                            </h3>
                            <p class="text-base">
                                University of Pennsylvania
                            </p>

                            <hr class="my-2">

                            <ul class="text-[13px]">
                                <li>10+ years in education</li>
                                <li>Former Goldman Sachs banker</li>
                            </ul>

                            <hr class="my-2">

                            <button type="button" data-modal-target="modal-devi" data-modal-toggle="modal-devi"
                                class="text-[13px]">
                                See More
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <div id="modal-devi" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                        <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                            <div class="flex">
                                <div class="w-[30%]">
                                    <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/2. Kak Dev-2.png') }}"
                                        alt="School Partnership" class="w-full rounded-l-2xl h-full object-cover">
                                </div>
                                <div class="w-[70%] p-6">
                                    <div class="flex justify-between">
                                        <div class="text-start">
                                            <p class="text-[11px] uppercase">
                                                Founder & CEO
                                            </p>
                                            <h3 class="text-xl text-newprimary">
                                                Devi Kasih
                                            </h3>
                                        </div>
                                        <button type="button" data-modal-hide="modal-devi" class="absolute top-4 right-4">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                        </button>
                                    </div>
                                    <hr class="border-b-2 my-2" />
                                    <div class="text-start">
                                        <p class="text-[13px]">
                                            University of Pennsylvania
                                        </p>
                                    </div>
                                    <div class="text-start mt-10">
                                        <p class="text-base text-dark/60">
                                            Devi Kasih is the Founder and CEO of EduALL. A University of Pennsylvania
                                            graduate with both a BS and an M.S.Ed, and an LPDP Awardee (2022), she spent
                                            more than seven years in investment banking at Goldman Sachs in Hong Kong before
                                            returning to education. Drawing on over a decade in the field, she founded
                                            EduALL to help Indonesian students find their place on the global stage, growing
                                            it into one of Indonesia's leading admissions mentorships, supporting 1,200+
                                            students to more than 3,500 university offers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/3. Kak Nic-1.png') }}"
                                alt="Nicholas Soepriatna" class="w-full rounded-t-2xl">
                        </div>

                        <div class="p-6 text-start">
                            <p class="uppercase font-semibold text-[11px]">
                                Co-Founder & Director of EduALL Academy
                            </p>
                            <h3 class="text-xl text-newprimary font-normal">
                                Nicholas Soepriatna
                            </h3>
                            <p class="text-base">
                                Purdue University
                            </p>

                            <hr class="my-2">

                            <ul class="text-[13px]">
                                <li>Ph.D, Purdue</li>
                                <li>Patents & international publications</li>
                            </ul>

                            <hr class="my-2">

                            <button type="button" data-modal-target="modal-nicholas" data-modal-toggle="modal-nicholas"
                                class="text-[13px]">
                                See More
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <div id="modal-nicholas" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                        <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                            <div class="flex">
                                <div class="w-[30%]">
                                    <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/4. Kak Nic-2.png') }}"
                                        alt="Nicholas Soepriatna" class="w-full rounded-l-2xl h-full object-cover">
                                </div>

                                <div class="w-[70%] p-6">
                                    <div class="flex justify-between">
                                        <div class="text-start">
                                            <p class="text-[11px] uppercase">
                                                Co-Founder & Director of EduALL Academy
                                            </p>
                                            <h3 class="text-xl text-newprimary">
                                                Nicholas Soepriatna
                                            </h3>
                                        </div>

                                        <button type="button" data-modal-hide="modal-nicholas"
                                            class="absolute top-4 right-4">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                        </button>
                                    </div>

                                    <hr class="border-b-2 my-2" />

                                    <div class="text-start">
                                        <p class="text-[13px]">
                                            Purdue University
                                        </p>
                                    </div>

                                    <div class="text-start mt-10">
                                        <p class="text-base text-dark/60">
                                            Nicholas Soepriatna is the Co-Founder and Head of Faculty at EduALL. He
                                            holds a Ph.D from Purdue University and a BS from the University of Texas
                                            at Austin, and brings over a decade of R&D research, with multiple patents
                                            and publications in international journals. For the past 8+ years he has
                                            led EduALL's academic and product development, shaping the curriculum and
                                            standards behind EduALL Academy, with deep expertise in academic program
                                            design and STEM.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/5. Kak Anne-1.png') }}"
                                alt="Debora Wibianne" class="w-full rounded-t-2xl">
                        </div>

                        <div class="p-6 text-start">
                            <p class="uppercase font-semibold text-[11px]">
                                Head of Mentoring
                            </p>
                            <h3 class="text-xl text-newprimary font-normal">
                                Debora Wibianne
                            </h3>
                            <p class="text-base">
                                University College London
                            </p>

                            <hr class="my-2">

                            <ul class="text-[13px]">
                                <li>LPDP Awardee 2018</li>
                                <li>12+ years in curriculum & teacher training</li>
                            </ul>

                            <hr class="my-2">

                            <button type="button" data-modal-target="modal-debora" data-modal-toggle="modal-debora"
                                class="text-[13px]">
                                See More
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <div id="modal-debora" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                        <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                            <div class="flex">
                                <div class="w-[30%]">
                                    <img src="{{ asset('assets/img/about/Our Team/2. The Leadership/6. Kak Anne-2.png') }}"
                                        alt="Debora Wibianne" class="w-full rounded-l-2xl h-full object-cover">
                                </div>

                                <div class="w-[70%] p-6">
                                    <div class="flex justify-between">
                                        <div class="text-start">
                                            <p class="text-[11px] uppercase">
                                                Head of Mentoring
                                            </p>
                                            <h3 class="text-xl text-newprimary">
                                                Debora Wibianne
                                            </h3>
                                        </div>

                                        <button type="button" data-modal-hide="modal-debora"
                                            class="absolute top-4 right-4">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                        </button>
                                    </div>

                                    <hr class="border-b-2 my-2" />

                                    <div class="text-start">
                                        <p class="text-[13px]">
                                            University College London
                                        </p>
                                    </div>

                                    <div class="text-start mt-10">
                                        <p class="text-base text-dark/60">
                                            Debora Wibianne leads mentoring at EduALL. A University College London
                                            graduate (MA) and LPDP Awardee (2018), with additional degrees from
                                            Universitas Pelita Harapan and Coban University, she brings more than 12
                                            years in curriculum development and teacher training across Indonesia and
                                            the UK, and 7+ years in school leadership and strategic development. She
                                            specializes in designing mentoring programs and building the standards that
                                            guide how EduALL students are supported.
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

    <section class="bg-gradient-to-b from-white to-[#E6F0FF]">
        <div class="new-main-container py-20">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    Why EduALL Mentors <br> Stand Out
                </h2>
                <p class="text-xl text-center text-dark/50">
                    Our mentors know what it takes because they've done it themselves. They studied at world-leading
                    universities, built successful careers across industries, and now dedicate their time to helping
                    students
                    navigate every step of the admissions journey. Each mentee is carefully matched with a mentor who
                    provides
                    personalized, one-on-one guidance throughout the process.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                    <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                        <img src="{{ asset('assets/img/about/Our Team/3. Icon Globe.png') }}" alt="EduALL"
                            class="absolute -bottom-32 -right-32 w-full z-0 opacity-30">

                        <div class="p-5 relative z-10 py-10">
                            <h3 class="text-white text-xl font-normal mb-3">
                                Calibre & <br> insider knowledge
                            </h3>

                            <p class="text-white/80 leading-6">
                                Our mentors studied at the universities students aspire to. They know what those
                                universities look for because they lived it.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                        <img src="{{ asset('assets/img/about/Our Team/4. Icon Clock.png') }}" alt="EduALL"
                            class="absolute -bottom-32 -right-32 w-full z-0 opacity-30">

                        <div class="p-5 relative z-10 py-10">
                            <h3 class="text-white text-xl font-normal mb-3">
                                Recent & <br> relevant
                            </h3>

                            <p class="text-white/80 leading-6">
                                Many navigated the same admissions journey in recent years. Their guidance is current, not
                                dated.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                        <img src="{{ asset('assets/img/about/Our Team/5. Icon Puzzle.png') }}" alt="EduALL"
                            class="absolute -bottom-32 -right-32 w-full z-0 opacity-30">

                        <div class="p-5 relative z-10 py-10">
                            <h3 class="text-white text-xl font-normal mb-3">
                                Best-fit <br> matching
                            </h3>

                            <p class="text-white/80 leading-6">
                                Each student is paired by field, target university, and personal fit. The right mentor, not
                                just any mentor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-gradient-to-b to-white from-[#E6F0FF]">
        <div class="new-main-container py-20">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    Meet Our Mentors
                </h2>
                <p class="text-xl text-center text-dark/50">
                    Get to know the mentors who guide our students. Each brings a strong academic background and direct
                    experience with the universities and fields our students are aiming for.
                </p>

                <p class="text-xl font-normal text-center text-dark/80 mt-5">
                    14 mentors from universities across the US, UK, Europe, and Australia
                </p>
            </div>

            <div class="w-full mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                    <!-- Card 1 -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/1. Amanda-1.png') }}"
                                    alt="School Partnership" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Amanda Rusli
                                </h3>
                                <p class="text-[13px] mb-3">
                                    University College London
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    STEM / Life Sciences
                                </div>

                                <p class="text-[13px] mt-3">
                                    Neuroscience (BSc & MRes) | Published researcher
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-amanda" data-modal-toggle="modal-amanda"
                                    class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-amanda" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/2. Amanda-2.png') }}"
                                            alt="School Partnership" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>
                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    STEM / Life Sciences
                                                </div>
                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Amanda Rusli
                                                </h3>
                                            </div>
                                            <button type="button" data-modal-hide="modal-amanda"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>
                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University College London
                                            </p>
                                        </div>
                                        <hr class="border-b-2 my-2" />
                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A University College London graduate with BSc and MRes degrees in
                                                Neuroscience, Amanda has 3+ years of research across academic and clinical
                                                settings, with publications in international journals. Her expertise spans
                                                neuroscience, biomedical science, and scientific research and writing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/3. Betrix-1.png') }}"
                                    alt="Beatrix Lauw" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Beatrix Lauw
                                </h3>
                                <p class="text-[13px] mb-3">
                                    University of Indonesia
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    STEM / Engineering
                                </div>

                                <p class="text-[13px] mt-3">
                                    Sustainable-energy research | Chemical Engineering
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-beatrix"
                                    data-modal-toggle="modal-beatrix" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-beatrix" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/4. Betrix-2.png') }}"
                                            alt="Beatrix Lauw" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    STEM / Engineering
                                                </div>
                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Beatrix Lauw
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-beatrix"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University of Indonesia
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Chemical Engineering graduate from the University of Indonesia, Beatrix
                                                pairs teaching with
                                                hands-on research in hydrogen production and sustainable chemical processes,
                                                plus engineering
                                                exposure in FMCG. She brings a rigorous, process-driven approach to STEM
                                                mentoring.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Card 3 -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/5. Budiningtyas-1.png') }}"
                                    alt="Budiningtyas Puspito" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Budiningtyas Puspito
                                </h3>

                                <p class="text-[13px] mb-3">
                                    UNSW & ITB
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    STEM / Engineering
                                </div>

                                <p class="text-[13px] mt-3">
                                    Sustainable research | IEEE finalist | LPDP awardee
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-budiningtyas"
                                    data-modal-toggle="modal-budiningtyas" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-budiningtyas"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/6. Budiningtyas-2.png') }}"
                                            alt="Budiningtyas Puspito" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    STEM / Engineering
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Budiningtyas Puspito
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-budiningtyas"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                UNSW & ITB
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Renewable Energy master's graduate from the University of New South Wales
                                                and Chemical
                                                Engineering graduate from ITB, Budiningtyas is an LPDP awardee whose work
                                                bridges
                                                sustainability research and real industrial projects. She placed 2nd in an
                                                international IEEE
                                                competition for a sustainable lighting solution.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/7. Dhea-1.png') }}"
                                    alt="Dhea Rahmasari" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Dhea Rahmasari
                                </h3>

                                <p class="text-[13px] mb-3">
                                    University of Sydney
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Social Sciences / Policy
                                </div>

                                <p class="text-[13px] mt-3">
                                    Economics & International Relations | Grant acquisition
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-dhea" data-modal-toggle="modal-dhea"
                                    class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-dhea" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/8. Dhea-2.png') }}"
                                            alt="Dhea Rahmasari" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Social Sciences / Policy
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Dhea Rahmasari
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-dhea"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University of Sydney
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                An Economics and International Relations graduate from the University of
                                                Sydney, Dhea has 3+
                                                years across government institutions (including the DPR, Kemenhan RI, and
                                                the Indonesian
                                                Embassy in Australia) and international NGOs. She specializes in policy
                                                research, advocacy,
                                                and grant acquisition, having secured a USD 10,000 FedEx grant for education
                                                programs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Eveline -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/9. Evelin-1.png') }}"
                                    alt="Eveline" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Eveline
                                </h3>

                                <p class="text-[13px] mb-3">
                                    Bina Nusantara University
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Technology / Coding
                                </div>

                                <p class="text-[13px] mt-3">
                                    Python & Web Development | 1,000+ classes, 500+ students
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-eveline"
                                    data-modal-toggle="modal-eveline" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-eveline" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/10. Evelin-2.png') }}"
                                            alt="Eveline" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Technology / Coding
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Eveline
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-eveline"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                Bina Nusantara University
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Computer Engineering graduate from Bina Nusantara University, Eveline
                                                brings 5+ years of
                                                coding instruction across Scratch, Python, and web development. She has
                                                built over 10 course
                                                syllabi and 100+ practice sets and led 1,000+ live classes for more than 500
                                                students,
                                                turning technical depth into hands-on learning.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Ishna -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/11. Isna-1.png') }}"
                                    alt="Ishna Naresh" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Ishna Naresh
                                </h3>

                                <p class="text-[13px] mb-3">
                                    King's College London
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Psychology / Mental Health
                                </div>

                                <p class="text-[13px] mt-3">
                                    Developmental Psychology | Mental-health advocacy
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-ishna" data-modal-toggle="modal-ishna"
                                    class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-ishna" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/12. Isna-2.png') }}"
                                            alt="Ishna Naresh" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Psychology / Mental Health
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Ishna Naresh
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-ishna"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                King's College London
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A King's College London graduate with an MSc in Developmental Psychology,
                                                Ishna has 4+ years
                                                in mental-health advocacy, counseling, and community education. She leads
                                                mental-health
                                                programs and founded a national youth advocacy platform, with expertise in
                                                psychology and
                                                community building.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Kathleen -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/13. Kethleen-1.png') }}"
                                    alt="Kathleen Nugroho" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Kathleen Nugroho
                                </h3>

                                <p class="text-[13px] mb-3">
                                    London School of Economics
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Social Impact / Sustainability
                                </div>

                                <p class="text-[13px] mt-3">
                                    Social Innovation | <br> LPDP Awardee
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-kathleen"
                                    data-modal-toggle="modal-kathleen" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-kathleen"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/14. Kethleen-2.png') }}"
                                            alt="Kathleen Nugroho" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Social Impact / Sustainability
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Kathleen Nugroho
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-kathleen"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                London School of Economics
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A London School of Economics graduate with an MSc in Social Innovation and
                                                Entrepreneurship
                                                and LPDP awardee, Kathleen has 3+ years driving sustainability, community
                                                development, and
                                                social impact, built on a finance foundation from KPMG.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Khodijah -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/15. Hanna-1.png') }}"
                                    alt="Khodijah Arifah Hannah" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Khodijah Arifah Hannah
                                </h3>

                                <p class="text-[13px] mb-3">
                                    Universitas Indonesia & Monash
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Biomedical / Health Science
                                </div>

                                <p class="text-[13px] mt-3">
                                    Medical research | Scientific communication
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-khodijah"
                                    data-modal-toggle="modal-khodijah" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-khodijah"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/16. Hanna-2.png') }}"
                                            alt="Khodijah Arifah Hannah" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Biomedical / Health Science
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Khodijah Arifah Hannah
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-khodijah"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                Universitas Indonesia & Monash University
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Biomedical and Health Science graduate of Universitas Indonesia and Monash
                                                University,
                                                Khodijah conducts medical research spanning dementia and cardio-oncology and
                                                has built and
                                                run a high-throughput molecular diagnostics lab. Her expertise covers
                                                biomedical research
                                                and scientific communication.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Muhammad Attar Basri -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/17. Attar-1.png') }}"
                                    alt="Muhammad Attar Basri" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Muhammad Attar Basri
                                </h3>

                                <p class="text-[13px] mb-3">
                                    University of Edinburgh
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    International Relations / Strategy
                                </div>

                                <p class="text-[13px] mt-3">
                                    Strategy consulting | <br> Market research
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-attar" data-modal-toggle="modal-attar"
                                    class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-attar" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/18. Attar-2.png') }}"
                                            alt="Muhammad Attar Basri" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    International Relations / Strategy
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Muhammad Attar Basri
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-attar"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University of Edinburgh
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                An International Relations graduate (MA Hons) from the University of
                                                Edinburgh, Attar brings
                                                a strategy-consulting background across state-owned and regional
                                                enterprises. His expertise
                                                covers market research, operational analysis, and turning data into clear,
                                                executive-ready
                                                insight.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Stefanie Belinda Senjaya -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/19. Stefanie-1.png') }}"
                                    alt="Stefanie Belinda Senjaya" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Stefanie Belinda Senjaya
                                </h3>

                                <p class="text-[13px] mb-3">
                                    UC Berkeley
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Engineering / STEM
                                </div>

                                <p class="text-[13px] mt-3">
                                    Nuclear Engineering | Reliability engineering
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-stefanie"
                                    data-modal-toggle="modal-stefanie" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-stefanie"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/20. Stefanie-2.png') }}"
                                            alt="Stefanie Belinda Senjaya"
                                            class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Engineering / STEM
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Stefanie Belinda Senjaya
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-stefanie"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                UC Berkeley
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Nuclear Engineering graduate from UC Berkeley and incoming Georgia Tech
                                                master's
                                                student, Stefanie works in reliability engineering, including risk
                                                assessment at Kairos Power.
                                                She has taught IoT electronics as a UC Berkeley instructor, with expertise
                                                across engineering
                                                and applied STEM.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Card Theofilia Lucia Merlim -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/21. Theo.png') }}"
                                    alt="Theofilia Lucia Merlim" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Theofilia Lucia Merlim
                                </h3>

                                <p class="text-[13px] mb-3">
                                    Wageningen University & Research
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Food Technology
                                </div>

                                <p class="text-[13px] mt-3">
                                    FMCG R&D | <br> Food science research
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-theofilia"
                                    data-modal-toggle="modal-theofilia" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-theofilia"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/22. Theo-2.png') }}"
                                            alt="Theofilia Lucia Merlim" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Food Technology
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Theofilia Lucia Merlim
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-theofilia"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                Wageningen University & Research
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Food Technology graduate from Wageningen University & Research, Theofilia
                                                brings
                                                international academic and industry experience, including food safety and
                                                quality within a
                                                multinational FMCG company in the Netherlands, alongside research in food
                                                physics and
                                                rheology.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Thoby Noorhalim -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/23. Thobby-1.png') }}"
                                    alt="Thoby Noorhalim" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Thoby Noorhalim
                                </h3>

                                <p class="text-[13px] mb-3">
                                    University of New South Wales
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Mechatronics / IoT
                                </div>

                                <p class="text-[13px] mt-3">
                                    Embedded systems | Makerspace founder
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-thoby" data-modal-toggle="modal-thoby"
                                    class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-thoby" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/24. Thobby-2.png') }}"
                                            alt="Thoby Noorhalim" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Mechatronics / IoT
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Thoby Noorhalim
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-thoby"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University of New South Wales
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Mechatronics Engineering graduate from the University of New South Wales,
                                                Thoby has 4+
                                                years across industrial engineering, embedded systems, and IoT product
                                                development. A maker
                                                at heart, he founded a local makerspace and mentors students in hardware and
                                                applied
                                                engineering.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Card Vanessa Tjandra -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/25. Vannesa-1.png') }}"
                                    alt="Vanessa Tjandra" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Vanessa Tjandra
                                </h3>

                                <p class="text-[13px] mb-3">
                                    University of Melbourne
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    Business / Finance
                                </div>

                                <p class="text-[13px] mt-3">
                                    Marketing & Management | Finance & business development
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-vanessa"
                                    data-modal-toggle="modal-vanessa" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-vanessa" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/26. Vannesa-2.png') }}"
                                            alt="Vanessa Tjandra" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    Business / Finance
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Vanessa Tjandra
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-vanessa"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                University of Melbourne
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                A Marketing and Management graduate from the University of Melbourne,
                                                Vanessa has 3+ years
                                                in finance, business development, and fixed-income securities. She brings
                                                expertise in
                                                market analysis, stakeholder management, and business communication.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Card Waraney Dendeng -->
                    <div class="w-full">
                        <div
                            class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset('assets/img/about/Our Team/6. Mentors/27. Ney-1.png') }}"
                                    alt="Waraney Dendeng" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-4 text-start">
                                <h3 class="text-lg text-newprimary font-normal">
                                    Waraney Dendeng
                                </h3>

                                <p class="text-[13px] mb-3">
                                    Rhine-Waal University
                                </p>

                                <div
                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                    International Relations / Diplomacy
                                </div>

                                <p class="text-[13px] mt-3">
                                    UNESCO & ASEAN | <br> Global institutions
                                </p>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-waraney"
                                    data-modal-toggle="modal-waraney" class="text-[13px]">
                                    See More
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-waraney" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full relative">
                                <div class="flex">
                                    <div class="w-[30%]">
                                        <img src="{{ asset('assets/img/about/Our Team/6. Mentors/28. Ney-2.png') }}"
                                            alt="Waraney Dendeng" class="w-full rounded-l-2xl h-full object-cover">
                                    </div>

                                    <div class="w-[70%] p-6">
                                        <div class="flex justify-between">
                                            <div class="text-start">
                                                <div
                                                    class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                    International Relations / Diplomacy
                                                </div>

                                                <h3 class="text-lg text-newprimary mt-2">
                                                    Waraney Dendeng
                                                </h3>
                                            </div>

                                            <button type="button" data-modal-hide="modal-waraney"
                                                class="absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>

                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                Rhine-Waal University
                                            </p>
                                        </div>

                                        <hr class="border-b-2 my-2" />

                                        <div class="text-start mt-10">
                                            <p class="text-base text-dark/60">
                                                An International Relations graduate (Magna Cum Laude) and DAAD Scholarship
                                                awardee who
                                                studied at Rhine-Waal University, Waraney has interned at UNESCO
                                                headquarters in Paris and
                                                the ASEAN Secretariat. His expertise spans international relations,
                                                diplomacy, and global
                                                institutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center mt-20">
                <p class="text-xl text-dark/60 font-light mb-5">
                    Not sure which mentor is the right fit? Book a free consultation today.
                </p>

                <div class="flex justify-center">
                    <a href="#" class="py-2 px-5 uppercase bg-newprimary text-white rounded-2xl text-xl">
                        Find Your Mentor Today
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="new-main-container py-20">
        <div class="bg-newprimary rounded-2xl p-5">
            <div class="flex justify-between items-center gap-10">
                <div class="w-[50%]">
                    <p class="uppercase text-sm text-white mb-3">Academy Teaching Team</p>
                    <h2 class="text-4xl uppercase font-light mb-5 text-white">
                        The Educators Behind EduALL Academy
                    </h2>
                    <p class="text-white/60">
                        EduALL Academy is taught by a carefully curated network of educators, selected and supervised by our
                        Academy Director. Our tutors bring years of teaching experience, hold relevant academic and
                        professional certifications, and many are practicing teachers at leading international schools.
                    </p>
                </div>
                <div class="w-[40%]">
                    <img src="{{ asset('assets/img/about/Our Team/8. Foto Behind ACADEMY.png') }}" alt="EduALL"
                        class="w-full rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-white to-[#E6F0FF]">
        <div class="new-main-container py-20">
            <div class="max-w-5xl mx-auto mb-10">
                <p class="text-sm text-center text-dark/50 uppercase font-semibold">
                    Selection Standard
                </p>
                <h2 class="text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    Why Parents Trust Our Tutors
                </h2>
            </div>

            <div class="w-full mx-auto">
                <div class="flex">
                    .w
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
@endpush
