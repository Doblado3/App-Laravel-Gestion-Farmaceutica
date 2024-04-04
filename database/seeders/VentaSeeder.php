<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventas')->insert([
            [
                'cantidad' => 3,
                'precio_total' => 400.0,
                'precio_unitario' => 12.0,
                'fecha_compra' => "2020-01-01",
                'paciente_id' => 1,
                'farmacia_id' => 1,
                'medicamento_comercial_id' => 1,
            ],
            [
                'cantidad' => 7,
                'precio_total' => 100.0,
                'precio_unitario' => 7.5,
                'fecha_compra' => "2018-01-01",
                'paciente_id' => 2,
                'farmacia_id' => 1,
                'medicamento_comercial_id' => 2,
            ],
        ]);
    }
}
