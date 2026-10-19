<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    public function cadastro_html(request $request){
        return view('categoria_usuario');
    }

    public function salvar_categoria(request $request){
       $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'id_categoria' => 'required|integer'
           
        ]);
        try {
            $categoria = new categoria();
            $categoria->nome = $request->input('nome');
            $categoria->descricao = $request->input('descricao');
            $categoria->id_categoria = $request->input('id_categoria');
            $categoria->save();
            return response()->json(['message' => 'categoria cadastrada com sucesso!', 'erro' => 'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar categoria', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }

    public function ver_categoria(Request $request){
        $categoria = categoria::where('id_categoria', '=', $request->id)->first();
        if($categoria){
            return response()->json(['categoria' => $categoria, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Categoria não encontrada', 'erro' => 'S'], 200);
        }
    }
    public function listar_categorias(){
        $categorias = categoria::all();
        return response()->json(['categorias' => $categorias], 200);
    }
    public function listar_categoria_simples(request $request){
        $categorias = categoria::select('nome',"descrição")->get();
        return response()->json(['categorias' => $categorias], 200);
    }

    public function alterar_categoria(request $request){
       $request->validate([
            'id_categoria' => 'required|integer|exists:categoria,id_categoria',
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
           
        ]);
        try {
            $categoria =  categoria::where('id_categoria', "=", $request->input('id_categoria'))->first();
            if (!$categoria) {
                return response()->json(['message' => 'Categoria não encontrada', 'erro' => 'S'], 200);
            }

          //  $categoria->nome = $request->input('nome');
          //  $categoria->descricao = $request->input('descricao');
            categoria::updateOrInsert(
                ['id_categoria' => $request->input('id_categoria')],
                ['nome' => $request->input('nome'), 'descricao' => $request->input('descricao')]
            );
            return response()->json(['message' => 'Categoria alterada com sucesso!', 'erro' => 'n'], 200);

           
            
       }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }
 
public function deletar_categoria(request $request){
        $request->validate([
            'id' => 'required|integer|exists:categoria,id_categoria',
        ]);
        try {
            $categoria = DB::raw('DELETE FROM categoria WHERE id_categoria = ?', [$request->input('id')]);
         
            return response()->json(['message' => 'Categoria deletada com sucesso!','erro' =>'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao deletar categoria', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }
    }

}