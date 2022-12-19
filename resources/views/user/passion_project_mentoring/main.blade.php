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
                    <h2 class="font-title font-extrabold text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_do_title') }}</h2>
                    <h3 class="font-title font-extrabold text-2xl text-yellow uppercase md:text-4xl">
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
                    <h2 class="font-title font-extrabold text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_learn_title') }}</h2>
                    <h3 class="font-title font-extrabold text-2xl text-yellow uppercase md:text-4xl">
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
        </div>
    </section>

    <script>
        const entre_learn = document.querySelectorAll('#entre-learn-title');
        const entre_learn_desc = document.querySelectorAll('#entre-learn-desc');
        const entre_learn_arrow = document.querySelectorAll('#entre-learn-arrow');

        let entre_pos = 0;

        entre_learn.forEach((element, it) => {
            element.addEventListener('click', () => {

                entre_learn_desc[entre_pos].classList.add('hidden')
                entre_learn_arrow[entre_pos].classList.remove('rotate-180')

                entre_learn_desc[it].classList.remove('hidden')
                entre_learn_arrow[it].classList.add('rotate-180')

                entre_pos = it;
            })
        });
    </script>
@endsection
