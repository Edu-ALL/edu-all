@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/success_stories/success_stories.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/success_stories/success_stories.meta_title') }}" />
    <meta name="description" content="{{ __('pages/success_stories/success_stories.meta_description') }}" />
@endsection

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-4 -z-10">
        <div
            class="relative flex w-full left-0 overflow-hidden bg-success-stories-header pt-44 pb-36 main-container bg-left bg-cover md:bg-center">
            <div class="flex flex-col justify-center h-full">
                <h1 class="font-bold font-newprimary capitalize text-6xl text-white text-center md:text-left">
                    {{ __('pages/success_stories/success_stories.title') }}
                </h1>
                <p class="mt-5 font-newprimary font-semibold text-sm text-white max-w-lg text-center md:text-left">
                    {!! __('pages/success_stories/success_stories.desc') !!}
                </p>
            </div>
        </div>
    </section>

    {{-- ================================== Success Story Section  ================================== --}}
    <section class="py-4">
        <div class="main-container">
            <div class="flex gap-6 items-center justify-center">
                <a href="{{ route('success_stories', ['locale' => app()->getLocale(), 'category' => 'admission-mentoring']) }}"
                    class="font-bold {{ $tab_section == 'passion_project'
                        ? 'text-newprimary font-newprimary border-b-2 border-newprimary'
                        : 'bg-newprimary  text-white font-newprimary' }}">Admission
                    Mentoring</a>
                <a href="{{ route('success_stories', ['locale' => app()->getLocale(), 'category' => 'passion-project']) }}"
                    class="font-bold {{ $tab_section == 'passion_project'
                        ? 'bg-newprimary  text-white font-newprimary'
                        : 'text-newprimary font-newprimary border-b-2 border-newprimary' }}">Passion
                    Project</a>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="main-container">
            <div class="flex flex-col gap-y-16">
                @foreach ($success_stories as $item)
                    <div class="flex flex-col gap-9 items-end md:flex-row">
                        <div class="w-3/4 mx-auto md:w-5/12">
                            <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                alt="{{ $item->thumbnail_alt }}">
                        </div>
                        <div class="w-full md:w-7/12">
                            <div class="flex flex-col gap-1 items-start">
                                {{-- Name --}}
                                <h2 class="font-bold text-5xl font-newprimary">{{ $item->name }}</h2>
                                {{-- Bedge 1 --}}
                                <div class="font-newprimary text-newprimary text-base font-bold">
                                    {!! $item->badge_1 !!}
                                </div>
                                {{-- Bedge 2 --}}
                                <div class="mt-4 font-newprimary text-newprimary text-base">
                                    {!! $item->badge_2 !!}
                                </div>
                                {{-- Achievement --}}
                                @if ($tab_section != 'passion_project')
                                    <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->achievement_image) }}"
                                        alt="{{ $item->achievement_alt }}">
                                @endif
                                {{-- Short Description --}}
                                <div class="mt-4 font-newprimary text-base">
                                    {!! $item->summary_description !!}
                                </div>
                                {{-- Read More --}}
                                <button class="font-newprimary text-newprimary font-bold inline-flex items-center">
                                    Read More
                                    <div class="w-5">
                                        <svg fill="#120FFD" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrow-ios-forward">
                                                        <rect width="24" height="24" transform="rotate(-90 12 12)"
                                                            opacity="0"></rect>
                                                        <path
                                                            d="M10 19a1 1 0 0 1-.64-.23 1 1 0 0 1-.13-1.41L13.71 12 9.39 6.63a1 1 0 0 1 .15-1.41 1 1 0 0 1 1.46.15l4.83 6a1 1 0 0 1 0 1.27l-5 6A1 1 0 0 1 10 19z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-32">
                {{ $success_stories->links('layout.user.pagination') }}
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}

    <section class="mb-24 py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-semibold text-3xl text-white text-center md:text-4xl">
                {{ __('pages/success_stories/success_stories.bottom_title') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                <span class="px-8 md:px-12 py-1.5 font-bold font-newprimary text-base text-white text-center bg-newprimary">
                    {{ __('pages/success_stories/success_stories.register_btn') }}
                </span>
            </a>
        </div>
    </section>

@endsection
