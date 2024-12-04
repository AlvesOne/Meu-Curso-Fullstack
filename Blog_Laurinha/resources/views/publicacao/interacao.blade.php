<!DOCTYPE html>
<html>
    <head>
        <title>LauraBeatriz.com</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>



    <body>
        <div class="banner">
                <div class="conteiner">
                    <div class="navbar">
                        <div class="logo">
                           <a href="{{ route('publicacao.index') }}"> <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="125px" ></a>
                        </div>
                        <nav id="menuItens">
                            <ul>
                            <li><a href="{{ route('publicacao.index') }}">Inicio</a></li>
                        <li><a href="{{ route('publicacao.interacao') }}">Publicações</a></li>
                        <li><a href="#secao1">Fotos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        
        
            <div class="profile-container">

                <div class="profile-header">
                    <div class="profile-picture">
                        @auth
                            <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Foto de Perfil">
                        @endauth
                    </div>
                </div>
                <div class="publicacoes-container">
                    @foreach ($publicacoes as $publicacao)
                        <div class="publicacao-card">
                            <div class="card-publicacoes">
                                <li><img class="card-img-top" src="{{ asset('storage/' . $publicacao->foto) }}" id="{{ $publicacao->id }}" alt="Imagem de capa do card"></li>
                                <div class="card-body">
                                    <p class="card-title">{{ $publicacao->titulo_publicacao }}</p>
                                </div>

                                <div class="interaction-section">
                                    <!-- Botão de Like -->
                                    <form method="POST" action="{{ route('publicacoes.like', $publicacao) }}" class="interaction-form">
                                        @csrf
                                        <button class="like-button">
                                            <img src="https://img.icons8.com/?size=100&id=47942&format=png&color=000000" height="20" width="30" alt="Like">
                                        </button>
                                    </form>
                                    <span class="like-count">{{ $publicacao->avaliacao->where('like', 1)->count() }}</span>

                                    <!-- Botão de Dislike -->
                                    <form method="POST" action="{{ route('publicacoes.dislike', $publicacao) }}" class="interaction-form">
                                        @csrf
                                        <button class="dislike-button">
                                            <img src="https://img.icons8.com/?size=100&id=ITquyTscq33Q&format=png&color=000000" height="20" width="30" alt="Dislike">
                                        </button>
                                    </form>
                                    <span class="dislike-count">{{ $publicacao->avaliacao->where('dislike', 1)->count() }}</span>

                                    <!-- Comentários -->
                                    <form method="POST" action="{{ route('publicacoes.comentarios.store', $publicacao) }}" class="comment-form">
                                        @csrf
                                        <input type="text" name="conteudo" placeholder="Comente algo..." class="comment-input">
                                        <button type="submit" class="comment-button">Enviar</button>
                                    </form>
                                    <span class="comment-count">{{ $publicacao->comentario->count() }}</span>
                                        
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


        </div>

        <footer class="footer">
            <div class="footer-container">
                <div class="footer-logo">
                    <h2>Denali Blog</h2>
                </div>
                <div class="footer-social">
                    <a href="https://facebook.com" target="_blank" class="social-link">
                        <img src="https://img.icons8.com/?size=64&id=118523&format=png" alt="Facebook">
                    </a>
                    <a href="https://instagram.com" target="_blank" class="social-link">
                        <img src="https://img.icons8.com/?size=64&id=32292&format=png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com" target="_blank" class="social-link">
                        <img src="https://img.icons8.com/?size=64&id=104680&format=png" alt="Twitter">
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="social-link">
                        <img src="https://img.icons8.com/?size=64&id=8803&format=png" alt="LinkedIn">
                    </a>
                </div>
                <div class="footer-info">
                    <p>&copy; 2024 Denali Blog. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
    </body>
        
</html>