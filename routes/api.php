<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\produtoController;
use App\Http\Controllers\PedidoController;
use App\http\middleware\LoginApimiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/salvar_usuario', [UsuarioController::class, 'salvar_usuario']);

Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario']);

Route::get('/usuarios', [UsuarioController::class, 'listar_usuarios']);

Route::get('/usuarios_simples', [UsuarioController::class, 'listar_usuario_simples']);

Route::put('/usuario_alterar', [UsuarioController::class, 'alterar_usuario'])->middleware(LoginApimiddleware::class);

Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario'])->middleware(LoginApimiddleware::class);

Route::post('/login', [UsuarioController::class, 'login']);


Route::post('/salvar_funcionario', [FuncionarioController::class, 'salvar_funcionario']);
Route::get('/ver_funcionario', [FuncionarioController::class, 'ver_funcionario']);
Route::get('/listar_funcionarios', [FuncionarioController::class, 'listar_funcionarios']);
Route::put('/alterar_funcionario', [FuncionarioController::class, 'alterar_funcionario']);
Route::delete('/deletar_funcionario', [FuncionarioController::class, 'deletar_funcionario']);

route::post('/salvar_categoria', [CategoriaController::class, 'salvar_categoria']);
route::get('/ver_categoria', [CategoriaController::class, 'ver_categoria']);
route::get('/listar_categorias', [CategoriaController::class, 'listar_categorias']);
route::put('/alterar_categoria', [CategoriaController::class, 'alterar_categoria']);
route::delete('/deletar_categoria', [CategoriaController::class, 'deletar_categoria']);

route::post('/salvar_produto', [ProdutoController::class, 'salvar_produto']);
route::get('/ver_produto', [ProdutoController::class, 'ver_produto']);
route::get('/listar_produtos', [ProdutoController::class, 'listar_produtos']);  
route::put('/alterar_produto', [ProdutoController::class, 'alterar_produto']);
route::delete('/deletar_produto', [ProdutoController::class, 'deletar_produto']);

route::post('/salvar_pedido', [PedidoController::class, 'salvar_pedido']);
route::get('/ver_pedido', [PedidoController::class, 'ver_pedido']);
route::get('/listar_pedidos', [PedidoController::class, 'listar_pedidos']);  
route::put('/alterar_pedido', [PedidoController::class, 'alterar_pedido']);
route::delete('/deletar_pedido', [PedidoController::class, 'deletar_pedido']);

Route::post('/login', [UsuarioController::class, 'login']);
Route::post('/logout', [UsuarioController::class, 'logout']);

