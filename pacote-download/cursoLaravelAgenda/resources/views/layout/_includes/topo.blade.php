<!DOCTYPE html>
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
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper deep orange">
              <a href="#!" class="brand-logo">Curso de Laravel</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                {{-- TESTE PARA SABER SE O USUÁRIO ESTÁ LOGADO. O MÉTODO GUEST FAZ A VERIFICAÇÃO --}}
                @if(Auth::guest()) 
                 {{-- CAMPO PARA LOGIN(Quando ele não tiver logado aparece isso:) --}}
                <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                {{-- SERÁ MOSTARDO APENAS SE O USER ESTIVER LOGADO --}}
                <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li> 
                {{-- com o método auth user conseguimos pegar os atrubutos do usuário, nesse caso pegamos o nome --}}
                <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                {{-- Mostrar a agenda, apenas se tiver logado --}}
                <li><a href="{{route('admin.agendas')}}">Agenda</a></li>
                @endif

              </ul>
            </div>
          </nav>
        
          <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            @if(Auth::guest())
                 {{-- CAMPO PARA LOGIN(Quando ele não tiver logado aparece isso:) --}}
                <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                {{-- SERÁ MOSTARDO APENAS SE O USER ESTIVER LOGADO --}}
                <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li> 
                {{-- com o método auth user conseguimos pegar os atrubutos do usuário, nesse caso pegamos o nome --}}
                <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                @endif
            

          </ul>
    </header>