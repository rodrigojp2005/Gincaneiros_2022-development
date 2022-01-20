<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarQuestoesGincanaController extends Controller
{

    // Action Principal
    
    public function metodoEditarQuestoesGincana(){

        return view('usuario.editarQuestoesGincana', ['titulo'=>'Edição de Questões de Gincana']);

    }

}
