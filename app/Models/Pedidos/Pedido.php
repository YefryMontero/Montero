<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pedidos\PedidoCiente;
use App\Models\Pedidos\PedidoProveedor;
use App\Models\Pedidos\LineaPedido;

class Pedido extends Model
{
    //
    protected $table = 'pedidos';
    protected $fillable = ['usuario_id','created_at','tipo_id'];

    public function pedidosClientes(){
         return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function pedidosProveedores(){
         return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function LineasPedido(){
         return $this->belongsTo(Peso::class, 'pesos_id');
    }
}
