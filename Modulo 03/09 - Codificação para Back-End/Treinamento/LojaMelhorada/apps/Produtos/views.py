from django.shortcuts import render
from django.http import HttpResponse

from .models import *

def LinkInicial(request):
    return render(request, "index.html")

def LinkCadastro(request):
    return render(request, "cadastro.html")

def LinkLogin(request):
    return render(request, "login.html")

def LinkProdutos(request):
    return render(request, "produtos.html")

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})

def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get(id=id_produto)
    return render(request, "detalhes_produto.html", {"produto": busca})
