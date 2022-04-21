<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $fillable = ['nome'];

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class, 'client_id', 'id');
    }
}
