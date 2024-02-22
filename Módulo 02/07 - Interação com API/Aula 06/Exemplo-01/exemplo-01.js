async function automoveis(){

    let buscar = await fetch("exemplo-06.json")
    let carros = await buscar.json()

    let div1 = document.getElementById("card1")

    for(let carro of carros){
        div1.innerHTML +=`
            <div class="card">
                <img src="${carro.img}" width="250" heidth="auto">
                <h4>${carro.modelo}</h4>
                <p>${carro.ano}</p>
                <p>${carro.cor}</p>
                <div>
                    <span> R$ ${(carro.valorComDesconto).toFixed(2).replace(".",",")}</span>
                    <span> R$ ${(carro.valorSemDesconto).toFixed(2).replace(".",",")}</span>
                </div>
            </div>

        `

    }


}
automoveis()