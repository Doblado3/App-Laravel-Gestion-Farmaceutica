<?php

use App\Http\Controllers\FarmaceuticoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
 
    Route::post('/ventas/{venta}/attach-medicamento', [VentaController::class, 'attach_medicamento'])
        ->name('ventas.attachMedicamento')
        ->middleware('can:attach_medicamento,venta');
    Route::delete('/ventas/{venta}/detach-medicamento/{medicamento}', [VentaController::class, 'detach_medicamento'])
        ->name('ventas.detachMedicamento')
        ->middleware('can:detach_medicamento,venta');

Route::resources([
    'farmaceuticos' => FarmaceuticoController::class,
    'farmacias' => FarmaciaController::class,
    'ventas' => VentaController::class,
    'pacientes' => PacienteController::class,
    'medicamentos' => MedicamentoController::class,
    ]);
    
});


require __DIR__.'/auth.php';
