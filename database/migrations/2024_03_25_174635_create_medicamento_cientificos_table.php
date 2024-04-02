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
            $table->string('nombre');
            $table->text('codigos_ATC');
            $table->date('fecha_autorizacion');
            $table->string('principio_activo');
            $table->string('caracteristicas');
            $table->string("laboratorio");
            $table->string('excipientes');
            $table->text('dosis');
            $table->integer('codigo_nacional');
            $table->foreignId('naturaleza_id')->constrained()->onDelete('cascade');
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
