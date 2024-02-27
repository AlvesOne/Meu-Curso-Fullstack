
async function busca(){
    let procura = await fetch("exemplo-10.json")
    let produtos = await procura.json()

    let listaDiv = document.getElementById("lista-card")

    for(let produto of produtos){
        listaDiv.innerHTML += `
            <div class="card">
                <img src="${produto.img}" width="250" heigth="auto">
                <h3> ${produto.nome} </h3>
                <p>${produto.descricao} </p>
                <div>
                    <span> R$ ${(produto.valorComDesconto).toFixed(2).replace(".",",")} </span>
                    <span> R$ ${(produto.valorSemDesconto).toFixed(2).replace(".",",")} </span>
                </div>
            </div>
        `

    }
}
busca()