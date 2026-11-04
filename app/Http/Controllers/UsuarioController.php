<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use App\models\usuarioToken;

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

    public function login(request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();
        if($usuario){
           if(hash::check($request->senha, $usuario->senha)){
            $Usuario_token = new \App\Models\UsuarioToken();
            $Usuario_token->usuario_id = $usuario->id;
            $Usuario_token->token = hash::make($usuario->id . $usuario->email . now());
            $Usuario_token->valido_ate = now()->addDays(7);
            $Usuario_token->save();
            return response()->json(['message' => 'Login realizado com sucesso!', 'erro' => 'n', 'token' => $Usuario_token->token], 200);

           }else{
            return response()->json(['message' => 'Usuario ou Senha incorreta', 'erro' => 'S'], 200);
           }
        
        }else{
            return response()->json(['message' => 'Email não encontrado', 'erro' => 'S'], 200);
        }
    }

    public function logout(request $request){
        $request->validate([
            'usuario_id' => 'required|integer',
            'token' => 'required',
        ]);
        $usuario_token = UsuarioToken::where('token', $request->token)->first();
        if($usuario_token){
            $usuario_token->delete();
            return response()->json(['message' => 'Logout realizado com sucesso!', 'erro' => 'n'], 200);
        }else{
            return response()->json(['message' => 'Token inválido', 'erro' => 'S'], 200);
        }
    }

}