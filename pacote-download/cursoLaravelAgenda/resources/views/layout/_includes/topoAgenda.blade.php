<header>
    <nav>
        <div class="nav-wrapper">
          <h1 class="header-title vertical-aligned">AGENDA</h1>
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