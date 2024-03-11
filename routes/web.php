<?php

use App\Http\Controllers\FarmaceuticoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'farmaceuticos' => FarmaceuticoController::class,
    'farmacias' => FarmaciaController::class,
]);
//Route::get('/farmaceuticos', [FarmaceuticoController::class, 'index'])->name('farmaceuticos.index');

//require __DIR__.'/auth.php';
