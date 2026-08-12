@extends('layout.user.main')

@section('head')
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => url('/' . app()->getLocale())],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Our Story', 'url' => url()->current()],
        ];
    @endphp
    <title>{{ __('pages/about_us/our_story.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/our_story.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/our_story.meta_description') }}" />
    <meta name="keywords" content="{{ __('pages/about_us/our_story.meta_keywords') }}" />
@endsection

@push('style')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endpush

@section('content')
    {{-- ==================== Banner Section ==================== --}}
    {{-- Full-screen hero banner with title and description --}}
    <section class="h-[100%]">
        <div class="relative h-full">
            <div class="w-full md:h-[100vh] h-[100dvh] bg-black">
                <img src="{{ asset('assets/img/about/Our Story/1. Background Hero.png') }}"
                    alt="EduALL"
                    title="EduALL" loading="lazy" decoding="async"
                    width="100%" height="auto" class="w-full md:h-[100vh] h-[100dvh] object-cover object-bottom">
            </div>
            <div class="absolute left-0 w-full top-[15vh] md:top-[20vh] overflow-hidden">
                <div class="new-main-container">
                    <div class="bg-dark/60 rounded-2xl max-w-xl p-5 relative overflow-hidden py-10">
                        <img src="{{ asset('assets/img/about/Our Story/2. Hero Background Rectangle.png') }}" 
                            alt="EduALL About Us background decoration"
                            loading="lazy" decoding="async" width="800" height="600"
                            class="w-full h-full absolute top-0 left-0 z-0">
                        <div class="relative z-10">
                            <div class="flex items-center md:justify-start justify-center">
                                <p class=" bg-white rounded-full px-5 inline-block text-sm py-1 mb-5">
                                    <i class="fa-solid fa-circle text-[10px] mr-2"></i>
                                    {{ __('pages/about_us/our_story.banner.label') }}
                                </p>
                            </div>
                            <h1 class="font-light text-[2rem] md:text-[3rem] text-white text-center lg:text-left md:leading-[3.5rem] mb-6 md:mb-5 leading-8 uppercase"
                                itemprop="headline">
                                {!! __('pages/about_us/our_story.banner.title') !!}
                            </h1>
                            <p class="text-gray-400 text-base md:text-lg mb-4 md:mb-0 md:text-start text-center max-w-3xl"
                                itemprop="description">
                                {{ __('pages/about_us/our_story.banner.description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Our Score Section ==================== --}}
    {{-- Statistics and achievements counter --}}
    <section class="bg-newprimary">
        <div class="pt-6 md:pt-10 new-main-container md:px-0 pb-5 relative z-10">
            <div class="flex flex-wrap justify-center gap-0 md:gap-5">
                @foreach (__('pages/about_us/our_story.stats') as $stat)
                    <div class="w-1/3 md:w-1/6 text-center score-item mb-5">
                        <p class="text-lg md:text-[30px] font-semibold text-white">
                            {{ $stat['number'] }}
                        </p>
                        <p class="text-[12px] md:text-base text-gray-400 mt-2 md:leading-5 leading-4">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Our Story Section ==================== --}}
    {{-- Founder story with modal trigger --}}
    <section class="new-main-container my-10">
        <div class="flex flex-col md:flex-row gap-10 items-center">
            <div class="w-full md:w-[30%]">
                <p class="mb-6">
                    {{ __('pages/about_us/our_story.our_story.label') }}
                </p>
                <h2 class="text-3xl mb-4">
                    {!! __('pages/about_us/our_story.our_story.title') !!}
                </h2>
                <p class="mb-5 text-2xl border-l-2 pl-3">
                    {{ __('pages/about_us/our_story.our_story.quote') }}
                </p>
                <img src="{{ asset('assets/img/about/Our Story/3. kak dev.png') }}" 
                    alt="Devi Kasih, Founder of EduALL"
                    loading="lazy" decoding="async" width="400" height="500"
                    class="w-full rounded-xl shadow-md">
            </div>
            <div class="w-full md:w-[70%]">
                @foreach (__('pages/about_us/our_story.our_story.content') as $index => $text)
                    @if($index == 1)
                        <blockquote id="openModal"
                            class="cursor-pointer text-lg border-l-2 border-newprimary ps-3 mb-4 bg-blue-200 py-3 rounded-2xl px-10">
                            {{ $text }}
                        </blockquote>
                    @else
                        <p class="text-lg mb-4 text-gray-500">
                            {{ $text }}
                        </p>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== Vision & Mission Section ==================== --}}
    {{-- Company vision and mission cards --}}
    <section class="bg-gradient-to-b from-white to-blue-300 py-20 my-20">
        <div class="new-main-container">
            <p class="mb-2">
                {{ __('pages/about_us/our_story.vision_mission.label') }}
            </p>
            <h2 class="text-3xl mb-4">
                {{ __('pages/about_us/our_story.vision_mission.title') }}
            </h2>
            <div class="flex flex-col md:flex-row gap-5 items-stretch">
                <div class="w-full md:w-[50%]">
                    <div class="bg-newprimary rounded-2xl shadow-md p-5 text-white h-full">
                        <p class="mb-3">
                            {{ __('pages/about_us/our_story.vision_mission.vision.label') }}
                        </p>
                        <p class="mb-5 text-2xl">
                            {{ __('pages/about_us/our_story.vision_mission.vision.title') }}
                        </p>
                        <img src="{{ asset('assets/img/about/Our Story/2. Vision Mission.png') }}" 
                            alt="EduALL Vision and Mission"
                            loading="lazy" decoding="async" width="600" height="300"
                            class="w-full rounded-2xl h-[150px] object-cover object-top">
                    </div>
                </div>
                <div class="w-full md:w-[50%]">
                    <div class="bg-white rounded-2xl shadow-md p-5 text-newprimary h-full">
                        <p class="mb-3">
                            {{ __('pages/about_us/our_story.vision_mission.mission.label') }}
                        </p>
                        <p class="mb-5 text-3xl">
                            {!! __('pages/about_us/our_story.vision_mission.mission.title') !!}
                        </p>
                        <ul>
                            @foreach (__('pages/about_us/our_story.vision_mission.mission.points') as $point)
                                <li class="flex items-center mb-3 text-xl">
                                    <i class="fa-solid fa-circle text-[12px] mr-2"></i>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <img src="{{ asset('assets/img/about/Our Story/5. Vission Mission Foto_2.png') }}" 
                alt="EduALL Vision and Mission illustration"
                loading="lazy" decoding="async" width="1200" height="400"
                class="w-full md:h-auto h-[200px] object-cover rounded-2xl shadow-md mt-5">
        </div>
    </section>

    {{-- ==================== Journey Timeline Section ==================== --}}
    {{-- Horizontal scrolling timeline with navigation arrows --}}
    <section class="new-main-container py-10 md:py-10">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <p class="text-xl font-normal text-newprimary mb-2 uppercase">
                    {{ __('pages/about_us/our_story.journey.label_1') }}
                </p>
                <h2 class="text-4xl font-normal text-newprimary uppercase mb-2">
                    {{ __('pages/about_us/our_story.journey.label_2') }}
                </h2>
                <p class="text-2xl font-normal text-newprimary">
                    {{ __('pages/about_us/our_story.journey.label_3') }}
                </p>
            </div>
        </div>

        <div class="py-5 md:py-16 bg-white">
            <div class="max-w-5xl mx-auto px-6">
                <div class="relative">
                    {{-- Left Arrow Button --}}
                    <button id="scrollLeftBtn"
                        class="absolute -left-4 md:-left-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center hover:bg-gray-100"
                        aria-label="Scroll timeline left">
                        &#10094;
                    </button>

                    {{-- Horizontal Scrollable Timeline --}}
                    <div id="journeyTimeline" class="overflow-x-auto no-scrollbar pb-6 focus:outline-none" tabindex="0">
                        <div class="relative min-w-[3200px]">
                            {{-- Timeline Line --}}
                            <div class="absolute top-[6.5rem] left-0 right-0 h-[3px] bg-[#1A2EA6]"></div>

                            <div class="grid grid-cols-9 gap-10 relative">
                                @foreach (__('pages/about_us/our_story.journey.timeline') as $item)
                                    <div class="relative text-center">
                                        <div class="relative z-10 inline-block">
                                            <div
                                                class="w-20 h-20 rounded-full overflow-hidden mx-auto border-4 border-[#1A2EA6] bg-white">
                                                <img src="{{ asset('assets/img/about/Our Story/' . $item['image']) }}"
                                                    alt="{{ $item['year'] }} - EduALL Journey"
                                                    loading="lazy" decoding="async" width="80" height="80"
                                                    class="w-full h-full object-cover">
                                            </div>

                                            <div
                                                class="w-3.5 h-3.5 rounded-full bg-[#1A2EA6] absolute left-1/2 -translate-x-1/2 mt-5">
                                            </div>
                                        </div>

                                        <div class="mt-12 text-left">
                                            <h3 class="font-normal text-xl text-[#1A2EA6] mb-4 text-center">{{ $item['year'] }}</h3>

                                            <ul class="space-y-2 text-sm text-gray-500">
                                                @foreach ($item['points'] as $point)
                                                    <li class="flex">
                                                        <span class="mr-2 text-[#1A2EA6]">•</span>
                                                        {{ $point }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Right Arrow Button --}}
                    <button id="scrollRightBtn"
                        class="absolute -right-4 md:-right-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center hover:bg-gray-100"
                        aria-label="Scroll timeline right">
                        &#10095;
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Testimonials Section ==================== --}}
    {{-- our team testimonials slider with arrows --}}
    <section class="new-main-container py-10 md:py-10">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <p class="text-xl font-normal text-newprimary mb-2 uppercase">
                    {{ __('pages/about_us/our_story.testimonials.label') }}
                </p>
                <h2 class="text-4xl font-normal text-newprimary uppercase mb-2">
                    {{ __('pages/about_us/our_story.testimonials.title') }}
                </h2>
                <p class="text-lg font-normal text-gray-500">
                    {{ __('pages/about_us/our_story.testimonials.subtitle') }}
                </p>
            </div>
        </div>
        <div class="py-5 md:py-10 bg-white max-w-6xl mx-auto">
            <div class="w-full mx-auto md:px-6 relative">
                {{-- Left Arrow Button --}}
                <button id="testimonialPrevBtn"
                    class="absolute -left-4 md:-left-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center hover:bg-gray-100"
                    aria-label="Previous testimonial">
                    &#10094;
                </button>

                {{-- Testimonials Slider --}}
                <div id="testimonialSlider" class="overflow-hidden">
                    <div class="flex transition-transform duration-500" id="testimonialTrack">
                        @foreach (__('pages/about_us/our_story.testimonials.list') as $testimonial)
                            <div class="w-full md:w-1/3 flex-shrink-0 px-3">
                                <div class="bg-gradient-to-r from-blue-200 to-blue-100 rounded-xl p-5 md:p-10">
                                    <div class="md:h-[350px] h-[350px]">
                                        <p class="text-dark/60 text-sm">
                                            {{ $testimonial['quote'] }}
                                        </p>
                                    </div>
                                    <div class="flex gap-5 items-center">
                                        <img src="{{asset('assets/img/about/Our Story/' . $testimonial['image'])}}" 
                                            alt="{{ $testimonial['name'] }} - {{ $testimonial['role'] }}"
                                            loading="lazy" decoding="async" width="50" height="50"
                                            class="w-[50px] h-[50px] object-cover rounded-full">
                                        <div>
                                            <p class="font-normal">{{ $testimonial['name'] }}</p>
                                            <p class="text-gray-500 text-sm">{{ $testimonial['role'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right Arrow Button --}}
                <button id="testimonialNextBtn"
                    class="absolute -right-4 md:-right-20 top-1/2 -translate-y-1/2 z-20 bg-white shadow-lg rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center hover:bg-gray-100"
                    aria-label="Next testimonial">
                    &#10095;
                </button>
            </div>
        </div>
    </section>

    {{-- ==================== Team Section ==================== --}}
    {{-- Team introduction with CTA button --}}
    <section class="my-20">
        <div class="new-main-container">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-[50%]">
                    <p class="mb-3">
                        {{ __('pages/about_us/our_story.team.label') }}
                    </p>
                    <h2 class="text-4xl mb-3 uppercase font-normal">
                        {{ __('pages/about_us/our_story.team.title') }}
                    </h2>
                    <p class="text-gray-500 text-lg mb-5">
                        {{ __('pages/about_us/our_story.team.description') }}
                    </p>
                    <a href="{{ route('our_team', ['locale' => app()->getLocale()]) }}" class="bg-newprimary text-white rounded-lg px-5 py-2">
                        {{ __('pages/about_us/our_story.team.cta') }}
                    </a>
                </div>
                <div class="w-full md:w-[50%]">
                    <img src="{{asset('assets/img/about/Our Story/' . __('pages/about_us/our_story.team.image'))}}" 
                        alt="EduALL Team"
                        loading="lazy" decoding="async" width="600" height="400"
                        class="w-full rounded-2xl shadow-md">
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== Modal Section ==================== --}}
    {{-- Founder's letter modal with detailed content --}}
    <div id="modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-[999]">
        <div class="bg-[#EFF0F0] rounded-xl shadow-lg w-11/12 max-w-5xl p-6 h-[90vh] overflow-auto">
            <div class="flex justify-end items-center">
                <button id="closeModal" class="text-gray-500 hover:text-red-500 text-2xl leading-none">
                    &times;
                </button>
            </div>

            <div class="py-4 px-20">
                <p class="text-newprimary text-center mb-2 font-light uppercase">
                    {{ __('pages/about_us/our_story.modal.label') }}
                </p>

                <h3 class="text-5xl text-center text-newprimary mb-10 font-normal">
                    {!! __('pages/about_us/our_story.modal.title') !!}
                </h3>

                <div class="flex flex-col md:flex-row gap-10">
                    <div class="w-full md:w-1/2">
                        <img src="{{asset('assets/img/about/Our Story/9. Foto Letter From our Founder.png')}}" 
                            alt="Devi Kasih, Founder of EduALL"
                            loading="lazy" decoding="async" width="600" height="800"
                            class="w-full mb-5">

                        <p class="text-xl italic text-newprimary mb-5">
                            {!! __('pages/about_us/our_story.modal.content.quote_1') !!}
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_1') }}
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_2') }}
                        </p>

                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_3') }}
                        </p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="text-xl italic text-newprimary mb-5 mt-8">
                            <strong>{{ __('pages/about_us/our_story.modal.content.text_4') }}</strong>
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_5') }}
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_6') }}
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_7') }}
                        </p>
                        <p class="text-newprimary italic mb-3 font-light">
                            {{ __('pages/about_us/our_story.modal.content.text_8') }}
                        </p>
                        <p class="text-xl italic text-newprimary">
                            {!! __('pages/about_us/our_story.modal.content.closing') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const timeline = document.getElementById("journeyTimeline");
            const modal = document.getElementById("modal");
            const openModalBtn = document.getElementById("openModal");
            const closeModalBtn = document.getElementById("closeModal");

            // Timeline scroll functionality
            document.getElementById("scrollLeftBtn").addEventListener("click", () => {
                timeline.scrollBy({
                    left: -500,
                    behavior: "smooth"
                });
            });

            document.getElementById("scrollRightBtn").addEventListener("click", () => {
                timeline.scrollBy({
                    left: 500,
                    behavior: "smooth"
                });
            });

            // Testimonials slider functionality
            const testimonialTrack = document.getElementById("testimonialTrack");
            const prevBtn = document.getElementById("testimonialPrevBtn");
            const nextBtn = document.getElementById("testimonialNextBtn");
            let currentIndex = 0;
            const slidesPerView = window.innerWidth >= 768 ? 3 : 1;
            const totalSlides = testimonialTrack.children.length;
            const maxIndex = totalSlides - slidesPerView;

            function updateSlider() {
                const slideWidth = 100 / slidesPerView;
                testimonialTrack.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
                
                // Update button states
                prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
                prevBtn.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
                nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
                nextBtn.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
            }

            if (prevBtn && nextBtn) {
                prevBtn.addEventListener("click", () => {
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateSlider();
                    }
                });

                nextBtn.addEventListener("click", () => {
                    if (currentIndex < maxIndex) {
                        currentIndex++;
                        updateSlider();
                    }
                });
            }

            // Initialize slider
            updateSlider();

            // Modal functionality
            if (openModalBtn && modal) {
                openModalBtn.addEventListener("click", () => {
                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                    document.body.style.overflow = "hidden";
                });
            }

            if (closeModalBtn && modal) {
                closeModalBtn.addEventListener("click", () => {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                    document.body.style.overflow = "auto";
                });
            }

            // Close modal when clicking outside the modal content
            if (modal) {
                modal.addEventListener("click", (e) => {
                    if (e.target === modal) {
                        modal.classList.add("hidden");
                        modal.classList.remove("flex");
                        document.body.style.overflow = "auto";
                    }
                });
            }

            // Close modal with Escape key
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && modal && !modal.classList.contains("hidden")) {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                    document.body.style.overflow = "auto";
                }
            });
        });
    </script>
@endpush