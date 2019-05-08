<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Imports\BooksImport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

/*     use Illuminate\Support\Facades\Validator;
 */    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    public function importjsonmegustaleer()
    {
        return view('megustaleerimport');
    }

    public function handleJSONImporter(Request $request)
    {
        $url = $request->input('url');
        $json = json_decode(file_get_contents($url), true);
        /* dd ($json); */

        return view('megustaleerview', compact('json'));
    }

    public function exporter()
    {
        return view('export2file');
    }


}
