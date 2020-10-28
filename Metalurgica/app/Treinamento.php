<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinamento extends Model
{
    protected $fillable = ['fornecedor_id', 'treinamento', 'descricao', 'conteudo', 'dt_inicio', 'dt_termino', 'tipo'];

    public function fornecedor() {
    	return $this->belongsTo('App\Fornecedor');
    }

    
}
