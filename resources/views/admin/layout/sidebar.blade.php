<li>
<a href="{{ route('admin.categories.index') }}">Categories</a>
</li>

<li>
<a href="{{ route('admin.products.index') }}">Products</a>
</li>
<li class="nav-item">
    <form action="/admin/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link text-danger" style="border:none; background:none;">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </button>
    </form>
</li>
