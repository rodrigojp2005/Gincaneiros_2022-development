<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{

    // Action Principal
    
    public function metodoSobreNos(){
      
        return view('site.sobreNos', ['titulo'=>'Sobre Nós']);

    }

}
