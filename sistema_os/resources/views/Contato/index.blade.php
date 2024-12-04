<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>

<h2>Lista de Contatos</h2>

<table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">OPÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contatos as $contato)
            <tr>
                <th scope="row">{{ $contato->id }}</th>
                <td>{{ $contato->email }}</td>
                <td>{{ $contato->telefone }}</td>
                <td>
                    <div class="btns_formulario">
                        <a href="{{ route('contato.edit', $contato->id) }}">
                            <span>Editar</span>
                        </a>
                        <form action="{{ route('contato.destroy', $contato->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
