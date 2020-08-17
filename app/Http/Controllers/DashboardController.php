<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $Dash = new Dashboard();
        //MEDIA GERAL POR QUESTAO
        $q1 =  $Dash->getMediasPorQuest(3) / 10;
        $q2 =  $Dash->getMediasPorQuest(4) / 10;
        $q3 =  $Dash->getMediasPorQuest(5) / 10;
        $clients = $Dash->getClients();

        //TOTAL DE PRODUTOS
        $totalprojects = $Dash->getTotalProjetos();

        //TOTAL DE PROJETOS POR CLIENTE
        $jsonTPCli = $Dash->getTotalProjectsPorClient();
        $jsonTPCli = json_decode($jsonTPCli);

        //COMPILADOS DA PERGUNTAS ABERTAS
        $aObj = $Dash->getCompPergAbertas(4, 6); //RESPONTA ABERTA 1
        $pergunta = "";
        $n = 0;
        $totalA1 = count($aObj);
        $perguntaAnt = "";
        $htmlA1 = "";
        foreach($aObj as $o){
            $n++;
            $pergunta = $o->pergunta;
            if($pergunta != $perguntaAnt){
                $htmlA1 .= "<div class=\"card\">";
                $htmlA1 .= "<div class=\"card-header\">";
                $htmlA1 .= "<p><strong>".$pergunta."</strong></p>";
                $htmlA1 .= "</div>";
            }

            $htmlA1 .= "<ul class=\"list-group list-group-flush\">";
            $htmlA1 .= "<li class=\"list-group-item\">".$o->resposta."</li>";
            $htmlA1 .= "</ul>";

            if($n == $totalA1){
                $htmlA1 .= "</div>";
            }
            
            $perguntaAnt = $pergunta;
        }
        

        $aObj2 = $Dash->getCompPergAbertas(5, 7); //RESPONTA ABERTA 2
        $pergunta = "";
        $n = 0;
        $totalA2 = count($aObj);
        $perguntaAnt = "";
        $htmlA2 = "";
        foreach($aObj2 as $o){
            $n++;
            $pergunta = $o->pergunta;
            if($pergunta != $perguntaAnt){
                $htmlA2 .= "<div class=\"card\">";
                $htmlA2 .= "<div class=\"card-header\">";
                $htmlA2 .= "<p><strong>".$pergunta."</strong></p>";
                $htmlA2 .= "</div>";
            }

            $htmlA2 .= "<ul class=\"list-group list-group-flush\">";
            $htmlA2 .= "<li class=\"list-group-item\">".$o->resposta."</li>";
            $htmlA2 .= "</ul>";

            if($n == $totalA2){
                $htmlA2 .= "</div>";
            }
            
            $perguntaAnt = $pergunta;
        }


        $html = "";
        $count = 3;
        $quest = 1;
        $nomecliete = "";
        $clieAnt = "";
        $total = count($clients);
        $n = 0;
        foreach($clients as $c){

            $n++;
            $nomecliete = $c->name;
            if($nomecliete != $clieAnt){
                $html .= "<div class=\"col-md-12 text-center\">";
                $html .= "<p><strong>".$nomecliete."</strong></p>";
                $html .= "</div>";
            }

            $qc1 = $Dash->getMediasPorQuestPorClient($count, $c->id) / 10;
            $html .= "<div class=\"col-md-4\">";
            $html .= "<p>Questão ".$quest." <span class=\"badge badge-secondary\">".$qc1."</span></p>";
            $html .= "</div>";

            $quest++;
            $count++;
            $qc2 = $Dash->getMediasPorQuestPorClient($count, $c->id) / 10;
            $html .= "<div class=\"col-md-4\">";
            $html .= "<p>Questão ".$quest." <span class=\"badge badge-secondary\">".$qc2."</span></p>";
            $html .= "</div>";

            $quest++;
            $count++;
            $qc3 = $Dash->getMediasPorQuestPorClient($count, $c->id) / 10;
            $html .= "<div class=\"col-md-4\">";
            $html .= "<p>Questão ".$quest." <span class=\"badge badge-secondary\">".$qc3."</span></p>";
            $html .= "</div>";

            if($n < $total){
                $html .= "<div class=\"col-md-12 text-center\">";
                $html .= "<hr>";
                $html .= "</div>";
            }

            $count = 3;
            $quest = 1;
            $clieAnt = $nomecliete;
        }

        return view('dashboard', ['m1' => $q1, 'm2' => $q2, 'm3' => $q3, 'mc' => $html, 'totalpro' => $totalprojects, 'totalproporcli' => $jsonTPCli, 'aberta1' => $htmlA1, 'aberta2' => $htmlA2]);
    }
}
