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
        $books = Book::all();

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

        
         
       if($request->hasFile('file')){
        $path = $request->file('file')->getRealPath();
        $importados = Excel::import(new BooksImport, $path);
       }

       return back()->withErrors(['msg', 'The Message']);
      /*
      return back();
         /* dd($importados); */ 
    }

    public function exporter()
    {
        return view('export2file');
    }
}
