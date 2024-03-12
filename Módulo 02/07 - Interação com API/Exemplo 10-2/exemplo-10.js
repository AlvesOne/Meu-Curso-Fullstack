
async function busca(){
    let procura = await fetch("exemplo-10.json")
    let produtos = await procura.json()

    let listaDiv = document.getElementById("lista-card")

    for(let produto of produtos){
        listaDiv.innerHTML += `
            <div class="card" data-id="${produto.id}">
                <img src="${produto.img[0]}" width="250" heigth="auto">
                <h3> ${produto.nome} </h3>
                <p>${produto.descricao} </p>
                <div>
                    <span> R$ ${(produto.valorComDesconto).toFixed(2).replace(".",",")} </span>
                    <span> R$ ${(produto.valorSemDesconto).toFixed(2).replace(".",",")} </span>
                </div>
            </div>
        `

    }

    let elementoCard = document.querySelectorAll(".card")

    for(let card of elementoCard){
        card.addEventListener("click", cliqueCard)
    }
 
}
busca()

function cliqueCard(){
    let elementoID = this.getAttribute("data-id")
    window.location.href ="link.html?produtoid="+ elementoID
}