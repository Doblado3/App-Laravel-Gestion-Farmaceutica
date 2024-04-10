<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FarmaciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('farmacias')->insert([
            [
                'ubicacion' => "Avenida Reina Mercedes, 40, Sevilla",
                'nombre' => "VitaliaFarmacia",
                'telefono' => 666555444,
                'email' => "farmacia1@gmail.com",
            ],
            [
                'ubicacion' => "Avenida Virgen de Luján, 50, Sevilla",
                'nombre' => "SaludFarma",
                'telefono' => 666555444,
                'email' => "farmacia2@gmail.com",
            ],
        ]);

        DB::table('linea_compra')->insert([
            [
                'cantidad' => 20,
                'precio_unidad' => 20.0,
                'fecha_compra' => "2023-01-01",
                'medicamento_proveedor_id' => 1,
                'farmacia_id' => 1,
            ],
            [
                'cantidad' => 40,
                'precio_unidad' => 40.0,
                'fecha_compra' => "2022-01-01",
                'medicamento_proveedor_id' => 1,
                'farmacia_id' => 2,
            ],
        ]);
    }
}
