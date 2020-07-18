<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        
	$productos = [
         'Tomate',
         'Pepino',
         'Aji',
         'Pimenton',
         'Maracuya'
      ];

        foreach($productos as $key => $value){
            DB::table('productos')->insert([
                'nombre' => $value
            ]);
        }
	}
	

}
