from django.db import models

class Autore(models.Model):
    nome = models.CharField(max_length=100)
    ano_publicacao = models.DateField()
    editora = models.CharField(max_length=100)

    def __str__(self):
        return self.nome 

    

