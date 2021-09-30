<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'produto_detalhes';
    protected $fillable = [
        'produto_id',
        'length',
        'width',
        'height',
        'unidade_id',
    ];
}
