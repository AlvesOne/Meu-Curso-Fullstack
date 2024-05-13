from django.db import models

class Nacional(models.Model):
    nome = models.CharField(max_length=100)
    ano_lancamento = models.DateField()
    marca = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
    

class Internacional(models.Model):
    nome = models.CharField(max_length=100)
    ano_lancamento = models.DateField()
    marca = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
    

