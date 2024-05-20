<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmaceuticoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ProfileController;
use App\Models\Venta;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Ruta para acceder al user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/farmaceuticos', [FarmaceuticoController::class,'index']);
Route::post('/farmaceuticos', [FarmaceuticoController::class,'store']);
Route::get('/ventas', function(){
    return Venta::all();
});