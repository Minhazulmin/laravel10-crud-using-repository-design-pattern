@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a href="" class="page-link">Previous</a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                        rel="prev">Previous</a></li>
            @endif



            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif



                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="page-item">
                            @if ($page == $paginator->currentPage())
                                <a href="" class="page-link active"><span>{{ $page }}</span></a>
                            @else
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach



            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                        rel="next">Next</a></li>
            @else
                <li class="page-item disabled"><a href="" class="page-link">Next</a></li>
            @endif
        </ul>
    </nav>
@endif
