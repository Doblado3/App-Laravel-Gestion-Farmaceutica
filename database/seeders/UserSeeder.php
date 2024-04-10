<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Administrador",
                'apellidos' => 'administrador apellido',
                'email' => "administrador@administrador.com",
                'genero' => "femenino",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmacéutico1",
                'apellidos' => 'Dominguez Mendoza',
                'email' => "farmaceutico1@farmaceutico.com",
                'genero' => "masculino",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmacéutico2",
                'apellidos' => 'Perilla Quijote',
                'email' => "farmaceutico2@farmaceutico.com",
                'genero' => "femenino",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmaceutico3",
                'apellidos' => 'Doblado Sanchez',
                'email' => "farmaceutico3@farmaceutico.com",
                'genero' => "masculino",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente1",
                'apellido' => "Paciente1 Prueba1",
                'email' => "paciente1@paciente.com",
                'genero' => "masculino",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Paciente2",
                'apellido' => "Paciente2 Prueba2",
                'email' => "paciente2@paciente.com",
                'genero' => "femenino",
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
