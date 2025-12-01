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

            // === DADOS DE IDENTIFICAÇÃO E USO ===
            $table->string('operador'); 
            $table->string('setor');
            $table->string('departamento');
            $table->string('ip')->unique(); 
            $table->string('tombamento')->unique();
            
            // === ESPECIFICAÇÕES TÉCNICAS ===
            $table->string('sistema_operacional');
            $table->string('licenca_so');
            $table->string('processador');
            $table->string('tamanho_disco');
            $table->string('memoria_ram');
            $table->string('tipo_memoria');
            $table->string('placa_mae');

            // === PERIFÉRICOS E DETALHES ===
            $table->string('teclado');
            $table->string('mouse');
            $table->string('estabilizador');
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
