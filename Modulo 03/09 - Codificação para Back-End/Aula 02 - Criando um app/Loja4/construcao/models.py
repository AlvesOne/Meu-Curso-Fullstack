from django.db import models

class MaterialContrucao(models.Model):
    nome = models.CharField(max_length=100)
    marca = models.CharField(max_length=100)
    data_compra = models.DateField()

    def __str__(self):
        return self.nome
    
