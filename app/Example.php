<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $fillable = [ 
        'isbn13',
        'ean',
        'titulo'           
    ];
}
