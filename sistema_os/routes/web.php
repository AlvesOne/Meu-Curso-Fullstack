<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function(){return csrf_token();});

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/cadastrar', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/cadastrar', [ClienteController::class, 'create'])->name('clientes.create');
Route::get('/clientes/editar/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');

Route::get('/contatos', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/contatos/cadastrar', [ContatoController::class, 'create'])->name('contato.create');
Route::get('/contatos/editar/{id}', [ContatoController::class, 'edit'])->name('contato.edit');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contato.store');
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contato.destroy');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contato.update');
Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contato.show');

Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
Route::get('/empresas/cadastrar', [EmpresaController::class, 'create'])->name('empresas.create');
Route::get('/empresas/editar/{id}', [EmpresaController::class, 'edit'])->name('empresas.edit');
Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');
Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
Route::put('/empresas/{id}', [EmpresaController::class, 'update'])->name('empresas.update');
Route::get('/empresas/{id}', [EmpresaController::class, 'show'])->name('empresas.show');

Route::get('/ordemservicos', [OrdemServicoController::class, 'index'])->name('ordemservicos.index');
Route::get('/ordemservicos/cadastrar', [OrdemServicoController::class, 'create'])->name('ordemservicos.create');
Route::get('/ordemservicos/editar/{id}', [OrdemServicoController::class, 'edit'])->name('ordemservicos.edit');
Route::post('/ordemservicos', [OrdemServicoController::class, 'store'])->name('ordemservicos.store');
Route::delete('/ordemservicos/{id}', [OrdemServicoController::class, 'destroy'])->name('ordemservicos.destroy');
Route::put('/ordemservicos/{id}', [OrdemServicoController::class, 'update'])->name('ordemservicos.update');
Route::get('/ordemservicos/{id}', [OrdemServicoController::class, 'show'])->name('ordemservicos.show');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/cadastrar', [ProdutoController::class, 'create'])->name('produtos.create');
Route::get('/produtos/editar/{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::post('/produtos/inicial', [ProdutoController::class, 'store'])->name('produtos.store');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/cadastrar', [ServicoController::class, 'create'])->name('servicos.create');
Route::get('/servicos/editar/{id}', [ServicoController::class, 'edit'])->name('servicos.edit');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::delete('/servicos/{id}', [ServicoController::class, 'destroy'])->name('servicos.destroy');
Route::put('/servicos/{id}', [ServicoController::class, 'update'])->name('servicos.update');
Route::get('/servicos/{id}', [ServicoController::class, 'show'])->name('servicos.show');