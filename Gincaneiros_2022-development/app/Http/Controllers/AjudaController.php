<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjudaController extends Controller
{

    // Action Principal

    public function metodoAjuda(){

        return view('site.ajuda', ['titulo'=>'Ajuda']);

    }

}
