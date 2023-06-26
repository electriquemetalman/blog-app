@extends('base.base', ['title' => 'Sport Blog | '] )

@section('content')
<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>SportBiz & Beyond</p>
						<h1>Contacter Nous</h1>
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
						<h2>Vous aver des question ?</h2>
						<p>Si vous aver des question ou des préocupation n'hésiter pas a nous contacter via ce formulaire. Vous pouvez aussi nous contacter par email ou directement sur le numero a droite.</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Nom" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Téléphone" name="phone" id="phone">
								<input type="text" placeholder="Sujet" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Envoyer"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Addresse</h4>
							<p>Paris 145, <br>France</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Téléphone: +33 (0) 6 23 58 55 58 <br> Email: sportbiz.beyond@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end contact form -->

@endsection