
async function busca(){
    let procura = await fetch("exemplo-10.json")
    let produtos = await procura.json()

    let listaDiv = document.getElementById("lista-card")

    for(let x in produtos){
        listaDiv.innerHTML += `<h1> ${produtos[x].nome} </h1>`
    }
}
busca()