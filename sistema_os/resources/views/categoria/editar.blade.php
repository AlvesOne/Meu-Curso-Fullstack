<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categorias</title>
</head>
<body>
    <h1>Editar Categorias</h1>
   
    <form action="{{ route('categorias.update', $categorias->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>TIPO:</label>
        <input type="text" name="tipo" id="tipo" value="{{ $categorias->nome}}">
        <label>STATUS:</label>
        <select name="status" id="status">
            <option value="1" {{ $categorias->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ $categorias->status ? 'selected' : '' }}>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>