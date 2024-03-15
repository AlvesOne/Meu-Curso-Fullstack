
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
function showSlide(index){
    const slides = document.querySelectorAll('.slide');
    if(index >= slides.length){
        slideIndex = 0;
    } else if(index < 0){
        slideIndex = slides.length -1;
    }
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });
    slides[slideIndex].style.display = 'block';

}
function nextSlid(){
    slideIndex++;
    showSlide(slideIndex);
}
function prevSlid(){
    slideIndex--;
    showSlide(slideIndex);
}
showSlide(slideIndex)