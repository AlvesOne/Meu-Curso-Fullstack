<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
        'nome'=> 'required|string|max:255',
        'data_nascimento'=> 'required|date',
        'foto'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status'=> 'required|boolean'
      ]);
      if ($validator->fails()){
        return redirect()->route('clientes.index')->with('erros', $validator->erros());
      }
      $clientes = new Cliente();
      $clientes-> nome= $request->input('nome');
      $clientes->data_nascimento = $request->input('data_nascimento');
      $clientes->status = $request->input('status');

      if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('clientes', 'public');
        $clientes->foto = $path;
      }

      $clientes->save();
      return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $clientes = Cliente::find($id);
      if($clientes->status == 0) {
        return 'Usuario ativo';
      } else {
        return 'Usuario inativo';
      }

      return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);
        return view('clientes.editar', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'=>'string|max:255',
            'data_nascimento'=>'date',
            'foto'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'=>'boolean',
        ]);
        $clientes = Cliente::find($id);
        $foto_caminho = $request->file('foto')->store('fotos', 'public');

        $clientes->nome = $request->nome;
        $clientes-> data_nascimento = $request-> data_nascimento;
        $clientes-> foto = $foto_caminho;
        $clientes->status = $request->status;
        $clientes->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect()->route('clientes.index')->with('success','Cliente removido com sucesso.');
    }
}
