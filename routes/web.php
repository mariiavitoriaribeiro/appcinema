<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroFilme;
use App\Http\Controllers\cadastroFuncionario;
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


Route::get('/cadastro-filme',[cadastroFilme::class,'buscaCadastroFilme']);

Route::get('/cadastro-funcionario',[cadastroFuncionario::class,'buscaCadastroFuncionario'])->name('buscaCadastroFuncionario');

Route::post('/cadastro-funcionario',[cadastroFuncionario::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/cadastro-sala',[cadastroSala::class,'buscaCadastroSala']);

Route::get('/cadastro-filme',[cadastroFilme::class,'buscaCadastroFilme'])->name('buscaCadastroFilme');
Route::post('/cadastro-filme',[cadastroFilme::class,'cadastrarFilme'])->name('cadastro-filme');

