<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidades_medida';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
