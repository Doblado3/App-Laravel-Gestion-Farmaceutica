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
                'email' => "administrador@administrador.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmacéutico1",
                'email' => "farmaceutico1@farmaceutico.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmacéutico2",
                'email' => "farmaceutico2@farmaceutico.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Farmaceutico3",
                'email' => "farmaceutico3@farmaceutico.com",
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
