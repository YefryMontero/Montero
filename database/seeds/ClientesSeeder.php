<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     DB::table('clientes')->insert([
     	'nombre' => 'Mercamio',
        'apellido'=> 'No Aplica',
        'rut' => '01',
        'email' => 'Mercamio@montero.com',
        'direccion' => 'calle 15',
        'telefono' => '124124',
        'plazo_factura' => 60
    ]);

     DB::table('clientes')->insert([
     	'nombre' => 'Jorge',
        'apellido'=> 'Aji',
        'rut' => '00',
        'email' => 'Jorge@montero.com',
        'direccion' => 'calle 18', 
        'telefono' => '1231',
        'plazo_factura' => 60
    ]);

    }
}
