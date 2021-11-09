{{-- VIEW DE ADICIONAR --}}
@extends('layout.site') {{-- TEMPLATE DO MATERIALIZE --}}
@section('titulo', 'Agenda')  {{-- TRAZENDO A CONFIGURAÇÃO DO TITULO --}}
@section('conteudo')
    <div class="container"> {{-- conatiner para alinhar o texto--}}
        <h3 class="center">Adicionar Contato</h3>
        @php
            if(isset($msg)){//A MSG ESTÁ NO AGENDA CONTROLLER
                echo $msg;
            }

        @endphp
        <div class="row">
            <form class="" action="{{route('admin.agendas.salvar')}}" method="post">
                {{csrf_field()}}
                @include('admin.contatos._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
      
    </div>
        
@endsection