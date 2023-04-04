@extends('layout.user.main')
@section('head')
    <title>Mentoring Program; Explore your true potential in business or research</title>
    <meta name="title" content="Mentoring Program; Explore your true potential in business or research" />
    <meta name="description"
        content="Explore your true potential in business or research, uncover your true self, we can help you through our Passion Mentoring Program" />
@endsection
@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container md:flex md:flex-col">
                <div class="md:flex md:items-center">
                    <div class="flex flex-col items-start md:w-2/3 lg:w-1/2 lg:mr-10 lg:pt-20">
                        <h1
                            class="mb-5 pt-10 font-primary font-bold text-lg text-white text-center uppercase md:text-2xl  md:text-left">
                            {{ __('pages/programs/passion_project_mentoring.title') }}
                        </h1>
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/logo-passion-project-mentoring-program-768x292.webp') }}"
                            alt="passion project title" class="w-72 object-contain md:w-96">
                        <p class="my-5 font-primary font-normal text-lg text-white md:text-xl md:leading-6">
                            {{ __('pages/programs/passion_project_mentoring.body') }}</p>
                        <a href="{{ route('sign_me_passion_project', app()->getLocale()) }}"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-yellow rounded-lg">{{ __('pages/programs/passion_project_mentoring.banner-btn') }}</a>
                    </div>

                    <div class="flex justify-center max-h-fit pt-10 md:w-2/3 lg:w-1/2 lg:pt-20">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/stream.webp') }}"
                            alt="Allineduspace Passion Project" class="w-4/6 max-w-lg md:w-full">
                    </div>
                </div>
                <div class="mt-10">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/Overview.webp') }}"
                        alt="Allineduspace Passion Project List">
                </div>
            </div>

            <img data-original="{{ asset('assets/img/banner/Passion project banner.png') }}"
                alt="Allineduspace Passion Project Banner"
                class="w-full h-[900px] object-cover object-center sm:h-[1000px] md:h-[750px] lg:h-[850px]">
        </div>
    </section>

    {{-- ================================== Entrepreneurship Section  ================================== --}}
    <section id="entrepreneurship" class="pb-16">
        <div class="flex flex-col gap-y-16">
            <div
                class="grid grid-cols-1  items-center py-8 bg-passion-project-bg-entre bg-cover bg-center min-h-[450px] md:grid-cols-2">
                <div class="flex flex-col main-container">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/Entrepreneurship-768x163.webp') }}"
                        alt="entrepreneurship img" class="w-72 md:w-[30rem]">
                    <h2 class="mt-2 font-primary font-black text-4xl md:text-5xl">Mentoring <span
                            class="block sm:inline-block">Program</span></h2>
                    <p class="mt-6 font-primary text-lg text-black">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_body') }}</p>
                </div>
                <div class="self-start flex justify-start items-start mt-4">
                    <div class="flex items-center w-28 h-28 z-10">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/Online.webp') }}">
                    </div>
                    <div class="flex items-center w-28 h-28 -ml-6">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/Grade.webp') }}">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 items-center main-container overflow-hidden md:grid-cols-2 md:gap-x-20">
                <div class="md:bg-passion-project-bg-entre-2 md:bg-cover md:bg-top md:min-h-[500px]">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/Rectangle-6.webp') }}"
                        alt="Allineduspace Passion Project Banner" class="md:hidden">
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="mb-5 font-primary text-base text-primary md:text-xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_decs') }}
                    </p>
                    <p class="font-primary font-extrabold text-xl text-yellow md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_desc_bold') }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-primary font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_do_title') }}</h2>
                    <h3 class="font-primary font-black text-2xl text-yellow uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_do') }}</h3>
                </div>
                <div class="flex flex-col gap-y-4">
                    @foreach (__('pages/programs/passion_project_mentoring.entrepreneurship_do_list') as $item)
                        <div class="p-4 rounded-xl bg-yellow">
                            <p class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                {{ $loop->iteration }}.
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-primary font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_learn_title') }}</h2>
                    <h3 class="font-primary font-black text-2xl text-yellow uppercase md:text-4xl">
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
                                            <h4 class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-primary text-base leading-5">
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
                                            <h4 class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc" class="px-4 mb-4 hidden font-primary text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-primary font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_sklil') }}</h2>
                <div class="grid grid-cols-1 mt-4 px-10 md:grid-cols-3">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-1.webp') }}"
                        alt="Allineduspace Passion Project" class="object-cover flex-1">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-2.webp') }}"
                        alt="Allineduspace Passion Project" class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-5">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-3.webp') }}"
                        alt="Allineduspace Passion Project" class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-10">
                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-primary font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview') }}</h2>
                <div class="grid grid-cols-1 mt-8 md:grid-cols-2 md:gap-x-10">
                    <div class="md:bg-passion-project-bg-entre-3 md:bg-cover md:bg-top">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/preview-timetable-entrepreneurshiip.webp') }}"
                            alt="Allineduspace Passion Project" class="md:hidden">
                    </div>
                    <div class="mt-4 md:py-8 md:mt-0">
                        <p class="mb-5 font-primary font-medium text-base text-primary tracking-wider md:text-xl">
                            {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview_decs') }}
                        </p>
                        <a href="{{ asset('assets/files/passion-project/timetable-entrepreneurship.pdf') }}"
                            target="_blank"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-red-500 rounded-md">
                            {{ __('pages/programs/passion_project_mentoring.entrepreneurship_curriculum_overview_btn') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center main-container">
                <h2
                    class="font-primary font-black  text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.entrepreneurship_bottom') }}</h2>
                <div>
                    <a href="{{ route('sign_me_passion_project', app()->getLocale()) }}"
                        class="inline-block px-5 py-2 mt-6 font-primary font-medium text-base text-white capitalize bg-yellow rounded-md">
                        {{ __('pages/programs/passion_project_mentoring.entrepreneurship_bottom_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Scientific Section  ================================== --}}
    <section id="scientific" class="pb-16">
        <div class="flex flex-col items-center gap-y-16">
            <div class="grid grid-cols-1 py-8 bg-passion-project-bg-scien-1 bg-cover bg-top min-h-[450px] md:grid-cols-2">
                <div class="flex flex-col main-container">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/Scientific-Research-768x167.webp') }}"
                        alt="entrepreneurship img" class="w-72 md:w-[30rem]">
                    <h2 class="mt-2 font-primary font-black text-4xl md:text-5xl">Mentoring <span
                            class="block sm:inline-block">Program</span></h2>
                    <p class="mt-6 font-primary text-lg text-black">
                        {{ __('pages/programs/passion_project_mentoring.scientific_body') }}</p>
                </div>
                <div class="self-start flex items-start mt-4">
                    <div class="flex items-center w-28 h-28 z-10">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/Online.webp') }}"
                            alt="Allineduspace Passion Project">
                    </div>
                    <div class="flex items-center w-28 h-28 -ml-6">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/Grade.webp') }}"
                            alt="Allineduspace Passion Project">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 items-center main-container overflow-hidden md:grid-cols-2 md:gap-x-20">
                <div class="md:bg-passion-project-bg-scien-2 md:bg-cover md:bg-top md:min-h-[500px]">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/Rectangle-6.webp') }}"
                        alt="Allineduspace Passion Project" class="md:hidden">
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="mb-5 font-primary text-base text-primary md:text-xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_decs') }}
                    </p>
                    <p class="font-primary font-extrabold text-xl text-[#1eb5f6] md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_desc_bold') }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-primary font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_do_title') }}</h2>
                    <h3 class="font-primary font-black text-2xl text-[#1eb5f6] uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_do') }}</h3>
                </div>
                <div class="flex flex-col gap-y-4">
                    @foreach (__('pages/programs/passion_project_mentoring.scientific_do_list') as $item)
                        <div class="p-4 rounded-xl bg-[#1eb5f6]">
                            <p class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                {{ $loop->iteration }}.
                                {{ $item }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 main-container gap-y-4 md:grid-cols-2 md:gap-x-20">
                <div class="flex flex-col">
                    <h2 class="font-primary font-black text-lg text-primary uppercase md:text-2xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_learn_title') }}</h2>
                    <h3 class="font-primary font-black text-2xl text-[#1eb5f6] uppercase md:text-4xl">
                        {{ __('pages/programs/passion_project_mentoring.scientific_learn') }}</h3>
                </div>
                <div class="flex flex-col  col-span-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-20">
                        <div class="flex flex-col">
                            @foreach (__('pages/programs/passion_project_mentoring.scientific_learn_list') as $item)
                                @if ($loop->iteration <= 4)
                                    <div class="group">
                                        <div id="entre-learn-title"
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-[#1eb5f6] cursor-pointer">
                                            <h4 class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc"
                                            class="px-4 mb-4 hidden font-primary text-base leading-5">
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
                                            class="flex justify-between items-center p-4 mb-4 rounded-xl bg-[#1eb5f6] cursor-pointer">
                                            <h4 class="font-primary font-bold text-base text-white leading-5 md:text-xl">
                                                {{ $item['title'] }}
                                            </h4>
                                            <i id="entre-learn-arrow"
                                                class="fa-solid fa-angle-down ml-4 font-black text-white text-lg"></i>
                                        </div>
                                        <p id="entre-learn-desc"
                                            class="px-4 mb-4 hidden font-primary text-base leading-5">
                                            {{ $item['desc'] }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-primary font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_sklil') }}</h2>
                <div class="grid grid-cols-1 mt-4 px-10 md:grid-cols-3">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-4.webp') }}"
                        alt="Allineduspace Passion Project" class="object-cover flex-1">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-5.webp') }}"
                        alt="Allineduspace Passion Project" class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-5">
                    <img data-original="{{ asset('assets/img/passion_project_mentoring/skill-6.webp') }}"
                        alt="Allineduspace Passion Project" class="-mt-14 object-cover flex-1 md:mt-0 md:-ml-10">
                </div>
            </div>

            <div class="flex flex-col main-container">
                <h2 class="font-primary font-black text-3xl text-primary text-center uppercase md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview') }}</h2>
                <div class="grid grid-cols-1 mt-8 md:grid-cols-2 md:gap-x-10">
                    <div class="md:bg-passion-project-bg-scien-3 md:bg-cover md:bg-top">
                        <img data-original="{{ asset('assets/img/passion_project_mentoring/scientific research.png') }}"
                            alt="Allineduspace Passion Project" class="md:hidden">
                    </div>
                    <div class="mt-4 md:py-8 md:mt-0">
                        <p class="mb-5 font-primary font-medium text-base text-primary tracking-wider md:text-xl">
                            {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview_decs') }}
                        </p>
                        <a href="{{ asset('assets/files/passion-project/timetable-research.pdf') }}" target="_blank"
                            class="inline-block px-5 py-2 font-primary font-medium text-base text-white capitalize bg-red-500 rounded-md">
                            {{ __('pages/programs/passion_project_mentoring.scientific_curriculum_overview_btn') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center main-container">
                <h2
                    class="font-primary font-black  text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                    {{ __('pages/programs/passion_project_mentoring.scientific_bottom') }}</h2>
                <div>
                    <a href="{{ route('sign_me_passion_project', app()->getLocale()) }}"
                        class="inline-block px-5 py-2 mt-6 font-primary font-medium text-base text-white capitalize bg-yellow rounded-md">
                        {{ __('pages/programs/passion_project_mentoring.scientific_bottom_btn') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Other Program Section  ================================== --}}
    <section class="pt-10 pb-16">
        <div class="flex flex-col items-center main-container">
            <h2
                class="font-primary font-black  text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                {{ __('pages/programs/passion_project_mentoring.other_programs') }}</h2>
            <div class="grid grid-cols-1 items-center gap-y-4 px-14 mt-6 md:grid-cols-4 md:gap-x-12 md:px-0">
                <img data-original="{{ asset('assets/img/passion_project_mentoring/LOGO-CEP.webp') }}" alt="LogoCEP">
                <img data-original="{{ asset('assets/img/passion_project_mentoring/LOGO-Dr-share.webp') }}"
                    alt="LogoCEP">
                <img data-original="{{ asset('assets/img/passion_project_mentoring/LOGO-Career-bootcamp.webp') }}"
                    alt="LogoCEP">
                <img data-original="{{ asset('assets/img/passion_project_mentoring/Logo-GIP.webp') }}" alt="LogoCEP">
            </div>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="pt-10 pb-16">
        <div class="flex flex-col items-center main-container">
            <h2
                class="font-primary font-black text-2xl text-primary text-center uppercase leading-6 md:text-4xl md:text-left">
                {{ __('pages/programs/passion_project_mentoring.testimony') }}</h2>
            <div class="relative w-full mt-8">
                <div class="splide" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                            <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                            <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($testimonies as $testi)
                                <li class="splide__slide w-full">
                                    <div class="splide__slide__container h-full">
                                        <div
                                            class="flex flex-col justify-between h-full mx-2 px-4 py-8 rounded-2xl bg-primary">
                                            <div class="flex flex-col">
                                                <img data-original="{{ asset('assets/logo/quote.png') }}"
                                                    alt="Allineduspace Testimony" class="w-7 mb-3 h-auto">
                                                <div class="font-primary text-sm text-white text-justify">
                                                    {!! $testi->testi_desc !!}
                                                </div>
                                            </div>
                                            <div class="mt-4 flex flex-col">
                                                <div class="font-primary font-semibold text-base text-yellow">
                                                    {{ $testi->testi_name }}
                                                </div>
                                                <div class="font-primary text-sm text-white">
                                                    {!! $testi->testi_subtitle !!}
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


    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-primary font-black text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/passion_project_mentoring.sign_up_text') }}
                <span
                    class="block text-yellow">{{ __('pages/programs/passion_project_mentoring.sign_up_text_sub') }}</span>
            </h2>
            <a href="{{ route('sign_me_passion_project', app()->getLocale()) }}"
                class="inline-block px-5 py-2 mt-6 font-primary font-bold text-lg text-white capitalize bg-yellow rounded-xl">{{ __('pages/programs/passion_project_mentoring.sign_up_btn') }}</a>
        </div>

    </section>
@endsection

@section('script')
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

        // testimony
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'slide',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                3 : 4,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            autoplay: true,
            lazyload: true,
            interval: 4000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
