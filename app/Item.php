<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemDetail;

class Item extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'description',
        'weight',
        'unidade_id',
    ];

    public function itemDetail() {
        return $this->hasOne(ItemDetail::class, 'produto_id', 'id');
    }
}
