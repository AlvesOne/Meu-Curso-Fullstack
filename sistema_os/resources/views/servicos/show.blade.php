<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço</title>
</head>
<body>
    @foreach ($servicos as $servico)
        <h1>{{ $servico->tipo}}</h1>
        <p>{{$servico->valor}}</p>
        <p>{{$servico->empresa_id}}</p>
        <p>{{$servico->categoria_id}}</p>
        <p>{{$servico->status}}</p> 
    @endforeach
    <a href="{{route('servicos.edit', $servicos->id)}}">EDITAR</a>
</body>
</html>