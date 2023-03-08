@extends('layout.user.main')

@section('content')
    {{-- ================================== Banner Section  ================================== --}}
    <section class="pb-16 -z-10">
        <div class="relative flex w-full left-0 overflow-hidden">
            <div class="absolute main-container w-full h-full lg:bg-primary/50">
                <div class="flex flex-col justify-center items-center h-full lg:max-w-3xl lg:mx-auto">
                    <h1
                        class="font-semibold font-primary capitalize text-4xl text-white tracking-widest text-center md:text-left">
                        {{ __('pages/success_stories/success_stories.title') }}
                    </h1>
                    <p class="mt-5 font-primary font-normal text-xl text-white text-center">
                        {!! __('pages/success_stories/success_stories.desc') !!}</p>
                </div>
            </div>

            <img data-original="{{ asset('assets/img/banner/Success Stories Banner.webp') }}" alt="success story banner"
                class="w-full h-[400px] object-cover object-center">
        </div>
    </section>

    {{-- ================================== Success Story Section  ================================== --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col gap-x-16 max-w-6xl mx-auto">
                @foreach ($success_stories as $item)
                    @if ($loop->index % 2 == 0)
                        <div class="flex flex-col items-center gap-x-10 mb-20 md:flex-row">
                            <div class="w-full md:w-1/3">
                                <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->thumbnail_alt }}">
                            </div>
                            <div class="flex flex-col w-full md:w-2/3">
                                <h2 class="font-primary font-semibold text-4xl text-primary text-center md:text-left">
                                    {{ $item->name }}</h2>
                                <div class="flex flex-col flex-wrap gap-3 mt-8 mb-2 md:flex-row">
                                    <span
                                        class="px-6 font-primary font-semibold text-base text-center text-primary rounded-full bg-gradient-to-r from-[#fddfaf] to-[#e8b757]">{{ $item->badge_1 }}</span>
                                    @if ($item->badge_2 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-white rounded-full bg-gradient-to-r from-[#e58d52] to-[#e4b252]">{{ $item->badge_2 }}</span>
                                    @endif

                                    @if ($item->badge_3 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-primary rounded-full bg-gradient-to-r from-[#fddfaf] to-[#e8b757]">{{ $item->badge_3 }}</span>
                                    @endif

                                    @if ($item->badge_4 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-white rounded-full bg-gradient-to-r from-[#e58d52] to-[#e4b252]">{{ $item->badge_4 }}</span>
                                    @endif
                                </div>

                                <div
                                    class="success_stories_desc mb-4 font-primary font-medium text-base text-primary leading-[26px]">
                                    {!! $item->description !!}
                                </div>
                                @if ($item->video_link != null)
                                    <a href="{{ $item->video_link }}"
                                        class="self-start my-6 px-6 py-2 font-primary font-medium text-base text-white rounded-xl bg-yellow">
                                        Learn More
                                    </a>
                                @endif
                                <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->achievement_image) }}"
                                    alt="{{ $item->achievement_alt }}">
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col items-center gap-x-10 mb-20 md:flex-row">
                            <div class="flex flex-col w-full order-2 md:order-1 md:w-2/3">
                                <h2 class="font-primary font-semibold text-4xl text-primary text-center md:text-left">
                                    {{ $item->name }}
                                </h2>
                                <div class="flex flex-col flex-wrap gap-3 mt-8 mb-2 md:flex-row">
                                    <span
                                        class="px-6 font-primary font-semibold text-base text-center text-primary rounded-full bg-gradient-to-r from-[#acd0e9] to-[#d4e3fa]">{{ $item->badge_1 }}</span>
                                    @if ($item->badge_2 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-white rounded-full bg-gradient-to-r from-[#0d1d61] to-[#0d427f]">{{ $item->badge_2 }}</span>
                                    @endif

                                    @if ($item->badge_3 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-primary rounded-full bg-gradient-to-r from-[#acd0e9] to-[#d4e3fa]">{{ $item->badge_3 }}</span>
                                    @endif

                                    @if ($item->badge_4 != null)
                                        <span
                                            class="px-6 font-primary font-semibold text-base text-center text-white rounded-full bg-gradient-to-r from-[#0d1d61] to-[#0d427f]">{{ $item->badge_4 }}</span>
                                    @endif
                                </div>
                                <div
                                    class="success_stories_desc mb-4 font-primary font-medium text-base text-primary leading-[26px]">
                                    {!! $item->description !!}
                                </div>
                                @if ($item->video_link != null)
                                    <a href="{{ $item->video_link }}"
                                        class="self-start my-6 px-6 py-2 font-primary font-medium text-base text-white rounded-xl bg-primary">Learn
                                        More</a>
                                @endif
                                <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->achievement_image) }}"
                                    alt="{{ $item->achievment_alt }}">
                            </div>
                            <div class="w-full order-1  md:order-2 md:w-1/3">
                                <img data-original="{{ asset('uploaded_files/success-stories/' . $item->created_at->format('Y') . '/' . $item->created_at->format('m') . '/' . $item->thumbnail) }}"
                                    alt="{{ $item->thumbnail_alt }}">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="pt-10 pb-20">
        <div class="main-container">
            <div class="flex flex-col gap-4 max-w-5xl mx-auto">
                <h4 class="mt-10 mb-8 font-primary font-extrabold text-3xl text-yellow text-center leading-9">
                    {{ __('pages/success_stories/success_stories.bottom_title') }}</h4>
                <div class="flex flex-col justify-center items-center gap-y-14 gap-x-6 md:flex-row">
                    <a href="{{ route('programs', ['locale' => app()->getLocale()]) }}">
                        <span
                            class="px-20 py-4 font-primary font-semibold text-xl text-white text-center rounded-full bg-yellow border-[3px] border-yellow md:mb-0 ">
                            {{ __('pages/success_stories/success_stories.program_btn') }}
                        </span>
                    </a>
                    <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}">
                        <span
                            class="px-20 py-4 font-primary font-semibold text-xl text-yellow text-center rounded-full border-[3px] border-yellow ">
                            {{ __('pages/success_stories/success_stories.register_btn') }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
