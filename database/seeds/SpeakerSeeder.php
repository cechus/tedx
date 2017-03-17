<?php

use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->insert(
            [
                'nombre'=>"Mohammed Mostajo Radiji",
                'charla'=>"",
                'descripcion'=>"Actualmente es un Investigador Postdoctoral en el laboratorio Pollen del Departamento de Neurologia y del Centro Ely and Edythe Broad de Estudios en Medicina Regenerativa y Celulas Madre en la Universidad de California San Francisco. Completó su PhD en la Universidad de Harvard. Actualmente, es Director Ejecutivo de Clubes de Ciencia Bolivia, una organización sin fines de lucro que busca traer educación científica de la mas alta calidad a estudiantes Bolivianos. También es Miembro Directivo de la organización Clubes de Ciencia Internacional.",
                'imagen'=>'images/speakers/MohammedMostajoRadji.png'
            ]
        );

        DB::table('speakers')->insert([
            'nombre'=>"Juan Sebastián Osorio",
            'charla'=>"",
            'descripcion'=>"Apasionado por la innovación y el emprendimiento social y en salud. Reconocido en el 2012 como uno de los “Innovadores menores de 35” en Colombia y a nivel mundial (MIT Technology Review) por sus desarrollos en dispositivos médicos personalizados. Ingeniero biomédico (Universidad EIA - Universidad CES, Colombia) con maestría en informática biomédica (Technische Universität München, Alemania). Director de proyectos en Sana Mobile (organización en informática en salud global del MIT), co-fundador de Clubes de Ciencia Colombia y HumaneX. Actualmente es también director de educación de la empresa Gemedco SA en Colombia, y miembro del hub de Medellín de la comunidad Global Shapers, del Foro Económico Mundial.",
            'imagen'=>'images/speakers/JuanSebastianOsorio.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Alina Santander",
            'charla'=>"",
            'descripcion'=>"Joven cientifica de 17 años, ganadora de medalla de oro en astronomia y astrofísica de las Olimpiadas Cientificas Estudiantiles del año 2015 y unica participante boliviana seleccionada para el desafio Human Exploration Rover Challenge organizado por la NASA. Ella junto con su equipo consiguieron el primer lugar en la competencia. Ademas de diseñar parte del vehiculo es la encargada de pilotearlo en el momento de la competencia.",
            'imagen'=>'images/speakers/AlinaSantander.png'
        ]);
    }
}
