<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Model;

class LineaPedido extends Model
{
    //
    
    protected $fillable = ['pedido_id' , 'proveedor_id'];
    protected $guarded = ['id'];
}
