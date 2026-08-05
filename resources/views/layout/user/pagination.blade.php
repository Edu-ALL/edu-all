@php
    $light_pagination = ['partnership_careers'];
    $isLightPagination = request()->routeIs($light_pagination);
@endphp

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex w-full items-center justify-between">
        <div class="flex justify-between w-full sm:hidden">
            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                    {{ $isLightPagination ? 'text-white border-white' : 'text-newprimary border-newprimary' }}">
                    Previous Page
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                    {{ $isLightPagination ? 'bg-white text-newprimary border-white' : 'bg-newprimary text-white border-newprimary' }}">
                    Previous Page
                </a>
            @endif

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                    {{ $isLightPagination ? 'bg-white text-newprimary border-white' : 'bg-newprimary text-white border-newprimary' }}">
                    Next Page
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                    {{ $isLightPagination ? 'text-white border-white' : 'text-newprimary border-newprimary' }}">
                    Next Page
                </span>
            @endif
        </div>

        <div class="hidden sm:flex sm:items-center sm:justify-center sm:w-full">
            <div class="flex flex-col items-center">

                {{-- Page Numbers --}}
                <div class="relative z-0 inline-flex mb-2">
                    @foreach ($elements as $element)

                        {{-- Three Dots --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium rounded-lg
                                    {{ $isLightPagination ? 'text-white' : 'text-primary' }}">
                                    {{ $element }}
                                </span>
                            </span>
                        @endif

                        {{-- Page Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium font-primary cursor-default rounded-lg
                                            {{ $isLightPagination ? 'text-white' : 'text-primary' }}">
                                            {{ $page }}
                                        </span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium font-primary rounded-lg transition duration-150
                                        {{ $isLightPagination ? 'text-white hover:text-white/70' : 'text-primary hover:text-gray-500' }}"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif

                    @endforeach
                </div>

                {{-- Buttons --}}
                <div class="flex gap-x-4">

                    {{-- Previous --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                                {{ $isLightPagination ? 'text-white border-white' : 'text-newprimary border-newprimary' }}">
                                Previous Page
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                            {{ $isLightPagination ? 'bg-white text-newprimary border-white' : 'bg-newprimary text-white border-newprimary' }}">
                            Previous Page
                        </a>
                    @endif

                    {{-- Next --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                            {{ $isLightPagination ? 'bg-white text-newprimary border-white' : 'bg-newprimary text-white border-newprimary' }}">
                            Next Page
                        </a>
                    @else
                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-4 py-2 font-primary font-semibold text-sm rounded-lg border
                                {{ $isLightPagination ? 'text-white border-white' : 'text-newprimary border-newprimary' }}">
                                Next Page
                            </span>
                        </span>
                    @endif

                </div>
            </div>
        </div>
    </nav>
@endif