<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $fillable = [
        'foto',
        'titulo_publicacao',
        'data_publicacao',
        'comentario_id',
        'avaliacao_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comentario()
    {
        return $this->hasMany(Comentario::class);
    }
    public function avaliacao()
    {
        return $this->hasMany(Avaliacao::class);
    }

}
