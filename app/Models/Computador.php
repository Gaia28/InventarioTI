<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;
    protected $fillable = [
        'operador',
        'setor',
        'departamento',
        'ip',
        'tombamento',
        'sistema_operacional',
        'lincenca_so',
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
