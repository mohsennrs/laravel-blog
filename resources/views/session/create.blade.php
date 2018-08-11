@extends('layouts.master')

@section('content')

	<form method="POST" action="/login">
		{{csrf_field() }}

		<div class="form-group">
			<label for="email" >Email Address:</label>
			<input type="email" class="form-control" name="email" id="email" >
		</div>

		<div class="form-group">
			<label for="password" >Password:</label>
			<input type="password" class="form-control" name="password" id="password" >
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Sign In</button>
		</div>

		@include('layouts.errors')
	</form>


@endsection