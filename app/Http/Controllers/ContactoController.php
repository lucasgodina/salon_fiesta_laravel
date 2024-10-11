<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function show($numero)
    {
        return view('contacto', ['numero' => $numero]);
    }
}
