<?php

namespace App\Http\Controllers;

use App\Fornecedor;
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
         return View('fornecedor.show')->with('fornecedor',Fornecedor::find($id));
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
        Fornecedor::destroy($id);
        return redirect('/fornecedor');
    }
}
