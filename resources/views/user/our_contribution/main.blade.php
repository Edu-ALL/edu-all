@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/our_contribution.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/our_contribution.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/our_contribution.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="-mt-16 pb-16 -z-10">
        <div class="relative flex w-full h-screen left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center h-full lg:max-w-xl lg:pt-[50px]">
                    <div class="flex-row">
                        <h1
                            class="font-bold font-newnewnewprimary text-4xl lg:text-6xl text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            {{ __('pages/about_us/our_contribution.title') }}
                        </h1>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/Partnership.webp') }}" alt="EduALL Our Contributor Banner"
                class="lazy w-full h-full object-cover object-center">
        </div>
    </section>

    {{-- ================================== Description Section  ================================== --}}
    <section class="py-10">
        <div class="flex flex-col items-start main-container md:flex-row">
            <div class="flex flex-col gap-y-6 mb-6 md:w-2/3 md:mb-0">
                <p class="font-primary text-lg text-primary text-justify">{{ __('pages/about_us/our_contribution.body') }}
                </p>
                <p class="font-primary font-bold text-4xl text-yellow">{{ __('pages/about_us/our_contribution.body_bold') }}
                </p>
                <p class="font-primary text-lg text-primary text-justify">Students are always encouraged to <b>DARE TO
                        DREAM</b>, and we try
                    our best to make everyone’s dream become true through education. ALL-in has created and engaged in
                    several programs to provide accessible higher education for both local and overseas study.</p>
            </div>
            <img data-original="{{ asset('assets/img/about/our-contribution/CSR-ASET-1.webp') }}" alt="EduALL csr Asset"
                class="object-contain md:pl-6 md:w-1/3 md:max-w-xs">
        </div>
    </section>

    {{-- ================================== Contribution List Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <ul class="flex flex-col gap-y-20">
                @foreach (__('pages/about_us/our_contribution.contribution_list') as $item)
                    <li class="flex flex-col gap-y-4">
                        <h2 class="font-primary font-bold text-2xl text-primary md:w-1/3 ">{{ $item['title'] }}</h2>
                        <div class="w-full md:w-fit">
                            <span
                                class="inline-block w-full px-4 font-primary font-semibold text-base text-primary text-center rounded-full bg-gradient-to-r from-[#fee0b0] to-[#e8b757] md:text-sm">{{ $item['date'] }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-4 md:flex-row">
                            <img data-original="{{ asset('assets/img/about/our-contribution/contribution-list-' . $loop->iteration . '.webp') }}"
                                alt="EduALL Contribution aset" class="object-contain md:w-1/3 ">
                            <div class="flex flex-col gap-y-6 mb-6 md:w-2/3 md:mb-0">
                                @foreach ($item['body'] as $body)
                                    <p class="font-primary text-lg text-primary text-justify">{{ $body }}</p>
                                @endforeach
                            </div>

                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
