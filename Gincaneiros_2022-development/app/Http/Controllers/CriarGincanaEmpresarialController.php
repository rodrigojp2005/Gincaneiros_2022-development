<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarGincanaEmpresarialController extends Controller
{

    // Action Principal

    public function metodoCriarGincanaEmpresarial(){

        return view('site.criarGincanaEmpresarial', ['titulo'=>'Criação de Gincanas Empresariais']);

    }
    
}
