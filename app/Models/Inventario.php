<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Productos\Producto;
use App\Models\Productos\Categoria;
use App\Models\Productos\UnidadMedida;
use App\Models\Productos\Peso;

class Inventario extends Model
{
    
    protected $table = 'inventario';
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
