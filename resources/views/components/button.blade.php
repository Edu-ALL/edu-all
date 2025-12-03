@if ($type == 'primary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="block {{ $rounded }} {{ $isRounded ? "rounded-2xl" : "" }} mt-{{ $marginTop ?? '12' }} border-2 border-{{ $bgColor ?? 'black' }} text-center text-{{ $color ?? $bgColor }} hover:text-white font-newprimary text-{{ $fontSize ?? 'lg' }} font-semibold py-{{ $paddingY ?? '3' }} px-{{ $paddingX ?? '14' }} hover:bg-{{ $bgColor ?? 'newprimary' }} hover:px-{{ $paddingX ?? '20' }} transition-all duration-150 uppercase">
        {{ $title }}
    </a>
@elseif ($type == 'secondary')
    <a href="{{ $href }}" target="{{ $target ?? '' }}"
        class="{{ $rounded }} {{ $isRounded ? "rounded-2xl" : "" }} px-{{ $paddingX ?? '8' }} md:px-{{ $paddingX ?? '12' }} py-{{ $paddingY ?? '2' }} font-bold font-newprimary text-{{ $fontSize ?? 'xs' }} md:text-{{ $fontSize ?? 'base' }} text-{{ $color ?? 'white' }} text-center bg-{{ $bgColor ?? 'newprimary' }} hover:scale-105 transition-all duration-150 uppercase">
        {{ $title }}
    </a>
@endif

