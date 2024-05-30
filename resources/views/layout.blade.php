<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Default')</title>
        @yield('csslinks')
    </head>
    <body>
    @include('include.navbar')
    @include('include.header')
    <main class="nxl-container">
        <div class="nxl-content">
            @yield('content')
        </div>
        @include('include.footer')
    </main>
    @yield('jsscripts')
    </body>
</html>