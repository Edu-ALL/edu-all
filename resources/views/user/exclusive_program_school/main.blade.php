@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/exclusive_program_school.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/exclusive_program_school.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/exclusive_program_school.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        ['title' => 'general', 'url' => '/programs/exclusive-program-school'],
        ['title' => __('pages/programs/admission_accelerator.title'), 'url' => '/programs/exclusive-program-school/admission-accelerator'],
        ['title' => __('pages/programs/experiential_learning.title'), 'url' => '/programs/exclusive-program-school/experiential-learning'],
        ['title' => __('pages/programs/teacher_focused.title'), 'url' => '/programs/exclusive-program-school/teacher-focused'],
    ]" :active="'general'" title="{{  __('pages/programs/exclusive_program_school.title') }}" :string-limit="14" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="py-16 h-screen bg-exclusive-program-school-header bg-cover bg-top" id="banner">
        <div class="flex flex-col h-full justify-center items-center new-main-container py-20 gap-4">
            <h2 class="font-newprimary font-bold text-5xl text-white text-center uppercase mb-3">
                {{ __('pages/programs/exclusive_program_school.title') }}
            </h2>
            <p class="font-newprimary text-white text-center max-w-2xl leading-6 text-lg font-light">
                {{ __('pages/programs/exclusive_program_school.description') }}
            </p>
            <p class="font-newprimary text-white text-center max-w-xl leading-6 text-lg font-light">
                {{ __('pages/programs/exclusive_program_school.sub_description') }}
            </p>
        </div>
    </section>

    {{-- ================================== Benefit Section  ================================== --}}
    <section class="py-20 mt-20 flex justify-center">
        <div class="new-main-container flex flex-wrap gap-12 gap-y-16 md:gap-8 items-center justify-center md:mx-[150px]">
            @foreach (__('pages/programs/exclusive_program_school.benefit') as $item)
                <div class="w-1/3 md:w-1/5 flex flex-col items-center gap-4">
                    <img src="{{ asset('assets/img/exclusive_program_school/' . $item['image']) }}"
                        alt="{{ $item['title'] }}" class="scale-150 object-top object-cover">
                    <h4 class="font-newprimary text-xl font-semibold text-center tracking-tight leading-6 w-32 md:-mt-20 -mt-14">
                        {{ $item['title'] }}
                    </h4>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ================================== Programs Section  ================================== --}}
    <section class="pb-20 pt-12 bg-[#F6F6F6] shadow-2xl mb-32 flex justify-center">
        <div class="new-main-container flex flex-col items-center gap-4 md:gap-8 md:mx-[150px]">
            <h2 class="text-newprimary text-3xl text-center uppercase font-bold">
                {{ __('pages/programs/exclusive_program_school.program_title') }}</h2>
            <div class="md:-mb-40 flex flex-col lg:flex-row items-center w-full gap-8">
                @foreach (__('pages/programs/exclusive_program_school.programs') as $item)
                    <div class="flex flex-col w-full lg:w-1/3 my-4">
                        <div class="flex flex-col items-center rounded-2xl shadow-xl py-8 px-6 bg-white">
                            <h3 class="font-bold uppercase text-xl text-center">
                                {!! $item['title'] !!}
                            </h3>
                            <div class="rounded-xl h-44 w-full overflow-hidden my-4">
                                <img src="{{ asset('assets/img/exclusive_program_school/' . $item['image']) }}"
                                    alt="" class="h-full w-full object-cover">
                            </div>
                            <div class="w-full md:h-24">
                                <p class="text-base text-start px-0 leading-5">
                                    {{ $item['sub_title'] }}
                                </p>
                            </div>
                            <div class="w-full lg:h-36">
                                <ul class="mt-4 w-full flex flex-col gap-3">
                                    @foreach ($item['items'] as $point)
                                        <li class="flex justify-center items-start gap-2">
                                            <div
                                                class="h-5 w-5 bg-newprimary flex items-center justify-center rounded-full">
                                                <i class="fa-solid fa-check fa-xs text-white"></i>
                                            </div>
                                            <p class="flex-1 text-sm font-newprimary">
                                                {{ $point }}
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <x-button
                                href="{{ url(app()->getLocale()) }}/programs/exclusive-program-school/{{ $item['link'] }}"
                                title="{{ __('pages/programs/exclusive_program_school.sub_program_button') }}"
                                bg-color="newprimary" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== COLLABORATE Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="new-main-container">
            <h2 class="font-newprimary font-bold text-center text-2xl md:text-4xl mb-4">
                {{ __('pages/programs/exclusive_program_school.collaborate') }}
            </h2>

            <div class="flex flex-wrap gap-8 justify-center items-stretch">
                @foreach (__('pages/programs/exclusive_program_school.collaborate_item') as $item)
                    <x-collaborate-card :title="$item['title']" :image="$item['image']" :description="$item['description']" />
                @endforeach
            </div>
        </div>
    </section>


    {{-- ================================== Testimonial Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container">
            <h2 class="font-newprimary font-bold text-center text-4xl mb-4">
                {{ __('pages/programs/exclusive_program_school.what_they_say') }}
            </h2>
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px;">
                        <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px;">
                        <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list font-newprimary text-black px-8">
                        @foreach ($testimonies as $testi)
                            <li class="splide__slide w-full pb-8">
                                <div class="splide__slide__container py-8 px-4 h-full w-full ">
                                    <x-testimonial-card :testimonial=$testi />
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    {{-- ================================== CTA Section ================================== --}}
    <section class="pt-16 pb-20">
        <div class="main-container flex items-center justify-center">
            <a href="https://wa.me/+6287888827686" target="_blank"
                class="px-8 md:px-16 py-5 font-semibold font-newprimary text-lg md:text-xl text-white text-center bg-newprimary hover:scale-105 transition-all duration-150">
                {{ __('pages/programs/exclusive_program_school.cta_button') }}
            </a>
        </div>
    </section>
@endsection

@push('script')
    <script>
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
    </script>
@endpush
