<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class ApiController extends Controller
{
    public function getJson()
    {
        $books = Book::all();
        return response()->json($books);
    }
}


