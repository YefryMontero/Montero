<?php

use Illuminate\Database\Seeder;

class PesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         $pesos = [
         1,
         2,
         3,
         4,
         5,
         6,
         7,
         8,
         9,
         10,
         11,
         12,
         13,
         14,
         15,
         16,
         17,
         18,
         19,
         20,
         21,
         22,
         23,
         24,
         25,
         26,
         27,
         28,
         29,
         30

      ];

        foreach($pesos as $key => $value){
            DB::table('pesos')->insert([
                'cantidad' => $value
            ]);
        } 
    }
}
