@extends('layout.user.main')

@section('content')
    {{-- ========================================== Banner Section ========================================== --}}
    <div class="relative w-full left-0 overflow-hidden">
        <section class="splide" aria-labelledby="carousel-heading"  id="home_banner">
            <div class="splide__track">
                <ul class="splide__list ">
                    @foreach ($banners as $banner)
                        <li class="splide__slide relative">
                            <img class="object-bottom object-cover w-full h-full"
                                src="{{ asset('assets/img/home/' . $banner->banner_img) }}" alt="{{ $banner->banner_alt }}">
                            <div
                                class="absolute-center top-0 -ml-1 bg-gradient-to-r w-full h-full from-primary/90 flex items-center md:items-start md:pt-32">
                                <div class="px-8 lg:px-40 2xl:px-44 font-primary">
                                    <h2
                                        class="text-3xl font-medium text-white  mb-6 sm:text-4xl  lg:text-5xl lg:w-[70%] xl:w-[55%]">
                                        {{ $banner->banner_title }}</h2>
                                    <p
                                        class="text-sm font-normal text-white w-[90%] sm:text-lg lg:text-xl lg:w-[70%] xl:w-[55%]">
                                        {!! $banner->banner_description !!}
                                    </p>
                                    <a href="{{ $banner->banner_link }}"
                                        class="inline-block mt-10 bg-secondary py-2.5 px-8 rounded-lg font-bold text-white text-base capitalize">{{ $banner->banner_button }}</a>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>

            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20 -rotate-2">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
        {{-- <img src="{{ asset('assets/img/home/wave.svg') }}" alt=""
            class="absolute bottom-0 object-cover -mb-2 h-[100px] object-center sm:object-right md:h-[150px] lg:h-[300px]"> --}}
    </div>

    {{-- ========================================== Benefits Section ======================================= --}}
    <section class="relative mx-6 md:h-0">
        <div
            class="max-w-3xl w-full bg-white rounded-lg shadow-[0px_0px_10px_5px] shadow-black/20 md:absolute-center md:-top-[350px]">
            <div class="flex flex-col px-4 py-8 gap-x-4 gap-y-6 md:gap-y-14 md:flex-row">
                <div class="flex flex-1 flex-col items-center gap-6">
                    <img src="{{ asset('assets/img/home/home_Illustration_1.png') }}" alt="ilustration 1" class="w-[120px]">
                    <h4 class="font-primary text-xl font-semibold text-center text-secondary ">Aspire</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">Mengeksplor minat dan passion siswa melalui
                        bimbingan
                        terpersonalisasi</p>
                </div>
                <div class="min-h-full w-[1px] bg-[#b6b6b6]"></div>
                <div class="flex flex-1 flex-col items-center gap-6 ">
                    <img src="{{ asset('assets/img/home/home_Illustration_2.png') }}" alt="ilustration 1" class="w-[120px]">
                    <h4 class="font-primary text-xl font-semibold text-center text-secondary ">Aspire</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">Memandu siswa untuk memperbaiki prestasi
                        akademis dan memperkaya portfolio mereka dengan pembelajaran terapan</p>
                </div>
                <div class="min-h-full w-[1px] bg-[#b6b6b6]"></div>
                <div class="flex flex-1 flex-col items-center gap-6 ">
                    <img src="{{ asset('assets/img/home/home_Illustration_3.webp') }}" alt="ilustration 1" class="w-[120px]">
                    <h4 class="font-primary text-xl font-semibold text-center text-secondary ">Aspire</h4>
                    <p class="font-primary text-sm text-center text-[#7A7A7A]">Menempatkan siswa ke universitas impian dan
                        tercocok untuk mempertajam potensi mereka sebagai calon pemimpin</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== About Us Section ======================================= --}}
    <section class="max-w-4xl w-full px-6 mx-auto my-20">
        <div class="flex flex-col items-center">
            <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-secondary">Tentang Kami</h2>
            <p class="mb-6 font-primary font-medium text-base text-center text-[#7A7A7A]">Kami membimbing siswa yang ingin
                melanjutkan pendidikan tinggi di luar negeri dan menempatkan mereka di universitas-universitas yang paling
                cocok. Kami menyediakan bimbingan mentoring yang sesuai dengan kebutuhan anda, dimanapun anda berada.</p>
            <a href="#"
                class="inline-block px-6 py-2 mb-10 font-primary font-semibold text-base text-white capitalize bg-yellow rounded-[4px]">pelajari
                lebih lanjut</a>

            <div class="grid grid-cols-2 justify-center gap-y-8 md:grid-cols-3">
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_1.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_2.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_3.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_4.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_5-1.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
                <div class="flex flex-col items-center p-4">
                    <img src="{{ asset('assets/img/home/Icon_6.png') }}" alt="icon 1" class="mb-4">
                    <p class="font-primary text-sm text-[#7A7A7A] text-center">100% Students placed
                        at target universities</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== Program Section ======================================= --}}
    <section class="py-10">
        <div class="max-w-3xl w-full mx-auto px-6 mb-10 flex flex-col items-center">
            <h2 class="mb-6 font-primary font-semibold text-2xl text-center text-secondary">Our Program</h2>
            <p class="mb-6 font-primary font-medium text-base text-center text-[#7A7A7A]">We offer end-to-end university
                prep
                programs: academic and extra-curricular planning, essay / resume writing, interview prep, test prep,
                internship
                placement, personal project mentoring and other university application requirements.</p>
        </div>
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="program-card hover:rotate-program-card">
                    <div class="program-face-card bg-program-image-1 bg-cover bg-center">
                        <div
                            class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col pt-[230px] lg:pt-[250px]">
                            <h4 class="font-semibold text-3xl font-secondary mb-4 leading-7">
                                {{ __('pages/programs/prgrams.program_1') }}
                            </h4>
                            <ul class="flex flex-col">
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm  fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Undergraduate Admission Mentoring</p>
                                </li>
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Graduate Admission Mentoring</p>
                                </li>
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm fa-circle-check text-yellow"></i>
                                    <p class="text-sm">University Transfer admission mentoring</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-secondary  text-light">
                        <div class="flex flex-col justify-center items-center h-full">
                            <p class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                non-academic walk-through to help you get into your dream universities.
                            </p>
                            <a href="#" class="my-btn text-sm">View More</a>
                        </div>
                    </div>
                </div>
                <div class="program-card hover:rotate-program-card">
                    <div class="program-face-card bg-program-image-2 bg-cover bg-center">
                        <div
                            class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col pt-[230px] lg:pt-[250px]">
                            <h4 class="font-semibold text-3xl font-secondary mb-4 leading-7">
                                {{ __('pages/programs/prgrams.program_2') }}
                            </h4>
                            <ul class="flex flex-col">
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm  fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Undergraduate Admission Mentoring</p>
                                </li>
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Graduate Admission Mentoring</p>
                                </li>
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm fa-circle-check text-yellow"></i>
                                    <p class="text-sm">University Transfer admission mentoring</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-secondary  text-light">
                        <div class="flex flex-col justify-center items-center h-full">
                            <p class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                non-academic walk-through to help you get into your dream universities.
                            </p>
                            <a href="#" class="my-btn text-sm">View More</a>
                        </div>
                    </div>
                </div>
                <div class="program-card hover:rotate-program-card">
                    <div class="program-face-card bg-program-image-3 bg-cover bg-center">
                        <div
                            class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col pt-[230px] lg:pt-[250px]">
                            <h4 class="font-semibold text-3xl font-secondary mb-4 leading-7">
                                {{ __('pages/programs/prgrams.program_3') }}
                            </h4>
                            <ul class="flex flex-col">
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm  fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Undergraduate Admission Mentoring</p>
                                </li>
                                <li class="inline-flex items-start gap-1.5">
                                    <i class="fa-solid text-sm fa-circle-check text-yellow"></i>
                                    <p class="text-sm">Graduate Admission Mentoring</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-secondary  text-light">
                        <div class="flex flex-col justify-center items-center h-full">
                            <p class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                non-academic walk-through to help you get into your dream universities.
                            </p>
                            <a href="#" class="my-btn text-sm">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                height: isSmallDevice ? '70vh' : '105vh',
                wheel: false,
                isNavigation: false,
                arrows: false,
                type: 'fade',
                autoplay: true,
                lazyload: true,
                interval: 5000,
                pauseOnHover: true
            });

            splide.mount();
        });
    </script>
    <style>
        #home_banner .splide__pagination {
            display: flex;
            flex-direction: column;
            left:95% !important;
            bottom: 80vh;
        }
    </style>
@endsection
