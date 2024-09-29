@if ($type == 'primary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="block mt-{{ $marginTop ?? '12' }} bg-{{ $bgColor ?? 'black' }} text-center text-white font-newprimary text-lg font-semibold py-{{ $paddingY ?? '3' }} px-{{ $paddingX ?? '14' }} hover:bg-{{ $bgColor ?? 'newprimary' }} hover:px-{{ $paddingX ?? '20' }} transition-all duration-150">
        {{ $title }}
    </a>
@elseif ($type == 'secondary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="px-{{ $paddingX ?? '8' }} md:px-{{ $paddingX ?? '12' }} py-{{ $paddingY ?? '2' }} font-bold font-newprimary text-xs md:text-base text-white text-center bg-{{ $bgColor ?? 'newprimary' }} hover:scale-105 transition-all duration-150">
        {{ $title }}
    </a>
@endif

