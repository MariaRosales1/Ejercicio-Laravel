<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestriccionController extends Controller
{
    public function index($codigo){
        if ($codigo == 'A765'){
            return view('Zona-Inicio');
        }
        else
            return view('Zona-Prohibida');
    }
}
