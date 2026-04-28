@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Dashboard</h2>
        <span class="text-muted">Welcome back, Admin</span>
    </div>

    <!-- Action Cards -->
    <div class="row">

        <!-- Manage Users -->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h4>Users</h4>
                    <p>Manage Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More Info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Categories -->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4>Categories</h4>
                    <p>View Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">
                    More Info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Products -->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>Products</h4>
                    <p>Manage Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="{{ route('products.index') }}" class="small-box-footer">
                    More Info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- Logout -->
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4>Logout</h4>
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
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h5>Quick Info</h5>
            <p class="text-muted mb-0">
                Use the sidebar or cards above to manage categories, products, and users.
            </p>
        </div>
    </div>

</div>

@endsection
