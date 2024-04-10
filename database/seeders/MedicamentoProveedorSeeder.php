<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MedicamentoProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicamento_proveedors')->insert([
            [
                'precio_unidad' => 8.0,
                'stock' => 1000,
                'medicamento_id' => 2,
                'proveedor_id' => 1,
            ],
            [
                'precio_unidad' => 6.0,
                'stock' => 5000,
                'medicamento_id' => 1,
                'proveedor_id' => 2,
            ],
        ]);
    }
}
