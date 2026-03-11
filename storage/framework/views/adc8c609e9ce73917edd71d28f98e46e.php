<?php $__env->startSection('content'); ?>

<h2 class="mb-4">User Dashboard</h2>

<div class="card shadow">
<div class="card-body">

<h4>Welcome <?php echo e(Auth::user()->name); ?></h4>

<p class="text-muted">
You are successfully logged into the system.
</p>

</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\login-system\resources\views/dashboard.blade.php ENDPATH**/ ?>