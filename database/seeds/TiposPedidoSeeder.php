<?php

use Illuminate\Database\Seeder;

class TiposPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $tipos_pedido = [
         'Pedido',
         'Orden de compra'
      ];

        foreach($tipos_pedido as $key => $value){
            DB::table('tipos_pedido')->insert([
                'nombre' => $value
            ]);
        } 
    }
}
