<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GincanasPessoaisAtivasController extends Controller
{

    // Action Principal

    public function metodoGincanasPessoaisAtivas(){
        
        return view('site.gincanasPessoaisAtivas', ['titulo'=>'Gincanas Pessoais Ativas']);

    }

}
