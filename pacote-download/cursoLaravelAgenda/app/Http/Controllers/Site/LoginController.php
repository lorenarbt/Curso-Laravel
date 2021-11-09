<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{//MÉTODO PARA A TELA DE LOGIN
    public function index()
    {
        return view('login.index');
    }

    // MÉTODO ENTRAR
    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email' => $dados['email'], 'password' =>$dados['senha']]))
        {
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('site.login');
    }
    
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}


