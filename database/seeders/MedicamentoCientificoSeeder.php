<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MedicamentoCientificoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicamento_cientificos')->insert([
            [
                'nombre' => "Actron Compuesto",
                'codigos_ATC' => "NO2BA-Otros analgésicos y antipiréticos",
                'fecha_autorizacion' => "1982-04-01",
                'principio_activo' => "Paracetamol",
                'caracteristicas' => "sin receta",
                'laboratorio' => "Bayer Hispania S.L.",
                'excipientes' => "Hidrogenocarbonato de sodio",
                'dosis' => "267mg/133mg/40mg",
                'codigo_nacional' => 954917,
                'naturaleza_id' => 1,
            ],
            [
                'nombre' => "Sintrom",
                'codigos_ATC' => "B01A-Agentes Antitrombóticos",
                'fecha_autorizacion' => "2012-05-28",
                'principio_activo' => "Acenocumarol",
                'caracteristicas' => "Tratamiento de larga duración con receta",
                'laboratorio' => "Merus Labs Luxco",
                'excipientes' => "Lactosa",
                'dosis' => "1mg",
                'codigo_nacional' => 654177,
                'naturaleza_id' => 2,
            ],

            ]);
    }
}
