<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
        'name',
        'site',
        'uf',
        'email'
    ];
}


//Fornecedor::find(id) retorna um objeto ou Fornecedor::find([1, 2, 3, 4])#ids retorna uma coleção de objetos.
//Fornecedor::where