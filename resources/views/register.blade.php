@extends('layout')

@section('content')

<div class="auth-container">

<div class="auth-card">

<h3 class="text-center mb-4">Register</h3>

@if(session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div>
@endif

<form method="POST" action="/register">

  @csrf


<div class="mb-3">
<input type="text" name="name" class="form-control" placeholder="Full Name" required>
</div>

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Email" required>
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>

<div class="mb-3">
<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
</div>

<button class="btn btn-success w-100">Create Account</button>

</form>

<div class="text-center mt-3">
<a href="/login">Already have an account? Login</a>
</div>

</div>

</div>

@endsection
