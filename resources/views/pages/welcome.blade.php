@extends('base.base', ['title' => 'Sport Blog | '] )

@section('content')

<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">SportBiz & Beyond</p>
								<h1>Bienvenu sur SportBiz & Beyond </h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">A propos de nous</a>
									<a href="contact.html" class="bordered-btn">Contacter nous</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">SportBiz & Beyond</p>
								<h1> Parlons sport, business et developpement personel  </h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">A propos de nous</a>
									<a href="contact.html" class="bordered-btn">Contacter nous</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end home page slider -->

<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
        
                    	<img src="assets/img/image 1.png" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Sport</span> & Business</h3>
                    <div class="text">Entrez dans l'univers dynamique du sport business et du développement personnel avec SportBiz & Beyond. Ici, nous explorons les arcanes du naming sportif, l'impact puissant des grandes organisations d'événements sportifs, les secrets du sponsoring sportif et bien d'autres sujets passionnants. Nous vous dévoilons les stratégies gagnantes pour donner une identité forte à votre projet sportif, attirer des partenaires de renom et marquer les esprits. Mais notre blog ne s'arrête pas là. Nous vous guidons également à travers l'importance du networking, vous montrant comment établir des connexions précieuses dans le monde du sport business pour propulser votre carrière vers de nouveaux sommets. De plus, nous partageons nos réflexions et compréhension approfondie sur les livres de développement personnel qui peuvent vous aider à renforcer votre mentalité de champion, à surmonter les obstacles et à atteindre vos objectifs. Plongez dans nos articles captivants, découvrez des conseils pratiques et inspirez-vous des histoires de réussite. </div>
                    <!--Countdown Timer-->
                	<a href="blog/" class="cart-btn mt-3">Nos Article</a>
                </div>
            </div>
        </div>
   </section>
<!-- end cart banner section -->
@endsection