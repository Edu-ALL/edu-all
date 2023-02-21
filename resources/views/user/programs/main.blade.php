@extends('layout.user.main')

@section('content')
    <section class="pb-16 -z-10 ">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container pt-16 lg:pt-28 ">
                <h1 class="font-semibold font-primary uppercase text-3xl lg:text-5xl text-white">
                    {{ __('pages/programs/programs.title') }}</h1>
            </div>

            <img data-original="{{ asset('assets/img/banner/Program banner.webp') }}" alt="Program Banner"
                class="lazy w-full h-[400px] object-cover object-center">

        </div>
    </section>

    <section class="main-container py-16 z-10">
        <div class="font-primary">
            <div class="flex flex-col gap-20 items-stretch">
                {{-- ------------------------------------ Banner Section ------------------------------------ --}}
                <div class="flex flex-col justify-center items-center max-w-3xl mx-auto mb-16">
                    @if (app()->getLocale() == 'en')
                        <img data-original="/assets/img/programs/payung.png" alt="4 pillars">
                    @else
                        <img data-original="/assets/img/programs/payung-id.png" alt="4 pillars">
                    @endif
                    <p class="text-center font-primary text-base lg:text-xl font-normal text-[#546999] mt-32">
                        {{ __('pages/programs/programs.body') }}</p>
                </div>
                <div class="sm:px-6">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach (__('pages/programs/programs.program_list') as $item)
                                <div class="program_card hover:rotate-program_card">
                                    <div class="front bg-program-image-{{ $loop->iteration }} bg-cover bg-center">
                                        <div
                                            class="bg-gradient-to-t from-primary via-transparent h-full to-yellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
                                            <h4 class="font-semibold text-3xl font-primary mb-4 leading-7">
                                                {{ $item['title'] }}
                                            </h4>
                                            <ul class="flex flex-col">
                                                @foreach ($item['points'] as $point)
                                                    <li class="inline-flex items-start gap-1.5">
                                                        <i class="fa-solid text-sm fa-circle-check mt-1 text-yellow"></i>
                                                        <p class="text-sm">{{ $point }}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="back face_back bg-gradient-to-t top-0 left-0 from-primary py-8 px-4 via-primary  to-[#7895C7]  text-white">
                                        <div class="flex flex-col justify-center items-center h-full">
                                            <p
                                                class="font-semibold text-base lg:text-lg font-primary mb-4 leading-7 text-center">
                                                {{ $item['body'] }}
                                            </p>
                                            <a href="{{ route('admissions_mentoring', ['locale' => app()->getLocale()]) }}"
                                                class="my-btn text-sm">View More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center pb-10">
                    <h5 class="text-yellow text-lg xl:text-2xl mb-4 font-bold">
                        {{ __('pages/programs/programs.sign_up_text') }}</h5>
                    <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}"
                        class="my-btn">{{ __('pages/programs/programs.sign_up_btn') }}</a>
                </div>
            </div>
        </div>
    </section>
@endsection
