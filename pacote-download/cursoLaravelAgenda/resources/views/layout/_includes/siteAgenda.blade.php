<html>
    <head>
        <title>@yield('titulo')</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="{{asset('favicom.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" href="{{asset('css/button.css')}}">
        <link rel="stylesheet" href="{{asset('css/records.css')}}">
        <link rel="stylesheet" href="{{asset('css/modal.content.css')}}">
    </head>
    <body>
        
        @include('layout._includes.topoAgenda')

    @yield('conteudo')

    @include('layout._includes.footerAgenda')

    </body>
</html>