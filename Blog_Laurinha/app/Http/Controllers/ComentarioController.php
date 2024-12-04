<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request, Comentario $comentarios)
    {
        $request->validate(['conteudo' => 'required|string']);

        $comentarios->comentario()->create([
            'user_id' => auth()->id,
            'conteudo' => $request->conteudo,
        ]);

        return back();
    }
}
