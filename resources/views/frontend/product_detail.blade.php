@extends('layout')

@section('content')

<div class="container mt-5">

    <div class="row">

        <!-- Product Image -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('product_images/' . $product->image) }}"
                     class="img-fluid rounded"
                     style="height:700px; object-fit:cover;">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6 d-flex flex-column justify-content-center">

            <h2 class="fw-bold">{{ $product->name }}</h2>

            <h4 class="text-success mt-2">₹{{ $product->price }}</h4>

            <p class="text-muted mt-3">
                This is a stylish and high-quality product designed for comfort and modern fashion.
            </p>

            <!-- Add to Cart -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
    @csrf
    <select name="size" required>
        <option value="">Select Size</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
    </select>

    <button type="submit" class="btn btn-primary mt-2">Add to Cart</button>
</form>



        </div>

    </div>

    

</div>

@endsection
