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
        Schema::create('medicamento_farmacias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->integer('unidades_disponibles');
            $table->string('laboratorio_fabricante');
            $table->text('descripcion');
            $table->double('precio_publico');
            $table->double('precio_descontado');
            $table->tinyInteger('prescripcion');
            $table->string('formula_componente_activo');
            $table->string('imagen_path');
            $table->tinyInteger('refrigerado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento_farmacias');
    }
};
