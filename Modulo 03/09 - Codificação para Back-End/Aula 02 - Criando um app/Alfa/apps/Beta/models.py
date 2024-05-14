from django.db import models

class DadosPessoais(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    cpf = models.PositiveIntegerField()

    def __str__(self):
        return self.nome
    