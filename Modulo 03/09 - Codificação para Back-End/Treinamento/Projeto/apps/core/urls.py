from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkInicial, name="pagina_index"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path('lista', VerProdutos, name="pagina_eletros"),
    path('lista-produtos/', VerPro, name="pagina_moveis"),
    path('lista-pro/', VerProd, name="pagina_vestuario"),
]

