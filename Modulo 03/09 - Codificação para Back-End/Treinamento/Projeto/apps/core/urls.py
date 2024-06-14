from django.urls import path
from .views import *

urlpatterns = [
    path("", LinkInicial, name="pagina_index"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),
    path('eletros/', VerProdutos, name="pagina_eletros"),
    path('moveis/', VerPro, name="pagina_moveis"),
    path('vestuario/', VerProd, name="pagina_vestuario"),
]

