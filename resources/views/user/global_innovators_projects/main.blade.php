@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/global_innovators_projects.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/global_innovators_projects.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/global_innovators_projects.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => __('pages/navbar.programs.submenu.0.title'), 'url' => '/' . __('pages/navbar.programs.submenu.0.link')],
        ['title' => __('pages/navbar.programs.submenu.1.title'), 'url' => '/' . __('pages/navbar.programs.submenu.1.link')],
        ['title' => __('pages/navbar.programs.submenu.2.title'), 'url' => '/' . __('pages/navbar.programs.submenu.2.link')],
        ['title' => __('pages/navbar.programs.submenu.3.title'), 'url' => '/' . __('pages/navbar.programs.submenu.3.link')],
    ]" active="Global Innovators Project" title="{{  __('pages/programs/programs.title') }}" :string-limit="12" />
@endsection

@section('content')
    {{-- =============================================== Banner Section =============================================== --}}
    <section class="-z-10">
        <div class="relative flex w-full h-screen left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center h-full lg:max-w-xl lg:pt-[50px]">
                    <div class="flex-row">
                        <h1
                            class="font-bold font-newnewprimary text-4xl lg:text-6xl text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            Global Innovators Project
                        </h1>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/GIP.webp') }}" alt="EduALL Program Banner"
                class="lazy w-full h-full object-cover object-center">

        </div>
    </section>

    {{-- =============================================== Main Section =============================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col items-center">
                {{-- Description --}}
                <div class="pb-10 flex flex-col items-center w-full max-w-3xl mx-auto">
                    <div class="font-newprimary font-medium text-xl text-[#576996] text-center md:font-semibold md:text-2xl">
                        {!! __('pages/programs/global_innovators_projects.description') !!}
                    </div>
                    <x-button href="#form"
                        title="{{ __('pages/programs/global_innovators_projects.description_button') }}" bg-color="newprimary" />
                </div>

                {{-- Cultural Immersion Research Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/cirp.webp') }}"
                        alt="EduALL Cultural Immersion Research Program Logo"
                        class="w-full max-w-xl mx-auto object-contain">
                    <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-newprimary font-bold text-2xl text-yellow rounded-lg bg-[#f9cda6] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/summer.webp') }}" alt="Summer Icon"
                                class="h-8">
                            Summer
                        </span>
                        <h3 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
                            {{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_date') }}
                        </h3>
                    </div>
                    <p class="max-w-2xl mt-2 font-newprimary text-base text-newprimary text-center">
                        {{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/N2_p7gUaa_E?si=UUC6QMEVDXPZJq7c" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <x-button href="https://cultural-research.all-inedu.com/"
                        title="{{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_btn') }}" bg-color="red" />
                </div>

                {{-- Innovators In Residence Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/GIP Logo 2024.webp') }}"
                        alt="EduALL Innovators In Residence Program Logo" class="w-full max-w-xl mx-auto object-contain">
                    <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-newprimary font-bold text-2xl text-newprimary rounded-lg bg-[#BAD6FF] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/winter.webp') }}" alt="Winter Icon"
                                class="h-8">
                            Winter
                        </span>
                        <h3 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
                            {{ __('pages/programs/global_innovators_projects.innovators_in_residence_date') }}
                        </h3>
                    </div>
                    <p class="max-w-2xl mt-2 font-newprimary text-base text-newprimary text-center">
                        {{ __('pages/programs/global_innovators_projects.innovators_in_residence_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/1F262wkev0A?si=3skgosSjKBYaP7So" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <x-button href="https://immersion-program.all-inedu.com/"
                        title="{{ __('pages/programs/global_innovators_projects.innovators_in_residence_btn') }}" bg-color="red" />
                </div>

                {{-- Global Immersion Programs --}}
                {{-- <div class="py-10 flex flex-col items-center gap-y-6 max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Logo GIP.webp') }}"
                        alt="EduALL Global Immersion Programs Logo" class="w-full max-w-xs mx-auto object-contain">
                    <div class="flex gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-newprimary font-bold text-2xl text-newprimary rounded-lg bg-[#BAD6FF] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/winter.webp') }}" alt="Winter Icon"
                                class="h-8">
                            Winter
                        </span>
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-newprimary font-bold text-2xl text-newprimary rounded-lg bg-[#FDEFE0] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/summer.webp') }}" alt="Summer Icon"
                                class="w-8 h-8">
                            Summer
                        </span>
                    </div>
                    <h3 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_date') }}
                    </h3>
                    <p class="max-w-2xl mt-2 font-newprimary text-base text-newprimary text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/1F262wkev0A?si=3skgosSjKBYaP7So"  title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div> --}}

                {{-- Science Research & Businness --}}
                {{-- <div class="flex flex-col items-center">
                    <div class="pb-10 w-full grid grid-cols-1 lg:grid-cols-2 lg:gap-16"> --}}
                {{-- Science Research --}}
                {{-- <div class="flex flex-col items-center gap-6 lg:items-end">
                            <img src="{{ asset('assets/img/global_innovators_project/Science research logo.webp') }}"
                                alt="EduALL Science Research Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col lg:items-end">
                                <h3
                                    class="font-newprimary font-black text-2xl text-yellow text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_title') }}
                                </h3>
                                <h3
                                    class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_date') }}
                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_physical_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-newprimary rounded-md font-newprimary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-end">
                                <h3 class="font-newprimary font-black text-2xl text-yellow text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_title') }}
                                </h3>
                                <h3 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_date') }}

                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_life_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-newprimary rounded-md font-newprimary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                {{-- Business --}}
                {{-- <div class="mt-10 flex flex-col items-center gap-6 lg:items-start lg:mt-0">
                            <img src="{{ asset('assets/img/global_innovators_project/Business logo.webp') }}"
                                alt="EduALL Business Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col gap-4 lg:items-start">
                                <h3 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.business_date') }}
                                </h3>
                                <div class="font-newprimary text-base text-newprimary text-center lg:text-left">
                                    {{ __('pages/programs/global_innovators_projects.business_desc') }}

                                </div>
                                <div class="flex flex-col gap-2">

                                    @foreach (__('pages/programs/global_innovators_projects.business_point') as $item)
                                        <div
                                            class="w-full px-4 py-2 bg-newprimary rounded-md font-newprimary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                {{-- </div> --}}
                {{-- <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-2">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/NinMHhLOYTg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/hkkqinNCrsQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <a href="#"
                        class="mt-8 w-full max-w-[160px] px-4 py-2 rounded-md bg-newyellow font-newprimary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_btn') }}
                    </a>
                </div> --}}
            </div>
        </div>

    </section>

    {{-- =============================================== Bottom Section =============================================== --}}
    <section id="form" class="flex flex-col items-center py-16">
        <h2 class="font-newprimary font-black text-2xl text-newprimary text-center md:text-3xl">
            {{ __('pages/programs/global_innovators_projects.form_title') }}
        </h2>
        <div class="mt-2 w-full font-newprimary font-medium text-base text-[#F90C0C] text-center">
            {!! __('pages/programs/global_innovators_projects.form_desc') !!}
        </div>
        <div class="main-container w-full mt-12">
            {{-- Emmbed Form --}}
            @include('layout.user.external-form.registration', ['prog_id' => 'GIPIIRJP', 'extClass' => '', 'scrolling' => 'no', 'height' => 600, 'width' => '100%'])
        </div>
    </section>
@endsection
