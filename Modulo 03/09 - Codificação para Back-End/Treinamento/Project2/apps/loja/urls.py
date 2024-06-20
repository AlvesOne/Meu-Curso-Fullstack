from django.urls import path
from .views import *

urlpatterns = [
    path('',LinkInicial, name= "pagina_inicio"),
    path('Cadastro/',LinkCadastro, name = "pagina_cadastro"),
    path('Moveis/', VerProdutos, name = "pagina_moveis"),
    path('Eletronicos/', VerProd, name = "pagina_eletronicos"),
    path('Vestuario/', VerProdu, name = "pagina_vestuario"),
]
