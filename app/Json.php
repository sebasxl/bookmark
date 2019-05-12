<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    protected $fillable = [ 
        'cod_articulo',
        'isbn10',
        'isbn13',
        'ean',
        'titulo',
        'subtitulo',
        'apellido_autor',
        'nombre_autor',
        'biografia_autor',
        'ilustrador',
        'traductor',
        'editorial',
        'coleccion',
        'categoria',
        'tipo',
        'genero',
        'sinopsis',
        'contratapa',
        'metadata',
        'portada',
        'booktrailer',
        'digital',
        'idioma',
        'formato',
        'fecha_publicacion',
        'edicion',
        'pvp',
        'moneda',
        'paginas',
        'medidas',
        'peso',
        'agotado',
        'activo',
    ];
}
