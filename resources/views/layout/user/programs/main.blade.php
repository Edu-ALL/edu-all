@extends('layout.user.main')

@section('content')
    <section class="main-container">
        <div class="pt-10 pb-32 2xl:mx-48 font-primary">
            <div class="flex flex-col gap-20 items-stretch">
                <h1 class="heading-1 py-40">{{ __('pages/programs/prgrams.title') }}</h1>
                <div class="flex flex-col justify-center items-center max-w-3xl mx-auto mb-16">
                    @if (app()->getLocale() == 'en')
                        <img src="/assets/img/programs/payung.png" alt="payung png" class="">
                    @else
                        <img src="/assets/img/programs/payung-id.png" alt="payung png" class="">
                    @endif
                    <p class="text-center font-primary text-base lg:text-xl font-normal text-text mt-32">
                        {{ __('pages/programs/prgrams.body') }}</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="program-card hover:rotate-program-card">
                        <div class="program-face-card bg-program-image-1 bg-cover bg-center">
                            <div
                                class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col justify-end">
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
                                class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col justify-end">
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
                                class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-light flex flex-col justify-end">
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
                </div>
                <div class="flex flex-col items-center">
                    <h5 class="text-yellow text-lg xl:text-2xl mb-4 font-bold">
                        {{ __('pages/programs/prgrams.sign_up_text') }}</h5>
                    <a href="#" class="my-btn">{{ __('pages/programs/prgrams.sign_up_btn') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
