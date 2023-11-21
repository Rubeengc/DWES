# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class Tcomentarios(models.Model):
    comentario = models.CharField(max_length=2000, blank=True, null=True)
    usuario = models.ForeignKey('Tusuarios', models.DO_NOTHING, blank=True, null=True)
    peliculas = models.ForeignKey('Tpeliculas', models.DO_NOTHING, blank=True, null=True)
    fecha = models.DateField(blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tComentarios'


class Tpeliculas(models.Model):
    nombre = models.CharField(max_length=50, blank=True, null=True)
    url_imagen = models.CharField(max_length=200, blank=True, null=True)
    duracion = models.CharField(max_length=200, blank=True, null=True)
    genero = models.CharField(max_length=200, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tPeliculas'


class Tusuarios(models.Model):
    nombre = models.CharField(max_length=50, blank=True, null=True)
    apellidos = models.CharField(max_length=100, blank=True, null=True)
    email = models.CharField(unique=True, max_length=200, blank=True, null=True)
    contraseña = models.CharField(max_length=200, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tUsuarios'
