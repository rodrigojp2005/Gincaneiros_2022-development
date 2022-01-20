<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    // Action Principal
    
    public function metodoLogin(){

        return view('site.login', ['titulo'=>'Login']);

    }

}
