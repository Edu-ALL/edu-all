@extends('layout.user.main')

@section('head')
    @if (app()->getLocale() == 'id-en')
        <title>Academic Tutoring Services for IB &amp; A Level - All-in Eduspace</title>
        <meta name="title" content="Academic Tutoring Services for IB &amp; A Level - All-in Eduspace" />
    @else
        <title>Academic Tutoring Services for IB &amp; A Level - All-in Eduspace</title>
        <meta name="title" content="Academic Tutoring Services for IB &amp; A Level - All-in Eduspace" />
    @endif
    <meta name="description" content="Get the best academic tutoring services with All-In Edu. We offer private tutoring, online tutoring, and tutoring programs for students" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute-center main-container w-full h-full md:flex md:flex-col md:justify-between">
                <div class="flex flex-col items-start pt-10 mb-14 md:pl-28 lg:pt-24">
                    <h1 class="font-primary font-black text-4xl text-white uppercase md:text-[42px] md:text-left">
                        {{ __('pages/programs/academic_tutoring.title') }}
                    </h1>
                    <p class="mt-6 font-primary font-normal text-xl text-white md:text-left md:w-1/2">
                        {{ __('pages/programs/academic_tutoring.desc') }}</p>
                    <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                        class="inline-block px-5 py-2 mt-10 font-primary font-bold text-lg text-white bg-yellow rounded-lg">
                        {{ __('pages/programs/academic_tutoring.top_btn') }}
                    </a>
                </div>

                <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-tutor-points.webp') }}"
                    alt="Allineduspace academic tutoring points" class="w-full md:max-w-2xl mx-auto text-center md:mb-10">
            </div>

            <img data-original="{{ asset('assets/img/banner/Academic Tutoring banner.webp') }}"
                alt="Allineduspace Academic Tutoring Banner" class="w-full h-[90vh] object-cover object-center">
        </div>
    </section>

    {{-- ================================== Bennefit Section  ================================== --}}
    <section id="benefit" class="py-10">
        <div class="flex flex-col gap-y-6 main-container">
            <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-tutor-asset.webp') }}"
                alt="Allineduspace acad on demand">
            <div class="grid grid-cols-1 gap-8 md:items-start md:justify-center md:grid-cols-3 ">
                <div class="flex flex-col items-center">
                    <div
                        class="animation_circle_wrap relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class=" h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="animation_circle w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #eab91f; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566; --animation-circle:97;--animation-circle-time:1.97s;"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2
                            class="animation_circle_persentage absolute font-primary font-black text-4xl text-primary text-center -rotate-[270deg]">
                            0%
                        </h2>
                    </div>
                    <p class="font-primary font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_1') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div
                        class="animation_circle_wrap relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class="h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="animation_circle w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #efaa52; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566;  --animation-circle:98;--animation-circle-time:1.98s;"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2
                            class="animation_circle_persentage absolute font-primary font-black text-4xl text-primary text-center -rotate-[270deg]">
                            0%
                        </h2>
                    </div>
                    <p class="font-primary font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_2') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div
                        class="animation_circle_wrap relative flex justify-center items-center w-full h-full rotate-[270deg]">
                        <svg class="h-[240px] w-[240px]">
                            <circle class="w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f5e6d3; transform: translate(1.815rem, 1.815rem)"
                                cx="90" cy="90" r="90"></circle>
                            <circle class="animation_circle w-full h-full"
                                style="fill:transparent; stroke-width:24; stroke: #f6921e; transform: translate(1.815rem, 1.815rem); stroke-dasharray: 566; --animation-circle:100;--animation-circle-time:2s;"
                                cx="90" cy="90" r="90"></circle>
                        </svg>
                        <h2
                            class="animation_circle_persentage absolute font-primary font-black text-4xl text-primary text-center -rotate-[270deg]">
                            0%
                        </h2>
                    </div>
                    <p class="font-primary font-bold text-[22px] text-primary text-center leading-6">
                        {{ __('pages/programs/academic_tutoring.wording_3') }}</p>
                </div>
            </div>
            <div class="flex flex-col items-center mt-12">
                <h2 class="mb-6 font-primary font-black text-5xl text-black text-center">
                    {{ __('pages/programs/academic_tutoring.ibdiploma') }}</h2>
                <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/IB-DIPLOMA-ASSET.webp') }}"
                    alt="Allineduspace IB Diploma asset" class="w-full max-w-3xl max-h-48 object-contain">
            </div>
            <div class="flex flex-col items-center mt-12">
                <h2 class="mb-6 font-primary font-black text-5xl text-black text-center">
                    {{ __('pages/programs/academic_tutoring.cambridge') }}</h2>
                <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/CAMBRIDGE-A-LVLASSET.webp') }}"
                    alt="Allineduspace Cambridge a lvl asset" class="w-full max-w-3xl max-h-48 object-contain">
            </div>
        </div>
    </section>

    {{-- ================================== What Will You Do Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 mb-12 py-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.do_title') }}</h2>
            </div>
            <div class="flex items-center main-container gap-x-8">
                <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad-tutor-what-you-will-do-asset.webp') }}"
                    alt="Allineduspace acad tutor what you will do asset" class="hidden w-2/6 object-cover md:block">
                <div class="flex flex-col gap-y-6">
                    @foreach (__('pages/programs/academic_tutoring.do_list') as $item)
                        @if ($loop->index == 3)
                            <div
                                class="flex justify-between items-stretch gap-4 w-full min-h-full rounded-lg bg-gradient-to-r from-[#040F37] via-primary to-[#040F37] overflow-hidden lg:rounded-full lg:min-h-max">

                                <div
                                    class="relative flex items-center w-1/5 min-h-full px-2 overflow-hidden lg:w-1/3 lg:px-6 lg:rounded-full">
                                    <span
                                        class="font-primary font-extrabold text-8xl md:text-9xl text-primary leading-none opacity-80 z-10">
                                        {{ $loop->iteration }}
                                    </span>
                                    <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad (' . $loop->iteration . ').webp') }}"
                                        alt="what will you do {{ $loop->iteration }}"
                                        class="absolute w-full h-full -m-2 sm:-m-6 object-cover object-center">
                                </div>
                                <div class="flex flex-col justify-center w-4/5 mt-2 pr-4 pb-4 py-3 sm:mt-0">
                                    <h4 class="font-primary font-bold text-2xl text-yellow">
                                        {{ $item['title'] }}</h4>
                                    <ul class="list-outside pr-6">
                                        @foreach ($item['desc'] as $desc)
                                            <li class="inline-flex text-white">
                                                <i class="fa-regular fa-circle-right mt-0.5 mr-2"></i>
                                                <p
                                                    class="font-primary font-normal text-[17px] text-white leading-5 md:pr-4">
                                                    {{ $desc }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div
                                class="flex justify-between items-stretch gap-4 w-full min-h-full rounded-lg bg-gradient-to-r from-[#040F37] via-primary to-[#040F37] overflow-hidden lg:rounded-full lg:min-h-max">

                                <div
                                    class="relative flex items-center w-1/5 min-h-full px-2 overflow-hidden lg:w-1/3 lg:px-6 lg:rounded-full">
                                    <span
                                        class="font-primary font-extrabold text-8xl md:text-9xl text-primary leading-none opacity-80 z-10">
                                        {{ $loop->iteration }}
                                    </span>
                                    <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/acad (' . $loop->iteration . ').webp') }}"
                                        alt="what will you do {{ $loop->iteration }}"
                                        class="absolute w-full h-full -m-2 sm:-m-6 object-cover object-center">
                                </div>
                                <div class="flex flex-col justify-center w-4/5 mt-2 pr-4 pb-2 sm:mt-0">
                                    <h4 class="font-primary font-bold text-2xl text-yellow">
                                        {{ $item['title'] }}</h4>
                                    <p class="font-primary font-normal text-[17px] text-white leading-5 md:pr-4">
                                        {{ $item['desc'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== PRIVATE CLASS Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.private_title') }}</h2>
            </div>
            <div class="main-container mb-12 text-center md:text-left">
                <p class="font-primary font-semibold text-2xl text-primary">
                    {{ __('pages/programs/academic_tutoring.private_desc') }}</p>
            </div>
            <div class="grid grid-cols-1 main-container gap-8 md:grid-cols-3">
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#ecf1ff]">
                    <h4 class="font-primary font-extrabold text-2xl text-primary text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_basic_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_basic_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-yellow "></i>
                                <p class="font-primary font-medium text-xl text-yellow">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#efaa52]">
                    <h4 class="font-primary font-extrabold text-2xl text-white text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_pro_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_pro_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-black "></i>
                                <p class="font-primary font-medium text-xl text-black">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex flex-col px-4 py-6 items-center rounded-3xl bg-[#233469]">
                    <h4 class="font-primary font-extrabold text-2xl text-white text-center">
                        {{ __('pages/programs/academic_tutoring.private_list_elite_title') }}</h4>
                    <ul class="mt-2">
                        @foreach (__('pages/programs/academic_tutoring.private_list_elite_body') as $item)
                            <li class="flex my-2"><i class="fa-solid fa-check mr-2 mt-1.5 text-yellow "></i>
                                <p class="font-primary font-medium text-xl text-yellow">{{ $item }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="main-container mt-8 text-center">
                <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                    class="inline-block px-5 py-2 mt-10 font-primary font-bold text-xl text-white text-center bg-yellow rounded-lg">
                    {{ __('pages/programs/academic_tutoring.private_btn') }}
                </a>
            </div>
        </div>
    </section>

    {{-- ================================== WHY US? Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.why_us_title') }}</h2>
            </div>
            <div class="main-container mt-12">
                <ul class="grid grid-cols-1 gap-8 md:grid-cols-4">
                    @foreach (__('pages/programs/academic_tutoring.why_us_list') as $item)
                        <li class="flex flex-col mb-4 rounded-[2.75rem] bg-[#f6d7af] overflow-hidden">
                            <img data-original="{{ asset('assets/img/academic_test_preparation/academic_tutoring/' . $item['image']) }}"
                                alt="Allineduspace flexcibility learning" class="p-4 md:p-0">
                            <div class="flex flex-col p-6">
                                <h5 class="mb-4 font-primary font-bold text-2xl text-primary">{{ $item['title'] }}</h5>
                                <p class="font-primary font-lg text-black">{{ $item['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- ================================== Tutors Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.tutors_title') }}</h2>
            </div>

            <div class="main-container my-12">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($tutors as $tutor)
                                <li class="splide__slide h-ful">
                                    <div class="splide__container h-full">
                                        <div
                                            class="flex flex-col h-full mx-4 mb-4 rounded-[3rem] bg-primary overflow-hidden">
                                            <img data-original="{{ asset('uploaded_files/tutor/' . $tutor->created_at->format('Y') . '/' . $tutor->created_at->format('m') . '/' . $tutor->thumbnail) }}"
                                                alt="Allineduspace {{ $tutor->alt }}" class="p-4 md:p-0">
                                            <div class="flex flex-col justify-between p-6">
                                                <h5 class="mb-4 font-primary font-bold text-2xl text-yellow">
                                                    {{ $tutor->full_name }}
                                                </h5>
                                                <div class="flex flex-col">
                                                    <p class="mt-2 font-primary font-semibold text-base text-white">
                                                        {{ $tutor->experience }}
                                                    </p>
                                                    <div class="font-primary font-medium text-base text-yellow">
                                                        {!! $tutor->subject !!}
                                                    </div>
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
    <section class="py-10">
        <div class="flex flex-col">
            <div
                class="mx-6 py-4 mb-4 rounded-xl bg-[#f5e6d3] sm:px-6 md:mx-0 md:w-2/3 md:rounded-r-full lg:pl-20 xl:pl-40 ">
                <h2 class="font-primary font-black text-2xl text-primary text-center uppercase md:text-6xl md:text-left">
                    {{ __('pages/programs/academic_tutoring.testi_title') }}</h2>
            </div>

            <div class="main-container my-12">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
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
    <section class="py-10">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-primary font-black text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/academic_tutoring.bottom_title') }}
                <span class="block text-yellow">
                    {{ __('pages/programs/academic_tutoring.bottom_subtitle') }}</span>
            </h2>
            <a href="{{ route('sign_me_acad_tutoring', app()->getLocale()) }}"
                class="px-5 py-2 mt-4 font-primary font-bold text-xl text-white text-center bg-yellow rounded-2xl">{{ __('pages/programs/academic_tutoring.bottom_btn') }}</a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        // animation
        const benefit_element = document.getElementById("benefit");
        const animation_circle = document.querySelectorAll(".animation_circle");
        const animation_circle_persentage = document.querySelectorAll(".animation_circle_persentage");
        const persentages = [97, 98, 100];
        const animation_times = [1970, 1980, 2000];
        const position = benefit_element.offsetTop;

        window.addEventListener('scroll', () => {
            if (window.pageYOffset >= position) {
                animation_circle.forEach((element, it) => {
                    element.classList.add('animation_circle_active')
                    persentage = animation_circle_persentage[it].textContent.trim();
                    if (persentage == '0%') {
                        persentage_animation(animation_circle_persentage[it], persentages[it],
                            animation_times[it]);
                    }
                })
            }
        });

        function persentage_animation(persentage_element, persentage, animation_time) {
            let percent = 0;
            let intervalID = setInterval(() => {
                percent++;
                persentage_element.textContent = `${percent}%`;
                if (percent >= persentage) {
                    clearInterval(intervalID);
                }
            }, animation_time / persentage);
        }


        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 3000,
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

        new Splide(splides[1], {
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
