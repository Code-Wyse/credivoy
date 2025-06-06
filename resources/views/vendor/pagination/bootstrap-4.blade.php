@if ($paginator->hasPages())
    <nav>
        <ul class="pagination rlr-pagination__child-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item rlr-pagination__page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item rlr-pagination__page-item">
                    <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item rlr-pagination__page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item rlr-pagination__page-item active" aria-current="page"><span class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter">{{ $page }}</span></li>
                        @else
                            <li class="page-item rlr-pagination__page-item"><a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item rlr-pagination__page-item">
                    <a class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item rlr-pagination__page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link rlr-pagination__page-link rlr-pagination__page-link--counter" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
