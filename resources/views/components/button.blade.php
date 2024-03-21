@if ($type == 'primary')
    <a href="{{ $href }}"
        class="block mt-12 bg-black text-center text-white font-newprimary text-lg font-semibold py-2 px-12 hover:bg-newprimary hover:px-20 transition-all duration-150">
        {{ $title }}
    </a>
@elseif ($type == 'secondary')
    <a href="{{ $href }}"
        class="px-8 md:px-12 py-3 font-bold font-newprimary text-xs md:text-base text-white text-center bg-newprimary hover:scale-105 transition-all duration-150">
        {{ $title }}
    </a>
@endif
