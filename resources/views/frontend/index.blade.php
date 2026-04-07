@extends('frontend.layout')

@section('content')


<form method="GET" action="/" class="d-flex mb-4">
    <input type="text" name="search" class="form-control" placeholder="Search products...">
    <button class="btn btn-dark ms-2">Search</button>
</form>

<div style="
    background: url('/bg.jpeg') center/cover no-repeat;
    height: 300px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
">

    <h1 style="background: rgba(0,0,0,0.5); padding: 10px 20px;">
        Welcome to MyShop
    </h1>

</div>


<h2>Products</h2>

<div class="row">

<div class="container mt-5">
    <div class="row">

        @foreach($products as $product)

        <div class="col-md-3 mb-4">

            <div class="card shadow-sm h-80">

               <a href="/product/{{ $product->id }}">
    <img src="{{ asset('product_images/' . $product->image) }}" class="card-img-top">

</a>


                <div class="card-body text-center">

                    <h6>{{ $product->name }}</h6>

                    <p class="text-success fw-bold">₹{{ $product->price }}</p>

                    <form action="/cart/add/{{ $product->id }}" method="POST">
                     @csrf
                         <button class="btn btn-primary">Add to Cart</button>
                    </form>

                </div>

            </div>

        </div>

        @endforeach

    </div>
</div>


</div>

@endsection
