<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem serviço</title>
</head>
<body>
    @foreach ($ordemservicos as $ordemservico)
        <h1>{{ $ordemservico->cliente_id}}</h1>
        <p>{{$ordemservico->servico_id}}</p>
        <p>{{$ordemservico->data}}</p>
        <p>{{$ordemservico->status}}</p> 
    @endforeach
    <a href="{{route('ordemservicos.edit', $ordemservicos->id)}}">EDITAR</a>
</body>
</html>