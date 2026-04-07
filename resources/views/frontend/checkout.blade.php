@extends('frontend.layout')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Checkout</h2>

    <form action="{{ route('order.place') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <label>Payment Method</label>
    <select name="payment" class="form-control">
        <option>Cash on Delivery</option>
        <option>UPI</option>
    </select>

    <br>


        <form action="{{ route('order.place') }}" method="POST">
    @csrf
    <button type="submit">Place Order</button>
</form>


    </form>

</div>

@endsection
