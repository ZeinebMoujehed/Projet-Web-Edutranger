<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualitiesController extends Controller
{
    public function actualities()
    {
        $actualities = Actualite::all();
        return view('actualities.index', compact('actualities'));
    }

    
}
