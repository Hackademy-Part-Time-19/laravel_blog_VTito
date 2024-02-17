<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        return view('pages.contatti', ['descrizione' => ' Contatti']);
    }
}
