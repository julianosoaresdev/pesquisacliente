<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Pesquisa;
use App\MsgerroController;

class PesquisaController extends Controller
{

    public function listar($question)
    {
        $Pesq = new Pesquisa();
        $arrPesquisa = $Pesq->listaPesquisa($question);
        //return view('pesquisa', compact('arrPesquisa'));
        return view('pesquisa', ['arrPesquisa' => $arrPesquisa, 'question' => $question]);
    }
    public function gravaPesq(Request $request)
    {
        $messages = [
            'required' => 'O campo :attribute é obrigatório.'
        ];
        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:50',
            'funcao' => 'required|max:50'
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $Pesq = new Pesquisa();
        $codp = $request->input("cod_pesquisa");
        $nome = $request->input("nome");
        $funcao = $request->input("funcao");
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');
        $q3 = $request->input('q3');
        $q4 = $request->input('q4');
        $q5 = $request->input('q5');
        $id = $Pesq->insert($codp, $nome, $funcao, $q1, $q2, $q3, $q4, $q5);
        if($id > 0){
            return view('pesquisacadastro', ['msg' => 'Obrigado por contribuir com nossa pesquisa!']);
        }else{
            return view('pesquisacadastro', ['msg' => 'Ops! Servidor não responde, teste mais tarde!']);
        }
        
    }

    
}
