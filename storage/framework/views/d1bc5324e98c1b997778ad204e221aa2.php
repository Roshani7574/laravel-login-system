<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Admin Dashboard</h2>

<div class="row">

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Total Users</h5>
<p>Manage registered users</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Admin Panel</h5>
<p>Control system settings</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h5>Reports</h5>
<p>View activity reports</p>
</div>
</div>
</div>

</div>
<hr class="my-5">

<h3>Registered Users</h3>

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
</tr>
</thead>

<tbody>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td><?php echo e($user->id); ?></td>
<td><?php echo e($user->name); ?></td>
<td><?php echo e($user->email); ?></td>
<td><?php echo e($user->role); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>

</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\login-system\resources\views/admin.blade.php ENDPATH**/ ?>