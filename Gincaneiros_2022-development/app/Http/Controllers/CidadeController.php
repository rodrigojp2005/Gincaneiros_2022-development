<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{

    // Action Principal

    public function metodoCidade(){
       
        return view('usuario.cidade', ['titulo'=>'Cidade']);

    }

}
