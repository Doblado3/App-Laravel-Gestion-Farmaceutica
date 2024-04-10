<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FormaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formas')->insert([
            [
                'nombre' => "comprimidos",
            ],
            [
                'nombre' => "comprimido recubierto con pelicula",
            ],
            [
                'nombre' => "colirio en solución",
            ],
        ]);
    }
}
