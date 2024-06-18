from django.db import models

class Moveis(models.Model):
    nome_moveis = models.CharField(max_length=100)
    valor_moveis = models.DecimalField(max_digits=8, decimal_places=2)
    data_compraM = models.DateField()
    foto_moveis = models.ImageField(upload_to="foto_moveis/")

    def __str__(self):
        return self.nome_moveis


class Eletronicos(models.Model):
    nome_eletro = models.CharField(max_length=100)
    valor_eletro = models.DecimalField(max_digits=8, decimal_places=2)
    data_compraE = models.DateField()
    foto_eletro = models.ImageField(upload_to="foto_eletro/")

    def __str__(self):
        return self.nome_eletro


class Vestuario(models.Model):
    nome_vestuario = models.CharField(max_length=100)
    valor_vestuario = models.DecimalField(max_digits=8, decimal_places=2)
    data_compraV = models.DateField()
    foto_vestuario = models.ImageField(upload_to="foto_vestuario/")

    def __str__(self):
        return self.nome_vestuario
    
    

