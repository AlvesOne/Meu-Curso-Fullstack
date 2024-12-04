<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Categorias</h1>
        <form action="{{ route('categorias.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">TIPO:</label>
            <input type="text" name="tipo" id="tipo">
            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('categorias.create') }}"> Cadastrar Cliente</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria )
                    <tr>
                        <th scope="row">{{$categoria->id}}</th>
                        <td>{{$categoria->tipo}}</td>
                        <td>
                            <button><a href="{{ route('categorias.edit', $categoria->id)}}">EDITAR</a></button>
                            <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST" style= "display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit">EXCLUIR</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach

            </tbody>

        </table>
    </body>
</html>