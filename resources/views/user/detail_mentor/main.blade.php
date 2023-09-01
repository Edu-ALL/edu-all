@extends('layout.user.main')

@section('head')
    <title>{{ $mentor->mentor_fullname }}{{ __('pages/about_us/mentor.meta_title_detail') }}</title>
    <meta name="title" content="{{ $mentor->meta_title != '' ? $mentor->meta_title : $mentor->mentor_fullname . '' . __('pages/about_us/mentor.meta_title_detail') }}" />
    <meta name="description" content="{{ $mentor->meta_desc != '' ? html_entity_decode($mentor->meta_desc) : html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 150)) . '...' }}">
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-24 bg-cover bg-center">
        <div class="main-container">
            <div class="grid grid-cols-1 items-center gap-x-14 gap-y-8 md:grid-cols-5">
                <div
                    class="relative justify-self-end max-w-sm w-full mx-auto rounded-lg shadow-lg overflow-hidden md:mx-0 md:col-span-2 xl:row-span-2">
                    <div class="absolute left-4 right-4 bottom-4 flex flex-col justify-between z-20">
                        <h3 class="font-primary font-bold text-3xl text-white leading-7">
                            {!! strpos($mentor->mentor_fullname, ' ') == 0
                                ? $mentor->mentor_fullname
                                : substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) .
                                    '<br>' .
                                    substr($mentor->mentor_fullname, strpos($mentor->mentor_fullname, ' ') + 1) !!}
                        </h3>
                        <div class="mt-4 font-primary text-sm text-white leading-4">
                            {!! $mentor->mentor_graduation !!}
                        </div>
                    </div>
                    <img data-original="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                        alt="Allineduspace {{ $mentor->mentor_alt }}" class="w-full bg-cover bg-center">
                </div>
                <div class="md:col-span-5 md:-order-1 xl:col-span-3 xl:order-none xl:row-span-1 xl:self-end">
                    <h1 class="font-primary font-bold text-4xl text-primary text-center md:text-6xl xl:text-start">
                        {{ __('pages/about_us/mentor.get_to_know') }}
                        {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}
                    </h1>
                </div>
                <div class="w-full flex flex-col md:col-span-3 xl:row-span-1 xl:self-start">
                    <div class="mb-6 w-full font-primary font-medium text-base text-primary text-justify">
                        {!! $mentor->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recent Video Section --}}
    <section class="py-10">
        <div class="main-container flex flex-col">
            <h2 class="mb-8 font-primary font-extrabold text-4xl text-primary text-left">
                {{ __('pages/about_us/mentor.recent_videos') }}
            </h2>
            @if (count($mentor->mentor_video) > 1)
                <div class="splide" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-primary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-primary"></i>
                        </button>
                    </div>
                    <div class="splide__track py-8">
                        <ul class="splide__list">
                            @foreach ($mentor->mentor_video as $video)
                                <li class="splide__slide">
                                    <div class="splide__slide__container w-full h-full px-4">
                                        <iframe width="100%" height="315"
                                            src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            @elseif(count($mentor->mentor_video) == 1)
                <div class="w-full h-full">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/{{ $mentor->mentor_video[0]->youtube_id }}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            @else
                <h2 class="mb-8 font-primary font-extrabold text-base text-primary text-center">
                    {{ __('pages/about_us/mentor.video_not_found') }}
                </h2>
            @endif
        </div>
    </section>

    {{-- Bottom Section --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="mb-4 font-primary font-extrabold text-4xl text-primary text-center">
                    {{ __('pages/about_us/mentor.bottom_detail_title') }}
                    {{ substr($mentor->mentor_fullname, 0, strpos($mentor->mentor_fullname, ' ')) }}!
                </h2>
                <p class="max-w-2xl mb-8 font-primary font-medium text-base text-primary text-center">
                    {{ __('pages/about_us/mentor.bottom_detail_body') }}
                </p>
                <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                    <span class="px-10 py-2 font-primary font-medium text-base text-white rounded-md bg-yellow">
                        {{ __('pages/about_us/mentor.bottom_detail_btn') }}
                    </span>
                </a>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var splide = new Splide('.splide', {
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[110%]');

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
