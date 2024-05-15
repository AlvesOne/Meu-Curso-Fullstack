from django.db import models

class Pais(models.Model):
    nacionalidade = models.CharField(max_length=100)
    naturalidade = models.CharField(max_length=80)
    data_nascimento = models.DateField()

    def __str__(self):
        return self.nacionalidade
    
    
