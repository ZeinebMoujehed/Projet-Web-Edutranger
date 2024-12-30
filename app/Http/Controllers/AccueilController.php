<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function home()
    {
        return view('accueil');
    }

    
}
