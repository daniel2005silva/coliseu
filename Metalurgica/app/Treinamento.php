<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinamento extends Model
{
    protected $fillable = ['fornecedor_id', 'treinamento', 'descricao', 'conteudo', 'dt_inicio', 'dt_termino', 'tipo'];

    public function fornecedor() {
    	return $this->belongsTo('App\Fornecedor');
    }

     public function funcionarios() {
    	return $this->belongsToMany('App\Funcionario');
    }
    
    public function turma() {
    	return $this->belongsTo('App\FuncionarioTreinamento');
    }
}
