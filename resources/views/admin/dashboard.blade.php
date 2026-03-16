@extends('admin.layout')

@section('content')

<div class="row">

<div class="col-lg-4">

<div class="small-box bg-info">

<div class="inner">
<h3>{{ $users }}</h3>
<p>Total Users</p>
</div>

<div class="icon">
<i class="fas fa-users"></i>
</div>

</div>

</div>


<div class="col-lg-4">

<div class="small-box bg-success">

<div class="inner">
<h3>{{ $categories }}</h3>
<p>Total Categories</p>
</div>

<div class="icon">
<i class="fas fa-list"></i>
</div>

</div>

</div>


<div class="col-lg-4">

<div class="small-box bg-warning">

<div class="inner">
<h3>{{ $products }}</h3>
<p>Total Products</p>
</div>

<div class="icon">
<i class="fas fa-box"></i>
</div>

</div>

</div>

</div>

@endsection
