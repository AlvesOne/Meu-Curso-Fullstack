async function rCell(){
    let buscar = await fetch("exemplo-11.json")
    let celulares = await buscar.json()

    let listaDiv = document.getElementById("lista-card")

    for(let produto of celulares){
        listaDiv.innerHTML +=`
            <div class="card" data-id="${produto.id}">
                <img src="${produto.img}" width="250" height="250">
                <h2> ${produto.nome}</h2>
                <p>${produto.especificacoes}</p>
                <div class="Valores">
                    <span class="valorCom">${(produto.precoComDesconto).toFixed(2).replace(".",",")}</span>
                    <span class="valorSem">${(produto.precoSemDesconto).toFixed(2).replace(".",",")}</span>
                </div>
            </div>
        `
    }

    let elementoCard = document.querySelectorAll(".card")
    
    for(let card of elementoCard){
        card.addEventListener("click", cliqueCard)
    }

}
rCell()

function cliqueCard(){
    let elementoID = this.getAttribute("data-id")
    window.location.href = "detalhes.html?produtoid="+ elementoID
}


let list = document.querySelectorAll(".navegacao li")

function ativarLink(){
    list.forEach((item) => {
        item.classList.remove("para")
    });
    this.classList.add("para");
}

list.forEach((item) => item.addEventListener("mouseover" ,ativarLink));


let menuu = document.querySelector(".menuu")
let 