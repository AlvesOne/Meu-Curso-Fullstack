from django.db import models

class Sala(models.Model):
    nome = models.CharField(max_length=100)
    serie = models.CharField(max_length=50)

    def __str__(self):
        return self.nome
    
