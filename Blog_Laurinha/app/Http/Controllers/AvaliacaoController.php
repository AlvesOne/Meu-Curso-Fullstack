<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function like(Publicacao $publicacao)
    {
        Avaliacao::updateOrCreate(
            ['user_id' => auth()->id(), 'publicacao_id' => $publicacao->id],
            ['like' => 1, 'dislike' => 0]
        );
        
        return back();
    }   

    public function dislike(Publicacao $publicacao, $id)
    {
        Avaliacao::updateOrCreate(
            ['user_id' => auth(), 'publicacao_id' => $publicacao->id],
            ['like' => 0, 'dislike' => 1]
        );

        return back();
    }
}
