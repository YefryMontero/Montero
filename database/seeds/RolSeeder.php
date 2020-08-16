<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolSeeder extends Seeder
{
    public function run()
    {
        $rols = [
            
            'Administrador',
            'Empleado',
            'Secretaria',
            'Contadora',
            'Cliente',
            'Proveedor'
        ];
        foreach($rols as $key => $value){
            DB::table('roles')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

         DB::table('usuarios_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1
        ]);
        DB::table('usuarios_rol')->insert([
             'rol_id' => 1,
            'usuario_id' => 2
        ]);
      /*  DB::table('usuarios_rol')->insert([
            'rol_id' => 6,
            'usuario_id' => 3
        ]);
        DB::table('usuarios_rol')->insert([
            'rol_id' => 6,
            'usuario_id' => 4
         ]);
        DB::table('usuarios_rol')->insert([
            'rol_id' => 5,
            'usuario_id' => 5
        ]);
       DB::table('usuarios_rol')->insert([
            'rol_id' => 5,
            'usuario_id' => 6
        ]);
        DB::table('usuarios_rol')->insert([
            'rol_id' => 3,
            'usuario_id' => 7
        ]);
*/
    }
}