@extends('admin.layout')

@section('content')

<div class="container">

<h2>Add Category</h2>

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Category Name</label>

<input type="text"
name="name"
class="form-control"
required>
</div>

<div class="mb-3">

<label>Parent Category</label>

<select name="parent_id" class="form-control">

<option value="">None</option>

@foreach($categories as $cat)

<option value="{{ $cat->id }}">
{{ $cat->name }}
</option>

@endforeach

</select>

</div>

<button type="submit" class="btn btn-success">
Save Category
</button>

</form>

</div>

@endsection
