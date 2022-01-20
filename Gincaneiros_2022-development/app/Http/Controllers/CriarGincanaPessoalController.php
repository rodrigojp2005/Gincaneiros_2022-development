<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarGincanaPessoalController extends Controller
{

    // Action Principal
    
    public function metodoCriarGincanaPessoal(){

        return view('site.criarGincanaPessoal', ['titulo'=>'Criação de Gincanas Pessoais']);

    }

}
