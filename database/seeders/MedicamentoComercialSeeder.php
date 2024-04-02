<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MedicamentoComercialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicamento_comercials')->insert([
            [
                'precio_unidad' => 9.17,
                'cantidad' => 3000,
                'medicamento_cientifico_id' => 1,
                'proveedor_id' => 1,
            ],
            [
                'precio_unidad' => 30.0,
                'cantidad' => 1000,
                'medicamento_cientifico_id' => 2,
                'proveedor_id' => 2,
            ],
        ]);
    }
}
