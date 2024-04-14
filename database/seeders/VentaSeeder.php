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
                'cantidad_total' => 10,
                'precio_total' => 400.0,
                'fecha_compra' => "2021-01-01",
                'descripcion' => "Pago efectuado mediante tarjeta",
                'paciente_id' => 1,
                'farmacia_id' => 1,
            ],
            [
                'cantidad_total' => 10,
                'precio_total' => 400.0,
                'fecha_compra' => "2021-05-05",
                'descripcion' => "Pago efectuado mediante tarjeta",
                'paciente_id' => 2,
                'farmacia_id' => 2,
            ],
        ]);

        DB::table('medicamento_venta')->insert([
            [
                'cantidad' => 30,
                'precio_unidad' => 30.0,
                'medicamento_id' => 1,
                'venta_id' => 1,
            ],
            [
                'cantidad' => 50,
                'precio_unidad' => 50.0,
                'medicamento_id' => 2,
                'venta_id' => 1,
            ],
        ]);
    }
}
