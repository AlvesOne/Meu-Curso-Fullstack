<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LauraBeatriz.com</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <div class="banner">
        <div class="conteiner">
            <div class="navbar">
                <div class="logo">
                    <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="125px" >
                </div>
                <nav id="menuItens">
                    <ul>
                        <li><a href="{{ route('publicacao.index') }}">Inicio</a></li>
                        <li><a href="{{ route('publicacao.interacao') }}">Publicações</a></li>
                        <li><a href="#secao1">Fotos</a></li>
                    </ul>
                </nav>
                <button><a href="{{ route('login') }}">Login</a></button>
                <button><a href="{{ route('register') }}">Registre-se</a></button>
                <div class="col-sm">
                    @auth
                        <button type="button" class="btn btn-danger">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </button>
                    @endauth
                </div>
                
                    
            </div>
        </div>
        <hr>
        <div class="linha">
            <div class="col-2">
                <h1>LAURABEATRIZ.COM</h1>
                <p>Laura Beatriz Evangelista de Alencar, nasceu em 26 de novembro de 2004. Ela veio portadora da Distrofia Miotônica de Steinert. Uma doença neurológica, degenerativa e que logo após o seu nascimento, os médicos deram os piores prognósticos possíveis.
                    No entanto, ela saiu do hospital e viveu até o dia 07 de abril de 2023, por não resistir a uma cirurgia no intestino. Em virtude desse acontecimento eu entrei na pior fase da minha vida. Depressão, dor, saudade, tudo o que um Pai possa sentir ao perder o grande amor da sua vida.
                    A partir de então, procurei dar um novo significado à minha vida. Procurei fazer algo que pudesse aliviar a saudade e a falta que ela me faz. Escrevi e publiquei um livro contando um pouco da história da sua vida: O BRILHO DA DIFERENÇA: A HISTÓRIA DE LAURINHA.
                    Isto me ajudou muito, pois ocupei minha mente fazendo algo por mim em que ela estivesse presente.
                    Seria uma forma de homenageá-la e procurar fazer com que sua memória fosse eternizada através da palavra escrita, para as pessoas que a amavam. Depois de publicado, minha cabeça começou a pensar em alguma maneira que eu pudesse dar continuidade a esse trabalho.
                    Foi então que surgiu a ideia de criar um site, em que eu pudesse atuar de maneira mais ativa e que beneficiasse, não somente a mim, mas a outras pessoas que passaram e passam por esse mesmo problema.
                    Seria desenvolvido de forma a ser interativo e criar uma rede de ajuda e auxilio a pais e crianças que sofrem de alguma doença neurológica e dos seus pais que convivem com a doença do filho ou com a sua perda. O site se chamará “LAURABEATRIZ.COM.
                    Meu desejo é que ele atue como uma ajuda a todos os que precisarem e junto a isso irei contando e publicando um pouco da história da minha filha. Contar para outras pessoas tudo o que passei desde o seu nascimento.
                    Não desejo que seja um lugar de tristeza, mas de alento e esperança, pois os dias em que passei ao lado da minha filha, foram os dias mais felizes da minha vida. Ter algo que eu possa fazer para que eu esteja sempre em contato com os acontecimentos ligados a ela, tenho certeza, fará bem não somente a mim, como a outras pessoas.</p>
                
            </div>
            <div class="col-2">
                <img src="{{ asset('storage/foto/foto04.1.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="categorias">
        <div class="corpo-categorias">
            <h4 id="secao1">Galeria de fotos</h4>
            <div class="linha">
                
                <div class="col-3">
                    <img src="{{ asset('storage/foto/foto-01.jpg') }}" alt="">
                </div>

                <div class="col-3">
                    <img src="{{ asset('storage/foto/foto-02.jpg') }}" alt="">
                </div>

                <div class="col-3">
                    <img src="{{ asset('storage/foto/foto-03.jpg') }}" alt="">
                </div>
                
            </div>
            <br><a href="{{ route('publicacao.interacao') }}" class="btn">Mais publicações &#8594;</a>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <h2>LauraBeatriz</h2>
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