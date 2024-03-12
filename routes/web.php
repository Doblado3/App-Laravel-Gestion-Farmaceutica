<?php

use App\Http\Controllers\FarmaceuticoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
     return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'farmaceuticos' => FarmaceuticoController::class,
    'farmacias' => FarmaciaController::class,
]);

//require __DIR__.'/auth.php';
