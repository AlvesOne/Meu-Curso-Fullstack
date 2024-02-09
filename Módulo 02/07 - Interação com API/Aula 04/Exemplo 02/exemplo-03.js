let urlProdutos = "https://raw.githubusercontent.com/AlvesOne/Meu-Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"
async function procurar(){
    let resposta = await fetch(urlProdutos)
    let convertido = await resposta.json()
    for (let produto in convertido){
        document.body.innerHTML +=`
            <div class="card">
            
            <img
                src="${convertido[produto].img}" 
                alt= "Não renderizou"
                width="auto" height="250"
            >
            <p class='titulo'>
                ${convertido[produto].nome} 
            </p>
            <p>
                ${convertido[produto].descricao} 
            </p>
            <div class="valores">
            <span class="valoresCom" >
                ${convertido[produto].valorComDesconto}
            </span>
            <span class="valoresSem">
                ${convertido[produto].valorSemDesconto}
            </span>
            </div>
            <p>
                ${convertido[produto].tipoEntrega}
            </p>
            
            </div>
         `

    }


    

}
procurar()