from django.shortcuts import render

def saudacao(request):
	return render(request, 'Ola_Mundo.html')
