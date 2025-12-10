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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('setor_id')->nullable()->constrained('unidades_organizacionais')->nullOnDelete();
            $table->foreignId('departamento_id')->nullable()->constrained('unidades_organizacionais')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Se a foreign key existir, remova-a antes da coluna
            if (Schema::hasColumn('users', 'setor_id')) {
                $table->dropForeign(['setor_id']);
                $table->dropColumn('setor_id');
            }

            if (Schema::hasColumn('users', 'departamento_id')) {
                $table->dropForeign(['departamento_id']);
                $table->dropColumn('departamento_id');
            }
        });
    }
};
