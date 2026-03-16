@extends('admin.layout')

@section('content')

<div class="container">

<h2>Edit Category</h2>

<form action="{{ route('categories.update',$category->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Category Name</label>

<input type="text"
name="name"
class="form-control"
value="{{ $category->name }}"
required>

</div>

<div class="mb-3">

<label>Parent Category</label>

<select name="parent_id" class="form-control">

<option value="">None</option>

@foreach($categories as $cat)

<option value="{{ $cat->id }}"
@if($category->parent_id == $cat->id) selected @endif>

{{ $cat->name }}

</option>

@endforeach

</select>

</div>

<button class="btn btn-primary">
Update Category
</button>

</form>

</div>

@endsection
