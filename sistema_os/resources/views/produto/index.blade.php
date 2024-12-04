<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produto</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Produto</h1>
        <form action="{{ route('produtos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">NOME:</label>
            <input type="text" name="nome" id="nome">
            <label for="">VALOR:</label>
            <input type="decimal" name="valor" id="valor">
            <label for="">DESCRIÇÃO:</label>
            <input type="text" name="descricao" id="descricao">
            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('produtos.create') }}"> Cadastrar produto</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto )
                    <tr>
                        <th scope="row">{{ $produto->id }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            <button><a href="{{ route('produtos.edit', $produto->id)}}">EDITAR</a></button>
                            <form action="{{route('produtos.destroy', $produto->id)}}" method="POST" style= "display:inline">
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