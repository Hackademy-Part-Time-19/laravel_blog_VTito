<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.home', ['titolo' => ' Il mio Blog']);
    }

    public function contacts()
    {
        return view('pages.contatti', ['descrizione' => ' Sezione Contatti']);
    }
}
