<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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


    public function products(): HasMany
    {
        return $this->hasMany(Item::class, 'fornecedor_id', 'id');
    }
}


//Fornecedor::find(id) retorna um objeto ou Fornecedor::find([1, 2, 3, 4])#ids retorna uma coleção de objetos.
//Fornecedor::where