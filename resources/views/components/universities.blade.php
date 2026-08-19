@push('style')
    <style>
        .marquee-track {
            display: flex;
            gap: 40px;
            width: max-content;
        }

        /* Top row animation - moves left */
        .marquee-left {
            animation: marquee-left 50s linear infinite;
        }

        /* Bottom row animation - moves right */
        .marquee-right {
            animation: marquee-right 50s linear infinite;
        }

        @keyframes marquee-left {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes marquee-right {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }
    </style>
@endpush

@php
    $universities = collect([
        ['name' => 'Harvard', 'image' => '1. Harvard.png'],
        ['name' => 'Cambridge', 'image' => '2. Cambridge.png'],
        ['name' => 'Imperial College', 'image' => '3. Imperial_.png'],
        ['name' => 'Zurich', 'image' => '4. Zurich.png'],
        ['name' => 'NUS', 'image' => '5. NUS.png'],
        ['name' => 'UCL', 'image' => '6. UCL.png'],
        ['name' => 'Upenn', 'image' => '7. Upenn.png'],
        ['name' => 'Columbia', 'image' => '8. columbia.png'],
        ['name' => 'Carnegie Mellon', 'image' => '9. Carneige.png'],
        ['name' => 'NYU', 'image' => '10. NYU.png'],
        ['name' => 'UC Berkeley', 'image' => '11. UC Berkley.png'],
        ['name' => 'LSE', 'image' => '12. LSE.png'],
        ['name' => 'Tsinghua', 'image' => '13. Tsinghua.png'],
        ['name' => 'Toronto', 'image' => '14. Toronto.png'],
        ['name' => 'Nanyang', 'image' => '15. Nanyang.png'],
        ['name' => 'Edinburgh', 'image' => '16. Edinburgh.png'],
        ['name' => 'Melbourne', 'image' => '17. melbourne.png'],
        ['name' => 'Kings College', 'image' => '18. Kings college.png'],
        ['name' => 'TU Delft', 'image' => '19. TUDelft.png'],
        ['name' => 'UCLA', 'image' => '20. UCLA.png'],
        ['name' => 'HKUST', 'image' => '21. HKUST.png'],
        ['name' => 'Fudan', 'image' => '22. Fudan.png'],
        ['name' => 'Zhejiang', 'image' => '23. Zhejiang.png'],
        ['name' => 'UC San Diego', 'image' => '24. Sandiego_.png'],
        ['name' => 'Chinese University of Hong Kong', 'image' => '25. Chinese Hongkong.png'],
        ['name' => 'UC Davis', 'image' => '26. UCDAvis.png'],
        ['name' => 'UC Irvine', 'image' => '27. UCIrvine.png'],
        ['name' => 'Purdue', 'image' => '28. Perdue.png'],
        ['name' => 'UNSW', 'image' => '29. UNSW.png'],
        ['name' => 'Tohoku', 'image' => '30. TOHOKO.png'],
        ['name' => 'Sciences PO', 'image' => '31. SciencesPO.png'],
    ]);

    // Split universities into alternating groups of 5
    $topRow = $universities->filter(function ($item, $key) {
        return $key % 10 < 5;
    })->values();
    
    $bottomRow = $universities->filter(function ($item, $key) {
        return $key % 10 >= 5 && $key % 10 < 10;
    })->values();
@endphp

{{-- ==================== Universities Section ==================== --}}
<section class="relative z-10 -mt-20">
    <div class="new-main-container px-10">
        {{-- First Marquee Row (Left Animation) --}}
        <div class="overflow-hidden">
            <div class="marquee-track marquee-left">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ($topRow as $university)
                        <img src="{{ asset('assets/img/Logo UNI/' . $university['image']) }}"
                            class="md:w-[150px] w-[80px] object-contain"
                            alt="{{ $university['name'] }}"
                            loading="lazy">
                    @endforeach
                @endfor
            </div>
        </div>

        {{-- Second Marquee Row (Right Animation) --}}
        <div class="overflow-hidden md:mt-10 mt-6">
            <div class="marquee-track marquee-right">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ($bottomRow as $university)
                        <img src="{{ asset('assets/img/Logo UNI/' . $university['image']) }}"
                            class="md:w-[150px] w-[80px] object-contain"
                            alt="{{ $university['name'] }}"
                            loading="lazy">
                    @endforeach
                @endfor
            </div>
        </div>

        {{-- More Text --}}
        <div class="text-center">
            <p class="text-xl md:text-3xl text-gray-500 my-20">{{ $moreText }}</p>
        </div>
    </div>
</section>
