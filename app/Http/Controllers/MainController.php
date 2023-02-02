<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il model per le variabili 
use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {
        $saints = Saint::all();
        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }
}