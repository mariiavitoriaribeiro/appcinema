<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Poltrona;


class poltronaController extends Controller
{

    //Necessário para chamar a view.
    public function buscarCadastroPoltrona(){
        return View('cadastroPoltrona');
    }
    

    public function cadastrarPoltrona(Request $request){
        $dadospoltronas = $request->validate(
            [
                'numpol'=> 'string|required',
                'nomeclie'=> 'string|required'
            ]
            );

        Poltrona::create($dadospoltronas);
        return Redirect::route('cadastro-poltrona');
    }


    // Tenho que criar a página que irá mostrar as poltronas para isto funcionar.
    public function MostrarGerenciadorPoltrona(Request $request){
        $dadospoltronas = Poltrona::all();
       // dd($dadosfuncionarios);

        $dadospoltronas = Poltrona::query();
        $dadospoltronas->when($request->nomeclie, function($query,$nomeclie ){
            $query->where('nomeclie','like', '%'.$nomeclie.'%');
        }); 

        $dadospoltronas = $dadospoltronas->get();
        
//ALTERAR ISSO. (Feito).
        return view('gerenciadorPoltrona',['dadospoltrona'=>$dadospoltronas]);
        
    }



    public function ApagarPoltrona(Poltrona $registrosPoltronas){
        $registrosPoltronas->delete();
    
           return Redirect::route('gerenciar-poltrona');
        }


        public function MostrarRegistrosPoltrona(Poltrona $registrosPoltronas){
            return view('xxxx',['registrosPoltronas'=>$registrosPoltronas]);
    
            
        }


        public function AlterarBancoPoltrona(Poltrona  $registrosPoltronas, Request $request){
            $dadospoltronas = $request->validate([
                'numpol' => 'string|required',
                'nomeclie' => 'string|required'

            ]);
            
        $registrosPoltronas->fill($dadospoltronas);
        $registrosPoltronas->save();

        //Isso terá que ser arrumado depois, quando criar uma route no web.
        return Redirect::route('gerenciar-poltrona');


}





}
?>