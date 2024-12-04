<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>
<body>
    @foreach ($categorias as $categoria)
        <h1>{{ $categoria->tipo}}</h1>
        <p>{{$categoria->status}}</p> 
    @endforeach
    <a href="{{route('categorias.edit', $categorias->id)}}">EDITAR</a>
</body>
</html>