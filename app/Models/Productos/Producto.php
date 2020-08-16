<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
