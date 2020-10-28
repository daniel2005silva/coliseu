<?php

namespace App\Http\Controllers;

use App\ExperienciaProfissional;
use Illuminate\Http\Request;

class ExperienciaProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experienciasprofissionais = ExperienciaProfissional::paginate(5);
        return View('experienciaprofissional.index')->with('experienciasprofissionais',$experienciasprofissionais); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($funcionario_id)
    {
        return View('experienciaprofissional.create')->with('funcionario_id', $funcionario_id);
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
                'empresa' => 'required|max:100',    
                'cargo_ocupado' => 'required|max:100',
                'ano' => 'required',
                'responsabilidades' => 'required|max:1000'
            ],
            // mensagens de erro quando a validação falha.
            [
                'funcionario_id.*' => 'Nome do funcionário é obrigatório.',
                'empresa.*' => 'Nome da empresa é obrigatório de tamanho máximo de 100 caracteres.',
                'cargo_ocupado.*' => 'Cargo ocupado é obrigatório de tamanho máximo de 100 caracteres.',
                'ano.*' => 'Ano do cargo é obrigatório.',
                'responsabilidades.*' => 'Responsabilidades é obrigatório de tamanho máximo de 1000 caracteres.'
            ]
        );
        ExperienciaProfissional::create($request->all());
        return redirect('../../funcionario/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExperienciaProfissional  $experienciaProfissional
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $e=ExperienciaProfissional::find($id);
        $f= $e->funcionario()->get();
        return View('experienciaprofissional.show')->with('experienciaprofissional',ExperienciaProfissional::find($id))->with('funcionario',$f);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExperienciaProfissional  $experienciaProfissional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $e=ExperienciaProfissional::find($id);
        $f= $e->funcionario()->get();
        return View('experienciaprofissional.edit')->with('experienciasprofissionais',ExperienciaProfissional::find($id))->with('funcionario',$f);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExperienciaProfissional  $experienciaProfissional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,
            [
                'funcionario_id' => 'required',  
                'empresa' => 'required|max:100',    
                'cargo_ocupado' => 'required|max:100',
                'ano' => 'required',
                'responsabilidades' => 'required|max:1000'
            ],
            // mensagens de erro quando a validação falha.
            [
                'funcionario_id.*' => 'Nome do funcionário é obrigatório.',
                'empresa.*' => 'Nome da empresa é obrigatório de tamanho máximo de 100 caracteres.',
                'cargo_ocupado.*' => 'Cargo ocupado é obrigatório de tamanho máximo de 100 caracteres.',
                'ano.*' => 'Ano do cargo é obrigatório.',
                'responsabilidades.*' => 'Responsabilidades é obrigatório de tamanho máximo de 1000 caracteres.'
            ]
        );
        $experienciasprofissionais = ExperienciaProfissional::find($id);  
        $experienciasprofissionais->update($request->all()); 
        return redirect('../../funcionario/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExperienciaProfissional  $experienciaProfissional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExperienciaProfissional::destroy($id);
        return redirect('../../funcionario/');
    }
}
