<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Computador extends Model
{
    use HasFactory;
    protected $table = 'computadores';
    protected $fillable = [
        'operador',
        'setor',
        'departamento',
        'ip',
        'tombamento',
        'sistema_operacional',
        'licenca_so',
        'processador',
        'tamanho_disco',
        'memoria_ram',
        'tipo_memoria',
        'teclado',
        'mouse',
        'estabilizador',
        'placa_mae',
        'carrinho',
        'observacoes',

    ];
    public function monitores(): HasMany
    {
        return $this->hasMany(Monitor::class);
    }
}
