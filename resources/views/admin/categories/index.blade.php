@extends('admin.layout')
<<<<<<< HEAD
=======

>>>>>>> d024ab1 (Update project: Like a E-commerce website)
<style>

.category-page{
background: linear-gradient(135deg,#f8f9fa,#e9ecef);
padding:20px;
border-radius:10px;
}

</style>


@section('content')

<<<<<<< HEAD
=======


>>>>>>> d024ab1 (Update project: Like a E-commerce website)
<div class="container category-page">

    <h2>Category Management</h2>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
        Add Category
    </a>
<div class="card shadow">

<div class="card-header bg-dark text-white">
<h5 class="mb-0">Category List</h5>
</div>

<div class="card-body">

<table class="table table-striped table-hover table-bordered shadow-sm">

        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Parent Category</th>
                <th>Created Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)

            <tr>
                <td>{{ $category->id }}</td>

                <td>{{ $category->name }}</td>

                <td>
                    {{ $category->parent ? $category->parent->name : 'Main Category' }}
                </td>

                <td>{{ $category->created_at->format('d M Y') }}</td>

                <td>

                    <a href="{{ route('categories.edit',$category->id) }}"
                       class="btn btn-warning btn-sm">
                       Edit
                    </a>

                    <form action="{{ route('categories.destroy',$category->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Delete this category?')">
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


</div>
{{ $categories->links() }}


@endsection
