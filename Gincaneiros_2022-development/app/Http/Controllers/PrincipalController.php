<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    
    // Action Principal

    public function metodoPrincipal(){
       
        return view('site.principal', ['titulo'=>'Página Inicial']);

    }

}
