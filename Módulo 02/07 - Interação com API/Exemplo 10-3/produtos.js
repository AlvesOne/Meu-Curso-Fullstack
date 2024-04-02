
async function busca(){
    let procura = await fetch("exemplo-10.json")
    let produtos = await procura.json()

    let listaDiv = document.getElementById("lista-card")

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
               <a href="carrinho.html"> <button class="carrinho">Adicionar ao Carrinho</button> </a>
            </div>
        `

    }

    let elementoCard = document.querySelectorAll(".card")

    for(let card of elementoCard){
        card.addEventListener("click", cliqueCard)
    }
 
}
busca()

function cliqueCard(){
    let elementoID = this.getAttribute("data-id")
    window.location.href ="detalhes.html?produtoid="+ elementoID
}

let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(){


    // zera a variavel do index da lista quando ela chega no final
    if (slideIndex == 4){
        slideIndex = 0
    }

    // coloca todos os slides invisiveis
    for(let slide of slides){
        slide.style.display = 'none';
    }

    // coloca apenas o slide da vez visivel
    slides[slideIndex].style.display = 'block';

}

// botão proximo slide
function nextSlid(){
    slideIndex++
    showSlide();
}

// botão slide anterior
function prevSlid(){
    slideIndex--
    showSlide();
}

// Chama a primeira execução do slide
showSlide(0)

// Altera o slide a cada 2 segundo
setInterval(() => {
    slideIndex++
    showSlide()
}, 5000);