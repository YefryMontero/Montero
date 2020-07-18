<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('usuario')->insert([
			'user' => 'YeMontero',
			'email' => 'yefrymontero@montero.com',
			'phone' => '3128713635',
			'password' => bcrypt('6423'),
		]);
		DB::table('usuario')->insert([
			'user' => 'RicardoMontero',
			'email' => 'ricardomontero@montero.com',
			'phone' => '3137159883',
			'password' => bcrypt('6423840'),
		]);

		DB::table('usuario')->insert([
			'user' => 'MarinoGomez',
			'email' => 'MarinoGomez@montero.com',
			'phone' => '311752511',
			'password' => bcrypt('6423840'),
		]);
		DB::table('usuario')->insert([
			'user' => 'JavierCabezas',
			'email' => 'JavierCabezas@montero.com',
			'phone' => '311725141',
			'password' => bcrypt('6423840'),
		]);
		DB::table('usuario')->insert([
			'user' => 'DonJorge',
			'email' => 'DonJorge@montero.com',
			'phone' => '311525141',
			'password' => bcrypt('6423840'),
		]);
		DB::table('usuario')->insert([
			'user' => 'Mercamio',
			'email' => 'Mercamio@montero.com',
			'phone' => '317525141',
			'password' => bcrypt('6423840'),
		]);

       
	}
}
