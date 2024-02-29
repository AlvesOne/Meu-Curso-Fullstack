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
        <h3>${produtos[inProduto].nome}</h3>
    `
}
verDetalhe()