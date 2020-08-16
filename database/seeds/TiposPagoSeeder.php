<?php

use Illuminate\Database\Seeder;

class TiposPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $tipos_pago = [
         'Abono Factura',
         'Pago Total'
      ];

        foreach($tipos_pago as $key => $value){
            DB::table('tipos_pago')->insert([
                'nombre' => $value
            ]);
        } 
    }
}
