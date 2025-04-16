<form action="{{route('authenticate')}}" method="POST">
    @csrf

    <label for="email">Email:</label>
    <input type="text" name="email" value="" />

    <label for="password">Password:</label>
    <input type="password" name="password" value="" />

    <button type="submit">Login</button>
</form>

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif