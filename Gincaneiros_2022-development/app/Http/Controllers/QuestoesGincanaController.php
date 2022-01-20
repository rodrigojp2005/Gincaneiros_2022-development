<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestoesGincanaController extends Controller
{

    // Action Principal
    
    public function metodoQuestoesGincanas(){

        return view('site.questoesGincanas', ['titulo'=>'Questoes da Gincana']);

    }

}
