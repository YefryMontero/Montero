<?php

use Illuminate\Database\Seeder;

class TiposFacturaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

          $tiposFactura =[
          	'Venta al contado',
            'Factura de venta crédito',
            'Compra al contado',
            'Factura de compra a credito'
        ];

          foreach($tiposFactura as $key => $value){
            DB::table('tipos_factura')->insert([
                'nombre' => $value
            ]);
        }

       }		
}
