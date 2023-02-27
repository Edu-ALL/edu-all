@extends('layout.user.main')

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="title" content="{{ $blog->seo_title }}">
    <meta name="description" content="{{ $blog->seo_desc }}">
    <meta name="keyword" content="{{ $blog->seo_keyword }}">
@endsection

@section('content')
    {{-- Header in Mobile  --}}
    <div class="fixed top-[-100px] left-0 w-full z-[999] shadow-lg bg-white main-container lg:flex lg:items-center lg:justify-between transition-all duration-500 min-h-[75px]"
        id="blog_navbar">
        <h1 class="font-primary font-extrabold text-sm text-primary md:text-2xl text-[14.5px] lg:text-start text-center">
            {{ $blog->blog_title }}
        </h1>
        <div class="flex lg:justify-end justify-center items-center gap-1 lg:relative absolute bottom-[8px] left-0 lg:w-[20%] w-[100%] h-100">
            <div class="share share_button bg-primary text-white lg:py-2 py-1  px-4 rounded-2xl lg:text-[12px] text-[9px] cursor-pointer hover:bg-primary/20 hover:text-gray-600 shadow-lg"
                onclick="share_sosmed('open')">
                <i class="fa fa-send lg:mr-2 mr-0" aria-hidden="true"></i> Share
            </div>
            <div class="share share_icon hidden">
                <div class="ss-box ss-circle ss-shadow" data-ss-social="twitter, facebook, linkedin, share, whatsapp"
                    data-ss-content="false"></div>
            </div>
            <div class="share share_close bg-red-600 text-white lg:py-2 py-[7px] lg:px-3 px-[10px] mt-[3px] rounded-full lg:text-[10px] text-[6px] cursor-pointer hover:bg-primary/20 hover:text-gray-600 shadow-lg hidden"
                onclick="share_sosmed('close')">
                <i class="fa fa-x" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <section class="pt-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-8">
                <h1 class="font-primary font-extrabold text-3xl text-primary text-center md:text-5xl">
                    {{ $blog->blog_title }}
                </h1>
                <div class="flex flex-col justify-between items-center gap-4 md:flex-row">
                    <div class="">
                        @if ($blog->mentor)
                            <div class="flex items-center gap-4">
                                <img data-original="{{ asset('uploaded_files/mentor/' . $blog->mentor->created_at->format('Y') . '/' . $blog->mentor->created_at->format('m') . '/' . $blog->mentor->mentor_picture) }}"
                                    alt="{{ $blog->mentor->mentor_alt }}"
                                    class="w-8 h-8 rounded-full object-cover object-top">
                                {{-- change author name with mentor name --}}
                                <span class="font-primary text-base text-primary">
                                    {{ $blog->mentor->mentor_firstname }} {{ $blog->mentor->mentor_lastname }}
                                </span>
                                <div class="hidden w-px h-4 bg-primary md:block"></div>
                            </div>
                        @endif
                        @if (!empty($blog->duration_read))
                            <i class="fa fa-book mr-1" aria-hidden="true"></i>
                            <span class="font-inter text-base text-primary">{{ $blog->duration_read }}
                                {{ __('pages/blog.min_read') }}</span>
                            <div class="hidden w-px h-4 bg-primary md:block"></div>
                        @endif
                        <span class="font-primary text-base text-primary">
                            <i class="fa fa-calendar-o mr-1" aria-hidden="true"></i>
                            {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="share share_button bg-primary text-white p-2 px-4 rounded-2xl text-[12px] cursor-pointer hover:bg-primary/20 hover:text-gray-600 shadow-lg"
                            onclick="share_sosmed('open')">
                            <i class="fa fa-send mr-2" aria-hidden="true"></i> Share
                        </div>
                        <div class="share share_icon hidden">
                            <div class="ss-box ss-circle ss-shadow"
                                data-ss-social="twitter, facebook, linkedin, share, whatsapp" data-ss-content="false"></div>
                        </div>
                        <div class="share share_close bg-red-600 text-white p-2 px-3 rounded-full text-[10px] cursor-pointer hover:bg-primary/20 hover:text-gray-600 shadow-lg hidden"
                            onclick="share_sosmed('close')">
                            <i class="fa fa-x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-6 w-full">
                    <img data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                        alt="{{ $blog->blog_thumnail_alt }}" class="w-full h-60 object-cover md:h-96">
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
                                        class="font-primary text-sm text-[#9E9E9E] xl:text-base">{{ $blog_section }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>
            <div class="blog_style w-full flex flex-col md:w-4/5">
                {!! $blog->blog_description !!}
            </div>

        </div>
    </section>

    <section class="py-16 bg-primary">
        <div class="main-container flex flex-col items-center">
            <h2 class="mb-6 font-primary font-extrabold text-3xl text-white text-center md:text-5xl">
                {{ __('pages/blog.sign_up') }}
            </h2>
            <a href="{{ route('sign_me', app()->getLocale()) }}">
                <span class="px-8 py-1.5 font-primary text-base text-white text-center rounded-md bg-yellow">
                    {{ __('pages/blog.sign_up_btn') }}
                </span>
            </a>
        </div>
    </section>

    <section class="py-16">
        <div class="main-container flex flex-col">
            <h3 class="mb-12 font-primary font-extrabold text-4xl text-primary text-center ">
                {{ __('pages/blog.more_blog') }}
            </h3>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($recomendation_blogs as $blog)
                    <a href="{{ route('detail_blog', ['locale' => app()->getLocale(), 'blog' => $blog->slug]) }}"
                        class="block p-3 hover:bg-[#D9D9D9]" class="w-1/3">
                        <div class="flex flex-col gap-2">
                            <img data-original="{{ asset('uploaded_files/blogs/' . $blog->created_at->format('Y') . '/' . $blog->created_at->format('m') . '/' . $blog->blog_thumbnail) }}"
                                alt="{{ $blog->blog_thumbnail_alt }}" class="h-72 object-cover object-center">
                            <div class="flex justify-between">
                                <span class="font-primary text-xs text-[#7C7C7C]">
                                    {{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}
                                </span>
                                <span class="font-primary text-xs text-[#7C7C7C]">
                                    {{ $blog->click_count }}
                                    <i class="fa-solid fa-eye ml-1"></i>
                                </span>
                            </div>
                            <h2
                                class="font-primary font-extrabold text-lg text-primary lg:text-xl lg:tracking-normal lg:leading-6">
                                {{ $blog->blog_title }}
                            </h2>
                            <p class="font-primary font-medium text-sm text-primary">
                                {{ html_entity_decode(substr(strip_tags($blog->blog_description), 0, 200)) }}...
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector("#blog_navbar");
            if (window.scrollY > 200) {
                navbar.classList.remove("top-[-100px]");
                navbar.classList.add("top-0");
            } else {
                navbar.classList.remove("top-0");
                navbar.classList.add("top-[-100px]");
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
            console.log(data);
            for (let index = 1; index <= paragraph.length; index++) {
                data.forEach(element => {
                    if (index == element.position) {
                        paragraph.eq(element.position - 1).append(
                            '<div class="px-5 py-5 border rounded-lg shadow-lg bg-zinc-100 mt-3">' +
                            '<h3 class="text-primary tracking-wide">' + element.title + '</h3>' +
                            '<hr class="py-1">' +
                            '<div class="widget-desc">' +
                            element.description +
                            '</div>' +
                            '<div class="flex justify-end">' +
                            '<a href="' + element.link +
                            '" class="bg-primary hover:bg-yellow hover:no-underline px-4 py-2 rounded-lg text-white text-sm" target="_blank">' +
                            'Read More <i class="fas fa-arrow-right ml-2"></i>' +
                            '</a>' +
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

        @media only screen and (max-width: 600px) {
            .ss-circle .ss-btn {
            min-width: 15px !important;
            }

            .ss-btn {
                margin: 0 3px !important;
                font-size: 9px !important;
                padding: 5px 8px !important;
            }
        }
    </style>
@endsection
