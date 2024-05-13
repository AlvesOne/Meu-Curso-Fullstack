from django.db import models

class Tecnologia(models.Model):
    nome = models.CharField(max_length=100)
    marca = models.CharField(max_length=100)
    ano = models.DateField()

    def __str__(self):
        return self.nome
    
