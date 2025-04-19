<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif

        @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
            Application Homepage
        </div>
    </body>
    @vite(['resources/js/app.js'])
</html>