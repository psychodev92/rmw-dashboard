<html>
    <head>
        <title>RMW Dashboard</title>

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])
    </head>

    <body>
        <h1>@yield('title')</h1>
        <hr/>
        <div class="pt-10">
            @yield('content')
        </div>
    </body>
</html>
