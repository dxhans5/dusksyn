@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
        @section('title')
            Category Dashboard
        @show
        </h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th>Sub Categories</th>
                    <th>Status</th>
                    <th>Added By</th>
                    <th>Updated By</th>
                    <th>Deleted By</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parent_id ? $category->parent->name : '' }}</td>
                        <td>...</td>
                        <td>{{ $category->status }}</td>
                        <td>{{ $category->added_by }}</td>
                        <td>{{ $category->updated_by }}</td>
                        <td>{{ $category->deleted_by }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection