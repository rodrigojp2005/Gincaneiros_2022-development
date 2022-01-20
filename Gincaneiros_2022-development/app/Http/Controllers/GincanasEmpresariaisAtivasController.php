<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GincanasEmpresariaisAtivasController extends Controller
{

    // Action Principal

    public function metodoGincanasEmpresariaisAtivas(){

        return view('site.gincanasEmpresariaisAtivas', ['titulo'=>'Gincanas Empresariais Ativas']);

    }

}
