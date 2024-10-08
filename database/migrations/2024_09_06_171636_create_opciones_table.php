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
        Schema::create('opciones', function (Blueprint $table) {
            $table->id(); // Clave primaria para 'opciones'
            $table->foreignId('id_pregunta')->constrained('preguntas')->onDelete('cascade'); // Llave foránea hacia 'preguntas'
            $table->string('opcion', 255); // Ejemplo de otra columna
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opciones');
    }
};



