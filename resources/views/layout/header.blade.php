<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="/assets/img/logo SBB.png" alt="">
							</a>
						</div>
						<!-- logo -->
					
						<!-- menu start -->
						@if(auth()->user())
							<nav class="main-menu">
								<ul>
									<li><a href="/">Acceuil</a></li>
									<li><a href="/a_propos">A Propos</a></li>
									<li><a href="/blog">Blog</a></li>
									<li><a href="/create_post">cree article</a></li>
									<li><a href="/contact">Contact</a></li>
									@livewire('logout')
								</ul>
							</nav>
							<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
							<div class="mobile-menu"></div>
						<!-- menu end -->
						@else
							<nav class="main-menu">
								<ul>
									<li><a href="/">Acceuil</a></li>
									<li><a href="/a_propos">A Propos</a></li>
									<li><a href="/blog">Blog</a></li>
									<li><a href="/contact">Contact</a></li>
									<li>
										<div class="header-icons">
											<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										</div>
									</li>
								</ul>
							</nav>
							<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
							<div class="mobile-menu"></div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->