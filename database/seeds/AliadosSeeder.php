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
        	'categoria' => 'Transformación',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Innovación',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Creatividad',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);DB::table('aliados')->insert([
        	'nombre' => 'Uno',
        	'categoria' => 'Aliados',
        	'imagen' => '/images/aliados/test.jpg',
        	'descripcion'=> 'Description'
        ]);
    }
}
