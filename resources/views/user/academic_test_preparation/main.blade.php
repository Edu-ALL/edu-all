@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full bg-gradient-to-tr from-primary md:bg-gradient-to-r md:from-primary">
                <div class="flex flex-col items-center pt-10 md:items-start md:pl-28 lg:pt-16 ">
                    <h1 class="heading-2 text-center md:w-1/2 md:text-left">
                        {{ __('pages/programs/academic_test_preparation.title') }}
                    </h1>
                    <p class="mt-5 font-primary font-normal text-xl text-white text-center md:text-left">
                        {{ __('pages/programs/academic_test_preparation.body') }}</p>
                </div>
            </div>

            <img src="{{ asset('assets/img/academic_test_preparation/header-academic.webp') }}" alt=""
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- ================================== Academic Tutoring Section ================================== --}}
    <section class="pb-10">
        <div class="flex flex-col items-center main-container">
            <h2 class="font-primary font-semibold text-4xl text-primary capitalize">
                {{ __('pages/programs/academic_test_preparation.aca_title') }}</h2>
            <p class="my-4 font-primary text-xl text-primary text-center md:w-1/2">
                @if (app()->getLocale() == 'en')
                    With <b> core concept learning system</b> and <b>real-life application</b> for exploration, our academic
                    tutoring program will equip students with a strong foundation not only in academics, but also in
                    <b>problem solving and critical thinking.</b>
                @else
                    {{ __('pages/programs/academic_test_preparation.aca_desc') }}</h2>
                @endif
            </p>
            <img src="{{ asset('assets/img/academic_test_preparation/academic-tutoring-flyer-logo-1024x234.webp') }}"
                alt="" class="w-full max-w-2xl my-4">
            <div class="flex flex-col mx-4 mt-8 md:flex-row md:max-w-4xl md:gap-x-8 md:items-center">
                <img src="{{ asset('assets/img/academic_test_preparation/ACAD-TUTOR-photo.webp') }}" alt="acad tutor"
                    class="rounded-2xl md:w-1/2  md:mr-4">
                <div class="flex flex-col mt-4 md:w-1/2 md:pl-4">
                    <h4 class="my-6 font-body font-semibold text-lg text-[#7A7A7A] text-center md:mt-0 md:text-left">
                        {{ __('pages/programs/academic_test_preparation.aca_points_title') }}</h4>
                    <ul class="flex flex-col">
                        @foreach (__('pages/programs/academic_test_preparation.aca_points') as $item)
                            <li class="flex
                        items-start gap-x-2">
                                <i class="fa-solid fa-check mt-1 font-black text-blue-light"></i>
                                <h6 class="font-body font-normal text-lg text-[#7A7A7A]">{{ $item }}</h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="#" class="inline-block p-4 mt-10 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.aca_btn') }}
            </a>
        </div>
    </section>

    {{-- ================================== IB Coaching Program Tutoring Section ================================== --}}
    <section class="pb-10">
        <div class="flex flex-col items-center main-container">
            <h2 class="font-primary font-semibold text-4xl text-primary text-center capitalize">
                {{ __('pages/programs/academic_test_preparation.eecoach_title') }}</h2>
            <p class="my-4 font-body text-xl text-primary text-center md:w-1/2">
                {{ __('pages/programs/academic_test_preparation.eecoach_desc') }}</h2>
            </p>
            <h5 class="font-body font-bold text-xl text-primary text-center md:max-w-2xl "> |
                @foreach (__('pages/programs/academic_test_preparation.eecoach_benefits') as $item)
                    {{ $item }} |
                @endforeach
            </h5>
            <div class="flex flex-col items-center mt-8 mx-5">
                <h4 class="mb-10 font-body text-xl text-primary capitalize">
                    {{ __('pages/programs/academic_test_preparation.eecoach_learn_title') }}
                </h4>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 md:max-w-4xl  md:gap-8">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 1.webp') }}" alt="Topic 1">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 2.webp') }}" alt="Topic 2">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 3.webp') }}" alt="Topic 3">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 4.webp') }}" alt="Topic 4">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 5.webp') }}" alt="Topic 5">
                    <img src="{{ asset('assets/img/academic_test_preparation/Topic 6.webp') }}" alt="Topic 6">
                </div>
            </div>
            <a href="#" class="inline-block p-4 mt-16 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.eecoach_btn') }}
            </a>
        </div>
    </section>

    {{-- ================================== SAT / ACT Preparation Section ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">
            <img src="{{ asset('assets/img/academic_test_preparation/Icon_1.png') }}" alt="SAT Preparation Icon">
            <h2 class="mt-4 font-primary font-semibold text-4xl text-primary text-center capitalize">
                {{ __('pages/programs/academic_test_preparation.sat_title') }}</h2>
            <p class="my-4 font-body text-xl text-primary text-center md:w-1/2">
                {{ __('pages/programs/academic_test_preparation.sat_desc') }}</h2>
            </p>
            <div class="flex flex-col mx-4 mt-8 md:flex-row md:max-w-4xl md:gap-x-8 md:items-center">
                <div class="flex flex-col mt-4 md:w-1/2 md:pl-4">
                    <p class="my-6 font-body text-lg text-[#7A7A7A] text-center md:mt-0 md:text-left">
                        {{ __('pages/programs/academic_test_preparation.sat_body') }}</p>
                </div>
                <div class=" md:w-1/2  md:mr-4">
                    <div class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img
                                        src="{{ asset('assets/img/academic_test_preparation/card7.webp') }}"
                                        alt="acad tutor" class="rounded-2xl"></li>
                                <li class="splide__slide"><img
                                        src="{{ asset('assets/img/academic_test_preparation/card8.webp') }}"
                                        alt="acad tutor" class="rounded-2xl"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <a href="#" class="inline-block p-4 mt-16 font-primary font-bold text-xl text-white bg-yellow rounded-lg">
                {{ __('pages/programs/academic_test_preparation.sat_btn') }}
            </a>
        </div>
    </section>


    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-title font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/academic_test_preparation.testimony_title') }}
            </h2>
            <div class="splide" aria-labelledby="carousel-heading">
                <ul class="splide__pagination"></ul>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach (__('pages/programs/academic_test_preparation.testimonies') as $testimony)
                            <li class="splide__slide">
                                <div class="splide__slide__container h-full ">
                                    <div class="flex flex-col h-full mx-2 px-4 py-6 border-[1px] rounded-lg bg-[#fcf4f6]">
                                        <h4 class="font-primary font-bold text-2xl text-[#0367BF]">
                                            {{ $testimony['name'] }}</h4>
                                        <span class="my-4 font-primary font-normal text-base text-[#0367BF] italic">
                                            {{ $testimony['program'] }}</span>
                                        <p class="font-primary font-normal text-base text-[#0367BF] italic">
                                            "{{ $testimony['body'] }}"</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class=" font-title font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/programs/academic_test_preparation.bottom') }}
            </h2>
            <a href="#" class="my-btn">{{ __('pages/programs/academic_test_preparation.bottom_btn') }}</a>
        </div>

    </section>


    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'fade',
            rewind: true,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#000';
            });
        }).mount();

        new Splide(splides[1], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            focus: 0,
            arrows: false,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
