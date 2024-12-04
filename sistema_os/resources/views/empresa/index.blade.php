<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empresas</title>
</head>
    <body>
        <button><a href="http://127.0.0.1:8000">Pagina inicial</a></button>
        <h1>Empresas</h1>
        <form action="{{ route('empresas.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">RAZÃO SOCIAL:</label>
            <input type="text" name="razao_social" id="razao_social">
            <label for="">CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <label for="">ENDEREÇO:</label>
            <input type="text" name="endereco" id="endereco">
            <label for="">TELEFONE:</label>
            <input type="text" name="telefone" id="telefone">
            <label for=""> CEP:</label>
            <input type="text" name="cep" id="cep">
            <button type="submit">SALVAR</button>
        </form>
        <!--<a href="{{ route('empresas.create') }}"> Cadastrar Cliente</a>-->
        @if (session('sucess'))
            <div>{{ session(sucess)}}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">RAZÃO SOCIAL</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">CEP</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa )
                    <tr>
                        <th scope="row">{{$empresa->id}}</th>
                        <td>{{$empresa->razao_social}}</td>
                        <td>{{$empresa->cnpj}}</td>
                        <td>{{$empresa->endereco}}</td>
                        <td>{{$empresa->telefone}}</td>
                        <td>{{$empresa->cep}}</td>
                        <td>
                            <button><a href="{{ route('empresas.edit', $empresa->id)}}">EDITAR</a></button>
                            <form action="{{route('empresas.destroy', $empresa->id)}}" method="POST" style= "display:inline">
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