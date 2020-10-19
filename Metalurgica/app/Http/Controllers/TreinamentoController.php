<?php

namespace App\Http\Controllers;

use App\Treinamento;
use Illuminate\Http\Request;

class TreinamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$treinamentos = Treinamento::paginate(5);
        return View('treinamento.index')->with('treinamentos',Treinamento::find($id)); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('treinamento.create');
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
                'nome' => 'required|max:100',  
                'fornecedor' => 'required|max:100', 
                'conteudo' => 'required|max:1000', 
                'inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'fim' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'nome.*' => 'Nome é obrigatório de tamanho máximo de 100 caracteres.',
                'fornecedor.*' => 'Fornecedor é obrigatório de tamanho máximo de 100 caracteres.',
                'conteudo.*' => 'Conteúdo é obrigatório de tamanho máximo de 1000 caracteres.',
                'inicio.*' => 'Início é obrigatório.',
                'fim.*' => 'Fim é obrigatório.',
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
        return View('treinamento.edit')->with('treinamento',Treinamento::find($id));
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
                'nome' => 'required|max:100',  
                'fornecedor' => 'required|max:100', 
                'conteudo' => 'required|max:1000', 
                'inicio' => 'required',    // nome obrigatório e no máximo 100 caracteres
                'fim' => 'required', 
                'tipo' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'nome.*' => 'Nome é obrigatório de tamanho máximo de 100 caracteres.',
                'fornecedor.*' => 'Fornecedor é obrigatório de tamanho máximo de 100 caracteres.',
                'conteudo.*' => 'Conteúdo é obrigatório de tamanho máximo de 1000 caracteres.',
                'inicio.*' => 'Início é obrigatório.',
                'fim.*' => 'Fim é obrigatório.',
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
