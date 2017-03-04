<?php

use Illuminate\Database\Seeder;

class AliadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Gold',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Platinum',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Platinum',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Platinum',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Amigos',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Amigos',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Amigos',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);;DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Platinum',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);
    }
}
