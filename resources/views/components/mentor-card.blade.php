
<div class="font-secondary program_card hover:rotate-program_card">
    <div class="mentor-thumbnail w-full max-h-[225px] md:max-h-[340px] overflow-hidden rounded-2xl bg-[#D9D9D9] relative z-10 h-full front">
        {{-- <span class="font-secondary absolute top-10 right-0 left-0 w-full h-full text-center text-2xl text-[#6D6D6D] font-semibold"> 
            {{ explode(' ', trim($mentor->mentor_fullname))[0] }}
        </span> --}}
        <img loading="lazy"
            src="{{ Storage::url('mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
            alt="{{ $mentor->thumbnail_alt ?? 'Default Alt Text' }}" class="h-full w-full object-cover">
    </div>
    <div class="previous-mentor-item w-full max-h-[225px] md:max-h-[340px] absolute inset-0 h-full z-0 rounded-2xl overflow-hidden back face_back">
        <div class="w-full h-full bg-[#1E1E1E] flex flex-col items-center justify-start px-4 pt-6 pb-2">
            <div class="flex flex-col items-center">

                <h3 class="text-center font-semibold font-secondary text-white text-2xl mt-4 leading-7">
                    {{ explode(' ', trim($mentor->mentor_fullname))[0] }}
                </h3>
                <span class="text-white text-card-small text-center mt-2">
                    {!! $mentor->mentor_graduation !!}
                </span>
            </div>
            <div class="md:flex md:h-full hidden flex-col justify-center flex-1">
                <ul class="flex flex-col gap-2">
                    @if (!$mentor->value_1)
                        @foreach ($mentor->mentor_value as $item)
                            <li class="flex items-start gap-4 mt-8">
                                <div class="w-4 h-4">
                                    <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i> 
                                </div>
                                <p class="text-card-small font-medium text-white leading-5 overflow-hidden text-ellipsis mt-1"  style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                                    {{ $item->value }}
                                </p>
                            </li>
                        @endforeach 
                    @endif
                    
                    @if ($mentor->value_1)
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-4">
                                <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>
                            </div>
                            <p class="text-card-small font-medium text-white leading-5 overflow-hidden text-ellipsis" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                {{ $mentor->value_1 }}
                            </p>
                        </li>
                    @endif
                    @if ($mentor->value_2)
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-4">
                                <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>     
                            </div>
                            <p class="text-card-small font-medium text-white leading-5 overflow-hidden text-ellipsis"  style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                {{ $mentor->value_2 }}
                            </p>
                        </li>
                    @endif
                    @if ($mentor->value_3)
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-4">
                            <i class="fa-solid fa-check-circle text-newprimary rounded-full bg-white"></i>    
                            </div>
                            <p class="text-card-small font-medium text-white leading-5 overflow-hidden text-ellipsis"  style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                {{ $mentor->value_3 }}
                            </p>
                        </li>
                    @endif
                </ul>
            </div>
            @if (!$disabled_btn)
                <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
                    class="mt-2 mb-2 flex flex-col justify-center text-center group rounded-md items-center gap-1 hover:bg-black/20 transition-all group py-3 px-4">
                    <span class="font-semibold text-card-small text-white leading-none text-center">Get
                        to
                        know {{ explode(' ', trim($mentor->mentor_fullname))[0] }}</span>
                    <div class="w-24 h-[1px] bg-white group-hover:w-0 transition-all">
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>
