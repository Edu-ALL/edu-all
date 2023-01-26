@extends('layout.user.main')

@section('content')
    {{-- ==================================== Header Section ========================================= --}}
    <section class="py-28 bg-undergraduate-header bg-cover bg-center md:py-48 ">
        <div class="relative main-container">
            <div class="flex flex-col items-center gap-y-4 md:max-w-3xl md:mx-auto">
                <div class="w-full md:px-12">
                    <h4 class="mb-2 font-secondary font-semibold text-2xl text-white text-center md:text-4xl">
                        {{ __('pages/programs/undergraduate_program.subtitle')}}

                    </h4>
                    <span class="flex items-center">
                        <span class="block w-2 h-2 rounded-full bg-white"></span>
                        <span class="block w-full h-0.5 bg-white"></span>
                        <span class="block w-2 h-2 rounded-full bg-white"></span>
                    </span>
                </div>
                <h1
                    class="font-secondary font-black text-4xl text-yellow text-center tracking-tighter md:text-6xl lg:text-7xl xl:text-8xl">
                    {{ __('pages/programs/undergraduate_program.title') }}
                </h1>
                <p class="mt-8 font-inter text-base text-white text-center md:text-xl md:leading-5">
                    {{__('pages/programs/undergraduate_program.body')}}</p>
            </div>
            <div class="hidden absolute -bottom-[70%] left-[50%] max-w-full w-full px-10 -translate-x-[50%] translate-y-[50%] md:block lg:max-w-4xl">
                <div class="w-full shadow-md rounded-3xl">
                    <img src="{{ asset('assets/img/admission mentoring/benefit.webp') }}" alt="admission mentoring benefit" class="w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== What Will You Do Section ========================================= --}}
    <section class="py-10 md:py-40">
        <div class="flex flex-col w-full">
            <div class="main-container z-10">
                <div class="flex justify-center">
                    <h2 class="w-full px-4 py-3 font-secondary font-extrabold text-3xl text-primary text-center tracking-tight rounded-full bg-[#F5E6D3] md:w-2/5 md:text-4xl">
                        {{ __('pages/programs/undergraduate_program.do_title') }}
                    </h2>
                </div>
            </div>
            <div class="flex flex-col items-stretch gap-6 -mt-8 pl-4 pr-4 lg:pl-0 lg:pr-20 xl:pr-40 lg:flex-row">
                <div class="w-full min-h-full bg-undergraduate-do bg-cover bg-center rounded-r-3xl lg:w-1/2"></div>
                <div class="flex flex-col gap-4 w-full py-12 lg:w-1/2">
                    @foreach (__('pages/programs/undergraduate_program.do_list') as $item)
                        <div class="flex justify-between items-stretch gap-4 w-full min-h-full rounded-lg bg-gradient-to-r from-[#040F37] via-primary to-[#040F37] overflow-hidden lg:rounded-full lg:min-h-max">
                            <div class="flex items-center w-1/5 min-h-full px-2 bg-undergraduate-list-{{ $loop->iteration }} bg-cover bg-center  lg:w-1/3 lg:px-6  lg:rounded-full">
                                <span class="font-secondary font-extrabold text-8xl md:text-9xl text-primary leading-none opacity-80">
                                    {{ $loop->iteration }}
                                </span>
                            </div>
                            <div class="flex flex-col justify-center gap-2 w-4/5 lg:w-2/3 h-full pr-10 py-3">
                                <h4 class="font-inter font-semibold text-xl text-yellow">{{ $item['title'] }}</h4>
                                <p class="font-inter text-base text-white leading-4">
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
            <div class="flex flex-col">
                <h2 class="max-w-4xl mx-auto font-secondary font-bold text-4xl text-primary text-center leading-8">
                    {{ __('pages/programs/undergraduate_program.pilar_title') }}
                </h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @foreach (__('pages/programs/undergraduate_program.pilar_list') as $item)
                    <div class="pilar_card h-72 md:h-60">
                        <div class="front flex items-center justify-center w-full overflow-hidden">
                            <img src="{{ asset('assets/img/admission mentoring/'.$item['img']) }}" alt="4 pilar" class="w-full bg-cover bg-center">
                        </div>
                        <div class="back flex flex-col justify-center items-center w-full h-full px-4 bg-{{ $item['color'] }}">
                            <h4 class="mb-4 font-secondary font-bold text-3xl text-white text-center leading-6">{{ $item['title'] }}</h4>
                            <p class="font-secondary text-base text-white text-center leading-4">{{ $item['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ==================================== DREAM STUDY DESTINATION ========================================= --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="max-w-4xl mx-auto font-secondary font-bold text-4xl text-primary text-center leading-8">
                    {{ __('pages/programs/undergraduate_program.destination_title') }}
                </h2>
                <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                    @foreach (__('pages/programs/undergraduate_program.destination_list') as $item)
                    <div class="flex flex-col gap-8">
                        <a href="{{ $item['link'] }}" target="_block" class="rounded-xl overflow-hidden">
                            <img src="{{ asset('assets/img/admission mentoring/Undergraduate/'.$item['img']) }}" alt="">
                        </a>
                        <p class="font-secondary font-semibold text-primary text-center">{{ $item['body'] }}</p>
                    </div>
                    @endforeach
                </div>
                <a href="#" class="mt-12">
                    <span class="px-6 py-2 font-secondary font-semibold text-white text-center rounded-md bg-yellow">{{ __('pages/programs/undergraduate_program.destination_btn') }}</span>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================================== Why us section ========================================= --}}

    {{-- ====================================  Testimonial Section ========================================= --}}

    {{-- ==================================== Bottom Section ========================================= --}}
@endsection
