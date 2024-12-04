<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $fillable = [
        'like',
        'dislike',
        'user_id',
        'publicacao_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publicacao()
    {
        return $this->belongsTo(Publicacao::class);
    }

}
