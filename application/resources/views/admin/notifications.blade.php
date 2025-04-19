@if($errors->any())
    <h4>{{$errors->first()}}</h4>
@endif

@if(Session::has('success'))
    <p class="alert {{ Session::get('success') }}">{{ Session::get('message') }}</p>
@endif