from django.db import models

class Dados(models.Model):
    nome = models.CharField(max_length=100)
    nascimento = models.DateField()
    foto_perfil = models.ImageField(upload_to="foto_perfil/")

    def __str__(self):
        return self.nome
    
