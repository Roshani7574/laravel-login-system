<!DOCTYPE html>
<html>
<head>

<title>Login System</title>

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
        <span class="navbar-brand">Laravel Login System</span>

        @if(auth()->check())
        <a href="/logout" class="btn btn-danger">Logout</a>
        @endif

    </div>
</nav>

<div class="container">

@yield('content')

</div>

</body>
</html>
