<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Usuario;

class Computador extends Model
{
    use HasFactory;
    protected $table = 'computadores';
    protected $fillable = [
        'operador',
        'usuario_id',
        'ip',
        'tombamento',
        'nome_maquina',
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

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
}
