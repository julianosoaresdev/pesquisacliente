<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    public function validaUsuario($email, $password)
    {
        $users = DB::table('users')->where([
            ['email', '=', $email],
            ['password', '=', $password],
        ])->get();
        return $users;
    }
}
