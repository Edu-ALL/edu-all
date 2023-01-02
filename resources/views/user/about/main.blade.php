@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-5 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full bg-gradient-to-tr">
                <div class="flex flex-col items-center pt-10 md:items-start md:pl-28 lg:pt-16 ">
                    <h1 class="heading-2 text-center md:w-1/2 md:text-left">
                        {{ __('pages/about_us/about.title') }}
                    </h1>
                </div>
            </div>

            <img src="{{ asset('assets/img/about/home-header.webp') }}" alt="header image"
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- ================================== Descrtiption & List Section  ================================== --}}
    <section class="pb-10">
        <div class="flex flex-col items-center main-container">
            <img src="{{ asset('assets/img/about/logo-1.png') }}" alt="Allin Logo" class="w-full max-w-xs">
            <div class="flex flex-col max-w-4xl mt-10 gap-y-4">
                <p class="font-primary font-light text-2xl text-primary text-center">{{ __('pages/about_us/about.desc.0') }}
                </p>
                <p class="font-primary font-light text-2xl text-primary text-center italic">
                    {{ __('pages/about_us/about.desc.1') }}</p>
            </div>
            <div class="flex flex-col gap-y-8 max-w-4xl mt-20">
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.0.title') }}</h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.0.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.1.title') }}</h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.1.body') }}
                    </p>
                </div>
                <span class="block w-full h-[1px] bg-[#7e7e7e]"></span>
                <div class="flex flex-col md:flex-row py-4">
                    <h4 class="mb-6 font-primary font-semibold text-xl text-yellow  md:w-1/3 ">
                        {{ __('pages/about_us/about.about_list.2.title') }}</h4>
                    <p class="font-primary text-lg text-[#7A7A7A] md:w-2/3">
                        {{ __('pages/about_us/about.about_list.2.body') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Question & Answer ================================== --}}
    <div class="section py-10">
        <div class="flex flex-col items-center main-container">
            <img src="{{ asset('assets/img/about/Icon_2.png') }}" alt="Allin Logo">
            <h2 class="mt-4 font-primary font-bold text-3xl text-yellow text-center">Question & Answer</h2>

            <div class="max-w-4xl mt-8 w-full">
                <ul class="flex flex-col gap-y-4">
                    @foreach (__('pages/about_us/about.qna_list') as $item)
                        <li class="flex flex-col w-full">
                            <div id="question" class="flex justify-between items-center cursor-pointer mb-3">
                                <h4 class="mr-4 font-primary font-semibold text-xl text-primary"> {{ $item['question'] }}
                                </h4>
                                <i class="fa-solid fa-chevron-down text-xl text-primary"></i>
                            </div>
                            <p id="answer"
                                class="max-h-0 font-primary text-lg text-[#7e7e7e] overflow-hidden transition-all duration-1000"
                                {{-- style="transition: max-height 1s"> --}}>
                                {!! $item['answer'] !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    {{-- ================================== Question & Answer ================================== --}}
    <section class="py-10 bg-[#1d1d1d]">
        <div class="flex flex-col items-center">
            <div class=" main-container">
                <div class="flex flex-col  max-w-2xl">
                    <h2 class="mt-10 font-primary font-bold text-3xl text-yellow text-center">
                        {{ __('pages/about_us/about.mentor_title') }}</h2>
                    <p class="mt-8 font-primary text-lg text-white text-center leading-7">
                        {{ __('pages/about_us/about.mentor_desc') }}</p>
                </div>
            </div>
            <div class="w-full max-w-5xl py-10">

                <div class="splide" aria-labelledby="carousel-heading">
                    <ul class="splide__pagination"></ul>
                    <div class="splide__track md:m-16">
                        <ul class="splide__list">
                            @foreach (__('pages/about_us/about.mentor_list') as $item)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full mx-6">
                                        <div class="flex flex-col items-center">
                                            <img src="{{ asset('assets/img/about/mentor-profile/' . strtolower($item['name']) . '.png') }}"
                                                alt="{{ $item['name'] }} profile" class="px-16 w-full sm:px-0">
                                            <h4 class="mt-4 font-body font-bold text-xl text-yellow text-center">
                                                {{ $item['name'] }}</h4>
                                            <p class="mt-4 font-body font-medium text-base text-white text-center">
                                                {{ $item['education'] }}
                                            </p>
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
    <section class="-mt-2 py-16 bg-[#1d1d1d]">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-title font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/about_us/about.bottom_title') }}
            </h2>
            <a href="#" class="my-btn">{{ __('pages/about_us/about.bottom_btn') }}</a>
        </div>

    </section>

    <script>
        const questions = document.querySelectorAll('#question');
        const answers = document.querySelectorAll('#answer');
        // const answersHegiht = [];

        // answers.forEach((answer, it) => {
        //     answersHegiht[it] = 200;
        //     answers[it].classList.add('max-h-0');
        //     console.log(answersHegiht[it])
        // })

        let old = 0;

        questions.forEach((question, it) => {
            question.addEventListener('click', () => {
                answers[old].classList.add('max-h-0');
                answers[old].classList.remove('duration-[2s]');
                answers[old].classList.add('duration-500');
                answers[old].classList.remove(`max-h-[400px]`);

                answers[it].classList.remove('max-h-0');
                answers[it].classList.add(`max-h-[400px]`);
                answers[it].classList.add('duration-[2s]');
                answers[it].classList.remove('duration-500');
                old = it;
            })
        })


        // slider
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : 4,
            perMove: 1,
            focus: 0,
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
