@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container md:flex md:flex-col">
                <div class="md:flex md:items-center">
                    <div class="flex flex-col items-start md:w-2/3 lg:w-1/2 lg:mr-10 lg:pt-20">
                        <h1
                            class="mb-5 pt-10 font-title font-bold text-lg text-white text-center uppercase md:text-2xl  md:text-left">
                            {{ __('pages/programs/passion_project_mentoring.title') }}
                        </h1>
                        <img src="{{ asset('assets/img/passion_project_mentoring/logo-passion-project-mentoring-program-768x292.webp') }}"
                            alt="passion project title" class="w-72 object-contain md:w-96">
                        <p class="my-5 font-body font-normal text-lg text-white md:text-xl md:leading-6">
                            {{ __('pages/programs/passion_project_mentoring.body') }}</p>
                        <a href="#"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-yellow rounded-lg">{{ __('pages/programs/passion_project_mentoring.banner-btn') }}</a>
                    </div>

                    <div class="flex justify-center max-h-fit pt-10 md:w-2/3 lg:w-1/2 lg:pt-20">
                        <img src="{{ asset('assets/img/passion_project_mentoring/stream.webp') }}" alt=""
                            class="w-4/6 max-w-lg md:w-full">
                    </div>
                </div>
                <div class="mt-10">
                    <img src="{{ asset('assets/img/passion_project_mentoring/Overview.webp') }}" alt="">
                </div>
            </div>

            <img src="{{ asset('assets/img/passion_project_mentoring/Header-2.webp') }}" alt=""
                class="w-full h-[900px]  object-cover object-center sm:h-[1000px] md:h-[80vh] lg:h-[92vh]">
        </div>
    </section>

    {{-- ================================== Entrepreneurship Section  ================================== --}}
    <section class="pb-16">
        <div class="flex flex-col gap-y-16">
            <div class="grid grid-cols-1 py-8 bg-passion-project-bg-entre bg-cover bg-center md:grid-cols-2">
                <div class="flex flex-col main-container">
                    <img src="{{ asset('assets/img/passion_project_mentoring/Entrepreneurship-768x163.webp') }}"
                        alt="entrepreneurship img" class="w-72 md:w-[30rem]">
                    <h2 class="mt-2 font-title font-black text-4xl md:text-5xl">Mentoring <span
                            class="block sm:inline-block">Program</span></h2>
                    <p class="mt-6 font-body text-lg text-black">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_body') }}</p>
                </div>
                <div class="flex items-start main-container mt-4">
                    <div class="flex items-center w-28 h-28 z-10">
                        <img src="{{ asset('assets/img/passion_project_mentoring/Online.webp') }}" alt="">
                    </div>
                    <div class="flex items-center w-28 h-28 -ml-6">
                        <img src="{{ asset('assets/img/passion_project_mentoring/Grade.webp') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container overflow-hidden md:grid-cols-2 md:gap-x-20">
                <div class="md:bg-passion-project-bg-entre-2 md:bg-cover md:bg-center">
                    <img src="{{ asset('assets/img/passion_project_mentoring/Rectangle-6.webp') }}" alt=""
                        class="md:hidden">
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="mb-5 font-body text-base text-primary md:text-xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_decs') }}
                    </p>
                    <p class="font-body font-extrabold text-xl text-yellow md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_desc_bold') }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-title font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_do_title') }}</h2>
                    <h3 class="font-title font-black text-2xl text-yellow uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_do') }}</h3>
                </div>
                <div class="flex flex-col gap-y-4">
                    @foreach (__('pages/programs/passion_project_mentoring.entrepreneurship_do_list') as $item)
                        <div class="p-4 rounded-xl bg-yellow">
                            <p class="font-title font-bold  text-xl text-white leading-5">{{ $loop->iteration }}.
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-title font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_learn_title') }}</h2>
                    <h3 class="font-title font-black text-2xl text-yellow uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_learn') }}</h3>
                </div>
                <div class="flex flex-col  col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-20">
                        <div class="flex flex-col">
                            @foreach (__('pages/programs/passion_project_mentoring.entrepreneurship_learn_list') as $item)
                                @if ($loop->iteration <= 4)
                                    <div class="group">
                                        <div id="entre-learn-title"
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-yellow cursor-pointer">
                                            <h4 class="font-title font-bold text-xl text-white leading-5">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-title text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-col">
                            @foreach (__('pages/programs/passion_project_mentoring.entrepreneurship_learn_list') as $item)
                                @if ($loop->iteration > 4)
                                    <div class="group">
                                        <div id="entre-learn-title"
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-yellow cursor-pointer">
                                            <h4 class="font-title font-bold text-xl text-white leading-5">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-title text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-title font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_sklil') }}</h2>
                <div class="grid grid-cols-1 mt-4 px-10 md:grid-cols-3">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-1.webp') }}" alt=""
                        class="object-cover flex-1">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-2.webp') }}" alt=""
                        class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-5">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-3.webp') }}" alt=""
                        class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-10">
                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-title font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview') }}</h2>
                <div class="grid grid-cols-1 mt-8 md:grid-cols-2 md:gap-x-10">
                    <div class="md:bg-passion-project-bg-entre-3 md:bg-cover md:bg-top">
                        <img src="{{ asset('assets/img/passion_project_mentoring/preview-timetable-entrepreneurshiip.webp') }}"
                            alt="" class="md:hidden">
                    </div>
                    <div class="mt-4 md:py-8 md:mt-0">
                        <p class="mb-5 font-body font-medium text-base text-primary tracking-wider md:text-xl">
                            {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview_decs') }}
                        </p>
                        <a href="#"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-red-500 rounded-md">
                            {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview_btn') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center main-container">
                <h2
                    class="font-title font-black  text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_bottom') }}</h2>
                <div>
                    <a href="#"
                        class="inline-block px-5 py-2 mt-6 font-primary font-medium text-base text-white capitalize bg-yellow rounded-md">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_bottom_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Scientific Section  ================================== --}}
    <section class="pb-16">
        <div class="flex flex-col gap-y-16">
            <div class="grid grid-cols-1 py-8 bg-passion-project-bg-scien-1 bg-cover bg-center md:grid-cols-2">
                <div class="flex flex-col main-container">
                    <img src="{{ asset('assets/img/passion_project_mentoring/Scientific-Research-768x167.webp') }}"
                        alt="entrepreneurship img" class="w-72 md:w-[30rem]">
                    <h2 class="mt-2 font-title font-black text-4xl md:text-5xl">Mentoring <span
                            class="block sm:inline-block">Program</span></h2>
                    <p class="mt-6 font-body text-lg text-black">
                        {{ __('pages/programs/passion_project_mentoring.scientific_body') }}</p>
                </div>
                <div class="flex items-start main-container mt-4">
                    <div class="flex items-center w-28 h-28 z-10">
                        <img src="{{ asset('assets/img/passion_project_mentoring/Online.webp') }}" alt="">
                    </div>
                    <div class="flex items-center w-28 h-28 -ml-6">
                        <img src="{{ asset('assets/img/passion_project_mentoring/Grade.webp') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container overflow-hidden md:grid-cols-2 md:gap-x-20">
                <div class="md:bg-passion-project-bg-scien-2 md:bg-cover md:bg-center">
                    <img src="{{ asset('assets/img/passion_project_mentoring/Rectangle-6.webp') }}" alt=""
                        class="md:hidden">
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="mb-5 font-body text-base text-primary md:text-xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_decs') }}
                    </p>
                    <p class="font-body font-extrabold text-xl text-blue-light md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_desc_bold') }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-title font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_do_title') }}</h2>
                    <h3 class="font-title font-black text-2xl text-blue-light uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_do') }}</h3>
                </div>
                <div class="flex flex-col gap-y-4">
                    @foreach (__('pages/programs/passion_project_mentoring.scientific_do_list') as $item)
                        <div class="p-4 rounded-xl bg-blue-light">
                            <p class="font-title font-bold  text-xl text-white leading-5">{{ $loop->iteration }}.
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-title font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_learn_title') }}</h2>
                    <h3 class="font-title font-black text-2xl text-blue-light uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_learn') }}</h3>
                </div>
                <div class="flex flex-col  col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-20">
                        <div class="flex flex-col">
                            @foreach (__('pages/programs/passion_project_mentoring.scientific_learn_list') as $item)
                                @if ($loop->iteration <= 4)
                                    <div class="group">
                                        <div id="entre-learn-title"
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-blue-light cursor-pointer">
                                            <h4 class="font-title font-bold text-xl text-white leading-5">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-title text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="flex flex-col">
                            @foreach (__('pages/programs/passion_project_mentoring.scientific_learn_list') as $item)
                                @if ($loop->iteration > 4)
                                    <div class="group">
                                        <div id="entre-learn-title"
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-blue-light cursor-pointer">
                                            <h4 class="font-title font-bold text-xl text-white leading-5">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-title text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-title font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_sklil') }}</h2>
                <div class="grid grid-cols-1 mt-4 px-10 md:grid-cols-3">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-4.webp') }}" alt=""
                        class="object-cover flex-1">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-5.webp') }}" alt=""
                        class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-5">
                    <img src="{{ asset('assets/img/passion_project_mentoring/skill-6.webp') }}" alt=""
                        class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-10">
                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-title font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview') }}</h2>
                <div class="grid grid-cols-1 mt-8 md:grid-cols-2 md:gap-x-10">
                    <div class="md:bg-passion-project-bg-scien-3 md:bg-cover md:bg-top">
                        <img src="{{ asset('assets/img/passion_project_mentoring/timetable-research-crop-300x177.webp') }}"
                            alt="" class="md:hidden">
                    </div>
                    <div class="mt-4 md:py-8 md:mt-0">
                        <p class="mb-5 font-body font-medium text-base text-primary tracking-wider md:text-xl">
                            {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview_decs') }}
                        </p>
                        <a href="#"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-red-500 rounded-md">
                            {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview_btn') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center main-container">
                <h2
                    class="font-title font-black  text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_bottom') }}</h2>
                <div>
                    <a href="#"
                        class="inline-block px-5 py-2 mt-6 font-primary font-medium text-base text-white capitalize bg-yellow rounded-md">
                        {{ __('pages/programs/passion_project_mentoring.scientific_bottom_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        const learn = document.querySelectorAll('#entre-learn-title');
        const learn_desc = document.querySelectorAll('#entre-learn-desc');
        const learn_arrow = document.querySelectorAll('#entre-learn-arrow');

        let entre_pos = 0;

        learn.forEach((element, it) => {
            element.addEventListener('click', () => {

                learn_desc[entre_pos].classList.add('hidden')
                learn_arrow[entre_pos].classList.remove('rotate-180')

                learn_desc[it].classList.remove('hidden')
                learn_arrow[it].classList.add('rotate-180')

                entre_pos = it;
            })
        });
    </script>
@endsection
