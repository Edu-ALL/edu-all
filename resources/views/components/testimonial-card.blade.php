<div
    class="bg-[#F3F3F3] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500">
    <span class="absolute top-2 left-2 text-6xl font-normal">“</span>
    <div class="px-4 mt-4 text-sm text-justify font-semibold italic">
        {!! $testi->testi_desc !!}
    </div>
    <div class="mt-4 flex flex-col w-full">
        <div class="px-4 font-bold text-lg leading-5">
            {{ $testi->testi_name }}
        </div>
        <div class="px-4 text-xs font-semibold leading-3">
            {!! $testi->testi_subtitle !!}
        </div>
        <span class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
            {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
        </span>
        @if (!$disabled_btn)
            <a href="{{ route('testimonial', app()->getLocale()) }}"
                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all">Read
                more <i
                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a>
        @endif
    </div>
</div>
