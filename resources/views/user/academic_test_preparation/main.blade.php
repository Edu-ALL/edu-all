@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'Program', 'url' => '#'],
            ['name' => 'Tutoring Program', 'url' => route('tutoring', [app()->getLocale()])],
        ];
    @endphp
    <title>{{ __('pages/programs/academic_test_preparation.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/academic_test_preparation.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/academic_test_preparation.meta_description') }}" />
    <meta name="keywords"
        content="ib, igsce, math , international curriculum, international baccalaureate, tutoring, private tutoring, subject selection, online tutoring, math tutor" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/tutoring'],
        [
            'title' => __('pages/programs/academic_tutoring.title'),
            'url' => '/programs/tutoring/subject',
        ],
        [
            'title' => __('pages/programs/sat_program.navbar_title'),
            'url' => '/programs/tutoring/sat',
        ],
        [
            'title' => __('pages/programs/skillset_tutoring.title'),
            'url' => '/programs/tutoring/olympiad',
        ],
    ]" :active="'general'" title="{!! __('pages/programs/academic_test_preparation.navbar_title') !!}" />
@endsection

@push('style')
    <style>
        .custom-shape-divider-top-1763519181 {
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1763519181 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 67px;
        }

        .custom-shape-divider-top-1763519181 .shape-fill {
            fill: #000076;
        }
    </style>
