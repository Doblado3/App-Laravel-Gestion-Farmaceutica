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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("descripcion_producto");
            $table->integer("cantidad");
            $table->double("precio_total");
            $table->double("precio_unitario"); //Tendremos que ver cómo hacer este precio sea fijo(linea_venta)
            $table->datetime("fecha_compra");
            $table->foreignId('farmacia_id')->constrained()->onDelete('cascade');
            $table->foreignId('paciente_id')->unique()->constrained()->onDelete('cascade');
            $table->foreignId('medicamento_comercial_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
