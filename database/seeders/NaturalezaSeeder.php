<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NaturalezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('naturalezas')->insert([
            [
                'nombre' => "alivio sintomático dolores leves",
            ],
            [
                'nombre' => "anticoagulantes",
            ],
            ]);
    }
}
