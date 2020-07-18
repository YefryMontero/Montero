<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class PermisoSeeder extends Seeder
{
    public function run()
    {
        DB::table('permisos')->insert([
            'nombre' => 'Realizar Factura Venta',
            'slug' => 'realizar-factura-venta',
        ]);

        DB::table('permisos')->insert([
            'nombre' => 'Realizar Factura Compra',
            'slug' => 'realizar-factura-compra',
        ]);

        DB::table('permisos')->insert([
            'nombre' => 'Cambiar Precio',
            'slug' => 'cambiar-precio',
        ]);

        DB::table('permisos')->insert([
            'nombre' => 'Listar Productos Usuario',
            'slug' => 'listar-productos-usuario',
        ]);


    }
}
