@extends('layout.user.main')

@section('content')
    {{-- Header Section --}}
    <section class="py-24 bg-cover bg-center">
        <div class="main-container">
            <div class="flex flex-col items-center gap-y-8 md:flex-row">
                <div class="w-full rounded-lg shadow-lg overflow-hidden lg:w-1/3">
                    <img src="{{ asset('uploaded_files/mentor/' . $mentor->mentor_picture) }}" alt="{{ $mentor->mentor_alt }}"
                        class="bg-cover bg-center">
                </div>
                <div class="w-full flex flex-col md:pl-8 lg:w-2/3">
                    <h1 class="mb-4 font-secondary font-bold text-4xl text-primary md:mb-8 md:text-6xl">
                        Get to know {{ $mentor->mentor_firstname }}</h1>
                    <div class="mb-6 w-full font-inter font-medium text-base text-primary text-justify md:mb-12">
                        {!! $mentor->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bottom Section --}}
    <section class="py-10">
        <div class="main-container">
            <div class="flex flex-col items-center">
                <h2 class="mb-8 font-secondary font-bold text-4xl text-primary text-center">
                    SIGN UP FOR A FREE INITIAL CONSULTATION
                </h2>
                <a href="#">
                    <span class="px-10 py-2 font-inter font-medium text-base text-white rounded-md bg-yellow">More</span>
                </a>
            </div>
        </div>
    </section>

    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches
        var isMediumDevice = window.matchMedia("(max-width: 1024px)").matches

        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: isSmallDevice ? 1 : 3,
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
                item.button.style.width = '10px';
                item.button.style.height = '10px';
                item.button.style.margin = '0 6px'
                item.button.style.backgroundColor = '#0367BF';
            });
        }).mount();
    </script>
@endsection
