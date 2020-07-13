<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
        	'usuario' => 'YeMontero',
            'password' => Hash::make('6423'),
            'name' => 'Yefry',
            'lastName' => 'Montero',
            'typeID' => 'Cedula de ciudadania',
            'identificacion' => '1114391757',
            'phone' => '3128713635',
            'email' => 'yefrymontero@gmail.com'
        ]);
    }
}
