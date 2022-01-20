<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeusCuponsController extends Controller
{

    // Action Principal

    public function metodoMeusCupons(){
 
        return view('usuario.meusCupons', ['titulo'=>'Meus Cupons']);

    }

}
