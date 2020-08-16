g<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Model;

class PedidoCliente extends Model
{
    //
    protected $table = 'pedidos_cliente';
    protected $fillable = ['pedido_id' , 'cliente_id'];
    protected $guarded = ['id'];
}
