@extends('layout.user.main')

@section('head')
    @foreach ($blogs as $blog)
        <meta name="title" content="{{ $blog->seo_title }}">
        <meta name="description" content="{{ $blog->seo_desc }}">
        <meta name="keyword" content="{{ $blog->seo_keyword }}">
    @endforeach
@endsection

@section('content')
    <section class="py-10 lg:py-20">
        <div class="flex flex-col main-container">
            <h1 class="mb-8 font-inter font-extrabold text-3xl text-primary text-center md:text-5xl">ALL-IN BLOG</h1>
            <div class="flex flex-col items-center lg:items-start">
                <div class="mb-6">
                    <span
                        class="px-4 py-2 font-inter font-bold text-sm text-white text-center rounded-md bg-primary lg:text-base">
                        @if ($is_top_update)
                            Top Update
                        @else
                            Top Choice
                        @endif

                    </span>
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
                                                <img src="{{ asset('uploaded_files/blogs/' . $blog->blog_thumbnail) }}"
                                                    alt="{{ $blog->blog_thumbnail_alt }}"
                                                    class="object-cover w-full h-full max-h-[60vh]">
                                            </div>
                                            <div
                                                class="flex flex-col justify-between w-full md:w-1/3 md:gap-y-6 lg:gap-y-12">
                                                <div class="mt-3 mb-5 flex flex-col gap-4">
                                                    <span class="font-inter text-sm text-[#7C7C7C]">
                                                        {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                                    </span>
                                                    <h2 class="font-inter font-extrabold text-xl text-primary lg:text-3xl">
                                                        {{ $blog->blog_title }}
                                                    </h2>
                                                    <p class="font-inter font-medium text-base text-primary">
                                                        {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 300)) }}...
                                                    </p>
                                                </div>
                                                <a href="{{ route('detail_blog', ['blog' => $blog->slug]) }}"
                                                    class="block my-5">
                                                    <span
                                                        class="px-4 py-2 font-secondary font-medium text-base text-white rounded-md bg-yellow">
                                                        Read More
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

    <section class="py-8">
        <div class="blog_page flex flex-col main-container">
            <div class="w-full mb-10">
                <ul class="horizontal_list flex items-center gap-x-4 py-6 overflow-x-auto">
                    <li class="flex-[0_0_auto]">
                        @if (request('category'))
                            <a href="{{ url(app()->getLocale()) }}/blog"
                                class="px-5 py-1.5 font-inter font-bold text-sm text-primary border-[1px] border-primary rounded-md ">
                                All
                            </a>
                        @else
                            <a href="{{ url(app()->getLocale()) }}/blog"
                                class="px-5 py-1.5 font-inter font-bold text-sm text-white border-[1px] border-primary rounded-md bg-primary">
                                All
                            </a>
                        @endif
                    </li>
                    @foreach ($blog_categories as $blog_category)
                        @if (request('category') == $blog_category->id)
                            <li class="flex-[0_0_auto]">
                                <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog_category->id]) }}"
                                    class="px-5 py-1.5 font-inter font-bold text-sm text-white border-[1px] border-primary rounded-md bg-primary">
                                    {{ $blog_category->category_name }}
                                </a>
                            </li>
                        @else
                            <li class="flex-[0_0_auto]">
                                <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog_category->id]) }}"
                                    class="px-5 py-1.5 font-inter font-bold text-sm text-primary border-[1px] border-primary rounded-md ">
                                    {{ $blog_category->category_name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($blogs as $blog)
                    <a href="{{ route('detail_blog', ['blog' => $blog]) }}" class="block p-3 hover:bg-[#D9D9D9]">
                        <div class="flex flex-col gap-2">
                            <img src="{{ asset('uploaded_files/blogs/' . $blog->blog_thumbnail) }}"
                                alt="{{ $blog->blog_thumbnail_alt }}" class="h-72 object-cover object-center">
                            <div class="flex justify-between">
                                <span class="font-inter text-xs text-[#7C7C7C]">
                                    {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                </span>
                                <span class="font-inter text-xs text-[#7C7C7C]">
                                    {{ $blog->click_count }}
                                    <i class="fa-solid fa-eye ml-1"></i>
                                </span>
                            </div>
                            <h2
                                class="font-inter font-extrabold text-lg text-primary lg:text-xl lg:tracking-normal lg:leading-6">
                                {{ $blog->blog_title }}
                            </h2>
                            <p class="font-inter font-medium text-sm text-primary">
                                {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 200)) }}...
                            </p>
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

@section('script')
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
@endsection
