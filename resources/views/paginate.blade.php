@if ($paginator->lastPage() > 1)
<div class="container-row">
    <div class="pagination">
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <a class="@if($paginator->currentPage() == $i) _1 @endif  page"  @if($paginator->currentPage() != $i) href="{{ $paginator->url($i) }}" @endif >{{$i}}</a>
        @endfor
    </div>
</div>
@endif