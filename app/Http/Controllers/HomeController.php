<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Highlight\Highlighter;

class HomeController extends Controller
{
    //
    public function inicio(){


        return view('inicio');
    }
}
