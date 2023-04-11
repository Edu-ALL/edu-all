@extends('layout.user.main')
@section('head')
    <title>You can find articles about study abroad, university in USA, UK and Asia</title>
    <meta name="title" content="You can find articles about study abroad, university in USA, UK and Asia">
    <meta name="description"
        content="Read our updates and stories here in our blog page. You can find articles about study abroad, university in USA, UK and Asia" />
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
            <h1 class="mb-8 font-primary font-extrabold text-3xl text-primary text-center md:text-5xl">
                {{ __('pages/blog.top_title') }}
            </h1>
            <div class="flex flex-col items-center lg:items-start">
                <div class="mb-8 w-full flex flex-col items-center justify-between gap-4 md:flex-row">
                    <span
                        class="px-4 py-2 font-primary font-bold text-sm text-white text-center rounded-md bg-primary lg:text-base">
                        @if ($is_top_update)
                            {{ __('pages/blog.top_update') }}
                        @else
                            {{ __('pages/blog.top_choice') }}
                        @endif
                    </span>
                    <form action="{{ route('blogs', ['locale' => app()->getLocale(), '#blog-category']) }}" method="GET"
                        class="inline-flex justify-end w-full max-w-md">
                        <input type="search" name="search" placeholder="Search..." id="search"
                            class="rounded-md border-primary font-primary font-medium normal-case text-primary focus:border-primary focus:ring-primary absolute w-[55px] transition-all duration-500">
                        <button type="button"
                            class="px-4 py-2 rounded-md bg-primary hover:bg-yellow relative z-10 mt-[2px] transition-all duration-500"
                            onclick="getSearch()" id="search_button">
                            <i class="fa-solid fa-magnifying-glass fa-xl text-white"></i>
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
                                                <img data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                                    alt="Allineduspace {{ $blog->blog_thumbnail_alt }}"
                                                    class="object-cover w-full h-full max-h-[60vh]">
                                            </div>
                                            <div
                                                class="flex flex-col justify-between w-full md:w-1/3 md:gap-y-6 lg:gap-y-12">
                                                <div class="mt-3 mb-5 flex flex-col gap-4">
                                                    <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog->blog_category->slug, '#blog-category']) }}"
                                                        class="inline-flex self-start px-3 py-1 font-primary font-semibold text-sm text-primary rounded-md border border-primary hover:bg-primary/10">
                                                        {{ $blog->blog_category->category_name }}
                                                    </a>
                                                    <div class="flex items-center gap-2">
                                                        <span class="font-primary text-sm text-[#7C7C7C]">
                                                            {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                                        </span>
                                                        <div class="hidden w-px h-4 bg-[#7C7C7C] md:block"></div>
                                                        <span class="font-primary text-sm text-[#7C7C7C]">
                                                            {{ $blog->duration_read }} {{ __('pages/blog.min_read') }}
                                                        </span>
                                                    </div>
                                                    <h2
                                                        class="font-primary font-extrabold text-xl text-primary lg:text-3xl">
                                                        {{ $blog->blog_title }}
                                                    </h2>
                                                    <p class="font-primary font-medium text-base text-primary">
                                                        {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 300)) }}...
                                                    </p>
                                                </div>
                                                <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                                                    class="block my-5">
                                                    <span
                                                        class="px-4 py-2 font-primary font-medium text-base text-white rounded-md bg-yellow">
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
                            class="px-5 py-1.5 font-primary font-bold text-sm border-[1px] border-primary rounded-md {{ request('category') ? 'text-primary' : 'bg-primary text-white' }} ">
                            {{ __('pages/blog.category_all') }}
                        </a>
                    </li>
                    @foreach ($blog_categories as $blog_category)
                        <li class="flex-[0_0_auto]">
                            <a href="{{ route('blogs', ['locale' => app()->getLocale(), 'category' => $blog_category->slug, '#blog-category']) }}"
                                class="px-5 py-1.5 font-primary font-bold text-sm border-[1px] border-primary rounded-md {{ request('category') == $blog_category->slug ? 'bg-primary text-white' : 'text-primary' }}">
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
                        class="block p-3 hover:bg-[#D9D9D9]">
                        <div class="flex flex-col gap-2">
                            <img data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                alt="Allineduspace {{ $blog->blog_thumbnail_alt }}"
                                class="h-72 object-cover object-center">
                            <div class="flex justify-between">
                                <span class="font-primary text-xs text-[#7C7C7C]">
                                    {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                </span>
                                <div class="flex items-center gap-2">
                                    @if ($blog->duration_read)
                                        <span class="font-primary text-sm text-[#7C7C7C]">
                                            {{ $blog->duration_read }} {{ __('pages/blog.min_read') }}
                                        </span>
                                        <div class="hidden w-px h-4 bg-[#7C7C7C] md:block"></div>
                                    @endif
                                    <span class="font-primary text-xs text-[#7C7C7C] text-right">
                                        {{ $blog->click_count }}
                                        <i class="fa-solid fa-eye ml-1"></i>
                                    </span>
                                </div>
                            </div>
                            <h2
                                class="font-primary font-extrabold text-lg text-primary lg:text-xl lg:tracking-normal lg:leading-6">
                                {{ $blog->blog_title }}
                            </h2>
                            <span class="inline-flex font-primary font-semibold text-xs text-yellow">
                                {{ $blog->blog_category->category_name }}
                            </span>
                            <p class="font-primary font-medium text-sm text-primary">
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
        function getSearch() {
            let search = $('#search')
            let search_button = $('#search_button')
            if (search.hasClass('w-[55px]')) {
                search.removeClass('w-[55px]')
                search.addClass('w-[350px]')
                search_button.html('<i class="fa-solid fa-xmark fa-xl text-white px-[2px]"></i>');
                search.focus();
            } else {
                search.addClass('w-[55px]')
                search.removeClass('w-[350px]')
                search_button.html('<i class="fa-solid fa-magnifying-glass fa-xl text-white"></i>')
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
@endsection
