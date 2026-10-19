<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
    public function cardapio_html(request $request){
        return view('Cardapio_lia');
    }
}
