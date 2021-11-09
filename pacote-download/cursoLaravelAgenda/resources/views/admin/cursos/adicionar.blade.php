@extends('layout.site')
@section('titulo', 'Cursos')
@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar cursos</h3>
        <div class="row">
            <form class= "" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data"> {{-- ENCTYPE É OBRIGATÓRIO PARA QUANDO QUEREMOS SUBIR ALGUM ARQUIVO PARA O NOSSO SISTEMA, NESSE CASO É PARA SUBIR A IMAGEM--}}
            {{ csrf_field() }}
            {{-- esse include trará os campos de entrada dese nosso formulário --}}
            @include('admin.cursos._form')
            <button class="btn deep-orange">Salvar</button>


        </form>
        </div>
        
    </div>
        
@endsection