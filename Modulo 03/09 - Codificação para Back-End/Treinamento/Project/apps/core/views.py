from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import *
from .forms import *

def VerIndex(request):
    buscar_produto = Produto.objects.all()
    return render(request, "index.html", {"produtos", buscar_produto})

def CriarProduto(request):
    if request.method == "POST":
        novo_produto= FormularioPrtoduto(request.POST, request.FILES)
        if novo_produto.is_valid():
            novo_produto.save()
            return redirect("pagina_index")
    else:
        novo_produto = FormularioPrtoduto()
        return render(request,"criar_produto.html", {"produtos":novo_produto})
    


