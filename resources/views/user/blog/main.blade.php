@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/blog.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/blog.meta_title') }}" />
    <meta name="description" content="{{ __('pages/blog.meta_description') }}" />
@endsection

@section('head')
    @foreach ($blogs as $blog)
        <meta name="title" content="{{ $blog->seo_title }}">
        <meta name="description" content="{{ $blog->seo_desc }}">
        <meta name="keyword" content="{{ $blog->seo_keyword }}">
    @endforeach
@endsection

@section('content')
    <section class="pt-10 lg:py-20">
        <div class="flex flex-col main-container">
            <h1 class="mb-8 font-newprimary font-bold text-3xl text-newprimary text-center md:text-5xl">
                {{ __('pages/blog.top_title') }}
            </h1>
            <div class="flex flex-col items-center lg:items-start">
                <div class="mb-8 w-full flex flex-col items-center justify-between gap-4 md:flex-row">
                    <span
                        class="px-4 py-2 font-newprimary font-bold text-sm text-dark text-center bg-newyellow lg:text-base rounded-lg">
                        @if ($is_top_update)
                            {{ __('pages/blog.top_update') }}
                        @else
                            {{ __('pages/blog.top_choice') }}
                        @endif
                    </span>
                    <form action="{{ route('blogs', ['locale' => app()->getLocale(), '#blog-category']) }}" method="GET"
                        class="inline-flex justify-end w-full max-w-md">
                        <input type="search" name="search" placeholder="Search..." id="search"
                            class=" border-primary font-newprimary font-medium normal-case text-newprimary focus:border-primary focus:ring-primary placeholder-transparent absolute w-[55px] transition-all duration-500 rounded-lg">
                        <button type="button" class="px-4 py-2 relative z-10 mt-[1px] transition-all duration-500"
                            onclick="getSearch()" id="search_button">
                            <i class="fa-solid fa-magnifying-glass fa-xl text-newprimary"></i>
                        </button>
                    </form>
                </div>
                <div class="splide w-full" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev" style="background: transparent; left: -48px">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next" style="background: transparent; right: -48px">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($top_blogs as $blog)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <div class="flex flex-col gap-6 md:flex-row">
                                            <div class="w-full md:w-2/3">
                                                <img data-src="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                                    alt="EduALL {{ $blog->blog_thumbnail_alt }}"
                                                    class="object-cover w-full h-full max-h-[60vh] lazyload">
                                            </div>
                                            <div
                                                class="flex flex-col justify-between w-full md:w-1/3 md:gap-y-6 lg:gap-y-12">
                                                <div class="mt-3 mb-5 flex flex-col gap-4">
                                                    <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog->blog_category->slug, '#blog-category']) }}"
                                                        class="inline-flex self-start px-3 py-1 font-newprimary font-semibold text-sm text-newprimary border border-newprimary hover:bg-newprimary/10 rounded-lg">
                                                        {{ $blog->blog_category->category_name }}
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        @if ($blog->mentor)
                                                            <div class="flex items-center gap-1">
                                                                <div
                                                                    class="w-8 h-8 text-center text-white rounded-full overflow-hidden">
                                                                    <img src="{{ Storage::url('mentor/' . $blog->mentor->created_at->format('Y') . '/' . $blog->mentor->created_at->format('m') . '/' . $blog->mentor->mentor_picture) }}"
                                                                        alt="EduALL" class="w-full object-cover">
                                                                </div>
                                                                {{-- change author name with mentor name --}}
                                                                <a href="{{ route('detail_mentor', ['locale' => $locale, 'slug' => $blog->mentor->mentor_slug]) }}"
                                                                    target="_blank">
                                                                    <span
                                                                        class="font-newprimary text-base text-[#7C7C7C] md:text-[15px] text-[11px] leading-3 hover:text-yellow">
                                                                        {{ $blog->mentor->mentor_fullname }}
                                                                    </span>
                                                                </a>
                                                                <div class="hidden w-px h-4 bg-newprimary md:block"></div>
                                                            </div>
                                                        @endif
                                                        {{-- <span class="font-newprimary text-sm text-[#7C7C7C]">
                                                            {{ strftime('%B %d, %Y', strtotime($blog->publish_date)) }}
                                                        </span> --}}
                                                        <span class="font-newprimary text-sm text-[#7C7C7C]">
                                                            {{ $blog->duration_read }} {{ __('pages/blog.min_read') }}
                                                        </span>
                                                        <div class="hidden w-px h-4 bg-[#7C7C7C] md:block"></div>
                                                        <span class="font-newprimary text-xs text-[#7C7C7C] text-right">
                                                            {{ count($blog->blog_read) }}
                                                            <i class="fa-solid fa-eye ml-1"></i>
                                                        </span>
                                                    </div>
                                                    <a
                                                        href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}">
                                                        <h2
                                                            class="font-newprimary font-bold text-xl text-newprimary hover:text-yellow lg:text-3xl leading-10">
                                                            {{ html_entity_decode($blog->blog_title) }}
                                                        </h2>
                                                    </a>
                                                    <p class="font-newprimary font-medium text-base text-dark leading-8">
                                                        {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 300)) }}...
                                                    </p>
                                                </div>
                                                <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                                                    class="block my-5">
                                                    <span
                                                        class="px-4 py-2 font-newprimary font-bold text-sm text-white bg-newprimary rounded-lg">
                                                        {{ __('pages/blog.top_button') }}
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16" id="blog-category">
        <div class="blog_page flex flex-col main-container">
            <div class="w-full mb-10">
                <ul class="horizontal_list flex items-center gap-x-1 py-6 overflow-x-auto">
                    <li class="flex-[0_0_auto]">
                        <a href="{{ route('blogs', ['locale' => app()->getLocale(), '#blog-category']) }}"
                            class="px-5 py-1.5 font-newprimary font-bold text-sm border-[1px] border-newprimary rounded-lg  {{ request('category') ? 'text-newprimary' : 'bg-newprimary text-white' }} ">
                            {{ __('pages/blog.category_all') }}
                        </a>
                    </li>
                    @foreach ($blog_categories as $blog_category)
                        <li class="flex-[0_0_auto]">
                            <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog_category->slug, '#blog-category']) }}"
                                class="px-5 py-1.5 font-newprimary font-bold text-sm border-[1px] border-newprimary rounded-lg  {{ request('category') == $blog_category->slug ? 'bg-newprimary text-white' : 'text-newprimary' }}">
                                {{ $blog_category->category_name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @if (count($blogs) == 0)
                <h3 class="text-center">Article Not Found !</h3>
            @endif
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($blogs as $blog)
                    <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                        class="block p-3 hover:bg-[#D9D9D9] rounded-lg">
                        <div class="flex flex-col gap-2 h-full justify-between">
                            <img  data-src="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                alt="EduALL {{ $blog->blog_thumbnail_alt }}" class="h-72 object-cover object-center rounded-lg lazyload">
                            <div class="flex items-center justify-between gap-2">
                                <span class="inline-flex font-newprimary font-semibold text-xs text-yellow ">
                                    {{ $blog->blog_category->category_name }}
                                </span>
                                <div class="flex items-center gap-2">
                                    @if ($blog->duration_read)
                                        <span class="font-newprimary text-sm text-[#7C7C7C]">
                                            {{ $blog->duration_read }} {{ __('pages/blog.min_read') }}
                                        </span>
                                        <div class="w-px h-4 bg-[#7C7C7C] md:block"></div>
                                    @endif
                                    <span class="font-newprimary text-xs text-[#7C7C7C] text-right">
                                        {{ count($blog->blog_read) }}
                                        <i class="fa-solid fa-eye ml-1"></i>
                                    </span>
                                </div>
                            </div>
                            <h2
                                class="pt-2 pb-1 font-newprimary font-bold text-lg text-newprimary lg:text-xl lg:tracking-normal lg:leading-7">
                                {{ $blog->blog_title }}
                            </h2>
                            <p class="font-newprimary font-normal text-md text-newprimary leading-7">
                                {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 125)) }}...
                            </p>
                            <div class="flex justify-between items-center">
                                @if ($blog->mentor)
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-8 h-8 text-center text-white rounded-full overflow-hidden bg-newprimary">
                                            <img src="{{ Storage::url('mentor/' . $blog->mentor->created_at->format('Y') . '/' . $blog->mentor->created_at->format('m') . '/' . $blog->mentor->mentor_picture) }}"
                                                alt="EduALL" class="w-full object-cover">
                                        </div>
                                        <div class="text-newprimary">
                                            {{ $blog->mentor->mentor_fullname }}
                                        </div>
                                    </div>
                                @endif
                                {{-- <div class="flex items-center gap-2">
                                    <span class="font-newprimary text-sm text-[#7C7C7C]">
                                        {{ strftime('%B %d, %Y', strtotime($blog->publish_date)) }}
                                    </span>
                                </div> --}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="py-16">
                {{ $blogs->links('layout.user.pagination') }}
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function getSearch() {
            let search = $('#search')
            let search_button = $('#search_button')
            if (search.hasClass('w-[55px]')) {
                search.removeClass('placeholder-transparent')
                search.removeClass('w-[55px]')
                search.addClass('w-[350px]')
                search_button.html('<i class="fa-solid fa-xmark fa-xl text-red-900 px-[2px]"></i>');
                search.focus();
            } else {
                search.addClass('placeholder-transparent')
                search.addClass('w-[55px]')
                search.removeClass('w-[350px]')
                search_button.html('<i class="fa-solid fa-magnifying-glass fa-xl text-newprimary"></i>')
            }
        }
    </script>
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 1024px)").matches

        new Splide('.splide', {
            perMove: 1,
            arrows: isSmallDevice ? false : true,
            autoplay: true,
            lazyload: true,
            interval: 5000,
        }).on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');
            data.list.classList.add('top-[105%]');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = 'black';
            });
        }).mount();
    </script>
@endpush
