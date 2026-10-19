<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UsuarioController;

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\cardapioController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\Explicar_ReceitaController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\verpedidosController;
use App\Http\Controllers\ingredientesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_html'])
    ->name('cadastro_usuario');

Route::get('/cardapio', [cardapioController::class, 'cardapio_html'])
    ->name('cardapio');

Route::get('/receitas', [ReceitasController::class, 'receitas_html'])
    ->name('receitas');

Route::get('/explicar-receita', [Explicar_ReceitaController::class, 'explicar_receita_html'])
    ->name('explicar.receita');

Route::get('/receita-do-dia', function () {
    return view('receita_dia');
})->name('receita.dia');

Route::get('/pedidos', [PedidosController::class, 'pedidos_html'])
    ->name('pedidos');

Route::get('/ingredientes', [ingredientesController::class, 'ingredientes_html'])
    ->name('ingredientes');

Route::get('/demonstracao', function () {
    return view('demonstração');
})->name('demonstracao');

Route::get('/ver_pedido', [verpedidosController::class, 'ver_pedido_html'])
    ->name('ver_pedido');