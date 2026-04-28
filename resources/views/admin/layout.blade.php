<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Panel</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.content-wrapper{
    background: linear-gradient(135deg,#eef2f3,#ffffff);
    min-height:100vh;
}
.brand-link{
    text-align:center;
    font-size:20px;
    font-weight:bold;
}
</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#">
<i class="fas fa-bars"></i>
</a>
</li>
</ul>



</nav>

<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="/admin" class="brand-link">
<span class="brand-text">Admin Panel</span>
</a>

<div class="sidebar">

<nav class="mt-3">

<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

<!-- Dashboard -->
<li class="nav-item">
<a href="/admin" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>Dashboard</p>
</a>
</li>

<!-- Categories -->
<li class="nav-item">
<a href="/admin/categories" class="nav-link">
<i class="nav-icon fas fa-list"></i>
<p>Categories</p>
</a>
</li>

<!-- Products -->
<li class="nav-item">
<a href="/admin/products" class="nav-link">
<i class="nav-icon fas fa-box"></i>
<p>Products</p>
</a>
</li>

<!-- Logout -->
<li class="nav-item">
<form action="/admin/logout" method="POST">
@csrf
<button type="submit" class="nav-link text-danger w-100 text-left border-0 bg-transparent">
<i class="nav-icon fas fa-sign-out-alt"></i>
<p class="d-inline">Logout</p>
</button>
</form>
</li>

</ul>

</nav>

</div>

</aside>

<!-- Content -->
<div class="content-wrapper">

<section class="content pt-4 px-3">

@yield('content')

</section>

</div>

<!-- Footer -->
<footer class="main-footer text-center">
<strong>Admin Panel</strong> © 2026
</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
