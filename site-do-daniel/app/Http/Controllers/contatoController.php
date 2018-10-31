<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class contatoController extends Controller
{
    public function cadastrarContato(Request $request){
        $nome = $request->input('nome');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $dataNascimento = $request->input('data_nascimento');
        $cidade = $request->input('cidade');
        $cep = $request->input('cep');
        $motivoContato = $request->input('motivo_contato');
        $mensagem = $request->input('mensagem');
        $novidades = $request->input('novidades') == 'on'? 1 : 0;
        

        $resultado = DB::table('contatos')->insert(
            // nome da coluna no banco entre aspas
            ['nome' => $nome, 
            'email' => $email, 
            'telefone' => $telefone, 
            'DataNascimento' => $dataNascimento, 
            'cidade' => $cidade,
            'CEP' => $cep,
            'motivo_contato' => $motivoContato,
            'mensagem' => $mensagem,
            'aceita_novidades' => $novidades,
            ]
        );

        
    }
    
}