@endpush

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-general-acad-header md:bg-contain bg-cover bg-top" id="banner">
        <x-registration-form program-id="ACADX" button-title="CONSULT NOW" />
        <div class="h-screen -mt-16">
            <div class="absolute bottom-0 hidden md:block z-10">
                <img src="{{ asset('assets/img/academic_test_preparation/1.GENERAL/Rocket.png') }}" alt="EduALL"
                    class="w-[250px]">
            </div>
            <div class="flex flex-col h-full items-center justify-center gap-2 main-container">
                <div class="flex flex-col gap-2 w-full">
                    <h1
                        class="font-bold text-banner-title md:text-7xl text-white md:text-left text-center leading-10 md:w-1/2 xl:w-2/3">
                        {!! __('pages/programs/academic_test_preparation.title') !!}
                    </h1>
                    <h3
                        class="font-bold text-banner-subtitle md:text-xl text-white md:text-left text-center leading-10 md:w-1/2 xl:w-2/3">
                        {!! __('pages/programs/academic_test_preparation.body') !!}
                    </h3>
                    <x-registration-form :is-button="true" program-id="ACADX" button-title="CONSULT NOW" />
                </div>
            </div>
        </div>

        <div class="-mt-24">
            <div class="h-auto md:h-24 w-full bg-[#000076] relative">
                <div
                    class="main-container w-full h-full flex flex-col md:flex-row items-center md:items-center md:justify-between py-6 md:py-0">

                    {{-- Left Title --}}
                    <div class="text-center md:text-left md:w-1/6 w-full mb-6 md:mb-0">
                        <p class="font-bold text-white md:text-2xl text-xl leading-tight">
                            Our Students <br> Achievements
                        </p>
                    </div>

                    {{-- Achievements Numbers --}}
                    <div
                        class="flex md:w-4/6 w-full flex-row md:flex-nowrap flex-wrap justify-center items-center md:items-start gap-0 md:gap-4">

                        <div class="flex flex-col items-center md:w-1/4 w-2/4">
                            <p class="font-bold text-[#B2DCFA] text-3xl">XX</p>
                            <span class="text-white text-banner-subdescription text-center">
                                IB Score <br> Improvements
                            </span>
                        </div>

                        <div class="flex flex-col items-center md:w-1/4 w-2/4">
                            <p class="font-bold text-[#B2DCFA] text-3xl">XX</p>
                            <span class="text-white text-banner-subdescription text-center">
                                Grade <br> Improvements
                            </span>
                        </div>

                        <div class="flex flex-col items-center md:w-1/4 w-2/4">
                            <p class="font-bold text-[#B2DCFA] text-3xl">XX</p>
                            <span class="text-white text-banner-subdescription text-center">
                                SAT Score <br> Improvements
                            </span>
                        </div>

                        <div class="flex flex-col items-center md:w-1/4 w-2/4">
                            <p class="font-bold text-[#B2DCFA] text-3xl">80+</p>
                            <span class="text-white text-banner-subdescription text-center">
                                Medal Won
                            </span>
                        </div>

                    </div>

                    {{-- Right Spacer --}}
                    <div class="hidden md:block md:w-1/6"></div>

                </div>
            </div>

            {{-- Wave Shape --}}
            <div class="custom-shape-divider-top-1763519181 absolute md:-bottom-[4rem] w-full md:block hidden">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>


    {{-- ================================== Program Section ================================== --}}
    <section class="py-16 bg-[#EFEEEE] mb-10 md:mt-0 mt-24" id="start-your-journey">
        <div class="new-main-container mt-24">
            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-center">
                    {{ __('pages/programs/academic_test_preparation.program_title') }}
                </h3>

                <div class="splide pt-5 w-full" role="group">
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
                                    <div class="splide__slide__container py-8 h-full w-full">
                                        <div class="flex flex-col w-full md:w-full my-4 px-1.5">
                                            <div
                                                class="-mt-8 pt-8 flex flex-col items-center rounded-2xl shadow-2xl py-8 px-5 bg-white">
                                                <h3 class="font-bold uppercase text-xl text-center">
                                                    {!! $item['title'] !!}
                                                </h3>
                                                <p class="text-[14px] text-center leading-4">
                                                    {!! $item['desc'] !!}
                                                </p>

                                                <div class="rounded-xl h-32 w-full overflow-hidden my-4">
                                                    <img data-src="{{ asset('assets/img/academic_test_preparation/1.GENERAL/' . $item['image']) }}"alt="EduALL"
                                                        class="h-full w-full object-contain lazyload">
                                                </div>
                                                <div class="w-full h-32 flex flex-col justify-center">
                                                    @if (array_key_exists('points', $item) && $item['points'])
                                                        <div class="w-full h-32 py-4">
                                                            <ul class="pl-4 flex flex-col gap-1">
                                                                @foreach ($item['points'] as $point)
                                                                    <li class="text-[14px] font-newprimary">
                                                                        {{ $point }}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @else
                                                        <div class="h-32"></div>
                                                    @endif

                                                    <x-button
                                                        href="{{ url(app()->getLocale()) }}/programs/tutoring/{{ $item['link'] }}"
                                                        title="{{ __('pages/programs/academic_test_preparation.get_to_know_more') }}"
                                                        bg-color="newprimary" padding-x="8" padding-y="1.5" margin-top="0"
                                                        :is-rounded="true" fontSize="base" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-14 bg-[#F9F9F9] pb-14">
        <div class="flex new-main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center mb-5">
                {{ __('pages/programs/academic_test_preparation.testimony_title') }}</h2>
        </div>
        <div class="new-main-container mb-12 md:my-12">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4 mb-8 w-full">
                @foreach ($testimonies as $i => $testi)
                    <div
                        class="rounded-xl px-4 py-5 flex items-center  justify-center shadow-lg 
                        {{ in_array($i, [0, 2, 4]) ? 'bg-newprimary text-white' : 'bg-white text-dark' }}
                         {{ in_array($i, [0, 3, 4]) ? 'md:bg-newprimary md:text-white' : 'md:bg-white md:text-dark' }}
                          ">
                        <div class="">
                            <div class="px-4 py-2 text-justify font-light italic">
                                {!! $testi->testi_desc !!}
                            </div>
                            <div class="flex items-center gap-3 px-4 mt-3">
                                <i class="fa-solid fa-circle-user text-[35px]"></i>
                                <div class="font-semibold">
                                    {{ $testi->testi_name }}
                                    <div class="leading-3">
                                        {!! $testi->testi_subtitle !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Student Achievements Section  ================================== --}}
    <section class="pt-14 bg-[#F9F9F9] pb-14">
        <div class="flex new-main-container w-full flex-col">
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.achievement_title') }}</h2>
        </div>
        <div class="new-main-container mb-12 md:my-12">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-10 mb-8 w-full">
                <!-- Academic Score Table -->
                <div class="">
                    <h2 class="text-center text-2xl font-bold text-[#00008F] py-3">Academic Score</h2>

                    <div class="overflow-x-auto">
                        <table class="min-w-full" border="0">
                            <thead class="bg-black text-white sticky top-0 z-10">
                                <tr>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-l-2xl"
                                        width="5%">No</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                        width="35%">
                                        Name</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                        width="25%">
                                        Score</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-r-2xl"
                                        width="35%">
                                        Subject</th>
                                </tr>
                            </thead>
                        </table>

                        <!-- Scrollable Body -->
                        <div class="max-h-[350px] overflow-y-auto">
                            <table class="min-w-full" border="0">
                                <tbody>
                                    @foreach ($academic as $index => $item)
                                        <tr class="text-center border-b-2 border-gray-200 hover:bg-gray-100">
                                            <td class="px-4 py-3 border-0 text-sm" width="5%">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm font-medium text-start" width="35%">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm" width="25%">
                                                <div class="flex items-center justify-center gap-3">
                                                    <span class="font-medium text-base">
                                                        {{ $item->score_raw }}
                                                    </span>
                                                    <div class="flex gap-1">
                                                        <i
                                                            class="fa-solid fa-chevron-right text-[#F8A139] text-xl m-0 p-0"></i>
                                                        <i
                                                            class="fa-solid fa-chevron-right text-[#F8A139] text-xl -ml-2 p-0"></i>
                                                    </div>
                                                    <span class="text-xl font-bold ms-2">
                                                        {{ $item->score_final }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm" width="35%">
                                                {{ $item->subject }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- SAT Score Table -->
                <div class="">
                    <h2 class="text-center text-2xl font-bold text-[#00008F] py-3">SAT Score</h2>

                    <div class="overflow-x-auto">
                        <table class="min-w-full" border="0">
                            <thead class="bg-black text-white sticky top-0 z-10">
                                <tr>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-l-2xl"
                                        width="5%">No</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                        width="35%">
                                        Name</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                        width="25%">
                                        Score</th>
                                    <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-r-2xl"
                                        width="35%">
                                        + Points</th>
                                </tr>
                            </thead>
                        </table>

                        <!-- Scrollable Body -->
                        <div class="max-h-[350px] overflow-y-auto">
                            <table class="min-w-full" border="0">
                                <tbody>
                                    @foreach ($sat as $index => $item)
                                        <tr class="text-center border-b-2 border-gray-200 hover:bg-gray-100">
                                            <td class="px-4 py-3 border-0 text-sm" width="5%">
                                                {{ $index + 1 }}
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm font-medium text-start" width="35%">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm" width="25%">
                                                <div class="flex items-center justify-center gap-3">
                                                    <span class="font-medium text-base">
                                                        {{ $item->score_raw }}
                                                    </span>
                                                    <div class="flex gap-1">
                                                        <i
                                                            class="fa-solid fa-chevron-right text-[#F8A139] text-xl m-0 p-0"></i>
                                                        <i
                                                            class="fa-solid fa-chevron-right text-[#F8A139] text-xl -ml-2 p-0"></i>
                                                    </div>
                                                    <span class="text-xl font-bold ms-2">
                                                        {{ $item->score_final }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 border-0 text-sm" width="35%">
                                                +{{ $item->point }} points</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Result Table -->
            <div class="">
                <h2 class="text-center text-2xl font-bold text-[#00008F] py-3">Competition Results</h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full" border="0">
                        <thead class="bg-black text-white sticky top-0 z-10">
                            <tr>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-l-2xl"
                                    width="5%">No</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="15%">
                                    Competition</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="25%">
                                    Name</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0"
                                    width="15%">
                                    Medal</th>
                                <th class="px-4 py-3 text-center text-xs font-medium uppercase tracking-wider border-0 rounded-r-2xl"
                                    width="40%">
                                    Grade & School</th>
                            </tr>
                        </thead>
                    </table>

                    <!-- Scrollable Body -->
                    <div class="max-h-[350px] overflow-y-auto">
                        <table class="min-w-full" border="0">
                            <tbody>
                                @foreach ($competition as $index => $item)
                                    <tr class="text-center border-b-2 border-gray-200 hover:bg-gray-100">
                                        <td class="px-4 py-3 border-0 text-sm" width="5%">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm font-medium text-center" width="15%">
                                            <div class="flex w-full justify-center">
                                                <img src="{{ Storage::url('competition' . '/' . $item->image) }}"
                                                    alt="EduALL" class="w-full">
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm font-medium text-center uppercase"
                                            width="25%">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm uppercase" width="15%">
                                            <div class="flex gap-3 items-center w-full justify-center">
                                                @if ($item->medal == 'Gold')
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/gold.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @elseif($item->medal == 'Silver')
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/silver.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @else
                                                    <img src="{{ asset('assets/img/academic_test_preparation/4.COMPETITION/bronze.png') }}"
                                                        alt="EduALL" class="w-[40px]"
                                                        title="{{ $item->medal }} Medal">
                                                @endif

                                                {{ $item->medal }} Medal
                                            </div>



                                        </td>
                                        <td class="px-4 py-3 border-0 text-sm uppercase" width="40%">
                                            Grade {{ $item->grade }} | {{ $item->school }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Student Result Section  ================================== --}}
    <section class="pt-14 bg-white pb-14">
        <div class="flex main-container w-full flex-col">
            <p class="text-newprimary text-2xl font-semibold text-center mb-3">
                {{ __('pages/programs/academic_test_preparation.result_description') }}
            </p>
            <h2 class="font-newprimary font-bold text-2xl md:text-4xl text-black text-center">
                {{ __('pages/programs/academic_test_preparation.result_title') }}</h2>
        </div>
        <div class="main-container mb-12 md:my-12">
            <div class="flex flex-wrap justify-center gap-4 mb-8 w-full">
                @foreach ($univ as $item)
                    <div class="md:w-[calc(100%/6-1rem)] w-[calc(100%/2-1rem)]">
                        <div class="p-2 md:w-[200px] w-full h-[100px] border-2  border-gray-200">
                            <img src="{{ storage::url('university' . '/' . $item->logo) }}" alt="{{ $item->name }}"
                                class="object-contain w-full h-full">
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="text-newprimary text-2xl font-semibold text-center mb-3">
                {{ __('pages/programs/academic_test_preparation.result_more') }}
            </p>
        </div>
    </section>

    {{-- ================================== Our Tutor Section  ================================== --}}
    <section class="pt-14 bg-[#F4F4F4] pb-14">
        <div class="flex new-main-container w-full flex-col">
            <div class="flex flex-wrap justify-start w-full">
                <div class="flex md:w-2/6 w-full">
                    <h2 class="font-newprimary font-bold text-2xl md:text-5xl text-black text-start mb-5">
                        {{ __('pages/programs/academic_test_preparation.tutor_title') }}</h2>
                </div>
                <div class="flex md:w-4/6 w-full">
                    <div class="grid md:grid-cols-3 grid-cols-2 gap-5 w-full">
                        @foreach ($tutor as $item)
                            <div class="font-secondary program_card hover:rotate-program_card">
                                <div
                                    class="mentor-thumbnail w-full max-h-[300px] md:max-h-[340px] overflow-hidden rounded-2xl bg-[#D9D9D9] relative z-10 h-full front">
                                    <img loading="lazy"
                                        src="{{ Storage::url('tutor/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                        alt="EduALL Tutor" class="h-[300px] object-cover">

                                    <div
                                        class="absolute left-0 bottom-0 w-full bg-gradient-to-t from-black/70 via-transparent to-transparent
                                    px-4 py-2">
                                        <div class="flex justify-between items-center">
                                            <div class="">
                                                <h3
                                                    class="text-start font-semibold font-secondary text-white text-2xl leading-7">
                                                    {{ $item->full_name }}
                                                </h3>
                                                <div class="text-white text-[10px]">
                                                    {!! $item->experience !!}
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-chevron-circle-right text-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="previous-mentor-item w-full max-h-[225px] md:max-h-[340px] absolute inset-0 h-full z-0 rounded-2xl overflow-hidden back face_back">
                                    <div
                                        class="w-full h-full bg-newprimary flex flex-col items-center justify-start px-4 pt-6 pb-2">
                                        <div class="flex flex-col items-center">
                                            <h3
                                                class="text-center font-semibold font-secondary text-white text-2xl mt-4 leading-7">
                                                {{ $item->full_name }}
                                            </h3>
                                            <div class="text-center mt-3">
                                                <span class="text-white text-card-small text-center mt-2 italic">
                                                    {!! $item->subject !!}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="bg-white py-14">
        <div class="flex new-main-container w-full flex-col">
            <div class="relative bg-general-acad-cta bg-cover bg-center rounded-lg py-14 w-full  shadow-lg">
                <div class="flex w-full justify-end md:items-center items-end">
                    <div class="flex md:w-2/5 w-full">
                        <x-form title="Program" program-id="ACADX" lead-id="LS001" is-transparent="true"
                            submit-title="BOOK FREE CONSULTATION" submit-color="#FF3131" hide-title />
                    </div>
                    <div class="w-1/5 md:flex hidden"></div>
                </div>

                <div class="absolute left-0 bottom-0 md:block hidden">
                    <img src="{{ asset('assets/img/academic_test_preparation/1.GENERAL/Katyana General.png') }}"
                        alt="EduALL" class="w-full">
                </div>

                <div class="absolute right-0 top-0 w-full">
                    <img src="{{ asset('assets/img/academic_test_preparation/1.GENERAL/Free General.png') }}"
                        alt="EduALL" class="md:w-[30%] w-[50%] absolute md:right-0 md:-top-10 right-0 -top-10">
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

        // SLIDER
        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isMediumDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            focus: 'center',
            gap: 10,
            autoplay: true,
            lazyload: true,
            interval: 4000,
            pagination: false,
            padding: 36,
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
    </script>
@endpush
