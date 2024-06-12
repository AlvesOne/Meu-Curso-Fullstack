from django.shortcuts import render

from .models import *
def LinkInicial(request):
    return render(request, "index.html")

def LinkCadastro(request):
    return render(request, "cadastro.html")

def VerProdutos(request):
    produtos_lista = Eletro.objects.all()
    return render(request, 'eletros.html', {'produtos': produtos_lista})

def VerPro(request):
    produtos_lista = Moveis.objects.all()
    return render(request, 'moveis.html', {'produtos': produtos_lista})

def VerProd(request):
    produtos_lista = Vestuario.objects.all()
    return render(request, 'vestuario.html', {'produtos': produtos_lista})


