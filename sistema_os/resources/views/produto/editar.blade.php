<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
   
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>NOME:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome}}">
        <label>VALOR:</label>
        <input type="decimal" name="valor" id="valor" value="{{ $produto->valor}}">
        <label for="">DESCRIÇÃO:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao}}">
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>