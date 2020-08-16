<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('inventario')->insert([
            'producto_id' =>1,
            'categoria_id'  => 4,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //2
         DB::table('inventario')->insert([
            'producto_id' =>1,
            'categoria_id'  => 2,
            'pesos_id' =>1,
            'unidades_medida_id' =>4,
            'cantidad' =>0,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //3 
          DB::table('inventario')->insert([
            'producto_id' =>2,
            'categoria_id'  => 1,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

            DB::table('inventario')->insert([
            'producto_id' =>3,
            'categoria_id'  => 1,
            'pesos_id' => 20,
            'unidades_medida_id' =>1,
            'cantidad' =>0,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

             DB::table('inventario')->insert([
            'producto_id' =>4,
            'categoria_id'  => 1,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


             DB::table('inventario')->insert([
            'producto_id' =>5,
            'categoria_id'  => 1,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

             DB::table('inventario')->insert([
            'producto_id' =>2,
            'categoria_id'  => 2,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


             DB::table('inventario')->insert([
            'producto_id' =>4,
            'categoria_id'  => 2,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


                DB::table('inventario')->insert([
            'producto_id' =>1,
            'categoria_id'  => 1,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


             DB::table('inventario')->insert([
            'producto_id' =>5,
            'categoria_id'  => 3,
            'pesos_id' =>1,
            'unidades_medida_id' =>1,
            'cantidad' =>1,
            'descripcion' =>'Producto de alta calidad',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
