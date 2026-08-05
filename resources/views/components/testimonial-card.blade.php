<div
    class="bg-[#F6F7F9] pt-4 flex flex-col justify-between items-start h-full shadow-xl relative hover:scale-105 transition-all duration-500 rounded-xl">
    <span class="absolute top-2 left-2 text-6xl font-normal text-dark/60">“</span>
    <div class="px-4 mt-5 text-base text-justify font-light text-gray-500">
        {!! $testi->testi_desc !!}
    </div>
    <div class="mt-4 flex w-full px-4 mb-5">
        <div class="flex">
            <div class="flex items-center mt-5 gap-5">
                <div class="w-[25px] h-[25px] flex items-center justify-center rounded-full bg-gray-600 p-1">
                    <i class="fa-solid fa-user text-white text-sm"></i>
                </div>
                <div class="">
                    <p class="text-sm text-gray-600">
                        {{ $testi->testi_name }}
                    </p>
                    <div class="text-sm text-gray-500">
                        {!! $testi->testi_subtitle !!}
                    </div>
                </div>
            </div>
        </div>


        {{-- <span class="px-4 mt-2.5 mb-4 text-xs font-semibold text-newprimary">
            {{ $testi->testi_subcategory != null ? $testi->testi_subcategory : $testi->testi_category }}
        </span> --}}


        {{-- @if (!$disabled_btn)
            <a href="{{ route('testimonial', app()->getLocale()) }}"
                class="w-full flex px-4 py-2 group bg-newprimary justify-end text-sm text-white font-semibold items-center transition-all rounded-lg">Read
                more <i
                    class="ml-2 group-hover:ml-4 fa-solid fa-chevron-right text-xs text-white transition-all"></i></a>
        @endif --}}
    </div>
</div>
