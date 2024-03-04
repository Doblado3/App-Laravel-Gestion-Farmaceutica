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
        Schema::create('medicamento_proveedors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_medicamento');
            $table->string('nombre_proveedor');
            $table->double('pvp');
            $table->string('laboratorio_fabricante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento_proveedors');
    }
};
