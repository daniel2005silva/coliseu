<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use App\Treinamento;
use App\Funcionario_treinamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fornecedores = Fornecedor::paginate(5);
        return View('fornecedor.index')->with('fornecedores',$fornecedores); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('fornecedor.create');
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
                'empresa' => 'required|max:50',  
                'cnpj' => 'required|max:100'
            ],
            // mensagens de erro quando a validação falha.
            [
                'empresa.*' => 'Empresa é obrigatório de tamanho máximo de 50 caracteres.',
                'cnpj.*' => 'CNPJ é obrigatório.'
            ]
             );
        Fornecedor::create($request->all());
        return redirect('/fornecedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $f = Fornecedor::find($id);
        $t= $f->treinamentos()->get();
         return View('fornecedor.show')->with('fornecedor',$f)->with('treinamentos',$t);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('fornecedor.edit')->with('fornecedor',Fornecedor::find($id)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,
            [
                'empresa' => 'required|max:50',  
                'cnpj' => 'required|max:100'
            ],
            // mensagens de erro quando a validação falha.
            [
                'empresa.*' => 'Empresa é obrigatório de tamanho máximo de 50 caracteres.',
                'cnpj.*' => 'CNPJ é obrigatório.'
            ]
             );
        $fornecedor = Fornecedor::find($id);  // recupera funcionário do BD
        $fornecedor->update($request->all());  // atualiza (grava) novos dados do funcionário
        return redirect('/fornecedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forn = Fornecedor::find($id);
        $treinamentos = $forn->treinamentos()->get();
        foreach ($treinamentos as $t) {
            $treinamentosFuncionario = DB::select('select funcionario_treinamentos.*
            from  fornecedors, treinamentos inner join funcionario_treinamentos on treinamentos.id = ? where  treinamentos.fornecedor_id = fornecedors.id', [$t->id]);
            foreach ($treinamentosFuncionario as $tf) {
                Funcionario_treinamento::destroy($tf->id);
            }
           Treinamento::destroy($t->id);
        }
        Fornecedor::destroy($id);
        return redirect('/fornecedor');
    }
}
