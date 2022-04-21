<?php

namespace App;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    protected $fillable = ['client_id'];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'client_id', 'id');
    }
}
