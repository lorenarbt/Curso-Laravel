<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agenda;

class AgendaController extends Controller
{
    // MÉTODO PARA RETORNAR O USUÁRIO PARA A VIEW
    public function index()
    {
        $registros = Agenda::all();
        return view('admin.contatos.index',compact('registros'));//retornando uma view
    }
    
    //MÉTODO ADICIONAR QUE RETORNA A VIEW ADICIONAR
    public function adicionar()
    {
        return view('admin.contatos.adicionar');//retornando uma view
    }

    //MÉTODO SALVAR 
    public function salvar(Request $req)
    {
        // dd($req);
        $nome = $req->nome;
        $telefone = $req->telefone;
        $email = $req->email;
        
        $dados = $req->all();

        if (!empty($nome) && !empty($telefone) && !empty($email)){
            // return view('admin.contatos.adicionar');//retornando uma view
            Agenda::create($dados);//Salvando os  no BD, mas para isso, tenho que definir os fillables na model Agenda
            return redirect()->route('admin.agendas');//esse retorna uma rota
        }
        else{
            $msg = "Preencha todos os campos!";
            return view('admin.contatos.adicionar',compact('msg'));//retornando uma view
        }

        // Agenda::create($dados);//Salvando os  no BD, mas para isso, tenho que definir os fillables na model Agenda
        // return redirect()->route('admin.agendas');//esse retorna uma rota
    }

    //MÉTODO EDITAR
    public function editar($id)
    {
        $registro = Agenda::find($id);
        // if (!empty($nome) && !empty($telefone) && !empty($email)){
        return view('admin.contatos.editar',compact('registro'));//esse retorna uma view
        // }
        // else{
        //     echo"Preencha todos os campos!";
        // }
    }

    //MÉTODO ATUALIZAR
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Agenda::find($id)->create($dados);//Salvando os  no BD, mas para isso, tenho que definir os fillables na model Agenda
        return redirect()->route('admin.agendas');//esse retorna uma rota
    }

    public function deletar($id)
    {
        Agenda::find($id)->delete();
        return redirect()->route('admin.agendas');
    }
    
}
