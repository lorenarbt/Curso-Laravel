@extends('layout.site')
@section('titulo', 'Agenda')
@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Contato</h3>
        <div class="row">
            <form class= "" action="{{route('admin.agendas.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put"> 
            {{-- esse include trará os campos de entrada desse nosso formulário --}}
            @include('admin.contatos._form'){{-- admin é pasta, contatos é pasta e _form é o index --}}
            <button class="btn deep-orange">Atualizar</button>


        </form>
        </div>
        
    </div>
        
@endsection