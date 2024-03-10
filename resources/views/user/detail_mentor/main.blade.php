@extends('layout.user.main')

@section('head')
    <title>{{ $mentor->mentor_fullname }}{{ __('pages/about_us/mentor.meta_title_detail') }}</title>
    <meta name="title"
        content="{{ $mentor->meta_title != '' ? $mentor->meta_title : $mentor->mentor_fullname . '' . __('pages/about_us/mentor.meta_title_detail') }}" />
    <meta name="description"
        content="{{ $mentor->meta_desc != '' ? html_entity_decode($mentor->meta_desc) : html_entity_decode(substr(strip_tags($mentor->short_desc), 0, 150)) . '...' }}">
@endsection

@section('content')
    {{-- Header Section --}}
    <section class="py-24 bg-cover bg-center">
        <div class="main-container">
            <div class="grid grid-cols-1 items-center gap-x-14 gap-y-8 md:grid-cols-5">
                <div
                    class="relative justify-self-end max-w-sm w-full mx-auto rounded-lg shadow-lg md:mx-0 md:col-span-2 xl:row-span-2 mt-[10rem]">
                    <div class="flex flex-col shadow-md relative bg-white">
                        {{-- Mentor Image --}}
                        <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                            alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center absolute -top-[15rem]">
                        <div class="flex flex-col px-4 mt-[16rem] overflow-visible relative">
                            <ul class="flex flex-col gap-2 my-5">
                                @if ($mentor->value_1)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[1rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_1 }}
                                        </h4>
                                    </li>
                                @endif
                                @if ($mentor->value_2)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[1rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_2 }}
                                        </h4>
                                    </li>
                                @endif
                                @if ($mentor->value_3)
                                    <li class="flex items-start gap-4">
                                        <div class="w-4 h-4">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                                        fill="#000000"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <h4 class="font-newprimary text-[1rem] font-semibold text-dark leading-5">
                                            {{ $mentor->value_3 }}
                                        </h4>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-5 md:-order-1 xl:col-span-3 xl:order-none xl:row-span-1 xl:self-end">
                    <h1 class="font-newprimary font-bold text-4xl text-dark text-center md:text-6xl xl:text-start">
                        {{ $mentor->mentor_fullname }}
                    </h1>
                    <span class="font-newprimary text-newprimary text-xl text-start">
                        {!! $mentor->mentor_graduation !!}
                    </span>
                </div>
                <div class="w-full flex flex-col md:col-span-3 xl:row-span-1 xl:self-start">
                    <div class="mb-6 w-full font-newprimary font-medium text-base text-dark text-justify">
                        {!! $mentor->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recent Video Section --}}
    <section class="py-10">
        <div class="main-container flex flex-col">
            <h2 class="mb-8 font-newprimary font-extrabold text-4xl text-newprimary text-left">
                {{ __('pages/about_us/mentor.recent_videos') }}
            </h2>
            @if (count($mentor->mentor_video) > 1)
                <div class="splide video" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
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
                <h2 class="mb-8 font-newprimary font-extrabold text-base text-newprimary text-center">
                    {{ __('pages/about_us/mentor.video_not_found') }}
                </h2>
            @endif
        </div>
    </section>

    {{-- Recent Article --}}
    <section class="py-16">
        <div class="main-container flex flex-col">
            <h2 class="mb-8 font-newprimary font-extrabold text-4xl text-newprimary text-left">
                {{ __('pages/about_us/mentor.recent_articles') }}
            </h2>
            @if (count($mentor->mentor_video) > 0)
                <div class="splide article" role="group">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left text-3xl text-newprimary"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right text-3xl text-newprimary"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($mentor->blog as $blog)
                                <li class="splide__slide">
                                    <div class="splide__slide__container px-4 w-full h-full">
                                        <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                                            class="block p-3 hover:bg-[#D9D9D9]" class="w-1/3">
                                            <div class="flex flex-col gap-2">
                                                <img data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                                    alt="EduALL {{ $blog->blog_thumbnail_alt }}"
                                                    class="h-72 object-cover object-center">
                                                <div class="flex justify-between">
                                                    <span class="font-newprimary text-xs text-[#7C7C7C]">
                                                        {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                                    </span>
                                                    <span class="font-newprimary text-xs text-[#7C7C7C]">
                                                        {{ $blog->click_count }}
                                                        <i class="fa-solid fa-eye ml-1"></i>
                                                    </span>
                                                </div>
                                                <h2
                                                    class="pt-2 font-newprimary font-bold text-lg text-newprimary lg:text-xl lg:tracking-normal lg:leading-6">
                                                    {{ $blog->blog_title }}
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
                <h2 class="mb-8 font-newprimary font-extrabold text-base text-newprimary text-center">
                    {{ __('pages/about_us/mentor.article_not_found') }}
                </h2>
            @endif
        </div>
        </div>
    </section>

    {{-- ================================== Bottom Section  ================================== --}}
    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-4 font-newprimary font-extrabold text-4xl text-white text-center">
                {{ __('pages/about_us/mentor.bottom_detail_title') }}
                {{ $mentor->mentor_fullname }}!
            </h2>
            <p class="max-w-2xl mb-8 font-newprimary font-medium text-base text-white text-center">
                {{ __('pages/about_us/mentor.bottom_detail_body') }}
            </p>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                <span class="px-10 py-2 font-newprimary font-medium text-base text-white bg-red">
                    {{ __('pages/about_us/mentor.bottom_detail_btn') }}
                </span>
            </a>
        </div>
    </section>

@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 768px)").matches

        var article = new Splide('.article', {
            perPage: isMediumDevice ? 1 : 3,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        article.on('pagination:mounted', function(data) {
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

        var video = new Splide('.video', {
            perPage: isMediumDevice ? 1 : 2,
            perMove: 1,
            arrows: isMediumDevice ? false : true,
            pagination: isMediumDevice ? true : false,
        });

        video.on('pagination:mounted', function(data) {
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
