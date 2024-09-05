@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/teacher_focused.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/teacher_focused.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/teacher_focused.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-experiental-learning-programs-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full justify-center items-center new-main-container py-20 gap-4">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center">
                {{ __('pages/programs/teacher_focused.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/teacher_focused.description') }}
            </p>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/teacher_focused.sub_description') }}
            </p>
        </div>
    </section>

    {{-- ================================== Benefit Section  ================================== --}}
    <section class="py-20 md:mt-16">
        <div class="new-main-container flex flex-wrap gap-4 items-center justify-center max-w-3xl mx-auto">
            @foreach (__('pages/programs/teacher_focused.summary') as $item)
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
    </section>

    {{-- ================================== Conference Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container">
            <div class="flex flex-wrap w-full items-center">
                <div class="md:w-1/3 w-full">
                    <img src="{{ asset('assets/img/teacher_focused/conference.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
                <div class="md:w-2/3 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-8">
                    <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/teacher_focused.conference_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/teacher_focused.conference_description') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Training Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container">
            <div class="flex flex-wrap w-full items-center">
                <div class="md:w-2/3 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-12 order-2 md:order-1">
                    <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/teacher_focused.training_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/teacher_focused.training_description') !!}
                    </p>

                    <p class="font-newprimary font-medium text-sm md:text-sm text-black text-justify mt-8 md:mt-12">
                        {!! __('pages/programs/teacher_focused.training_sub_description') !!}
                    </p>
                </div>
                <div class="md:w-1/3 w-full order-1 md:order-2">
                    <img src="{{ asset('assets/img/teacher_focused/training.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Letter Section  ================================== --}}
    <section class=" pt-12 bg-[#F6F6F6] shadow-2xl mb-32">
        <div class="new-main-container">
            <div class="flex flex-wrap w-full items-center">
                <div class="md:w-1/3 w-full">
                    <img src="{{ asset('assets/img/teacher_focused/letter.webp') }}" alt=""
                        class="object-contain object-bottom md:px-4 mx-auto w-1/2 md:w-full">
                </div>
                <div class="md:w-2/3 w-full px-8 flex flex-col gap-8 md:my-0 my-8 pb-12">
                    <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-newprimary md:text-left text-center">
                        {!! __('pages/programs/teacher_focused.letter_title') !!}
                    </h2>

                    <p class="font-newprimary font-medium text-base md:text-lg text-black text-justify">
                        {!! __('pages/programs/teacher_focused.letter_description') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ================================== COLLABORATE Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <h2 class="font-newprimary font-bold text-center text-2xl md:text-4xl mb-4">
                {{ __('pages/programs/exclusive_program_school.collaborate') }}
            </h2>

            <div class="flex flex-wrap gap-8 justify-center items-stretch">
                @foreach (__('pages/programs/exclusive_program_school.collaborate_item') as $item)
                    <x-collaborate-card :title="$item['title']" :image="$item['image']" :description="$item['description']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== CTA Section  ================================== --}}
    <section class="py-8 bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-newprimary font-black text-white text-center lg:text-4xl text-2xl">
                {{ __('pages/programs/admission_accelerator.cta_button') }} 
                <a href="https://wa.me/+6287888827686" target="_blank" class="border-b-2 border-red hover:text-yellow duration-100">{{ __('pages/programs/admission_accelerator.cta_link') }} </a>
            </h2>
        </div>
    </section>
@endsection