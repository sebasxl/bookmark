<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Json;
use App\Imports\BooksImport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $books = Book::paginate(50);

        return view('viewdata', compact('books'));
    }
    public function importer()
    {
        return view('importfile');
    }
    public function importExamples()
    {
        return view('importfile');
    }
    public function handleImporter(Request $request)
    {
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
           
           $originalFile = $file->move('files', $name);
           $path = $originalFile->getRealPath();
           Excel::import(new BooksImport, $path);
        } 
        return redirect()->route('show');

    }

    public function importjson()
    {
        
        return view('importjsonview');
    }

    public function handleJSON2Database(Request $request)
    {
        $url = $request->input('url');
        $json = json_decode(file_get_contents($url), true);

        foreach ($json as $data)
        {
            if (Book::where('isbn10', $data['matnr'])->exists()) {
                return 'existe';
            } else {
                return 'no existe';
            }
            
            /* $booksimported = new Book([
                
                'isbn10'    => $data['matnr'],
                'isbn13'    => $data['isbn'],
                'titulo'    => $data['titulo'],
                'subtitulo' => $data['subtitulo'],
                'apellido_autor'    => $data['autor'],
                'coleccion' => $data['coleccion'],
                'portada'   => $data['portada'],
                'paginas'   => $data['paginas'],
                'medidas'   => $data['medidas'],
            ]); 
            $booksimported->save(); */
        }
        
        
        return redirect()->route('show');
       /*  dd ($json); */
        /* return view('megustaleerimport', compact('json')); */

    }

    public function exporter()
    {
        return view('export2file');
    }


}
