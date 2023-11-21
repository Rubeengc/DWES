from django.shortcuts import render
from django.http import HttpResponse, JsonResponse
# Create your views here.
from .models import Tpeliculas
def devolver_peliculas(request):
    lista= Tpeliculas.objects.all()
    respuesta_final=[]
    for fila_sql in lista:
        diccionario = {}
        diccionario['id'] = fila_sql.id
        diccionario['nombre'] = fila_sql.nombre
        diccionario['url_imagen'] = fila_sql.url_imagen
        respuesta_final.append(diccionario)
    return JsonResponse(respuesta_final, safe=False)
