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
        Schema::create('evento', function (Blueprint $table) {
            $table->id('id_evento');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_archivo')->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('tipo', 50)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->date('f_creacion')->nullable();
            $table->date('f_evento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ubicacion', 100)->nullable();
            $table->string('link')->nullable();

            
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->nullOnDelete();
            $table->foreign('id_archivo')->references('id_archivo')->on('archivo');


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
