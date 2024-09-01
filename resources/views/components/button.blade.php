@if ($type == 'primary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="block mt-12 bg-{{ $bgColor ?? 'black' }} text-center text-white font-newprimary text-lg font-semibold py-2 px-14 hover:bg-{{ $bgColor ?? 'newprimary' }} hover:px-20 transition-all duration-150">
        {{ $title }}
    </a>
@elseif ($type == 'secondary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="px-8 md:px-12 py-3 font-bold font-newprimary text-xs md:text-base text-white text-center bg-{{ $bgColor ?? 'newprimary' }} hover:scale-105 transition-all duration-150">
        {{ $title }}
    </a>
@endif
