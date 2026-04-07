@extends('frontend.layout')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4 text-center">🛒 Your Cart</h2>

    @php $total = 0; @endphp

    @if(count($cart) > 0)

    <div class="card shadow p-4">

    @foreach($cart as $id => $item)

    @php
        $itemTotal = $item['price'] * $item['quantity'];
        $total += $itemTotal;
    @endphp

    <div class="row align-items-center mb-4 border-bottom pb-3">

        <!-- Name -->
        <div class="col-md-3">
            <h5>{{ $item['name'] }}</h5>
            <p>Size: {{ $item['size'] ?? '-' }}</p>
        </div>

        <!-- Price -->
        <div class="col-md-2 text-center">
            ₹{{ $item['price'] }}
        </div>

        <!-- Quantity -->
        <div class="col-md-3 text-center">

            <form action="/cart/decrease/{{ $id }}" method="POST" style="display:inline;">
                @csrf
                <button class="btn btn-outline-secondary btn-sm">-</button>
            </form>

            <span class="mx-2">{{ $item['quantity'] }}</span>

            <form action="/cart/increase/{{ $id }}" method="POST" style="display:inline;">
                @csrf
                <button class="btn btn-outline-secondary btn-sm">+</button>
            </form>

        </div>

        <!-- Total -->
        <div class="col-md-2 text-center">
            ₹{{ $itemTotal }}
        </div>

        <!-- Remove -->
        <div class="col-md-2 text-end">
            <form action="/cart/remove/{{ $id }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-sm">Remove</button>
            </form>
        </div>

    </div>

    @endforeach

        <!-- Total -->
        <div class="text-end mt-4">
            <h4>Total: ₹{{ $total }}</h4>
        </div>

        <!-- Checkout -->
        <div class="text-end mt-3">
            <a href="/checkout" class="btn btn-success px-4">Proceed to Checkout</a>
        </div>

    </div>

    @else

        <div class="text-center mt-5">
            <h4>Your cart is empty 😐</h4>
            <a href="/" class="btn btn-primary mt-3">Shop Now</a>
        </div>

    @endif

</div>

@endsection
