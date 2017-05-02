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
            'nombre'=>"Alina Santander Vinokurova",
            'charla'=>"",
            'descripcion'=>"Joven cientifica de 17 años, ganadora de medalla de oro en astronomia y astrofísica de las Olimpiadas Cientificas Estudiantiles del año 2015 y unica participante boliviana seleccionada para el desafio Human Exploration Rover Challenge organizado por la NASA. Ella junto con su equipo consiguieron el primer lugar en la competencia. Ademas de diseñar parte del vehiculo es la encargada de pilotearlo en el momento de la competencia.",
            'imagen'=>'images/speakers/AlinaSantander.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Carla Maldonado",
            'charla'=>"",
            'descripcion'=>"Docente-investigador de la UMSA y actual directora del Herbario Nacional de Bolivia. Galardonada con el premio 'Marie Curie' 2016 en reconocimiento a su trayectoria profesional y su investigacion 'Reexplorando los Andes en el siglo XXI en busca de la mejor corteza de quina para combatir la malaria'. Su área principal de investigación es la botánica sistemática y la evolución con énfasis en la familia Rubiaceae (la familia del café)",
            'imagen'=>'images/speakers/CarlaMaldonado.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Leonardo Viscarra",
            'charla'=>"",
            'descripcion'=>"Joven de 14 años investigador y genio boliviano. Experto en robótica. A pesar de haber nacido sin una mano, eso no le ha impedido ser destacado en todos los ambitos de su vida. A corta edad descubrió su pasion por la tecnología. Creador de su propia protesis de mano que es capaz de captar los impulsos de su muñeca para transmitirlos a los dedos, además esta actualmente está elaborando protesis parecidas para otros niños de bajos recursos que por diferentes circunstancias perdieron una de sus extremidades. Fue participante de los Clubes de Ciencia Bolivia como uno de los expositores para compartir con más jovenes su pasión por la robótica.",
            'imagen'=>'images/speakers/LeonardoViscarra.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Marco Antonio Quelca",
            'charla'=>"",
            'descripcion'=>"Cocinero de profesión, en su etapa de estudiante representó a Bolivia en los concursos de cocina creativa en Lima - Perú, México DF y Montevideo - Uruguay. Ha sido jefe de cocina en Hoteles cinco estrellas de la ciudad de Santa Cruz-Bolivia. Tiene una maestría en cocina contemporánea en el Centro internacional de Estudios Turísticos de Canarias, España y  desde el 2012 hasta la actualidad ha estado viviendo de manera itinerante en Bolivia y España, en este último país estando en restaurantes con estrellas Michelín. Es creador del movimiento Sabor Clandestino, que es compuesto por los proyectos Cascándole y Somos Calle, que buscan reflejar  una gastronomía contemporánea con las raíces e ingredientes tradicionales de la comida popular boliviana, ésto con el objetivo de transmitir nuestras tradiciones y culturas con una visión actual.",
            'imagen'=>'images/speakers/MarcoQuelca.png'
        ]);

        // DB::table('speakers')->insert([
        //     'nombre'=>"Jazmin Quiroz",
        //     'charla'=>"",
        //     'descripcion'=>"",
        //     'imagen'=>'images/speakers/JazminQuiroz.png'
        // ]);

        // DB::table('speakers')->insert([
        //     'nombre'=>"Alex Ayala",
        //     'charla'=>"",
        //     'descripcion'=>"Español de nacimiento, boliviano de corazón y tartamudo de vocación. Fue director del dominical del diario La Razón de Bolivia, editor de periodismo narrativo del semanario Pulso y fundador de Pie Izquierdo, primera revista boliviana de no ficción. Colabora con medios como Etiqueta Negra, Paula, Virginia Quaterly Review, Internazionale, El País, Gatopardo, The New York Times, Univisón y otros. Ha participado en talleres de crónica con periodistas como Alberto Salcedo, Francisco, Goldman, Julio Villanueva Chang, Jon Lee Anderson y Alma Guillermoprieto. Fue Premio Nacional de Periodismo de Bolivia en 2008. Formó parte de las antologías de crónica Bolivia a toda costa, Hora boliviana, Un ilegal en el paraíso y The Football Crónicas. Tiene tres libros publicados: Los mercaderes del Che, La vida de las cosas y Rigor mortis. La Fundación para el Nuevo Periodismo Iberoamericano lo ha incluido en el movimiento Nuevos Cronistas de Indias, que reúne a algunas de las voces más talentosas del periodismo latinoamericano.",
        //     'imagen'=>'images/speakers/AlexAyala.png'
        // ]);

        for ($i=0; $i < 8; $i++) {
            if($i % 2 === 0){
                $im = "images/speakers/man.png";
            }
            else{
                $im = "images/speakers/woman.png";
            }
            $speaker = [
                'nombre' => "",
                'charla' => "",
                'descripcion' => "Pronto revelaremos el nombre de este expositor. Tienes que estar muy atento!",
                'imagen' => $im
            ];
            DB::table('speakers')->insert($speaker);
        }


    }
}
