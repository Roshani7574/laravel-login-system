<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/">MyShop</a>

    <div class="ms-auto">

 @auth
    <div class="dropdown d-inline">
        <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
            👤 {{ Auth::user()->name }}
        </button>

        <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">My Orders</a></li>

            {{-- ✅ ADMIN BUTTON --}}
            @if(Auth::user()->role == 'admin')
                <li>
                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                        Admin Panel
                    </a>
                </li>
            @endif

            <li>
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                    <button class="dropdown-item">Logout</button>
                </form>
            </li>

        </ul>
    </div>

@else
    <a href="/login" class="btn btn-success btn-sm">Login</a>
    <a href="{{ route('register')}}" class="btn btn-primary btn-sm">Register</a>
@endauth




    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
