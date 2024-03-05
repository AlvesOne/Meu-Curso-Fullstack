async function verDetalhe(){
    let buscar = await fetch("exemplo-10.json")
    let produtos = await buscar.json()

    let parametrosURL = new URLSearchParams(window.location.search)
    let idProduto = parametrosURL.get("produtoid")

    let inProduto = null
    for(let x in produtos){
        if(produtos[x].id == idProduto){
            inProduto = x
        }
    }
    document.title = produtos[inProduto].nome

    document.body.innerHTML += `
    <div class="linkCard">
        <h2 class="titulo1">${produtos[inProduto].nome}</h2>
        <img src="${produtos[inProduto].img}" width="450" heigth="auto" style="border: 1px solid #000; border-radius:10px; box-shadow:2px 2px 2px 0px black;">
        <p>${produtos[inProduto].descricao}</p>
        <div class="grupoValores">
            <span class="valorCom">R$ ${(produtos[inProduto].valorComDesconto).toFixed(2).replace(".",",")}</span>
            <span class="valorSem">R$ ${(produtos[inProduto].valorSemDesconto).toFixed(2).replace(".",",")}</span>
        </div>
    </div>
    `
}
verDetalhe()