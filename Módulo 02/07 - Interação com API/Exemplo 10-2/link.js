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
    document.body.innerHTML = `
    <div class="linkCard">
        <img src="${produtos[inProduto].img}" width="450" heigth="auto">
        <h2 class="titulo1">${produtos[inProduto].nome}</h2>
        <h3>${produtos[inProduto].descricao}</h3>
        <div>
            <span class="valorCom">R$ ${produtos[inProduto].valorComDesconto}</span>
            <span class="valorSem">R$ ${produtos[inProduto].valorSemDesconto}</span>
        </div>
    </div>
    `
}
verDetalhe()
