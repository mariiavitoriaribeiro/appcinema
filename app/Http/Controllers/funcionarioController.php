<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class funcionarioController extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }
    public function cadastrarFuncionario(Request $request)
    {
        $dadosfuncionarios = $request->validate(
        [
        'emailfun'=>'string|required',
        'nomefun'=>'string|required',
        'senhafun'=>'string|required',
        'whatsappfun'=>'string|required',
        'cpffun'=>'string|required'
        ]
    );
        Funcionario::create($dadosfuncionarios);
        return Redirect::route('cadastro-funcionario');
     }
     
    public function buscarFuncionario() {
        return view('gerenciadorFuncionario'); 
    }

    public function MostrarGerenciadorFuncionario(Request $request){
        $dadosFuncionarios = Funcionario::all(); 
        dd(dadosfuncionarios);

        /*
        
        $dadosfuncionarios = Funcionario::query(); 
        $dadosfuncionarios->when($request->nomefun, function($query, $nomefuncionario){
            $query->where('nomefun', 'like', '%'.$nomefuncionario.'%');
        });
        $dadosFuncionarios = $dadosFuncionarios->get(); 
        return view('gerenciadorFuncionario');
        */ 
    }
}
