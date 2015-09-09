@extends('layout')



@section('content')

<div class="row">

<div class="col-md-6 col-md-offset-3">
	<form method="POST" action="/auth/login">
		
		{!! csrf_field() !!}

		<div class="form-group">
			
			<label for="email">Email:</label>

			<input type="email" name="email" class="form-control" value="{{ old('email') }}">
		</div>

			<div class="form-group">
				
				<label for="password">Password:</label>

				<input type="password" name="password" id="password" class="form-control">

			</div>

			<div class="form-group">
				
				<input type="checkbox" name="remember">Remember Me

			</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-default">Login</button>
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