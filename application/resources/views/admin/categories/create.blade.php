@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
            @section('title')
                Create Category
            @show
        </h1>
        
        <form action="{{route('admin.categories.add')}}" method="POST">
            @csrf

            <label for ="name">name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="parent_id">parent_id:</label>
            <select name="parent_id" id="parent_id" class="form-control" required>
                <option value='0'>None</option>
            </select><br><br>

            <label for="status">status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="active">active</option>
                <option value="inactive">inactive</option>
                <option value="discontinued">discontinued</option>
            </select><br><br>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
@endsection