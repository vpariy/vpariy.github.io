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
        Schema::create('usuario', function (Blueprint $table) {
            
            $table->id('id_usuario');
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->string('nombres', 30);
            $table->string('ap_paterno', 20)->nullable();
            $table->string('ap_materno', 20)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->unsignedBigInteger('ci')->unique()->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('genero', 20)->nullable();
        
            $table->timestamps();

            
            $table->foreign('id_rol')->references('id_rol')->on('rol')->nullOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
