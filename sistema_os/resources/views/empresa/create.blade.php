<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Empresa</title>
</head>
<body>
    <h1>Nova Empresa</h1>

    <form action="{{ route('empresas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>RAZÃO SOCIAL:</label>
        <input type="text" name="razao_social">
        <label>CNPJ:</label>
        <input type="text" name="cnpj">
        <label for="">ENDEREÇO:</label>
        <input type="text" name="endeco">
        <label>TELEFONE:</label>
        <input type="text" name="telefone">
        <label>CEP:</label>
        <input type="text" name="cep">
        <label>STATUS:</label>
        <input type="boolean" name="status">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>