@extends('layouts.master')

@section('content')
	
		<h1>{{ $post->title }}</h1>
		@if(count($post->tags))
			<ul>
				@foreach ($post->tags as $tag)
					<li>
						<a href="/posts/tags/{{ $tag->name }}" >{{ $tag->name }}</a>
					</li>
				@endforeach
			</ul>
		@endif
		{{ $post->body }}
		
		<hr>
		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $commented)
					<article>
						<li class="list-group-item">
						<strong>
							{{ $commented->created_at->diffForHumans() }}: &nbsp;
						</strong>
							{{ $commented->body }}
						</li>
					</article>
				@endforeach
			</ul>
		</div>
	
@endsection