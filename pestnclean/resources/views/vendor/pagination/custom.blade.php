@if ($paginator->hasPages())
    <div class="div-link">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="span-link link-b"><a href="#" aria-disabled="true" aria-label="@lang('pagination.previous')">&lt;&lt;</a></span>
        @else
            <span class="span-link link-b"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lt;&lt;</a></span>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="span-link"><a href="#">{{ $element }}</a></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="span-link active"><a href="#">{{ $page }}</a></span>
                    @else
                        <span class="span-link"><a href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <span class="span-link link-b"><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&gt;</a></span>
        @else
            <span class="span-link link-b"><a href="#" aria-disabled="true" aria-label="@lang('pagination.next')">&gt;</a></span>
        @endif
    </div>
@endif
