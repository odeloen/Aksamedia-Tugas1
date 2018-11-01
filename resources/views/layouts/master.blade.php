<!DOCTYPE html>
<html lang="en">
    <head>        
        @yield('title')
        @include('partials.css')
    </head>
    <body>
        @include('partials.side-navbar')
        @yield('content')            
        @include('partials.js')        
        @yield('unique-js')
    </body>
</html>