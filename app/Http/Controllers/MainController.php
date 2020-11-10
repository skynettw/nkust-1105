<?php

namespace App\Http\Controllers;
use App\Models\Poem;
use App\Models\Author;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $poem = Poem::all();
        $authors = Author::all();
        //$authors = Author::where('name', "王維")->get();        
        return view("index", compact('poem', 'authors'));
    }

    public function publish() {
        return "hello";
    }
}
