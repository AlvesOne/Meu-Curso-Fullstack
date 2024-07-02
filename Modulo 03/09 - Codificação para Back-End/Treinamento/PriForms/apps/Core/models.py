from django.db import models

class Produto(models.Model):
    nome_produto = models.CharField(max_length=100)
    foto_produto = models.ImageField(upload_to="foto_produto")
    valor_produto = models.DecimalField(decimal_places=2, max_digits=10)
    

    def __str__(self):
        return self.nome_produto


class Categoria(models.Model):
    categoria = models.ForeignKey(Produto, on_delete=models.CASCADE)

    def __str__(self):
        return self.categoria.nome_produto + " | categoria"
    
    
