from django.db import models

class Pessoal(models.Model):
    tipo_sexo = (
        ("M", "Masculino"),
        ("F", "Feminino")
    )
    maior_menor = (
        ("18+", "Maior idade"),
        ("18-", "Menos idade")
    )

    nome = models.CharField(max_length=100)
    sexo = models.CharField(max_length=2, choices=tipo_sexo)
    valor = models.DecimalField(max_digits=4, decimal_places=2)
    idade = models.CharField(max_length=4, choices=maior_menor)

    def __str__(self):
        return self.nome
    
