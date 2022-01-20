<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaldoController extends Controller
{

    // Action Principal

    public function metodoSaldo(){
       
       return view('usuario.saldo', ['titulo'=>'Saldo']);

    }

}
