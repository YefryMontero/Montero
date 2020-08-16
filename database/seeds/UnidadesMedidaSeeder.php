<?php

use Illuminate\Database\Seeder;

class UnidadesMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $unidades_medida = [
         'Kilo',
         'Gramo',
         'Canastillas',
         'Libra',
         'Bulto',
         'Medio'
      ];

        foreach($unidades_medida as $key => $value){
            DB::table('unidades_medida')->insert([
                'nombre' => $value
            ]);
        } 
    }
}
