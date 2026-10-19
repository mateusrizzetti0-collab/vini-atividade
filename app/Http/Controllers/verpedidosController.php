<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verpedidosController extends Controller   
{
    public function ver_pedido_html(request $request){
        return view('ver_pedido');
    }
}
