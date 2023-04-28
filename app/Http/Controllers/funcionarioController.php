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
        $dadosFuncionario = $request->validate(
        [
        'emailfun'=>'string|required',
        'nomefun'=>'string|required',
        'senhafun'=>'string|required',
        'whatsappfun'=>'string|required',
        'cpffun'=>'string|required'
        ]
    );
        Funcionario::create($dadosFuncionario);
        return Redirect::route('cadastro-funcionario');
     }
     
     
    public function buscarFuncionario() {
        return view('gerenciadorFuncionario', ['dadosfuncionario']); 
    }
     
    public function MostrarGerenciadorFuncionario(Request $request){
        $dadosFuncionario = Funcionario::all(); 
        //dd($dadosfuncionarios);
        
        
        $dadosFuncionario = Funcionario::query(); 
        $dadosFuncionario->when($request->nomefun, function($query, $nomefuncionario){
            $query->where('nomefun', 'like', '%'.$nomefuncionario.'%');
        });
        $dadosFuncionario = $dadosFuncionario ->get(); 
           

        return view('gerenciadorFuncionario',['dadosfuncionario'=>$dadosFuncionario]);
    }


    public function ApagarFuncionario(Funcionario $registrosFuncionarios){
        $registrosFuncionarios->delete();
        return Redirect::route('gerenciar-funcionario');
    }

    public function MostrarRegistrosFuncionario(Funcionario $registrosFuncionarios){
        return view('xxx',['registrosFuncionarios'=>$registrosFuncionarios]);
    }

    public function AlterarBancoFuncionario(Funcionario $registrosFuncionarios){
     $dadosfuncionarios =$request->validate([
        'emailfun'=>'string|required',
        'nomefun'=>'string|required',
        'senhafun'=>'string|required',
        'whatsappfun'=>'string|required',
        'cpffun'=>'string|required'
     ]);
     $registrosFuncionarios->fill($dadosfuncionarios);
     $registrosFuncionarios->save();

    return Redirect::route('gerenciar-funcionario');
    }
}
