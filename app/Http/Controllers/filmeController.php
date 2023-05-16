<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use Illuminate\Support\Facades\Redirect; 


class filmeController extends Controller
{
    public function buscaCadastroFilme(){

        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request) {
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme'=> 'string|required',
            'dtlancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capa' => 'file|required',
        ]);


    
        $file=$dadosFilme['capa'];
        $path =$file ->store ('capaf', 'public');
        $dadosFilme['capa']=$path;
        
        Filme::create($dadosFilme); 

        return Redirect::route('cadastro-filme');

    }

    public function buscarFilme() {
        return view('gerenciadorFilme', ['dadosfilme']); 
    }
     
    public function MostrarGerenciadorFilme(Request $request){
        $dadosFilme = Filme::all(); 
        //dd($dadosfuncionarios);
        
        
        $dadosFilme = Filme::query(); 
        $dadosFilme->when($request->nomefilme, function($query, $nomefilme){
            $query->where('nomefilme', 'like', '%'.$nomefilme.'%');
        });
        $dadosFilme = $dadosFilme ->get(); 
           

        return view('gerenciadorFilme',['dadosfilme'=>$dadosFilme]);
    }


    public function ApagarFilme(Filme $registrosFilme){
        $registrosFilme->delete();
        return Redirect::route('gerenciar-filme');
    }

    public function MostrarRegistrosFilme(Filme $registrosFilme){
        return view('xxx',['registrosFilme'=>$registrosFilme]);
    }

    
    public function AlterarBancoFilme(Filme $registrosFilme, Request $request){
        $dadosfilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme'=> 'string|required',
            'dtlancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capa' => 'file|required',

        ]);        

        $registrosFilme->fill($dadosfilme); 
        $registrosFilme->save();
        return Redirect::route('gerenciar-filme');    

        }
}