from django.urls import path
from .views import *

urlpatterns = [
    path("", VerProdutos, name="pagina_index"),
]