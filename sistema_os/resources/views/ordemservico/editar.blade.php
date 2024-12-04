<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem de seviço</title>
</head>
<body>
    <h1>Editar Ordem de serviço</h1>
   
    <form action="{{ route('ordemservicos.update', $ordemservicos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>CLIENTE:</label>
        <select name="cliente_id" id="cliente_id">
                @foreach ( $clientes as $cliente )
                    <option value="{{ $cliente->nome }}">{{ $cliente->nome}}</option>
                @endforeach
            </select>
        <label>SERVIÇO:</label>
        <select name="servico_id" id="servico_id">
                @foreach ( $servicos as $servico )
                    <option value="{{ $servico->id }}">{{ $servico->tipo}}</option>
                @endforeach
            </select>
        <label for="">DATA:</label>
        <input type="date" name="data" id="data" value="{{ $ordemservicos->data}}">
        <label>STATUS:</label>
        <select name="status" id="status">
            <option value="1" {{ $ordemservicos->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ $ordemservicos->status ? 'selected' : '' }}>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>