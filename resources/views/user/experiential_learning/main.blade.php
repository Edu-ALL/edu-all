@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/experiential_learning.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/experiential_learning.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/experiential_learning.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/exclusive-program-school'],
        ['title' => __('pages/programs/admission_accelerator.title'), 'url' => '/programs/exclusive-program-school/admission-accelerator'],
        ['title' => __('pages/programs/experiential_learning.title'), 'url' => '/programs/exclusive-program-school/experiential-learning'],
        ['title' => __('pages/programs/teacher_focused.title'), 'url' => '/programs/exclusive-program-school/teacher-focused'],
    ]" :active="__('pages/programs/experiential_learning.title')" title="{{  __('pages/programs/exclusive_program_school.title') }}" :string-limit="14" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-experiental-learning-programs-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full justify-center items-center new-main-container py-20 gap-4">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center mb-3">
                {!! __('pages/programs/experiential_learning.title') !!}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/experiential_learning.description') }}
            </p>
        </div>
    </section>

    {{-- ================================== Benefit Section  ================================== --}}
    <section class="py-20">
        <div class="new-main-container flex flex-wrap gap-4 items-start py-5 justify-center max-w-5xl mx-auto mb-10">
            @foreach (__('pages/programs/experiential_learning.summary') as $item)
                <div class="relative bg-black text-white h-20 md:h-24 py-4 px-4 rounded-md inline-block w-full md:flex-1"
                    style=" clip-path: polygon(0 0, 100% 0%, 100% 60%, 90% 100%, 0 100%);">
                    <div class="flex flex-col justify-center h-full w-full md:mt-2">
                        <span
                            class="relative font-newprimary font-semibold text-2xl md:text-3xl z-10 md:leading-5">{{ $item['title'] }}</span>
                        <span
                            class="relative font-newprimary font-normal text-base md:text-xl z-10 leading-3">{{ $item['sub_title'] }}</span>
                    </div>
                    <div class="absolute top-0 right-0 bottom-0 w-1/2 bg-[#414042] rounded-tr-md rounded-br-md"
                        style="clip-path: polygon(80% 0, 100% 0, 100% 100%, 30% 100%);">
                    </div>
                    <div class="absolute top-0 right-0 bottom-0 w-1/2 bg-[#414042]  rounded-tr-md rounded-br-md"
                        style="clip-path: polygon(60% 0, 70% 0, 20% 100%, 10% 100%);">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center px-4">
            <p class="font-newprimary text-center max-w-3xl leading-6 text-lg font-light">
                {{ __('pages/programs/experiential_learning.sub_description') }}
            </p>
        </div>
    </section>

    {{-- ================================== Exploration Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container flex justify-center">
            <div class="flex flex-wrap w-full items-start py-5">
                <div class="md:w-2/5 w-full">
                    <img src="{{ asset('assets/img/experiential_learning/exploration.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
                <div class="md:w-3/5 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-8">
                    <h2 class="font-newprimary font-bold text-2xl md:text-3xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/experiential_learning.exploration_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/experiential_learning.exploration_description') !!}
                    </p>

                    <div class="bg-white p-4 w-full rounded-xl shadow-xl">
                        <ul class="text-base md:text-lg font-semibold">
                            @foreach (__('pages/programs/experiential_learning.exploration_item') as $item)
                                <li class="flex items-start gap-3">
                                    <i class="fa-solid fa-check-circle text-newprimary mt-1"></i>
                                    {{ $item }}

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Research Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container flex justify-center">
            <div class="flex flex-wrap w-full items-start py-5">
                <div class="md:w-3/5 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-12 order-2 md:order-1">
                    <h2 class="font-newprimary font-bold text-2xl md:text-3xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/experiential_learning.research_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/experiential_learning.research_description') !!}
                    </p>

                    <div class="bg-white p-4 w-full rounded-xl shadow-xl">
                        <ul class="text-base md:text-lg font-semibold">
                            @foreach (__('pages/programs/experiential_learning.research_item') as $item)
                                <li class="flex items-start gap-3">
                                    <i class="fa-solid fa-check-circle text-newprimary mt-1"></i>
                                    {{ $item }}

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="md:w-2/5 w-full order-1 md:order-2">
                    <img src="{{ asset('assets/img/experiential_learning/research.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Immersion Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container flex justify-center">
            <div class="flex flex-wrap w-full items-start py-5">
                <div class="md:w-2/5 w-full">
                    <img src="{{ asset('assets/img/experiential_learning/immersion.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
                <div class="md:w-3/5 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-12">
                    <h2 class="font-newprimary font-bold text-2xl md:text-3xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/experiential_learning.immersion_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/experiential_learning.immersion_description') !!}
                    </p>

                    <div class="bg-white p-4 w-full rounded-xl shadow-xl">
                        <ul class="text-base md:text-lg font-semibold">
                            @foreach (__('pages/programs/experiential_learning.immersion_item') as $item)
                                <li class="flex items-start gap-3">
                                    <i class="fa-solid fa-check-circle text-newprimary mt-1"></i>
                                    {{ $item }}

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ================================== COLLABORATE Section ================================== --}}
    {{-- <section class="pt-16 pb-20">
        <div class="new-main-container flex justify-center">
            <h2 class="font-newprimary font-bold text-center text-2xl md:text-4xl mb-4">
                {{ __('pages/programs/exclusive_program_school.collaborate') }}
            </h2>

            <div class="flex flex-wrap gap-8 justify-center items-stretch">
                @foreach (__('pages/programs/exclusive_program_school.collaborate_item') as $item)
                    <x-collaborate-card :title="$item['title']" :image="$item['image']" :description="$item['description']" />
                @endforeach
            </div>
        </div>
    </section> --}}

    {{-- ================================== CTA Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="new-main-container flex items-start justify-center py-5">
            <h2 class="w-full max-w-3xl mb-6 font-newprimary font-black text-white text-center lg:text-4xl text-2xl">
                {{ __('pages/programs/admission_accelerator.cta_button') }}
                <a href="https://wa.me/+6287888827686" target="_blank"
                    class="border-b-2 border-red hover:text-yellow duration-100">{{ __('pages/programs/admission_accelerator.cta_link') }}
                </a>
            </h2>
        </div>
    </section>
@endsection
