<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				@if (count($posts) > 0)
					@foreach ($posts as $post)
						<div class="col-lg-4 col-md-6">
							<div class="single-latest-news">
								<a href="{{ route('detail_post', $post->id) }}"><div class="latest-news-bg"><img src="storage/posts/{{$post->image}}" alt=""></div></a>
								<div class="news-text-box">
									<h3><a href="{{ route('detail_post', $post->id) }}">{{$post->title}}</a></h3>
									<p class="blog-meta">
										<span class="author"><i class="fas fa-user"></i> Admin</span>
										<span class="date"><i class="fas fa-calendar"></i> {{ date("d m, Y", strtotime($post->created_at)) }}</span>
									</p>
									<p class="excerpt">{!!substr($post->paragraph1,0,150)!!}...</p>
									<a href="{{ route('detail_post', $post->id) }}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					@endforeach
                    {{$posts->links('pagination-links')}}
				@else
					<div class="col-lg-4 col-md-6">
						<h1>pas d'article disponible</h1>
					</div>
				@endif
			</div>
			
		</div>
	</div>
	<!-- end latest news -->
