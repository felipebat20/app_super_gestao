<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemDetail;
use App\Fornecedor;

class Item extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'description',
        'weight',
        'unidade_id',
        'fornecedor_id',
    ];

    public function itemDetail() {
        return $this->hasOne(ItemDetail::class, 'produto_id', 'id');
    }

    public function fornecedor() {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
    }
}
