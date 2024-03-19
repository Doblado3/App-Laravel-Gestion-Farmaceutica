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
            $table->text('formula_componente_activo');
            $table->text('descripcion');
            $table->tinyInteger('prescripcion');
            $table->tinyInteger('refrigerado');
            $table->double('dosis');
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
