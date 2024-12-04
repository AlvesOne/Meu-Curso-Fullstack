<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Ordem de Serviço</title>
</head>
<body>
    <h1>Nova Ordem de serviço</h1>

    <form action="{{ route('ordemservicos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>CLIENTE:</label>
        <input type="text" name="cliente_id" id="cliente_id">
        <label>SERVIÇO:</label>
        <input type="text" name="servico_id" id="servico_id">
        <label for="">DATA DO SERVIÇO:</label>
        <input type="date" name="data" id="foto">
        <label>STATUS:</label>
        <input type="boolean" name="status">
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>