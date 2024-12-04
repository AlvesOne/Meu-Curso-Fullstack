<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\Avaliacao;
use App\Models\User;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    // Exibe a listagem de publicações com comentários e avaliações
    public function index()
    {
        $publicacoes = Publicacao::all();
       

        return view('publicacao.index', compact('publicacoes'));
    }

    // Exibe uma única publicação com interações
    public function showPost()
    {
        $publicacoes = Publicacao::with(['comentario', 'avaliacao'])->get();
        return view('publicacao.interacao', compact('publicacoes'));
    }

    // Armazena um comentário associado à publicação
    public function storeComentario(Request $request, $id)
    {
        $request->validate(['comentario' => 'required|string|max:255']);
        $comentarios = Publicacao::findOrFail($id);
        $comentarios->comentarios()->create($request->only('comentario'));

        return back()->with('success', 'Comentário adicionado com sucesso!');
    }

    // Armazena uma avaliação (like ou deslike)
    public function storeAvaliacao(Request $request, $id)
    {
        $request->validate([
            'like' => 'nullable|boolean',
            'dislike' => 'nullable|boolean'
        ]);

        $publicacao = Publicacao::findOrFail($id);
        $publicacao->avaliacoes()->create([
            'like' => $request->like,
            'dislike' => $request->dislike,
        ]);

        return back()->with('success', 'Avaliação registrada com sucesso!');
    }
}
