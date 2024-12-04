<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>NOME:</label>
        <input type="text" name="nome">
        <label>VALOR:</label>
        <input type="decimal" name="valor">
        <label for="">DESCRIÇÃO:</label>
        <input type="text" name="descricao">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>