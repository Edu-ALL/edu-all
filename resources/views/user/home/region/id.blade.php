@extends('layout.user.main')

{{-- ========================================== HEAD SECTION ========================================== --}}
@section('head')
    @php
        // Breadcrumb navigation setup
        $breadcrumbs = [['name' => 'Home', 'url' => url('/' . app()->getLocale())]];
        $currentUrl = url()->current();

        // Meta tags for SEO
        $metaTitle = __('pages/home.meta_title');
        $metaDesc = __('pages/home.meta_description');

        // Open Graph image path
        $ogImage = Storage::url(
            'banner/' .
                $banners->updated_at->format('Y') .
                '/' .
                $banners->updated_at->format('m') .
                '/' .
                $banners->image,
        );
    @endphp

    {{-- Page Title --}}
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDesc }}" />

    {{-- Open Graph / Facebook / WhatsApp Meta Tags --}}
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $currentUrl }}" />
    <meta property="og:title" content="{{ $metaTitle }}" />
    <meta property="og:description" content="{{ $metaDesc }}" />
    <meta property="og:image" content="{{ $ogImage }}" />
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}" />

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $metaTitle }}" />
    <meta name="twitter:description" content="{{ $metaDesc }}" />
    <meta name="twitter:image" content="{{ $ogImage }}" />

    {{-- SEO Keywords --}}
    <meta name="keywords"
        content="study abroad, university mentoring, education consultant, kuliah luar negeri, student development, teaching excellence, university application, mentoring program, global education, ivy league preparation, student experience, higher education consulting, konsultan pendidikan, persiapan kuliah luar negeri, mentoring mahasiswa, teaching experience, profile building, career exploration, essay writing, personal statement, scholarship, SAT score, acceptance rate, mentee success stories" />

    {{-- JSON-LD Structured Data: Organization + WebPage --}}
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@graph": [
            {
            "@type": "Organization",
            "name": "EduALL",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('assets/img/home/EduALL-white-logo.png') }}",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+62{{ $website_settings->phone_number_3 ?? '' }}",
                "contactType": "customer service"
            },
            "sameAs": [
                "{{ $website_settings->instagram ?? '' }}",
                "{{ $website_settings->linkedin ?? '' }}",
                "{{ $website_settings->youtube_channel ?? '' }}"
            ]
            },
            {
            "@type": "WebPage",
            "url": "{{ $currentUrl }}",
            "name": "{{ $metaTitle }}",
            "description": "{{ $metaDesc }}",
            "breadcrumb": {
                "@type": "BreadcrumbList",
                "itemListElement": [
                { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/' . app()->getLocale()) }}" }
                ]
            }
            }
        ]
        }
    </script>
@endsection

