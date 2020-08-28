<?php

namespace App\Models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

//***Autor:***Yefry Montero**//
//***Created_At:***21/07/2020***//
//***Update_At:***21/07/2020***//


class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = 'usuarios';
    protected $fillable = ['user', 'phone', 'email', 'password'];

     public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }    


    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    }
}
