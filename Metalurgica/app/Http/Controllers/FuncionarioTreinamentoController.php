<?php

namespace App\Http\Controllers;

use App\Funcionario_treinamento;
use App\Funcionario;
use App\Treinamento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FuncionarioTreinamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Funcionario_treinamento::paginate(5);
        return View('turma.index')->with('turmas',$turmas );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_treinamento)
    {
        $funcionarios = DB::select('select * from funcionarios where id not in (select f.id from funcionarios f, funcionario_treinamentos ft where f.id = ft.funcionario_id and ft.treinamento_id = ?)', [$id_treinamento]);
        //$funcionarios = Funcionario::all();
        $treinamento = Treinamento::find($id_treinamento);
        $turmas = Funcionario_treinamento::all();
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
        Funcionario_treinamento::create($request->all());
        $treinamento = Treinamento::find($request->treinamento_id);
        $t_id = $request->treinamento_id;
       $funcionarios = DB::select('select * from funcionarios where id not in (select f.id from funcionarios f, funcionario_treinamentos ft where f.id = ft.funcionario_id and ft.treinamento_id = ?)', [$t_id]);
        return View('turma/create')->with('treinamento', $treinamento)->with('funcionarios', $funcionarios); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario_treinamento  $funcionario_treinamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Funcionario_treinamento::find($id);
        $treinamento = $turma->treinamento()->get();
        $funcionarios = $turma->funcionario()->get();
        return View('turma.show')->with('turma',$turma)->with('funcionarios',$funcionarios)->with('treinamento',$treinamento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario_treinamento  $funcionario_treinamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionarios = Funcionario::all();
        $turmas = Funcionario_treinamento::all();
        $treinamento = Treinamento::find(Turma::find($id)->treinamento_id);
        return View('turma.edit')->with('turma',Turma::find($id))->with('treinamento',$treinamento)->with('funcionarios',$funcionarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario_treinamento  $funcionario_treinamento
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
        $turma = Funcionario_treinamento::find($id);  
        $turma->update($request->all()); 
        return redirect('/turma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario_treinamento  $funcionario_treinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turma = Funcionario_treinamento::find($id);
        Funcionario_treinamento::destroy($id);
        $t = $turma->treinamento_id; 
        //return this.show(intval($t));
        return redirect()->route('treinamento.show', [$t]);
    }
}
