<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\cadastrofilmeModel;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validade([
    'filme' =>'string|required', 
    'atores'=>'string|required',
    'dataLancamento'=>'string|requoired', 
    'sinopse'=>'string|required', 
    'capa'=>'string|required']);

    cadastroFilmeModel::create ($dadosFilme);
    return Redirect::route ('/home');
    }

}
