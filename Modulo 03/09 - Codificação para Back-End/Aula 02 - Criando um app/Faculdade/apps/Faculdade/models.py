from django.db import models
class Faculdade(models.Model):
    nome = models.CharField(max_length=100)
    data_matricula = models.DateField()
    aceita_enem = models.BooleanField()

    def __str__(self):
        return self.nome
    
