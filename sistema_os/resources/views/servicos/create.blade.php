<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Serviço</title>
</head>
<body>
    <h1>Novo Serviço</h1>

    <form action="{{ route('servicos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>TIPO:</label>
        <input type="text" name="tipo" id="tipo">
        <label>VALOR:</label>
        <input type="text" name="valor" id="valor">
        <label for="">EMPRESA:</label>
        <input type="text" name="empresa_id" id="empresa_id">
        <label for="">CATEGORIA:</label>
        <input type="text" name="categoria_id" id="categoria_id">
        <label>STATUS:</label>
        <input type="boolean" name="status">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>