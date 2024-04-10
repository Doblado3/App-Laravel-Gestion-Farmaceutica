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
        Schema::create('linea_venta', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->double('precio_unidad');
            $table->dateTime('fecha_compra');
            $table->integer('cantidad');
            $table->foreignId('medicamento_id')->unique()->constrained()->onDelete('cascade');
            $table->foreignId('venta_id')->unique()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linea_venta');
    }
};
