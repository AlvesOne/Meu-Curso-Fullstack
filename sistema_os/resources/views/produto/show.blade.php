<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    @foreach ($produto as $produtos)
        <h1>{{$produtos->nome}}</h1>
        <p>{{$produtos->valor}}</p>
        <p>{{$produtos->descricao}}</p> 
    @endforeach
    <a href="{{route('produtos.edit', $produto->id)}}">EDITAR</a>
</body>
</html>