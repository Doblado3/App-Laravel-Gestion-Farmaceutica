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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('numero_registro');
            $table->string('nombre_comercial');
            $table->string('laboratorio');
            $table->text('componente_activo');
            $table->text('descripcion');
            $table->tinyInteger('receta');
            $table->date('fecha_expiracion');
            $table->double('dosis');
            $table->foreignId('forma_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
