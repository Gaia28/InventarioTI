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
        Schema::create('computadores', function (Blueprint $table) {
            $table->id();
            $table->string('operador');
            $table->string('setor');
            $table->string('departamento');
            $table->string('ip')->unique();
            $table->string('tombamento')->unique();
            $table->string('sistema_operacional');
            $table->string('lincenca_so');
            $table->string('processador');
            $table->string('tamanho_disco');
            $table->string('tamanho_memoria');
            $table->string('quantidade_ram');
            $table->string('placa_mae');
            $table->string('carrinho');
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadores');
    }
};
