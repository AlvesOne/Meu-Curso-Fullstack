<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
</head>
<body>
    <h1>Editar cliente</h1>
   
    <form action="{{ route('clientes.update', $clientes->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>NOME:</label>
        <input type="text" name="nome" id="nome" value="{{ $clientes->nome}}">
        <label>DATA NASCIMENTO:</label>
        <input type="text" name="data_nascimento" id="data_nascimento" value="{{ $clientes->data_nascimento}}">
        <label for="">FOTO:</label>
        <input type="file" name="foto" id="foto" value="{{ $clientes->foto}}">
        <img src="{{ asset('storage/'. $clientes->foto) }}" alt="foto do cliente" width="50">
        <label>STATUS:</label>
        <select name="status" id="status">
            <option value="1" {{ $clientes->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ $clientes->status ? 'selected' : '' }}>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>