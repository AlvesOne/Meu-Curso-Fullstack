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
    document.getElementById("detalhes").innerHTML += `
        <div class="linkCard">
            <h2 class="titulo1">${produtos[inProduto].nome}</h2>
            <img src="${produtos[inProduto].img[0]}" id="frameImg" width="450" height="450" style="border: 1px solid #000; border-radius: 10px">
            <div class="mini-img" id="mini-img">
            
            </div>
            <h3>${produtos[inProduto].descricao}</h3>
            <div>
                <span class="valorCom">R$ ${produtos[inProduto].valorComDesconto}</span>
                <span class="valorSem">R$ ${produtos[inProduto].valorSemDesconto}</span>
            </div>
        </div>
    `
    let divMini = document.getElementById("mini-img")
    for(let i of produtos[inProduto].img){
        divMini.innerHTML +=`
        <img src="${i}" class="miniatura" width="80" height="80"  style="border: 1px solid #000; border-radius: 10px">
        `
    }
    let listaMiniatura = document.getElementsByClassName("miniatura")
    for(let card of listaMiniatura){
        card.addEventListener("mouseover", alteraImg)
    }
    function alteraImg(){
        document.getElementById("frameImg").src = this.getAttribute("src")
    }

}
verDetalhe()
