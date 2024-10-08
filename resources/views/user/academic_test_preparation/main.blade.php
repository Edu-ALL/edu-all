@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/academic_test_preparation.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_test_preparation.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_test_preparation.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-[90vh] bg-general-acad-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full items-center new-main-container justify-center gap-2">
            <h2 class="font-newprimary font-bold text-4xl md:text-5xl text-white text-center uppercase max-w-3xl">
                {{ __('pages/programs/academic_test_preparation.title') }}
            </h2>
        </div>
    </section>


    <section class="acad-program-our-programs">
        <div class="flex main-container w-full flex-col h-[70vh] pt-24" id="our-programs-wrapper">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center mb-20 uppercase">
                {{ __('pages/programs/academic_test_preparation.our_program_title') }}</h2>
            <div class="relative h-full group">
                <div
                    class="button-left h-24 aspect-video absolute left-[25%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div
                    class="button-right h-24 aspect-video absolute left-[75%] top-[12%] -translate-x-1/2 -translate-y-1/2 z-30 hover:cursor-pointer">
                </div>
                <div class="item item-back">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-3.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-left">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-4.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-right">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-2.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
                <div class="item item-front">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/our-programs/figure-1.png') }}"
                        alt="EduALL figure" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="main-container w-full h-[50vh] z-50 -mt-[5.5rem]">
            <div class="relative h-full w-full">
                <div class="item-text opacity-0 invisible">
                    <h2 class="font-bold text-4xl text-newprimary uppercase mb-4">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.1.title') }}</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.1.description') }}</p>
                    <x-button href="{{ route('sat_program', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.1.button') }}" />
                </div>
                <div class="item-text opacity-0 invisible">
                    <div class="flex items-start justify-evenly gap-4">
                        @foreach (__('pages/programs/academic_test_preparation.our_program_data.2.description') as $program_item)
                            <div class="flex flex-col w-1/4">
                                <div class="font-bold text-xl text-newprimary uppercase text-center">
                                    {!! $program_item['title'] !!} </div>
                                <div class="text-center text-sm text-black">{!! $program_item['description'] !!}</div>
                            </div>
                        @endforeach
                    </div>
                    <x-button href="#academic-tutoring"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.2.button') }}" />
                </div>

                <div class="item-text opacity-0 invisible">
                    <div class="font-bold text-6xl text-center text-newprimary uppercase mb-4 max-w-4xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.3.title') }}!</div>
                    <x-button href="#academic-tutoring"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.3.button') }}" />
                </div>
                <div class="item-text opacity-100 visible">
                    <h2 class="font-bold text-4xl text-newprimary uppercase mb-4">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.0.title') }}</h2>
                    <p class="font-semibold text-center text-lg text-black max-w-2xl">
                        {{ __('pages/programs/academic_test_preparation.our_program_data.0.description') }}</p>
                    <x-button href="{{ route('sat_program', app()->getLocale()) }}"
                        title="{{ __('pages/programs/academic_test_preparation.our_program_data.0.button') }}" />
                </div>
            </div>
        </div>
    </section>


    {{-- ================================== Benefit Section ================================== --}}
    <section class="py-12">
        <div class="new-main-container">
            <div class="flex flex-wrap max-w-4xl mx-auto">
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-1.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-2.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-3.webp') }}"
                        alt="benefit image">
                </div>
                <div class="md:w-1/4 w-1/2 p-2 md:p-4">
                    <img src="{{ asset('assets/img/academic_test_preparation/revamp/benefits/benefit-4.webp') }}"
                        alt="benefit image">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="new-main-container relative">
            <div class="absolute top-0 left-0 right-0 px-8 py-8 h-1/2 max-w-4xl mx-auto w-full bg-newprimary rounded-2xl">
                <div class="flex items-center justify-center gap-4 md:gap-8">
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                    <h3 class="text-white text-2xl md:text-3xl font-bold text-center">
                        {{ __('pages/programs/academic_test_preparation.program_title') }}
                    </h3>
                    <div class="h-2 w-2 bg-newyellow rounded-full"></div>
                </div>
            </div>
            <div class="splide pt-24 max-w-5xl mx-auto" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; left: -48px;">
                        <i class="fa-solid fa-arrow-left text-xl text-white"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next rounded-full bg-newprimary p-2 shadow-md"
                        style="background: #120FFD; right: -48px;">
                        <i class="fa-solid fa-arrow-right text-xl text-white"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach (__('pages/programs/academic_test_preparation.program_list') as $item)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 px-4 h-full w-full">
                                    <div class="flex flex-col w-full md:w-full my-4">
                                        <div
                                            class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-md py-8 px-6 bg-white">
                                            <h3 class="font-bold uppercase text-2xl text-center">
                                                {!! $item['title'] !!}
                                            </h3>
                                            <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                <img data-original="{{ asset('assets/img/academic_test_preparation/revamp/' . $item['image']) }}"alt=""
                                                    class="h-full w-full object-cover">
                                            </div>
                                            <div class="w-full md:h-28 border-b border-b-[#DEDEDE]">
                                                <p class="text-base text-justify leading-5">
                                                    {{ $item['desc'] }}
                                                </p>
                                            </div>
                                            @if (array_key_exists('points', $item) && $item['points'])
                                                <div class="w-full lg:h-32 py-4">
                                                    <ul class="list-outside list-disc pl-4 flex flex-col gap-1">
                                                        @foreach ($item['points'] as $point)
                                                            <li
                                                                class="text-sm font-newprimary font-semibold text-newprimary">
                                                                {{ $point }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="h-32"></div>
                                            @endif
                                            <x-button
                                                href="{{ url(app()->getLocale()) }}/programs/academic-test-preparation/{{ $item['link'] }}"
                                                title="{{ __('pages/programs/academic_test_preparation.learn_more') }}"
                                                bg-color="newprimary" padding-x="8" padding-y="2" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{--

    <section class="py-14" id="academic-tutoring">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.academic_tutoring_title') }}</h2>

            <div class="font-newprimary text-black text-base font-semibold text-center max-w-3xl mx-auto mt-2">
                {!! __('pages/programs/academic_test_preparation.academic_tutoring_description') !!}
            </div>
            <div class="flex flex-col md:flex-row w-full h-[120vh] md:h-[60vh] mt-8">
                <div class="acad-program-acad-tutor-item acad-program-acad-tutor-active relative overflow-hidden">
                    <span>IBDP</span>
                    <div class="desc">
                        <ul class="whitespace-nowrap w-1/2">
                            <li>Mathematics AA</li>
                            <li>Mathematics AI</li>
                            <li>Chemistry</li>
                            <li> Physics</li>
                            <li> Biology</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/2">
                            <li>ESS</li>
                            <li>Economics</li>
                            <li>English A: Lang & Lit</li>
                            <li> Business Management</li>
                            <li> EE/IA Guidance</li>
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
                            <li>Mathematics</li>
                            <li>Chemistry</li>
                            <li>Physics</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li> Biology</li>
                            <li> Computer Science</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Economics</li>
                            <li>English</li>
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
                            <li> Biology</li>
                            <li>Chemistry</li>
                        </ul>
                        <ul class="whitespace-nowrap w-1/3">
                            <li>Economics</li>
                            <li>English</li>
                        </ul>
                    </div>
                    <div class="polygon bg-black"></div>
                    <div class="w-full h-full bg-black">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/acad-tutor/figure-4.png') }}"
                            alt="EduALL figure">
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-full mt-10">
                <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center mb-8">
                    {{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula_title') }}</h2>
                <div class="flex flex-col md:flex-row w-full items-center justify-center gap-8">
                    <div class="w-full md:w-1/3 flex flex-col gap-4 justify-between">
                        <span
                            class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-4 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula.0') }}</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-6 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula.1') }}
                        </span>
                        <span
                            class="hover:scale-110 transition-all duration-500 bg-newprimary py-4 px-4 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula.2') }}</span>
                    </div>
                    <div class="w-full md:w-1/4 hover:scale-95 transition-all duration-500 hover:rotate-2">
                        <img src="{{ asset('assets/img/academic_test_preparation/new-asset/special-formula.png') }}"
                            alt="EduALL Special Formula">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col gap-4 justify-between">
                        <span
                            class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-8 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula.3') }}</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 bg-newprimary py-1 px-6 w-full text-center text-white"
                            style="clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);">{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula.4') }}</span>
                    </div>
                </div>
                <x-button href="{{ route('academic_tutoring', app()->getLocale()) }}"
                    title="{{ __('pages/programs/academic_test_preparation.academic_tutoring_special_formula_button') }}" />
            </div>
        </div>
    </section> --}}

    {{--
    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-center max-w-2xl">
                {{ __('pages/programs/academic_test_preparation.ib_extended_title') }}</h2>
            <p class="font-newprimary font-medium text-center text-lg md:text-2xl mt-1">
                {{ __('pages/programs/academic_test_preparation.ib_extended_description') }}</p>
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
        <div class="mt-8 main-container flex flex-col items-center w-full">
            <div class="mt-8 flex flex-col w-full">
                <h2 class="font-newprimary font-bold text-3xl text-black text-center">
                    {{ __('pages/programs/academic_test_preparation.ib_extended_topic_title') }}</h2>
                <div class="mt-8 md:mt-0 flex flex-wrap items-center">
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-end gap-2 md:order-1 order-1">
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-6 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to start and find the
                            right EE topic</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Construct a bulletproof
                            research questionc</span>
                    </div>
                    <div class="w-3/4 md:w-2/4 md:order-2 order-3 mx-auto hover:scale-95 transition-all duration-500"><img
                            src="{{ asset('assets/img/academic_test_preparation/academic_tutoring/new-asset/s9-figure.webp') }}"
                            alt="EduALL figure" class="w-full h-full object-contain px-8"></div>
                    <div class="w-2/4 md:w-1/4 flex flex-col items-center md:items-start gap-2 md:order-3 order-2">
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">Navigate the citation
                            style jungle</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-44 bg-black text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 80% 100%, 0 100%);">Conquer proscrastination
                            by agile project management</span>
                        <span
                            class="hover:scale-110 transition-all duration-500 w-48 md:w-40 bg-newprimary text-white pt-1 pb-2 px-2 md:pt-4 md:pb-4 md:px-4 rounded-lg text-base md:text-xl"
                            style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 80% 100%, 0 100%);">How to write your first
                            draft</span>
                    </div>
                </div>
            </div>
            <x-button href="{{ route('sat_program', app()->getLocale()) }}"
                title="{{ __('pages/programs/academic_test_preparation.ib_extended_button') }}" />
        </div>
    </section>

    <div class="py-24">
        <div class="main-container flex flex-col items-center">
            <div class="flex items-center justify-between gap-8">
                <div class="w-full md:w-1/2 flex flex-col">
                    <h2 class="font-bold text-[40px] text-black uppercase leading-[2.75rem]">
                        {{ __('pages/programs/academic_test_preparation.standardized_test_preparation_title') }}</h2>
                    <p class="text-base text-justify text-black mt-4 md:mt-8">
                        {{ __('pages/programs/academic_test_preparation.standardized_test_preparation_description') }}</p>
                </div>
                <div class="w-full md:w-1/2 flex justify-end">
                    <img src="{{ asset('assets/img/academic_test_preparation/new-asset/standart-test.png') }}"
                        alt="EduALL assets" class="w-full h-full max-w-sm object-contain">
                </div>
            </div>
            <x-button href="#"
                title="{{ __('pages/programs/academic_test_preparation.standardized_test_preparation_button') }}" />
        </div>
    </div>

    <section class="py-16">
        <div class="flex main-container w-full flex-col items-center">
            <h2
                class="font-newprimary font-bold text-2xl md:text-[40px] text-black text-center leading-[2.75rem] uppercase">
                {{ __('pages/programs/academic_test_preparation.skillset_tutoring_title') }}</h2>
            <div class="flex flex-col md:flex-row justify-evenly w-full gap-6 mt-8">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-1.png') }}"alt="EduALL Asset"
                    class="w-full md:w-1/3 object-contain">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-2.png') }}"alt="EduALL Asset"
                    class="w-full md:w-1/3 object-contain">
                <img src="{{ asset('assets/img/academic_test_preparation/new-asset/skillset/asset-3.png') }}"alt="EduALL Asset"
                    class="w-full md:w-1/3 object-contain">
            </div>
            <p class="text-lg text-center text-black mt-4 md:mt-8 max-w-5xl">
                {{ __('pages/programs/academic_test_preparation.skillset_tutoring_description') }}
            </p>
            <x-button href="#"
                title="{{ __('pages/programs/academic_test_preparation.skillset_tutoring_button') }}" />
        </div>
    </section>
 --}}

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-14">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.testimony_title') }}</h2>
        </div>
        <div class="main-container mb-12 md:my-12">
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
@endsection

