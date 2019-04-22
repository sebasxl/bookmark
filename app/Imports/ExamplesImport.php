<?php

namespace App\Imports;

use App\Example;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExamplesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(collection $rows)
    {
        foreach ($rows as $row) 
        {
            Example::create([
                'isbn13' => $row[0],
                'ean' => $row[1],
                'titulo' => $row[2],
            ]); 
                return $row;
        }
        
    }
}
