<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

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