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
            'usuarios',
            'permisos',
            'roles',
            'tipos_factura',
            'tipos_pago',
            'tipos_pedido',
            'usuarios_rol',
            'productos',
            'clientes',
            'proveedores',
            'categorias',
            'pesos',
            'unidades_medida',
            'inventario'
        ]);

        $this->call(user_seeder::class);
        $this->call(RolSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(TiposFacturaSeeder::class);
        $this->call(TiposPagoSeeder::class);
        $this->call(TiposPedidoSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(UnidadesMedidaSeeder::class);
        $this->call(PesosSeeder::class);
        $this->call(InventarioSeeder::class);
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
