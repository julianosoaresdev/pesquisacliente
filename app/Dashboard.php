<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Clients;

class Dashboard extends Model
{
    public function getMediasPorQuest($q)
    {
        $obj = DB::table('tbqresps')
                ->select(DB::raw('SUM(q'.$q.') as total'))
                ->get();
        return (int) $obj[0]->total;

    }

    public function getClients()
    {
        return DB::table('clients')
                ->get();
    }

    public function getMediasPorQuestPorClient($q, $idcli)
    {
        $obj = DB::table('tbqresps')
                ->select(DB::raw('SUM(q'.$q.') as total'))
                ->join('projects', 'projects.id', '=', 'tbqresps.id_quest')
                ->join('clients', 'clients.id', '=', 'projects.id_client')
                ->where('clients.id',$idcli)
                ->get();
        return (int) $obj[0]->total;

    }

    public function getTotalProjetos()
    {
        return DB::table('clients')->count();
    }

    public function getTotalProjectsPorClient()
    {
        $obj = DB::table('clients')->get();
        $ret = array();
        $i = 0;
        $totalpro = 0;
        foreach($obj as $o){
            $totalpro = DB::table('projects')
            ->where('id_client', $o->id)
            ->count();
            $ret[] = array("cliente" => $o->name, "total_project" => $totalpro);
        }
        return json_encode($ret);
    }

    public function getCompPergAbertas($n1, $n2)
    {
        $obj = DB::table('tbquest')
                ->select('tbquest.q'.$n1.' as pergunta', 'tbqresps.q'.$n2.' as resposta')
                ->join('tbqresps', 'tbqresps.id_quest', '=', 'tbquest.id')
                ->inRandomOrder()
                ->limit(3)
                ->get();
        return $obj;
    }
}
