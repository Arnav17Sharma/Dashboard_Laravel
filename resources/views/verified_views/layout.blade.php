<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Default')</title>
        @yield('csslinks')
    </head>
    @include('verified_views.include.navbar')
    @include('verified_views.include.header')
    <main class="nxl-container apps-container apps-calendar">
        <div class="nxl-content">
            @yield('content')
        </div>
        @include('verified_views.include.footer')
    </main>
    @yield('jsscripts')
    </body>
</html>