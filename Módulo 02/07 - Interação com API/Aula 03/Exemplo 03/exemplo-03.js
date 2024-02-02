/*async function europa(){
    let jogadores = await fetch("jogadores.txt")
    //let clubes = await fetch("clubes.txt")
    let jogador = await jogadores.text()
    let times = await clubes.text()
    document.getElementById("h2").textContent = jogador
    document.getElementById("p2").textContent = times
    
}
europa()
*/
async function europa(arquivo, id){
    let jogadores = await fetch(arquivo)
    let clubes = await jogadores.text()
    document.getElementById(id).textContent = clubes
}
europa("jogadores.txt", "h2")
europa("clubes.txt", "p2")