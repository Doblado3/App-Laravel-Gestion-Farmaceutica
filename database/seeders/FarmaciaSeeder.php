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
                'nombre' => "Farmacia1",
                'telefono' => 666555444,
                'email' => "farmacia1@gmail.com",
            ],
        ]);
    }
}
