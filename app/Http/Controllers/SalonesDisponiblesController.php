<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonesDisponiblesController extends Controller
{
    public function show($zona = 'Ituzaingo')
    {
        return view('salones_disponibles', ['zona' => $zona]);
    }
}
