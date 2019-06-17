<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $publicationDates = ['fecha_publicacion'];
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
            'activo'           
    ];

    public function getPublicationDateAttribute($fecha_publicacion)
{
    return Carbon::parse($fecha_publicacion);
}
}
