@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full bg-gradient-to-tr from-primary md:bg-gradient-to-r md:from-yellow">
                <div class="flex flex-col items-center pt-10 md:items-start md:w-2/3 md:pl-28 lg:w-1/2 lg:pt-16 ">
                    <h1 class="heading-2 text-center md:w-1/2 md:text-left">
                        {{ __('pages/programs/admission_mentoring.title') }}
                    </h1>
                    <p class="mt-2 font-primary font-normal text-xl text-white text-center md:text-left">
                        {{ __('pages/programs/admission_mentoring.body') }}</p>
                </div>
            </div>

            <img src="{{ asset('assets/img/admission mentoring/Header_Image_3-min.webp') }}" alt=""
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- ================================== Benefit Section ================================== --}}
    <section class="relative mx-6 md:h-10">
        <div
            class="max-w-5xl min-w-max bg-white shadow-[0px_0px_10px_5px] shadow-black/20 md:absolute-center md:-top-[180px]">
            <div class="flex flex-col px-4 py-8 gap-x-4 gap-y-4 md:px-10 md:py-4 md:gap-y-14 md:gap-x-10 md:flex-row">
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_1.png') }}" alt="ilustration 1"
                        class="h-36 md:h-24">
                    <h4
                        class="font-body text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                        <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_1') }}
                        </span>{{ __('pages/programs/admission_mentoring.benefit_1_sub') }}
                    </h4>
                </div>
                <div class="min-h-full w-[1px] bg-black"></div>
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_2.png') }}" alt="ilustration 1"
                        class="h-36 md:h-24">
                    <h4
                        class="font-body text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                        <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_2') }}
                        </span>{{ __('pages/programs/admission_mentoring.benefit_2_sub') }}
                    </h4>
                </div>
                <div class="min-h-full w-[1px] bg-black"></div>
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_3.webp') }}" alt="ilustration 1"
                        class="h-36 md:h-24">
                    <h4
                        class="font-body text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                        <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_3') }}
                        </span>{{ __('pages/programs/admission_mentoring.benefit_3_sub') }}
                    </h4>
                </div>
                <div class="min-h-full w-[1px] bg-black"></div>
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_1.png') }}" alt="ilustration 1"
                        class="h-36 md:h-24">
                    <h4
                        class="font-body text-xl  font-normal text-center text-primary tracking-tight leading-6 md:text-sm md:leading-4">
                        <span class="block font-extrabold"> {{ __('pages/programs/admission_mentoring.benefit_4') }}
                        </span>{{ __('pages/programs/admission_mentoring.benefit_4_sub') }}
                    </h4>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Undergraduate Program Section ================================== --}}
    <section class="py-16">
        {{-- Undergraduate Program Title --}}
        <div class="main-container">
            <h2 class="font-title font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.undergraduate_title') }}
                <span
                    class=" block text-yellow">{{ __('pages/programs/admission_mentoring.undergraduate_subtitle') }}</span>
            </h2>

            <p class="font-primary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.undergraduate_desc') }}
            </p>

        </div>

        {{-- Undergraduate Program Cards --}}
        <div class="relative">

            <div class="splide mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows"></div>
                    <div class="splide__track mx-10 md:mx-20">
                        <ul class="splide__list flex">
                            @foreach ($undergraduate_cards as $undergraduate_card)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img src="{{ asset($undergraduate_card->image) }}" alt="undergraduate 1">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
                                                    {{ $undergraduate_card->title }}</h4>
                                                <p>{{ $undergraduate_card->desc }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-primary w-full h-[90%]"></div>
        </div>

    </section>

    {{-- ================================== Graduate Program Section ================================== --}}
    <section class="py-16">
        {{-- Graduate Program Title --}}
        <div class="main-container">
            <h2 class="font-title font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.graduate_title') }}
                <span class=" block text-yellow">{{ __('pages/programs/admission_mentoring.graduate_subtitle') }}</span>
            </h2>

            <p class="font-primary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.graduate_desc') }}
            </p>

        </div>

        {{-- Graduate Program Cards --}}
        <div class="relative">
            <div class="splide splide__testi  mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows"></div>
                    <div class="splide__track mx-10 md:mx-20">
                        <ul class="splide__list flex">
                            @foreach ($graduate_cards as $graduate_card)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img src="{{ asset($graduate_card->image) }}" alt="graduate 1">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
                                                    {{ $graduate_card->title }}</h4>
                                                <p>{{ $graduate_card->desc }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-primary w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Univtransfer Program Section ================================== --}}
    <section class="py-16">
        {{-- univtransfer Program Title --}}
        <div class="main-container">
            <h2 class="font-title font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.univtransfer_title') }}
                <span
                    class=" block text-yellow">{{ __('pages/programs/admission_mentoring.univtransfer_subtitle') }}</span>
            </h2>

            <p class="font-primary text-xl text-center">
                {{ __('pages/programs/admission_mentoring.univtransfer_desc') }}
            </p>

        </div>

        {{-- univtransfer Program Cards --}}
        <div class="relative">
            <div class="splide mt-8 main-container" aria-label="Basic Structure Example">
                <div class="md:position: md:relative">
                    <div class="splide__arrows"></div>
                    <div class="splide__track mx-10 md:mx-20">
                        <ul class="splide__list flex">
                            @foreach ($univtransfer_cards as $univtransfer_card)
                                <li class="splide__slide">
                                    <div class="splide__slide__container h-full px-1 lg:px-2 xl:px-4 2xl:px-6">
                                        <div class="flex flex-col h-full bg-white rounded-xl overflow-hidden">
                                            <img src="{{ asset($univtransfer_card->image) }}" alt="univtransfer 1">
                                            <div class="py-6 px-4">
                                                <h4 class="mb-4 font-primary font-bold text-primary text-2xl">
                                                    {{ $univtransfer_card->title }}</h4>
                                                <p>{{ $univtransfer_card->desc }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="absolute top-[100px] -z-10 bg-primary w-full min-h-full"></div>
        </div>

    </section>

    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-title font-extrabold text-primary text-center text-4xl mb-4">
                {{ __('pages/programs/admission_mentoring.testimony') }}
            </h2>

            <div class="splide" aria-labelledby="carousel-heading">
                <ul class="splide__pagination"></ul>

                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($testimonies as $testimony)
                            <li class="splide__slide">
                                <div class="splide__slide__container h-full ">
                                    <div class="flex flex-col h-full mx-2 px-4 py-6 border-[1px] rounded-lg bg-[#fcf4f6]">
                                        <h4 class="font-primary font-bold text-2xl text-[#0367BF] mb-4">
                                            {{ $testimony['name'] }}</h4>
                                        <p class="font-primary font-normal text-base text-[#0367BF] italic">
                                            {{ $testimony['body'] }}</p>
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
            <h2 class=" font-title font-extrabold text-primary text-center text-4xl mb-4 md:w-1/2">
                {{ __('pages/programs/admission_mentoring.sign_up_text') }}
                <span class="block text-yellow">{{ __('pages/programs/admission_mentoring.sign_up_text_sub') }}</span>
            </h2>
            <a href="#" class="my-btn">{{ __('pages/programs/admission_mentoring.sign_up_btn') }}</a>
        </div>

    </section>


    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        for (var i = 0; i < splides.length - 1; i++) {
            new Splide(splides[i], {
                type: 'loop',
                perPage: isSmallDevice ? 1 : 3,
                perMove: 1,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }

        new Splide(splides[3], {
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
