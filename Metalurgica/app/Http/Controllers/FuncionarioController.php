<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // busca dois usuários por vez no BD
        $funcionarios = Funcionario::paginate(5);
        // Aciona View, passando a ela coleção dos funcionários obtidos no BD   
        return View('funcionario.index')->with('funcionarios',$funcionarios); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('funcionario.create');
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
                'nome' => 'required|max:50',  
                'sobrenome' => 'required|max:100', 
                'estado_civil' => 'required|max:50', 
                'pais' => 'required|max:50',    // nome obrigatório e no máximo 100 caracteres
                'estado' => 'required|max:50', 
                'cidade' => 'required|max:50',    
                'bairro' => 'required|max:50', 
                'rua' => 'required|max:50',   
                'cargo_ocupado' => 'required|max:100',
                'cargo_desejado' => 'required|max:100',
                'responsabilidades' => 'required|max:1000',
                'formacao_academica' => 'required|max:500',
                'certificados' => 'required|max:100',
                'idiomas' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'nome.*' => 'Nome é obrigatório de tamanho máximo de 50 caracteres.',
                'sobrenome.*' => 'Sobrenome é obrigatório de tamanho máximo de 100 caracteres.',
                'estado_civil.*' => 'Estado Civil é obrigatório de tamanho máximo de 50 caracteres.',
                'pais.*' => 'País é obrigatório de tamanho máximo de 50 caracteres.',
                'estado.*' => 'Estado é obrigatório de tamanho máximo de 50 caracteres.',
                'cidade.*' => 'Cidade é obrigatório de tamanho máximo de 50 caracteres.',
                'bairro.*' => 'Bairro é obrigatório de tamanho máximo de 50 caracteres.',
                'rua.*' => 'Rua é obrigatório de tamanho máximo de 50 caracteres.',
                'cargo_ocupado.*' => 'Cargo Ocupado é obrigatório de tamanho máximo de 100 caracteres.',
                'cargo_desejado.*' => 'Cargo Desejado é obrigatório de tamanho máximo de 100 caracteres.',
                'responsabilidades.*' => 'Responsabilidades é obrigatório de tamanho máximo de 1000 caracteres.',
                'formacao_academica.*' => 'Formação Acadêmica é obrigatório de tamanho máximo de 500 caracteres.',
                'certificados.*' => 'Certificados é obrigatório de tamanho máximo de 100 caracteres.',
                'idiomas.*' => 'Idiomas é obrigatório de tamanho máximo de 50 caracteres.'
            ]
        );
        // Cria funcionário no BD
        Funcionario::create($request->all());
        // Redireciona para view que lista os funcionários cadastrados
        return redirect('/funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View('funcionario.show')->with('funcionario',Funcionario::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return View('funcionario.edit')->with('funcionario',Funcionario::find($id));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'nome' => 'required|max:50',  
                'sobrenome' => 'required|max:100', 
                'estado_civil' => 'required|max:50', 
                'pais' => 'required|max:50',    // nome obrigatório e no máximo 100 caracteres
                'estado' => 'required|max:50', 
                'cidade' => 'required|max:50',    
                'bairro' => 'required|max:50', 
                'rua' => 'required|max:50',   
                'cargo_ocupado' => 'required|max:100',
                'cargo_desejado' => 'required|max:100',
                'responsabilidades' => 'required|max:1000',
                'formacao_academica' => 'required|max:500',
                'certificados' => 'required|max:100',
                'idiomas' => 'required|max:50'
            ],
            // mensagens de erro quando a validação falha.
            [
                'nome.*' => 'Nome é obrigatório de tamanho máximo de 50 caracteres.',
                'sobrenome.*' => 'Sobrenome é obrigatório de tamanho máximo de 100 caracteres.',
                'estado_civil.*' => 'Estado Civil é obrigatório de tamanho máximo de 50 caracteres.',
                'pais.*' => 'País é obrigatório de tamanho máximo de 50 caracteres.',
                'estado.*' => 'Estado é obrigatório de tamanho máximo de 50 caracteres.',
                'cidade.*' => 'Cidade é obrigatório de tamanho máximo de 50 caracteres.',
                'bairro.*' => 'Bairro é obrigatório de tamanho máximo de 50 caracteres.',
                'rua.*' => 'Rua é obrigatório de tamanho máximo de 50 caracteres.',
                'cargo_ocupado.*' => 'Cargo Ocupado é obrigatório de tamanho máximo de 100 caracteres.',
                'cargo_desejado.*' => 'Cargo Desejado é obrigatório de tamanho máximo de 100 caracteres.',
                'responsabilidades.*' => 'Responsabilidades é obrigatório de tamanho máximo de 1000 caracteres.',
                'formacao_academica.*' => 'Formação Acadêmica é obrigatório de tamanho máximo de 500 caracteres.',
                'certificados.*' => 'Certificados é obrigatório de tamanho máximo de 100 caracteres.',
                'idiomas.*' => 'Idiomas é obrigatório de tamanho máximo de 50 caracteres.'
            ]
        );
        $funcionario = Funcionario::find($id);  // recupera funcionário do BD
        $funcionario->update($request->all());  // atualiza (grava) novos dados do funcionário
        return redirect('/funcionario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect('/funcionario');
    }
}
