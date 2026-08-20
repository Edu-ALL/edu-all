{{-- ========================================== HEAD SECTION ========================================== --}}
@extends('layout.user.main')
@section('head')
    @php
        // Breadcrumb navigation setup
        $breadcrumbs = [
            ['name' => __('pages/mentoring/ultimate.breadcrumbs.home'), 'url' => url('/' . app()->getLocale())],
            ['name' => __('pages/mentoring/ultimate.breadcrumbs.program'), 'url' => '#'],
            ['name' => __('pages/mentoring/ultimate.breadcrumbs.mentoring'), 'url' => url()->current()],
        ];
    @endphp
    {{-- Page Title and Meta Tags --}}
    <title>{{ __('pages/mentoring/ultimate.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/mentoring/ultimate.meta_title') }}" />
    <meta name="description" content="{{ __('pages/mentoring/ultimate.meta_description') }}" />
    <meta name="keywords" content="{{ __('pages/mentoring/ultimate.meta_keywords') }}" />
@endsection

@push('style')
    <style>
        .admission-card .card {
            background-color: #ffffff;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        }

        .admission-card .title {
            color: #191265;
            font-size: 2.25rem;
        }

        .admission-card .number {
            background-color: #191265;
            color: #ffffff;
            font-size: 1.5rem;
        }

        .admission-card .content {
            max-height: 0;
            opacity: 0;
        }

        .admission-card.active .card {
            background-color: #191265;
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        }

        .admission-card.active .title {
            color: #ffffff;
            font-size: 1.875rem;
        }

        .admission-card.active .number {
            background-color: #ffffff;
            color: #191265;
            font-size: 1.25rem;
        }

        .admission-card.active .content {
            max-height: 500px;
            opacity: 1;
        }
    </style>
@endpush

{{-- ========================================== MAIN CONTENT ========================================== --}}
@section('content')
    {{-- ==================== Banner Section ==================== --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/mentoring/ultimate/1. Hero Section.webp') }}"
                    alt="{{ __('pages/mentoring/ultimate.banner.title') }}"
                    title="{{ __('pages/mentoring/ultimate.banner.title') }}" fetchpriority="high" decoding="async"
                    width="1920" height="1080"
                    class="w-full md:h-[100vh] h-[100dvh] object-cover md:object-bottom object-left">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh]">
                <div class="new-main-container">
                    <h1 class="font-normal text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-2xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                        itemprop="headline">
                        {{ __('pages/mentoring/ultimate.banner.title') }}
                    </h1>
                    <p class="text-white text-xl md:text-[1.3rem] mb-4 md:mb-5 md:text-start font-normal text-center max-w-2xl"
                        itemprop="description">
                        {{ __('pages/mentoring/ultimate.banner.subtitle') }}
                    </p>
                    <p class="text-gray-300 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-2xl"
                        itemprop="description">
                        {{ __('pages/mentoring/ultimate.banner.description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Score and Benefits Section ==================== --}}
    <section class="relative overflow-hidden">
        <img src="{{ asset('assets/img/mentoring/ultimate/1. Achieve Ultimate Gedung (1).webp') }}"
            alt="EduALL Ultimate Mentoring Building" title="EduALL Ultimate Mentoring Building" loading="lazy"
            decoding="async" width="1920" height="1080" class="absolute top-0 left-0 w-full h-auto">

        {{-- ==================== Our Score Section ==================== --}}
        <section class="pt-3 md:pt-5 new-main-container md:px-0 pb-5 md:pb-10 relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                @foreach (__('pages/mentoring/ultimate.scores') as $score)
                    <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                        <p class="text-lg md:text-[30px] font-bold text-newprimary">
                            {{ $score['value'] }}
                        </p>
                        <p class="text-[12px] md:text-base text-gray-700 mt-2 md:leading-5 leading-4">
                            {{ $score['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="new-main-container my-10">
            <div class="bg-gradient-to-br from-newprimary to-dark text-white p-5 rounded-2xl shadow-xl">
                <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-5">
                    @foreach (__('pages/mentoring/ultimate.benefits') as $benefit)
                        <div
                            class="md:flex md:items-center w-full md:w-1/4 text-base md:text-xl h-full px-4 md:px-10 text-center {{ !$loop->last ? 'md:border-r border-white/30 md:pb-0 pb-4' : '' }}">
                            {!! $benefit !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ==================== About Section ==================== --}}
        <section class="new-main-container my-10">
            <div class="max-w-2xl mx-auto text-center py-5 md:py-10">
                <h2 class="text-xl md:text-2xl font-normal mb-2 md:mb-3">
                    {{ __('pages/mentoring/ultimate.about.title') }}
                </h2>
                <h3 class="text-2xl md:text-4xl font-normal text-newprimary">
                    {{ __('pages/mentoring/ultimate.about.subtitle') }}
                </h3>

                <div class="relative w-full flex justify-center">
                    <img src="{{ asset('assets/img/mentoring/ultimate/2. Achieve Ultimate Katyana.png') }}"
                        alt="Ultimate Mentoring Student Success" title="Ultimate Mentoring Student Success" loading="lazy"
                        decoding="async" class="w-[450px]">
                </div>
            </div>
            <div class="max-w-6xl mx-auto -mt-10 md:-mt-[170px] px-4">
                <p class="text-gray-500 text-base md:text-lg text-center">
                    {{ __('pages/mentoring/ultimate.about.description') }}
                </p>
            </div>
        </section>
    </section>

    {{-- ==================== What You Will Get Section ==================== --}}
    <section class="new-main-container my-10">
        <div class="bg-[#E9F0F9] rounded-2xl shadow-xl">
            <div class="flex flex-col md:flex-row items-start">
                <div class="w-full md:w-[30%] p-6 md:p-10">
                    <h2
                        class="text-xl md:text-6xl leading-[3rem] font-normal text-newprimary uppercase text-center md:text-left md:mb-10">
                        {{ __('pages/mentoring/ultimate.what_you_will_get.title') }}
                    </h2>

                    <img src="{{ asset('assets/img/mentoring/ultimate/3. Isna_What You Will Get.png') }}"
                        alt="What You Will Get from Ultimate Mentoring" title="What You Will Get from Ultimate Mentoring"
                        loading="lazy" decoding="async" width="600" height="800" class="w-full mt-5 rounded-xl">
                </div>
                <div class="w-full md:w-[70%] p-6 md:p-10 space-y-5">
                    @foreach (__('pages/mentoring/ultimate.what_you_will_get.items') as $index => $item)
                        <div class="flex items-start gap-3 md:gap-5">
                            <div class="text-4xl md:text-5xl font-light text-newprimary w-[5%] -mt-[5px]">{{ $index + 1 }}</div>
                            <div class="w-[95%]">
                                <h3 class="mb-1 text-lg md:text-xl font-normal text-newprimary">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-sm md:text-[1rem] font-light">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Admissions Process Section ==================== --}}
    <section class="new-main-container py-5 md:py-10 relative">
        <img src="{{ asset('assets/img/mentoring/ultimate/5. Background The Admission Process.png') }}"
            alt="University Admissions Process Background" title="University Admissions Process Background" loading="lazy"
            decoding="async" width="1920" height="1080" class="absolute top-0 left-0 w-full h-auto">
        <div class="w-full mx-auto px-4">
            <h2 class="text-2xl md:text-5xl font-normal uppercase text-center text-newprimary mb-6 md:mb-10">
                {{ __('pages/mentoring/ultimate.admissions_process.title') }}
            </h2>

            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-6">
                    @foreach (__('pages/mentoring/ultimate.admissions_process.cards') as $index => $card)
                        <div class="w-full md:w-1/3 flex items-center admission-card {{ $index === 0 ? 'active' : '' }}">
                            <div
                                class="card relative w-full rounded-2xl bg-white shadow-xl transition-all duration-300 overflow-hidden">

                                <div class="relative pt-5 px-5">
                                    <h3 class="title text-4xl font-light transition-all duration-300 ease-in-out">
                                        {!! $card['title'] !!}
                                    </h3>

                                    <div
                                        class="number absolute top-5 right-5 rounded-md bg-newprimary p-2 text-2xl text-white transition-all duration-300 ease-in-out">
                                        {{ $index + 1 }}
                                    </div>
                                </div>

                                <div
                                    class="content mt-5 max-h-0 overflow-hidden opacity-0 transition-all duration-500 text-white">
                                    <p class="mb-4 px-5 pb-5 font-light text-gray-300">
                                        {{ $card['description'] }}
                                    </p>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/' . ['6. Process 1.png', '7. Process 2.png', '8. Process 3.png'][$index]) }}"
                                        alt="{{ $card['title'] }}" title="{{ $card['title'] }}" loading="lazy"
                                        decoding="async" width="400" height="200"
                                        class="h-[200px] w-full object-cover object-center opacity-60">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== How It Works Section ==================== --}}
    <section class="new-main-container py-5 md:py-10 relative">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-2xl md:text-5xl font-normal uppercase text-center text-newprimary mb-4 md:mb-10">
                {{ __('pages/mentoring/ultimate.how_it_works.title') }}
            </h2>
            <p class="text-gray-500 text-sm md:text-xl font-light text-center">
                {{ __('pages/mentoring/ultimate.how_it_works.description') }}
            </p>
        </div>
        <div class="w-full mx-auto mt-6 md:mt-10">
            <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                <!-- Content -->
                <div class="flex-1 w-full">
                    <!-- Top Phase List -->
                    <div class="">
                        @php $phases = __('pages/mentoring/ultimate.how_it_works.phases'); @endphp
                        {{-- Phase 1  --}}
                        <div class="flex gap-3 md:gap-5 items-stretch relative">
                            <div class="w-[10%] md:w-[5%]">
                                <div
                                    class="absolute top-0 left-[20px] md:left-[25px] border border-l border-gray-500 h-full z-0">
                                </div>
                                <button
                                    class="bg-dark text-white w-[40px] h-[40px] md:w-[50px] md:h-[50px] flex items-center justify-center rounded-full relative z-10">
                                    <i class="fa-regular fa-compass text-white text-sm md:text-base"></i>
                                </button>
                            </div>

                            <div
                                class="phase-item w-[90%] md:w-[95%] bg-[#E2E8F2] text-newprimary rounded-t-2xl shadow-sm relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-6 md:pb-10">
                                    <div class="flex p-3 md:p-5">
                                        <div class="w-24 md:w-40 font-bold text-newprimary text-base md:text-xl">
                                            {{ $phases[0]['phase'] }}
                                        </div>
                                        <div class="text-gray-500 text-sm md:text-xl">
                                            {{ $phases[0]['title'] }}
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/mentoring/ultimate/17. Phase 1_Closed.png') }}"
                                        alt="{{ $phases[0]['title'] }}" title="{{ $phases[0]['title'] }}"
                                        loading="lazy" decoding="async" width="300" height="80"
                                        class="w-[30%] object-cover h-[60px] md:h-[80px] object-center hidden md:block">
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary rounded-t-2xl relative z-0">
                                    <div class="flex flex-col md:flex-row">
                                        <div class="w-full md:w-[70%] p-4 md:p-5">
                                            <div class="flex flex-col md:flex-row gap-4 md:gap-10 mb-5">
                                                <div
                                                    class="w-full md:w-40 font-bold text-white text-base md:text-xl border-r-0 md:border-r-2 border-gray-300">
                                                    {{ $phases[0]['phase'] }}
                                                </div>
                                                <div class="text-gray-300 text-base md:text-xl">
                                                    {{ $phases[0]['title'] }}
                                                </div>
                                            </div>

                                            <p class="text-white mb-3 md:mb-5 text-sm md:text-base">
                                                {{ $phases[0]['description'] }}
                                            </p>

                                            <p class="text-white mb-6 md:mb-10 text-sm md:text-base">
                                                {{ $phases[0]['note'] }}
                                            </p>

                                            <a href="{{ route('epb', ['locale' => app()->getLocale()]) }}"
                                                class="bg-white rounded-full py-2 px-4 md:px-5 shadow-md text-sm md:text-base">
                                                {{ $phases[0]['cta'] }}
                                            </a>

                                            <ul class="space-y-3 md:space-y-2 mt-6 md:mt-10 pb-6 md:pb-10">
                                                @foreach ($phases[0]['items'] as $item)
                                                    <li class="flex items-start gap-3 md:gap-4">
                                                        <div class="mt-1 text-white">
                                                            <i class="fa-regular fa-circle-check text-base md:text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-base md:text-lg font-normal text-white">
                                                                {{ $item['title'] }}</h4>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <img src="{{ asset('assets/img/mentoring/ultimate/16. Phase 1_foto.png') }}"
                                            alt="{{ $phases[0]['title'] }}" title="{{ $phases[0]['title'] }}"
                                            loading="lazy" decoding="async" width="300" height="400"
                                            class="w-full md:w-[30%] h-[200px] md:h-auto object-cover opacity-70 mt-4 md:mt-0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 2  --}}
                        <div class="flex gap-3 md:gap-5 items-stretch relative">
                            <div class="w-[10%] md:w-[5%]">
                                <div
                                    class="absolute top-0 left-[20px] md:left-[25px] border border-l border-gray-500 h-full z-0">
                                </div>
                                <button
                                    class="bg-dark text-white w-[40px] h-[40px] md:w-[50px] md:h-[50px] flex items-center justify-center rounded-full relative z-10">
                                    <i class="fa-solid fa-puzzle-piece text-white text-sm md:text-base"></i>
                                </button>
                            </div>
                            <div
                                class="phase-item w-[90%] md:w-[95%] bg-[#d1def3] text-newprimary rounded-t-2xl shadow-sm -mt-5 relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10 md:pb-14">
                                    <div class="flex p-3 md:p-5">
                                        <div class="w-24 md:w-40 font-bold text-newprimary text-base md:text-xl">
                                            {{ $phases[1]['phase'] }}
                                        </div>
                                        <div class="text-gray-500 text-sm md:text-xl">
                                            {{ $phases[1]['title'] }}
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/mentoring/ultimate/18. Phase 2_closed.png') }}"
                                        alt="{{ $phases[1]['title'] }}" title="{{ $phases[1]['title'] }}"
                                        loading="lazy" decoding="async" width="300" height="70"
                                        class="w-[30%] object-cover h-[60px] md:h-[70px] object-center hidden md:block">
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary rounded-t-2xl relative z-0">
                                    <div class="flex flex-col md:flex-row md:h-[55dvh]">
                                        <div class="w-full md:w-[70%] p-4 md:p-5">
                                            <div class="flex flex-col md:flex-row gap-4 md:gap-10 mb-5">
                                                <div
                                                    class="w-full md:w-40 font-bold text-white text-base md:text-xl border-r-0 md:border-r-2 border-gray-300">
                                                    {{ $phases[1]['phase'] }}
                                                </div>
                                                <div class="text-gray-300 text-base md:text-xl">
                                                    {{ $phases[1]['title'] }}
                                                </div>
                                            </div>

                                            <p class="text-white mb-3 md:mb-5 text-sm md:text-base">
                                                {{ $phases[1]['description'] }}
                                            </p>

                                            <ul class="space-y-3 md:space-y-2 mt-6 md:mt-10 pb-6 md:pb-10">
                                                @foreach ($phases[1]['items'] as $item)
                                                    <li class="flex items-start gap-3 md:gap-4">
                                                        <div class="mt-1 text-white">
                                                            <i class="fa-regular fa-circle-check text-base md:text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-base md:text-lg font-normal text-white">
                                                                {{ $item['title'] }}</h4>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <img src="{{ asset('assets/img/mentoring/ultimate/14. Phase 2_foto.png') }}"
                                            alt="{{ $phases[1]['title'] }}" title="{{ $phases[1]['title'] }}"
                                            loading="lazy" decoding="async" width="300" height="400"
                                            class="w-full md:w-[30%] h-full object-cover opacity-70 mt-4 md:mt-0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 3  --}}
                        <div class="flex gap-3 md:gap-5 items-stretch relative">
                            <div class="w-[10%] md:w-[5%]">
                                <div
                                    class="absolute top-0 left-[20px] md:left-[25px] border border-l border-gray-500 h-full z-0">
                                </div>
                                <button
                                    class="bg-dark text-white w-[40px] h-[40px] md:w-[50px] md:h-[50px] flex items-center justify-center rounded-full relative z-10">
                                    <i class="fa-solid fa-file-pen text-white text-sm md:text-base"></i>
                                </button>
                            </div>
                            <div
                                class="phase-item w-[90%] md:w-[95%] bg-[#b6d0f9] text-newprimary rounded-t-2xl shadow-sm -mt-5 relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-10 md:pb-14">
                                    <div class="flex p-3 md:p-5">
                                        <div class="w-24 md:w-40 font-bold text-newprimary text-base md:text-xl">
                                            {{ $phases[2]['phase'] }}
                                        </div>
                                        <div class="text-gray-500 text-sm md:text-xl">
                                            {{ $phases[2]['title'] }}
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/mentoring/ultimate/19. Phase 3_Closed.png') }}"
                                        alt="{{ $phases[2]['title'] }}" title="{{ $phases[2]['title'] }}"
                                        loading="lazy" decoding="async" width="300" height="70"
                                        class="w-[30%] object-cover h-[60px] md:h-[70px] object-center hidden md:block">
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary rounded-t-2xl relative z-0">
                                    <div class="flex flex-col md:flex-row md:h-[55dvh]">
                                        <div class="w-full md:w-[70%] p-4 md:p-5">
                                            <div class="flex flex-col md:flex-row gap-4 md:gap-10 mb-5">
                                                <div
                                                    class="w-full md:w-40 font-bold text-white text-base md:text-xl border-r-0 md:border-r-2 border-gray-300">
                                                    {{ $phases[2]['phase'] }}
                                                </div>
                                                <div class="text-gray-300 text-base md:text-xl">
                                                    {{ $phases[2]['title'] }}
                                                </div>
                                            </div>

                                            <p class="text-white mb-3 md:mb-5 text-sm md:text-base">
                                                {{ $phases[2]['description'] }}
                                            </p>

                                            <ul class="space-y-3 md:space-y-2 mt-6 md:mt-10 pb-6 md:pb-10">
                                                @foreach ($phases[2]['items'] as $item)
                                                    <li class="flex items-start gap-3 md:gap-4">
                                                        <div class="mt-1 text-white">
                                                            <i class="fa-regular fa-circle-check text-base md:text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <h4 class="text-base md:text-lg font-normal text-white">
                                                                {{ $item['title'] }}</h4>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <img src="{{ asset('assets/img/mentoring/ultimate/12. Phase 3_foto.png') }}"
                                            alt="{{ $phases[2]['title'] }}" title="{{ $phases[2]['title'] }}"
                                            loading="lazy" decoding="async" width="300" height="400"
                                            class="w-full md:w-[30%] h-[200px] md:h-auto object-cover opacity-70 mt-4 md:mt-0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Phase 4  --}}
                        <div class="flex gap-3 md:gap-5 items-stretch relative">
                            <div class="w-[10%] md:w-[5%]">
                                <button
                                    class="bg-dark text-white w-[40px] h-[40px] md:w-[50px] md:h-[50px] flex items-center justify-center rounded-full relative z-10">
                                    <i class="fa-solid fa-graduation-cap text-white text-sm md:text-base"></i>
                                </button>
                            </div>
                            <div
                                class="phase-item w-[90%] md:w-[95%] bg-[#a3c2f4] text-newprimary rounded-2xl shadow-sm -mt-5 relative z-10">
                                <div class="phase-btn flex justify-between cursor-pointer relative z-10 pb-6 md:pb-10">
                                    <div class="flex p-3 md:p-5">
                                        <div class="w-24 md:w-40 font-bold text-newprimary text-base md:text-xl">
                                            {{ $phases[3]['phase'] }}
                                        </div>
                                        <div class="text-gray-500 text-sm md:text-xl">
                                            {{ $phases[3]['title'] }}
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/mentoring/ultimate/20. Phase 4_Closed.png') }}"
                                        alt="{{ $phases[3]['title'] }}" title="{{ $phases[3]['title'] }}"
                                        loading="lazy" decoding="async" width="300" height="70"
                                        class="w-[30%] object-cover h-[60px] md:h-[70px] object-center hidden md:block">
                                </div>

                                <div
                                    class="phase-content overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out bg-newprimary rounded-2xl relative z-0">
                                    <div class="flex flex-col md:flex-row md:h-[20vh]">
                                        <div class="w-full md:w-[70%] p-4 md:p-5">
                                            <div class="flex flex-col md:flex-row gap-4 md:gap-10 mb-5">
                                                <div
                                                    class="w-full md:w-40 font-bold text-white text-base md:text-xl border-r-0 md:border-r-2 border-gray-300">
                                                    {{ $phases[3]['phase'] }}
                                                </div>
                                                <div class="text-gray-300 text-base md:text-xl">
                                                    {{ $phases[3]['title'] }}
                                                </div>
                                            </div>

                                            <p class="text-white mb-3 md:mb-5 text-sm md:text-base">
                                                {{ $phases[3]['description'] }}
                                            </p>
                                        </div>
                                        <img src="{{ asset('assets/img/mentoring/ultimate/10. Phase 4_How Ultimate Work.png') }}"
                                            alt="{{ $phases[3]['title'] }}" title="{{ $phases[3]['title'] }}"
                                            loading="lazy" decoding="async" width="300" height="400"
                                            class="w-full md:w-[30%] h-[200px] md:h-auto object-cover object-top opacity-70 mt-4 md:mt-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ==================== Call to Action Section ==================== --}}
    <section class="relative z-10 h-auto overflow-hidden mt-12 md:mt-10">
        <img src="{{ asset('assets/img/mentoring/ultimate/5. Background The Admission Process.png') }}"
            alt="Call to Action Background" title="Call to Action Background" loading="lazy" decoding="async"
            width="1920" height="1080" class="absolute top-0 left-0 w-full z-0">
        <div class="new-main-container relative z-10 flex justify-center">
            <div class="max-w-5xl p-6 md:p-10 rounded-xl">
                <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 items-center cta-grid">
                    <div class="w-full md:w-1/2 text-dark md:order-1 order-2">
                        <p class="text-2xl md:text-3xl mb-3 md:mb-5">
                            {{ __('pages/mentoring/ultimate.cta.title') }}
                        </p>
                        <p class="text-xs md:text-[1rem] text-gray-500">
                            {{ __('pages/mentoring/ultimate.cta.description') }}
                        </p>

                        <x-new-form title="Program" program-id="AAUP" lead-id="LS045" color="dark"
                            submit-title="{{ __('pages/mentoring/ultimate.cta.submit_title') }}" />
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:order-2 order-1">
                        <img src="{{ asset('assets/img/mentoring/ultimate/25. Foto Form.png') }}"
                            alt="Book Your Free Consultation Form" title="Book Your Free Consultation Form"
                            loading="lazy" decoding="async" width="600" height="400"
                            class="w-full md:w-[90%] h-[250px] md:h-[80%] object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Framework Section ==================== --}}
    <section class="py-5 md:py-10 relative bg-dark">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-2xl md:text-5xl font-normal uppercase text-center text-white mb-4 md:mb-10">
                {{ __('pages/mentoring/ultimate.framework.title') }}
            </h2>
            <p class="text-gray-400 text-sm md:text-xl font-light text-center">
                {{ __('pages/mentoring/ultimate.framework.description') }}
            </p>
        </div>
        <div class="new-main-container mx-auto mt-6 md:mt-10">
            @php $frameworkItems = __('pages/mentoring/ultimate.framework.items'); @endphp
            <div class="flex flex-col md:flex-row md:pb-10 pb-5">
                @foreach ([0, 1] as $i)
                    <div class="w-full md:w-1/2 px-4 md:px-5 mb-4 md:mb-0">
                        <div class="group relative h-[16rem] md:h-[12rem] rounded-xl overflow-hidden">
                            <!-- Front Card -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r {{ $i === 0 ? 'from-[#6391CC]' : 'from-[#898989]' }} to-[#fff]
                                transition-all duration-500 ease-in-out
                                opacity-100 scale-100 translate-y-0
                                group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                                <div class="flex justify-between items-center h-full relative overflow-hidden">
                                    <div class="p-5 w-[60%]">
                                        <h3 class="text-white md:text-4xl text-2xl font-light">
                                            {{ $frameworkItems[$i]['title'] }}
                                        </h3>
                                    </div>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/icon-' . ($i + 1) . '.png') }}"
                                        alt="{{ $frameworkItems[$i]['title'] }}"
                                        title="{{ $frameworkItems[$i]['title'] }}" loading="lazy" decoding="async"
                                        width="200" height="200"
                                        class="absolute w-[40%] top-10 md:-top-[0%] left-[70%] opacity-50 rotate-[15deg]">
                                </div>
                            </div>

                            <!-- Back Card -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r {{ $i === 0 ? 'from-[#6391CC]' : 'from-[#898989]' }} to-[#fff]
                                transition-all duration-500 ease-in-out
                                opacity-0 scale-[1.02] translate-y-2
                                group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                                <div class="flex justify-between items-center h-full p-5">
                                    <div class="w-[75%]">
                                        <h3 class="text-white text-lg md:text-3xl font-normal mb-2">
                                            {{ $frameworkItems[$i]['title'] }}
                                        </h3>

                                        <p class="text-white text-sm leading-relaxed">
                                            {{ $frameworkItems[$i]['description'] }}
                                        </p>
                                    </div>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/icon-' . ($i + 1) . '.png') }}"
                                        alt="{{ $frameworkItems[$i]['title'] }}"
                                        title="{{ $frameworkItems[$i]['title'] }}" loading="lazy" decoding="async"
                                        width="100" height="100" class="w-[20%] opacity-75">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col md:flex-row">
                @foreach ([2, 3] as $i)
                    <div class="w-full md:w-1/2 px-4 md:px-5 mb-4 md:mb-0">
                        <div class="group relative h-[16rem] md:h-[12rem] rounded-xl overflow-hidden">
                            <!-- Front Card -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r {{ $i === 2 ? 'from-[#898989]' : 'from-[#6391CC]' }} to-[#fff]
                                transition-all duration-500 ease-in-out
                                opacity-100 scale-100 translate-y-0
                                group-hover:opacity-0 group-hover:scale-[0.98] group-hover:-translate-y-1">

                                <div class="flex justify-between items-center h-full relative overflow-hidden">
                                    <div class="p-5 w-[60%]">
                                        <h3 class="text-white md:text-4xl text-2xl font-light">
                                            {{ $frameworkItems[$i]['title'] }}
                                        </h3>
                                    </div>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/icon-' . ($i + 1) . '.png') }}"
                                        alt="{{ $frameworkItems[$i]['title'] }}"
                                        title="{{ $frameworkItems[$i]['title'] }}" loading="lazy" decoding="async"
                                        width="200" height="200"
                                        class="absolute w-[40%] top-10 md:-top-[0%] left-[70%] opacity-50 rotate-[15deg]">
                                </div>
                            </div>

                            <!-- Back Card -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r {{ $i === 2 ? 'from-[#898989]' : 'from-[#6391CC]' }} to-[#fff]
                                transition-all duration-500 ease-in-out
                                opacity-0 scale-[1.02] translate-y-2
                                group-hover:opacity-100 group-hover:scale-100 group-hover:translate-y-0">

                                <div class="flex justify-between items-center h-full p-5">
                                    <div class="w-[75%]">
                                        <h3 class="text-white text-lg md:text-3xl font-normal mb-2">
                                            {{ $frameworkItems[$i]['title'] }}
                                        </h3>

                                        <p class="text-white text-sm leading-relaxed">
                                            {{ $frameworkItems[$i]['description'] }}
                                        </p>
                                    </div>

                                    <img src="{{ asset('assets/img/mentoring/ultimate/icon-' . ($i + 1) . '.png') }}"
                                        alt="{{ $frameworkItems[$i]['title'] }}"
                                        title="{{ $frameworkItems[$i]['title'] }}" loading="lazy" decoding="async"
                                        width="100" height="100" class="w-[20%] opacity-75">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Universities Section ==================== --}}
    <section class="relative z-10 mt-20 pb-10">
        <div class="new-main-container px-10">
            <div class="max-w-4xl mx-auto mb-[20vh] px-4">
                <h2 class="text-2xl md:text-5xl font-normal uppercase text-center text-newprimary mb-6 md:mb-10">
                    {{ __('pages/mentoring/ultimate.universities.title') }}
                </h2>
            </div>
            <x-universities moreText="{{ __('pages/home.universities.more_text') }}" />

            <div class="max-w-4xl mx-auto text-center">
                <p class="text-xl text-gray-500">
                    {{ __('pages/mentoring/ultimate.universities.description') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== Exploration and Profile Building Section ==================== --}}
    <section class="new-main-container py-5 md:py-10 relative">
        <div class="w-full mx-auto relative overflow-hidden rounded-2xl shadow-sm">
            <img src="{{ asset('assets/img/mentoring/ultimate/32. Background Exploration.png') }}"
                alt="Exploration and Profile Building Background" title="Exploration and Profile Building Background"
                loading="lazy" decoding="async" width="1920" height="1080"
                class="absolute w-full h-full object-cover left-0 top-0 z-0 rounded-2xl">
            <div class="relative z-10 max-w-4xl mx-auto px-5 py-5 md:py-10">
                <h3 class="text-xl md:text-3xl font-normal uppercase text-center text-white mb-3 md:mb-5">
                    {{ __('pages/mentoring/ultimate.epb.title') }}
                </h3>
                <p class="text-white/70 text-base md:text-xl font-light text-center">
                    {{ __('pages/mentoring/ultimate.epb.description') }}
                </p>

                <div class="flex justify-center">
                    <a href="{{ route('epb', ['locale' => app()->getLocale()]) }}"
                        class="uppercase text-center px-10 py-2 rounded-full bg-white text-newprimary mt-10 hover:bg-newprimary hover:text-white transition-all ease-in-out duration-300">
                        {{ __('pages/mentoring/ultimate.epb.cta') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Testimonial Section ==================== --}}
    <section class="bg-gradient-to-b from-white to-[#D8E8FF]  py-5 md:py-10">
        <div class="new-main-container relative z-10">
            <div class="text-center mb-6 md:mb-10">
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

    {{-- ==================== Head of Faculty Section ==================== --}}
    <section class="new-main-container py-5 md:py-10">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
            <div class="w-full md:w-[35%]">
                <div class="w-full h-[300px] md:h-[400px] overflow-hidden rounded-2xl md:rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/img/mentoring/ultimate/8. Foto Kak anne.png') }}"
                        alt="{{ __('pages/mentoring/ultimate.head_of_faculty.name') }}"
                        title="{{ __('pages/mentoring/ultimate.head_of_faculty.name') }}" loading="lazy"
                        decoding="async" width="400" height="500"
                        class="w-full h-full rounded-2xl shadow-sm object-cover md:object-top object-center">
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
    <section class="relative z-10 my-10 md:my-10">
        <div class="new-main-container px-4 md:px-5 lg:px-20 text-center">
            <h3 class="text-xl md:text-4xl font-normal leading-5 mb-6 md:mb-5" itemprop="headline">
                {{ __('pages/mentoring/ultimate.faq.title') }}
            </h3>

            <div class="flex flex-col md:flex-row items-start w-full gap-6 md:gap-10">
                <div class="w-full md:w-[65%]">
                    <div class="accordion-group">
                        @foreach (__('pages/mentoring/ultimate.faq.items') as $faqItem)
                            <div class="border-b rounded-lg overflow-hidden mb-3 md:mb-0">
                                <button
                                    class="accordion-btn w-full flex justify-between items-center px-4 md:px-5 py-3 md:py-4 text-left font-normal gap-3 md:gap-5">
                                    <span class="text-sm md:text-base">{{ $faqItem['question'] }}</span>

                                    <span class="text-xl md:text-2xl transition-all duration-200">+</span>
                                </button>

                                <div
                                    class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="px-4 md:px-5 pb-4 md:pb-5 text-gray-600 text-start">
                                        {{ $faqItem['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full md:w-[35%] text-center md:text-left">
                    <p class="text-base md:text-xl mb-3 font-normal">
                        {{ __('pages/mentoring/ultimate.faq.contact_title') }}
                    </p>
                    <p class="text-sm md:text-base mb-5 text-black/60">
                        {{ __('pages/mentoring/ultimate.faq.contact_description') }}
                    </p>
                    <a href="https://bit.ly/eduall-contactus"
                        class="bg-black px-8 md:px-10 py-2 text-white rounded-full inline-block text-sm md:text-base">
                        {{ __('pages/mentoring/ultimate.faq.contact_cta') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- ========================================== SCRIPTS ========================================== --}}
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const admissionCards = document.querySelectorAll(".admission-card");

            admissionCards.forEach(card => {
                card.addEventListener("mouseenter", () => {
                    admissionCards.forEach(c => c.classList.remove("active"));
                    card.classList.add("active");
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
