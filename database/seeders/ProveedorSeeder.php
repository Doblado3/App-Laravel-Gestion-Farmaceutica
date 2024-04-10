<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedors')->insert([
            [
                'nombre' => "FarmaciasDirect",
                'email' => "farmaciasdirect@correo.com",
                'telefono' => "951 12 04 03",
                'pais' => "España",
                'direccion' => "C/Ciudad de Carlet,1,41019",
            ],
            [
                'nombre' => "Cofares",
                'email' => "cofares@correo.com",
                'telefono' => "949 79 00 00",
                'pais' => "España",
                'direccion' => "C/Santa Engracia 31,28010",
            ],
        ]);
    }
}
