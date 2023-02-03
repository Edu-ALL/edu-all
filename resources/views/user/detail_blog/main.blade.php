@extends('layout.user.main')

@section('content')
    <section class="pt-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-8">
                <h1 class="font-inter font-extrabold text-3xl text-primary text-center md:text-5xl">
                    {{ $blog->blog_title }}
                </h1>
                <div class="flex flex-col justify-center items-center gap-4 md:flex-row">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('assets/img/blog/detail/author_photo.png') }}" alt="author" class="w-8">
                        {{-- change author name with mentor name --}}
                        <span class="font-inter text-base text-primary">author name</span>
                    </div>
                    <div class="hidden w-px h-4 bg-primary md:block"></div>
                    <span class="font-inter text-base text-primary">4 Min Read</span>
                    <div class="hidden w-px h-4 bg-primary md:block"></div>
                    <span
                        class="font-inter text-base text-primary">{{ strftime('%B %d, %Y', strtotime($blog->created_at)) }}</span>
                </div>
                <div class="mt-6 w-full">
                    <img src="{{ asset('uploaded_files/blogs/' . $blog->blog_thumbnail) }}"
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
                                    <span class="font-inter text-sm text-[#9E9E9E] xl:text-base">{{ $blog_section }}</span>
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
            <h2 class="mb-6 font-secondary font-extrabold text-3xl text-white text-center md:text-5xl">
                SIGN UP FOR A FREE INITIAL CONSULTATION
            </h2>
            <a href="#">
                <span class="px-8 py-1.5 font-secondary text-base text-white text-center rounded-md bg-yellow">More</span>
            </a>
        </div>
    </section>

    <section class="py-16">
        <div class="main-container flex flex-col">
            <h3 class="mb-12 font-secondary font-extrabold text-4xl text-primary text-center ">
                You may also like this
                article
            </h3>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($recomendation_blogs as $blog)
                    <a href="{{ route('detail_blog', ['blog' => $blog->id]) }}" class="block p-3 hover:bg-[#D9D9D9]"
                        class="w-1/3">
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
        </div>
        </div>
    </section>

    <script>
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
    </script>
@endsection
