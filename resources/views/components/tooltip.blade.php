    <!-- Tooltip di atas -->
    <div
        class="pointer-events-none absolute bottom-full left-1/2 z-50 mb-1 -translate-x-1/2 translate-y-2 opacity-0 transition-all duration-200 group-hover:translate-y-0 group-hover:opacity-100">

        <div class="whitespace-nowrap rounded-lg bg-newprimary px-4 py-2 text-sm text-white shadow-lg">
            {{ $mentees }} {{ __('pages/home.students.mentees_label') }}
        </div>
    </div>


    <!-- Button -->
    <button class="relative rounded-xl bg-gray-300 hover:bg-white px-2 py-2 text-white hover:text-newprimary shadow-lg text-sm group">
        <span class="{{ $flag }} mr-3"></span> {{ $flagName }}
        <span class="absolute left-1/2 top-full h-3 w-3 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-gray-300 group-hover:bg-white">
        </span>
    </button>
