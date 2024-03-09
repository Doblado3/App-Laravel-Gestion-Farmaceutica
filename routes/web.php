<?php

use App\Http\Controllers\FarmaceuticoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'farmaceuticos' => FarmaceuticoController::class,
    'farmacias' => FarmaciaController::class,
]);
//Route::get('/farmaceuticos', [FarmaceuticoController::class, 'index'])->name('farmaceuticos.index');


