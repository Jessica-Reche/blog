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
            <!--Fecha-->
            <p class="text-end">{{fechaActual("d/m/y")}} </p>
                   
                      
                   
         


           
            @yield('contenido')
        </div>
    </body>
</html>
