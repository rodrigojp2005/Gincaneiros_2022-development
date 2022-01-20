<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GincanasQueParticipo extends Controller
{

    // Action Principal

    public function metodoGincanasQueParticipo(){
 
        return view('usuario.gincanasQueParticipo', ['titulo'=>'Gincanas que Participo']);

    }

}
