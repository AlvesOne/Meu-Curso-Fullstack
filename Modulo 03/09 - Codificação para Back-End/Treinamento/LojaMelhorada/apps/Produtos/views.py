from django.shortcuts import render
from django.http import HttpResponse

from .models import *

def LinkInicial(request):
    return render(request, "index.html")

def LinkCadastro(request):
    return render(request, "cadastro.html")

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})
