@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
            @section('title')
                Create User
            @show
        </h1>
        
        <form action="{{route('admin.users.add')}}" method="POST">
            @csrf

            <label for ="name">name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for ="email">email:</label><br>
            <input type="text" id="email" name="email"><br><br>

            <label for ="password">password:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <label for ="password_confirm">password (confirm):</label><br>
            <input type="password" id="password_confirm" name="password_confirm"><br><br>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection