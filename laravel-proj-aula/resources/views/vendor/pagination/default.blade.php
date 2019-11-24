@if ($paginator->hasPages())
    <nav class="pagination" role="navigation" aria-label="pagination">
        <p>Mostrando {{ $paginator->count() }} de {{ $paginator->total() }} resultados</p>

        <a
            class="pagination-next"
            @if(empty($paginator->nextPageUrl())) disabled @endif
            href={{ $paginator->nextPageUrl() }}
        >
            Próxima
        </a>
        <a
            class="pagination-previous"
            @if(empty($paginator->previousPageUrl())) disabled @endif
            href={{ $paginator->previousPageUrl() }}
        >
            Anterior
        </a>
        <ul class="pagination-list">
            <li>
                <a
                    class="pagination-link"
                    aria-label="Vai pra página {{ $paginator->firstItem() }}"
                    href={{$paginator->url(1)}}
                >
                    1
                </a>
            </li>
            <li>
                <span class="pagination-ellipsis">&hellip;</span>
            </li>
            <li>
                <a
                    class="pagination-link is-current"
                    aria-label="Vai pra página {{ $paginator->firstItem() }}"
                >
                    {{ $paginator->currentPage() }}
                </a>
            </li>
            <li>
                <span class="pagination-ellipsis">&hellip;</span>
            </li>
            <li>
                <a
                    class="pagination-link"
                    aria-label="Vai pra página {{ $paginator->lastPage() }}"
                    href={{$paginator->url($paginator->lastPage())}}
                >
                    {{ $paginator->lastPage() }}
                </a>
            </li>
        </ul>
    </nav>
@endif
