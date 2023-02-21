@extends('layout.user.main')

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="font-primary font-bold text-4xl text-[#6696E2] text-center">
                {{ __('pages/resources/testimonial.title') }}
            </h2>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-28">
                {{-- Admission Mentoring --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Admission <br> Mentoring</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($admission_mentoring as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container h-full py-6">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <div
                                                            class="font-primary font-semibold text-xs text-primary text-justify leading-[18px]">
                                                            {!! $item->testi_desc !!}
                                                        </div>
                                                        <div class="flex justify-between mt-6">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-primary font-bold text-xs text-yellow leading-4">
                                                                    {{ $item->testi_name }}
                                                                </h5>
                                                                <span
                                                                    class="font-primary font-bold text-xs text-primary leading-4">
                                                                    {!! $item->testi_subtitle !!}
                                                                </span>
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
                </div>

                {{-- Experiential Learning --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Experiential <br> Learning</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($experiential_learning as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container py-6 h-full">
                                                    <div
                                                        class="flex flex-col justify-between mx-2.5 p-4 h-full rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <div
                                                            class="font-primary font-semibold text-xs text-primary text-justify leading-[18px]">
                                                            {!! $item->testi_desc !!}
                                                        </div>
                                                        <div class="flex justify-between items-center mt-12">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-primary font-bold text-xs text-yellow leading-4">
                                                                    {{ $item->testi_name }}
                                                                </h5>
                                                                <span
                                                                    class="font-primary font-bold text-xs text-primary leading-4">
                                                                    {!! $item->testi_subtitle !!}
                                                                </span>
                                                            </div>
                                                            <div class="w-24 h-24 rounded-full">
                                                                @if ($item->testi_thumbnail)
                                                                    <img data-original="{{ asset('uploaded_files/testimonial/' . $item->testi_thumbnail) }}"
                                                                        alt="{{ $item->testi_thumbnail }}"
                                                                        class="w-full h-full object-contain object-center">
                                                                @endif
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
                </div>

                {{-- Academic Preparation --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img data-original="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-primary font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Academic <br> Preparation</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($academic_preparation as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container h-full py-6">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <div
                                                            class="font-primary font-semibold text-xs text-primary text-justify leading-[18px]">
                                                            {!! $item->testi_desc !!}
                                                        </div>
                                                        <div class="flex justify-between mt-6">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-primary font-bold text-xs text-yellow leading-4">
                                                                    {{ $item->testi_name }}
                                                                </h5>
                                                                <div
                                                                    class="font-primary font-bold text-xs text-primary leading-4">
                                                                    {!! $item->testi_subtitle !!}
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
                </div>
            </div>

        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-primary font-extrabold text-primary text-center text-3xl mb-4 md:w-1/2">
                {{ __('pages/resources/testimonial.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}" class="my-btn">
                {{ __('pages/resources/testimonial.bottom_btn') }}
            </a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches

        var splides = document.querySelectorAll('.splide');

        for (var i = 0; i < splides.length; i++) {
            new Splide(splides[i], {
                type: 'slide',
                perPage: isLargeDevice ? 1 : 2,
                focus: 0,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }
    </script>
@endsection
