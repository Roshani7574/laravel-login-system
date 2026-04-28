@extends('frontend.layout')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Admin Panel</h5>
                    <p>Control system settings</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Reports</h5>
                    <p>View activity reports</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Total Users</h5>
                    <p>{{ count($users) }}</p>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <h3>Registered Users</h3>

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
