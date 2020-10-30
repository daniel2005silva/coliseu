<?php

use Illuminate\Support\Facades\Route;
use App\Treinamento;
use App\Funcionario;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('funcionario','FuncionarioController');

Route::resource('treinamento','TreinamentoController');

Route::resource('fornecedor','FornecedorController');

Route::resource('experienciaprofissional','ExperienciaProfissionalController');

Route::resource('turma','FuncionarioTreinamentoController');

Route::get('/turma/create/{id}', 'FuncionarioTreinamentoController@create'/*function ($id) {
	$funcionarios = Funcionario::paginate(5);
	$treinamento = Treinamento::find($id);
    return View('turma/create')->with('treinamento',$treinamento)->with('funcionarios',$funcionarios);
}*/);

Route::get('/experienciaprofissional/create/{id}', function ($id) {
	$funcionario_id = Funcionario::find($id);
    return View('experienciaProfissional/create')->with('funcionario_id',$funcionario_id);
});