<!DOCTYPE html>
<html>
<head>
<style>

.content-wrapper{
background: linear-gradient(135deg,#eef2f3,#ffffff);
min-height:100vh;
}

</style>

<title>Admin Panel</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</head>
<body class="hold-transition sidebar-mini bg-light">


<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#">☰</a>
</li>
</ul>

</nav>

<aside class="main-sidebar sidebar-dark-indigo elevation-4">


<a href="#" class="brand-link">
<span class="brand-text font-weight-light">Admin Panel</span>
</a>

<div class="sidebar">

<nav class="mt-2">

<ul class="nav nav-pills nav-sidebar flex-column">

<li class="nav-item">
<a href="/admin" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>Dashboard</p>
</a>
</li>

<li class="nav-item">
<<<<<<< HEAD
<a href="/admin/categories" class="nav-link">
=======
<a href="{{ route('categories.index') }}" class="nav-link">
>>>>>>> d024ab1 (Update project: Like a E-commerce website)
<i class="nav-icon fas fa-list"></i>
<p>Categories</p>
</a>
</li>

<<<<<<< HEAD
<li class="nav-item">
<a href="/admin/products" class="nav-link">
<i class="nav-icon fas fa-box"></i>
=======

<li class="nav-item">
<a href="{{ route('products.index') }}" class="nav-link">
<i class="nav-icon fas fa-list"></i>
>>>>>>> d024ab1 (Update project: Like a E-commerce website)
<p>Products</p>
</a>
</li>

<li class="nav-item">
<<<<<<< HEAD
<a href="/admin/logout" class="nav-link text-danger">
<i class="nav-icon fas fa-sign-out-alt"></i>
<p>Logout</p>
</a>
</li>

=======
    <form action="/admin/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link text-danger" style="border:none; background:none;">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </button>
    </form>
</li>


>>>>>>> d024ab1 (Update project: Like a E-commerce website)
</ul>

</nav>

</div>

</aside>


<div class="content-wrapper">

<section class="content p-3">

<<<<<<< HEAD
@yield('content')
=======
  @yield('content')
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

</section>

</div>

</div>

</body>
</html>
