<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;
use App\Imports\ExamplesImport;
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
    public function importer()
    {
        return view('importfile');
    }
    public function importExamples()
    {
        return view('importfile');
    }
    public function handleImporter()
    {

        $importados = Excel::toArray(new ExamplesImport, 'examplesBook.xlsx');
/*         
        return redirect('/')->with('success', 'All good!');
       */ 
      /* return Example::all();  */
         /* dd($importados); */ 
    }

    public function exporter()
    {
        return view('export2file');
    }
}
