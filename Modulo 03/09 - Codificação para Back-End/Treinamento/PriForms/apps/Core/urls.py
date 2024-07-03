from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkInicial, name="pagina_index"),
    path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path("detalhes", LinkDetalhes, name="pagina_detalhes"),
    path("produtos", LinkProdutos, name="pagina_produtos"),
]