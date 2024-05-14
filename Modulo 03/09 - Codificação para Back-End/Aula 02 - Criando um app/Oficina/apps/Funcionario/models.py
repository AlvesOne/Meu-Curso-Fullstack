from django.db import models

class Colaborador(models.Model):
    nome = models.CharField(max_length=100)
    funcao = models.CharField(max_length=50)
    admicao = models.DateField()

    def __str__(self):
        return self.nome
        