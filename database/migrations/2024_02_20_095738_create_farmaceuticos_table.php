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
        Schema::create('farmaceuticos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('DNI');
            $table->date('fecha_contratacion');
            $table->double('sueldo');
            $table>dateTime('turnos_guardia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmaceuticos');
    }
};
