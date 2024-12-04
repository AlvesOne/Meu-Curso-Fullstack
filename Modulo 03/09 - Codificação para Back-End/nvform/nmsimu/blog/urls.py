from django.urls import path
from . import views

urlpatterns = [
    path('', views.post_list, name='post_list'),  # Define a URL raiz para a lista de posts
    path('post/<int:post_id>/', views.post_detail, name='post_detail'),  # URL para detalhes do post
]
