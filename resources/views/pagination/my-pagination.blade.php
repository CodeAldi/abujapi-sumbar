@if ($paginator->hasPages())
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item first @if($paginator->onFirstPage()) disabled @endif">
            <a class="page-link" href="{{ $paginator->toArray()['first_page_url'] }}"><i class="tf-icon bx bx-chevrons-left"></i></a>
        </li>
        <li class="page-item prev @if($paginator->onFirstPage()) disabled @endif">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="tf-icon bx bx-chevron-left"></i></a>
        </li>
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                <li class="page-item @if($page == $paginator->currentPage()) active @endif">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>

                @endforeach

            @endif
        @endforeach
        <li class="page-item next {{ ($paginator->hasMorePages()) ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="tf-icon bx bx-chevron-right"></i></a>
        </li>
        <li class="page-item last {{ ($paginator->hasMorePages()) ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $paginator->toArray()['last_page_url'] }}"><i class="tf-icon bx bx-chevrons-right"></i></a>
        </li>
    </ul>
</nav>
@endif