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
        Schema::table('computadores', function (Blueprint $table) {
            if (Schema::hasColumn('computadores', 'setor')) {
                $table->dropColumn(['setor', 'departamento']);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('computadores', function (Blueprint $table) {
            if (!Schema::hasColumn('computadores', 'setor')) {
                $table->string('setor')->nullable()->after('operador');
            }
            if (!Schema::hasColumn('computadores', 'departamento')) {
                $table->string('departamento')->nullable()->after('setor');
            }
        });
    }
};
