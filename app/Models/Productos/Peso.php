<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Model;

class Peso extends Model
{
    protected $table = 'pesos';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
