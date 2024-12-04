<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contatos</title>
</head>
<body>
<form action="{{ route('contato.update',$contato->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Email: </label>
    <input type="text" name="email" id="email" value="{{ $contato->email }}">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{$contato->telefone  }}">
    <button type="submit">Salvar</button>
</form>
</body>
</html>