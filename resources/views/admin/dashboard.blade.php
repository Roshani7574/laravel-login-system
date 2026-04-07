@extends('admin.layout')

@section('content')

<<<<<<< HEAD
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
=======
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="m-0">Dashboard</h3>
        <span class="text-muted">Welcome back, Admin</span>
    </div>

    <!-- Small Boxes -->
    <div class="row">

        <!-- Users -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Users</h3>
                    <p>Manage Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Categories</h3>
                    <p>View Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Products -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Products</h3>
                    <p>Manage Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="{{ route('products.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Logout -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Logout</h3>
                    <p>Exit Panel</p>
                </div>
                <div class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <a href="/admin/logout" class="small-box-footer">
                    Logout <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- Info Card -->
    <div class="card mt-4">
        <div class="card-body">
            <h5>Quick Info</h5>
            <p class="text-muted">
                Use the sidebar or cards above to manage your application.
                This is your control panel.
            </p>
        </div>
    </div>
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

</div>

@endsection
