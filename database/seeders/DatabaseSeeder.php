<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class, FormaSeeder::class, MedicamentoSeeder::class, ProveedorSeeder::class,MedicamentoProveedorSeeder::class,FarmaciaSeeder::class, FarmaceuticoSeeder::class, PacienteSeeder::class, VentaSeeder::class
        ]);
    }
}
