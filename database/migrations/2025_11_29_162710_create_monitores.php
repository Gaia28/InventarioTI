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
        Schema::create('monitores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computador_id')->constrained('computadores')->onDelete('cascade');
            $table->string('tombamento')->unique();
            $table->string('marca');
            $table->string('tamanho_tela');
            $table->string('tipo_conexao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitores');
    }
};
