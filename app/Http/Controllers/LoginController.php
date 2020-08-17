<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');
        $q3 = $request->input('q3');
        $melhorias_projeto = $request->input('melhorias_projeto');
        $melhorias_empresa = $request->input('melhorias_empresa');
        $Login = new Login();
        $json = $Login->validaUsuario($email, $password);
        $json = json_decode($json,true);
        if(count($json) > 0){
            $codigo = (int) $json[0]["id"];
            echo $codigo;
        }else{
            echo 0;
        }
    }
}
