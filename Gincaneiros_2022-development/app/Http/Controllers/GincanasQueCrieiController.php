<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GincanasQueCrieiController extends Controller
{

    // Action Principal

    public function metodoGincanasQueCriei(){
       
        return view('usuario.gincanasQueCriei', ['titulo'=>'Gincanas que Criei']);

    }

}
