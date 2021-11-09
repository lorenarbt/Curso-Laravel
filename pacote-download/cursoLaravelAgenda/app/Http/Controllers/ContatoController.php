<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
      $contatos = [
          (object)["nome"=>"Maria", "tel"=>"6564773"],
          (object)["nome"=>"Pedro", "tel"=>"6444444"]
      ];

      $contato = new Contato();
    //   $con = $contato->lista();
    //   dd($con->nome);
      dd($contato->lista());

      return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req['nome']);
        return "Esse é o Criar o ContatoController";
    }

    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }
}
