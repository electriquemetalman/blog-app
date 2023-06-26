@if ($paginator->hasPages())
    <div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
                            @if ($paginator->onFirstPage())
                                <li><a>Prev</a></li>
                            @else
                                <li><a wire:click="previousPage">Prev</a></li>
                            @endif

                            @foreach ($elements as $element)
                                @foreach ($element as $page => $url)
                                    @if($page == $paginator->currentPage())
                                        <li><a class="active" wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
                                    @else
                                        <li><a wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endforeach

                            @if ($paginator->hasMorePages())
                                <li><a wire:click="nextPage">Next</a></li>
                            @else
                                <li><a>Next</a></li>
                            @endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif