<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>
        <script type="text/javascript" src="/js/app.js"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      

     
    </head>
    <body>
        <div class="container">
            @include('partials.nav')
            @yield('contenido')
        </div>
    </body>
</html>
