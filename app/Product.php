<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'description',
        'weight',
        'unidade_id',
    ];
}
