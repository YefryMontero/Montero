<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;
   /*Autor: Yefry Montero
    *Created_at 9/08/2020
    *Update_at:
    */
class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
