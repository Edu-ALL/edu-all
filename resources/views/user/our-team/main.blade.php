@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Our Team', 'url' => route('partnership', [app()->getLocale()])],
        ];
    @endphp
    <title>{{ __('pages/about_us/our_team.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/our_team.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/our_team.meta_description') }}" />
@endsection

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Hero banner with team statistics --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/about/Our Team/1. Background Hero.webp') }}"
                    alt="EduALL Our Team - Meet our experienced mentors and educators" title="EduALL Our Team" loading="lazy"
                    decoding="async" width="1920" height="1080"
                    class="md:h-[100vh] h-[100dvh] w-full object-cover md:object-center object-left">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh]">
                <div class="new-main-container">
                    <p class="uppercase text-white mb-5 max-w-xl text-sm md:text-base text-center md:text-left">
                        {{ __('pages/about_us/our_team.banner_team_label') }}
                    </p>

                    <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-6 md:mb-10 leading-8"
                        itemprop="headline">
                        {{ __('pages/about_us/our_team.banner_title') }}
                    </h1>

                    <p class="text-gray-400 text-lg md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-xl pr-10"
                        itemprop="description">
                        {{ __('pages/about_us/our_team.banner_description') }}
                    </p>

                    <hr class="max-w-xl border-white my-10">

                    <div class="flex flex-nowrap justify-start gap-1 md:gap-5 max-w-xl">
                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                {{ __('pages/about_us/our_team.stat_1_number') }}
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                {{ __('pages/about_us/our_team.stat_1_label') }}
                            </p>
                        </div>

                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                {{ __('pages/about_us/our_team.stat_2_number') }}
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                {{ __('pages/about_us/our_team.stat_2_label') }}
                            </p>
                        </div>

                        <div class="w-1/3 text-start score-item mb-5">
                            <p class="text-lg md:text-[30px] font-bold text-white">
                                {{ __('pages/about_us/our_team.stat_3_number') }}
                            </p>
                            <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                                {{ __('pages/about_us/our_team.stat_3_label') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Leadership Section ==================== --}}
    {{-- Leadership team cards with modals --}}
    <section class="new-main-container py-10 md:py-20 mt-10 md:mt-20">
        <div class="max-w-5xl mx-auto text-center mb-5">
            <h2 class="uppercase text-2xl md:text-5xl mb-5 font-normal text-newprimary">
                {!! __('pages/about_us/our_team.leadership_title') !!}
            </h2>
            <p class="text-md md:text-xl text-dark/50">
                {{ __('pages/about_us/our_team.leadership_description') }}
            </p>

            <div class="flex flex-col md:flex-row gap-5 mt-10">
                @foreach (__('pages/about_us/our_team.leadership') as $leader)
                    <div class="w-full md:w-1/3">
                        <div class="bg-[#EBF8FF] rounded-2xl shadow-md h-full flex flex-col">
                            <div class="flex justify-center">
                                <img src="{{ asset($leader['image_1']) }}"
                                    alt="{{ $leader['name'] }} - {{ $leader['role'] }}" loading="lazy" decoding="async"
                                    width="400" height="500" class="w-full rounded-t-2xl">
                            </div>

                            <div class="p-6 text-start">
                                <p class="uppercase font-semibold text-[11px]">
                                    {{ $leader['role'] }}
                                </p>
                                <h3 class="text-xl text-newprimary font-normal">
                                    {{ $leader['name'] }}
                                </h3>
                                <p class="text-base">
                                    {{ $leader['university'] }}
                                </p>

                                <hr class="my-2">

                                <ul class="text-[13px]">
                                    @foreach ($leader['highlights'] as $highlight)
                                        <li>{{ $highlight }}</li>
                                    @endforeach
                                </ul>

                                <hr class="my-2">

                                <button type="button" data-modal-target="modal-{{ $leader['id'] }}"
                                    data-modal-toggle="modal-{{ $leader['id'] }}" class="text-[13px]">
                                    {{ __('pages/about_us/our_team.see_more') }}
                                    <i class="fa-solid fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>

                        <div id="modal-{{ $leader['id'] }}"
                            class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                            <div
                                class="bg-white rounded-2xl shadow-xl max-w-3xl w-[90%] relative p-6 overflow-auto md:h-auto h-[90%]">
                                <div class="flex flex-col md:flex-row">
                                    <div class="w-full md:w-[30%] relative">
                                        <button type="button" data-modal-hide="modal-{{ $leader['id'] }}"
                                            class="md:hidden absolute top-4 right-4">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                        </button>

                                        <img src="{{ asset($leader['image_2']) }}"
                                            alt="{{ $leader['name'] }} - {{ $leader['role'] }}" loading="lazy"
                                            decoding="async"
                                            class="w-full md:rounded-l-2xl rounded-t-2xl object-cover md:h-auto h-[300px]">
                                    </div>
                                    <div class="w-full md:w-[70%] md:p-6 pt-6 relative">
                                        <div class="flex justify-between items-center">
                                            <div class="text-start">
                                                <p class="text-[11px] uppercase">
                                                    {{ $leader['role'] }}
                                                </p>
                                                <h3 class="text-xl text-newprimary">
                                                    {{ $leader['name'] }}
                                                </h3>
                                            </div>
                                            <button type="button" data-modal-hide="modal-{{ $leader['id'] }}"
                                                class="md:block hidden absolute top-4 right-4">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                            </button>
                                        </div>
                                        <hr class="border-b-2 my-2" />
                                        <div class="text-start">
                                            <p class="text-[13px]">
                                                {{ $leader['modal_university'] }}
                                            </p>
                                        </div>
                                        <div class="text-start md:mt-10 mt-5">
                                            <p class="text-base text-dark/60">
                                                {{ $leader['modal_description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    {{-- ==================== Why Mentors Stand Out Section ==================== --}}
    {{-- Features highlighting mentor quality --}}
    <section class="bg-gradient-to-b from-white to-[#E6F0FF]">
        <div class="new-main-container py-20">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-2xl md:text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    {!! __('pages/about_us/our_team.why_stand_out_title') !!}
                </h2>
                <p class="text-md md:text-xl text-center text-dark/50">
                    {{ __('pages/about_us/our_team.why_stand_out_description') }}
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                    @foreach (__('pages/about_us/our_team.features') as $feature)
                        <div
                            class="bg-gradient-to-br from-newprimary to-newprimary/80 rounded-2xl relative overflow-hidden">
                            <img src="{{ asset($feature['image']) }}" alt="{{ strip_tags($feature['title']) }} - EduALL"
                                loading="lazy" decoding="async" width="400" height="400"
                                class="absolute -bottom-32 -right-32 w-full z-0 opacity-30">

                            <div class="p-5 relative z-10 py-10">
                                <h3 class="text-white text-2xl font-normal mb-3">
                                    {!! $feature['title'] !!}
                                </h3>

                                <p class="text-white/80 text-sm leading-6">
                                    {{ $feature['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- ==================== Mentors Section ==================== --}}
    {{-- Mentor cards with filter functionality --}}
    <section class="bg-gradient-to-b to-white from-[#E6F0FF]">
        <div class="new-main-container py-20">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-2xl md:text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    {{ __('pages/about_us/our_team.mentor_section_title') }}
                </h2>
                <p class="text-md md:text-xl text-center text-dark/50">
                    {{ __('pages/about_us/our_team.mentor_section_description') }}
                </p>

                <p class="text-xl font-normal text-center text-dark/80 mt-5">
                    {{ __('pages/about_us/our_team.mentor_count') }}
                </p>
            </div>

            {{-- Filter Buttons --}}
            <div class="flex flex-wrap justify-center gap-3 mt-10 mb-8">
                <button type="button" data-filter="all"
                    class="filter-btn active px-6 py-2 rounded-full border-2 border-newprimary text-newprimary hover:bg-newprimary hover:text-white transition-all duration-300">
                    {{ __('pages/about_us/our_team.filter_all') }}
                </button>
                <button type="button" data-filter="stem"
                    class="filter-btn px-6 py-2 rounded-full border-2 border-newprimary text-newprimary hover:bg-newprimary hover:text-white transition-all duration-300">
                    {{ __('pages/about_us/our_team.filter_stem') }}
                </button>
                <button type="button" data-filter="business"
                    class="filter-btn px-6 py-2 rounded-full border-2 border-newprimary text-newprimary hover:bg-newprimary hover:text-white transition-all duration-300">
                    {{ __('pages/about_us/our_team.filter_business') }}
                </button>
                <button type="button" data-filter="social"
                    class="filter-btn px-6 py-2 rounded-full border-2 border-newprimary text-newprimary hover:bg-newprimary hover:text-white transition-all duration-300">
                    {{ __('pages/about_us/our_team.filter_social_sciences') }}
                </button>
            </div>

            {{-- Our Mentor  --}}
            <div class="w-full mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10" id="mentor-grid">
                    @foreach (__('pages/about_us/our_team.mentors') as $mentor)
                        <div class="w-full mentor-card" data-category="{{ $mentor['category'] }}">
                            <div
                                class="bg-gradient-to-b from-[#D0E5FF] to-[#EBF4FF] rounded-2xl shadow-md h-full flex flex-col">
                                <div class="flex justify-center">
                                    <img src="{{ asset($mentor['image_1']) }}"
                                        alt="{{ $mentor['name'] }} - {{ $mentor['university'] }}" loading="lazy"
                                        decoding="async" width="400" height="500" class="w-full rounded-t-2xl">
                                </div>

                                <div class="p-4 text-start">
                                    <h3 class="text-lg text-newprimary font-normal">
                                        {{ $mentor['name'] }}
                                    </h3>
                                    <p class="text-[13px] mb-3">
                                        {{ $mentor['university'] }}
                                    </p>

                                    <div
                                        class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                        {{ $mentor['category_label'] }}
                                    </div>

                                    <p class="text-[13px] mt-3">
                                        {{ $mentor['expertise'] }}
                                    </p>

                                    <hr class="my-2">

                                    <button type="button" data-modal-target="modal-{{ $mentor['id'] }}"
                                        data-modal-toggle="modal-{{ $mentor['id'] }}" class="text-[13px]">
                                        {{ __('pages/about_us/our_team.see_more') }}
                                        <i class="fa-solid fa-arrow-right ml-2"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="modal-{{ $mentor['id'] }}"
                                class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
                                <div
                                    class="bg-white rounded-2xl shadow-xl max-w-3xl w-[90%] relative md:h-auto h-[90%] overflow-auto">
                                    <div class="flex flex-col md:flex-row">
                                        <div class="w-full md:w-[30%] relative">
                                            <button type="button" data-modal-hide="modal-{{ $mentor['id'] }}"
                                                    class="md:hidden block absolute top-4 right-4">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                </button>
                                            <img src="{{ asset($mentor['image_2']) }}"
                                                alt="{{ $mentor['name'] }} - {{ $mentor['university'] }}" loading="lazy"
                                                decoding="async"
                                                class="w-full md:rounded-l-2xl rounded-t-2xl md:h-full h-[350px] object-cover object-center">
                                        </div>
                                        <div class="w-full md:w-[70%] p-6">
                                            <div class="flex justify-between items-center">
                                                <div class="text-start">
                                                    <div
                                                        class="bg-[#95A5C8] border-2 border-dark/60 px-2 py-1 rounded-xl inline text-[10px] text-white uppercase">
                                                        {{ $mentor['category_label'] }}
                                                    </div>
                                                    <h3 class="text-lg text-newprimary mt-2">
                                                        {{ $mentor['name'] }}
                                                    </h3>
                                                </div>
                                                <button type="button" data-modal-hide="modal-{{ $mentor['id'] }}"
                                                    class="md:block hidden absolute top-4 right-4">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                </button>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-[13px]">
                                                    {{ $mentor['university'] }}
                                                </p>
                                            </div>
                                            <hr class="border-b-2 my-2" />
                                            <div class="text-start md:mt-10 mt-5">
                                                <p class="text-base text-dark/60">
                                                    {{ $mentor['description'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-20">
                <p class="text-xl text-dark/60 font-light mb-5">
                    {{ __('pages/about_us/our_team.consultation_text') }}
                </p>

                <div class="flex justify-center">
                    <a href="https://bit.ly/eduall-contactus"
                        class="py-2 px-5 uppercase bg-newprimary text-white rounded-2xl text-xl">
                        {{ __('pages/about_us/our_team.consultation_button') }}
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Academy Section ==================== --}}
    {{-- Educators behind EduALL Academy --}}
    <section class="new-main-container py-20">
        <div class="bg-newprimary rounded-2xl p-5 px-10 relative overflow-hidden">
            <img src="{{ asset('assets/img/about/Our Team/7. Background Behind ACADEMY.png') }}" alt="EduALL"
                class="w-full h-full absolute left-0 top-0 z-0">
            <div class="flex flex-col md:flex-row justify-between items-center gap-10 relative z-10">
                <div class="w-full md:w-[50%]">
                    <p class="uppercase text-sm text-white mb-3">
                        {{ __('pages/about_us/our_team.academy_label') }}
                    </p>
                    <h2 class="text-2xl md:text-4xl uppercase font-light mb-5 text-white">
                        {{ __('pages/about_us/our_team.academy_title') }}
                    </h2>
                    <p class="text-white/60">
                        {{ __('pages/about_us/our_team.academy_description') }}
                    </p>
                </div>
                <div class="w-full md:w-[40%]">
                    <img src="{{ asset(__('pages/about_us/our_team.academy_image')) }}"
                        alt="EduALL Academy Teaching Team" loading="lazy" decoding="async" width="600"
                        height="400" class="w-full rounded-xl">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Selection Standard Section ==================== --}}
    {{-- Why parents trust our tutors --}}
    <section class="bg-white ">
        <div class="new-main-container py-10 md:py-20">
            <div class="max-w-5xl mx-auto mb-10">
                <p class="text-base text-center text-dark/50 uppercase font-semibold mb-3">
                    Selection Standard
                </p>
                <h2 class="text-2xl md:text-5xl text-center uppercase font-normal text-newprimary mb-5">
                    {{ __('pages/about_us/our_team.selection_title') }}
                </h2>
            </div>

            <div class="w-full mx-auto">
                <div class="flex md:flex-nowrap flex-wrap md:gap-5 md:justify-start justify-center">
                    @foreach (__('pages/about_us/our_team.selection_items') as $item)
                        <div class="w-1/2 md:w-1/5 md:p-0 p-2">
                            <img src="{{ asset($item['image']) }}" alt="{{ strip_tags($item['title']) }}"
                                loading="lazy" decoding="async" width="120" height="80"
                                class="h-[55px] md:h-[80px] w-auto mb-3 mx-auto md:mx-0">

                            <h3
                                class="text-lg md:text-2xl font-normal mb-5 leading-6 text-newprimary text-center md:text-start">
                                {!! $item['title'] !!}
                            </h3>

                            <p class="text-dark/60 text-center md:text-start">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- ==================== Stats & Featured Educator Section ==================== --}}
    {{-- Statistics cards with featured educator --}}
    <section class="my-10 relative overflow-hidden">
        <img src="{{ asset(__('pages/about_us/our_team.bg_academy')) }}" alt="EduALL Academy Background" loading="lazy"
            decoding="async" width="1920" height="1080" class="absolute top-0 left-0 w-full h-full object-cover z-0">

        <div class="relative z-10 new-main-container py-20">
            <div class="flex flex-col md:flex-row gap-5 items-center md:items-end">
                <div class="w-full md:w-[70%]">
                    <div class="flex flex-col md:flex-row mb-5 gap-5">
                        <div class="w-full md:w-[40%]">
                            <div class="bg-white rounded-2xl shadow-sm py-10 px-5 h-[200px]">
                                <div class="flex h-full items-center">
                                    <p class="text-2xl font-semibold uppercase text-newprimary leading-6">
                                        {{ __('pages/about_us/our_team.stat_1_title') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-[60%]">
                            <div
                                class="bg-gradient-to-r from-[#D2E5FF] to-white rounded-2xl shadow-sm py-10 px-5 h-[200px]">
                                <div class="flex h-full gap-5 items-center">
                                    <div class="w-full">
                                        <p class="text-2xl font-semibold uppercase text-newprimary leading-6 mb-3">
                                            {{ __('pages/about_us/our_team.stat_2_title') }}
                                        </p>
                                        <div class="flex gap-5 flex-wrap">
                                            <img src="{{ asset(__('pages/about_us/our_team.stat_logo_1')) }}"
                                                alt="Partner Logo 1" loading="lazy" decoding="async" width="40"
                                                height="40" class="h-[30px] w-auto ml-2">
                                            <img src="{{ asset(__('pages/about_us/our_team.stat_logo_2')) }}"
                                                alt="Partner Logo 2" loading="lazy" decoding="async" width="40"
                                                height="40" class="h-[30px] w-auto ml-2">
                                            <img src="{{ asset(__('pages/about_us/our_team.stat_logo_3')) }}"
                                                alt="Partner Logo 3" loading="lazy" decoding="async" width="40"
                                                height="40" class="h-[30px] w-auto ml-2">
                                            <img src="{{ asset(__('pages/about_us/our_team.stat_logo_4')) }}"
                                                alt="Partner Logo 3" loading="lazy" decoding="async" width="40"
                                                height="40" class="h-[30px] w-auto ml-2">
                                            <img src="{{ asset(__('pages/about_us/our_team.stat_logo_5')) }}"
                                                alt="Partner Logo 3" loading="lazy" decoding="async" width="40"
                                                height="40" class="h-[30px] w-auto ml-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-5">
                        <div class="w-full md:w-[60%]">
                            <div
                                class="bg-gradient-to-r from-[#D2E5FF] to-white rounded-2xl shadow-sm py-10 px-5 h-[200px]">
                                <div class="flex h-full items-center">
                                    <p class="text-2xl font-semibold uppercase text-newprimary leading-6">
                                        {{ __('pages/about_us/our_team.stat_3_title') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-[40%]">
                            <div class="bg-white rounded-2xl shadow-sm py-10 px-5 h-[200px]">
                                <div class="flex h-full items-center">
                                    <p class="text-2xl font-semibold uppercase text-newprimary leading-6">
                                        {{ __('pages/about_us/our_team.stat_4_title') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[30%] relative overflow-hidden">
                    <img src="{{ asset(__('pages/about_us/our_team.featured_educator_image')) }}"
                        alt="Featured Educator - EduALL" loading="lazy" decoding="async" width="600" height="800"
                        class="w-full rounded-xl z-0 relative overflow-hidden">

                    <div class="absolute left-0 bottom-0 bg-white w-full  h-[40%] z-5 rounded-b-xl">
                        <div class="flex h-full items-center p-5">
                            <div class="w-full">
                                <p class='text-newprimary uppercase mb-1 text-sm font-semibold'>
                                    {{ __('pages/about_us/our_team.featured_educator_label') }}
                                </p>
                                <p class="font-bold text-xl text-newprimary mb-1">
                                    {{ __('pages/about_us/our_team.featured_educator_name') }}
                                </p>
                                <ul class="text-sm text-dark/80 font-semibold">
                                    @foreach (__('pages/about_us/our_team.featured_educator_details') as $detail)
                                        <li>
                                            {{ $detail }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Values Section ==================== --}}
    {{-- Core values of EduALL --}}
    <section class="new-main-container my-5 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-center gap-6 md:gap-10 about-grid">
            <div class="w-full text-center">
                <p class="text-newprimary uppercase text-sm md:text-xl mb-3 md:mb-5" itemprop="description">
                    {{ __('pages/about_us/our_team.values_title') }}
                </p>

                <h2 class="text-newprimary uppercase text-2xl md:text-4xl font-thin mb-3 md:mb-5" itemprop="headline">
                    {{ __('pages/about_us/our_team.values_heading') }}
                </h2>

                <p class="text-gray-500 text-sm md:text-xl mb-3 md:mb-5" itemprop="description">
                    {{ __('pages/about_us/our_team.values_description') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== CTA Section ==================== --}}
    {{-- Call to action with partnership options --}}
    <section class="relative overflow-hidden mt-5">
        <img src="{{ asset('assets/img/about/Our Team/18. Background Foto.png') }}" alt="EduALL"
            class="w-full h-full object-cover absolute top-0 left-0 z-0" />

        <div class="new-main-container py-20 relative z-10">
            <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-md text-center py-20">
                <h3 class="uppercase text-newprimary text-3xl mb-4 font-light">
                    {!! __('pages/about_us/our_team.cta_title') !!}
                </h3>

                <p class="text-md md:text-lg text-dark/60 font-light max-w-2xl mx-auto mb-5 px-5">
                    {{ __('pages/about_us/our_team.cta_description') }}
                </p>

                <div class="flex flex-col md:flex-row gap-5 max-w-5xl mx-auto mt-10">
                    @foreach (__('pages/about_us/our_team.cta_items') as $cta)
                        <div class="w-full md:w-1/3 md:px-0 px-5 mb-3">
                            <a href="{{ route($cta['link'], ['locale' => app()->getLocale()]) }}"
                                class="px-5 py-2 rounded-lg border-2 border-newprimary hover:bg-newprimary hover:text-white transition-all duration-300 block">
                                {{ $cta['title'] }}
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>

                            <p class="text-dark/60 mt-5 text-center">
                                {{ $cta['description'] }}
                            </p>
                        </div>
                    @endforeach
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

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const mentorCards = document.querySelectorAll('.mentor-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-newprimary', 'text-white');
                    btn.classList.add('text-newprimary');
                });

                // Add active class to clicked button
                button.classList.add('active', 'bg-newprimary', 'text-white');
                button.classList.remove('text-newprimary');

                const filterValue = button.getAttribute('data-filter');

                // Filter mentor cards
                mentorCards.forEach(card => {
                    const category = card.getAttribute('data-category');

                    if (filterValue === 'all' || category === filterValue) {
                        card.style.display = 'block';
                        // Add fade-in animation
                        card.style.animation = 'fadeIn 0.5s ease-in';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
@endpush
