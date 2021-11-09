<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);

Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);

Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);

Route::put('/contato',['uses'=>'ContatoController@editar']);


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/cursos',['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);
    Route::get('admin/cursos/adicionar',['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar{id}',['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar{id}',['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar{id}',['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);
    // Route::get('/admin/cursos/detalhes{id?}',['as'=>'admin.cursos.detalhes', 'uses'=>'Admin\CursoController@detalhes']);

    Route::get('/admin/agendas',['as'=>'admin.agendas', 'uses'=>'Admin\AgendaController@index']);
    Route::get('admin/agendas/adicionar',['as'=>'admin.agendas.adicionar', 'uses'=>'Admin\AgendaController@adicionar']);
    Route::post('/admin/agendas/salvar',['as'=>'admin.agendas.salvar', 'uses'=>'Admin\AgendaController@salvar']);
    Route::get('/admin/agendas/editar{id}',['as'=>'admin.agendas.editar', 'uses'=>'Admin\AgendaController@editar']);
    Route::put('/admin/agendas/atualizar{id}',['as'=>'admin.agendas.atualizar', 'uses'=>'Admin\AgendaController@atualizar']);
    Route::get('/admin/agendas/deletar{id}',['as'=>'admin.agendas.deletar', 'uses'=>'Admin\AgendaController@deletar']);
});

