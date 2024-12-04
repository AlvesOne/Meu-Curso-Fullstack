<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Clientes</h1>
        <form action="{{ route('clientes.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">NOME:</label>
            <input type="text" name="nome" id="nome">
            <label for="">DATA DE NASCIMENTO:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
            <label for="">FOTO:</label>
            <input type="file" name="foto" id="foto" accept="image/*">
            <label for="">STATUS:</label>
                <select name="status" id="status">
                    <option value="1">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>

            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('clientes.create') }}"> Cadastrar Cliente</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DATA DE NASCIMENTO</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente )
                    <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->data_nascimento}}</td>
                        <td>
                            @if ($cliente->foto)
                                <img src="{{asset('storage/'. $cliente->foto)}}" alt="foto do cliente" width="50">
                            @else
                                Sem foto
                            @endif
                        </td>
                        <td>
                            @if ($cliente->status)
                                ATIVO
                            @else
                                INATIVO
                            @endif
                        </td>
                        <td>
                            <button><a href="{{ route('clientes.edit', $cliente->id)}}">EDITAR</a></button>
                            <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST" style= "display:inline">
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