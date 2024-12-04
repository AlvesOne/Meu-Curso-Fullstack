<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de serviços</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Serviços</h1>
        <form action="{{ route('servicos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">TIPO:</label>
            <input type="text" name="tipo" id="tipo">
            <label for="">VALOR R$:</label>
            <input type="text" name="valor" id="valor">
            <label for="">EMPRESA:</label>
                <select name="empresa_id" id="empresa_id">
                    @foreach ( $empresas as $empresa )
                        <option value="{{ $empresa->id }}">{{ $empresa->razao_social}}</option>
                    @endforeach
                </select>
            <label for="">CATEGORIA:</label>
                <select name="categoria_id" id="categoria_id">
                    @foreach ( $categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->tipo }}</option> 
                    @endforeach
                </select>
            <label for="">STATUS:</label>
                <select name="status" id="status">
                    <option value="1">CONCLUIDO</option>
                    <option value="0">EM ANDAMENTO</option>
                </select>

            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('servicos.create') }}"> Cadastrar SERVIÇO</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">EMPRESA</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico )
                    <tr>
                        <th scope="row">{{$servico->id}}</th>
                        <td>{{$servico->tipo}}</td>
                        <td>{{$servico->valor}}</td>
                        <td>{{$servico->empresa_id}}</td>
                        <td>{{$servico->categoria_id}}</td>
                    
                        <td>
                            @if ($servico->status)
                                ATIVO
                            @else
                                INATIVO
                            @endif
                        </td>
                        <td>
                            <button><a href="{{ route('servicos.edit', $servico->id)}}">EDITAR</a></button>
                            <form action="{{route('servicos.destroy', $servico->id)}}" method="POST" style= "display:inline">
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