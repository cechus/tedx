<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $l=12;
        for ($i=1; $i <=$l ; $i++) { 
            
        DB::table('posts')->insert([
            'title' => 'Titulo del Post'.$i,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda qui fugiat quidem reiciendis, recusandae. Unde suscipit iure sunt soluta quisquam aliquam corporis veritatis maiores odio. Pariatur, laborum a odit nobis.',
            'date' => "2017-.$i.-08 00:00:00",
            'image' => "/path/url",
        ]);
        DB::table('tags')->insert([
            'name' => 'tag'.$i
        ]);
    	}
        
        for ($i=1; $i <=$l ; $i++) { 
        DB::table('post_tag')->insert([
            'tag_id' => random_int(1, $l),
            'post_id' => random_int(1, $l)
        ]);
        }*/

        DB::table('speakers')->insert(
            [
            'nombre'=>"Alina Santander",
            'charla'=>" ",
            'descripcion'=>"Alina Santander Vinokurova lideró el equipo ganador del auto lunar para una competencia en la NASA y desea motivar a más estudiantes bolivianos.",
            'imagen'=>'images/speakers/AlinaSantander.jpg'
            ]
        );
        DB::table('speakers')->insert(
            [
            'nombre'=>"Mohammed Mostajo Radji",
            'charla'=>"Dr.",
            'descripcion'=>"El Dr. Mostajo Radji es actualmente un Investigador Postdoctoral en el laboratorio Pollen del Departamento de Neurologia y del Centro Ely and Edythe Broad de Estudios en Medicina Regenerativa y Celulas Madre en la Universidad de California San Francisco. En este laboratorio, utliza distintos metodos de genomica y biologia molecular para investigar mutaciones geneticas envueltas en la evolucion del cerebro.Completó su PhD en la Universidad de Harvard donde estudió la reprogramación de neuronas y la instrucción de cambios de conectividad en circuitos cerebrales. Mas allá de su interés en la manipulacion cerebral, está activamente envuelto en educacion científica.Actualmente, es Director Ejecutivo de Clubes de Ciencia Bolivia, una organización sin fines de lucro que busca traer educación científica de la mas alta calidad a estudiantes Bolivianos. También es Miembro Directivo de la organización Clubes de Ciencia Internacional.",
            'imagen'=>'images/speakers/MohammedMostajoRadji.png'
            ]
        );

    }
}
