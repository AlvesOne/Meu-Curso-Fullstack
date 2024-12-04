<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>
</head>
<body>
    <h1>Nova Categoria</h1>

    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>TIPO:</label>
        <input type="text" name="tpo">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>