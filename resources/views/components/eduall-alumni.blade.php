@push('style')
    <style>
        /* ==================== Mentee Slider Styles ==================== */
        #alumni-slider .splide__slide .card {
            transform: scale(0.6);
            transition: all 0.6 ease;
        }

        #alumni-slider .splide__slide {
            opacity: .4;
            transition: all 0.6s ease;
        }

        #alumni-slider .splide__slide.is-active {
            opacity: 1;
        }

        #alumni-slider .splide__slide.is-active .card {
            transform: scale(1)
        }
    </style>
@endpush

<div class="px-0 md:px-10">
    <div id="alumni-slider" class="splide">
        <div class="splide__track ">
            <ul class="splide__list">
                @foreach (__('pages/alumni') as $item)
                    <li class="splide__slide">
                        <div class="card bg-gradient-to-br from-blue-300 to-blue-50 p-3 rounded-xl">
                            <div class="flex justify-center relative z-0">
                                <div class="w-[200px] -mb-[25%]">
                                    <img src="{{ asset('assets/img/Foto Mentee/') . '/' . $item['img']['photo'] }}"
                                        alt="{{ $item['name'] }}" class="w-full object-cover" loading="lazy">
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl relative z-10">
                                <h3 class="text-xl font-light text-new-primary">
                                    {{ $item['name'] }}
                                </h3>
                                <p class="text-[12px] text-gray-500 mb-2">
                                    {{ $item['major'] }}
                                </p>
                                <div
                                    class="flex border border-newprimary rounded-md p-2 justify-around items-center mb-3 gap-10">
                                    @foreach ($item['img']['logos'] as $logo)
                                        <div class="flex flex-col items-center justify-center h-[40%]">
                                            <img src="{{ asset('assets/img/Foto Mentee/logo') . '/' . $logo['logo'] }}"
                                                alt="{{ $logo['title'] }}" class="h-full object-cover" loading="lazy">

                                            <p
                                                class="text-[8px] font-light text-gray-700 text-center {{ $logo['title'] == '' ? 'mt-0' : 'mt-2' }}">
                                                {{ $logo['title'] }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="text-[12px] text-gray-500">
                                    {{ $item['quote'] }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@push('script')
    <script>
        // ==================== Mentee Slider (Splide) ====================
        // Initialize testimonial slider with autoplay
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#alumni-slider', {
                type: 'loop',
                perPage: 3,
                focus: 'center',
                autoplay: true,
                interval: 4000,
                speed: 600,
                drag: false,
                arrows: true,
                pagination: false,
                fixedWidth: '320px',
                fixedHeight: 'auto',
                gap: '1rem',
                padding: '5%',
                breakpoints: {
                    1024: {
                        perPage: 2,
                        fixedWidth: '300px',
                        gap: '1rem',
                        padding: '3%',
                    },
                    768: {
                        perPage: 1,
                        fixedWidth: '280px',
                        gap: '1rem',
                        padding: '2%',
                    },
                },
            }).mount();
        });
    </script>
@endpush
