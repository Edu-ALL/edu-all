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
                    <p class="font-primary font-medium text-xl text-[#576996] text-center md:font-semibold md:text-2xl">
                        Experience the world while making a difference! <br>
                        Gain hands-on experience, develop valuable skillsets, and make a positive impact, locally and even
                        globally!
                    </p>
                    <a href="#form"
                        class="mt-8 w-full max-w-xs px-4 py-2 rounded-md bg-primary font-primary font-medium text-base text-white text-center">
                        Apply Now
                    </a>
                </div>

                {{-- Community Empowerment Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Community Empowerment Program logo.webp') }}"
                        alt="Allineduspace Community Empowerment Program Logo"
                        class="w-full max-w-xl mx-auto object-contain">
                    <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">Salatiga | 20 -
                        27
                        June 2023
                    </h3>
                    <p class="mt-2 font-primary text-base text-primary text-center">
                        Begin your journey with a live-in experience where you can identify actual problems happening in the
                        local Indonesian community and develop real,
                        impactful projects.
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/r9JziM1yv50"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <a href="#"
                        class="mt-4 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        Learn More
                    </a>
                </div>

                {{-- Global Immersion Programs --}}
                <div class="py-10 flex flex-col items-center gap-y-6 max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Logo GIP.webp') }}"
                        alt="Allineduspace Global Immersion Programs Logo" class="w-full max-w-xs mx-auto object-contain">
                    <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                        Singapore | July 2023
                    </h3>
                    <p class="mt-2 font-primary text-base text-primary text-center">
                        Take your knowledge and skills to the next level for the global community! Develop valuable
                        skillsets in your field of interest, and provide a real-life implementation with tangible outcomes.
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
                                    PHYSICAL SCIENCE
                                </h3>
                                <h3
                                    class="font-primary font-black text-2xl text-primary text-center md:text-3xl lg:text-right">
                                    2-7 JULY 2023
                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Robotics
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Renewable Energy
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Environmental Sustainability
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-end">
                                <h3 class="font-primary font-black text-2xl text-yellow text-center md:text-3xl">
                                    LIFE SCIENCE
                                </h3>
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    5-10 JULY 2023
                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Biotechnology
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        DNA Forensics Science
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Genetic Engineering
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Bionformatics
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Business --}}
                        <div class="mt-10 flex flex-col items-center gap-6 lg:items-start lg:mt-0">
                            <img src="{{ asset('assets/img/global_innovators_project/Business logo.webp') }}"
                                alt="Allineduspace Business Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col gap-4 lg:items-start">
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    10-14 JULY 2023
                                </h3>
                                <div class="font-primary text-base text-primary text-center lg:text-left">
                                    Transform your projects into purpose-driven ventures and master the entire business
                                    process.
                                    This program builds on the experiences and skills gained from the Community Empowerment
                                    Program and Science Research Immersion Program, allowing you to take your impact to the
                                    next
                                    level.
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div
                                        class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Problem Identification
                                    </div>
                                    <div
                                        class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Ideation
                                    </div>
                                    <div
                                        class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Prototyping
                                    </div>
                                    <div
                                        class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Pitching
                                    </div>
                                    <div
                                        class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                        Customer Discovery
                                    </div>
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
                        Learn More
                    </a>
                </div>
            </div>
        </div>

    </section>

    {{-- =============================================== Bottom Section =============================================== --}}
    <section id="form" class="py-16">
        <h2 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
            BOOK YOUR SEAT
        </h2>
    </section>
@endsection
