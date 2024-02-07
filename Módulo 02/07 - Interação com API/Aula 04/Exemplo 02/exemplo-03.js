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
            <p class='titulo'>
                ${convertido[produto].descricao} 
            </p>
            <span>
                ${convertido[produto].valorComDesconto}
            </span>
            <span>
                ${convertido[produto].valorSemDesconto}
            </span>
            <p>
                ${convertido[produto].freteGratis}
            </p>
            
            </div>
         `

    }


    

}
procurar()