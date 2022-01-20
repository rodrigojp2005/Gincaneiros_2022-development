<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingMinhaGincanaController extends Controller
{

    // Action Principal
    
    public function metodoRankingMinhaGincana(){

        return view('usuario.rankingMinhaGincana', ['titulo'=>'Ranking da Minha Gincana']);

    }

}
