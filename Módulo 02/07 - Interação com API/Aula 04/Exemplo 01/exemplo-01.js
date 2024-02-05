let urlProdutos = "https://raw.githubusercontent.com/AlvesOne/Meu-Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"

async function buscar(){
    let resposta = await fetch(urlProdutos)
    let produtos = await resposta.json()
    //alert(produtos[1].descricao)
    //console.log(produtos[1].descricao)
    //document.body.innerHTML += produtos[0].descricao + "<br>"
    //document.body.innerHTML += produtos[1].descricao + "<br>"
    for(let produto in produtos){
       // document.body.innerHTML += produtos[produto].descricao + "<br>"
        //document.body.innerHTML += ` O nome do produto é ${produtos[produto].descricao} <br>`
        document.body.innerHTML += `
        <div>
            O nome do produto é ${produtos[produto].descricao} 
        </div>
        <br>
        `
    }
}
buscar()


