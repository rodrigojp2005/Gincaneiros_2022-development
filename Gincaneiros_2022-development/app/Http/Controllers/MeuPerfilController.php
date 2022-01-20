<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuPerfilController extends Controller
{

    // Action Principal

    public function metodoMeuPerfil(){
 
        return view('usuario.meuPerfil', ['titulo'=>'Meu Perfil']);

    }

}
