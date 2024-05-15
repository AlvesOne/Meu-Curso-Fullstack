from django.db import models

class Aluno(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    nota_enem = models.BooleanField()

    def __str__(self):
        return self.nome
    
