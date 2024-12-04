<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ordem de serviços</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Ordem de serviços</h1>
        <form action="{{ route('ordemservicos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">CLIENTE:</label>
            <select name="cliente_id" id="cliente_id">
                @foreach ( $cliente as $clientes )
                    <option value="{{ $clientes->id }}">{{ $clientes->nome}}</option>
                @endforeach
            </select>
            <label for="">SERVIÇO:</label>
            <select name="servico_id" id="servico_id">
                @foreach ( $servico as $servicos )
                    <option value="{{ $servicos->id }}">{{ $servicos->tipo}}</option>
                @endforeach
            </select>
            <label for="">DATA DO SERVIÇO:</label>
            <input type="date" name="data" id="data">
            <label for="">STATUS:</label>
                <select name="status" id="status">
                    <option value="1">ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>

            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('ordemservicos.create') }}"> Cadastrar Cliente</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CLIENTE</th>
                    <th scope="col">SERVIÇO</th>
                    <th scope="col">DATA DO SERVIÇO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordemservico as $ordemservicos )
                    <tr>
                        <th scope="row">{{$ordemservicos->id}}</th>
                        <td>{{$ordemservicos->cliente_id}}</td>
                        <td>{{$ordemservicos->servico_id}}</td>
                        <td>{{$ordemservicos->data}}</td>
                    
                        <td>
                            @if ($ordemservicos->status)
                                ATIVO
                            @else
                                INATIVO
                            @endif
                        </td>
                        <td>
                            <button><a href="{{ route('ordemservicos.edit', $ordemservicos->id)}}">EDITAR</a></button>
                            <form action="{{route('ordemservicos.destroy', $ordemservicos->id)}}" method="POST" style= "display:inline">
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