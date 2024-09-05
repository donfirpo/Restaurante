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
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();  // nombre del plato, único
            $table->text('descripcion');         // descripción del plato
            $table->decimal('precio', 8, 2);     // precio del plato
            $table->integer('cantidad');         // cantidad disponible
            $table->string('categoria');         // categoría del plato
            $table->timestamps();                // created_at y updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
