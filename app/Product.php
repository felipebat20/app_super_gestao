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

    public function productDetail() {
        return $this->hasOne(ProductDetail::class, 'produto_id');
    }
}
