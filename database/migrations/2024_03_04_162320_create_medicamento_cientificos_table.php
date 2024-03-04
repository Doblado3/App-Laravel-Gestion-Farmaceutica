<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicamento_cientificos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('PRM');
            $table->text('descripcion');
            $table->tinyInteger('prescripcion');
            $table->string('laboratorio_fabricante');
            $table->tinyInteger('refrigerado');
            $table->date('fecha_expiracion');
            $table->double('cantidad_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento_cientificos');
    }
};
