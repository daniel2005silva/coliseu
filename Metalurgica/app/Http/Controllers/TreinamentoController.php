<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use App\Treinamento;
use Illuminate\Http\Request;

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
        return View('treinamento.index')->with('treinamentos',$treinamentos ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = Fornecedor::paginate(5);
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
                'treinamento' => 'required|max:100',  
                'descricao' => 'required|max:300', 
                'conteudo' => 'required|max:1000', 
                'dt_inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'dt_termino' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
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
         return View('treinamento.show')->with('treinamento',Treinamento::find($id));
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
                'treinamento' => 'required|max:100',  
                'descricao' => 'required|max:300', 
                'conteudo' => 'required|max:1000', 
                'dt_inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'dt_termino' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
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
        Treinamento::destroy($id);
        return redirect('/treinamento');
    }
}
