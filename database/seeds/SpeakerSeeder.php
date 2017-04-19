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

        DB::table('speakers')->insert([
            'nombre'=>"Alina Santander",
            'charla'=>"",
            'descripcion'=>"Joven cientifica de 17 años, ganadora de medalla de oro en astronomia y astrofísica de las Olimpiadas Cientificas Estudiantiles del año 2015 y unica participante boliviana seleccionada para el desafio Human Exploration Rover Challenge organizado por la NASA. Ella junto con su equipo consiguieron el primer lugar en la competencia. Ademas de diseñar parte del vehiculo es la encargada de pilotearlo en el momento de la competencia.",
            'imagen'=>'images/speakers/AlinaSantander.png'
        ]);

        for ($i=0; $i < 11; $i++) {
            if($i % 2 === 0){
                $im = "images/speakers/man.png";
            }
            else{
                $im = "images/speakers/woman.png";
            }
            $speaker = [
                'nombre' => "",
                'charla' => "",
                'descripcion' => "",
                'imagen' => $im
            ];
            DB::table('speakers')->insert($speaker);
        }

        // DB::table('speakers')->insert(
        //     [
        //         'nombre'=>"Marco Antonio Quelca",
        //         'charla'=>"",
        //         'descripcion'=>"Gastrónomo que combina la cocina con el arte contemporáneo buscando reivindicar los sabores bolivianos y entablar un dialogo político, social y cultural.",
        //         'imagen'=>'images/speakers/MarcoQuelca.png'
        //     ]
        // );
        //
        // DB::table('speakers')->insert([
        //     'nombre'=>"Carla Maldonado",
        //     'charla'=>"",
        //     'descripcion'=>"Docente e investigadora apasionada de la UMSA y directora del Herbario Nacional de Bolivia. Galardonada con el premio Marie Curie 2016.",
        //     'imagen'=>'images/speakers/CarlaMaldonado.png'
        // ]);
    }
}
