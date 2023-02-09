@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-5 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container h-full bg-gradient-to-tr">
                <div class="flex flex-col items-center pt-10 md:items-start md:pl-28 lg:pt-16 ">
                    <h1
                        class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center md:w-1/2 md:text-left">
                        {{ __('pages/about_us/partnership_careers.title') }}
                    </h1>
                </div>
            </div>

            <img src="{{ asset('assets/img/about/partnership-career/Header-partnership.webp') }}" alt="header image"
                class="w-full h-[70vh] object-cover object-center md:h-[40vh] lg:h-[550px]">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- ================================== Desc Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-center main-container">
            <img src="{{ asset('assets/img/about/partnership-career/Icon_2-2.png') }}">
            <div class="max-w-3xl mx-auto mt-6">
                <p class="font-primary text-lg text-primary text-center md:text-2xl">
                    {{ __('pages/about_us/partnership_careers.desc') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ================================== Collaborative Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col main-container">
            <h2 class="font-primary font-semibold text-primary text-center text-3xl mb-4">
                {{ __('pages/about_us/partnership_careers.colab_title') }}</h2>
            <div class="max-w-4xl mx-auto  pb-20">
                <div class="splide px-16" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img src="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-01-min.png') }}"
                                        alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img src="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-02-min.png') }}"
                                        alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img src="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-03-min.png') }}"
                                        alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img src="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-04.webp') }}"
                                        alt="">
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__container">
                                    <img src="{{ asset('assets/img/about/partnership-career/LOGO-PARTNERS-GROUP-05.webp') }}"
                                        alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="main-container flex flex-col items-center">
            <h2 class="font-title font-semibold text-yellow text-center text-3xl mb-4">
                {{ __('pages/about_us/partnership_careers.colab_bottom') }}
            </h2>
            <a href="#" class="my-btn">{{ __('pages/about_us/partnership_careers.colab_btn') }}</a>
        </div>
    </section>

    {{-- ================================== Carrers Section  ================================== --}}
    <section class="pt-20 pb-10">
        <div class="main-container">
            <div class="flex flex-col gap-x-20 max-w-4xl mx-auto md:flex-row">
                <div class="flex flex-col w-full gap-y-5 md:w-1/3">
                    <h4 class="font-primary font-semibold text-2xl text-[#71747B]">
                        {{ __('pages/about_us/partnership_careers.careers_title') }}</h4>
                    <p class="font-primary text-lg text-[#71747B] leading-8">
                        {{ __('pages/about_us/partnership_careers.careers_desc') }}</p>
                    <p class="font-primary text-lg text-[#71747B] leading-8">
                        Send your resume to <a href="mailto:careers@all-inedu.com"
                            class="text-black">careers@all-inedu.com.</a>
                        We have opportunities for a full-time or part-time or an internship. We even offer internship
                        opportunities for high-school students.</p>
                </div>
                <div class="w-full md:w-2/3">
                    <ul class="flex flex-col">
                        @foreach (__('pages/about_us/partnership_careers.careers_list') as $item)
                            <li class="py-4 mb-4 @if ($loop->iteration <= 4) border-b-[1px] border-[#71747B] @endif)">
                                <p class="font-primary text-lg text-[#71747B]">{!! $item !!}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            arrows: !isSmallDevice,
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
    </script>
@endsection
