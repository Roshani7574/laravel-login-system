@extends('layout')

@section('content')

<h2 class="mb-4">User Dashboard</h2>

<div class="card shadow">
<div class="card-body">

<h4>Welcome {{ Auth::user()->name }}</h4>

<p class="text-muted">
You are successfully logged into the system.
</p>

</div>
</div>

@endsection
