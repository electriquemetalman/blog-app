@extends('base.base', ['title' => 'Sport Blog | '] )

@section('content')
<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>SportBiz & Beyond</p>
						<h1>Cree vos articlie</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end breadcrumb section -->

<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Ajouter un article</h2>
					</div>
				 	<div id="form_status"></div>
                    @livewire('post')
				</div>
			</div>
		</div>
	</div>
<!-- end contact form -->
<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						@livewire('post-list')
					</div>
				</div>

				
			</div>
		</div>
	</div>
<!-- end cart -->
	
@endsection