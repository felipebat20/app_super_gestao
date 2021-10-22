<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class ItemDetail extends Model
{
    protected $table = 'produto_detalhes';

    protected $fillable = [
        'produto_id',
        'length',
        'width',
        'height',
        'unidade_id',
    ];

    public function item() {
        return $this->belongsTo(Item::class, 'produto_id', 'id');
    }
}
