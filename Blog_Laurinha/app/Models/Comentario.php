<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'name_comentario',
        'conteudo',
        'data_comentario',
        'user_id',
        'publicacao_id'
    ];

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
