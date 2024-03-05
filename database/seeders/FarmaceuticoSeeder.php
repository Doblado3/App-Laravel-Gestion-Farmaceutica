<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'user_id' => 2,
                
            
            ],
            [
                'dni' => "87654321B",
                'fecha_contratacion' => "2022-06-01",
                'user_id' => 2,
                
                
            ],
        ]);
    }
}
