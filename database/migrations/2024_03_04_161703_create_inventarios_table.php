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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('unidades');
            $table->integer('cantidades_unidad');
            $table->tinyInteger('estado'); /**Disponible o No disponible */
            $table->string('imagen_path');
            $table->integer('numero_lote');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
