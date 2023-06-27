@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/about_us/mentor.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/about_us/mentor.meta_title') }}" />
    <meta name="description" content="{{ __('pages/about_us/mentor.meta_description') }}" />
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-20 flex items-center justify-start h-screen bg-mentor-header bg-cover bg-center">
        <div class="main-container">
            <div class="flex flex-col">
                <h1 class="mb-4 font-primary font-bold text-4xl text-white md:mb-8 md:text-6xl">
                    {{ __('pages/about_us/mentor.banner_title') }}</h1>
                <div class="mb-6 w-full font-primary font-medium text-lg text-white  lg:max-w-xl md:mb-12">
                    {!! __('pages/about_us/mentor.benner_body') !!}
                </div>
                <a href="#mentor">
                    <span
                        class="px-10 py-2 font-primary font-semibold text-base text-white rounded-md bg-yellow">{{ __('pages/about_us/mentor.banner_btn') }}</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section id="mentor" class="py-20">
        <div class="main-container lg:max-w-7xl lg:mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:gap-12">
                @foreach ($allin_mentor as $mentor)
                    <div class="mentor_card flex flex-col rounded-xl">
                        <div class="front relative cursor-pointer w-full rounded-lg shadow-lg overflow-hidden">
                            <div class="absolute left-4 right-4 bottom-4 flex flex-col justify-between z-20">
                                <h3 class="font-primary font-bold text-2xl text-white leading-5">
                                    {!! strpos($mentor->mentor_fullname, ' ') == 0
                                        ? $mentor->mentor_fullname
                                        : substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) .
                                            '<br>' .
                                            substr($mentor->mentor_fullname, strpos($mentor->mentor_fullname, ' ') + 1) !!}
                                </h3>
                                <div class="mt-4 font-primary text-xs text-white leading-4 overflow-hidden">
                                    {!! $mentor->mentor_graduation !!}
                                </div>
                            </div>
                            <img data-original="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center">
                        </div>
                        <div
                            class="back overflow-hidden flex justify-center items-center w-full p-8 rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                            <div class="flex flex-col items-center justify-center">
                                <div
                                    class="mb-6 w-full h-full font-primary font-medium text-base text-white text-center text-ellipsis ">
                                    {{ html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 150)) }}...
                                </div>
                                <a href="{{ route('detail_mentor', ['locale' => $locale, 'slug' => $mentor->mentor_slug]) }}"
                                    class="flex-inline px-4 py-2 font-primary font-medium text-base text-white text-center rounded-md bg-yellow">
                                    {{ __('pages/about_us/mentor.get_to_know') }}
                                    {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}

                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mentor List Section --}}
    <section class="pt-32 pb-10">
        <div class="main-container lg:max-w-7xl lg:mx-auto flex flex-col">
            <h2 class="mb-8 font-primary font-bold text-4xl text-primary text-center">
                {{ __('pages/about_us/mentor.mentor_building_title') }}
            </h2>
            <div class="splide" role="group">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                        <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                        <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                    </button>
                </div>
                <div class="splide__track  py-20">
                    <ul class="splide__list">
                        @foreach ($building_mentor as $mentor)
                            <li class="splide__slide">
                                <div class="splide__slide__container px-4 w-full h-full">
                                    <div class="mentor_card flex flex-col group">
                                        <div
                                            class="front relative cursor-pointer w-full rounded-lg shadow-lg overflow-hidden">
                                            <div
                                                class="absolute left-4 right-4 bottom-4 flex flex-col justify-between z-20">
                                                <h3 class="font-primary font-bold text-2xl text-white leading-5">
                                                    {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                                                    <br>
                                                    {{ substr($mentor->mentor_fullname, strpos($mentor->mentor_fullname, ' ') + 1) }}
                                                </h3>
                                                <div class="mt-4 font-primary text-xs text-white leading-4 overflow-hidden">
                                                    {!! $mentor->mentor_graduation !!}
                                                </div>
                                            </div>
                                            <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                                                alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center" loading="lazy">
                                        </div>
                                        <div
                                            class="back w-full h-full px-10 py-20  flex items-center justify-center rounded-xl bg-gradient-to-b from-primary to-[#070E36]">
                                            <div class="flex flex-col items-center">
                                                <div class="mb-8">
                                                    <h5 class="font-primary font-bold text-xl text-yellow text-center">
                                                        {{ __('pages/about_us/mentor.card_current_work') }}
                                                    </h5>
                                                    <div
                                                        class="font-primary font-medium text-lg text-white text-center leading-5">
                                                        {!! $mentor->currently_working !!}
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="font-primary font-bold text-xl text-yellow text-center">
                                                        {{ __('pages/about_us/mentor.card_expertise') }}
                                                    </h5>
                                                    <div
                                                        class="font-primary font-medium text-lg text-white text-center leading-5">
                                                        {!! $mentor->expertise !!}
                                                    </div>
                                                </div>
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
    </section>

    {{-- Bottom Section --}}
    <section class="py-10">
        <div class="main-container lg:max-w-7xl lg:mx-auto">
            <div class="flex flex-col items-center">
                <h2 class="mb-8 font-primary font-bold text-4xl text-primary text-center">
                    {{ __('pages/about_us/mentor.bottom_title') }}
                </h2>
                <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                    <span class="px-10 py-2 font-primary font-medium text-base text-white rounded-md bg-yellow">
                        {{ __('pages/about_us/mentor.bottom_btn') }}
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches

        var splide = new Splide('.splide', {
            perPage: isSmallDevice ? 1 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[90%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.width = '7px';
                item.button.style.height = '7px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
