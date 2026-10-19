<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Explicar_ReceitaController extends Controller
{
    public function explicar_receita_html(request $request){
        return view('Explicar_Receita');
    }
}
