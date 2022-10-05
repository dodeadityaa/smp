@if($paginator->lastPage() > 1)
@if($paginator->currentPage() == 1)
<ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">kembali</a></li>
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}">next</a></li>
    @elseif($paginator->currentPage() == $paginator->lastPage())
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->currentPage() - 1) }}">kembali</a></li>
    <li class="page-item"><a class="page-link" href="#">next</a></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->currentPage() - 1) }}">kembali</a></li>
    <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}">next</a></li>
</ul>
@endif
@endif