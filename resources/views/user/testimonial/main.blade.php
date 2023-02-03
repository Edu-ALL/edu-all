@extends('layout.user.main')

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="font-body font-bold text-4xl text-[#6696E2] text-center">What Our Students Say</h2>
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
                            <svg width="140" height="140" viewBox="0 0 187 174" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.1"
                                    d="M52.6406 0.916016C55.8958 0.916016 59.151 1.72982 62.4062 3.35742C70.3815 7.10091 74.3691 12.8789 74.3691 20.6914C74.3691 23.7839 73.474 26.8763 71.6836 29.9688C60.7786 49.3372 52.8848 71.6354 48.002 96.8633C56.6283 99.1419 63.7083 103.781 69.2422 110.779C74.9388 117.615 77.7871 125.59 77.7871 134.705C77.7871 145.447 73.9622 154.643 66.3125 162.293C58.8255 169.78 49.7109 173.523 38.9688 173.523C28.2266 173.523 19.0306 169.78 11.3809 162.293C3.89388 154.643 0.150391 145.447 0.150391 134.705C0.150391 115.337 3.08008 94.3405 8.93945 71.7168C21.1465 24.5163 35.7135 0.916016 52.6406 0.916016ZM161.283 0.916016C164.538 0.916016 167.794 1.72982 171.049 3.35742C179.024 7.10091 183.012 12.8789 183.012 20.6914C183.012 23.7839 182.198 26.8763 180.57 29.9688C169.665 49.3372 161.771 71.6354 156.889 96.8633C165.515 99.1419 172.595 103.781 178.129 110.779C183.826 117.615 186.674 125.59 186.674 134.705C186.674 145.447 182.849 154.643 175.199 162.293C167.712 169.78 158.598 173.523 147.855 173.523C137.113 173.523 127.917 169.78 120.268 162.293C112.781 154.643 109.037 145.447 109.037 134.705C109.037 115.337 111.967 94.3405 117.826 71.7168C130.033 24.5163 144.519 0.916016 161.283 0.916016Z"
                                    fill="#F6921E" />
                            </svg>
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Admission <br> Mentoring</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="splide__slide__container h-full py-6">
                                                <div
                                                    class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                    <p
                                                        class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                        I
                                                        am
                                                        very much enjoying the program! My favorite part is that I can
                                                        not
                                                        just
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                    </p>
                                                    <div class="flex justify-between mt-12">
                                                        <h5 class="font-body font-bold text-sm text-yellow">Tristan
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="splide__slide__container h-full py-6">
                                                <div
                                                    class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                    <p
                                                        class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                        I
                                                        am
                                                        very much enjoying the program! My favorite part is that I can
                                                        not
                                                        just
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                    </p>
                                                    <div class="flex justify-between mt-12">
                                                        <h5 class="font-body font-bold text-sm text-yellow">Tristan
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="splide__slide__container h-full py-6">
                                                <div
                                                    class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                    <p
                                                        class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                        I
                                                        am
                                                        very much enjoying the program! My favorite part is that I can
                                                        not
                                                        just
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                        bootcamp helps me to know which part of computer science that I
                                                        would
                                                        like to take for my major. I can create a simple website now so
                                                        it
                                                        can
                                                        obviously get me to a better college because it shows that I
                                                        already
                                                        master a certain topic.
                                                    </p>
                                                    <div class="flex justify-between mt-12">
                                                        <h5 class="font-body font-bold text-sm text-yellow">Tristan
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                            <svg width="140" height="140" viewBox="0 0 187 174" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.1"
                                    d="M52.6406 0.916016C55.8958 0.916016 59.151 1.72982 62.4062 3.35742C70.3815 7.10091 74.3691 12.8789 74.3691 20.6914C74.3691 23.7839 73.474 26.8763 71.6836 29.9688C60.7786 49.3372 52.8848 71.6354 48.002 96.8633C56.6283 99.1419 63.7083 103.781 69.2422 110.779C74.9388 117.615 77.7871 125.59 77.7871 134.705C77.7871 145.447 73.9622 154.643 66.3125 162.293C58.8255 169.78 49.7109 173.523 38.9688 173.523C28.2266 173.523 19.0306 169.78 11.3809 162.293C3.89388 154.643 0.150391 145.447 0.150391 134.705C0.150391 115.337 3.08008 94.3405 8.93945 71.7168C21.1465 24.5163 35.7135 0.916016 52.6406 0.916016ZM161.283 0.916016C164.538 0.916016 167.794 1.72982 171.049 3.35742C179.024 7.10091 183.012 12.8789 183.012 20.6914C183.012 23.7839 182.198 26.8763 180.57 29.9688C169.665 49.3372 161.771 71.6354 156.889 96.8633C165.515 99.1419 172.595 103.781 178.129 110.779C183.826 117.615 186.674 125.59 186.674 134.705C186.674 145.447 182.849 154.643 175.199 162.293C167.712 169.78 158.598 173.523 147.855 173.523C137.113 173.523 127.917 169.78 120.268 162.293C112.781 154.643 109.037 145.447 109.037 134.705C109.037 115.337 111.967 94.3405 117.826 71.7168C130.033 24.5163 144.519 0.916016 161.283 0.916016Z"
                                    fill="#F6921E" />
                            </svg>
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Experiential <br> Learning</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="splide__slide__container py-6">
                                                <div
                                                    class="flex flex-col mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                    <p
                                                        class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                        I
                                                        am
                                                        very much enjoying the program! My favorite part is that I can
                                                        not
                                                        just
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                        bootcamp helps me to know which part of computer science that I
                                                        would
                                                        like to take for my major. I can create a simple website now so
                                                        it
                                                        can
                                                        obviously get me to a better college because it shows that I
                                                        already
                                                        master a certain topic.
                                                    </p>
                                                    <div class="flex justify-between items-center mt-12">
                                                        <div class="flex flex-col">
                                                            <h5 class="font-body font-bold text-sm text-yellow leading-4">
                                                                Tristan
                                                            </h5>
                                                            <span
                                                                class="font-body font-bold text-sm text-primary leading-4">Carrier
                                                                Bootcamp </span>
                                                        </div>
                                                        <div>
                                                            <div class="w-20 h-20 rounded-full bg-gray-300 "></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                            <svg width="140" height="140" viewBox="0 0 187 174" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.1"
                                    d="M52.6406 0.916016C55.8958 0.916016 59.151 1.72982 62.4062 3.35742C70.3815 7.10091 74.3691 12.8789 74.3691 20.6914C74.3691 23.7839 73.474 26.8763 71.6836 29.9688C60.7786 49.3372 52.8848 71.6354 48.002 96.8633C56.6283 99.1419 63.7083 103.781 69.2422 110.779C74.9388 117.615 77.7871 125.59 77.7871 134.705C77.7871 145.447 73.9622 154.643 66.3125 162.293C58.8255 169.78 49.7109 173.523 38.9688 173.523C28.2266 173.523 19.0306 169.78 11.3809 162.293C3.89388 154.643 0.150391 145.447 0.150391 134.705C0.150391 115.337 3.08008 94.3405 8.93945 71.7168C21.1465 24.5163 35.7135 0.916016 52.6406 0.916016ZM161.283 0.916016C164.538 0.916016 167.794 1.72982 171.049 3.35742C179.024 7.10091 183.012 12.8789 183.012 20.6914C183.012 23.7839 182.198 26.8763 180.57 29.9688C169.665 49.3372 161.771 71.6354 156.889 96.8633C165.515 99.1419 172.595 103.781 178.129 110.779C183.826 117.615 186.674 125.59 186.674 134.705C186.674 145.447 182.849 154.643 175.199 162.293C167.712 169.78 158.598 173.523 147.855 173.523C137.113 173.523 127.917 169.78 120.268 162.293C112.781 154.643 109.037 145.447 109.037 134.705C109.037 115.337 111.967 94.3405 117.826 71.7168C130.033 24.5163 144.519 0.916016 161.283 0.916016Z"
                                    fill="#F6921E" />
                            </svg>
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Academic <br> Preparation</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="splide__slide__container py-6">
                                                <div
                                                    class="flex flex-col mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                    <p
                                                        class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                        I
                                                        am
                                                        very much enjoying the program! My favorite part is that I can
                                                        not
                                                        just
                                                        learn but also practice to become a front and back developer,
                                                        and
                                                        this
                                                        bootcamp helps me to know which part of computer science that I
                                                        would
                                                        like to take for my major. I can create a simple website now so
                                                        it
                                                        can
                                                        obviously get me to a better college because it shows that I
                                                        already
                                                        master a certain topic.
                                                    </p>
                                                    <div class="flex justify-between mt-12">
                                                        <div class="flex flex-col">
                                                            <h5 class="font-body font-bold text-sm text-yellow leading-4">
                                                                Tristan
                                                            </h5>
                                                            <span
                                                                class="font-body font-bold text-sm text-primary leading-4">Carrier
                                                                Bootcamp</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
            <h2 class="font-body font-extrabold text-primary text-center text-3xl mb-4 md:w-1/2">
                SIGN UP FOR A FREE INITIAL CONSULTATION
            </h2>
            <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}" class="my-btn">More</a>
        </div>

    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.querySelectorAll('.splide');

        for (var i = 0; i < splides.length; i++) {
            new Splide(splides[i], {
                type: 'loop',
                perPage: isSmallDevice ? 1 : 2,
                focus: 0,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }
    </script>
@endsection
