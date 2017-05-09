11<?php

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
        	'nombre' => 'UMSA',
        	'categoria' => 'Transformación',
        	'imagen' => '/images/aliados/umsa.jpg',
        	'descripcion'=> 'Universidad Mayor de San Andres'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'BID',
        	'categoria' => 'Transformación',
        	'imagen' => '/images/aliados/bid.jpg',
        	'descripcion'=> 'Banco Interamericano de Desarrollo'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Hiller Electric',
        	'categoria' => 'Transformación',
        	'imagen' => '/images/aliados/hiller.jpg',
        	'descripcion'=> 'Hiller Electric'
        ]);

        DB::table('aliados')->insert([
        	'nombre' => 'Sociadem',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/sociadem.jpg',
        	'descripcion'=> 'Sociedad Científica de Administración de Empresas'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Teleférico',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/teleferico.jpg',
        	'descripcion'=> 'Mi Teleférico'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Tigo',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/tigo.jpg',
        	'descripcion'=> 'Tigo'
        ]);
        // DB::table('aliados')->insert([
        // 	'nombre' => 'AEISEC',
        // 	'categoria' => 'Aliado',
        // 	'imagen' => '/images/aliados/aeisec.jpg',
        // 	'descripcion'=> 'AEISEC'
        // ]);
    }
}
