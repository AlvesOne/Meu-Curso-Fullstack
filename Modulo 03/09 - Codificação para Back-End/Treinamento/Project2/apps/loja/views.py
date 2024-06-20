from django.shortcuts import render

from .models import *

def LinkInicial(request):
    return render(request, "inicio.html")

def LinkCadastro(request):
    return render(request, "Cadastro.html")

def VerProdutos(request):
    produtos_lista = Moveis.objects.all()
    return render(request, 'moveis.html', {'produtos': produtos_lista})

def VerProd(request):
    produtos_lista = Eletronicos.objects.all()
    return render(request, 'eletronicos.html', {'produtos': produtos_lista})

def VerProdu(request):
    produtos_lista = Vestuario.objects.all()
    return render(request, 'vestuario.html', {'produtos': produtos_lista})



