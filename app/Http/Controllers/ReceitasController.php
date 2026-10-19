<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    public function receitas_html(request $request){
        return view('receitas');
    }
}
