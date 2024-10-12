@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/skillset_tutoring.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/skillset_tutoring.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/skillset_tutoring.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-[90vh] bg-skillset-tutoring-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full items-center new-main-container py-24 gap-2">
            <h2 class="font-newprimary font-bold text-4xl md:text-7xl text-white text-center uppercase">
                {{ __('pages/programs/skillset_tutoring.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/skillset_tutoring.body') }}
            </p>
        </div>
    </section>
    {{-- <section class="py-16 bg-skillset-tutoring-header bg-cover bg-left md:bg-center" id="banner">
        <div class="flex flex-col justify-between items-center md:items-start main-container py-24 gap-8">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center uppercase">
                {{ __('pages/programs/skillset_tutoring.title') }}</h2>
            <p class="font-newprimary text-white text-center md:text-justify max-w-md">
                {{ __('pages/programs/skillset_tutoring.body') }}
            </p>
            <x-button type='secondary' href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                title="{{ __('pages/programs/skillset_tutoring.header_button') }}" />
        </div>
    </section> --}}

    {{-- SECTION 1 --}}
    <section class="md:bg-newprimary">
        <div class="w-full flex justify-center">
            <div class="flex flex-col w-[1024px] bg-white py-12 px-12 group-hover:w-[1280px] transition-all duration-500"
                style="clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%);">
                <div class="flex flex-col gap-4  group-hover:scale-105 transition-all duration-700">
                    <h2 class="font-newprimary font-semibold text-2xl text-dark text-center md:text-4xl">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion') }}
                    </h2>
                    <p class="mb-8 font-newprimary text-sm md:text-base text-dark text-center max-w-2xl mx-auto">
                        {{ __('pages/programs/skillset_tutoring.elevate_unique_passion_desc') }}
                    </p>

                </div>
            </div>
        </div>
    </section>


    {{-- WHY US 5 --}}
    <section class="py-12 md:py-24">
        <div class="flex main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.program_title') }}</h2>
            <div class="flex flex-col gap-8 py-12">
                @foreach (__('pages/programs/skillset_tutoring.program_list') as $item)
                    <div class="relative" style="clip-path: polygon(0 0, 100% 0%, 100% 60%, 92% 100%, 0 100%)">
                        <div class="absolute inset-0">
                            <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/program/program-' . $loop->iteration . '.webp') }}"
                                alt="EduALL Skillset Tutoring Program"
                                class="object-center h-full w-full object-cover rounded-md group-hover:scale-105 transition-all duration-700">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center gap-4 p-4 py-12 group-hover:scale-95 transition-all duration-700 relative">
                            <h4 class="font-newprimary font-bold text-white text-3xl uppercase text-center">
                                {{ $item['title'] }}
                            </h4>
                            <p class="font-newprimary text-base text-white max-w-2xl mx-auto leading-6 text-center">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="flex w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/skillset_tutoring.why_us_title') }}</h2>
            <div class="flex flex-col gap-6 py-12">
                @foreach (__('pages/programs/skillset_tutoring.why_us_list') as $item)
                    @if ($loop->iteration % 2 == 1)
                        <div class="flex h-80 md:h-48">
                            <div class="bg-dark h-full w-full -mr-[3%]"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 px-4 justify-center h-full w-full">
                                    <h4
                                        class="font-newprimary font-bold text-white text-start text-xl md:text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p
                                        class="font-newprimary text-xs md:text-sm text-white text-start max-w-md leading-4 pr-6 md:pr-4 2xl-max-w-xl">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="bg-newprimary h-full w-full md:w-full -ml-[3%]"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                        </div>
                    @else
                        <div class="flex relative h-80 md:h-48">
                            <div class="bg-dark h-full w-full -mr-[3%]"
                                style="clip-path: polygon(0 0, 100% 0%, 100% 0%, 85% 100%, 0 100%)">
                                <img src="{{ asset('assets/img/academic_test_preparation/skillset_tutoring/why-us/why-us-' . $loop->iteration . '.webp') }}"
                                    alt="EduALL why us" class="w-full h-full object-center object-cover">
                            </div>
                            <div class="bg-newprimary h-full w-full -ml-[3%]"
                                style="clip-path: polygon(15% 0, 100% 0%, 100% 0%, 100% 100%, 0 100%)">
                                <div class="flex flex-col gap-4 max-w-lg mr-auto justify-center h-full ml-[15%]">
                                    <h4
                                        class="font-newprimary font-bold text-white text-start text-xl md:text-2xl uppercase">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p
                                        class="font-newprimary text-xs md:text-sm text-white text-start max-w-md leading-4 pr-4">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 12 --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner-2 bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-newprimary font-semibold text-2xl text-white text-center md:text-4xl">
                {{ __('pages/programs/skillset_tutoring.free_trial2_title') }}
            </h2>
            <p class="mb-8 font-newprimary text-sm md:text-lg text-white text-center">
                {{ __('pages/programs/skillset_tutoring.free_trial2_description') }}
            </p>
            <a href="{{ route('sign_me_sat_prep', app()->getLocale()) }}"
                class="px-8 md:px-12 py-3 font-bold
                font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-110 transition-all
                duration-150">
                {{ __('pages/programs/skillset_tutoring.free_trial2_button') }}
            </a>
        </div>
    </section>
@endsection
