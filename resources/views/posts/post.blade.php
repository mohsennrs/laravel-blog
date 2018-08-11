
		

		<div class="blog-post">
			<h2 class="blog-post-title">
			<a href="/posts/{{ $post->id }}">
				{{ $post->title }}
			</a>
			</h2>


			<p class="blog-post-meta">
				{{-- {{ dd($post->user['name']) }} --}}
				{{ $post->user['name'] }} on
				{{ $post->created_at->toFormattedDateString()}}
			</p>
			{{ $post->body }}
			

		</div><!-- /.blog-main -->



