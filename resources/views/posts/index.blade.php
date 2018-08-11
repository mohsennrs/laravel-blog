@extends('layouts.master')

@section('content')
	{{-- 
	<main role="main" class="cal-sm-8 blog-main"> --}}
	
		@foreach($posts as $post)
			@include('posts.post')
		@endforeach

	{{-- </main>/.container --}}

@endsection