from django.shortcuts import render, redirect
from .forms import *
from .models import *
from django.http import HttpResponse

def LinkInicial(request):
    busca_produto = Produto.objects.all()
    return render(request, "index.html", {"produtos": busca_produto})

def CriarProduto(request):
    if request.method == "POST":
        novo_produto = FormularioProduto(request.POST, request.FILES)
        if novo_produto.is_valid():
            novo_produto.save()
            return redirect("pagina_index")
    else:
        novo_produto = FormularioProduto()
    return render(request, "cadastro.html", {"formulario": novo_produto})

def CriarCategoria(request):
    if request.method == "POST":
        nova_categoria = FormularioCategoria(request.POST)
        if nova_categoria.is_valid():
            nova_categoria.save()
            return redirect("pagina_cadastro")
    else:
        nova_categoria = FormularioCategoria()
    return render(request, "criar-empresa.html", {"formulario": nova_categoria})

def VerDetalhes(request, id_vaga):
    busca = Produto.objects.get(id=id_vaga)
    return render(request, "detalhes.html", {"produtos": busca})

def LinkCadastro(request):
    return render(request, "cadastro.html")

def LinkDetalhes(request):
    return render(request, "detalhes.html")

def LinkProdutos(request):
    return render(request, "produtos.html")

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos': produtos_lista})

