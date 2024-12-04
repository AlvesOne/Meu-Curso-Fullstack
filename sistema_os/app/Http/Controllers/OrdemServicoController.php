<?php

namespace App\Http\Controllers;

use App\Models\OrdemServico;
use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordemservico = OrdemServico::all();
        $cliente = Cliente::all();
        $servico = Servico::all();
        return view('ordemservico.index', compact('ordemservico','cliente','servico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordemservico.create');
        OrdemServico::create([
            'cliente_id'=>$cliente->id,
            'servico_id'=> $servico->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'servico_id' => 'required',
            'data' => 'required',
           ]);
           OrdemServico::create($request->all());
           return redirect()->route('ordemservicos.index')->with('success', 'Ordem de servoço criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        OrdemServico::with('cliente','servico')->find($id);
        return view('ordemservico.show', compact('ordemservico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ordemservicos = OrdemServico::find($id);
        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('ordemservico.editar', compact('ordemservicos','clientes','servicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        validator::make($request->all(),[
            'cliente_id'=>'integer',
            'servico_id'=>'integer',
            'data'=> 'date',
        ]);
        $ordemservicos = OrdemServico::find($id);
        $ordemservicos->update($request->all());

        return redirect()->route('ordemservicos.index')->with('success', 'Ordem de serviço atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ordemservicos = OrdemServico::find($id);
        $ordemservicos->delete();
        return redirect()->route('ordemservicos.index')->with('success','Ordem de serviço removido com sucesso.');
    }

    public function atualizarStatus(Request $request,$id)
    {
        $ordemservicos  = OrdemServico::find($id);
        $ordemservicos ->status = true;
        $$ordemservicos ->save();

        return redirect()->route('ordemservico.index');
    }
}