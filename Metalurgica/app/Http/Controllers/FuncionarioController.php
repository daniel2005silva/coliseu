<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;
use App\ExperienciaProfissional;
use Illuminate\Support\Facades\DB;

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
                'dt_nascimento' => 'required', 
                'estado_civil' => 'required|max:50', 
                'nacionalidade' => 'required|max:50',    // nome obrigatório e no máximo 100 caracteres
                'pais_onde_mora' => 'required|max:50',
                'estado_onde_mora' => 'required|max:50', 
                'cidade_onde_mora' => 'required|max:50',    
                'bairro_onde_mora' => 'required|max:50', 
                'rua_onde_mora' => 'required|max:50',  
                'numero_onde_mora' => 'required',   
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
                'dt_nascimento.*' => 'Data de nascimento é obrigatório.',
                'estado_civil.*' => 'Estado Civil é obrigatório de tamanho máximo de 50 caracteres.',
                'nacionalidade.*' => 'Nacionalidade é obrigatório de tamanho máximo de 50 caracteres.',
                'pais_onde_mora.*' => 'País onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'estado_onde_mora.*' => 'Estado onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'cidade_onde_mora.*' => 'Cidade onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'bairro_onde_mora.*' => 'Bairro onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'rua_onde_mora.*' => 'Rua onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                 'numero_onde_mora.*' => 'Número onde mora é obrigatório.',
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
        $f=Funcionario::find($id);
        $e= $f->experiencias()->get();
        $t = DB::select('select treinamentos.*, funcionario_treinamentos.treinamento_id as pivot_treinamento_id, funcionario_treinamentos.funcionario_id as pivot_funcionario_id,
            fornecedors.empresa as empresa
            from  fornecedors, treinamentos inner join funcionario_treinamentos on treinamentos.id = funcionario_treinamentos.treinamento_id where funcionario_treinamentos.funcionario_id = ? and treinamentos.fornecedor_id = fornecedors.id', [$id]);
        return View('funcionario.show')->with('funcionario',$f)->with('experiencias',$e)->with('treinamentos',$t);
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
                'dt_nascimento' => 'required', 
                'estado_civil' => 'required|max:50', 
                'nacionalidade' => 'required|max:50',    // nome obrigatório e no máximo 100 caracteres
                'pais_onde_mora' => 'required|max:50',
                'estado_onde_mora' => 'required|max:50', 
                'cidade_onde_mora' => 'required|max:50',    
                'bairro_onde_mora' => 'required|max:50', 
                'rua_onde_mora' => 'required|max:50',  
                'numero_onde_mora' => 'required',   
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
                 'nome.*' => 'Nome é obrigatório de tamanho máximo de 50 caracteres.',
                'sobrenome.*' => 'Sobrenome é obrigatório de tamanho máximo de 100 caracteres.',
                'dt_nascimento.*' => 'Data de nascimento é obrigatório.',
                'estado_civil.*' => 'Estado Civil é obrigatório de tamanho máximo de 50 caracteres.',
                'nacionalidade.*' => 'Nacionalidade é obrigatório de tamanho máximo de 50 caracteres.',
                'pais_onde_mora.*' => 'País onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'estado_onde_mora.*' => 'Estado onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'cidade_onde_mora.*' => 'Cidade onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'bairro_onde_mora.*' => 'Bairro onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                'rua_onde_mora.*' => 'Rua onde mora é obrigatório de tamanho máximo de 50 caracteres.',
                 'numero_onde_mora.*' => 'Número onde mora é obrigatório.',
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
        $f=Funcionario::find($id);
        $experiencias = $f->experiencias()->get();
        foreach ($experiencias as $e) {
            ExperienciaProfissional::destroy($e->id);
        }
        Funcionario::destroy($id);
        return redirect('/funcionario');
    }
}
