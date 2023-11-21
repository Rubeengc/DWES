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

def devolver_peliculas_por_id(request,id_solicitado):
    peliculas= Tpeliculas.objects.get(id = id_solicitado)
    comentarios =peliculas.tcomentarios_set.all()
    lista_comentarios=[]
    for fila_comentario_sql in comentarios:
        diccionario = {}
        diccionario['id'] = fila_comentario_sql.id
        diccionario['comentario'] = fila_comentario_sql.comentario
        lista_comentarios.append(diccionario)
        resultado={
            'id': peliculas.id,
            'comentario':lista_comentarios,
            'nombre':peliculas.nombre,
            'url_imagen':peliculas.url_imagen,
            'duracion':peliculas.duracion,
            'genero':peliculas.genero
        }
    return JsonResponse(resultado,json_dumps_params={'ensure_ascii':False})
