function adicionarAoCarrinho(produto, valor) {
    const carrinho = document.getElementById('detalhes');
    const item = document.createElement('li');
    item.innerHTML = `${produto} - R$ ${valor.toFixed(2)} <button onclick="pagar(${valor})">Pagar</button>`;
    carrinho.appendChild(item);
}

function pagar(valor) {
    const formaDePagamento = prompt("Escolha a forma de pagamento: PIX, Cartão ou Boleto Bancário");
    switch (formaDePagamento.toLowerCase()) {
        case 'pix':
            alert(`Pague R$ ${produto.valorComDesconto.toFixed(2)} via PIX para o número XXXX-XXXX`);
            break;
        case 'cartão':
            alert(`Pague R$ ${produto.valorComDesconto.toFixed(2)} com cartão de crédito`);
            break;
        case 'boleto':
        case 'boleto bancário':
            alert(`Gere um boleto no valor de R$ ${produto.valorComDesconto.toFixed(2)}`);
            break;
        default:
            alert("Forma de pagamento inválida");
    }
}