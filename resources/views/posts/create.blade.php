@extends('layouts/master')

@section('content')
<div class="col-md-8 blog-main">
	<h1>Create a post</h1>

	<hr>

	<form method="POST" action="/posts">
		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">body</label>
	    <textarea id="body" name="body" class="form-control"></textarea>
	  </div>
	<div class="form-group">
	  <button type="submit" class="btn btn-primary">publish</button>
	</div>
	  
	</form>
	
		@if(count($errors))
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		@endif
</div>
@endsection