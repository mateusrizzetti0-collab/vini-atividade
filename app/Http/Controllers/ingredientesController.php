<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingredientesController extends Controller
{
    public function ingredientes_html(request $request){
        return view('ingredientes');
    }
}
