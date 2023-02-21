@extends('layout.user.main')

@section('content')
    {{-- ========================================== Banner Section ========================================== --}}
    <section class="py-20 bg-sg-header bg-cover bg-center">
        <div class="main-container">
            <div class="py-28 flex flex-col md:py-52">
                <h1 class="font-primary font-bold text-7xl text-primary text-center md:text-8xl">ALL-in Eduspace</h1>
                <h4 class="font-primary font-bold text-3xl text-primary text-center">
                    Let's #TakeOnYourFuture! Remember, #itsALLINtheprep!
                </h4>
            </div>
        </div>
    </section>

    {{-- ========================================== Benefits Section ======================================= --}}
    <section class="relative mx-6 mt-8 md:h-0 md:mt-0">
        <div
            class="max-w-3xl w-full bg-white rounded-lg shadow-[0px_0px_10px_5px] shadow-black/20 md:absolute-center md:-top-[200px]">
            <div class="flex flex-col px-4 py-8 gap-x-4 gap-y-6 md:gap-y-14 md:flex-row">
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_1.png') }}" alt="ilustration 1" class="w-[120px]">
                    <h4 class="font-primary text-xl font-semibold text-center text-[#7895C7] ">Aspire</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">
                        Explore students’ passion &
                        interest through a
                        personalized mentorship
                    </p>
                </div>
                <div class="min-h-full w-[1px] bg-[#b6b6b6]"></div>
                <div class="flex flex-1 flex-col items-center gap-6 ">
                    <img src="{{ asset('assets/img/home/home_Illustration_2.png') }}" alt="ilustration 1" class="w-[120px]">
                    <h4 class="font-primary text-xl font-semibold text-center text-[#7895C7] ">Learn</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">
                        Guide students to improve their academic
                        performance & project portfolio through
                        experiential programs
                    </p>
                </div>
                <div class="min-h-full w-[1px] bg-[#b6b6b6]"></div>
                <div class="flex flex-1 flex-col items-center gap-6 ">
                    <img src="{{ asset('assets/img/home/home_Illustration_3.webp') }}" alt="ilustration 1"
                        class="w-[120px] md:mb-2">
                    <h4 class="font-primary text-xl font-semibold text-center text-[#7895C7] ">Lead</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">
                        Place students at their
                        best fit universities to
                        become future leaders
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== About Us Section ======================================= --}}
    <section class="pt-10 md:pt-40 max-w-4xl w-full px-6 mx-auto my-20">
        <div class="flex flex-col items-center">
            <h2 class="mb-6 font-primary font-bold text-2xl text-center text-primary">About Us</h2>
            <p class="w-full max-w-3xl mb-6 font-primary font-medium text-base text-center text-primary">
                ALL-in Eduspace is an independent university consultant specializing in developing hands-on exploration
                programs and university preparation advising for students age 13-18.
                <br>
                <br>
                We provide real-life experiences and professional skills needed, networking opportunities with professionals
                in various fields, project mentoring, and up to university application preparation.
            </p>
            <a href="#"
                class="inline-block px-6 py-2 mb-10 font-primary font-semibold text-base text-white capitalize bg-primary rounded-[4px] md:px-16">
                Find out more
            </a>

            <div class="grid grid-cols-1 justify-center gap-8 sm:grid-cols-2 md:grid-cols-3">
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 1.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        100% Students placed at target universities
                    </p>
                </div>
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 2.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        More than 40
                        <br> school Clients
                    </p>
                </div>
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 3.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        More than 1.000 Essays Reviewed
                    </p>
                </div>
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 4.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        More than 50 Corporate Partners
                    </p>
                </div>
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 5.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        150+ Point SAT Score Improvement

                    </p>
                </div>
                <div
                    class="flex flex-col justify-end items-center py-10 px-4 rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] ">
                    <img src="{{ asset('assets/img/home/sg/about us 6.webp') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary font-semibold text-lg text-yellow text-center">
                        More than 1.500 Event Participants
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Program Section ======================================= --}}
    <section class="py-10">
        <div class="main-container flex flex-col">
            <div class="max-w-3xl w-full mx-auto px-6 mb-10 flex flex-col items-center">
                <h2 class="mb-6 font-primary font-bold text-2xl text-center text-primary">Our Program</h2>
                <p class="w-full max-w-3xl mb-6 font-primary font-medium text-base text-center text-primary">
                    We offer end-to-end university prep programs: passion project mentoring in various fields, experiential
                    learning programs, career exploration programs, academic tutoring, and other university application
                    requirements.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 md:grid-cols-2">
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/Scientific Research.webp') }}" alt="Scientific Research"
                        class="rounded-xl">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/Entrepreneurship.webp') }}" alt="Entrepreneurship"
                        class="rounded-xl">
                </a>
            </div>
            <div class="max-w-3xl w-full mx-auto grid grid-cols-1 gap-x-16 gap-y-8 mt-12 md:grid-cols-3">
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/LOGO Career bootcamp.webp') }}" alt="Career Bootcamp Logo"
                        class="rounded-xl">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/LOGO CEP.webp') }}" alt="CEP Logo" class="rounded-xl">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/Logo GIP.webp') }}" alt="GIP Logo" class="rounded-xl">
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== Success Story Section ======================================= --}}
    <section class="py-16 bg-primary">
        <div class="max-w-3xl w-full mx-auto flex flex-col items-center gap-8">
            <div class="flex flex-col">
                <h2 class="mb-6 font-primary font-bold text-2xl text-center text-white">Success Stories</h2>
                <p class="font-primary font-medium text-base text-center text-white">
                    Our mentees have thrived in their own field that they are passionate about, confirmed their best-fit
                    major and paved the way to top universities around the world.
                </p>
            </div>
            <div class="mt-6 p-8 mx-6 rounded-xl bg-white md:mx-0 md:grid-cols-3">
                <a href="#">
                    <img src="{{ asset('assets/img/home/sg/university logo.png') }}" alt="Career Bootcamp Logo"
                        class="rounded-xl">
                </a>
            </div>
            <a href="#"
                class="inline-block px-6 py-2 mb-10 font-primary font-semibold text-base text-white capitalize bg-yellow rounded-[4px] md:px-16">
                More
            </a>
        </div>
    </section>

    {{-- ========================================== What They Say Section ======================================= --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <div class="flex flex-col max-w-2xl mb-8">
                <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-[#7895C7]">
                    {{ __('pages/home.testi') }}
                </h2>
            </div>
            <div class="w-full py-5">
                <div class="splide" aria-label="Slide Container Example">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -16px">
                            <img src="{{ asset('assets/logo/arrow-left.png') }}" class="w-4">
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -16px">
                            <img src="{{ asset('assets/logo/arrow-right.png') }}" class="w-4">
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
                                                <img src="{{ asset('assets/logo/quote.png') }}" class="w-8 mb-6">
                                                <div class="font-primary text-base text-white text-justify">
                                                    {!! $testi->testi_desc !!}
                                                </div>
                                            </div>
                                            <div class="mt-12 flex flex-col">
                                                <div class="font-primary font-semibold text-2xl text-yellow">
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
            <a href="{{ route('testimonial', app()->getLocale()) }}" class="flex justify-center w-full pt-8">
                <span
                    class="block max-w-[200px] w-full px-4 py-2 rounded-md bg-primary font-primary font-semibold text-base text-white text-center">
                    {{ __('pages/home.testi_btn') }}
                </span>
            </a>
        </div>
    </section>

    {{-- ========================================== Bottom Section ======================================= --}}
    <section class="py-10">
        <div class="main-container max-w-5xl w-full mx-auto">
            <div class="flex flex-col items-center">
                <h2 class="font-primary font-extrabold text-4xl text-primary text-center">
                    250+ students have found their
                    passion and got into their dream universities.
                </h2>
                <h4 class="mt-8 font-primary font-bold text-2xl text-yellow text-center">
                    Now let's talk with mentors who will help you achieve yours.
                </h4>
                <a href="#"
                    class="inline-block mt-8 px-6 py-2 mb-10 font-primary font-semibold text-base text-white text-center capitalize bg-[#F91A0C] rounded-[4px] md:px-16">
                    Book Free Assessment
                </a>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches
        var isLargeDevice = window.matchMedia("(max-width: 1024px)").matches
        var isVeryLargeDevice = window.matchMedia("(max-width: 1280px)").matches

        var splides = document.getElementsByClassName('splide');

        new Splide(splides[0], {
            perPage: isSmallDevice ? 1 : isMediumDevice ? 2 : isLargeDevice ? 2 : isVeryLargeDevice ?
                4 : 3,
            rewind: true,
            arrows: false
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[103%]');

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
