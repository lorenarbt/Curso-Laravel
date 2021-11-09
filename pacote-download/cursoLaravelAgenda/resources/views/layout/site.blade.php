<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        
        @include('layout._includes.topo')

    @yield('conteudo')

    @include('layout._includes.footer')

    </body>
</html>