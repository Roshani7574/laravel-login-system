@extends('admin.layout')

@section('content')

<div class="container">

<h2>Edit Product</h2>

<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">

    <div class="mb-3">

<label class="form-label">Current Image</label><br>

@if($product->image)
<img src="{{ asset('product_images/'.$product->image) }}" width="80">
@else
<p>No image</p>
@endif

</div>

<div class="mb-3">

<label class="form-label">Change Image</label>

<input type="file" name="image" class="form-control">

</div>

@csrf
@method('PUT')

<div class="mb-3">

<label>Product Name</label>

<input type="text"
name="name"
class="form-control"
value="{{ $product->name }}"
required>

</div>

<div class="mb-3">

<label>Category</label>

<select name="category_id"
class="form-control">

@foreach($categories as $cat)

<option value="{{ $cat->id }}"
@if($product->category_id == $cat->id) selected @endif>

{{ $cat->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Subcategory</label>

<select name="subcategory_id"
class="form-control">

<option value="">None</option>

@foreach($subcategories as $sub)

<option value="{{ $sub->id }}"
@if($product->subcategory_id == $sub->id) selected @endif>

{{ $sub->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Price</label>

<input type="number"
name="price"
value="{{ $product->price }}"
class="form-control">

</div>

<div class="mb-3">

<label>Description</label>

<textarea name="description"
class="form-control">

{{ $product->description }}

</textarea>

</div>

<button class="btn btn-primary">
Update Product
</button>

</form>

</div>

@endsection
