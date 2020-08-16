<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
          $tipos_Categorias = [
         'Granel',
         'Malla',
         'Segunda',
         'Primera',
      ];

        foreach($tipos_Categorias as $key => $value){
            DB::table('categorias')->insert([
                'nombre' => $value
            ]);
        } 
    }
}
