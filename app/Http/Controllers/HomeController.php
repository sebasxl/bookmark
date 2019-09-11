<?php

namespace App\Http\Controllers;

use App\Imports\UpdatePrices;
use App\Jobs\UpdatePricesJob;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Book;
use App\Imports\BooksImport;
use App\Exports\BooksExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;

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


    public function find(Request $request)
    {
        $finder = $request->input('finder');

        if ($finder[0] == '"' && $finder[strlen($finder) - 1] == '"') {
            $findme = trim($finder, '"');

            $books = Book::where('titulo', 'like', $findme)
                ->orWhere('nombre_autor', 'LIKE', $findme)
                ->orWhere('apellido_autor', 'like', $findme)
                /*->orWhere('metadata', 'like', '%' . $findme . '%')*/
                ->orderBy('titulo', 'ASC')
                ->get();
        } else {
            $findme = trim($finder, '"');

            $books = Book::where(function ($q) use ($findme) {
                $queryString = array_unique(explode(' ', $findme));

                foreach ($queryString as $string) {
                    $q->where(function ($qq) use ($string) {
                        $qq
                            ->orWhere('ean', 'LIKE', "%$string%")
                            ->orWhere('titulo', 'LIKE', "%$string%")
                            ->orWhere('nombre_autor', 'LIKE', "%$string%")
                            ->orWhere('apellido_autor', 'LIKE', "%$string%")/*->orWhere('metadata', 'LIKE', "%$string%")*/
                        ;
                    });
                }
            })->orderBy('titulo', 'ASC')
                ->get();
        }

        if (count($books) <= 0) {
            $books = Book::orderBy('id', 'ASC')->paginate(50);

            Session::flash('flash_message', 'No hay resultados con estos términos. Intente otra búsqueda');
            return view('viewdata', compact('books', 'finder'));
        } else {
            return view('finderPage', compact('books', 'finder'));
        }


    }

    public function show()
    {
        $books = Book::orderBy('id', 'ASC')->paginate(50);

        return view('viewdata', compact('books'));
    }

    public function export()
    {
        return Excel::download(new BooksExport, 'books.xlsx');
    }

    public function importer()
    {
        return view('importfile');
    }

    public function updatePrices()
    {
        return view('updateprices');
    }

    public function updatePricesPost(Request $request)
    {
        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();

            $originalFile = $file->move('files', $name);
            $path = $originalFile->getRealPath();

            Excel::import(new UpdatePrices, $path);
        }

        return redirect()->route('show');
    }

    public function importExamples()
    {
        return view('importfile');
    }

    public function handleImporter(Request $request)
    {

        if ($file = $request->file('file')) {
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

        foreach ($json as $data) {
            if (Book::where('isbn10', $data['matnr'])->exists()) {
                /* if (Book::first() == $data['matnr'] ) {*/
                echo 'existe ' . $data['matnr'] . '<br>';
            } else {
                /*
                $urlImage = $data['portada'];
                $imageContents = file_get_contents($urlImage);
                $imageName = substr($urlImage, strrpos($urlImage, '/') + 1);
                Storage::put($imageName, $imageContents);
                $localUrlImage = Storage::url($imageName); */

                $booksimported = new Book([

                    'isbn10' => $data['matnr'],
                    'isbn13' => $data['isbn'],
                    'titulo' => $data['titulo'],
                    'subtitulo' => $data['subtitulo'],
                    'apellido_autor' => $data['autor'],
                    'coleccion' => $data['coleccion'],
                    'portada' => $data['portada'],/* $localUrlImage, */
                    'paginas' => $data['paginas'],
                    'medidas' => $data['medidas'],


                    'editorial' => $data['sello_editorial'],
                    'categoria' => $data['GROUP_CONCAT(DISTINCT zzbisac SEPARATOR ", ")'],
                    'genero' => $data['genero_1'],
                    'sinopsis' => $data['sinopsis'],
                    'contratapa' => $data['contratapa'],
                    'metadata' => $data['keywords'],
                    'booktrailer' => $data['url_booktrailer'],
                    'digital' => $data['digital'],
                    'idioma' => $data['idioma'],
                    'fecha_publicacion' => $data['fecha_nov'],
                    'pvp' => $data['pvp'],
                ]);
                $booksimported->save();
            }
        }

        return redirect()->route('show');
        /*  dd ($json); */
        /* return view('megustaleerimport', compact('json')); */

    }

    public function exporter()
    {
        return view('export2file');
    }

    public function export2csv()
    {
        $books = Book::get(); // All books
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($books, [
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
        ])->download();
    }


}