@push('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        // OUR PROGRAMS
        // const item_back = document.querySelector('.acad-program-our-programs .item-back');
        // var item_left = document.querySelector('.acad-program-our-programs .item-left');
        // const item_right = document.querySelector('.acad-program-our-programs .item-right');
        // const item_front = document.querySelector('.acad-program-our-programs .item-front');
        const image_items = document.querySelectorAll('.acad-program-our-programs .item');
        const our_programs_button_left = document.querySelector('.acad-program-our-programs .button-left');
        const our_programs_button_right = document.querySelector('.acad-program-our-programs .button-right');
        const our_programs_wrapper = document.getElementById('our-programs-wrapper');
        const image_items_text = document.querySelectorAll('.acad-program-our-programs .item-text');

        const items_position = [
            ['item-back', 'item-left', 'item-right', 'item-front'],
            ['item-right', 'item-back', 'item-front', 'item-left'],
            ['item-front', 'item-right', 'item-left', 'item-back'],
            ['item-left', 'item-front', 'item-back', 'item-right'],
        ];

        var track_item = 0;
        var track_item_text = 3;
        our_programs_button_right.addEventListener("click", () => {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[(track_item + 1) % 4][it]);
            })

            track_item = (track_item + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item_text + 1) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        });
        our_programs_button_left.addEventListener("click", () => {
            our_programs_wrapper.scrollIntoView()
            items_position[track_item].forEach((cls, it) => {
                image_items[it].classList.remove(cls);
                image_items[it].classList.add(items_position[Math.abs((track_item - 1 + 4) % 4)][it]);
            })
            track_item = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-100");
            image_items_text[track_item_text].classList.add("opacity-0");
            image_items_text[track_item_text].classList.remove("visible");
            image_items_text[track_item_text].classList.add("invisible");
            track_item_text = (track_item - 1 + 4) % 4;
            image_items_text[track_item_text].classList.remove("opacity-0");
            image_items_text[track_item_text].classList.add("opacity-100");
            image_items_text[track_item_text].classList.add("visible");
            image_items_text[track_item_text].classList.remove("invisible");
        });

        const acad_tutor_items = document.querySelectorAll('.acad-program-acad-tutor-item');
        let s4ActiveIndex = 0;

        acad_tutor_items.forEach((item, it) => {
            item.addEventListener('click', () => {
                if (it != s4ActiveIndex) {
                    acad_tutor_items[s4ActiveIndex].classList.add('acad-program-acad-tutor-inactive');
                    acad_tutor_items[s4ActiveIndex].classList.remove('acad-program-acad-tutor-active');
                    acad_tutor_items[it].classList.remove('acad-program-acad-tutor-inactive');
                    acad_tutor_items[it].classList.add('acad-program-acad-tutor-active');
                    s4ActiveIndex = it;
                }
            })
        });


        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: 1,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            focus: 'center',
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: isSmallDevice || isMediumDevice ? "0rem" : '18rem',
        }).on('pagination:mounted', function(data) {
            if (isSmallDevice || isMediumDevice) {
                // You can add your class to the UL element
                data.list.classList.add('splide__pagination--custom');
                data.list.classList.add('top-[105%]');

                // `items` contains all dot items
                data.items.forEach(function(item) {
                    item.button.style.margin = '0 6px'
                    item.button.style.backgroundColor = '#0367BF';
                });
            }
        }).mount();

        new Splide(splides[1], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : 3,
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
