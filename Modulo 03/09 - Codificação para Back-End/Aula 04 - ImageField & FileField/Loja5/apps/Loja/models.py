from django.db import models

class Perfil(models.Model):
    nome = models.CharField(max_length=100)
    foto = models.ImageField(upload_to="foto_perfil/")
    nascimento = models.DateField()

    def __str__(self):
        return self.nome
    