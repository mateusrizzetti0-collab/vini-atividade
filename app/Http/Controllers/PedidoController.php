<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedido;
use Illuminate\Support\Facades\Hash;

class pedidoController extends Controller
{
    public function cadastro_html(request $request){
        return view('pedido_usuario');
    }

    public function salvar_pedido(request $request){
       $request->validate([
            'data_pedido' => 'required|string|max:255',
            'status' => 'required|string',
            'id_pedido' => 'required|integer',
            'id' => 'required|integer'
        ]);
        try {
            $pedido = new pedido();
            $pedido->data_pedido = $request->input('data_pedido');
            $pedido->status = $request->input('status');
            $pedido->id_categoria = $request->input('id_pedido');
            $pedido->id = $request->input('id');
            $pedido->save();
            return response()->json(['message' => 'pedido cadastrado com sucesso!', 'erro' => 'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar pedido', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }

    public function ver_pedido(Request $request){
        $pedido = pedido::find($request->id);
        if($pedido){
            return response()->json(['pedido' => $pedido, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Pedido não encontrado', 'erro' => 'S'], 200);
        }
    }
    public function listar_pedidos(){
        $pedidos = pedido::all();
        return response()->json(['pedidos' => $pedidos], 200);
    }
    public function listar_pedido_simples(request $request){
        $pedidos = pedido::select('nome',"descricao")->get();
        return response()->json(['pedidos' => $pedidos], 200);
    }

    public function alterar_pedido(request $request){
       $request->validate([
            'id_pedido' => 'required|integer|exists:pedido,id_pedido',
            'data_pedido' => 'required|string|max:255',
            'status' => 'required|string',
            'id' => 'required|integer|exists:pedido,id'

        ]);
        try {
            $pedido =  pedido::where('id_pedido', "=", $request->input('id_pedido'))->first();
            if (!$pedido) {
                return response()->json(['message' => 'Pedido não encontrado', 'erro' => 'S'], 200);
            }

          //  $pedido->nome = $request->input('nome');
          //  $pedido->descricao = $request->input('descricao');
            pedido::updateOrInsert(
                ['id_pedido' => $request->input('id_pedido')],
                ['data_pedido' => $request->input('data_pedido'), 'status' => $request->input('status'), 'id' => $request->input('id')]
            );
            return response()->json(['message' => 'Pedido alterado com sucesso!', 'erro' => 'n'], 200);

           
            
       }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }
 
public function deletar_pedido(request $request){
        $request->validate([
            'id' => 'required|integer|exists:pedido,id',
        ]);
        try {
            $pedido =  pedido::find($request->input('id'));
            $pedido->delete();
            return response()->json(['message' => 'Pedido deletado com sucesso!','erro' =>'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao deletar pedido', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }
    }

}