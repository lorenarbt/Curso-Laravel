{{-- VIEW DA AGENDA --}}
@extends('layout._includes.siteAgenda') {{-- TEMPLATE DO MATERIALIZE --}}
@section('titulo', 'Agenda')  {{-- TRAZENDO A CONFIGURAÇÃO DO TITULO --}}
@section('conteudo')
    <div class="container"> {{-- conatiner para alinhar o texto--}}
        <h2 class="header-title">Cadastrar Pessoas</h2>
        <div class="row">
            <table class="records">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        {{-- <th>Ação</th> Para os botões --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                          <tr>
                            {{-- <td>{{$registro->id}}</td> --}}
                            {{-- deram erro porque eu pus com letra maiúscula --}}
                            <td>{{$registro->nome}}</td>
                            <td>{{$registro->telefone}}</td> 
                            <td>{{$registro->email}}</td>
                            <td>
                                <a href="{{ route('admin.agendas.editar',$registro->id) }}"><button type="button" class="button green">Editar</button></a>

                                <a href="{{ route('admin.agendas.deletar',$registro->id) }}"><button type="button"  class="button red">Deletar</button></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td></td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="{{route ('admin.agendas.adicionar')}}"><button type="button" class="button blue">Adicionar</button></a>
        </div>
    </div>
        
@endsection