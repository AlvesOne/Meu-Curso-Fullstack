<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar cliente</title>
</head>
<body>
    <h1>Novo cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>NOME:</label>
        <input type="text" name="nome">
        <label>DATA NASCIMENTO:</label>
        <input type="text" name="data_nascimento">
        <label for="">FOTO:</label>
        <input type="text" name="foto" id="foto" accept="image/*">
        <label>STATUS:</label>
        <input type="boolean" name="status">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>