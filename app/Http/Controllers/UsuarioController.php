<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function home(){
        $usuarios = Usuario::all();
        return view('home', ['usuarios'=>$usuarios]);
    }
    public function criarUsuario(Request $request){
        $cpf = $request->cpf;
        $nome = $request->nome;
        $data = str_replace('/', '-', $request->data);
        $data = date('Y-m-d', strtotime($data));
        if(strlen($cpf) == 11){
            Usuario::create(['cpf'=> $request->cpf,'nome'=>$nome,'data'=>$data]);
            return redirect()->route('home');
        }else{
            return redirect()->route('criar.usuario', ['erro'=>'Não tem 11 digitos']);
        }
    }

}
