@extends('layout.user.main')

@section('content')
    <section class="pb-16 -z-10 ">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container pt-16 lg:pt-28 ">
                <h1 class="font-semibold font-primary uppercase text-3xl lg:text-5xl text-white">
                    {{ __('pages/programs/prgrams.title') }}</h1>
            </div>

            <img src="{{ asset('assets/img/programs/junior-ferreira-7esRPTt38nI-unsplash.jpg') }}" alt=""
                class="lazy w-full h-[30vh] lg:h-[500px] object-cover object-center">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                class="absolute bottom-0 object-cover -mb-2 object-center sm:object-right scale-y-150 scale-x-[200%] -ml-20">
                <path fill="#fff" fill-opacity="1"
                    d="M0,192L40,192C80,192,160,192,240,170.7C320,149,400,107,480,128C560,149,640,235,720,224C800,213,880,107,960,58.7C1040,11,1120,21,1200,58.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="main-container py-16 z-10">
        <div class="font-primary">
            <div class="flex flex-col gap-20 items-stretch">
                {{-- ------------------------------------ Banner Section ------------------------------------ --}}

                <div class="flex flex-col justify-center items-center max-w-3xl mx-auto mb-16">
                    @if (app()->getLocale() == 'en')
                        <img src="/assets/img/programs/payung.png" alt="4 pillars">
                    @else
                        <img src="/assets/img/programs/payung-id.png" alt="4 pillars">
                    @endif
                    <p class="text-center font-primary text-base lg:text-xl font-normal text-[#546999] mt-32">
                        {{ __('pages/programs/prgrams.body') }}</p>
                </div>
                <div class="sm:px-6">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="program-card hover:rotate-program-card">
                                <div class="program-face-card bg-program-image-1 bg-cover bg-center">
                                    <div
                                        class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
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
                                    class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-[#7895C7]  text-white">
                                    <div class="flex flex-col justify-center items-center h-full">
                                        <p
                                            class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                            Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                            non-academic walk-through to help you get into your dream universities.
                                        </p>
                                        <a href="{{ route('admissions_mentoring', ['locale' => app()->getLocale()]) }}"
                                            class="my-btn text-sm">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="program-card hover:rotate-program-card">
                                <div class="program-face-card bg-program-image-2 bg-cover bg-center">
                                    <div
                                        class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
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
                                    class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-[#7895C7]  text-white">
                                    <div class="flex flex-col justify-center items-center h-full">
                                        <p
                                            class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                            Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                            non-academic walk-through to help you get into your dream universities.
                                        </p>
                                        <a href="{{ route('passion_project_mentoring', ['locale' => app()->getLocale()]) }}"
                                            class="my-btn text-sm">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="program-card hover:rotate-program-card">
                                <div class="program-face-card bg-program-image-3 bg-cover bg-center">
                                    <div
                                        class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
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
                                    class="program-face-card face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-[#7895C7]  text-white">
                                    <div class="flex flex-col justify-center items-center h-full">
                                        <p
                                            class="font-semibold text-base lg:text-lg font-secondary mb-4 leading-7 text-center">
                                            Personalized 1-on-1 mentoring service that will serve as a holistic academic and
                                            non-academic walk-through to help you get into your dream universities.
                                        </p>
                                        <a href="{{ route('academic_test_preparation', ['locale' => app()->getLocale()]) }}"
                                            class="my-btn text-sm">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center pb-10">
                    <h5 class="text-yellow text-lg xl:text-2xl mb-4 font-bold">
                        {{ __('pages/programs/prgrams.sign_up_text') }}</h5>
                    <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}"
                        class="my-btn">{{ __('pages/programs/prgrams.sign_up_btn') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
