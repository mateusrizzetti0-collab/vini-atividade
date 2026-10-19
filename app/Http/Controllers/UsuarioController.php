<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastro_html(request $request){
        return view('cadastro_usuario');
    }

    public function salvar_usuario(request $request){
       $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuario',
            'senha' => 'required|string',
            'cpf' => 'required|string|max:14|unique:usuario',
            'data_nascimento' => 'required'
           
        ]);
        try {
            $usuario = new usuario();
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->senha = Hash::make($request->senha);
            $usuario->cpf = $request->input('cpf');
            $usuario->data_nascimento = $request->input('data_nascimento');
            $usuario->save();
            return response()->json(['message' => 'Usuário cadastrado com sucesso!','erro' =>'n'], 200);

            
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }

    public function ver_usuario(Request $request){
        $usuario = Usuario::find($request->id);
       // dd("CHEGUEI AQUI");
        if($usuario){
            return response()->json(['usuario' => $usuario, 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Usuário não encontrado', 'erro' => 'S'], 200);
        }
    }
    public function listar_usuarios(){
        $usuarios = Usuario::all();
        return response()->json(['usuarios' => $usuarios], 200);
    }
    public function listar_usuario_simples(request $request){
        $usuarios = Usuario::select('nome',"email")->get();
        return response()->json(['usuarios' => $usuarios], 200);
    }

    public function alterar_usuario(request $request){
       $request->validate([
            'id' => 'required|integer|exists:usuario,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'senha' => 'required|string',
            'cpf' => 'required|string|max:14',
            'data_nascimento' => 'required'
           
        ]);
        try {
            $usuario =  Usuario::find($request->input('id'));

            if($usuario->cpf != $request->cpf){
                $usuario_cpf = Usuario::where('cpf', $request->cpf)->first();
                if($usuario_cpf){
                    return response()->json(['message' => 'CPF já cadastrado', 'erro' => 'S'], 200);
                }
            }
            if($usuario->email != $request->email){
                $usuario_email = Usuario::where('email', $request->email)->first();
                if($usuario_email){
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 'S'], 200);
                }
            }
            $usuario->nome = $request->input('nome');
            $usuario->email = $request->input('email');
            $usuario->senha = Hash::make($request->senha);
            $usuario->cpf = $request->input('cpf');
            $usuario->data_nascimento = $request->input('data_nascimento');
            $usuario->save();
            return response()->json(['message' => 'Usuário alterado com sucesso!','erro' =>'n'], 200);

            
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }

    }

public function deletar_usuario(request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
        ]);
        try {
            $usuario =  Usuario::find($request->input('id'));
            $usuario->delete();
            return response()->json(['message' => 'Usuário deletado com sucesso!','erro' =>'n'], 200);
        }catch(\throwable $th){
           return response()->json(['message' => 'Erro ao deletar usuário', 'erro' => 'S', 'msg_error' => $th->getMessage()], 200);
        }
    }

}