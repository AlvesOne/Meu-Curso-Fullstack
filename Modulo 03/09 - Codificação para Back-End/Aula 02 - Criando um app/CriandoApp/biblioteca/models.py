from django.db import models

class Autor(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    
    def __str__(self):
        return self.nome


class Livro(models.Model):
    nome = models.CharField(max_length=100)
    editora = models.CharField(max_length=100, default="Aguardando editora")
    editora2 =  models.CharField(max_length=100, null= True, blank= True )
    editora3 = models.CharField(max_length=100)
    ano_publi = models.DateField()
    autor = models.ForeignKey(Autor, on_delete=models.CASCADE)

    def __str__(self):
        return self.nome 


