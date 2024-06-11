from django.urls import path
from .views import *

urlpatterns = [
    path('lista-produtos/', VerProdutos),
]

urlpatterns = [
    path("", LinkInicial, name="pagina_index"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
]