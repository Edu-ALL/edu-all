@extends('layout.user.main')
@section('head')
    <title>IB EXTENDED ESSAY COACHING PROGRAM</title>
    <meta name="title" content="IB EXTENDED ESSAY COACHING PROGRAM">
    <meta name="description"
        content="IB EXTENDED ESSAY COACHING PROGRAM: Drill your Extended Essay writing process in 3 months with our holistic approach!" />
@endsection
@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute-center main-container w-full h-full md:flex md:flex-col">
                <div class="flex flex-col items-start pt-10 mb-14 md:pl-28 lg:w-2/3 lg:pt-24">
                    <h1
                        class="font-primary font-black text-3xl text-white uppercase md:text-[4rem] md:text-left md:leading-[60px]">
                        {{ __('pages/programs/ib_ee_coaching_program.title') }}
                    </h1>
                    <p class="mt-6 font-primary font-normal text-xl text-yellow">
                        {{ __('pages/programs/ib_ee_coaching_program.desc') }}</p>
                </div>

                <img data-original="{{ asset('assets/img/academic_test_preparation/ib_ee_coaching_program/EEC-point-1024x231.webp') }}"
                    alt="Allineduspace academic tutoring points"
                    class="hidden w-full mx-auto text-center md:block md:max-w-4xl  md:mb-10">
            </div>

            <img data-original="{{ asset('assets/img/banner/EE Banner.webp') }}"
                alt="Allineduspace header ib ee coaching program"
                class="w-full h-[50vh] object-cover object-center md:h-[80vh] ">
        </div>
    </section>

    {{-- ================================== Bennefit Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col gap-y-6 main-container">
            <img data-original="{{ asset('assets/img/academic_test_preparation/ib_ee_coaching_program/EEC-people-assets-1024x348.webp') }}"
                alt="Allineduspace acad on demand">
        </div>
    </section>

    {{-- ================================== What Will You Do Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 mb-12 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/ib_ee_coaching_program.learn') }}</h2>
            </div>
            <div class="flex items-center main-container gap-x-8">
                <img data-original="{{ asset('assets/img/academic_test_preparation/ib_ee_coaching_program/aset-07.webp') }}"
                    alt="Allineduspace acad tutor what you will do asset" class="hidden w-2/6 object-cover md:block">
                <div class="flex flex-col gap-y-6">
                    @foreach (__('pages/programs/ib_ee_coaching_program.learn_list') as $item)
                        <div
                            class="flex flex-col items-center w-full gap-x-4 rounded-3xl bg-gradient-to-r from-[#041038] to-[#233469] sm:flex-row sm:rounded-full">
                            <img data-original="{{ asset('assets/img/academic_test_preparation/ib_ee_coaching_program/aset-' . $loop->iteration . '.webp') }}"
                                alt="what will you do {{ $loop->iteration }}"
                                class="w-1/2 pt-4 px-4 sm:px-0 sm:pt-0 sm:w-1/5">
                            <div class="flex flex-col w-4/5 mt-2 sm:mt-0">
                                <h4 class="font-primary font-bold text-2xl text-center text-yellow md:text-left">
                                    {{ $item }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== CURRICULUM OVERVIEW Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col md:flex-row md:items-center">
            <div class="flex flex-col md:w-3/5">
                <div class="flex flex-col">
                    <div
                        class="mx-6 mb-6 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-full md:rounded-r-full lg:pl-20 xl:pl-40 ">
                        <h2
                            class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                            {{ __('pages/programs/ib_ee_coaching_program.curr_title') }}</h2>

                    </div>
                    <div class="mx-6 py-4 rounded-xl sm:px-6 md:mx-0 md:w-full lg:pl-20 xl:pl-40">
                        <p class="font-primary font-normal text-xl text-primary md:text-2xl">
                            {{ __('pages/programs/ib_ee_coaching_program.curr_desc') }}</p>
                        <a href="https://all-inedu.com/wp-content/uploads/2022/12/Coaching-Curriculum-Overview.pdf"
                            class="inline-block mt-8 py-2 px-6 font-primary font-medium text-lg text-white rounded-lg bg-sky-700">{{ __('pages/programs/ib_ee_coaching_program.curr_btn') }}</a>
                    </div>
                </div>
            </div>
            <img data-original="{{ asset('assets/img/academic_test_preparation/ib_ee_coaching_program/aset-13.webp') }}"
                alt="Allineduspace Curriculum Overview" class="md:w-2/5 mx-6 mb-6 py-4  lg:pr-20 xl:pr-40">
        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-10">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-primary font-black text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/ib_ee_coaching_program.bottom_title') }}
                <span class="block text-yellow">
                    {{ __('pages/programs/ib_ee_coaching_program.bottom_subtitle') }}</span>
            </h2>
            <a href="{{ route('sign_me_ee_coaching', app()->getLocale()) }}"
                class="px-5 py-2 mt-4 font-primary font-bold text-xl text-white text-center bg-yellow rounded-2xl">{{ __('pages/programs/ib_ee_coaching_program.bottom_btn') }}</a>
        </div>

    </section>
@endsection
