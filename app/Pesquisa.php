<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesquisa extends Model
{
    public function listaPesquisa($id)
    {
        $quest = DB::table('tbquest')
        ->where('id',$id)
        ->get();
        return $quest;
    }

    public function insert($codp, $nome, $funcao, $q1, $q2, $q3, $q4, $q5)
    {
        $id = 0;
        $id = DB::table('tbqresps')->insertGetId([
            'id_quest' => $codp,
            'q1' => $nome,
            'q2' => $funcao,
            'q3' => $q1,
            'q4' => $q2,
            'q5' => $q3,
            'q6' => $q4,
            'q7' => $q5,
            'create_at' => date('Y-m-d H:i:s')
            ]);
        return $id;
    }
}
