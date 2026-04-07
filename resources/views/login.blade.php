<<<<<<< HEAD
@extends('layout')
=======
@extends('frontend.layout')
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

@section('content')

<div class="auth-container">

<div class="auth-card">

<h3 class="text-center mb-4">Login</h3>

@if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
@endif

<<<<<<< HEAD
<form method="POST" action="/login">
=======
<form method="POST" action="/admin/login">
>>>>>>> d024ab1 (Update project: Like a E-commerce website)
@csrf

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Email" required>
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>

<button class="btn btn-primary w-100">Login</button>

</form>

<div class="text-center mt-3">
<a href="/register">Create Account</a>
</div>

</div>

</div>

@endsection
