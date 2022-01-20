<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NenhumaGincanaAtivaController extends Controller
{

    // Action Principal
    
    public function metodoNenhumaGincanaAtiva(){

        return view('site.nenhumaGincanaAtiva', ['titulo'=>'Nenhuma Gincana Ativa']);

    }

}
