@extends('base.base', ['title' => 'Sport Blog | '] )

@section('content')
<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>SportBiz & Beyond</p>
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end breadcrumb section -->

<!-- latest news -->
	@livewire('list-post-pagination')
<!-- end latest news -->
@endsection