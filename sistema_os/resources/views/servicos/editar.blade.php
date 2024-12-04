<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem de seviço</title>
</head>
<body>
    <h1>Editar Ordem de serviço</h1>
   
    <form action="{{ route('servicos.update', $servicos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>TIPO:</label>
        <input type="text" name="tipo" id="tipo" value="{{ $servicos->tipo}}">
        <label>VALOR:</label>
        <input type="text" name="valor" id="valor" value="{{ $servicos->valor}}">
        <label for="">EMPRESA:</label>
        <input type="text" name="empresa_id" id="empresa_id" value="{{ $servicos->empresa_id}}">
        <label for="">CATEGORIA:</label>
        <input type="text" name="categoria_id" id="categoria_id" value="{{ $servicos->categoria_id}}">
        <label>STATUS:</label>
        <select name="status" id="status">
            <option value="1" {{ $servicos->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ $servicos->status ? 'selected' : '' }}>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>