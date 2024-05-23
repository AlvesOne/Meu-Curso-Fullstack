from django.db import models

class Dados(models.Model):
    nome = models.CharField(max_length=100)
    cpf = models.PositiveIntegerField()
    foto = models.ImageField(upload_to="Foto_Perfil/")

    def __str__(self):
        return self.nome
    
    
