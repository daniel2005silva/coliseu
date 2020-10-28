<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['funcionario_id', 'treinamento_id'];

     public function funcionario() {
    	return $this->belongsTo('App\Funcionario');
    }

     public function treinamento() {
    	return $this->belongsTo('App\Treinamento');
    }
}
