<html>
    <head>
        <title>{{env('STORE_NAME', 'Unknown')}} - @yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            @yield('layout-content')
        </div>
    </body>
</html>