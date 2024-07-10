from django.urls import path
from .views import *

urlpatterns = [
    path("", VerIndex, name="pagina_index"),
    path("criar_produto", CriarProduto, name= "pagina_produto")

]


