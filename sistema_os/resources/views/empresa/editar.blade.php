<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
</head>
<body>
    <h1>Editar Empresa</h1>
   
    <form action="{{ route('empresas.update', $empresas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>RAZÃO SOCIAL:</label>
        <input type="text" name="razao_social" id="razao_social" value="{{ $empresas->razao_social}}">
        <label>CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" value="{{ $empresas->cnpj}}">
        <label for="">ENDEREÇO:</label>
        <input type="text" name="endereco" id="endereco" value="{{ $empresas->endereco}}">
        <label>TELEFONE:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $empresas->telefone}}">
        <label>CEP:</label>
        <input type="text" name="cep" id="cep" value="{{ $empresas->cep}}">
        <label>STATUS:</label>
        <select name="status" id="status">
            <option value="1" {{ $empresas->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ $empresas->status ? 'selected' : '' }}>Inativo</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>


</body>
</html>