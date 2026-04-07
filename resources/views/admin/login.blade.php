<<<<<<< HEAD
<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
=======
<form method="POST" action="/admin/login" class="container mt-5" style="max-width:400px;">
    @csrf

    <h3 class="mb-3">Admin Login</h3>

    <input type="text" name="username" class="form-control mb-2" placeholder="Username">

    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-dark w-100">Login</button>
>>>>>>> d024ab1 (Update project: Like a E-commerce website)
</form>
