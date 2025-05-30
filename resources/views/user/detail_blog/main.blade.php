@extends('layout.user.main')

@section('head')
    <title>{{ $blog->blog_title }}</title>
    <meta property=og:url content="{{ url(app()->getLocale() . '/blog/' . $blog->slug) }}">
    <meta property=og:image
        content="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}">
    <meta property=og:title content="{{ $blog->blog_title }}">


    <meta name="title" content="{{ $blog->seo_title }}">
    <meta name="description" content="{{ $blog->seo_desc }}">
    <meta name="keyword" content="{{ $blog->seo_keyword }}">
@endsection

@section('content')
    <div id="blog_title_header"
        class="md:mt-28 mt-10 py-4 sticky flex flex-col items-center justify-center main-container transition-all md:flex-row md:justify-between">
        <h1 class="font-newprimary font-extrabold text-3xl text-newprimary text-center md:text-4xl">
            {{ $blog->blog_title }}
        </h1>
        <div class="share_container hidden justify-between items-center gap-1 ">
            <div class="share share_button flex items-center bg-newyellow text-dark  mt-2 md:mt-0 p-2 px-4 rounded-2xl text-[12px] cursor-pointer hover:bg-newprimary/20 hover:text-gray-600 shadow-lg"
                onclick="share_sosmed('open')">
                <i class="fa fa-share-alt-square md:mr-2" aria-hidden="true"></i> <span class="hidden md:inline-block">Share</span>
            </div>
            <div class="mt-2 share share_icon hidden">
                <div class="ss-box ss-circle ss-shadow" data-ss-social="twitter, facebook, linkedin, share, whatsapp"
                    data-ss-content="false"></div>
            </div>
            <div class="mt-2 share share_close bg-red-600 text-white p-2 px-3 rounded-full text-[10px] cursor-pointer hover:bg-newprimary/20 hover:text-gray-600 shadow-lg hidden text-black"
                onclick="share_sosmed('close')">
                <i class="fa fa-x" aria-hidden="true"></i>
            </div>
        </div>
    </div>


    <section class="md:pt-1 pt-0">
        <div class="main-container">
            <div class="flex flex-col gap-y-8">
                <div class="flex flex-col justify-between items-center md:gap-4 gap-2 md:flex-row">
                    <div class="flex flex-wrap items-center justify-center md:justify-around gap-3">
                        <div class="flex items-center gap-1">
                            @if ($blog->mentor)
                                <a href="{{ route('detail_mentor', ['locale' => $locale, 'slug' => $blog->mentor->mentor_slug]) }}"
                                    class="flex justify-center items-center">
                                    <div
                                        class="w-8 h-8 text-center bg-newprimary text-white rounded-full overflow-hidden  mr-2">
                                        <img src="{{ Storage::url('mentor/' . $blog->mentor->created_at->format('Y') . '/' . $blog->mentor->created_at->format('m') . '/' . $blog->mentor->mentor_picture) }}"
                                            class="w-full object-cover">
                                    </div>
                                    {{-- change author name with mentor name --}}
                                    <span
                                        class="font-newprimary text-base text-newprimary md:text-[15px] text-[11px] leading-3 hover:text-yellow">
                                        {{ $blog->mentor->mentor_fullname }}
                                    </span>
                                </a>
                                <div class="hidden w-px h-4 bg-newprimary md:block"></div>
                            @endif
                        </div>
                        @if (!empty($blog->duration_read))
                            <div class="flex items-center gap-2">
                                <i class="fa fa-book mr-1  text-newprimary" aria-hidden="true"></i>
                                <span class="font-inter text-base text-newprimary md:text-[15px] text-[11px] leading-3">
                                    {{ $blog->duration_read }}
                                    {{ __('pages/blog.min_read') }}</span>
                                <div class="hidden w-px h-4 bg-newprimary md:block"></div>
                            </div>
                        @endif
                        <div class="flex items-center gap-1">
                            <i class="fa fa-calendar-o mr-1 text-newprimary" aria-hidden="true"></i>
                            <span class="font-newprimary text-base text-newprimary md:text-[15px] text-[11px] leading-3">
                                {{ strftime('%B %d, %Y', strtotime($blog->publish_date)) }}
                            </span>
                        </div>
                    </div>
                    <div class="mt-4 share_container_bottom flex items-center gap-1">
                        <div class="share share_button bg-newyellow text-dark p-2 px-4 rounded-2xl text-[12px] cursor-pointer hover:bg-newprimary/20 hover:text-gray-600 shadow-lg"
                            onclick="share_sosmed('open')">
                            <i class="fa fa-share-alt-square mr-2" aria-hidden="true"></i> Share
                        </div>
                        <div class="share share_icon hidden">
                            <div class="ss-box ss-circle ss-shadow"
                                data-ss-social="twitter, facebook, linkedin, share, whatsapp" data-ss-content="false"></div>
                        </div>
                        <div class="share share_close bg-red-600 text-white p-2 px-3 rounded-full text-[10px] cursor-pointer hover:bg-newprimary/20 hover:text-gray-600 shadow-lg hidden text-black"
                            onclick="share_sosmed('close')">
                            <i class="fa fa-x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-6 w-full">
                    <img  data-src="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                        alt="EduALL {{ $blog->blog_thumnail_alt }}" class="w-full h-60 object-cover md:h-96 lazyload">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="main-container flex flex-col md:flex-row">
            <nav class="top-[20px] hidden w-1/5 mr-6 md:flex">
                <div class="sticky top-[5rem] h-fit">
                    <ul class="flex flex-col gap-4">
                        @foreach ($blog_section_list as $index => $blog_section)
                            <li class="w-full px-4 py-2 border-b">
                                <a href="#blog_title_{{ $index }}">
                                    <span
                                        class="font-secondary text-sm text-[#9E9E9E] xl:text-base">{{ $blog_section }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <div class="blog_style w-full flex flex-col md:w-4/5">

                {{-- <div class="flex p-4 border-t-4 border-[#233469] bg-gray-50 dark:bg-gray-800 dark:border-gray-600 shadow my-5 items-center"
                    role="alert">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-800 dark:text-gray-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3">
                        <div class="text-md font-bold text-gray-800 dark:text-gray-300">
                            A simple dark alert with an
                        </div>
                        <div class="text-sm font-medium text-gray-800 dark:text-gray-300">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium quidem magnam dignissimos
                            facere vel! Amet quo quidem, nulla soluta, a explicabo rerum voluptatum quasi fuga eaque,
                            aspernatur nam commodi. Suscipit.
                        </div>
                    </div>
                    <a href="#"
                        class="no-underline text-sm py-2 px-3 bg-gray-500 w-1/5 rounded-md text-white cursor-pointer text-center hover:bg-slate-300 font-medium ml-5"
                        style="text-decoration:none">
                        Read More
                    </a>
                </div> --}}


                {!! $blog->blog_description !!}
            </div>

        </div>
    </section>

    <section class="py-8 bg-dark bg-bottom-sign-up-banner bg-center bg-cover">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-newprimary font-extrabold text-3xl text-white text-center md:text-[38px]">
                {{ __('pages/blog.sign_up') }}
            </h2>
            <a href="{{ route('sign_me_adm_mentoring', app()->getLocale()) }}">
                <span class="px-8 md:px-12 py-1.5 font-newprimary text-base text-white text-center bg-newprimary">
                    {{ __('pages/blog.sign_up_btn') }}
                </span>
            </a>
        </div>
    </section>

    <section class="py-16">
        <div class="main-container flex flex-col">
            <h3 class="mb-12 font-newprimary font-bold text-4xl text-newprimary text-center ">
                {{ __('pages/blog.more_blog') }}
            </h3>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($recomendation_blogs as $blog)
                    <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'slug' => $blog->slug]) }}"
                        class="block p-3 hover:bg-[#D9D9D9]" class="w-1/3">
                        <div class="flex flex-col gap-2">
                            <img  data-src="{{ Storage::url('blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                alt="EduALL {{ $blog->blog_thumbnail_alt }}" class="h-72 object-cover object-center lazyload">
                            <div class="flex justify-between">
                                <span class="font-newprimary text-xs text-[#7C7C7C]">
                                    {{ strftime('%B %d, %Y', strtotime($blog->publish_date)) }}
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
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector("#blog_title_header");
            var share_container = document.querySelector(".share_container");
            var share_container_bottom = document.querySelector(".share_container_bottom");
            var main_navbar = document.querySelector("header");

            if (window.scrollY > 0) {
                main_navbar.classList.add('-translate-y-[120px]');
            } else {
                main_navbar.classList.remove('-translate-y-[120px]');
            }

            if (window.scrollY > 80) {
                share_container.classList.remove('hidden');
                share_container_bottom.classList.add('hidden');
                share_container.classList.add('flex');
                navbar.classList.add("blog_title_header_active");
            } else {
                share_container.classList.add('hidden');
                share_container_bottom.classList.remove('hidden');
                share_container.classList.remove('flex');
                navbar.classList.remove("blog_title_header_active");
            }
        });

        // Sosmed Share
        function share_sosmed(method) {
            $('.share').removeClass('hidden').addClass('hidden')
            if (method == "open") {
                $('.share_icon').removeClass('hidden')
                $('.share_close').removeClass('hidden')
            } else {
                $('.share').removeClass('hidden').addClass('hidden')
                $('.share_button').removeClass('hidden')
            }
        }

        // ambil seluruh tag blog section
        const blog_section_list = document.querySelectorAll('a[href^="#"]');

        // berikan event listener click
        blog_section_list.forEach(element => {
            element.addEventListener('click', () => {
                event.preventDefault();

                const href = element.getAttribute('href');
                const target = document.querySelector(href);

                // hitung offset (dimana offset adalah "top")
                const offsetTop = target.getBoundingClientRect().top + window.pageYOffset - 80;
                // tambahkan scroll to
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            })
        });

        function blog_widget() {
            let paragraph = $('.blog_style p')
            let data = {!! $blog_widgets !!}

            for (let index = 1; index <= paragraph.length; index++) {
                data.forEach(element => {
                    if (index == element.position) {
                        let button = element.button_name ? element.button_name : 'Read More'
                        let image = element.image ? '{{ Storage::url('') }}' + element.image : ''
                        let image_class = element.image ? 'flex-auto md:w-[300px] w-full' : 'hidden'
                        paragraph.eq(element.position - 1).append(
                            '<div class="p-4 bg-gray-100 mt-5 items-center rounded-2xl drop-shadow-xl border border-2 border-gray-100" role="alert">' +
                            '<div class="flex md:flex-row flex-col items-stretch gap-3">' +
                            '<div class="' + image_class + '">' +
                            '<img src="' + image +
                            '" class="w-full h-full object-cover object-center rounded-md">' +
                            '</div>' +
                            '<div class="flex-auto">' +
                            '<div class="text-md font-bold text-newprimary text-lg">' +
                            element.title +
                            '</div>' +
                            '<div class="text-sm text-gray-600 dark:text-gray-300 mt-2 -mb-3">' +
                            element.description +
                            '</div>' +
                            '<div class="flex justify-end">' +
                            '<a href="' + element.link +
                            '" target="_blank" type="button" class="text-sm bg-newyellow py-2 px-3 rounded-md text-white cursor-pointer font-medium" style="text-decoration:none">' +
                            button +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        )
                    }
                });
            }
        }

        blog_widget()
    </script>
    <style>
        .ss-circle .ss-btn {
            min-width: 20px !important;
        }

        .ss-btn {
            margin: 0 3px !important;
            font-size: 14px !important;
            padding: 5px 10px !important;
        }
    </style>
@endpush
