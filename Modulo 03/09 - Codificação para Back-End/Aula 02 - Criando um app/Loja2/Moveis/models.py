from django.db import models

class MoveisSala(models.Model):
    nome = models.CharField(max_length=100)
    data_compra = models.DateField()
    marca = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
    
