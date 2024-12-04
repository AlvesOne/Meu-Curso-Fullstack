<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Empresa;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();
        $empresas = Empresa::all();
        $categorias = Categoria::all();
        return view('servicos.index', compact('servicos','empresas','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicos.create');
        Servico::create([
            'categoria_id' => $categoria->id,
            'empresa_id' => $empresa->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'valor' => 'required',
            'empresa_id' => 'required',
            'categoria_id' => 'required',
           ]);
           Servico::create($request->all());
           return redirect()->route('servicos.index')->with('success', 'Serviço criado com sucesso.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Servico::with('empresa','categoria')->find($id);
        return view('servicos.show', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicos = Servico::find($id);
        $empresas = Empresa::all();
        $categorias = Categoria::all();
        return view('servicos.editar', compact('servicos','empresas','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        Validator::make($request->all(),[
            'tipo'=>'string|max:255',
            'valor'=>'numeric',
            'empresa_id'=> 'integer',
            'categoria_id'=> 'integer',
            'status'=>'boolean',
        ]);
        $servicos = Servico::find($id);
        $servicos->update($request->all());

        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();
        return redirect()->route('servicos.index')->with('success','Serviço removido com sucesso.');
    }
    public function atualizarStatus(Request $request,$id)
    {
        $servicos = Servico::find($id);
        $servicos->status = true;
        $servicos->save();

        return redirect()->route('servicos.index');
    }
}

