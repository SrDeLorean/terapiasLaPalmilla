<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class Servicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'titulo' => 'Tinajas De Agua Caliente',
            'descripcion' => 'Baño de inmersión de hasta dos horas en tinaja de agua caliente, con dos hidrojet que brindan una gran relajación muscular, a través de la temperatura y movimiento del agua. Todo esto en un espacio privado y en contacto con la naturaleza.',
            'precio' => 10000,
            'idCategoria' => 1
        ]);
        Servicio::create([
            'titulo' => 'Pack Masajes Y Tinaja De Agua Caliente',
            'descripcion' => 'Masajes simultáneos de Relajación de 45 minutos, en sala termorregulada con Aromaterapia y Música de Relajación, para luego pasar a la tina de agua caliente, al aire libre entre la vegetación por 2 horas.',
            'precio' => 20000,
            'idCategoria' => 1
        ]);
        Servicio::create([
            'titulo' => 'Masajes, Tinaja De Agua Caliente Y Alojamiento Para 2 Personas',
            'descripcion' => 'Ingreso a las 18.00 hrs, para ubicarse en el lugar y prepararse para masajes de Relajación simultáneos a las 20.00 hrs. Luego de los masajes, se regresa a la cabaña para disfrutar de la tinaja exclusiva en terraza. Desayuno incluido y Check out a las 12 (medio día) del día siguiente. Cabaña cuenta con Aire Acondicionado, Frigobar, Horno Eléctrico, Hervidor, Batas y Toallas.',
            'precio' => 30000,
            'idCategoria' => 1
        ]);
        Servicio::create([
            'titulo' => 'Tinaja De Agua Caliente Y Alojamiento Para 2 Personas',
            'descripcion' => 'Ingreso a las 18.00 hrs al recinto y luego hacer uso de tinaja exclusiva en la terraza de la cabaña. Contemplando la vegetación y el anochecer. Desayuno incluido y Check Out a las 12.00 hrs (medio día) del día siguiente. *Cabaña cuenta con Aire Acondicionado, Frigobar, Horno Eléctrico, Hervidor, Batas y Toallas.',
            'precio' => 40000,
            'idCategoria' => 1
        ]);

        Servicio::create([
            'titulo' => 'Masajes De Relajación',
            'descripcion' => 'Sala Termorregulada, Aromaterapia, Música Relajante y Luz Tenue. Se realizan 45 minutos de suave Masaje en Cabeza, espalda y extremidades. Lo que proporciona una profunda y agradable relajación',
            'precio' => 10000,
            'idCategoria' => 2
        ]);
        Servicio::create([
            'titulo' => 'Masaje Descontracturante',
            'descripcion' => 'Masaje de mayor presión realizado en zonas contracturadas a nivel muscular, produciendo un efecto terapéutico del dolor. Duración 45 minutos.',
            'precio' => 20000,
            'idCategoria' => 2
        ]);
        Servicio::create([
            'titulo' => 'Masaje Medio Cuerpo Y Facial',
            'descripcion' => 'Masaje de 45 minutos, donde se comienza con mayor presión en la espalda, luego extremidades superiores y cráneo, para terminar con suave masaje de cuello y Facial.',
            'precio' => 30000,
            'idCategoria' => 2
        ]);

        Servicio::create([
            'titulo' => 'Alineación de Chakras',
            'descripcion' => 'Terapia Energética que emplea diferentes Cuarzos, los que a través de su vibración entregan equilibrio, relajación y claridad mental.',
            'precio' => 10000,
            'idCategoria' => 3
        ]);
        Servicio::create([
            'titulo' => 'Terapia combinada de Gemoterapia, Reiki y Cuencos',
            'descripcion' => 'Terapia de 45 minutos, en la que se utilizan cuarzos o piedras energéticas, reiki, que es la canalización de energía a través de las manos con el propósito de facilitar un bienestar físico, emocional y mental. Además, también se utiliza el sonido de los cuencos, aprovechando todos los beneficios que sus vibraciones nos entregan. Esta combinación de terapias aporta la energía de sanación que el cuerpo necesita para poder poner en marcha los procesos que se han bloqueado y recuperar el equilibrio en el organismo.',
            'precio' => 20000,
            'idCategoria' => 3
        ]);

        Servicio::create([
            'titulo' => 'Yoga',
            'descripcion' => 'Clase de vinyasa yoga, una clase dinámica y fluida, en el que se combina la respiración con los movimientos, trabajando a la vez la fuerza y el balance. Una actividad extraordinaria para liberarte del estrés y calmar la mente. La clase se lleva a cabo en un lugar rodeado de naturaleza, en medio de los álamos, el sonido del agua, el viento y de los pajaritos. Las clases son aptas para principiantes y avanzados.',
            'precio' => 10000,
            'idCategoria' => 4
        ]);

        Servicio::create([
            'titulo' => 'Tinaja De Agua Caliente Y Alojamiento Para 2 Personas',
            'descripcion' => 'Ingreso a las 18.00 hrs al recinto y luego hacer uso de tinaja exclusiva en la terraza de la cabaña. Contemplando la vegetación y el anochecer. Desayuno incluido y Check Out a las 12.00 hrs (medio día) del día siguiente. Cabaña cuenta con Aire Acondicionado, Frigobar, Horno Eléctrico, Hervidor, Batas y Toallas.',
            'precio' => 100000,
            'idCategoria' => 5
        ]);
        Servicio::create([
            'titulo' => 'Masajes, Tinaja De Agua Caliente Y Alojamiento Para 2 Personas',
            'descripcion' => 'Ingreso a las 18.00 hrs, para ubicarse en el lugar y prepararse para masajes de Relajación simultáneos a las 20.00 hrs. Luego de los masajes, se regresa a la cabaña para disfrutar de la tinaja exclusiva en terraza. Desayuno incluido y Check out a las 12 (medio día) del día siguiente. Cabaña cuenta con Aire Acondicionado, Frigobar, Horno Eléctrico, Hervidor, Batas y Toallas.',
            'precio' => 200000,
            'idCategoria' => 5
        ]);
    }
}
