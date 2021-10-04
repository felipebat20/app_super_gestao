<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

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

    public function product() {
        return $this->belongsTo(Product::class, 'produto_id');
    }
}
