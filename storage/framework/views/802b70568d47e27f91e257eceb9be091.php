<!DOCTYPE html>
<html>
<head>

<title>E-Commerce</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background-image: url('/images/bg.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
}

/* Center login & register forms */
.auth-container{
    min-height: 90vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* Card styling */
.auth-card{
    width:400px;
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:10px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

</style>

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">MyShop</span>

        <?php if(auth()->check()): ?>
        <a href="/logout" class="btn btn-danger">Logout</a>
        <?php endif; ?>

    </div>
</nav>

<div class="container">

<?php echo $__env->yieldContent('content'); ?>

</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Store</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            background: #000;
        }
        .navbar a {
            color: #fff !important;
        }
        .cart-badge {
            background: red;
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 12px;
        }
    </style>
</head>
<body>


<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark px-4">

    <a href="/" class="navbar-brand text-white">MyStore</a>

    <div class="ms-auto d-flex align-items-center">

        <?php
            $cart = session('cart', []);
            $count = count($cart);
        ?>

        <!-- Cart -->
        <a href="/cart" class="btn btn-outline-light position-relative me-3">
            🛒
            <?php if($count > 0): ?>
                <span style="
                    position:absolute;
                    top:-5px;
                    right:-10px;
                    background:red;
                    color:white;
                    border-radius:50%;
                    padding:3px 7px;
                    font-size:12px;">
                    <?php echo e($count); ?>

                </span>
            <?php endif; ?>
        </a>

        <!-- Auth -->
        <?php if(auth()->guard()->check()): ?>
            <span class="text-white me-2"><?php echo e(auth()->user()->name); ?></span>

            <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger btn-sm">Logout</button>
            </form>
        <?php else: ?>
            <a href="/login" class="btn btn-light btn-sm">Login</a>
        <?php endif; ?>

    </div>

</nav>



<!-- CONTENT -->
<div class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- FOOTER -->
<footer class="text-center mt-5 mb-3 text-muted">
    © 2026 MyStore
</footer>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\login-system\resources\views/layout.blade.php ENDPATH**/ ?>