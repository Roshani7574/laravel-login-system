@extends('admin.layout')

@section('content')

<<<<<<< HEAD
=======


>>>>>>> d024ab1 (Update project: Like a E-commerce website)
<div class="container">

<h2 class="mb-3">Product Management</h2>

<form method="GET" class="mb-3 d-flex">
    <input type="text"
           name="search"
           placeholder="Search product"
           class="form-control me-2"
           value="{{ request('search') }}">

    <button class="btn btn-secondary">Search</button>
</form>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
Add Product
</a>
<div class="card shadow">

<div class="card-header bg-dark text-white">
Product List
</div>

<div class="card-body">


<table class="table table-striped table-hover shadow-sm">



<thead>

<tr>
<th>ID</th>
<th>Product Name</th>
<th>Image</th>
<th>Category</th>
<th>Subcategory</th>
<th>Price</th>
<th>Created</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($products as $product)

<tr>

<td>{{ $product->id }}</td>

<td>{{ $product->name }}</td>

<td>
@if($product->image)
<img src="{{ asset('product_images/'.$product->image) }}" width="60">
@else
-
@endif
</td>

<td>{{ $product->category->name }}</td>

<td>
{{ $product->subcategory ? $product->subcategory->name : '-' }}
</td>

<td>{{ $product->price }}</td>

<td>{{ $product->created_at->format('d M Y') }}</td>

<td>

<a href="{{ route('products.edit',$product->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('products.destroy',$product->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Delete this product?')">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>
</div>
</div>

<div class="mt-3">
{{ $products->links() }}
</div>

</div>

@endsection
