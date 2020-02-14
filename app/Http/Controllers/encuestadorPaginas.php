<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestadorPaginas extends Controller
{
    public function listar(){
        return view ('encuestador.listarEncuestas');
    }

    public function crear(){
        return view ('encuestador.crearEncuestas');
    }
}
