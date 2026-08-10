@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => __('Home', [], app()->getLocale()), 'url' => url('/' . app()->getLocale())],
            ['name' => __('pages.home.about_us.title', [], app()->getLocale()), 'url' => '#'],
            [
                'name' => __('pages/partnership.banner.label', [], app()->getLocale()),
                'url' => route('partnership', [app()->getLocale()]),
            ],
        ];
    @endphp


    {{-- SEO Meta Tags --}}
    <title>{{ __('pages/partnership.meta_title', [], app()->getLocale()) }}</title>
    <meta name="title" content="{{ __('pages/partnership.meta_title', [], app()->getLocale()) }}" />
    <meta name="description" content="{{ __('pages/partnership.meta_description', [], app()->getLocale()) }}" />
    <meta name="keywords"
        content="partnership, school partnership, company partnership, community partnership, education collaboration" />
    <meta name="author" content="EduALL" />
@endsection

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Hero section with main heading and partnership introduction --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/about/partnership/Partnership banner.png') }}"
                    alt="EduALL Partnership Program - Building Educational Collaborations"
                    title="EduALL Partnership Program" loading="lazy" decoding="async" width="1920" height="1080"
                    class="w-full md:h-[100vh] h-[100dvh] object-cover md:object-top object-left">
            </div>
            <div class="absolute left-0 w-full top-[27vh] md:top-[25vh]">
                <div class="new-main-container">
                    <div class="flex md:justify-start justify-center">
                        <p class="uppercase text-orange-400 mb-3 md:mb-5 text-sm md:text-base">
                            {{ __('pages/partnership.banner.label', [], app()->getLocale()) }}
                        </p>
                    </div>

                    <h1 class="font-semibold text-[2rem] md:text-[3.5rem] text-white text-center lg:text-left max-w-3xl mx-auto lg:mx-0 md:leading-[3.5rem] mb-4 md:mb-6 leading-8"
                        itemprop="headline">
                        {{ __('pages/partnership.banner.title', [], app()->getLocale()) }}
                    </h1>

                    <p class="text-gray-400 text-base md:text-xl mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                        itemprop="description">
                        {{ __('pages/partnership.banner.subtitle', [], app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Statistics Section ==================== --}}
    {{-- Key metrics and achievements in partnership programs --}}
    <section class="bg-newprimary">
        <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                @foreach (__('pages/partnership.stats', [], app()->getLocale()) as $stat)
                    <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                        <p class="text-lg md:text-[30px] font-bold text-white">
                            {{ $stat['value'] }}
                        </p>
                        <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- ==================== Partnership Types Overview ==================== --}}
    {{-- Three main partnership categories: School, Company, and Community --}}
    <section class="new-main-container py-10 md:py-20 mt-10 md:mt-20">
        <div class="max-w-5xl mx-auto text-center mb-5">
            <h2 class="uppercase text-3xl md:text-5xl mb-5 font-semibold">
                {{ __('pages/partnership.partnership_types.title', [], app()->getLocale()) }}
            </h2>
            <p class="text-base md:text-xl text-dark/50">
                {{ __('pages/partnership.partnership_types.subtitle', [], app()->getLocale()) }}
            </p>

            <div class="flex flex-col md:flex-row gap-5 mt-8 md:mt-10">
                {{-- School Partnership Card --}}
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/partnership/icon-1.png') }}"
                                alt="School Partnership Icon - Education Collaboration" loading="lazy" class="h-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-xl md:text-2xl font-semibold text-newprimary my-5">
                                {{ __('pages/partnership.partnership_types.school.title', [], app()->getLocale()) }}
                            </h3>

                            <p class="text-dark/50 leading-relaxed text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.school.description', [], app()->getLocale()) }}
                            </p>
                        </div>

                        <div class="mt-6 md:mt-8 text-center">
                            <button data-target="school-partnership"
                                class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.school.button', [], app()->getLocale()) }}
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Company Partnership Card --}}
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/partnership/icon-2.png') }}"
                                alt="Company Partnership Icon - Business Collaboration" loading="lazy" class="h-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-xl md:text-2xl font-semibold text-newprimary my-5">
                                {{ __('pages/partnership.partnership_types.company.title', [], app()->getLocale()) }}
                            </h3>

                            <p class="text-dark/50 leading-relaxed text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.company.description', [], app()->getLocale()) }}
                            </p>
                        </div>

                        <div class="mt-6 md:mt-8 text-center">
                            <button data-target="company-partnership"
                                class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.company.button', [], app()->getLocale()) }}
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Community Partnership Card --}}
                <div class="w-full md:w-1/3">
                    <div class="bg-[#EBF8FF] p-6 rounded-2xl shadow-md h-full flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/img/about/partnership/icon-3.png') }}"
                                alt="Community Partnership Icon - Social Impact" loading="lazy" class="h-[100px]">
                        </div>

                        <div class="text-center flex-grow">
                            <h3 class="text-xl md:text-2xl font-semibold text-newprimary my-5">
                                {{ __('pages/partnership.partnership_types.community.title', [], app()->getLocale()) }}
                            </h3>

                            <p class="text-dark/50 leading-relaxed text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.community.description', [], app()->getLocale()) }}
                            </p>
                        </div>

                        <div class="mt-6 md:mt-8 text-center">
                            <button data-target="community-partnership"
                                class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                                {{ __('pages/partnership.partnership_types.community.button', [], app()->getLocale()) }}
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== School Partnership Section ==================== --}}
    {{-- Detailed information about school partnership programs and collaboration --}}
    <section class="bg-[#EDEDED] py-10 md:py-20 partnership-section" id="school-partnership">
        <div class="new-main-container mx-auto pb-10 md:pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold text-sm md:text-base">
                {{ __('pages/partnership.school_partnership.label', [], app()->getLocale()) }}
            </p>

            <img src="{{ asset('assets/img/about/partnership/Partnership school banner.png') }}"
                alt="EduALL School Partnership Program - Educational Collaboration with Schools" loading="lazy"
                class="w-[100%] rounded-2xl">

            <div class="flex flex-col md:flex-row justify-between mt-8 md:mt-10 gap-6 md:gap-0">
                <div class="w-full md:w-[37%]">
                    <h2 class="text-2xl md:text-4xl font-bold text-newprimary uppercase mb-3 md:mb-5">
                        {{ __('pages/partnership.school_partnership.title', [], app()->getLocale()) }}
                    </h2>
                </div>
                <div class="w-full md:w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-base md:text-lg">
                        {{ __('pages/partnership.school_partnership.description', [], app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>

        {{-- School Partnership Features --}}
        <div class="new-main-container">
            <div class="mt-8 md:mt-10">
                <h3 class="uppercase text-blue-500 mb-5 text-sm md:text-base">
                    {{ __('pages/partnership.school_partnership.why_choose_us', [], app()->getLocale()) }}
                </h3>

                <div class="flex flex-wrap gap-4 md:gap-5">
                    @foreach (__('pages/partnership.school_partnership.features', [], app()->getLocale()) as $feature)
                        <div class="w-full md:w-[48%]">
                            <div class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-8 md:py-10 h-full">
                                <p class="text-lg md:text-xl text-white font-semibold mb-3">
                                    {{ $feature['title'] }}
                                </p>
                                <p class="text-white/70 leading-relaxed text-sm md:text-base">
                                    {{ $feature['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- School Collaboration Categories --}}
        <div class="new-main-container mt-10 md:mt-20 py-10">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    {{ __('pages/partnership.school_partnership.collaboration_title', [], app()->getLocale()) }}
                </h2>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-5 mb-20">
                @foreach (__('pages/partnership.school_partnership.collaboration_categories', [], app()->getLocale()) as $category)
                    <div class="w-full md:w-1/3">
                        <div class="bg-gray-100/70 rounded-2xl border-l-2 border-r-2 border-gray-300 pt-5 pb-10 px-5">
                            <p class="text-xl text-dark mb-3 font-semibold text-center">
                                {{ $category['title'] }}
                            </p>
                        </div>
                        <div class="bg-white p-5 rounded-2xl shadow-md -mt-7 h-full">
                            <p class="text-sm md:text-base">
                                {{ $category['description'] }}
                            </p>
                            <hr class="my-3" />
                            <ul class="space-y-2">
                                @foreach ($category['programs'] as $program)
                                    <li class="flex items-start gap-3 cursor-pointer"
                                        data-modal-target="modal-cat{{ $loop->parent->index }}-prog{{ $loop->index }}"
                                        data-modal-toggle="modal-cat{{ $loop->parent->index }}-prog{{ $loop->index }}">
                                        <i class="fa-solid fa-circle-info text-newprimary mt-1"></i>
                                        <span class="text-sm md:text-base">{{ $program['title'] }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            @foreach ($category['programs'] as $program)
                                <div id="modal-cat{{ $loop->parent->index }}-prog{{ $loop->index }}" tabindex="-1"
                                    aria-hidden="true"
                                    class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-gray-700/80">
                                    <div class="relative p-4 w-full max-w-2xl">
                                        <div class="bg-newprimary rounded-xl shadow">
                                            <div class="flex justify-between items-center p-5 border-b">
                                                <h3 class="text-lg text-white font-semibold">
                                                    {{ $program['title'] }}
                                                </h3>
                                                <button type="button"
                                                    data-modal-hide="modal-cat{{ $loop->parent->index }}-prog{{ $loop->index }}">
                                                    <i class="fa-solid fa-xmark text-xl text-white"></i>
                                                </button>
                                            </div>
                                            <div class="bg-white p-5">
                                                <p class="text-dark/60 mb-3">
                                                    {{ $program['description'] }}
                                                </p>
                                                <ul class="list-disc pl-6 space-y-2 text-dark/60">
                                                    @foreach ($program['details'] as $detail)
                                                        <li>{{ $detail }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="new-main-container mb-10">
            <section class="bg-newprimary rounded-2xl">
                <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
                    <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                        @foreach (__('pages/partnership.school_partnership.stats', [], app()->getLocale()) as $stat)
                            <div class="w-1/2 md:w-1/6 text-center score-item mb-5">
                                <p class="text-lg md:text-[30px] font-bold text-[#C7A322]">
                                    {{ $stat['value'] }}
                                </p>
                                <p class="text-[12px] md:text-base text-[#C7A322] mt-2 md:leading-5 leading-4">
                                    {{ $stat['label'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <div class="text-center mt-10">
            <a href="#cta"
                class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                {{ __('pages/partnership.school_partnership.cta', [], app()->getLocale()) }}
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    {{-- ==================== Company Partnership Section ==================== --}}
    {{-- Detailed information about company partnership and business collaboration --}}
    <section class="bg-white py-10 md:py-20 partnership-section hidden" id="company-partnership">
        <div class="new-main-container mx-auto pb-10 md:pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold text-sm md:text-base">
                {{ __('pages/partnership.company_partnership.label', [], app()->getLocale()) }}
            </p>

            <img src="{{ asset('assets/img/about/partnership/Partnership company banner.webp') }}"
                alt="EduALL Company Partnership - Corporate Training and Business Education" loading="lazy"
                class="w-[100%] rounded-2xl">

            <div class="flex flex-col md:flex-row justify-between mt-8 md:mt-10 gap-6 md:gap-0">
                <div class="w-full md:w-[37%]">
                    <h2 class="text-2xl md:text-4xl font-bold text-newprimary uppercase mb-3 md:mb-5">
                        {{ __('pages/partnership.company_partnership.title', [], app()->getLocale()) }}
                    </h2>
                </div>
                <div class="w-full md:w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-base md:text-lg">
                        {{ __('pages/partnership.company_partnership.description', [], app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Company Partnership Involvement Types --}}
        <div class="new-main-container">
            <div class="mt-8 md:mt-10">
                <h3 class="uppercase text-blue-500 mb-5 text-sm md:text-base">
                    {{ __('pages/partnership.company_partnership.ways_to_get_involved', [], app()->getLocale()) }}
                </h3>

                <div class="flex flex-wrap gap-4 md:gap-5">
                    @foreach (__('pages/partnership.company_partnership.involvement_types', [], app()->getLocale()) as $type)
                        <div class="w-full md:w-[48%]">
                            <div
                                class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-8 md:py-10 h-full">
                                <p class="text-lg md:text-xl text-white font-semibold mb-3">
                                    {{ $type['title'] }}
                                </p>
                                <p class="text-white/70 leading-relaxed text-sm md:text-base">
                                    {{ $type['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Company Partnership Benefits --}}
        <div class="new-main-container mx-auto py-10 md:py-20">
            <div class="flex flex-col md:flex-row justify-between mt-8 md:mt-10 gap-8 md:gap-0">
                <div class="w-full md:w-[40%]">
                    <h2 class="text-2xl md:text-4xl font-bold text-newprimary uppercase mb-3 md:mb-5">
                        {{ __('pages/partnership.company_partnership.why_worth_it_title', [], app()->getLocale()) }}
                    </h2>

                    <p class="text-dark/50 leading-relaxed mb-5 text-base md:text-lg">
                        {{ __('pages/partnership.company_partnership.why_worth_it_description', [], app()->getLocale()) }}
                    </p>
                </div>
                <div class="w-full md:w-[40%]">
                    <img src="{{ asset('assets/img/about/partnership/Partnership company foto.png') }}"
                        alt="EduALL Company Partnership Benefits - Corporate Education Success" loading="lazy"
                        class="w-full">
                </div>
            </div>
        </div>

        <div class="new-main-container mb-10">
            <section class="bg-newprimary rounded-2xl px-5 py-8 md:py-10">
                <p class="text-white text-base md:text-lg">
                    {{ __('pages/partnership.company_partnership.initiatives', [], app()->getLocale()) }}
                </p>
            </section>
        </div>

        <div class="text-center mt-10">
            <a href="#cta"
                class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                {{ __('pages/partnership.company_partnership.cta', [], app()->getLocale()) }}
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    {{-- ==================== Community Partnership Section ==================== --}}
    {{-- Community engagement and social impact partnership programs --}}
    <section class="bg-[#EDEDED] py-10 md:py-20 partnership-section hidden" id="community-partnership">
        <div class="new-main-container mx-auto pb-10 md:pb-20">
            <p class="uppercase text-blue-500 mb-3 font-semibold text-sm md:text-base">
                {{ __('pages/partnership.community_partnership.label', [], app()->getLocale()) }}
            </p>

            <img src="{{ asset('assets/img/about/partnership/Partnership community banner.png') }}"
                alt="EduALL Community Partnership - Social Impact and Community Development" loading="lazy"
                class="w-[100%] rounded-2xl">

            <div class="flex flex-col md:flex-row justify-between mt-8 md:mt-10 gap-6 md:gap-0">
                <div class="w-full md:w-[37%]">
                    <h2 class="text-2xl md:text-4xl font-bold text-newprimary uppercase mb-3 md:mb-5">
                        {{ __('pages/partnership.community_partnership.title', [], app()->getLocale()) }}
                    </h2>
                </div>
                <div class="w-full md:w-[53%]">
                    <p class="text-dark/50 leading-relaxed mb-5 text-base md:text-lg">
                        {{ __('pages/partnership.community_partnership.description', [], app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Community Partnership Impact Types --}}
        <div class="new-main-container">
            <div class="mt-8 md:mt-10">
                <h3 class="uppercase text-blue-500 mb-5 text-sm md:text-base">
                    {{ __('pages/partnership.community_partnership.impact_ways', [], app()->getLocale()) }}
                </h3>

                <div class="flex flex-col md:flex-row gap-5">
                    @foreach (__('pages/partnership.community_partnership.impact_types', [], app()->getLocale()) as $type)
                        <div class="w-full md:w-1/3">
                            <div
                                class="bg-gradient-to-br from-newprimary to-black rounded-2xl shadow-md px-5 py-8 md:py-10 h-full">
                                <p class="text-lg md:text-xl text-white font-semibold mb-3">
                                    {{ $type['title'] }}
                                </p>
                                <p class="text-white/70 leading-relaxed text-sm md:text-base">
                                    {{ $type['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Community Impact in Action --}}
        <div class="new-main-container mx-auto py-10 md:py-20">
            <div class="flex flex-col md:flex-row justify-between mt-8 md:mt-10 gap-8 md:gap-0">
                <div class="w-full md:w-[40%]">
                    <h2 class="text-2xl md:text-4xl font-bold text-newprimary uppercase mb-3 md:mb-5">
                        {{ __('pages/partnership.community_partnership.impact_in_action_title', [], app()->getLocale()) }}
                    </h2>

                    <p class="text-dark/50 leading-relaxed mb-5 text-base md:text-lg">
                        {{ __('pages/partnership.community_partnership.impact_in_action_description', [], app()->getLocale()) }}
                    </p>

                    <a href="#cta"
                        class="inline-flex items-center bg-dark text-white px-6 md:px-8 py-2 md:py-3 rounded-2xl hover:bg-newprimary transition text-sm md:text-base">
                        {{ __('pages/partnership.community_partnership.cta', [], app()->getLocale()) }}
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="w-full md:w-[40%]">
                    <img src="{{ asset('assets/img/about/partnership/Partnership community foto.png') }}"
                        alt="EduALL Community Partnership Impact - Real World Social Impact" loading="lazy"
                        class="w-full rounded-2xl shadow-sm mb-5">
                    <div class="flex gap-5">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/about/partnership/Partnership community foto 2.png') }}"
                                alt="EduALL Community Development Program - Education for All" loading="lazy"
                                class="w-full rounded-2xl shadow-sm">
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/about/partnership/Partnership community foto 3.png') }}"
                                alt="EduALL Community Engagement - Building Better Communities" loading="lazy"
                                class="w-full rounded-2xl shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Testimonials Section ==================== --}}
    {{-- Partner testimonials and success stories --}}
    @if ($testimonies)
        <section class="pt-12 md:pt-16 pb-16 md:pb-20">
            <div class="main-container">
                <div class="max-w-5xl mx-auto mb-5">
                    <h2 class="text-3xl md:text-5xl font-semibold uppercase mb-5 text-center">
                        {{ __('pages/partnership.testimonials.title', [], app()->getLocale()) }}
                    </h2>
                    <p class="text-base md:text-xl font-light text-dark/60 text-center">
                        {{ __('pages/partnership.testimonials.subtitle', [], app()->getLocale()) }}
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

    {{-- ==================== Gallery Section ==================== --}}
    {{-- Visual showcase of partnership programs and activities --}}
    <section class="py-10 md:py-20">
        <div class="new-main-container">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-semibold uppercase mb-5">
                    {{ __('pages/partnership.gallery.title', [], app()->getLocale()) }}
                </h2>
                <p class="text-base md:text-xl text-dark/60">
                    {{ __('pages/partnership.gallery.subtitle', [], app()->getLocale()) }}
                </p>
            </div>

            <div class="max-w-5xl mx-auto mt-8 md:mt-10" id="gallery">
                {{-- Filter Buttons --}}
                <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-6 md:mb-8">
                    <button class="filter-btn active bg-dark text-white px-4 md:px-6 py-1 md:py-2 rounded-full transition text-sm md:text-base"
                        data-filter="all">
                        {{ __('pages/partnership.gallery.filters.all', [], app()->getLocale()) }}
                    </button>
                    <button
                        class="filter-btn bg-gray-200 text-dark px-4 md:px-6 py-1 md:py-2 rounded-full hover:bg-dark hover:text-white transition text-sm md:text-base"
                        data-filter="school">
                        {{ __('pages/partnership.gallery.filters.school', [], app()->getLocale()) }}
                    </button>
                    <button
                        class="filter-btn bg-gray-200 text-dark px-4 md:px-6 py-1 md:py-2 rounded-full hover:bg-dark hover:text-white transition text-sm md:text-base"
                        data-filter="company">
                        {{ __('pages/partnership.gallery.filters.company', [], app()->getLocale()) }}
                    </button>
                    <button
                        class="filter-btn bg-gray-200 text-dark px-4 md:px-6 py-1 md:py-2 rounded-full hover:bg-dark hover:text-white transition text-sm md:text-base"
                        data-filter="community">
                        {{ __('pages/partnership.gallery.filters.community', [], app()->getLocale()) }}
                    </button>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4">
                    {{-- School Partnership Images --}}
                    <div data-item="school" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/school/image_1.webp') }}"
                            alt="EduALL School Partnership - Students Learning Together" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="school" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/school/image_2.webp') }}"
                            alt="EduALL School Collaboration - Educational Workshop" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="school" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/school/image_3.webp') }}"
                            alt="EduALL School Program - Interactive Learning Session" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="school" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/school/image_4.webp') }}"
                            alt="EduALL School Partnership - Teacher Training Program" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="school" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/school/image_5.webp') }}"
                            alt="EduALL School Initiative - Student Development Activity" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>

                    {{-- Company Partnership Images --}}
                    <div data-item="company" class="gallery-item col-span-2">
                        <div class="relative w-full h-40 md:h-64 overflow-hidden rounded-xl">
                            <iframe src="https://www.youtube.com/embed/vBaXzjQICWI?si=L3iAJY_fEcFZlVQu"
                                class="absolute inset-0 w-full h-full" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div data-item="company" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_1.webp') }}"
                            alt="EduALL Corporate Partnership - Professional Training Session"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="company" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_3.webp') }}"
                            alt="EduALL Business Collaboration - Corporate Education Program"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="company" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_4.webp') }}"
                            alt="EduALL Company Partnership - Team Building Workshop" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="company" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_2.webp') }}"
                            alt="EduALL Corporate Training - Employee Development" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="company" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/company_partnership_image/company_image_5.webp') }}"
                            alt="EduALL Business Partnership - Professional Development" loading="lazy"
                            class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>

                    {{-- Community Partnership Images --}}
                    <div data-item="community" class="gallery-item col-span-2">
                        <div class="relative w-full h-40 md:h-64 overflow-hidden rounded-xl">
                            <iframe src="https://www.youtube.com/embed/MrAHg47yYEw?si=sBDgBFf5Zw83QSrt"
                                class="absolute inset-0 w-full h-full" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div data-item="community" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_1.webp') }}"
                            alt="EduALL Community Partnership - Social Impact Initiative"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="community" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_3.webp') }}"
                            alt="EduALL Community Development - Education Outreach Program"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="community" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_4.webp') }}"
                            alt="EduALL Community Engagement - Social Responsibility Project"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                    <div data-item="community" class="gallery-item">
                        <img src="{{ asset('assets/img/about/partnership/ngo_partnership_image/ngo_image_2.webp') }}"
                            alt="EduALL Community Support - Educational Assistance Program"
                            loading="lazy" class="w-full h-40 md:h-64 object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Partner Organizations Section ==================== --}}
    {{-- Logo showcase of partner organizations and institutions --}}
    <section class="py-10 md:py-20">
        <div class="new-main-container pt-10 md:pt-20">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-semibold uppercase mb-5">
                    {{ __('pages/partnership.organizations.title', [], app()->getLocale()) }}
                </h2>
                <p class="text-base md:text-xl text-dark/60 font-light">
                    {{ __('pages/partnership.organizations.subtitle', [], app()->getLocale()) }}
                </p>
            </div>
        </div>
        <div class="new-main-container overflow-hidden relative mt-10 pb-16 md:pb-20">
            <div class="relative max-w-5xl mx-auto">
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-r from-white to-transparent z-10 -left-4"></div>
                <div class="absolute h-full md:w-24 w-12 bg-gradient-to-l from-white to-transparent z-10 -right-4"></div>

                <div class="h-full overflow-hidden">
                    <div class="flex endless-scroll">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex-none md:mx-8">
                                <img src="{{ asset('assets/img/about/partnership/logo-partners-new.webp') }}"
                                    alt="EduALL Partner Organizations - Trusted Educational Partners" loading="lazy"
                                    class="md:h-[450px] h-80 w-auto object-contain">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Contact Form Section ==================== --}}
    {{-- Partnership inquiry and contact form for potential partners --}}
    <section class="bg-newprimary py-10 md:py-20" id="cta">
        <div class="new-main-container flex flex-col md:flex-row gap-8 md:gap-10 py-10 md:py-20 items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-white text-3xl md:text-5xl font-semibold mb-5 uppercase">
                    {{ __('pages/partnership.contact_form.title', [], app()->getLocale()) }}
                </h2>
                <p class="text-base md:text-xl text-white/60 font-light">
                    {{ __('pages/partnership.contact_form.subtitle', [], app()->getLocale()) }}
                </p>
            </div>

            <div class="w-full md:w-1/2">
                <div class="bg-[#EAEAEA] py-6 md:py-8 px-6 md:px-10 rounded-xl shadow-2xl w-full">
                    <form action="{{ route('submit_partnership', ['locale' => 'id-en']) }}" method="POST"
                        id="myForm">
                        @csrf
                        <div>
                            <h3 class="mb-2 text-base md:text-lg">
                                {{ __('pages/partnership.contact_form.form_title', [], app()->getLocale()) }}
                            </h3>

                            <p class="text-xs md:text-sm italic text-gray-500 mb-5">
                                {{ __('pages/partnership.contact_form.form_subtitle', [], app()->getLocale()) }}
                            </p>

                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="md:mb-3 w-full md:w-1/2">
                                    <label for="primary_name"
                                        class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.fullname', [], app()->getLocale()) }}</label>
                                    <input type="text" name="fullname"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        placeholder="{{ __('pages/partnership.contact_form.fields.fullname', [], app()->getLocale()) }}"
                                        id="primary_name" required oninput="checkValidation('primary_name')">
                                    <div id="primary_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('fullname')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:mb-3 w-full md:w-1/2">
                                    <label for="company_name" class="text-dark text-xs md:text-sm py-2">
                                        {{ __('pages/partnership.contact_form.fields.company_name', [], app()->getLocale()) }}
                                    </label>
                                    <input type="text" name="company_name"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        placeholder="{{ __('pages/partnership.contact_form.fields.company_name', [], app()->getLocale()) }} *"
                                        id="company_name" required oninput="checkValidation('company_name')">
                                    <div id="company_name_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('company_name')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="mb-3 w-full md:w-1/2">
                                    <label for="position"
                                        class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.position', [], app()->getLocale()) }}</label>
                                    <input type="text" name="position"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        placeholder="{{ __('pages/partnership.contact_form.fields.position', [], app()->getLocale()) }}"
                                        id="position" required oninput="checkValidation('position')">
                                    <div id="position_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('position')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="md:mb-3 md:w-1/2">
                                    <label for="email"
                                        class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.email', [], app()->getLocale()) }}</label>
                                    <input type="email" name="email"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        placeholder="you@gmail.com" id="email" required
                                        oninput="checkValidation('email')">
                                    <div id="email_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('email')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex gap-4 flex-col md:flex-row">
                                <div class="mb-3 md:w-1/2">
                                    <label for="phone_number"
                                        class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.phone_number', [], app()->getLocale()) }}</label>
                                    <input type="text" name="phone_number"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        placeholder="+62 ..." id="phone_number" required
                                        oninput="checkValidation('phone_number')">
                                    <div id="phone_number_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('phone_number')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 md:w-1/2">
                                    <label for="partnership_type"
                                        class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.partnership_type', [], app()->getLocale()) }}</label>
                                    <select name="partnership_type"
                                        class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                        id="partnership_type" required oninput="checkValidation('partnership_type')">
                                        @foreach (__('pages/partnership.contact_form.partnership_types', [], app()->getLocale()) as $value => $label)
                                            <option value="{{ $value }}">{{ $label }}</option>
                                        @endforeach
                                    </select>
                                    <div id="partnership_type_error" class="text-red text-[10px] mt-1 hidden"></div>
                                    @error('partnership_type')
                                        <div class="text-red text-[10px] mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inquiry"
                                    class="text-dark text-xs md:text-sm py-2">{{ __('pages/partnership.contact_form.fields.inquiry', [], app()->getLocale()) }}</label>
                                <textarea class="md:py-2 text-dark rounded-lg border-none shadow-sm py-3 md:py-4 my-1 w-full text-sm md:text-base"
                                    placeholder="{{ __('pages/partnership.contact_form.fields.inquiry', [], app()->getLocale()) }} *" id="inquiry"
                                    name="inquiry" rows="4" required oninput="checkValidation('inquiry')"></textarea>
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
                                <button type="button"
                                    class="w-full bg-black rounded-xl text-white text-center py-2 px-6 md:px-20 text-sm md:text-base">
                                    <span id="loading" class="hidden">
                                        <i class="fas fa-spinner fa-spin mr-4"></i>
                                    </span>
                                    {{ __('pages/partnership.contact_form.submit_button', [], app()->getLocale()) }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>

            <div id="thanksForm" class="hidden">
                <div class="flex flex-col justify-center">
                    <h4 class="mb-4 mt-4 text-newprimary font-bold text-center text-lg leading-6">
                        {{ __('pages/partnership.contact_form.success_message', [], app()->getLocale()) }}
                    </h4>
                    <a href="{{ route('home', app()->getLocale()) }}" class="flex justify-center w-full pt-4">
                        <span
                            class="block px-4 py-2 rounded-lg bg-red font-newprimary font-semibold text-base text-white text-center">
                            {{ __('pages/partnership.contact_form.back_to_home', [], app()->getLocale()) }}
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
        // Modal functionality
        document.querySelectorAll('[data-modal-target]').forEach(item => {
            item.addEventListener('click', () => {
                const modal = document.getElementById(item.dataset.modalTarget);
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            });
        });

        document.querySelectorAll('[data-modal-hide]').forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = document.getElementById(btn.dataset.modalHide);
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        });

        // Partnership section toggle functionality
        function showPartnershipSection(sectionId) {
            // Hide all partnership sections
            document.querySelectorAll('.partnership-section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.remove('hidden');
            }
        }

        // Add click handlers to partnership buttons
        document.querySelectorAll('[data-target]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                showPartnershipSection(targetId);

                // Scroll to the section smoothly
                const section = document.getElementById(targetId);
                if (section) {
                    section.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Show school partnership by default on page load
        document.addEventListener('DOMContentLoaded', function() {
            showPartnershipSection('school-partnership');
        });

        // Gallery filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('#gallery .grid .gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-dark', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-dark');
                });

                // Add active class to clicked button
                this.classList.add('active', 'bg-dark', 'text-white');
                this.classList.remove('bg-gray-200', 'text-dark');

                const filterValue = this.getAttribute('data-filter');

                // Show/hide gallery items based on filter
                galleryItems.forEach(item => {
                    const itemType = item.getAttribute('data-item');

                    if (filterValue === 'all' || itemType === filterValue) {
                        item.style.display = 'block';
                        // Add fade-in animation
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.transition = 'opacity 0.3s ease-in';
                            item.style.opacity = '1';
                        }, 10);
                    } else {
                        item.style.display = 'none';
                    }
                });
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
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
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