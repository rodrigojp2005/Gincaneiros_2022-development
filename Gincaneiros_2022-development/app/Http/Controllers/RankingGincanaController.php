<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingGincanaController extends Controller
{

    // Action Principal
    
    public function metodoRankingGincana(){

        return view('site.rankingGincana', ['titulo'=>'Ranking']);

    }

}
