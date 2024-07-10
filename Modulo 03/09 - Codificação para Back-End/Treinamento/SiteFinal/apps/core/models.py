from django.db import models

class Cliente(models.Model):
    nome= models.CharField(max_length=100)
    data_nascimento= models.DateField()
    foto= models.ImageField(upload_to="foto_perfil")

    def __str__(self):
        return self.nome


class Empresa(models.Model):
    razao_social= models.CharField(max_length=100)
    cnpj= models.PositiveIntegerField()

    def __str__(self):
        return self.razao_social

