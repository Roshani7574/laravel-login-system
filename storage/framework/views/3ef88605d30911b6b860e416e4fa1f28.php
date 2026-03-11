<?php $__env->startSection('content'); ?>

<div class="auth-container">

<div class="auth-card">

<h3 class="text-center mb-4">Login</h3>

<?php if(session('error')): ?>
<div class="alert alert-danger">
<?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form method="POST" action="/login">
<?php echo csrf_field(); ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\login-system\resources\views/login.blade.php ENDPATH**/ ?>