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
            'nombre'=>"Marco Antonio Quelca",
            'charla'=>"",
            'descripcion'=>"Cocinero de profesión, en su etapa de estudiante representó a Bolivia en los concursos de cocina creativa en Lima - Perú, México DF y Montevideo - Uruguay. Ha sido jefe de cocina en Hoteles cinco estrellas de la ciudad de Santa Cruz-Bolivia. Tiene una maestría en cocina contemporánea en el Centro internacional de Estudios Turísticos de Canarias, España y  desde el 2012 hasta la actualidad ha estado viviendo de manera itinerante en Bolivia y España, en este último país estando en restaurantes con estrellas Michelín. Es creador del movimiento Sabor Clandestino, que es compuesto por los proyectos Cascándole y Somos Calle, que buscan reflejar  una gastronomía contemporánea con las raíces e ingredientes tradicionales de la comida popular boliviana, ésto con el objetivo de transmitir nuestras tradiciones y culturas con una visión actual.",
            'imagen'=>'images/speakers/MarcoQuelca.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Leonardo Viscarra",
            'charla'=>"",
            'descripcion'=>"Joven de 14 años investigador y genio boliviano. Experto en robótica. A pesar de haber nacido sin una mano, eso no le ha impedido ser destacado en todos los ambitos de su vida. A corta edad descubrió su pasion por la tecnología. Creador de su propia protesis de mano que es capaz de captar los impulsos de su muñeca para transmitirlos a los dedos, además esta actualmente está elaborando protesis parecidas para otros niños de bajos recursos que por diferentes circunstancias perdieron una de sus extremidades. Fue participante de los Clubes de Ciencia Bolivia como uno de los expositores para compartir con más jovenes su pasión por la robótica.",
            'imagen'=>'images/speakers/LeonardoViscarra.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Jazmin Quiroz Calizaya",
            'charla'=>"",
            'descripcion'=>"Nació en la ciudad de La Paz y reside en Cochabamba desde sus 3 años. Desde el 2011 descubrió el fascinante mundo de los murciélagos despues de asistir al Congreso de Mastozoologia e inmediatamente decidió trabajar con estos animales, se unió al Programa para la Conservación de los Murciélagos de Bolivia (PCMB). Trabaja como auxiliar del Centro de Biodiversidad y Genética (CBG) en la UMSS. Obtuvo el título de alumnos de IBRO (International Brain Research Organization) en la Escuela Andina de Neuroetologia. Es becaria de Bat Conservation International (BCI) gracias a su proyecto de conservación de las especies de murciélagos en Capinota - Cochabamba y fue premiada con el Women in Conservation Science Award.",
            'imagen'=>'images/speakers/JazminQuiroz.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Álex Ayala Ugarte",
            'charla'=>"",
            'descripcion'=>"Español de nacimiento, boliviano de corazón y tartamudo de vocación. Fue director del dominical del diario La Razón de Bolivia, editor de periodismo narrativo del semanario Pulso y fundador de Pie Izquierdo, primera revista boliviana de no ficción. Colabora con medios como Etiqueta Negra, Paula, Virginia Quaterly Review, Internazionale, El País, Gatopardo, The New York Times, Univisón y otros. Ha participado en talleres de crónica con periodistas como Alberto Salcedo, Francisco, Goldman, Julio Villanueva Chang, Jon Lee Anderson y Alma Guillermoprieto. Fue Premio Nacional de Periodismo de Bolivia en 2008. Formó parte de las antologías de crónica Bolivia a toda costa, Hora boliviana, Un ilegal en el paraíso y The Football Crónicas. Tiene tres libros publicados: Los mercaderes del Che, La vida de las cosas y Rigor mortis. La Fundación para el Nuevo Periodismo Iberoamericano lo ha incluido en el movimiento Nuevos Cronistas de Indias, que reúne a algunas de las voces más talentosas del periodismo latinoamericano.",
            'imagen'=>'images/speakers/AlexAyala.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Jorge López",
            'charla'=>"",
            'descripcion'=>"Nacido en Cochabamba, Jorge siempre ha soñado con hacer un impacto en Bolivia y en el mundo, y Jalasoft es la realización de ese sueño. En sus décadas siendo parte de compañias lideres en tecnología como NetIQ y Adobe Systems, Jorge fue parte del desarrollo de innovaciones como Adobe Illustrator, Adobe Photoshop 3.5, Adobe Premiere 5.0 y NetIQ AppManager, actualmente la tercera plataforma IT mas grande en el mundo. Fue en Cochabamba - Bolivia donde su sueño de construir un legado de excelencia en ingeniería y educación finalmente tomó forma. Jorge entendió que en Bolivia sería posible desarrollar ingenieros excepcionales. A diferencia de otras áreas del mundo, Bolivia no era un lugar rico en recursos de ingeniería, pero Jorge sabía que estaba lleno de potencial. En poco tiempo Jorge creó la operación de Entrenamiento de Ingenieros más grande del país. Con lo que ayudó a fomentar a muchos de los ingenieros que mas tarde serían parte de Jalasoft. Fuera de Jalasoft, el liderazgo, el compromiso y la naturaleza filantrópica de Jorge se están haciendo sentir en Bolivia y en todo el mundo.",
            'imagen'=>'images/speakers/JorgeLopez.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Juan Sebastian Osorio",
            'charla'=>"",
            'descripcion'=>"Apasionado por la innovación y el emprendimiento social y en salud. Reconocido en el 2012 como uno de los “Innovadores menores de 35” en Colombia y a nivel mundial (MIT Technology Review) por sus desarrollos en dispositivos médicos personalizados. Ingeniero biomédico (Universidad EIA - Universidad CES, Colombia) con maestría en informática biomédica (Technische Universität München, Alemania), y experiencia en investigación en importantes centros como la Universidad de Oxford, MIT y la Universidad de Harvard. Director de proyectos en Sana Mobile (organización en informática en salud global del MIT), co-fundador de Clubes de Ciencia Colombia y HumaneX. Actualmente es también director de educación de la empresa Gemedco SA en Colombia, y miembro del hub de Medellín de la comunidad Global Shapers, del Foro Económico Mundial. Abogando por una mayor cooperación multidisciplinaria para resolver problemas globales y para potenciar la innovación a través de la educación en ciencia y tecnología.",
            'imagen'=>'images/speakers/JuanOsorio.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Carlos Guaipatin",
            'charla'=>"",
            'descripcion'=>"Carlos Guaipatín Especialista Senior en Ciencia y Tecnología en la División de Competitividad e Innovación de un organismo multilateral. Tiene más de 15 años de experiencia en desarrollo del sector privado, impulsó la creación del Innovation Lab, una plataforma en donde los problemas sociales son convertidos en soluciones tecnológicas de alto impacto, involucrando a expertos y beneficiarios finales en el proceso de innovación. Su trabajo incluye proyectos y publicaciones en áreas como innovación social, promoción de clústeres y cadenas de valor, innovación tecnológica, emprendimiento y pymes. Carlos ha sido también consultor para IFC, GAF, GTZ, ELAC, OEA y el Instituto Alemán de Desarrollo. Trabajó prácticamente en todos los países de América Latina y el Caribe, así como en el Sudeste de Europa. Ha publicado artículos en varios journals y ha presentado conferencias en más de 20 países de América Latina, Estados Unidos y Europa. Posee un grado en Economía de la Universidad Católica del Ecuador, y una maestría en Economía en la Universidad de Georgetown.",
            'imagen'=>'images/speakers/CarlosGuaipatin.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Richard Mateos",
            'charla'=>"",
            'descripcion'=>"Historiador de profesión pero trabaja como periodista desde sus 20 años. Viajó por el mundo junto con su perra guía Mali, al llegar a Latinoamérica decidió sumergirse en lo que él demomina 'frontera invisible' que es la que separa la discapacidad de la normalidad. En sus viajes con diferentes países se involucró con las asociaciones de personas con discapacidad para poder identificar las problemáticas a las que se enfrentan. Creador del proyecto Burlando Fronteras con el objetivo de redefinir la discapacidad como diversidad y como una 'frontera invisible'.",
            'imagen'=>'images/speakers/RichardMateos.png'
        ]);

        DB::table('speakers')->insert([
            'nombre'=>"Miguel Angel Figueroa",
            'charla'=>"",
            'descripcion'=>"Sirviendo como catalizador global, Miguel Angel cree firmemente el que las ideas tienen consecuencias y que la ética de una nación determina su desarrollo e innovación. Actualmente, sirve como Director Internacional de programa en la Novus Foundation con base en EE.UU. y es Director de Innovación del Hub 7 Entrepreneurship S.A. la primera aceleradora de negocios de base tecnológica de Bolivia, dichas organizaciones se enfocan al desarrollo de Emprendimientos innovadores impulsados a través procesos de incubación y aceleración empresarial, así mismo en el desarrollo de instrumentos financieros novedosos de impacto social. Miguel Angel es autor de 3 libros y es conferencista regular en tópicos como: Ecosistemas de Emprendimiento e Innovación, Incubación y Desarrollo Empresarial, Liderazgo Emergente, Emprendimientos Sociales, La Generación Y (Millennials), Justicia Social. En su récord acumulado tiene charlas impartidas a más de doscientas mil personas en más de 20 países, facilitando movimientos en más de veintinueve países. Así mismo su récord como generador de ingresos y fondos para diferentes organizaciones alcanza un portafolio de más de cien millones de dólares en proyectos para el desarrollo. Miguel Angel también ensenó como profesor adjunto y conferencista invitado en universidades incluyendo: Argentina (Universidad de Buenos Aires), Bolivia (Universidad Católica Boliviana, Universidad del Valle, Universidad para el Desarrollo y la Innovación, Universidad Mayor de San Simón, Universidad de los Andes, Universidad Autónoma Gabriel Rene Moreno), República Dominicana (Universidad de Santo Domingo, Instituto Técnico Superior Comunitario ITSE), Perú (PUCP – Pontificia Universidad Católica del Perú), The Netherlands (CHE – Christelijke Hogeschool EDE), Wagenegen University, Estados Unidos (University of Notre Dame, Winthrop University, MBI). El ha estado viajando ampliamente a mas de 40 países en Latinoamérica, Europa, Asia y África. Su formación profesional incluyen 2 maestras y 2 licenciaturas: una Maestría en Desarrollo Intercultural y Urbanismo (MBI – Chicago, EEUU); una Maestría en Gestión Internacional de Empresas y Exportaciones (EEN – Madrid, España); Postgrados en: London UK, Chicago y San Francisco EE.UU. una Licenciatura en Ingeniería Comercial, y una Licenciatura en Administración de Empresas (UCB-Bolivia).",
            'imagen'=>'images/speakers/MiguelFigueroa.png'
        ]);

        // DB::table('speakers')->insert([
        //     'nombre'=>"Mohammed Mostajo",
        //     'charla'=>"",
        //     'descripcion'=>"El Dr. Mostajo Radji es actualmente un Investigador Postdoctoral en el laboratorio Pollen del Departamento de Neurologia y del Centro Ely and Edythe Broad de Estudios en Medicina Regenerativa y Celulas Madre en la Universidad de California San Francisco. En este laboratorio, utliza distintos metodos de genomica y biologia molecular para investigar mutaciones geneticas envueltas en la evolucion del cerebro. Completó su PhD en la Universidad de Harvard donde estudió la reprogramación de neuronas y la instrucción de cambios de conectividad en circuitos cerebrales. Mas allá de su interés en la manipulacion cerebral, está activamente envuelto en educacion científica. Actualmente, es Director Ejecutivo de Clubes de Ciencia Bolivia, una organización sin fines de lucro que busca traer educación científica de la mas alta calidad a estudiantes Bolivianos. También es Miembro Directivo de la organización Clubes de Ciencia Internacional.",
        //     'imagen'=>'images/speakers/MohammedMostajo.png'
        // ]);

        // DB::table('speakers')->insert([
        //     'nombre'=>"Sergio Caballero",
        //     'charla'=>"",
        //     'descripcion'=>"Sergio Caballero nació el 18 de enero en La Paz Bolivia. Es bachiller en humanidades del Colegio La Salle de La Paz, en el año 2001 egresó como Director y Dramaturgo de la Real Escuela Superior de Arte Dramático en Madrid, España y en el año 2012 se licenció en Ciencias de la Educación en la Universidad San Francisco de Asís. Es Coach certificado por el International Coaching Certification y Facilitador en Aprendizaje experiencial y Outdoor Training. Trabajó en el Centro Cultural Pequeño Teatro como Director pedagógico y tallerista permanente hasta 2003. En esos años fue también co-organizador y co-productor del Encuentro de Teatro Breve. En 2005 empezó a trabajar en el Gobierno Autónomo Municipal de La Paz como Director de Teatros y Espacios Culturales hasta que, cinco años después, pasó a ser Asesor de Despacho de la Oficialía Mayor de Culturas del Municipio de La Paz. Actualmente es el Secretario Municipal de Educación y Cultura Ciudadana del GAMLP, donde diseña e implementa políticas, proyectos y programas de Educación Formal y Alternativa, además de gestionar proyectos de Formación Ciudadana en todo el Municipio de La Paz. Es el creador del Programa de la Felicidad en el Municipio de La Paz y del método vivencial motivacional para funcionarios del Gobierno Autónomo Municipal de La Paz y es gestor de la primera Escuela de Arte Dramático en Bolivia con el apoyo de la Real Escuela Superior de Arte Dramático de Madrid España.",
        //     'imagen'=>'images/speakers/SergioCaballero.png'
        // ]);

        for ($i=0; $i < 2; $i++) {
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
