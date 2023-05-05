<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\funcionarioController;
use App\Http\Controllers\cadastroSala;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro-filme',[filmeController::class,'buscaCadastroFilme'])->name('cadastro-filme');
Route::post('/cadastro-filme',[filmeController::class, 'cadastrarFilme'])->name('cadastro-filme'); 
Route::get('/cadastro-funcionario',[funcionarioController::class,'buscaCadastroFuncionario']);
Route::post('/cadastro-funcionario',[funcionarioController::class, 'cadastrarFuncionario'])->name('cadastro-funcionario'); 
Route::get('/cadastro-sala',[cadastroSala::class,'buscaCadastroSala']);
Route::get('/gerenciar-funcionario',[funcionarioController::class,'MostrarGerenciadorFuncionario'])->name('gerenciar-funcionario');
Route::delete('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class, 'ApagarFuncionario'])->name('apagar-funcionario');
Route::get('/alterar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'MostrarRegistroFuncionario'])->name('mostrar-funcionario');
Route::put('/garenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'AlterarBancoFuncionario'])->name('alterar-banco-funcionario');

Route::get('/gerenciar-filme',[filmeController::class,'MostrarGerenciadorFilme'])->name('gerenciar-filme');
Route::delete('/gerenciar-filme/{registrosFilme}',[filmeController::class, 'ApagarFilme'])->name('apagar-filme');
Route::get('/alterar-filme/{registrosFilme}',[filmeController::class,'MostrarRegistroFilme'])->name('mostrar-filme');
Route::put('/garenciar-filme/{registrosFilme}',[filmeController::class,'AlterarBancoFilme'])->name('alterar-banco-filme');