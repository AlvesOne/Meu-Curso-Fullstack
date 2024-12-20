<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $fillable = ['tipo', 'valor', 'empresa_id', 'categoria_id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function categiria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ordemservico()
    {
        return $this->hasMany(OrdemServico::class);
    }
}
