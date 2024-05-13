from django.db import models

class Tipos_ferramentas(models.Model):
    nome = models.CharField(max_length=100)
    marca = models.CharField(max_length=100)
    data_compra = models.CharField(max_length=100)
    
    def __str__(self):
        return self.nome
    
    
