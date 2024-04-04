async function busca(){
    let procura = await fetch("exemplo-10.json")
    let produtos = await procura.json()

    let listaDiv = document.getElementById("carrinho")

    for(let produto of produtos){
        listaDiv.innerHTML += `
            <div class="card" data-id="${produto.id}">
                <img src="${produto.img}" width="250" height="auto">
                <h3> ${produto.nome} </h3>
                <p>${produto.descricao} </p>
                <div class="grupoValores">
                    <span class="valorCom"> R$ ${(produto.valorComDesconto).toFixed(2).replace(".",",")} </span>
                    <span class="valorSem"> R$ ${(produto.valorSemDesconto).toFixed(2).replace(".",",")} </span>
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


const removeProdutoButton = document.getElementsByClassName("remove")
for(var i = 0; i < removeProdutoButton.length; i++) {
    removeProdutoButton[i].addEventListener("click", function(event){
        event.target.parentElement.parentElement.remove()
    })
}