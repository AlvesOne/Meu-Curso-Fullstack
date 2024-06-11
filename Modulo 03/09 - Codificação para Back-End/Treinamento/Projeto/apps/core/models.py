from django.db import models

class Eletro(models.Model):
    nome_eletro = models.CharField(max_length=100)
    valor_eletro = models.DecimalField(max_digits=8, decimal_places=2)

    def __str__(self):
        return self.nome_eletro
    
