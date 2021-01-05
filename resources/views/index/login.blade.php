@extends('layouts.app')
@section('body')
<div class="form-wrap">
	<form action="{{ route('dashboard') }}" class="login-form">
		<div class="form-image">
			<img src="{{ asset('assets/front/img/image-form.png') }}" alt="">
		</div>
		<div class="form-content">
			<h2>Log In</h2>
			<div class="mat-div">
				<label class="mat-label">Username</label>
				<input type="text" class="mat-input">
			</div>
			<div class="mat-div">		
				<label class="mat-label">Password</label>
				<input type="password" class="mat-input">
			</div>
			<input type="submit" class="btn gradient_button" value="Log In">
			<a href="{{ route('register') }}">Sign Up</a>
		</div>
	</form>
</div>
@endsection