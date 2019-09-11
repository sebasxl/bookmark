<?php


namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;


class UpdatePrices implements ToModel, WithChunkReading
{
    /**
     * @param array $row
     */
    public function model(array $row): void
    {
        $book = Book::where('ean', $row[0])->where(function ($q) use ($row) {
            $q->where('moneda', '<>', $row[1])->orWhere('pvp', '<>', $row[2]);
        })->first();

        if($book && $book instanceof Book){
            $book->update([
                'moneda' => $row[1],
                'pvp' => $row[2]
            ]);

            $book->save();
        }
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 100;
    }
}
