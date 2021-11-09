<?php
// MODEL
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object)[
            'nome'=>'guilherme',
            'tel'=>'45336363'
        ];
    }
   
}
