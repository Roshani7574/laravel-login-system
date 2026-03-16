@extends('admin.layout')

@section('content')

<div class="container">

<h2 class="mb-4">Add Product</h2>

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Category</label>
<select name="category_id" class="form-control" required>

<option value="">Select Category</option>

@foreach($categories as $category)
<option value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach

</select>
</div>

<div class="mb-3">
<label class="form-label">Subcategory</label>
<select name="subcategory_id" class="form-control">

<option value="">Select Subcategory</option>

</select>
</div>

<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" name="price" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
<label class="form-label">Product Image</label>
<input type="file" name="image" class="form-control">
</div>

<button type="submit" class="btn btn-primary">
Add Product
</button>

</form>

</div>
@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif


@endsection
