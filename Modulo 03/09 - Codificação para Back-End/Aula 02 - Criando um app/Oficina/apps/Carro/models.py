from django.db import models

class Carro(models.Model):
    nome = models.CharField(max_length=100)
    marca = models.CharField(max_length=50)
    data_servico = models.DateField()

    def __str__(self):
        return self.nome
    