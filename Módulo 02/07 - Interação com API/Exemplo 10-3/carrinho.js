const removeProdutoButton = document.getElementsByClassName("remove")
for(var i = 0; i < removeProdutoButton.length; i++) {
    removeProdutoButton[i].addEventListener("click", function(event){
        event.target.parentElement.parentElement.remove()
    })
}