{{-- ========================================== MAIN CONTENT ========================================== --}}
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
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh] z-10">
                <div class="new-main-container">
                    <h1 class="font-bold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                        aria-label="{{ __('pages/home.hero.title') }}" itemprop="headline">
                        {{ __('pages/home.hero.title') }}
                    </h1>
                    <p class="text-white text-xl md:text-4xl mb-4 md:mb-0 md:text-start text-center font-[playfair] italic"
                        itemprop="description">
                        {{ __('pages/home.hero.subtitle') }}
                    </p>

                    <div class="flex gap-3 md:gap-5 md:justify-start justify-center mt-10">
                        <a href="https://bit.ly/eduall-contactus"
                            class="py-2 px-4 md:py-1 md:px-5 bg-white text-newprimary rounded-full shadow-md text-sm md:text-base">
                            {{ __('pages/home.banner.consult_now') }}
                        </a>
                        <a href="#program"
                            class="py-2 px-4 md:py-1 md:px-5 bg-newprimary text-white rounded-full shadow-md text-sm md:text-base">
                            {{ __('pages/home.banner.our_programs') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="relative">
        <img src="{{ asset('assets/img/home/2026/background.webp') }}" alt="About Us"
            class="w-full h-full absolute left-0 top-0 z-0" loading="lazy">

        {{-- ==================== Our Score Section ==================== --}}
        <section class="pt-6 md:pt-10 new-main-container md:px-0 pb-[2rem] md:pb-[3rem] relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                @foreach (__('pages/home.achievment') as $item)
                    <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                        <p class="text-lg md:text-[30px] font-bold text-newprimary">
                            {{ $item['value'] }}
                        </p>
                        <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                            {!! $item['label'] !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ==================== About Us Section ==================== --}}
        <section class="new-main-container my-12 md:my-20 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-6 md:gap-10 about-grid">
                <div class="w-full md:w-1/2 md:text-start text-center">
                    <h2 class="text-newprimary text-2xl md:text-6xl font-thin mb-3 md:mb-5" itemprop="headline">
                        {{ __('pages/home.about_us.title') }}
                    </h2>
                    <p class="text-gray-500 text-sm md:text-xl mb-3 md:mb-5" itemprop="description">
                        {{ __('pages/home.about_us.subtitle') }}
                    </p>

                    <a href="{{ route('about', ['locale' => app()->getLocale()]) }}"
                        class="py-2 px-4 bg-dark text-white rounded-lg text-sm md:text-lg shadow-md">
                        {{ __('pages/home.about_us.cta') }}
                    </a>
                </div>
                <div class="w-full md:w-1/2 about-cards">
                    @foreach (__('pages/home.about_us.items') as $item)
                        <div
                            class="flex items-center gap-3 md:gap-4 bg-gradient-to-b from-newprimary to-[#10153a] rounded-xl p-3 md:p-4 shadow-md mb-2">
                            <div class="rounded-lg w-[15%]">
                                <img src="{{ asset('assets/img/home/2026/' . $item['img']) }}" alt="{{ $item['title'] }}"
                                    class="object-cover">
                            </div>
                            <div class="w-[85%]">
                                <p class="text-sm md:text-base font-bold text-white mb-3">
                                    {{ $item['title'] }}
                                </p>
                                <p class="text-white/70 text-xs md:text-sm">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-12 md:mt-20">
                <div class="bg-[#F0F0F0] rounded-xl py-4 px-4 md:px-6 shadow-sm">
                    <div class="flex flex-col md:flex-row gap-4 md:gap-10 items-center justify-between">
                        <p class="text-base md:text-xl font-normal text-center md:text-left">
                            {!! __('pages/home.about_us.inquiry_title') !!}
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-2 md:gap-5">
                            <a href="{{ route('ultimate_mentoring', ['locale' => app()->getLocale()]) }}"
                                class="py-2 px-4 md:py-3 md:px-6 bg-white text-newprimary rounded-full hover:bg-newprimary hover:text-white transition-all duration-300 text-xs md:text-base">
                                {{ __('pages/home.about_us.inquiry_items.0') }} <i
                                    class="fas fa-arrow-right ml-1 md:ml-3"></i>
                            </a>
                            <a href="{{ route('tutoring', ['locale' => app()->getLocale()]) }}"
                                class="py-2 px-4 md:py-3 md:px-6 bg-white text-newprimary rounded-full hover:bg-newprimary hover:text-white transition-all duration-300 text-xs md:text-base">
                                {{ __('pages/home.about_us.inquiry_items.1') }} <i
                                    class="fas fa-arrow-right ml-1 md:ml-3"></i>
                            </a>
                            <a href="https://bit.ly/eduall-contactus"
                                class="py-2 px-4 md:py-3 md:px-6 bg-white text-newprimary rounded-full hover:bg-newprimary hover:text-white transition-all duration-300 text-xs md:text-base">
                                {{ __('pages/home.about_us.inquiry_items.2') }} <i
                                    class="fas fa-arrow-right ml-1 md:ml-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== Our Program Section ==================== --}}
        <section class="new-main-container px-4 md:px-10 mb-10 scroll-mt-28" id="program">
            <div class="bg-white shadow-md rounded-xl p-4 md:p-5 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <h2 class="text-2xl md:text-3xl text-black mb-3 md:mb-4 font-normal" itemprop="headline">
                        {{ __('pages/home.program.title') }}
                    </h2>
                    <p class="text-gray-500 text-base md:text-lg" itemprop="description">
                        {{ __('pages/home.program.description') }}
                    </p>
                </div>

                <div class="w-full max-w-4xl mx-auto mt-4 md:mt-5">

                    {{-- Tabs Navigation --}}
                    <div class="flex justify-center border-b border-gray-200">
                        <button data-tab="1"
                            class="tab-btn px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-blue-600 border-b-2 border-blue-600">
                            {{ __('pages/home.program.mentoring.name') }}
                        </button>

                        <button data-tab="2"
                            class="tab-btn px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-blue-600">
                            {{ __('pages/home.program.academy.name') }}
                        </button>
                    </div>

                    {{-- Tab Content --}}
                    <div class="relative mt-2 md:mt-3 h-[87vh] md:h-[450px]">

                        {{-- Tab 1: Admission Mentoring --}}
                        <div data-content="1"
                            class="tab-content absolute top-0 left-0 w-full transition-all duration-500 ease-out opacity-100 translate-x-0">
                            <div class="text-center py-2">
                                <h2 class="text-xl md:text-2xl text-black mb-3 md:mb-4 font-normal">
                                    {{ __('pages/home.program.mentoring.title') }}
                                </h2>
                                <p class="text-gray-500 text-xs md:text-base">
                                    {{ __('pages/home.program.mentoring.description') }}
                                </p>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-10 mt-2">
                                <div class="w-full md:w-1/2">
                                    @foreach (__('pages/home.program.mentoring.features') as $item)
                                        <div
                                            class="bg-[#E3F0FF] px-3 py-3 md:py-2 rounded-xl shadow-md flex items-center gap-3 md:gap-4 mb-2 md:mb-3">
                                            <i class="fas fa-check-circle text-[#5DADFF] text-base md:text-lg"></i>
                                            <p class="text-sm md:text-lg">{{ $item }}</p>
                                        </div>
                                    @endforeach

                                    <div class="mt-10">
                                        <a href="{{ route('ultimate_mentoring', ['locale' => app()->getLocale()]) }}"
                                            class="py-2 px-4 bg-black text-white rounded-lg text-sm md:text-lg shadow-md">
                                            {{ __('pages/home.program.cta') }}
                                        </a>
                                    </div>
                                </div>

                                <div class="w-full md:w-1/2">
                                    <img src="{{ asset('assets/img/home/2026/mentoring.png') }}"
                                        class="w-full h-[200px] md:h-[300px] object-cover rounded-xl" loading="lazy">
                                </div>
                            </div>

                        </div>

                        {{-- Tab 2: EduALL Academy --}}
                        <div data-content="2"
                            class="tab-content absolute top-0 left-0 w-full transition-all duration-500 ease-out opacity-0 translate-x-8 pointer-events-none">
                            <div class="text-center py-2">
                                <h2 class="text-xl md:text-2xl text-black mb-3 md:mb-4 font-normal">
                                    {{ __('pages/home.program.academy.title') }}
                                </h2>
                                <p class="text-gray-500 text-xs md:text-base">
                                    {{ __('pages/home.program.academy.description') }}
                                </p>
                            </div>
                            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-10">
                                <div class="w-full md:w-1/2">
                                    <img src="{{ asset('assets/img/home/2026/academy.png') }}"
                                        class="w-full h-[200px] md:h-[300px] object-cover rounded-xl" loading="lazy">
                                </div>
                                <div class="w-full md:w-1/2 mt-2">
                                    @foreach (__('pages/home.program.academy.features') as $item)
                                        <div
                                            class="bg-[#E3F0FF] px-3 py-3 md:py-2 rounded-xl shadow-md flex items-center gap-3 md:gap-4 mb-2 md:mb-3">
                                            <i class="fas fa-check-circle text-[#5DADFF] text-base md:text-lg"></i>
                                            <p class="text-sm md:text-lg">{!! $item !!}</p>
                                        </div>
                                    @endforeach

                                    <div class="mt-10">
                                        <a href="{{ route('tutoring', ['locale' => app()->getLocale()]) }}"
                                            class="py-2 px-4 bg-black text-white rounded-lg text-sm md:text-lg shadow-md">
                                            {{ __('pages/home.program.cta') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== Why EduALL Section ==================== --}}
        <section class="new-main-container">
            <div class="bg-gradient-to-tr from-black to-newprimary rounded-xl px-6 md:px-10 py-6 md:py-10 relative z-10">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6 md:gap-10">
                    <div class="w-full md:w-2/5">
                        <h2 class="w-full font-normal text-white text-2xl md:text-4xl text-center md:text-left"
                            itemprop="headline">
                            {!! __('pages/home.why_eduall.title') !!}
                        </h2>
                        <p class="text-lg text-gray-400 mt-5" itemprop="description">
                            {{ __('pages/home.why_eduall.subtitle') }}
                        </p>
                    </div>

                    <div class="w-full md:w-3/5">
                        <div class="text-white accordion-group">
                            @foreach (__('pages/home.why_eduall.items') as $item)
                                <div class="border-b-2 overflow-hidden">
                                    <button
                                        class="accordion-btn w-full flex justify-between items-center py-4 text-left font-normal">
                                        <div class="flex gap-2 items-center">
                                            <i class="fa-regular fa-circle-check text-green-400 text-2xl"></i>
                                            <p>{{ $item['title'] }}</p>
                                        </div>

                                        <span class="text-2xl transition-all duration-200">+</span>
                                    </button>

                                    <div
                                        class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                        <div class="px-5 pb-5 pl-8 text-gray-400">
                                            {{ $item['description'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== Pathway Section ==================== --}}
        <section class="new-main-container relative z-10 py-6 md:py-10 mt-12 md:mt-20">
            <div class="text-center max-w-5xl mx-auto">
                <h2 class="text-2xl md:text-4xl font-normal text-gray-800 uppercase mb-3 md:mb-4" itemprop="headline">
                    {{ __('pages/home.eduall_framework.title') }}
                </h2>

                <p class="text-lg text-gray-500" itemprop="description">
                    {{ __('pages/home.eduall_framework.description') }}
                </p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 max-w-6xl mx-auto p-4 md:p-6 items-center h-auto md:h-[480px] pathway-grid">

                @foreach (__('pages/home.eduall_framework.items') as $item)
                    <div
                        class="group relative bg-white rounded-2xl shadow-md transition-all duration-300 cursor-pointer overflow-hidden pathway-card
                        px-6 py-4 h-[320px]
                        hover:shadow-xl hover:-translate-y-1 hover:px-4 hover:h-[400px] hover:bg-gradient-to-b hover:from-newprimary hover:to-black
                        {{ $loop->first ? 'active' : '' }}">

                        <img src="{{ asset('assets/img/home/2026/' . $item['bg_image']) }}"
                            class="bg_image w-full h-full object-cover object-center absolute left-0 top-0 group-hover:hidden active:hidden scale-[1.2]">

                        {{-- NUMBER --}}
                        <div
                            class="text-5xl text-gray-300 transition
                            group-hover:hidden active:hidden">
                            {{ $item['no'] }}
                        </div>

                        {{-- IMAGE --}}
                        <div
                            class="relative h-36 rounded-xl overflow-hidden mb-4 hidden transition
                            group-hover:block active:block">
                            <img src="{{ asset('assets/img/home/2026/' . $item['img']) }}"
                                class="w-full h-full object-cover object-center">
                        </div>


                        {{-- CONTENT --}}
                        <div
                            class="absolute bottom-10 left-5 w-[85%] transition-all duration-300 group-hover:relative
                            group-hover:bottom-0 group-hover:left-0 group-hover:w-full active:relative active:bottom-0 active:left-0 active:w-full">

                            <h3
                                class="text-newprimary text-lg md:text-xl font-semibold leading-5 mb-5 transition
                                group-hover:text-white
                                active:text-white">
                                {!! $item['title'] !!}
                            </h3>

                        </div>


                        {{-- DESCRIPTION --}}
                        <p
                            class="text-sm text-gray-500 opacity-0 translate-y-4 transition-all duration-300
                            group-hover:opacity-100
                            group-hover:translate-y-0
                            group-hover:text-gray-400

                            active:opacity-100
                            active:translate-y-0
                            active:text-gray-400">
                            {{ $item['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>
        </section>
    </div>

    {{-- ==================== Quiz Section ==================== --}}
    <section class="relative z-10 bg-black h-auto md:h-[400px] overflow-hidden hidden">
        <img src="{{ asset('assets/img/home/2026/Quiz.webp') }}"
            class="absolute -top-20 left-0 w-full h-auto object-cover object-bottom z-0" alt="Quiz Background"
            loading="lazy">
        <div class="new-main-container h-full flex flex-col justify-center items-center relative z-10 py-8 md:py-0">
            <div
                class="bg-white p-4 md:p-5 rounded-xl shadow-md text-center flex flex-col md:flex-row justify-between items-center max-w-3xl gap-4 md:gap-10 quiz-content">
                <div class="text-center md:text-start w-full md:w-[65%] quiz-text">
                    <h3 class="text-lg md:text-2xl font-normal text-newprimary mb-2">
                        {{ __('pages/home.quiz.title') }}
                    </h3>
                    <p class="text-sm md:text-sm font-light text-gray-500">
                        {{ __('pages/home.quiz.description') }}
                    </p>
                </div>
                <div class="w-full md:w-[35%] quiz-button text-center md:text-end">
                    <a href="#"
                        class="py-2 px-4 bg-newprimary text-white rounded-lg shadow-md text-sm md:text-base ">
                        {{ __('pages/home.quiz.cta') }} <i class="fas fa-arrow-right ml-1 md:ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- ==================== Testimonial Section ==================== --}}
    <section class="new-main-container relative z-10 my-12 md:my-20">
        <div class="text-center mb-6 md:mb-10">
            <h2 class="text-2xl md:text-4xl font-normal text-gray-800 uppercase mb-3 md:mb-4" itemprop="headline">
                {{ __('pages/home.testimoni.title') }}
            </h2>
            <p class="text-gray-500 text-sm md:text-base" itemprop="description">
                {{ __('pages/home.testimoni.description') }}
            </p>
        </div>

        <x-eduall-alumni />
    </section>

    {{-- ==================== Call to Action Section ==================== --}}
    <section class="relative z-10 h-auto overflow-hidden my-12 md:my-20 py-12 md:py-20">
        <img src="{{ asset('assets/img/home/2026/banner cta.webp') }}" alt="EduALL"
            class="absolute top-0 left-0 w-full z-0">
        <div class="new-main-container relative z-10 flex justify-center">
            <div class="max-w-4xl bg-black p-6 md:p-10 rounded-xl">
                <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 items-center cta-grid">
                    <div class="w-full md:w-1/2 text-white md:order-1 order-2">
                        <p class="text-xl md:text-2xl mb-3 md:mb-5">
                            {{ __('pages/home.cta.title') }}
                        </p>
                        <p class="text-xs md:text-sm text-gray-500">
                            {{ __('pages/home.cta.description') }}
                        </p>

                        <x-new-form title="Program" program-id="AAUP" lead-id="LS045" submit-title="Submit" />
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:order-2 order-1">
                        <img src="{{ asset('assets/img/home/2026/CTA.png') }}" alt="EduALL"
                            class="w-full md:w-[90%] h-[250px] md:h-[80%] object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Our Students Section ==================== --}}
    <section class="relative z-10 my-12 md:my-20">
        <div class="new-main-container p-5 md:p-10">
            <h2 class="text-2xl md:text-4xl font-normal text-center mb-6 md:mb-10" itemprop="headline">
                {{ __('pages/home.students.title') }}
            </h2>

            <div class="relative max-w-4xl h-auto mx-auto">
                <img src="{{ asset('assets/img/home/2026/maps.svg') }}" alt="" class="w-full relative z-0">

                <div class="absolute top-[12%] left-[12%] group z-10">
                    <x-tooltip flag="fi fi-ca" :flag-name="__('pages/home.students.countries.ca')" mentees="20" />
                </div>

                <div class="absolute top-[8%] left-[32%] group z-10">
                    <x-tooltip flag="fi fi-gb" :flag-name="__('pages/home.students.countries.uk')" mentees="20" />
                </div>

                <div class="absolute top-[25%] right-[25%] group z-10">
                    <x-tooltip flag="fi fi-cn" :flag-name="__('pages/home.students.countries.cn')" mentees="20" />
                </div>

                <div class="absolute top-[25%] right-[13%] group z-10">
                    <x-tooltip flag="fi fi-jp" :flag-name="__('pages/home.students.countries.jp')" mentees="20" />
                </div>

                <div class="absolute top-[42%] right-[16%] group z-10">
                    <x-tooltip flag="fi fi-sg" :flag-name="__('pages/home.students.countries.sg')" mentees="20" />
                </div>

                <div class="absolute bottom-[42%] right-[8%] group z-10">
                    <x-tooltip flag="fi fi-au" :flag-name="__('pages/home.students.countries.au')" mentees="20" />
                </div>

                <div class="absolute top-[25%] left-[20%] group z-10">
                    <x-tooltip flag="fi fi-us" :flag-name="__('pages/home.students.countries.us')" mentees="50" />
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Universities Section ==================== --}}
    <x-universities moreText="{{ __('pages/home.universities.more_text') }}" />

    {{-- ==================== Article Section ==================== --}}
    <section class="relative z-10 my-12 md:my-20 bg-gradient-to-br from-newprimary to-[#3056B0]">
        <div class="new-main-container py-6 md:py-10">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6 md:mb-10 gap-4">
                <h2 class="text-white text-2xl md:text-4xl font-thin" itemprop="headline">
                    {{ __('pages/home.articles.title') }}
                </h2>

                <div class="flex gap-3 items-center justify-center md:justify-end flex-wrap">
                    <a href="{{ route('blogs', ['locale' => app()->getLocale()]) }}"
                        class="bg-white text-blue-500 hover:bg-[#00003F] hover:text-white px-5 py-1 rounded-full">{{ __('pages/home.articles.all') }}</a>
                    @foreach ($category as $index => $item)
                        <button data-item="{{ $item->id }}"
                            class="category-btn py-1 px-4 rounded-full hover:bg-[#00003F] hover:text-white
                {{ $index == 0 ? 'bg-[#00003F] text-white' : 'bg-white text-[#00003F]' }}">
                            {{ $item->category_name }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="flex flex-wrap" id="articleContainer">
                @foreach ($blogs as $item)
                    <div class="w-full md:w-1/2 lg:w-1/3 p-2 article-item" data-category="{{ $item->cat_id }}">
                        <a href="#">
                            <div
                                class="bg-white rounded-lg p-5 h-full flex flex-col article-card hover:bg-[#00003F] hover:text-white group transition-all ease-in-out duration-300">
                                <p class="text-newprimary group-hover:text-white text-lg leading-5">
                                    {{ $item->blog_title }}
                                </p>

                                <div
                                    class="flex gap-2 text-sm items-center text-gray-500  group-hover:text-gray-200 mt-3 mb-3">
                                    <i class="fas fa-calendar"></i>
                                    {{ Carbon\Carbon::parse($item->updated_at)->format('F d, Y') }}

                                    <div>|</div>

                                    <i class="fa-regular fa-clock"></i>
                                    {{ $item->duration_read }} {{ __('pages/home.articles.minutes') }}
                                </div>

                                <img data-src="{{ Storage::url('blogs/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->blog_thumbnail) }}"
                                    alt="EduALL {{ $item->blog_thumbnail_alt }}"
                                    class="lazyload rounded-lg w-full md:h-60 h-40 object-cover mt-auto">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== FAQ Section ==================== --}}
    <section class="relative z-10 my-12 md:my-20">
        <div class="new-main-container px-4 md:px-5 lg:px-20 pt-12 md:pt-20">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-2/5 text-center md:text-start mb-5">
                    <h2 class="text-blue-500 text-base md:text-lg mb-3 md:mb-5" itemprop="headline">
                        {{ __('pages/home.faq.title') }}</h2>
                    <h3 class="text-2xl md:text-4xl font-normal leading-5 mb-3 md:mb-5" itemprop="headline">
                        {{ __('pages/home.faq.subtitle') }}</h3>
                    <p class="text-gray-500 text-base md:text-lg" itemprop="description">
                        {{ __('pages/home.faq.description') }} </p>
                </div>

                <div class="w-full md:w-3/5">
                    <div class="accordion-group">
                        @foreach (__('pages/home.faq.items') as $item)
                            <div class="border-b rounded-lg overflow-hidden">
                                <button
                                    class="accordion-btn w-full flex justify-between items-center px-5 py-4 text-left font-normal gap-5">
                                    <span>{{ $item['question'] }}</span>

                                    <span class="text-2xl transition-all duration-200">+</span>
                                </button>

                                <div
                                    class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="px-5 pb-5 text-gray-600">
                                        {{ $item['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- ========================================== SCRIPTS ========================================== --}}
@push('script')
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
        // ==================== Article Category Filter ====================
        // Filters articles based on selected category
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.category-btn');
            const articles = document.querySelectorAll('.article-item');

            function filterArticles(categoryId) {
                articles.forEach(article => {
                    if (article.dataset.category === categoryId) {
                        article.classList.remove('hidden');
                    } else {
                        article.classList.add('hidden');
                    }
                });
            }

            // Display first category by default
            if (buttons.length > 0) {
                filterArticles(buttons[0].dataset.item);
            }

            // Handle category button clicks
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active state from all buttons
                    buttons.forEach(btn => {
                        btn.classList.remove('bg-[#00003F]', 'text-white');
                        btn.classList.add('bg-white', 'text-[#00003F]');
                    });

                    // Add active state to clicked button
                    this.classList.remove('bg-white', 'text-[#00003F]');
                    this.classList.add('bg-[#00003F]', 'text-white');

                    // Filter articles
                    filterArticles(this.dataset.item);
                });
            });
        });
    </script>

    <script>
        // ==================== Program Tabs ====================
        // Handles tab switching for program section
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('[data-tab]');
            const contents = document.querySelectorAll('[data-content]');

            function activateTab(id) {
                // Update button styles
                buttons.forEach(btn => {
                    const active = btn.dataset.tab === id;
                    btn.className =
                        "tab-btn px-4 py-2 text-sm font-medium border-b-2 " +
                        (active ?
                            "text-blue-600 border-blue-600" :
                            "text-gray-500 border-transparent hover:text-blue-600");
                });

                // Animate content transition
                contents.forEach(el => {
                    const active = el.dataset.content === id;

                    if (active) {
                        el.classList.remove(
                            "opacity-0",
                            "translate-x-8",
                            "pointer-events-none"
                        );
                        el.classList.add("opacity-100", "translate-x-0");
                    } else {
                        el.classList.add(
                            "opacity-0",
                            "translate-x-8",
                            "pointer-events-none"
                        );
                        el.classList.remove("opacity-100", "translate-x-0");
                    }
                });
            }

            // Activate first tab by default
            activateTab("1");

            // Handle tab button clicks
            buttons.forEach(btn => {
                btn.addEventListener("click", () => activateTab(btn.dataset.tab));
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const cards = document.querySelectorAll('.pathway-card');

            if (!cards.length) return;


            function openCard(card) {

                // Reset all cards to their default state
                cards.forEach(item => {

                    item.style.paddingLeft = '';
                    item.style.paddingRight = '';
                    item.style.height = '';
                    item.style.background = '';

                    const number = item.querySelector('.text-5xl');
                    if (number) number.style.display = '';

                    const bg_image = item.querySelector('.bg_image');
                    if (bg_image) bg_image.style.display = '';

                    const image = item.querySelector('.relative.h-36');
                    if (image) image.style.display = '';

                    const content = item.querySelector('.absolute.bottom-10');
                    if (content) {
                        content.style.position = '';
                        content.style.bottom = '';
                        content.style.left = '';
                        content.style.width = '';
                    }

                    const icon = item.querySelector('i');
                    if (icon) icon.style.color = '';

                    const title = item.querySelector('h3');
                    if (title) title.style.color = '';

                    const desc = item.querySelector('p');
                    if (desc) {
                        desc.style.opacity = '';
                        desc.style.transform = '';
                        desc.style.color = '';
                    }

                });


                // Apply expanded state to the selected card
                card.style.paddingLeft = '1rem';
                card.style.paddingRight = '1rem';
                card.style.height = '390px';
                card.style.background = 'linear-gradient(to bottom, #0B1B7A, #000)';


                // Hide card number
                const number = card.querySelector('.text-5xl');
                if (number) number.style.display = 'none';

                const bg_image = card.querySelector('.bg_image');
                if (bg_image) bg_image.style.display = 'none';


                // Show card image
                const image = card.querySelector('.relative.h-36');
                if (image) image.style.display = 'block';


                // Move content position when card is expanded
                const content = card.querySelector('.absolute.bottom-10');
                if (content) {
                    content.style.position = 'relative';
                    content.style.bottom = '0';
                    content.style.left = '0';
                    content.style.width = '100%';
                }


                // Change icon color
                const icon = card.querySelector('i');
                if (icon) icon.style.color = '#fff';


                // Change title color
                const title = card.querySelector('h3');
                if (title) title.style.color = '#fff';


                // Show card description
                const desc = card.querySelector('p');
                if (desc) {
                    desc.style.opacity = '1';
                    desc.style.transform = 'translateY(0)';
                    desc.style.color = '#9ca3af';
                }

            }


            // Open the first card automatically when the page loads
            openCard(cards[0]);


            // Change active card when hovering over another card
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    openCard(card);
                });
            });

        });
    </script>
@endpush
