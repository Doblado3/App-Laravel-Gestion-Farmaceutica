<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicamentos')->insert([
            [
                'numero_registro' => 61690,
                'nombre_comercial' => "Acular",
                'laboratorio' => "ABBVIE SPAIN, S.L.U.",
                'componente_activo' => "Ketorolaco trometamol",
                'descripcion' => "Vía oftálmica",
                'receta' => 1,
                'fecha_expiracion' => "2029-04-14",
                'dosis' => 5.0,
                'forma_id' => 3,
            ],
            [
                'numero_registro' => 89484,
                'nombre_comercial' => "Bosutinib zentiva",
                'laboratorio' => "Zentiva K.S",
                'componente_activo' => "Bosutinib",
                'descripcion' => "Vía oral",
                'receta' => 1,
                'fecha_expiracion' => "2034-06-12",
                'dosis' => 400.0,
                'forma_id' => 2,
            ],
        ]);
    }
}
