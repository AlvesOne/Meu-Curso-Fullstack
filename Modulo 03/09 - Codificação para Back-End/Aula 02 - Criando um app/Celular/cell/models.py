from django.db import models

class Celulares(models.Model):
    nome = models.CharField(max_length=100)
    marca = models.CharField(max_length=100)
    ano_lancamento = models.DateField()

    def __str__(self):
        return self.nome
    
