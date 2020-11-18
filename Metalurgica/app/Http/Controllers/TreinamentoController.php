<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use App\Treinamento;
use App\Funcionario_treinamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreinamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $treinamentos = Treinamento::paginate(5);
        $totalTreinamentos = DB::select('select count(id) as total from  treinamentos');
        return View('treinamento.index')->with('treinamentos',$treinamentos )->with('totalTreinamentos',$totalTreinamentos ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = Fornecedor::all();
        return View('treinamento.create')->with('fornecedores',$fornecedores); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida os dados em $request
        $this->validate($request,
            [
                'fornecedor_id' => 'required',
                'treinamento' => 'required|max:100',  
                'descricao' => 'required|max:300', 
                'conteudo' => 'required|max:1000', 
                'dt_inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'dt_termino' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'fornecedor_id.*' => 'É preciso ter o nome do fornecedor. Caso não exista crie um fornecedor.',
                'treinamento.*' => 'Nome é obrigatório de tamanho máximo de 100 caracteres.',
                'descricao.*' => 'Descrição é obrigatório de tamanho máximo de 300 caracteres.',
                'conteudo.*' => 'Conteúdo é obrigatório de tamanho máximo de 1000 caracteres.',
                'dt_inicio.*' => 'Data de início é obrigatório.',
                'dt_termino.*' => 'Data de termino é obrigatório.',
                'tipo.*' => 'Tipo é obrigatório de tamanho máximo de 50 caracteres.'
            ]
        );
        Treinamento::create($request->all());
        return redirect('/treinamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t = Treinamento::find($id);
        $funcionarios = DB::select('select funcionarios.*, funcionario_treinamentos.treinamento_id as pivot_treinamento_id, funcionario_treinamentos.funcionario_id as pivot_funcionario_id,
            funcionario_treinamentos.id as turma_id
            from funcionarios inner join funcionario_treinamentos on funcionarios.id = funcionario_treinamentos.funcionario_id where funcionario_treinamentos.treinamento_id = ?', [$id]);
         return View('treinamento.show')->with('treinamento', $t)->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedores = Fornecedor::paginate(5);
        return View('treinamento.edit')->with('treinamento',Treinamento::find($id))->with('fornecedores',$fornecedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
             [
                'fornecedor_id' => 'required',
                'treinamento' => 'required|max:100',  
                'descricao' => 'required|max:300', 
                'conteudo' => 'required|max:1000', 
                'dt_inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'dt_termino' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'fornecedor_id.*' => 'É preciso ter o nome do fornecedor. Caso não exista crie um fornecedor.',
                'treinamento.*' => 'Nome é obrigatório de tamanho máximo de 100 caracteres.',
                'descricao.*' => 'Descrição é obrigatório de tamanho máximo de 300 caracteres.',
                'conteudo.*' => 'Conteúdo é obrigatório de tamanho máximo de 1000 caracteres.',
                'dt_inicio.*' => 'Data de início é obrigatório.',
                'dt_termino.*' => 'Data de termino é obrigatório.',
                'tipo.*' => 'Tipo é obrigatório de tamanho máximo de 50 caracteres.'
            ]
        );
        $treinamento = Treinamento::find($id);  
        $treinamento->update($request->all()); 
        return redirect('/treinamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treinamento  $treinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Treinamento::find($id);
        $funcionarios = DB::select('select funcionarios.* from funcionarios inner join funcionario_treinamentos on funcionarios.id = funcionario_treinamentos.funcionario_id where funcionario_treinamentos.treinamento_id = ?', [$id]);
        foreach($funcionarios as $f) {
            $valores = DB::select('select funcionario_treinamentos.id from funcionarios inner join funcionario_treinamentos on funcionarios.id = ? where funcionario_treinamentos.treinamento_id = ?', [$f->id, $id]);
             foreach($valores as $v) {
                Funcionario_treinamento::destroy($v->id);
             }
            
        }
        Treinamento::destroy($id);
        return redirect('/treinamento');

    }
}
