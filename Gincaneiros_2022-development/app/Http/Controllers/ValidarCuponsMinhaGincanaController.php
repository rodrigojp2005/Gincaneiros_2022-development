<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidarCuponsMinhaGincanaController extends Controller
{

    // Action Principal

    public function metodoValidarCuponsMinhaGincana (){

        return view('usuario.validarCuponsMinhaGincana', ['titulo'=>'Validar Cupons da Minha Gincana']);

    }

}
