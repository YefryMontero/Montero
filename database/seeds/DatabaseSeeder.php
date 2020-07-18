<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

           $this->truncateTablas([
            'usuario',
            'permisos',
            'roles',
            'usuario_rol',
            'productos',
            'clientes',
            'proveedores'
        ]);

        $this->call(user_seeder::class);
        $this->call(RolSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(ProductoSeeder::class);
    }

     protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
