@extends('layout')



@section('content')

<div class="row">

<div class="col-md-6 col-md-offset-3">

	<h1>Register</h1>

	<hr>

	<form method="POST" action="/auth/register">
		
		{!! csrf_field() !!}

		<div class="form-group">
			
			<label for="name">Name:</label>

			<input type="name" name="name" class="form-control" value="{{ old('name') }}">
		</div>

		<div class="form-group">
			
			<label for="email">Email:</label>

			<input type="email" name="email" class="form-control" value="{{ old('email') }}">
		</div>

			<div class="form-group">
				
				<label for="password">Password:</label>

				<input type="password" name="password" id="password" class="form-control">

			</div>

			<div class="form-group">
			
			<label for="password_confirmation">Confirm Password:</label>

			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
		</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-default">Register</button>
			</div>
	</form>

	@if (count($errors) > 0)

	<div class="alert alert-danger">
		
		<ul>
			@foreach($errors->all() as $error)

				<li>{{ $error }}</li>

			@endforeach
		</ul>
	</div>

	@endif

</div>

</div>
@stop