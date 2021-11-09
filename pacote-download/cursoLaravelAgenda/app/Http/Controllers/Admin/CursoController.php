<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view ('admin.cursos.index',compact('registros'));
    }

    // MÉTODO PARA ADICIONAR
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    // MÉTODO PARA SALVAR
    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado'])){
                $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        // dd($req);

        if($req->hasFile('imagem')){  //O hasfile confere se existe arquivo, se existir, vai começar a tratar a imagem
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir= "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }

    // MÉTODO EDITAR

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }

    // MÉTODO ATUALIZAR
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
    }else{
        $dados['publicado'] = 'nao';
    }

        if($req->hasFile('imagem')){ //O hasfile confere se existe algum arquivo com o nome imagem
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir= "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }

    // public function detalhes($id)
    // {
        
    // }
}