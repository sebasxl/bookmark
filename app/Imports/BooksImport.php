<?php

namespace App\Imports;

use App\Book;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
       
         return new Book([
            'cod_articulo'  => $row[0],
            'isbn10'    => $row[1],
            'isbn13'    => $row[2],
            'ean'   => $row[3],
            'titulo'    => $row[4],
            'subtitulo' => $row[5],
            'apellido_autor'    => $row[6],
            'nombre_autor'  => $row[7],
            'biografia_autor'   => $row[8],
            'ilustrador'    => $row[9],
            'traductor' => $row[10],
            'editorial' => $row[11],
            'coleccion' => $row[12],
            'categoria' => $row[13],
            'tipo'  => $row[14],
            'genero'    => $row[15],
            'sinopsis'  => $row[16],
            'contratapa'    => $row[17],
            'metadata'  => $row[18],
            'portada'   => $row[19],
            'booktrailer'   => $row[20],
            'digital'   => $row[21],
            'idioma'    => $row[22],
            'formato'   => $row[23],
            'fecha_publicacion' => $row[24],
            'edicion'   => $row[25],
            'pvp'   => $row[26],
            'moneda'    => $row[27],
            'paginas'   => $row[28],
            'medidas'   => $row[29],
            'peso'  => $row[30],
            'agotado'   => $row[31],
            'activo'    => $row[32],
        ]); 
        
    }
}