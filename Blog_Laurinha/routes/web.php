<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\AvaliacaoController;
use App\Models\Avaliacao;

Route::get('/dashboard', function () {
    
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/', [PublicacaoController::class, 'index'])->name('publicacao.index');
Route::get('/interacoes', [PublicacaoController::class, 'showPost'])->name('publicacao.interacao');
Route::post('/comentario/{id}', [ComentarioController::class, 'storeComentario'])->name('publicacao.comentario');
Route::post('/avaliacao/{id}', [AvaliacaoController::class, 'storeAvaliacao'])->name('publicacao.avaliacao');

Route::post('/publicacoes/{id}/like', [AvaliacaoController::class, 'like'])->name('publicacoes.like');
Route::post('/publicacoes/{id}/dislike', [AvaliacaoController::class, 'dislike'])->name('publicacoes.dislike');
Route::post('/publicacoes/{id}/comentarios', [ComentarioController::class, 'store'])->name('publicacoes.comentarios.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
