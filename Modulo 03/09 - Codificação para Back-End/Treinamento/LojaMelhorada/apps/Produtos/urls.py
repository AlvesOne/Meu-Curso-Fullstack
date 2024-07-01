from django.urls import path
from .views import *

urlpatterns = [
    path('', VerProdutos),
    path("Inicio", LinkInicial, name="pagina_index"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path("login", LinkLogin, name="pagina_login"),
    path("login", LinkProdutos, name="pagina_produtos"),
    path("ver_produto/<int:id_produto>/", DetalhesProduto, name="detalhes_produto")
]