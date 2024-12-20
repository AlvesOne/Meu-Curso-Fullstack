<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'razao_social' => 'required',
        'cnpj' => 'required',
        'endereco' => 'required',
        'telefone' => 'required',
        'cep' => 'required',
       ]);
       Empresa::create($request->all());
       return redirect()->route('empresas.index')->with('success', 'Empresa criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresas, $id)
    {
        $empreas = Empresa::find($id);
        return view('empresa.editar', compact('empresas'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'razao_social'=>'string|max:255',
            'cnpj'=>'string',
            'endereco'=> 'string',
            'telefone'=> 'integer',
            'cep'=> 'string'
        ]);
        $empreas = Empresa::find($id);
        $empreas->update($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa atualizada com sucesso.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $empreas = Empresa::find($id);
       $empreas->delete();
       return redirect()->route('empresas.index')->with('success','Empresa removida com sucesso.');
    }
}
