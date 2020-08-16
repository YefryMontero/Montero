<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = 'pedidos';
    protected $fillable = ['producto_id','categoria_id','pesos_id','unidad_medida_id','cantidad','descripcion'];

    public function productos(){
         return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function categorias(){
         return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function pesos(){
         return $this->belongsTo(Peso::class, 'pesos_id');
    }

    public function unidadesMedida(){
         return $this->belongsTo(UnidadMedida::class, 'unidades_medida_id');
    }
}
