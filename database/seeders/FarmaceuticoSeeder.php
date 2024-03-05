<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FarmaceuticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('farmaceuticos')->insert([
            [
                'dni' => "12345678A",
                'fecha_contratacion' => "2021-01-01",
                'sueldo' => 1300.0,
                'farmacia_id' => 1,
                'user_id' => 2,
            ],
            [
                'dni' => "12345678B",
                'fecha_contratacion' => "2021-01-02",
                'sueldo' => 1400.0,
                'farmacia_id' => 1,
                'user_id' => 3,
            ],
            [
                'dni' => "12345678C",
                'fecha_contratacion' => "2021-01-03",
                'sueldo' => 1500.0,
                'farmacia_id' => 1,
                'user_id' => 4,
            ],
        ]);
    }
}
