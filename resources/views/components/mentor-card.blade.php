<div class="flex flex-col justify-between rounded-3xl shadow-md relative h-full bg-white">
    {{-- Mentor Image --}}
    <div class="flex flex-col @if ($disabled_btn) pb-8 @endif">
        <div class="-mt-52 relative">
            <img src="{{ asset('uploaded_files/mentor/' . $mentor->created_at->format('Y') . '/' . $mentor->created_at->format('m') . '/' . $mentor->mentor_picture) }}"
                alt="{{ $mentor->mentor_alt }}" class="bg-cover bg-center">
            <img src="{{ asset('assets/logo/eduall.png') }}" alt="EduALL Logo"
                class="w-12 h-12 object-contain absolute -bottom-2 right-2">
        </div>

        <div class="flex flex-col px-4 overflow-visible">
            {{-- Mentor Name --}}
            <h2 class="font-newprimary text-center font-semibold text-3xl text-dark mt-4 leading-7">
                {{ $mentor->mentor_fullname }}
            </h2>
            <span class="font-newprimary text-newprimary text-xs text-center mt-2">
                {!! $mentor->mentor_graduation !!}
            </span>

            <ul class="flex flex-col gap-2 mt-8">
                {{-- @foreach ($mentor->mentor_value as $item)
                    <li class="flex items-start gap-4">
                        <div class="w-4 h-4">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <h4 class="font-newprimary text-base font-semibold text-dark leading-5 mt-1">
                            {{ $item->value }}
                        </h4>
                    </li>
                @endforeach --}}
                
                @if ($mentor->value_1)
                    <li class="flex items-start gap-4">
                        <div class="w-4 h-4">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <h4 class="font-newprimary text-base font-semibold text-dark leading-5">
                            {{ $mentor->value_1 }}
                        </h4>
                    </li>
                @endif
                @if ($mentor->value_2)
                    <li class="flex items-start gap-4">
                        <div class="w-4 h-4">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <h4 class="font-newprimary text-base font-semibold text-dark leading-5">
                            {{ $mentor->value_2 }}
                        </h4>
                    </li>
                @endif
                @if ($mentor->value_3)
                    <li class="flex items-start gap-4">
                        <div class="w-4 h-4">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                        </div>
                        <h4 class="font-newprimary text-base font-semibold text-dark leading-5">
                            {{ $mentor->value_3 }}
                        </h4>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    @if (!$disabled_btn)
        <a href="{{ route('detail_mentor', ['locale' => app()->getLocale(), 'slug' => $mentor->mentor_slug]) }}"
            class="mt-5 mb-5 flex flex-col justify-center text-center group items-center gap-1 hover:bg-[#EBEBEB] transition-all group py-3">
            <span class="font-newprimary font-semibold text-xs text-newprimary leading-none text-center">Get
                to
                know {{ $mentor->mentor_fullname }}</span>
            <div class="w-24 h-[1px] bg-newprimary group-hover:w-0 transition-all">
            </div>
        </a>
    @endif
</div>
