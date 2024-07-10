from django import forms 
from .models import *

class FormularioPrtoduto(forms.ModelForm):
    class Meta:
        model = Produto
        fields = '__all__'
        