@extends('admin.layout')

@section('content')
    <div class="container">
        <h1>
            @section('title')
                Edit User
            @show
        </h1>

        <form action="{{route('admin.users.update', $user->id)}}" method="POST">
            @csrf

            <label for ="name">name:</label><br>
            <input type="text" id="name" name="name" value="{{$user->name}}" required><br><br>

            <label for ="email">email:</label><br>
            <input type="text" id="email" name="email" value="{{$user->email}}" required><br><br>

            <button type="button" class="btn btn-alert">Change Password</button><br><br>

            <button type="submit" class="btn btn-primary">Edit User</button>
        </form>
    </div>
@endsection