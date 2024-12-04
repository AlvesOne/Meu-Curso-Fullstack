<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
</head>
<body>
    @foreach ($empresas as $empresa)
        <h1>{{ $empresa->razao_social}}</h1>
        <p>{{$empresa->cnpj}}</p>
        <p>{{$empresa->endereco}}</p>
        <p>{{$empresa->telefone}}</p>
        <p>{{$empresa->cep}}</p>
    @endforeach
    <a href="{{route('empresas.edit', $empresas->id)}}">EDITAR</a>
</body>
</html>