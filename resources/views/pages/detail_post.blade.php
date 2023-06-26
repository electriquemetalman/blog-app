@extends('base.base', ['title' => 'Sport Blog | '] )

@section('content')
<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>SportBiz & Beyond</p>
						<h1>Detail Post</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end breadcrumb section -->

<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
							<div class="single-article-text">
								<div class="single-artcile-bg">
									<img src="/storage/posts/{{$post->image}}" alt="">
								</div>
								<p class="blog-meta">
									<span class="author"><i class="fas fa-user"></i> Admin</span>
									<span class="date"><i class="fas fa-calendar"></i>{{ date("d m, Y", strtotime($post->created_at)) }}</span>
								</p>
								<h2>{{ $post->title }}</h2>
								<p>{{ $post->paragraph1 }}</p>
								<p>{{ $post->paragraph2 }}</p>
								<p>{{ $post->paragraph3 }}</p>
								<p>{{ $post->paragraph4 }}</p>
							</div>

						
						@livewire('commentpost',['id_post' => ($id_post = $post->id)])
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								@foreach ($posts as $post)
									<li><a href="single-news.html">{{ $post->title }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Archive Posts</h4>
							<ul>
								<li><a href="single-news.html">JAN 2019 (5)</a></li>
								<li><a href="single-news.html">FEB 2019 (3)</a></li>
								<li><a href="single-news.html">MAY 2019 (4)</a></li>
								<li><a href="single-news.html">SEP 2019 (4)</a></li>
								<li><a href="single-news.html">DEC 2019 (3)</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- end single article section -->

@endsection