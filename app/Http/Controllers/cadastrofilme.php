<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\FIlme;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate(
    [
    'filme' =>'string|required', 
    'atores'=>'string|required',
    'datalancamento'=>'date|requoired', 
    'sinopse'=>'string|required'
    ]);

    Filme::create ($dadosFilmes);
    return Redirect::route ('/cadastro-filme');
    }

}
