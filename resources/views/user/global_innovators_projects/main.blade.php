@extends('layout.user.main')

@section('content')
    {{-- =============================================== Banner Section =============================================== --}}
    <section class="w-full h-screen">
        <img src="{{ asset('assets/img/global_innovators_project/Banner summer program.webp') }}"
            alt="Allineduspace Global Innovators Project Banner" class="w-full h-full object-cover">
    </section>

    {{-- =============================================== Main Section =============================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col items-center">
                {{-- Description --}}
                <div class="pb-10 flex flex-col items-center w-full max-w-3xl mx-auto">
                    <div class="font-primary font-medium text-xl text-[#576996] text-center md:font-semibold md:text-2xl">
                        {!! __('pages/programs/global_innovators_projects.description') !!}
                    </div>
                    <a href="#form"
                        class="mt-8 w-full max-w-xs px-4 py-2 rounded-md bg-primary font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.description_button') }}
                    </a>
                </div>

                {{-- Community Empowerment Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Community Empowerment Program logo.webp') }}"
                        alt="Allineduspace Community Empowerment Program Logo"
                        class="w-full max-w-xl mx-auto object-contain">
                    <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                        {{ __('pages/programs/global_innovators_projects.community_empowerment_program_date') }}
                    </h3>
                    <p class="mt-2 font-primary text-base text-primary text-center">
                        {{ __('pages/programs/global_innovators_projects.community_empowerment_program_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/r9JziM1yv50"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <a href="#"
                        class="mt-4 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.community_empowerment_program_btn') }}
                    </a>
                </div>

                {{-- Global Immersion Programs --}}
                <div class="py-10 flex flex-col items-center gap-y-6 max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Logo GIP.webp') }}"
                        alt="Allineduspace Global Immersion Programs Logo" class="w-full max-w-xs mx-auto object-contain">
                    <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                        {{ __('pages/programs/global_innovators_projects.business_date') }}
                    </h3>
                    <p class="mt-2 font-primary text-base text-primary text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_desc') }}
                    </p>
                </div>

                {{-- Science Research & Businness --}}
                <div class="flex flex-col items-center">
                    <div class="pb-10 w-full grid grid-cols-1 lg:grid-cols-2 lg:gap-16">
                        {{-- Science Research --}}
                        <div class="flex flex-col items-center gap-6 lg:items-end">
                            <img src="{{ asset('assets/img/global_innovators_project/Science research logo.webp') }}"
                                alt="Allineduspace Science Research Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col lg:items-end">
                                <h3
                                    class="font-primary font-black text-2xl text-yellow text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_title') }}
                                </h3>
                                <h3
                                    class="font-primary font-black text-2xl text-primary text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_date') }}
                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_physical_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-end">
                                <h3 class="font-primary font-black text-2xl text-yellow text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_title') }}
                                </h3>
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_date') }}

                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_life_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- Business --}}
                        <div class="mt-10 flex flex-col items-center gap-6 lg:items-start lg:mt-0">
                            <img src="{{ asset('assets/img/global_innovators_project/Business logo.webp') }}"
                                alt="Allineduspace Business Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col gap-4 lg:items-start">
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.business_date') }}
                                </h3>
                                <div class="font-primary text-base text-primary text-center lg:text-left">
                                    {{ __('pages/programs/global_innovators_projects.business_desc') }}

                                </div>
                                <div class="flex flex-col gap-2">

                                    @foreach (__('pages/programs/global_innovators_projects.business_point') as $item)
                                        <div
                                            class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-2">
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
                        class="mt-8 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_btn') }}
                    </a>
                </div>
            </div>
        </div>

    </section>

    {{-- =============================================== Bottom Section =============================================== --}}
    <section id="form" class="py-16">
        <h2 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
            {{ __('pages/programs/global_innovators_projects.form_title') }}
        </h2>
    </section>
@endsection
