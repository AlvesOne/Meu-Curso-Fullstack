from django.db import models

class Produto(models.Model):
    nome = models.CharField(max_length=100)
    valor = models.DecimalField(decimal_places=2, max_digits=6)
    imgProduto = models.ImageField(upload_to="Img_Produto/")

    def __str__(self):
        return self.nome
    
class Usuario(models.Model):
    nome = models.CharField(max_length=100)
    Data_Nascimento = models.DateField()
    Foto_Perfil = models.ImageField(upload_to="Foto_Perfil/")

    def __str__(self):
        return self.nome
    
    
