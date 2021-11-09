<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
//O FILLABLE PASSA TODOS OS REGISTROS PARA QUE O LARAVEL SAIBA QUAIS SERÃO ATRIBUIDOS EM MASSA NO BD ATRAVÉS DO MÉTODO CREATE
{
    protected $fillable = [
        'nome', 'telefone', 'email' //CAMPOS DEFINIDOS
    ];
}
