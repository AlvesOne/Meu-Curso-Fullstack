from django.shortcuts import render

from .models import *
from django.http import HttpResponse

def LinkInicial(request):
    return render(request, "index.html")

def LinkCadastro(request):
    return render(request, "cadastro.html")

def LinkDetalhes(request):
    return render(request, "detalhes.html")

def LinkProdutos(request):
    return render(request, "produtos.html")

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})
