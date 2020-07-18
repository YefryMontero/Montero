<?php

use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('proveedores')->insert([
     	'nombre' => 'Marino Gomez',
        'razon_social'=> 'Regimen comun',
        'rut' => '6423266',
        'email' => 'Marinogomez@montero.com',
        'direccion' => 'calle 15',
        'telefono' => '124124']);

     DB::table('proveedores')->insert([
     	'nombre' => 'Javier Cabezas',
        'razon_social'=> 'Regimen comun',
        'rut' => '00',
        'email' => 'javier@montero.com',
        'direccion' => 'calle 18', 
        'telefono' => '1231']);
    }
}
