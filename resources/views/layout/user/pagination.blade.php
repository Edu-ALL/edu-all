@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex w-full items-center justify-between">
        <div class="flex justify-between w-full sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-newprimary border border-newprimary rounded-lg">
                    Previous Page
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-white border border-newprimary bg-newprimary rounded-lg">
                    Previous Page
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-white border border-newprimary bg-newprimary rounded-lg">
                    Next Page
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-newprimary border border-newprimary rounded-lg">
                    Next Page
                </span>
            @endif
        </div>

        <div class="hidden sm:flex sm:items-center sm:justify-center sm:w-full">
            <div class="flex flex-col items-center">
                <div class="relative z-0 inline-flex mb-2">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-primary leading-5 rounded-lg">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium font-primary text-primary cursor-default leading-5 rounded-lg">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-mediumfont-primary text-primary leading-5 hover:text-gray-500 focus:z-10  active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 rounded-lg"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                </div>
                <div class="flex gap-x-4">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span
                                class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-newprimary border border-newprimary rounded-lg"
                                aria-hidden="true">
                                Previous Page
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-white border border-newprimary bg-newprimary rounded-lg"
                            aria-label="{{ __('pagination.previous') }}">
                            Previous Page
                        </a>
                    @endif



                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-white border border-newprimary bg-newprimary rounded-lg"
                            aria-label="{{ __('pagination.next') }}">
                            Next Page
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span
                                class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm text-newprimary border border-newprimary rounded-lg"
                                aria-hidden="true">
                                Next Page
                            </span>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </nav>
@endif
