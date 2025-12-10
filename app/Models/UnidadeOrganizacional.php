<?php

namespace App\Models;

use App\Enums\UnidadesOrganizacionaisEnum;
use Illuminate\Database\Eloquent\Model;

class UnidadeOrganizacional extends Model
{
    protected $table = 'unidades_organizacionais';

    protected $fillable = [
        'nome',
        'tipo' => UnidadesOrganizacionaisEnum::class,
    ];

    public function setor(){
        return $this->hasMany(UnidadeOrganizacional::class, 'setor_id');
    }
    public function departamento(){
        return $this->hasMany(UnidadeOrganizacional::class, 'departamento_id');
    }
}
