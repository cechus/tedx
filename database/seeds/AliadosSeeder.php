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
        	'nombre' => 'CAF',
        	'categoria' => 'Transformacion',
        	'imagen' => '/images/aliados/caf.jpg',
        	'descripcion'=> 'Banco de Desarrollo de América Latina'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'HillerElectric',
        	'categoria' => 'Transformacion',
        	'imagen' => '/images/aliados/he.jpg',
        	'descripcion'=> 'Hiller Electric'
        ]);

        DB::table('aliados')->insert([
        	'nombre' => 'UMSA',
        	'categoria' => 'Apoyo',
        	'imagen' => '/images/aliados/umsa.jpg',
        	'descripcion'=> 'Universidad Mayor de San Andres'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'BID',
        	'categoria' => 'Apoyo',
        	'imagen' => '/images/aliados/bid.jpg',
        	'descripcion'=> 'Banco Interamericano de Desarrollo'
        ]);

        DB::table('aliados')->insert([
        	'nombre' => 'Grupo Nueva Economía',
        	'categoria' => 'Innovación',
        	'imagen' => '/images/aliados/gne.jpg',
        	'descripcion'=> 'Grupo Nueva Economía'
        ]);

        DB::table('aliados')->insert([
            'nombre' => 'AEISEC',
            'categoria' => 'Aliado',
            'imagen' => '/images/aliados/aeisec.jpg',
            'descripcion'=> 'AEISEC'
        ]);
        DB::table('aliados')->insert([
            'nombre' => 'Tigo',
            'categoria' => 'Aliado',
            'imagen' => '/images/aliados/tigo.jpg',
            'descripcion'=> 'Tigo'
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
        	'nombre' => 'CEFIM',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/cefim.jpg',
        	'descripcion'=> 'CEFIM'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'UBER',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/uber.jpg',
        	'descripcion'=> 'uber'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Full food',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/ff.jpg',
        	'descripcion'=> 'Full Food'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Manca',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/manca.jpg',
        	'descripcion'=> 'Manca'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Centro de Estudiantes de Informática',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/cei.jpg',
        	'descripcion'=> 'Centro de Estudiantes de Informática'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Escuela de Auxiliares de Docencia',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/ead.jpg',
        	'descripcion'=> 'Escuela de Auxiliares de Docencia'
        ]);
        DB::table('aliados')->insert([
        	'nombre' => 'Instituto de la Juventud',
        	'categoria' => 'Aliado',
        	'imagen' => '/images/aliados/idj.jpg',
        	'descripcion'=> 'Instituto de la Juventud'
        ]);
    }
}
