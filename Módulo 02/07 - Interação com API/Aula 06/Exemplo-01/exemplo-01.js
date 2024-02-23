async function automoveis(){

    let buscar = await fetch("exemplo-06.json")
    let carros = await buscar.json()

    let div1 = document.getElementById("card1")

    for(let carro of carros){
        div1.innerHTML +=`
            <div class="card">
                <img src="${carro.img}" width="250" heidth="auto">
                <div class="titulo1">
                    <h4 class="titulo">${carro.modelo}</h4>
                    <p>Ano: ${carro.ano}</p>
                    <p>Cor: ${carro.cor}</p>
                </div>
                <div>
                    <span class="valorCom"> R$ ${(carro.valorComDesconto).toFixed(2).replace(".",",")}</span>
                    <span class="valorSem"> R$ ${(carro.valorSemDesconto).toFixed(2).replace(".",",")}</span>
                </div>
            </div>

        `

    }


}
automoveis()