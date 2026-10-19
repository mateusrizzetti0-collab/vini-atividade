<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prouduto;
use Illuminate\Support\Facades\Hash;

class produtoController extends Controller
{
    public function cadastro_html(request $request){
        return view('produto_usuario');
    }

    public function salvar_produto(request $request){
       $request->validate([
          'nome' => 'required|string|max:255',
          'descricao' => 'required|string',
          'preco' => 'required|numeric|min:0',
          'categoria_id' => 'required|integer|exists:categoria,id'
          
           
        ]);
        try {
            $produto = new produto();
            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->categoria_id = $request->input('categoria_id');
            $produto->save();
            return response()->json(['message' => 'produto cadastrado com sucesso!', 'erro' => 'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar produto', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }

    public function ver_produto(Request $request){
        $produto = produto::find($request->id);
        if($produto){
            return response()->json(['produto' => $produto, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Produto não encontrado', 'erro' => 'S'], 200);
        }
    }
    public function listar_produtos(){
        $produtos = produto::all();
        return response()->json(['produtos' => $produtos], 200);
    }
    public function listar_produto_simples(request $request){
        $produtos = produto::select('nome',"descricao")->get();
        return response()->json(['produtos' => $produtos], 200);
    }

    public function alterar_produto(request $request){
       $request->validate([
            'id_produto' => 'required|integer|exists:produto,id_produto',
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'categoria_id' => 'required|integer|exists:categoria,id'
        ]);
        try {
            $produto =  produto::where('id_produto', "=", $request->input('id_produto'))->first();
            if (!$produto) {
                return response()->json(['message' => 'Produto não encontrado', 'erro' => 'S'], 200);
            }

          //  $produto->nome = $request->input('nome');
          //  $produto->descricao = $request->input('descricao');
            produto::updateOrInsert(
                ['id_produto' => $request->input('id_produto')],
                ['nome' => $request->input('nome'), 'descricao' => $request->input('descricao'), 'preco' => $request->input('preco'), 'categoria_id' => $request->input('categoria_id')]
            );
            return response()->json(['message' => 'Produto alterado com sucesso!', 'erro' => 'n'], 200);

           
            
       }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }
 
public function deletar_produto(request $request){
        $request->validate([
            'id' => 'required|integer|exists:produto,id',
        ]);
        try {
            $produto =  produto::find($request->input('id'));
            $produto->delete();
            return response()->json(['message' => 'Produto deletado com sucesso!','erro' =>'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao deletar produto   ', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }
    }

}