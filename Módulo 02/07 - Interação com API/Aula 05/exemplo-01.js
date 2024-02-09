let urlJogos = "https://raw.githubusercontent.com/AlvesOne/Meu-Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Aula%2004/jogos.json"

async function encontrar(){
    let resposta = await fetch(urlJogos)
    let jogos = await resposta.json()

    for(let jogo in jogos){
        document.body.innerHTML += `
            <div class="card">
                <img
                    src="${jogos[jogo].imagem}"
                    alt="vazio"
                    width="auto" height="250"
                >
                <p class="titulo">
                ${jogos[jogo].nome}
                </p>
                <p>
                ${jogos[jogo].classificacao}
                </p>

               
            
            </div>
        
        
        `


    }
}
encontrar()