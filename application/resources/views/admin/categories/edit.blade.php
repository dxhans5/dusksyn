@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
            @section('title')
                Edit Category
            @show
        </h1>

        <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
            @csrf

            <label for ="name">name:</label><br>
            <input type="text" id="name" name="name" value="{{$category->name}}" required><br><br>

            <label for="parent_id">parent_id:</label>
            <select name="parent_id" id="parent_id" class="form-control" required>
                <option value='0'>None</option>
            </select><br><br>

            <label for="status">status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="active" @if($category->status == 'active') selected @endif>active</option>
                <option value="inactive" @if($category->status == 'inactive') selected @endif>inactive</option>
                <option value="discontinued" @if($category->status == 'discontinued') selected @endif>discontinued</option>
            </select><br><br>

            <button type="submit" class="btn btn-primary">Edit Category</button>
        </form>
    </div>
@endsection