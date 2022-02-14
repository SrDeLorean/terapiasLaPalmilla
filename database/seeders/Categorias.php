<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'titulo' => 'Tinaja de agua caliente',
            'descripcion' => 'Lugar de baño caliente'
        ]);
        Categoria::create([
            'titulo' => 'Masajes',
            'descripcion' => 'Masajes de relajacion'
        ]);
        Categoria::create([
            'titulo' => 'Terapia energetica',
            'descripcion' => 'Masajes para mejorar la energia'
        ]);
        Categoria::create([
            'titulo' => 'Yoga',
            'descripcion' => 'Relajacion para entrar en si, aliniacion de chacka'
        ]);
        Categoria::create([
            'titulo' => 'Alojamiento',
            'descripcion' => 'Cabaña y hostal'
        ]);
    }
}
