<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'ubicacion' => "Avenida Reina Mercedes, 40, Sevilla"
                'nombre' => "Farmacia1"
                'email' => "farmacia1@outlook.es"
                'telefono' => 666555444
            ],
        ]);
    }
}
