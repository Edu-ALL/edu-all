@extends('layout.user.main')

@section('content')
    {{-- ==================================== Header Section ========================================= --}}
    <section class="py-28 bg-graduate-header bg-cover bg-center md:py-48 ">
        <div class="relative main-container">
            <div class="flex flex-col items-center gap-y-4 md:max-w-3xl md:mx-auto">
                <div class="w-full md:px-12">
                    <h4 class="mb-2 font-primary font-semibold text-2xl text-white text-center md:text-4xl">
                        {{ __('pages/programs/graduate_program.subtitle') }}

                    </h4>
                    <span class="flex items-center">
                        <span class="block w-2 h-2 rounded-full bg-white"></span>
                        <span class="block w-full h-0.5 bg-white"></span>
                        <span class="block w-2 h-2 rounded-full bg-white"></span>
                    </span>
                </div>
                <h1
                    class="font-primary font-black text-4xl text-yellow text-center tracking-normal md:text-6xl lg:text-7xl xl:text-8xl">
                    {{ __('pages/programs/graduate_program.title') }}
                </h1>
                <p class="mt-8 font-primary text-base text-white text-center md:text-xl md:leading-5">
                    {{ __('pages/programs/graduate_program.body') }}</p>
            </div>
            <div
                class="hidden absolute -bottom-[70%] left-[50%] max-w-full w-full px-10 -translate-x-[50%] translate-y-[50%] md:block lg:max-w-4xl">
                <div class="w-full shadow-md rounded-3xl">
                    <img src="{{ asset('assets/img/admission mentoring/benefit.webp') }}" alt="admission mentoring benefit"
                        class="w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== What Will You Do Section ========================================= --}}
    <section class="py-10 md:py-40">
        <div class="flex flex-col w-full">
            <div class="main-container z-10">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-primary font-extrabold text-3xl text-primary text-center tracking-tight rounded-full bg-[#F5E6D3] md:w-4/6 md:text-4xl lg:w-2/5">
                        {{ __('pages/programs/graduate_program.do_title') }}
                    </h2>
                </div>
            </div>
            <div class="flex flex-col items-stretch gap-6 -mt-8 pl-4 pr-4 lg:pl-0 lg:pr-20 xl:pr-40 lg:flex-row">
                <div class="w-full min-h-full bg-graduate-do bg-cover bg-center rounded-r-3xl lg:w-1/2"></div>
                <div class="flex flex-col gap-4 w-full py-12 lg:w-1/2">
                    @foreach (__('pages/programs/graduate_program.do_list') as $item)
                        <div
                            class="flex justify-between items-stretch gap-4 w-full min-h-full rounded-lg bg-gradient-to-r from-[#040F37] via-primary to-[#040F37] overflow-hidden lg:rounded-full lg:min-h-max">
                            <div
                                class="relative flex items-center w-1/5 min-h-full px-2 overflow-hidden lg:w-1/3 lg:px-6 lg:rounded-full">
                                <span
                                    class="font-primary font-extrabold text-8xl md:text-9xl text-primary leading-none opacity-80 z-10">
                                    {{ $loop->iteration }}
                                </span>
                                <img src="{{ asset('assets/img/admission mentoring/Graduate/Graduate' . $loop->iteration . '.webp') }}"
                                    alt="Allin" class="absolute w-full h-full -m-2 sm:-m-6 object-cover object-center">
                            </div>
                            <div class="flex flex-col justify-center gap-2 w-4/5 lg:w-2/3 h-full pr-10 py-3">
                                <h4 class="font-primary font-semibold text-xl text-yellow">{{ $item['title'] }}</h4>
                                <p class="font-primary text-base text-white leading-4">
                                    {{ $item['body'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== 4 PILLARS ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="max-w-4xl mx-auto font-primary font-bold text-4xl text-primary text-center leading-8">
                    {{ __('pages/programs/graduate_program.pilar_title') }}
                </h2>
                <div class="my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @foreach (__('pages/programs/graduate_program.pilar_list') as $item)
                        <div class="pilar_card h-72 md:h-60">
                            <div class="front flex items-center justify-center w-full overflow-hidden">
                                <img src="{{ asset('assets/img/admission mentoring/' . $item['img']) }}" alt="4 pilar"
                                    class="w-full bg-cover bg-center">
                            </div>
                            <div
                                class="back flex flex-col justify-center items-center w-full h-full px-4 bg-{{ $item['color'] }}">
                                <h4 class="mb-4 font-primary font-bold text-3xl text-white text-center leading-6">
                                    {{ $item['title'] }}</h4>
                                <p class="font-primary text-base text-white text-center leading-4">{{ $item['body'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center mt-16">
                    <p class="w-full max-w-3xl mx-auto font-primary font-semibold text-primary text-center">
                        {{ __('pages/programs/graduate_program.pilar_desc') }}
                    </p>
                    <a href="https://drive.google.com/file/d/1nfWX8pUvE3YApEix6WHb-W_ZQ0hBZZg_/view?usp=sharing"
                        target="_blank" class="mt-8">
                        <span
                            class="px-6 py-2 font-primary font-semibold text-white text-center rounded-md bg-[#F90C0C]">{{ __('pages/programs/graduate_program.pilar_btn') }}
                        </span>
                    </a>
                    <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}" target="_block"
                        class="mt-8 rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/img/admission mentoring/Graduate/Graduate IC.webp') }}"
                            alt="graduate ic" class="mt-12 w-full max-w-2xl mx-auto object-contain">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== Why us section ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-primary font-extrabold text-3xl text-primary text-center tracking-tight rounded-full bg-[#F5E6D3] md:w-4/6 md:text-4xl lg:w-2/5">
                        {{ __('pages/programs/graduate_program.why_us_title') }}
                    </h2>
                </div>
                <p class="max-w-2xl my-8 mx-auto font-primary font-medium text-primary text-center">
                    {{ __('pages/programs/graduate_program.why_us_desc') }}
                </p>
                <img src="{{ asset('assets/img/admission mentoring/Why Us (adm mentoring).webp') }}"
                    alt="why us mentoring curr" class="w-full max-w-4xl mx-auto">
            </div>
        </div>
    </section>

    {{-- ====================================  Testimonial Section ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col">
                <div class="flex justify-center">
                    <h2
                        class="w-full px-4 py-3 font-primary font-extrabold text-3xl text-primary text-center tracking-tight rounded-full bg-[#F5E6D3] md:w-4/6 md:text-4xl xl:w-3/6">
                        {{ __('pages/programs/graduate_program.testimony_title') }}
                    </h2>
                </div>
                <div class="mt-16 splide" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-2xl"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-2xl"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($testimonies as $item)
                                <li class="splide__slide">
                                    <div class="splide__container">
                                        <div class="flex flex-col mx-2 mb-4 rounded-3xl bg-primary overflow-hidden md:mx-4">
                                            <div class="flex flex-col p-6">
                                                <h5 class="font-primary font-bold text-2xl text-yellow">
                                                    {{ $item->testi_name }}
                                                </h5>
                                                <div class="mb-3 font-primary font-black text-sm text-[#B9B9B9]">
                                                    {!! $item->testi_subtitle !!}
                                                </div>
                                                <div class="font-primary font-semibold text-sm text-white">
                                                    {!! $item->testi_desc !!}
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

    {{-- ==================================== Bottom Section ========================================= --}}
    <section class="py-10">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-primary font-black text-primary text-center text-4xl">
                {{ __('pages/programs/graduate_program.bottom_title') }}
                <span class="mt-3 block text-3xl text-yellow">
                    {{ __('pages/programs/graduate_program.bottom_subtitle') }}
                </span>
            </h2>
            <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}"
                class="px-5 py-2 mt-4 font-primary font-medium text-base text-white text-center bg-yellow rounded-md">{{ __('pages/programs/graduate_program.bottom_btn') }}
            </a>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches

        var splides = document.getElementsByClassName('splide');
        new Splide(splides[0], {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 2,
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
