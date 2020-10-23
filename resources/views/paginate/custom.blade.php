<div class="ui-pagination">
    <a class="ui-pagination-item prev {{ ($paginator->onFirstPage() ? ' disabled' : '') }}" href="{{$paginator->previousPageUrl()}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
        <path fill="currentColor" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
        </svg>
    </a>
    <ul>
        @foreach ($elements[0] as $k => $item)
            @if ($k == $paginator->currentPage())
                <li class="active"><a class="ui-pagination-item" href="{{$item}}">{{$k}}</a></li>
            @else
                <li><a class="ui-pagination-item" href="{{$item}}">{{$k}}</a></li>
            @endif
        @endforeach
    </ul>
    <a class="ui-pagination-item next {{ ($paginator->hasMorePages() ? '' : ' disabled') }}" href="{{$paginator->nextPageUrl()}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
        <path fill="currentColor" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
        </svg>
    </a>
</div>