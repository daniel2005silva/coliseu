<?php

namespace App\Http\Controllers;

use App\Treinamento;
use App\Turma;
use App\Funcionario;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::paginate(5);
        return View('turma.index')->with('turmas',$turmas );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_treinamento)
    {
    	$funcionarios = Funcionario::paginate(5);
        $treinamento = Treinamento::find($id_treinamento);
        $turmas = Turmas::paginate(5);
        return View('turma.create')->with('turmas',$turmas)->with('treinamento',$treinamento)->with('funcionarios',$funcionarios); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,
            [
                'funcionario_id' => 'required',  
                'treinamento_id' => 'required'
            ],
            // mensagens de erro quando a validação falha.
            [
                'funcionario_id.*' => 'Id do funcionário é obrigatório.',
                'treinamento_id.*' => 'Id do treinamento é obrigatório.'
            ]
        );
        Turma::create($request->all());
        return redirect('/turma/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        $treinamento = $turma->treinamento()->get();
    	$funcionarios = $turma->funcionario()->get();
        return View('turma.show')->with('turma',$turma)->with('funcionarios',$funcionarios)->with('treinamento',$treinamento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$funcionarios = Funcionario::paginate(5);
        $turmas = Turma::paginate(5);
        $treinamento = Treinamento::find(Turma::find($id)->treinamento_id);
        return View('turma.edit')->with('turma',Turma::find($id))->with('treinamento',$treinamento)->with('funcionarios',$funcionarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
             [
                'funcionario_id' => 'required',  
                'treinamento_id' => 'required'
            ],
            // mensagens de erro quando a validação falha.
            [
                'funcionario_id.*' => 'Id do funcionário é obrigatório.',
                'treinamento_id.*' => 'Id do treinamento é obrigatório.'
            ]
        );
        $turma = Turma::find($id);  
        $turma->update($request->all()); 
        return redirect('/turma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Treinamento::destroy($id);
        return redirect('/treinamento');
    }
}
