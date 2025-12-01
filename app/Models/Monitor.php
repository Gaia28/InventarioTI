<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monitor extends Model
{
        protected $table = 'monitores';

    protected $fillable = [
        'computador_id',
        'tombamento',
        'marca',
        'tamanho_tela',
        'tipo_conexao',
    ];
    public function computador(): BelongsTo
    {
        return $this->belongsTo(Computador::class);
    }
}
