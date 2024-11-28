@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/programs.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/programs.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/programs.meta_description') }}" />
@endsection

@section('sub-navbar')
    <x-sub-navbar :menu="[
        [
            'title' => __('pages/navbar.programs.submenu.0.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.0.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.1.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.1.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.2.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.2.link'),
        ],
        [
            'title' => __('pages/navbar.programs.submenu.3.title'),
            'url' => '/' . __('pages/navbar.programs.submenu.3.link'),
        ],
    ]" title="{{ __('pages/programs/programs.title') }}" :string-limit="50" page="2" />
@endsection

@section('content')
    <section class="-z-10">
        <div class="relative flex w-full lg:h-screen h-[100vh] left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-transparent bg-[#0000FF]/50">
                <div class="flex items-center justify-center h-full lg:pt-[50px] pt-[10vh]">
                    <div class="flex-row md:w-3/5 w-full">
                        <h1
                            class="font-bold text-banner-title text-white tracking-normal mb-3 lg:text-start text-center capitalize">
                            {{ __('pages/programs/programs.title') }}
                        </h1>
                        <p class="mt-2 font-normal text-banner-description text-white lg:text-start text-center">
                            {{ __('pages/programs/programs.body') }}
                        </p>
                    </div>
                </div>
            </div>

            <img loading="lazy" src="{{ asset('assets/img/banner/Our_Program.webp') }}" alt="EduALL Program Banner"
                class="lazy w-full h-full object-cover object-center">

        </div>
    </section>

    <section class="main-container py-16 z-10">
        <div class="font-newprimary">
            <div class="flex flex-col gap-20 items-stretch">
                {{-- ------------------------------------ Banner Section ------------------------------------ --}}
                <div class="flex flex-col justify-center items-center max-w-3xl mx-auto mb-16">
                    @if (app()->getLocale() == 'id')
                        <img src="{{ asset('assets/img/programs/payung-id.png') }}" alt="EduALL 4 pillars">
                    @else
                        <img src="{{ asset('assets/img/programs/payung.png') }}" alt="EduALL 4 pillars">
                    @endif

                </div>
                <div class="sm:px-6">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach (__('pages/programs/programs.program_list') as $item)
                                <div class="program_card hover:rotate-program_card">
                                    <div class="relative front bg-cover bg-center">
                                        <div
                                            class="bg-gradient-to-t from-newprimary via-transparent h-full to-newyellow/40 py-8 px-4 text-white flex flex-col pt-[230px] lg:pt-[200px] xl:pt-[250px]">
                                            <h4 class="font-semibold text-3xl font-newprimary mb-4 leading-7">
                                                {!! $item['title'] !!}
                                            </h4>
                                            <ul class="flex flex-col">
                                                @foreach ($item['points'] as $point)
                                                    <li class="inline-flex items-start gap-1.5">
                                                        <i class="fa-solid text-sm fa-circle-check mt-1 text-newyellow"></i>
                                                        <p class="text-sm">{{ $point }}</p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <img data-original="{{ asset('assets/img/programs/' . $item['img']) }}"
                                            alt="EduALL"
                                            class="absolute w-full h-full top-0 right-0 object-cover object-center -z-10">
                                    </div>
                                    <div
                                        class="back face_back bg-gradient-to-t top-0 left-0 from-newprimary py-8 px-4 via-newprimary  to-[#7895C7]  text-white">
                                        <div class="flex flex-col justify-center items-center h-full">
                                            <p
                                                class="font-semibold text-base lg:text-lg font-newprimary mb-4 leading-7 text-center">
                                                {{ $item['body'] }}
                                            </p>
                                            <x-button href="{{ route($item['route'], ['locale' => app()->getLocale()]) }}"
                                                title="View More" bg-color="red" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="w-full max-w-3xl mb-6 font-black text-white text-center text-section-title">
                {{ __('pages/programs/programs.sign_up_text') }}
            </h2>
            <x-button href="{{ route('sign_me_adm_mentoring', ['locale' => app()->getLocale()]) }}"
                title="{{ __('pages/programs/programs.sign_up_btn') }}" type='secondary' bg-color="red" />
        </div>
    </section>
@endsection
