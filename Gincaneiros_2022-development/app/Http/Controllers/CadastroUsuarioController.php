<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{

    // Action Principal

    public function metodoCadastroUsuario(){

        return view('site.cadastroUsuario', ['titulo'=>'Cadastro de Novo Usuário']);

    }

}
