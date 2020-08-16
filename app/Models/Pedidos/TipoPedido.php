<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Model;

class TipoPedido extends Model
{
    //
    protected $table = 'tipos_pedido';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
