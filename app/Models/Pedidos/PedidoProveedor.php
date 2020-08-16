<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Model;

class PedidoProveedor extends Model
{
    //
    protected $table = 'pedidos_proveedor';
    protected $fillable = ['pedido_id' , 'proveedor_id'];
    protected $guarded = ['id'];
}
