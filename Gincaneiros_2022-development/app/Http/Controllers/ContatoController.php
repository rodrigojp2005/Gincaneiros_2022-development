<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

    // Action Principal

    public function metodoContato(){
    
        return view('site.contato', ['titulo'=>'Contato']);

    }

}
